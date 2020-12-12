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

import Menu from '../../../layouts/Menu'

/**
 * Account-profile component
 */
export default {
    data() {
        return {}
    },
    components: {
        Menu,

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

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100" style="background: url('images/account/bg.png') center center;">
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
                <Menu :active="'Contratos'"/>

                <div class="col-lg-8 col-12">

                    <div class="border-bottom pb-4">
                        <div class="row">

                            <div class="col-12 border shadow caja">
                                <h2 class="font-weight-bold">Logo</h2>
                                <h3 class="font-weight-bold">Diseños creativos</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p>
                                </p>
                                <button id="btn-modify-2" class="text-white">ver más</button>
                            </div>

                            <div class="col-12 border shadow caja">
                                <h2 class="font-weight-bold">Logo</h2>
                                <h3 class="font-weight-bold">Diseños creativos</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p>
                                </p>
                                <button id="btn-modify-2" class="text-white">ver más</button>
                            </div>

                            <div class="col-12 border shadow caja">
                                <h2 class="font-weight-bold">Logo</h2>
                                <h3 class="font-weight-bold">Diseños creativos</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p>
                                </p>
                                <button id="btn-modify-2" class="text-white">ver más</button>
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

    .caja {
        padding: 30px;
        margin-bottom: 30px;
    }

    .caja h2 {
        font-size: 50px;
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
