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
                                    <img src="images/client/05.jpg" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
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
                                    <router-link to="/account-profile" class="accounts active rounded d-block shadow text-center py-3">
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
                                    <router-link to="/account-setting" class="accounts rounded d-block shadow text-center py-3">
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
                        <p class="text-muted mb-0">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                    </div>

                    <div class="border-bottom pb-4">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mt-4">
                                <div class="mt-4">
                                    <div class="media align-items-center">
                                        <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                                        <div class="media-body">
                                            <h6 id="title" class="mb-0">Email :</h6>
                                            <a href="javascript:void(0)" class="text-muted">kristajoseph0203@mail.com</a>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-3">
                                        <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                        <div class="media-body">
                                            <h6 id="title" class="mb-0">Skills :</h6>
                                            <a href="javascript:void(0)" class="text-muted">html</a>, <a href="javascript:void(0)" class="text-muted">css</a>, <a href="javascript:void(0)" class="text-muted">js</a>, <a href="javascript:void(0)" class="text-muted">mysql</a>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-3">
                                        <italic-icon class="fea icon-ex-md text-muted mr-3"></italic-icon>
                                        <div class="media-body">
                                            <h6 id="title" class="mb-0">Language :</h6>
                                            <a href="javascript:void(0)" class="text-muted">English</a>, <a href="javascript:void(0)" class="text-muted">Japanese</a>, <a href="javascript:void(0)" class="text-muted">Chinese</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                             <div class="col-md-6 col-sm-6 mt-4">
                                <div class="mt-4">
                                    <div class="media align-items-center">
                                        <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                                        <div class="media-body">
                                            <h6 id="title" class="mb-0">Email :</h6>
                                            <a href="javascript:void(0)" class="text-muted">kristajoseph0203@mail.com</a>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-3">
                                        <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                        <div class="media-body">
                                            <h6 id="title" class="mb-0">Skills :</h6>
                                            <a href="javascript:void(0)" class="text-muted">html</a>, <a href="javascript:void(0)" class="text-muted">css</a>, <a href="javascript:void(0)" class="text-muted">js</a>, <a href="javascript:void(0)" class="text-muted">mysql</a>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-3">
                                        <italic-icon class="fea icon-ex-md text-muted mr-3"></italic-icon>
                                        <div class="media-body">
                                            <h6 id="title" class="mb-0">Language :</h6>
                                            <a href="javascript:void(0)" class="text-muted">English</a>, <a href="javascript:void(0)" class="text-muted">Japanese</a>, <a href="javascript:void(0)" class="text-muted">Chinese</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
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