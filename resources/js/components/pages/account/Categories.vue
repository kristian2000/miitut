<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GithubIcon,
    YoutubeIcon,
    GitlabIcon,
    MailIcon,
    UserPlusIcon,
    UsersIcon,
    MessageCircleIcon,
    BellIcon,
    ToolIcon,
    PhoneIcon,
    BookmarkIcon,
    ItalicIcon,
    GlobeIcon,
    GiftIcon,
    MapPinIcon,
    MoreVerticalIcon,
    PlayIcon,
    PauseIcon,
    PlusIcon

} from 'vue-feather-icons';

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormCategoryUser from '../../form/FormCategoryUser'
/**
 * Account-profile component
 */
export default {
    data() {
        return {
            categoriesUser: [],
            currentItem: null
        }
    },
    components: {
        LayoutAccount,
        MoreVerticalIcon,
        PlayIcon,
        PauseIcon,
        MapPinIcon,
        FormCategoryUser,
        PlusIcon

    },
    async created(){
        const response = await this.callApi('get', `app/categoriesUser`);
        console.log('getCategoriesUser', response)
        if (response.status === 200){
            this.categoriesUser = response.data;
        }
    },
    methods: {
        showModalEdit(item){
            console.log('item', item);
            this.currentItem = item;
            this.$bvModal.show('modalEdit')
        },
        setCategoryUser(categoryUser){

            this.categoriesUser = this.categoriesUser.map( category => {
                if (category.id === categoryUser.id){
                    return categoryUser;
                }
                return category
            })
        }
    }
}
</script>

<template>
<div>
    <LayoutAccount :active="'Categorias'">
        <div class="col-lg-8 col-12">

            <!-- Start List de categoriesUser -->
            <div class="border-bottom pb-4">
                <div class="row">

                    <div class="col-12 m-2 card-category" v-for="categoryUser in categoriesUser" :key="categoryUser.id">
                        <div class="row">
                            <div class="col-5 p-2 bg">
                                <div class="d-flex align-items-center">
                                    <img :src="'/assets/icon_services/' + categoryUser.category.name + '.svg'"  alt="" width="130px">
                                    <div  class="" style="">
                                        <div style="text-align:center">
                                            <h2>{{categoryUser.category.label }}</h2>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div style="color: green">
                                                <b-button
                                                    v-b-tooltip.hover
                                                    title="Click para pausar tu categoria, no apareceras en las busquedas"
                                                    v-if="categoryUser.status.name === 'active'"
                                                    variant="outline-success"
                                                >
                                                    <PauseIcon
                                                        style="cursor: pointer"
                                                    />
                                                    Pausar
                                                </b-button>
                                                <b-button
                                                    v-b-tooltip.hover
                                                    title="Click para pausar tu categoria, no apareceras en las busquedas"
                                                    v-if="categoryUser.status.name === 'pending'"
                                                    variant="outline-success"
                                                >
                                                    <PlayIcon
                                                        style="cursor: pointer"

                                                    />
                                                    Iniciar
                                                </b-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 p-2" >
                                <div class="container">
                                    <h2 class="">{{categoryUser.title}}</h2>
                                    <div class="desc">
                                        <p>{{categoryUser.description}}</p>
                                    </div>
                                    <div class="address">
                                        <p> <MapPinIcon /> {{categoryUser.address}}</p>
                                    </div>
                                    <div class="row" style="">
                                        <div class="col-6">
                                            €  | {{ Number(categoryUser.price).toFixed(2) }}
                                        </div>
                                        <div class="col-6 d-flex flex-row-reverse">
                                            <MoreVerticalIcon
                                                style="cursor:pointer"
                                                @click="showModalEdit(categoryUser)"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End List CategoriesUser -->

            <div class="d-flex justify-content-center mt-4">
                <b-button
                    v-b-tooltip.hover
                    title="Click para agregar una nueva categoria"
                    variant="outline-success"
                    class="btn-add"
                    hide-footer
                    @click="$bvModal.show('modalAddCategory')"
                >
                    <PlusIcon
                        style="cursor: pointer"
                    />
                </b-button>
            </div>
        </div>

    </LayoutAccount>
    <!-- Start Modal Edit -->
    <div>
        <b-modal
            id="modalEdit"
            title="Editar Categoria del Usuario"
            scrollable
            hide-footer
            size="lg"
        >
            <FormCategoryUser
                :type="'edit'"
                :categoryUser="currentItem"
                :setCategoryUser="setCategoryUser"
            />
        </b-modal>
    </div>
    <!-- End Modal Edit -->

    <!-- Start Modal Agregar Categoria -->
        <b-modal id="modalAddCategory" title="Agregar Categoria" scrollable hide-footer>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <h2 class="font-weight-light">Actualizar Plan</h2>
                        <p class="text-muted mt-4 title-subtitle mx-auto">Una enorme ventaja obtienes al actualizar tu plan!.</p>
                    </div>
                </div>
                <div class="row card">
                    <div class="col-12">
                        <div class="bg-white mt-3 price-box">
                            <div class="pricing-name text-center">
                                <h4 class="mb-0 text-bold">Premium</h4>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-custom font-weight-normal mb-0">$5<span>/Mes</span></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="mdi mdi-check"></i> Categorias: <span class="font-weight-bold">0-3</span></p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-custom text-white">Adquirir Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </b-modal>
    <!-- End Modal Agregar Categoria -->
