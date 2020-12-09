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

import Navbar from "@/components/navbar";
// import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Account-profile component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        // Switcher,
        Footer,
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
    <Navbar :nav-light="true" />

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-left text-center">
                                    <img src="images/client/05.jpg" class="avatar avatar1 avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-lg-10 col-md-9 welcome">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                            <h1 class="title mb-0 font-weight-bold">Bienvenida Luisa</h1>
                                            <p class="text-muted h6 mr-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
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
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    
                    <div class="sidebar sticky-bar p-4 rounded shadow">

                        <div class="widget">
                            <div class="row">
                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-profile" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="title text-dark h6 my-0">Perfil</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-members" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-users-alt"></i></span>
                                        <h6 class="title text-dark h6 my-0">Contratos</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-works" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-file"></i></span>
                                        <h6 class="title text-dark h6 my-0">Anuncios</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-messages" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-envelope-star"></i></span>
                                        <h6 class="title text-dark h6 my-0">Facturas</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-payments" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-transaction"></i></span>
                                        <h6 class="title text-dark h6 my-0">Mensajes</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-setting" class="accounts active rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                        <h6 class="title text-dark h6 my-0">Empleados</h6>
                                    </router-link>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-12">

                    <div class="border-bottom pb-4">
                        <div class="row">
                           
                            <div class="col-12 container border shadow caja">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 mt-2 col-sm-4">
                                        <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle shadow d-block" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <h2 class="font-weight-bold">Luisana Amiga</h2>
                                        <h3 class="font-weight-bold">Diseños Creativos</h3>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button id="btn-modify-2" class="text-white">ver más</button>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-12 container border shadow caja">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 mt-2 col-sm-4">
                                        <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle shadow d-block" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <h2 class="font-weight-bold">Luisana Amiga</h2>
                                        <h3 class="font-weight-bold">Diseños Creativos</h3>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button id="btn-modify-2" class="text-white">ver más</button>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-12 container border shadow caja">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 mt-2 col-sm-4">
                                        <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle shadow d-block" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <h2 class="font-weight-bold">Luisana Amiga</h2>
                                        <h3 class="font-weight-bold">Diseños Creativos</h3>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <button id="btn-modify-2" class="text-white">ver más</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end row-->
                    </div>

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Profile End -->
    <!--end section-->
    <Footer />
    <!-- Footer End -->
    <!-- <Switcher /> -->
    <!-- Back to top -->
    <a href="javascript: void(0);" class="btn btn-icon btn-soft-primary back-to-top" id="back-to-top" v-scroll-to="'#topnav'">
        <arrow-up-icon class="icons"></arrow-up-icon>
    </a>
    <!-- Back to top -->
</div>
</template>

<style>
    
    h1 {
        color: #ff4b64;
    }

    .public-profile {
        padding: 30px;
    }

    .avatar1 {
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
        padding: 20px;
        margin-bottom: 30px;
        border-bottom: 1px solid #ff4b64;
    }

    .caja h2 {
        font-size: 30px;
        color: #8492a6;
    }

    .caja h3 {
        font-size: 30px;
        color: #ff4b64;
    }

    .row h3 {
        font-size: 30px;
        color: #ff4b64;
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