<script>
import {
    XIcon,
    CheckIcon
} from 'vue-feather-icons';

import MenuAccount from './MenuPublic'
import Shedule from '../../../components/schedule';

export default {
    data(){
        return {
            loading: true,
            active: 'Servicio',
            user: {},
            categoryUser: null,
            menuOptions: [
                {
                    title: 'Servicio',
                    iconClass: 'uil uil-file'
                },
                {
                    title: 'Perfil',
                    iconClass: 'uil uil-dashboard'
                },
                {
                    title: 'Horario',
                    iconClass: 'uil uil-users-alt'
                },
                {
                    title: 'Ubicacion',
                    iconClass: 'uil uil-file'
                },
                {
                    title: 'Valoracion',
                    iconClass: 'uil uil-envelope-star'
                }
            ],
            sheduleData: []
        }
    },
    components: {
        MenuAccount,
        CheckIcon,
        XIcon,
        Shedule
    },
    async created(){
        const id = this.$route.params.id;
        // console.log('ro', this.$route)
        const response = await this.callApi('get', `/app/categoriesUser/${id}`);
        if (response.status === 200){

            let mapTimesAvailable = {};

            response.data.times_available.forEach( time => {
                let doc = mapTimesAvailable[time.hours]
                if (!doc){
                    mapTimesAvailable[time.hours] = { days: [ time.day ]}
                }else {
                    mapTimesAvailable[time.hours].days.push(time.day)
                }
            })

            this.categoryUser = {
                ...response.data,
                times_available: mapTimesAvailable
            };

            console.log('categoryUser', response.data)
            this.loading = false;
        }
    },

    methods: {
        changeHandleMenu(active){
            this.active = active;
        },
        setSheduleData(values){
            this.sheduleData = values;
        },
        showModalSendMessage(item){
            this.$bvModal.show('modalSendMessage')
        },
        showModalSendContract(item){
            this.$bvModal.show('modalSendContract')
        },
    }
}
</script>

