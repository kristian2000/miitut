<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    PhoneIcon,
    MapPinIcon,
    MailIcon,
    MessageCircleIcon,
    UserIcon,
    KeyIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-onepage component
 */
export default {
    data() {
        return {
            isCondensed: false
        }
    },
    components: {
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        PhoneIcon,
        MapPinIcon,
        MailIcon,
        MessageCircleIcon,
        UserIcon,
        KeyIcon
    },
    mounted: () => {
        window.onscroll = function () {
            onwindowScroll();
        };

        function onwindowScroll() {
            if (
                document.body.scrollTop > 50 ||
                document.documentElement.scrollTop > 50
            ) {
                document.getElementById("topnav").classList.add("nav-sticky");
            } else {
                document.getElementById("topnav").classList.remove("nav-sticky");
            }

            if (document.body.scrollTop > 100 ||
                document.documentElement.scrollTop > 100) {
                document.getElementById('back-to-top').style.display = 'inline';
            } else {
                document.getElementById('back-to-top').style.display = 'none';
            }
        }
    },
    methods: {
        /**
         * Toggle menu
         */
        toggleMenu() {
            this.isCondensed = !this.isCondensed;
            if (this.isCondensed) {
                document.getElementById("navigation").style.display = "block";
            } else
                document.getElementById("navigation").style.display = "none";
        },
    }
}
</script>

