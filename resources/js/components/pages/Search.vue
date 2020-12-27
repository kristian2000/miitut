<script>
import {
    Trash2Icon
} from 'vue-feather-icons';

export default {
    data() {
        return {
            form: {
                category: '',
                subCategory: '',
                localization: '',
                score: 1,
                yearExperience: 0,
                priceMin: 1,
                priceMax: 10

            },
            categoriesForm : [],
            categories: [],
            categoriesUserWork: [],
            user: this.$store.state.user,
            scoreOptions: [
                { text: 'Todos', value: 1},
                { text: 'De 2 en adelante', value: 2},
                { text: 'De 3 en adelante', value: 3},
                { text: 'De 4 en adelante', value: 4},
                { text: 'Solo 5 Estrellas', value: 5}
            ]
        }
    },
    components: {
        Trash2Icon
    },
    async created(){
        if (this.$store.state.user){
            const response = await this.callApi('get', `app/categories/getWithSubcategories`);
            console.log(response)
            if (response.status === 200){
                let categories = response.data.map( category => ({
                    value: category,
                    text: category.label,
                }));

                this.categories = categories;
                console.log('categories',categories)
            }
        }else {
            this.$router.push('/');
        }
    },
    computed: {
        subCategories(){
            return this.form.category.subcategories?.map( subCategory => ({
                text: subCategory.label,
                value: subCategory
            })) ?? []
        }
    },
    methods: {
        async submit(){
            // if (this.form.category === ''){
            //     this.makeNotice('danger', 'Faltan Datos', 'Por favor complete la categoria ')
            //     return
            // }
            let form = this.form;
            let formData = Object.keys(form)
                .reduce( (acc, value)=> {
                    if (form[value] !== ''){
                        return {
                            ...acc,
                            [value]: value != 'category' ? form[value] : form[value].id
                        }
                    }
                    return acc;
                } , {
                    lat: this.user.lat,
                    lng: this.user.lng,
                    // radius: 22
                })

            console.log('search', formData)

            const response = await this.callApi('post', 'app/categoriesUser/getCategoriesUserWork', formData)

            if (response.status === 200){
                console.log('getUsersWork', response.data)
                this.categoriesUserWork = response.data.users;
            }
        }
    }
}
</script>

<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
        <div class="container">

                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body ">

                            <div class="row">
                                <!-- START Formulario Filtros  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                                    <div class="row columna shadow" >
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Categoría</h6>
                                            <b-form-select
                                                id="input-3"
                                                v-model="form.category"
                                                :options="categories"
                                                required
                                            ></b-form-select>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Sub-Categoría</h6>
                                            <b-form-select
                                                id="input-3"
                                                v-model="form.subCategory"
                                                :options="subCategories"
                                                required
                                            ></b-form-select>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Ubicación</h6>
                                            <p class="text-muted">{{this.user.address}}</p>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Valoración</h6>
                                            <b-form-select
                                                id="input-3"
                                                v-model="form.score"
                                                :options="scoreOptions"
                                                required
                                            ></b-form-select>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Años de Experiencia</h6>
                                            <b-form-input id="yearExperience" type="number" v-model="form.yearExperience"></b-form-input>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Rango de Precio</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="font-weight-bold">Min</h6>
                                                    <b-form-input
                                                        id="yearExperience"
                                                        type="number"
                                                        min="1"
                                                        v-model="form.priceMin">
                                                    </b-form-input>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="font-weight-bold">Max</h6>
                                                    <b-form-input
                                                        id="yearExperience"
                                                        type="number"
                                                        min="1"
                                                        v-model="form.priceMax">
                                                    </b-form-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center" @click="submit">
                                            <button id="btn-modify-2" class="text-white">Buscar</button>
                                        </div>

                                    </div>
                                </div>
                                <!--End Formulario Filtros-->

                                <!-- Start List Usuario -->
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-4">
                                    <div class="row" v-if="categoriesUserWork.length">
                                        <div class="col-12 mb-2">
                                            <label class="container">
                                                <input type="checkbox">
                                                <span class="font-weight-bold">Seleccionar Todos</span>
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="container caja" v-for="categoryUser in categoriesUserWork" :key="categoryUser.id">
                                                <div
                                                    class="row align-self-center align-items-center"
                                                    style="height: 100px; overflow: hidden;"
                                                    @click="$router.push({path: `/profilePublic/${categoryUser.id}`})"
                                                >
                                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                                        <img
                                                            :src="categoryUser.user.avatar ? categoryUser.user.avatar : 'images/avatarDefault.jpg'"
                                                            class="avatar avatar-small rounded-circle shadow d-block"
                                                            width="80px"
                                                            alt=""
                                                        >
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                                        <h3 class="font-weight-bold" style="font-size: 18px;">{{ categoryUser.user.name }}</h3>
                                                        <p class="text-muted " style="line-height:1.2;height: 50px; overflow: hidden;font-size: 14px">
                                                           <span class="font-weight-bold">{{ categoryUser.title }}</span>.<br>{{ categoryUser.description}}.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-else>
                                        <div class="card">
                                            <div class="row p-4">
                                                <div class="col-12">
                                                    <h4 class="text-muted text-center">
                                                        No hay coincidencias
                                                    </h4>
                                                </div>
                                                <div class="col-12">
                                                    <p class="text-muted text-center">
                                                        Modifique los filtros para buscar distintos resultados
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Usuario -->

                                <!-- Start Map -->
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <b-skeleton-img
                                        height="400%"
                                    />
                                    <!-- <div
                                        class="d-flex align-items-center justify-content-center"
                                        style="width: 100%; height: 100%;"
                                    > -->
                                        <!-- <img
                                            src="images/account/mapa.jpg"
                                            alt=""
                                            width="100%"
                                        > -->
                                    <!-- </div> -->
                                </div>
                                <!-- End Map -->
                            </div>


                        </div>
                    </div>
                </div>
                <!--end col-->
    </section>
    <!--end section-->

</div>
</template>

<style scoped>

    h1 {
        color: #ff4b64;
    }

    h3 {
        font-size: 25px;
    }

    .avatar {
        padding: 0;
    }

    .card-body {
        margin-top: 50px;
    }

    .public-profile {
        margin-bottom: -70px;
        padding-bottom: -50px;
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

    .caja {
        padding: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #ff4b64;
        cursor: pointer;
    }

    .caja .texto {
        position: absolute;
        margin-left: 80px;
    }

    .caja .avatar {
        margin-bottom: 10px;
    }

    .row h3 {
        font-size: 25px;
        color: #ff4b64;
        position: absolute;
    }

    .row p {
        margin-top: 35px;
    }

    label span {
        font-size: 20px;
        color: #8492a6;
        margin-left: 10px;
        margin-bottom: 2px;
    }

    label input {
        padding: 20px;
    }

    .row .item {
        padding: 15px;
        color: #ff4b64;
        border-bottom: 2px solid #ccc;
    }

    .columna button {
        margin: 30px;
        background: rgb(241,84,56);
        background: linear-gradient(90deg, rgba(241,84,56,1) 24%, rgba(244,125,59,1) 100%);
    }

    #btn-modify-2 {
        padding: 6px 30px 6px 30px;
        font-size: 15px;
        border-radius: 10px;
        border: none;
        /* margin-bottom: 0px; */
    }

    .bg-profile {
        padding: 0;
    }

    .espacio {
        margin: 50px;
    }

    @media (max-width: 576px) {

      .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
        padding-left: 0;
        padding-right: 0;
      }

    }

</style>
