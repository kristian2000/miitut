<script>
import {
    XIcon,
    CheckIcon,
    FlagIcon
} from 'vue-feather-icons';

import MenuAccount from './MenuPublic'
import Shedule from '../../../components/schedule';
import FormContract from '../../form/FormContract';

import Score from '../../score';

export default {
    data(){
        return {
            zoom: 15,
            center: [0, 0],
            rotation: 0,
            geolocPosition: undefined,
            loading: true,
            active: 'Servicio',
            textMessage: '',
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
                    title: 'Valoraciones',
                    iconClass: 'uil uil-star'
                }
            ],
            sheduleData: [],
            descriptionReport: '',
            loadingReport: false
        }
    },
    components: {
        MenuAccount,
        CheckIcon,
        XIcon,
        Shedule,
        FormContract,
        Score,
        FlagIcon
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

            let coords = [ Number(response.data.lng), Number(response.data.lat) ]

            this.geolocPosition = coords;
            this.center =  coords;
            console.log('categoryUser', response.data)
            this.loading = false;
        }
    },
    computed: {
        calculateAge(){
            let now = new Date();
            let birthdate = new Date(this.categoryUser.user.birthdate);
            let yearOld = now.getFullYear() - birthdate.getFullYear();
            let m = now.getMonth() - birthdate.getMonth();

            if (m < 0 || (m === 0 && now.getDate() < birthdate.getDate())){
                return --yearOld;
            }

            return yearOld;
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
        async sendContract(form){

            const response = await this.callApi('post', '/app/contracts/create', form);
            console.log('responseAxios', response)
            if (response.status === 200){
                this.makeNotice('success', 'Contrato Enviado', 'Felicidades tu contrato se ha enviado exitosamente');
            }else {
                 this.makeNotice('danger', 'Error', 'Se presento un error al enviar el contrato');
            }
            this.$bvModal.hide('modalSendContract')
        },
        async sendMessage(){
            let form = {
                to: this.categoryUser.user.id,
                message: this.textMessage
            }
            console.log('sendMessage', form)

            const response = await this.callApi('post', '/app/chats/sendMessage', form);
            console.log('responseAxios', response)
            if (response.status === 200){
                this.textMessage = '';
                this.makeNotice('success', 'Mensaje Enviado', 'Felicidades tu mensaje se ha enviado exitosamente');
            }else {
                 this.makeNotice('danger', 'Error', 'Se presento un error al enviar el mensaje');
            }

            this.$bvModal.hide('modalSendMessage')
        },
        async reportUser(){
            if (!this.descriptionReport.trim().length){
                return '';
            }

            this.loadingReport = true;

            let form = {
                userReported: this.categoryUser.user.id,
                categoryReported: this.categoryUser.id,
                description: this.descriptionReport
            }

            const response = await this.callApi('post', '/app/users/reportUser', form);

            if (response.status === 200){
                this.$bvModal.hide('modalReport')
                this.descriptionReport = '';
                this.makeNotice('success', 'Informacion', 'Reporte enviado exitosamente!');
            }
            this.loadingReport = false;
            console.log('responseAxios', response)
        }
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
                                        :src="categoryUser.user.avatar ? categoryUser.user.avatar : '/images/avatarDefault.jpg'"
                                        class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt=""
                                    >
                                </div>
                                <!--end col-->

                                <div class="col-lg-6 col-md-7 welcome">
                                    <div class="row align-items-end" >
                                        <div class="col-12 text-md-left text-center mt-4 mt-sm-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <h1 class="title mb-0 font-weight-bold"><span class="text-capitalize">{{categoryUser.user.name}}</span></h1>
                                                <!-- <div>
                                                    <Score
                                                        :scoreStar="Number(categoryUser.user.score) ?
                                                            Number(categoryUser.user.score)/Number(categoryUser.user.ratings)
                                                            :
                                                            0"
                                                    />
                                                </div> -->
                                                <p class="text-muted h6 mr-2">{{user.description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 col-md-12" v-if="$store.state.user.userType !== 'admin'">
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

                            <div style="position:relative" v-if="$store.state.user.userType !== 'admin'">
                                <div 
                                    class="font-weight-bold report" 
                                    @click="$bvModal.show('modalReport')"
                                >
                                    <FlagIcon size="1.2x"/>
                                    Reportar 
                                </div>
                            </div>
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
                            <p class="text-danger">Categoria | {{ categoryUser.category.label }}</p>
                            <hr>
                            <h3 class="mt-4">Informacion Basica </h3>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <h2 class="font-weight-bold" style="">{{ categoryUser.title }}</h2>
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
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex justify-content-center">
                                            <div class="" style="">
                                                <!-- Nombre -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Nombre: </span>
                                                    {{categoryUser.user.name}}
                                                </p>
                                                <!-- Edad -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Edad: </span>
                                                {{calculateAge}}
                                                </p>
                                                <!-- Sexo -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Sexo: </span>
                                                    {{ categoryUser.user.gender === 'man' ? 'Hombre' : 'Mujer'}}
                                                </p>
                                                <!-- Email Verificado -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Email Verificado: </span>
                                                    <XIcon v-if="!Number(categoryUser.user.profile_check)" style="color:red"/>
                                                    <CheckIcon v-else style="color:green"/>
                                                </p>
                                                <!-- Perfil Verificado -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Perfil Verificado: </span>
                                                    <XIcon v-if="!Number(categoryUser.user.email_check)" style="color:red"/>
                                                    <CheckIcon v-else style="color:green"/>
                                                </p>
                                                <!-- Fecha de Creacion -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Activo desde: </span>
                                                    {{ new Date(categoryUser.user.created_at).toISOString().slice(0, 10) }}
                                                </p>
                                                <!-- Nacionalidad -->
                                                <p class="text-capitalize">
                                                    <span class="font-weight-bold">Nacionalidad: </span>
                                                    {{ categoryUser.user.nationality}}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Informacion Extra -->
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex justify-content-center flex-column align-items-center">
                                            <div>
                                                <div class="">
                                                    <label class="font-weight-bold">
                                                        Carnet de Conducir
                                                    </label>
                                                    <b-badge>
                                                        {{ categoryUser.user.driving_license ? 'SI' : 'NO' }}
                                                    </b-badge>
                                                </div>

                                                <div class="">
                                                    <label class="font-weight-bold">
                                                        Vehiculo propio
                                                    </label>
                                                    <b-badge>
                                                        {{ categoryUser.user.own_vehicle ? 'SI' : 'NO' }}
                                                    </b-badge>
                                                </div>

                                                <div class="">
                                                    <label class="font-weight-bold">
                                                        Primeros Auxilios
                                                    </label>
                                                    <b-badge>
                                                        {{ categoryUser.user.first_aid ? 'SI' : 'NO' }}
                                                    </b-badge>
                                                </div>

                                                <div class="">
                                                    <label class="font-weight-bold">
                                                        Tiene Niños
                                                    </label>
                                                    <b-badge>
                                                        {{ categoryUser.user.has_children ? 'SI' : 'NO' }}
                                                    </b-badge>
                                                </div>
                                            </div>
                                        </div>
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
                            <div class="" style="">
                                <div class="row mt-4 align-items-center">
                                    <div class="col-12 font-weight-bold mb-2" style="">
                                        {{ categoryUser.address }}
                                    </div>
                                    <div class="col-12" style="">
                                        <!-- Start Map -->
                                            <div>
                                                <vl-map :load-tiles-while-animating="true" :load-tiles-while-interacting="true"
                                                        data-projection="EPSG:4326" style="height: 400px">
                                                <vl-view :zoom.sync="zoom" :center.sync="center" :rotation.sync="rotation"></vl-view>

                                                <template >
                                                    <vl-feature v-if="geolocPosition" id="position-feature">
                                                        <vl-geom-point :coordinates="geolocPosition"></vl-geom-point>
                                                        <vl-style-box>
                                                            <vl-style-icon src="/assets/marker.png" :scale="0.4" :anchor="[0.5, 1]"></vl-style-icon>
                                                        </vl-style-box>
                                                    </vl-feature>
                                                </template>

                                                <vl-layer-tile id="osm">
                                                    <vl-source-osm></vl-source-osm>
                                                </vl-layer-tile>
                                                </vl-map>
                                            </div>
                                        <!-- End Map -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End Ubicacion -->

                    <!-- Star Valoracion -->
                    <div v-if="active === 'Valoraciones'">
                        <div>
                            <div class="m-2 border-bottom">
                                <div class="d-flex justify-content-center">
                                    <Score
                                        :scoreStar="Number(categoryUser.user.score) ?
                                            Number(categoryUser.user.score)/Number(categoryUser.user.ratings)
                                            :
                                            0"
                                        sizeStar="lg"
                                    />
                                    <div class="m-3">
                                        <div 
                                            class="text-muted font-weight-bold" 
                                            style="font-size: 20px"
                                        >
                                            ( {{ categoryUser.user.ratings }} )
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!-- <div>
                                    <span class="text-muted font-weight-bold" >Numero de Calificaciones: </span>
                                    {{ categoryUser.user.ratings }}
                                </div> -->
                                <!-- Comentarios -->
                                <div>
                                    <div>
                                        <h3>Comentarios</h3>
                                    </div>
                                    <div class="container" style="max-height: 800px; overflow: scroll">
                                        <div v-for="(comment, index) in categoryUser.comments" :key="index">
                                            <div class="d-flex">
                                                <div class="user-comment ">
                                                    <div>
                                                        <img
                                                            :src="comment.user.avatar ? comment.user.avatar : 'images/avatarDefault.jpg'"
                                                            class="avatar-comment"
                                                            width="80px"
                                                            height="80px"
                                                            alt=""
                                                        >
                                                    </div>
                                                    <div>
                                                        <!-- Nombre -->
                                                        <span class="font-weight-bold name" style="font-size: 14px">
                                                            {{ comment.user.name }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="border p-2 comment" >
                                                    <div style="max-height: 150px; overflow: scroll">
                                                        {{ comment.comment }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Valoracion -->
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
                v-model="textMessage"
                id="textarea"
                placeholder="Escribe tu mensaje..."
                rows="3"
                max-rows="6"
            ></b-form-textarea>
            <div 
                class="d-flex justify-content-center mt-3"
                @click="sendMessage"
            >
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
            title="Enviar Solicitud de Contrato"
            scrollable
            hide-footer
            size="lg"
        >
            <FormContract
                :categoryUser="categoryUser"
                :onSubmit="sendContract"
                typeForm="create"
                userType="help"
                :edit="true"
            />
        </b-modal>
    </div>
    <!-- End Modal Contrato -->

    <!-- Start Modal Report -->
    <div>
        <b-modal
            id="modalReport"
            title="Reportar Usuario"
            scrollable
            hide-footer
        >
            <div 
                v-if="!loadingReport" 
                style="min-height: 200px"
            >
                <b-form-group
                    description="Su reporte sera evaluado y se realizaran las acciones necesarias ."
                    label="Describe el problema que observas en este perfil"
                    label-for="report"
                >
                    <b-form-textarea
                        id="report"
                        v-model="descriptionReport"
                        placeholder="Escribe aqui..."
                        rows="3"
                        max-rows="6"
                    ></b-form-textarea>
                </b-form-group>
                <div>
                    <div class="d-flex justify-content-center" >
                        <b-button 
                            pill 
                            variant="outline-secondary"
                            @click="reportUser"
                        >
                            Enviar
                        </b-button>
                    </div>
                </div>
            </div>
            <div v-else>
                <div 
                    class="d-flex justify-content-center align-items-center" 
                    style="min-height: 250px"
                >
                    <div>
                        <b-spinner 
                            type="grow" 
                            label="Spinning" 
                        />
                    </div>
                </div>
            </div>
        </b-modal>
    </div>
    <!-- End Modal Report -->

</div>
</template>

<style>

    .user-comment {
        width: 100px;
    }

    .avatar-comment {
        border-radius: 50%;
        width: 60px;
        height: 60px;
    }

    .comment {
        width: 350px;
        border-radius: 15px;
    }

    .report {
        position: absolute; 
        right:0; 
        font-size: 12px;
        cursor: pointer;
        border-radius: 10px;
        padding: 5px;
    }

    .report:hover {
        background: #eee
    }

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