<template>
<div>
    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="#">
                    <img src="images/logo-dark.png" height="24" alt="">
                </a>
            </div>
            <div class="buy-button">
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" @click="toggleMenu()" :class="{'open': isCondensed === true}">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu" v-scroll-spy-active="{ selector: 'li.has-submenu' }">
                    <li class="has-submenu">
                        <a href="javascript: void(0);" v-scroll-to="'#home'">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript: void(0);" v-scroll-to="'#service'">Feature</a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript: void(0);" v-scroll-to="'#testimonial'">Review</a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript: void(0);" v-scroll-to="'#pricing'">Price</a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript: void(0);" v-scroll-to="'#contact'">Contact</a>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->
    <div v-scroll-spy>

        <!-- Hero Start -->
        <section class="bg-home bg-light d-flex align-items-center" style="background: url('images/onepage/bg.png') center center; height: auto;" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                        <div class="title-heading margin-top-100">
                            <h1 class="heading mb-3" data-aos="fade-up" data-aos-duration="1000">Website Load Faster, and Grow Your <span class="text-primary">SEO</span></h1>
                            <p class="para-desc mx-auto text-muted" data-aos="fade-up" data-aos-duration="1400">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="text-center subcribe-form mt-4 pt-2" data-aos="fade-up" data-aos-duration="1800">
                                <form>
                                    <div class="form-group mb-0">
                                        <input type="email" id="email" name="email" class="shadow bg-white rounded-pill" required="" placeholder="Email Address">
                                        <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="home-dashboard onepage-hero" data-aos="fade-up" data-aos-duration="2200">
                            <img src="images/onepage/onepage.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <!-- Hero End -->

        <!-- Features Start -->
        <section class="section pb-0" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Great Features</h4>
                            <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features" data-aos="fade-up" data-aos-duration="1000">
                            <div class="image position-relative d-inline-block">
                                <img src="images/icon/pen.svg" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Design &amp; Development</h4>
                                <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam aenean elementum semper.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features" data-aos="fade-up" data-aos-duration="1400">
                            <div class="image position-relative d-inline-block">
                                <img src="images/icon/video.svg" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Management &amp; Marketing</h4>
                                <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by established compiling unusual word.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features" data-aos="fade-up" data-aos-duration="1800">
                            <div class="image position-relative d-inline-block">
                                <img src="images/icon/intellectual.svg" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Stratagy &amp; Research</h4>
                                <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum fragments texts used today.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features" data-aos="fade-up" data-aos-duration="2200">
                            <div class="image position-relative d-inline-block">
                                <img src="images/icon/user.svg" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Easy To Use</h4>
                                <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam aenean elementum semper.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features" data-aos="fade-up" data-aos-duration="2400">
                            <div class="image position-relative d-inline-block">
                                <img src="images/icon/calendar.svg" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Daily Reports</h4>
                                <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by compiling unusual established word.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features" data-aos="fade-up" data-aos-duration="2800">
                            <div class="image position-relative d-inline-block">
                                <img src="images/icon/sand-clock.svg" class="avatar avatar-small" alt="">
                            </div>

                            <div class="content mt-4">
                                <h4 class="title-2">Real Time Zone</h4>
                                <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used fragments today.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img src="images/software/mobile01.png" data-aos="fade-up" data-aos-duration="1800" class="img-fluid" alt="">
                    </div>
                    <!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-lg-5">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Seamless Operation via Smart SEO</h4>
                            <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            <ul class="list-unstyled mb-0 text-muted" data-aos="fade-up" data-aos-duration="1800">
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                            </ul>
                            <div class="mt-4" data-aos="fade-up" data-aos-duration="2200">
                                <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->

            <div class="container mt-100 mt-60">
                <div class="p-4 rounded bg-light shadow" data-aos="fade-up" data-aos-duration="1400">
                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <div class="text-sm-left">
                                <h5 class="mb-0">Start building beautiful block-based websites.</h5>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-sm-5 mt-4 mt-sm-0">
                            <div class="text-sm-right">
                                <a href="javascript:void(0)" data-toggle="modal" v-b-modal.trialform data-target="#trialform" class="btn btn-outline-primary">Free Trial <span class="badge badge-pill badge-danger ml-2">v2.5</span> </a>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row -->
                </div>
            </div>
            <!--end container-->

            <!-- Modal Content Start -->
            <b-modal id="trialform" content-class="bg-white" hide-footer title="14 Days Free Trial">

                <div class="modal-body">
                    <div class="feature-form">
                        <img src="images/illustrator/Mobile_notification_SVG.svg" alt="">

                        <div class="content mt-4 pt-2">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Name : <span class="text-danger">*</span></label>
                                            <user-icon class="fea icon-sm icons"></user-icon>
                                            <input type="text" class="form-control pl-5" placeholder="Name" name="name" required="">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Email : <span class="text-danger">*</span></label>
                                            <mail-icon class="fea icon-sm icons"></mail-icon>
                                            <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Password : <span class="text-danger">*</span></label>
                                            <key-icon class="fea icon-sm icons"></key-icon>
                                            <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12 mt-2 mb-0">
                                        <button class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>

            </b-modal>
            <!-- Modal Content End -->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative" style="z-index: 1;" data-aos="zoom-in" data-aos-duration="1600">
                            <img src="images/onepage/laptop.png" class="rounded img-fluid mx-auto d-block" alt="">
                            <div class="play-icon">
                                <a href="javascript: void(0);" v-b-modal.modal-1 class="play-btn video-play-icon">
                                    <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                                </a>
                            </div>
                            <b-modal id="modal-1" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                                <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="287684225" />
                            </b-modal>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Features End -->

        <!-- Review Start -->
        <section class="section bg-light" id="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Our Testimonial</h4>
                            <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-4">
                        <carousel id="customer-testi" class="owl-carousel owl-theme" dir="ltr" :per-page="3">
                            <Slide>
                                <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="images/client/01.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                        <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                    </div>
                                </div>
                            </Slide>
                            <Slide>
                                <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1400">
                                    <img src="images/client/02.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                        <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                    </div>
                                </div>
                            </Slide>
                            <Slide>
                                <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1800">
                                    <img src="images/client/03.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                        <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                    </div>
                                </div>
                            </Slide>
                            <Slide>
                                <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2200">
                                    <img src="images/client/04.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                        <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                    </div>
                                </div>
                            </Slide>
                            <Slide>
                                <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2400">
                                    <img src="images/client/05.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                        <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                    </div>
                                </div>
                            </Slide>
                            <Slide>
                                <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2800">
                                    <img src="images/client/06.jpg" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                    <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        </ul>
                                        <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                        <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                    </div>
                                </div>
                            </Slide>
                        </carousel>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->

            <!-- Partners start -->
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-2 col-6 text-center" data-aos="fade-up" data-aos-duration="1000">
                        <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                    </div>
                    <!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center" data-aos="fade-up" data-aos-duration="1200">
                        <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                    </div>
                    <!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1400">
                        <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                    </div>
                    <!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1600">
                        <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                    </div>
                    <!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="1800">
                        <img src="images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                    </div>
                    <!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0" data-aos="fade-up" data-aos-duration="2000">
                        <img src="images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <!-- Partners End -->
        </section>
        <!--end section-->
        <!-- Review End -->

        <!-- Pricing Start -->
        <section class="section" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Our Pricing</h4>
                            <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                            <div class="card-body">
                                <h2 class="title text-uppercase mb-4">Free</h2>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">0</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1400">
                        <div class="card pricing-rates business-rate shadow bg-white border-0 rounded">
                            <div class="card-body">
                                <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">39</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1800">
                        <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                            <div class="card-body">
                                <h2 class="title text-uppercase mb-4">Professional</h2>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">59</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2" data-aos="fade-up" data-aos-duration="2200">
                        <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                            <div class="card-body">
                                <h2 class="title text-uppercase mb-4">Ultimate</h2>
                                <div class="d-flex mb-4">
                                    <span class="h4 mb-0 mt-2">$</span>
                                    <span class="price h1 mb-0">79</span>
                                    <span class="h4 align-self-end mb-1">/mo</span>
                                </div>

                                <ul class="list-unstyled mb-0 pl-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li>
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Installment</li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Started Now</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <!-- Pricing End -->

        <!-- Team Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Our Team Member</h4>
                            <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card team text-center rounded border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                                <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                            </a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                                    <small class="designation text-muted">UI Designers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1300">
                        <div class="card team text-center rounded border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/04.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                                <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                            </a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                                    <small class="designation text-muted">UX Designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1600">
                        <div class="card team text-center rounded border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/03.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                                <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                            </a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                                    <small class="designation text-muted">Web Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2" data-aos="fade-up" data-aos-duration="1900">
                        <div class="card team text-center rounded border-0">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                                    <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                                <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                            </a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                                <div class="content pt-3">
                                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                                    <small class="designation text-muted">Web Designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <!-- Team End -->

        <!-- Contact Start -->
        <section class="section pb-0" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Get In Touch !</h4>
                            <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mt-4 pt-2 order-2 order-md-1">
                        <div class="card rounded shadow border-0" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card-body">
                                <div class="custom-form bg-white">
                                    <div id="message"></div>
                                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group position-relative">
                                                    <label>Your Name <span class="text-danger">*</span></label>
                                                    <user-icon class="fea icon-sm icons"></user-icon>
                                                    <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <mail-icon class="fea icon-sm icons"></mail-icon>
                                                    <input name="email" id="email2" type="email" class="form-control pl-5" placeholder="Your email :">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Comments</label>
                                                    <message-circle-icon class="fea icon-sm icons"></message-circle-icon>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                                <div id="simple-msg"></div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                    <!--end form-->
                                </div>
                                <!--end custom-form-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 order-1 order-md-2">
                        <div class="title-heading ml-lg-4">
                            <h4 class="mb-4" data-aos="fade-up" data-aos-duration="1000">Contact Details</h4>
                            <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <div class="card border-0 bg-transparent">
                                <div class="card-body p-0">
                                    <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="icon">
                                            <mail-icon class="fea icon-m-md text-dark mr-3"></mail-icon>
                                        </div>
                                        <div class="content overflow-hidden d-block">
                                            <h6 class="font-weight-bold mb-0">Email</h6>
                                            <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 bg-transparent">
                                <div class="card-body p-0">
                                    <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up" data-aos-duration="1400">
                                        <div class="icon">
                                            <phone-icon class="fea icon-m-md text-dark mr-3"></phone-icon>
                                        </div>
                                        <div class="content overflow-hidden d-block">
                                            <h6 class="font-weight-bold mb-0">Phone</h6>
                                            <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0 bg-transparent">
                                <div class="card-body p-0">
                                    <div class="contact-detail d-flex align-items-center mt-3" data-aos="fade-up" data-aos-duration="1600">
                                        <div class="icon">
                                            <map-pin-icon class="fea icon-m-md text-dark mr-3"></map-pin-icon>
                                        </div>
                                        <div class="content overflow-hidden d-block">
                                            <h6 class="font-weight-bold mb-0">Location</h6>
                                            <a v-b-modal.modal-map class="video-play-icon text-primary">View on Google map</a>
                                        </div>
                                        <b-modal hide-footer header-close-variant="white" header-class="border-0" content-class="border-0" id="modal-map" size="lg" centered body-class="p-0">
                                            <iframe height="500" width="800" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0"></iframe>
                                        </b-modal>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end contact-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <!-- Contact End -->
    </div>
    <!--end section-->
    <Footer />
    <!-- Footer End -->
    <Switcher />
    <!-- Back to top -->
    <a href="javascript: void(0);" class="btn btn-icon btn-soft-primary back-to-top" id="back-to-top" v-scroll-to="'#topnav'">
        <arrow-up-icon class="icons"></arrow-up-icon>
    </a>
    <!-- Back to top -->
</div>
</template>

<style>
.modal-content {
    background-color: transparent;
}
</style>