<template>
<div v-if="!loading">
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100" style="background: url('/images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-left text-center">
                                    <img
                                        :src="categoryUser.user.avatar ? '/' + categoryUser.user.avatar : '/images/avatarDefault.jpg'"
                                        class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt=""
                                    >
                                </div>
                                <!--end col-->

                                <div class="col-lg-6 col-md-7 welcome">
                                    <div class="row align-items-end" >
                                        <div class="col-12 text-md-left text-center mt-4 mt-sm-0">
                                            <h1 class="title mb-0 font-weight-bold"><span class="text-capitalize">{{categoryUser.user.name}}</span></h1>
                                            <p class="text-muted h6 mr-2">{{user.description}}</p>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 col-md-12" >
                                    <div class="d-flex justify-content-center justify-content-md-center" >
                                        <div >
                                            <b-button
                                                pill
                                                variant="outline-secondary"
                                                @click="showModalSendContract"
                                            >
                                                Contratar
                                            </b-button>

                                        </div>
                                        <div class="ml-2">
                                            <b-button
                                                pill
                                                variant="outline-secondary"
                                                @click="showModalSendMessage"
                                            >
                                                Enviar Mensaje
                                            </b-button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->


                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--ed container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Profile Start -->
    <section class=" mt-5 mb-5">
        <div class="container mt-lg-3">
            <div class="row">
                <!-- Start Menu -->
                <div class="col-lg-4 col-md-12 col-12">

                    <div class="sidebar sticky-bar p-4 rounded shadow">

                        <div class="widget">
                            <div class="row">

                                <div class="col-6 mt-4 pt-2" v-for="item in menuOptions" :key="item.title">
                                    <div
                                        v-if="item"
                                        :class="`accounts rounded d-block shadow text-center py-3
                                        ${active === item.title ? 'active' : ''}`"
                                        @click="changeHandleMenu(item.title)"
                                        style="cursor:pointer"
                                    >
                                        <span class="pro-icons h3 text-muted"><i :class="item.iconClass"></i></span>
                                        <h6 class="title text-dark h6 my-0">{{item.title}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Menu -->

                <div class="col-md-8 col-12 mt-4">
                    <!-- Start Servicio -->
                    <div>
                        <div v-if="active === 'Servicio'">
                            <p class="text-danger">Categoria | {{categoryUser.category.label}}</p>
                            <hr>
                            <h3 class="mt-4">Informacion Basica </h3>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <h2 class="font-weight-bold" style="">{{categoryUser.title}}</h2>
                            </div>
                            <!-- Description -->
                            <div class="d-flex justify-content-center">
                                <p class="text-muted mt-4" style="width: 80%;">
                                    {{ categoryUser.description }}
                                </p>
                            </div>
                            <hr>
                            <!-- Experiencia -->
                            <div class="row">
                                <div class="col-10">
                                    <h3>Experiencia </h3>
                                    <p class="text-muted" style="width: 80%;">
                                        {{categoryUser.descriptionExperience}}
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p>Años de Experiencia: {{categoryUser.yearExperience}}</p>
                                </div>
                            </div>
                            <hr>
                            <!-- Detalles -->
                            <div class="row">
                                <div class="col-10">
                                    <h3>Detalles </h3>
                                </div>
                                <div class="col-12">
                                    <p>Precio por hora: <span class="font-weight-bold"> € {{ categoryUser.price }} </span></p>
                                    <p>Creacion del Servicio: <span class="font-weight-bold">{{ new Date(categoryUser.created_at).toISOString().slice(0, 10) }} </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Servicio -->

                    <!-- Start Perfil -->
                    <div>
                        <div v-if="active === 'Perfil'">
                            <div>
                                <h3 class="mt-4">Detalles del Usuario</h3>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <div class="" style="width: 80%;">
                                        <!-- Nombre -->
                                        <p class="text-capitalize">
                                            <span class="font-weight-bold">Nombre: </span>
                                            {{categoryUser.user.name}}
                                        </p>
                                        <!-- Edad -->
                                        <p class="text-capitalize">
                                            <span class="font-weight-bold">Edad: </span>
                                            {{ new Date().getFullYear() - new Date(categoryUser.user.birthdate).getFullYear() }}
                                        </p>
                                        <!-- Sexo -->
                                        <p class="text-capitalize">
                                            <span class="font-weight-bold">Sexo: </span>
                                            {{ categoryUser.user.gender === 'man' ? 'Hombre' : 'Mujer'}}
                                        </p>
                                        <!-- Email Verificado -->
                                        <p class="text-capitalize">
                                            <span class="font-weight-bold">Email Verificado: </span>
                                            <XIcon v-if="!categoryUser.user.profile_check" style="color:red"/>
                                            <CheckIcon v-else style="color:green"/>
                                        </p>
                                        <!-- Perfil Verificado -->
                                        <p class="text-capitalize">
                                            <span class="font-weight-bold">Perfil Verificado: </span>
                                            <XIcon v-if="!categoryUser.user.email_check" style="color:red"/>
                                            <CheckIcon v-else style="color:green"/>
                                        </p>
                                        <!-- Fecha de Creacion -->
                                        <p class="text-capitalize">
                                            <span class="font-weight-bold">Activo desde: </span>
                                            {{ new Date(categoryUser.user.created_at).toISOString().slice(0, 10) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Perfil -->

                    <!-- Start Horario -->
                    <div>
                        <div v-if="active === 'Horario'">
                            <!-- START Horario -->
                            <div class="col-12 mt-3">
                                <b-card-group deck class="mb-3">
                                    <b-card border-variant="light" header="Disponibilidad" class="text-center">
                                        <Shedule
                                            :disabled="true"
                                            :sheduleData="sheduleData"
                                            :setSheduleData="setSheduleData"
                                            :dataInitial = categoryUser.times_available
                                        />
                                    </b-card>
                                </b-card-group>
                            </div>
                            <!-- END Horario -->
                        </div>
                    </div>
                    <!-- End Horario -->

                    <!-- Start Ubicacion -->
                    <div>
                        <div v-if="active === 'Ubicacion'">
                            <h3 class="mt-4">Ubicación</h3>
                            <hr>
                            <div class="" style="height: 250px;width:100%">
                                <div class="row mt-4 align-items-center" style="width:80%">
                                    <div class="col-4 font-weight-bold" style="">
                                        {{ categoryUser.address }}
                                    </div>
                                    <div class="col-8" style="">
                                        <b-skeleton-img />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Ubicacion -->
                </div>

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Profile End -->

    <!-- Start Modal Enviar Mensaje -->
    <div>
        <b-modal
            id="modalSendMessage"
            title="Enviar Mensaje"
            scrollable
            hide-footer
        >
            <b-form-textarea
                id="textarea"
                placeholder="Escribe tu mensaje..."
                rows="3"
                max-rows="6"
            ></b-form-textarea>
            <div class="d-flex justify-content-center mt-3">
                <b-button pill variant="outline-secondary">
                    Enviar
                </b-button>
            </div>
        </b-modal>
    </div>
    <!-- End Modal  Enviar Mensaje -->

    <!-- Start Modal Contrato -->
    <div>
        <b-modal
            id="modalSendContract"
            title="Enviar Contrato"
            scrollable
            hide-footer
        >
            Pendiente...
            <div class="d-flex justify-content-center mt-3">
                <b-button pill variant="outline-secondary">
                    Enviar Contrato
                </b-button>
            </div>
        </b-modal>
    </div>
    <!-- End Modal Contrato -->

</div>
</template>

<style>

    h1 {
        color: #ff4b64;
    }

    .public-profile {
        padding: 30px;
    }

    .avatar {
        border: solid 1px #eeeeee;
        padding: 10px;
        background-clip: content-box; /* support: IE9+ */
        background-color: #ccc;
    }

    .accounts:hover, .accounts.active {
        background: rgb(244,124,59);
        background: linear-gradient(170deg, rgba(244,124,59,1) 0%, rgba(241,89,56,1) 51%);
    }

    #title {
        color: #f1905a;
    }

    .bg-primary, .btn-primary, .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.focus, .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-soft-primary:hover, .btn-soft-primary:focus, .btn-soft-primary:active, .btn-soft-primary.active, .btn-soft-primary.focus, .badge-primary, .pagination .page-item.active .page-link, .nav-pills .nav-link.active, .custom-control-input:checked ~ .custom-control-label::before, #preloader #status .spinner .double-bounce1, #preloader #status .spinner .double-bounce2, .social-icon li a:hover, #topnav .navbar-toggle.open span:hover, .gradient, .flex-control-paging li a.flex-active, .owl-theme .owl-dots .owl-dot span, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots.clickable .owl-dot:hover span, .watch-video a .play-icon-circle, .sidebar .widget .tagcloud > a:hover, .flatpickr-day.selected, .flatpickr-day.selected:hover, .bg-animation-left.crypto-home::after, .bg-animation-left.task-management-home::after, .classic-app-image .bg-app-shape::after, .classic-saas-image .bg-saas-shape::after, .work-container.work-modern .icons .work-icon:hover, .features.fea-primary:hover, .accounts:hover, .accounts.active, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .swiper-slider-hero .swiper-container .swiper-button-prev:hover, .swiper-slider-hero .swiper-container .swiper-button-next:hover {
            background-color: rgb(244,124,59) !important;
    }

</style>