</div>
</template>

<style scoped>
    .text-custom,
    .navbar-custom .navbar-nav li a:hover,
    .navbar-custom .navbar-nav li a:active,
    .navbar-custom .navbar-nav li.active a,
    .service-box .services-icon,
    .price-features p i,
    .faq-icon,
    .social .social-icon:hover {
        color: #f6576e !important;
    }

    .bg-custom,
    .btn-custom,
    .timeline-page .timeline-item .date-label-left::after,
    .timeline-page .timeline-item .duration-right::after,.back-to-top:hover {
        background-color: #f6576e;
    }

    .btn-custom,
    .custom-form .form-control:focus,
    .social .social-icon:hover,
    .registration-input-box:focus {
        border-color: #f6576e;
    }

    .service-box .services-icon,
    .price-features p i {
        background-color: rgba(246, 87, 110, 0.1);
    }

    .btn-custom:hover,
    .btn-custom:focus,
    .btn-custom:active,
    .btn-custom.active,
    .btn-custom.focus,
    .btn-custom:active,
    .btn-custom:focus,
    .btn-custom:hover,
    .open > .dropdown-toggle.btn-custom {
        border-color: #e45267;
        background-color: #e45267;
    }


    .price-box {
        padding: 40px 50px;
    }

    .plan-price h1 span {
        font-size: 16px;
        color: #000;
    }

    .price-features p i {
        height: 20px;
        width: 20px;
        display: inline-block;
        text-align: center;
        line-height: 20px;
        font-size: 14px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .btn-add {
        border-radius:  50%;
    }
    .card-category {
        background: white;
        color: black;
        border-radius: 25px;;
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card-category .desc {
        height: 50px;
        overflow: hidden;
        font-weight: normal;
        overflow-wrap:break-word;
    }
    .card-category .address p{
        font-size: 0.8rem;
    }
    .card-category .desc p{
        line-height: 1.2;
        max-width:300px;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow:hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
    }


    .card-category .col-5 h2 {
        font-size: 1.5rem;
        font-weight: bold;
        color: black;
        /* text-align: center; */
    }

    .card-category .col-7 h2{
        word-break: break-all;
        text-overflow: ellipsis;
        font-size: 1.5rem;
    }
    .card-category .col-7 {

        font-weight: bold;
        color: white;
        background: rgb(149,0,88);
        background: linear-gradient(9deg, rgba(149,0,88,1) 0%, rgba(77,9,121,1) 100%, rgba(218,71,118,1) 100%);
        border-radius: 25px;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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

    .caja {
        padding: 30px;
        margin-bottom: 30px;
    }

    .caja h2 {
        font-size: 1.8rem;
        color: #8492a6;
    }

    .caja h3 {
        font-size: 40px;
        color: #ff4b64;
    }

    .caja button {
        background: rgb(241,84,56);
        background: linear-gradient(90deg, rgba(241,84,56,1) 24%, rgba(244,125,59,1) 100%);
    }

    #btn-modify-2 {
        padding: 6px 25px 6px 25px;
        font-size: 20px;
        border-radius: 350px;
        border: none;
    }

</style>
