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
    MapPinIcon
} from 'vue-feather-icons';

// import Navbar from "@/components/navbar";
// import Switcher from "@/components/switcher";
// import Footer from "@/components/footer";

/**
 * Account-profile component
 */
export default {
    data() {
        return {}
    },
    components: {
        // Navbar,
        // Switcher,
        // Footer,
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
        MapPinIcon
    }
}
</script>

<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body ">

                    <div class="col-lg-10 items2">

                    <div class="border-bottom pb-4">
                        <div class="row">

                            <div class="widget col-lg-4 col-md-5 col-sm-3">
                            <div class="row columna shadow">

                                <!-- <div class="col-12 item">
                                    <h6 class="font-weight-bold">Palabra Clave</h6>
                                </div> -->
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Categoría</h6>
                                    <b-form-input id="category" type="text"></b-form-input>
                                </div>
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Sub-Categoría</h6>
                                </div>
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Ubicación</h6>
                                </div>
                                <!-- <div class="col-12 item">
                                    <h6 class="font-weight-bold">Horario</h6>
                                </div> -->
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Valoración</h6>
                                </div>
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Edad</h6>
                                    <b-form-input id="category" type="number"></b-form-input>
                                </div>
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Años de Experiencia</h6>
                                </div>
                                <div class="col-12 item">
                                    <h6 class="font-weight-bold">Rango de Precio</h6>
                                </div>

                                <button id="btn-modify-2" class="text-white">Buscar</button>

                            </div>
                            <!--end row-->
                        </div>

                            <div class="container col-lg-5 col-md-5 col-sm-8">

                                <label class="container">
                                    <input type="checkbox">
                                    <span class="font-weight-bold">Seleccionar Todos</span>
                                </label>


                                <div class="container caja">
                                    <div class="row align-self-center align-items-center">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow d-block" width="80px" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                            <h3 class="font-weight-bold">Calvin Carlo</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container caja">
                                    <div class="row align-self-center align-items-center">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow d-block" width="80px" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                            <h3 class="font-weight-bold">Calvin Carlo</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container caja">
                                    <div class="row align-self-center align-items-center">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow d-block" width="80px" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                            <h3 class="font-weight-bold">Calvin Carlo</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container caja">
                                    <div class="row align-self-center align-items-center">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow d-block" width="80px" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                            <h3 class="font-weight-bold">Calvin Carlo</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container caja">
                                    <div class="row align-self-center align-items-center">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow d-block" width="80px" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                            <h3 class="font-weight-bold">Calvin Carlo</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container caja">
                                    <div class="row align-self-center align-items-center">
                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow d-block" width="80px" alt="">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-8 texto">
                                            <h3 class="font-weight-bold">Calvin Carlo</h3>
                                            <p class="text-muted">Lorem ipsum dolor sit.<br>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-12 col-lg-3 col-sm-12">

                                <img src="images/account/mapa.jpg" alt="">
                            </div>

                        </div>
                        <!--end row-->
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
    <section class="section espacio mt-60 items1">
        <div class="container mt-lg-3">


                <!--end col-->
        </div>
        <!--end container-->
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
