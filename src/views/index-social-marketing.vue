<script>
import {
    ArrowUpIcon,
    ChevronRightIcon,
    SmartphoneIcon,
    PenToolIcon,
    ApertureIcon,
    YoutubeIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GitlabIcon,
    MessageCircleIcon,
    CpuIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';
import countTo from 'vue-count-to';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-social-marketing component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        countTo,
        ChevronRightIcon,
        SmartphoneIcon,
        PenToolIcon,
        ApertureIcon,
        YoutubeIcon,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        GitlabIcon,
        MessageCircleIcon,
        CpuIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center bg-light" style="height: auto;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                    <div class="title-heading margin-top-100">
                        <h1 class="heading mb-4">One Solution for your <span class="text-primary">Social Media Marketing</span></h1>
                        <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <ul class="mt-4 list-unstyled mb-0 align-items-center">
                            <li class="list-inline-item">
                                <router-link to="/page-contact-one" class="btn btn-primary mr-2"><i class="mdi mdi-email"></i> Request a Demo</router-link>
                            </li>
                            <li class="list-inline-item text-muted mr-2 h6">Or</li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-primary font-weight-bold"> Try it for Free <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a></li>
                        </ul>
                    </div>

                    <div class="home-dashboard">
                        <img src="images/social/hero.png" alt="" class="img-fluid mover">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Social Icons , features and testi Start -->
    <section class="section overflow-hidden">
        <div class="container mt-md-5">
            <div class="row justify-content-center" id="counter">
                <div class="col-lg-8 col-md-10">
                    <div class="mb-4 pb-2 text-center">
                        <h5 class="mb-0 font-weight-normal text-muted">Join <span class="text-success font-weight-bold">
                                <countTo :startVal="1" :endVal="555" :duration="4000"></countTo>+
                            </span> user using <span class="font-weight-bold text-primary">Landrick.</span> to drive customer engagement, inspire brand loyalty, and grow their business</h5>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 pb-md-4">
                    <ul class="text-center mb-0 p-0">
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-blue" v-b-tooltip.hover title="Facebook">
                                <facebook-icon class="icons"></facebook-icon>
                            </a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-danger" v-b-tooltip.hover title="Instagram">
                                <instagram-icon class="icons"></instagram-icon>
                            </a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-secondary" v-b-tooltip.hover title="Linkedin">
                                <linkedin-icon class="icons"></linkedin-icon>
                            </a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-info" v-b-tooltip.hover title="Twitter">
                                <twitter-icon class="icons"></twitter-icon>
                            </a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-warning" v-b-tooltip.hover title="Gitlab">
                                <gitlab-icon class="icons"></gitlab-icon>
                            </a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-danger" v-b-tooltip.hover title="Youtube">
                                <youtube-icon class="icons"></youtube-icon>
                            </a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-success" v-b-tooltip.hover title="Whatsapp"><i class="mdi mdi-whatsapp icons"></i></a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-info" v-b-tooltip.hover title="Telegram"><i class="mdi mdi-telegram icons"></i></a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-blue" v-b-tooltip.hover title="Skype"><i class="mdi mdi-skype icons"></i></a></li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="social-feature-left">
                        <img src="images/social/1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <p class="text-primary h2 mb-3"><i class="uil uil-airplay"></i></p>
                        <h4 class="title mb-3">Manage Your All <br> <span class="text-primary">Social Media</span> Account</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary">Get Start Now <i class="mdi mdi-chevron-right"></i></a>
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
                <div class="col-lg-5 col-md-6 col-12 order-1 order-md-2">
                    <img src="images/illustrator/social.svg" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title mr-lg-4">
                        <p class="text-primary h2 mb-3"><i class="uil uil-layer-group"></i></p>
                        <h4 class="title mb-3">Rapidly Grow Your <br> <span class="text-primary">Social Feeds</span></h4>
                        <p class="text-muted">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented &amp; Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript: void(0);" v-b-modal.modal class="video-play-icon watch text-dark"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> WATCH VIDEO</a>
                        </div>
                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <youtube video-id="jNTZpfXYJa4" ref="youtube" width="750" height="450"></youtube>
                        </b-modal>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/facebook.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/instagram.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5 pt-sm-0">
                    <img src="images/client/tinder.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5 pt-sm-0">
                    <img src="images/client/whatsapp.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5 pt-sm-0">
                    <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5 pt-sm-0">
                    <img src="images/client/dribbble.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col--6 col-12">
                    <div class="row mr-lg-4" id="counter">
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div class="card explore-feature border-0 rounded text-center bg-white shadow">
                                        <div class="card-body">
                                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                                <pen-tool-icon class="fea"></pen-tool-icon>
                                            </div>
                                            <h5 class="mt-3 title">Perfect Design</h5>
                                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card explore-feature border-0 rounded text-center bg-white shadow">
                                        <div class="card-body">
                                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                                <aperture-icon class="fea"></aperture-icon>
                                            </div>
                                            <h5 class="mt-3 title">Manage Social Media</h5>
                                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end Row-->
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="row pt-lg-4 mt-lg-4">
                                <div class="col-12 mt-4 pt-2">
                                    <div class="card explore-feature border-0 rounded text-center bg-white shadow">
                                        <div class="card-body">
                                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                                <smartphone-icon class="fea"></smartphone-icon>
                                            </div>
                                            <h5 class="mt-3 title">No Interface</h5>
                                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card explore-feature border-0 rounded text-center bg-white shadow">
                                        <div class="card-body">
                                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                                <message-circle-icon class="fea"></message-circle-icon>
                                            </div>
                                            <h5 class="mt-3 title">Free Installation</h5>
                                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end Row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end Row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col--6 col-12 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="section-title ml-lg-4">
                        <p class="text-primary h2 mb-3"><i class="uil uil-apps"></i></p>
                        <h4 class="title mb-3">Our Great Features</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-chevron-right"></i></a>
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
                <div class="col-lg-5 col-md-6 col-12 order-1 order-md-2">
                    <div class="social-feature-right">
                        <img src="images/social/social.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title mr-lg-4">
                        <p class="text-primary h2 mb-3"><i class="uil uil-cube"></i></p>
                        <h4 class="title mb-3">We Integrated your <br> Favorite <span class="text-primary">Social Media</span></h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <div class="d-inline-block">
                            <div class="pt-3 d-flex align-items-center border-top">
                                <cpu-icon class="fea icon-md mr-2 text-primary"></cpu-icon>
                                <div class="content">
                                    <h6 class="mb-0">Became a smarter</h6>
                                    <a href="javascript:void(0)" class="text-primary">Find more solutions <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Testi Start -->
        <div class="container mt-100 mt-60">
            <div class="row pt-md-5 justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">User's Stories</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-12 mt-4">
                    <carousel id="customer-testi" class="owl-carousel owl-theme" dir="ltr" :per-page="3">
                        <Slide>
                            <div class="media customer-testi m-2">
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
                            <div class="media customer-testi m-2">
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
                            <div class="media customer-testi m-2">
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
                            <div class="media customer-testi m-2">
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
                            <div class="media customer-testi m-2">
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
                            <div class="media customer-testi m-2">
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
        <!-- Testi End -->

        <div class="container mt-100 mt-60">
            <div class="rounded bg-primary p-lg-5 p-4">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="section-title text-md-left text-center">
                            <h4 class="title mb-3 text-white title-dark">Start your free 2 week trial today</h4>
                            <p class="text-white-50 mb-0">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-4 mt-4 mt-sm-0">
                        <div class="text-md-right text-center">
                            <a href="javascript:void(0)" class="btn btn-light">Get Started</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->

        <!-- Download Cta Start -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <img src="images/social/download.png" class="img-fluid mx-auto d-block" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <div class="alert alert-light alert-pills" role="alert">
                            <span class="badge badge-primary badge-pill mr-1">Apps</span>
                            <span class="content">Download now <chevron-right-icon class="fea icon-sm"></chevron-right-icon></span>
                        </div>
                        <h4 class="title mb-4">Available for your <br> Smartphones</h4>
                        <p class="text-muted para-desc mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="my-4">
                            <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                        </div>

                        <div class="d-inline-block">
                            <div class="pt-4 d-flex align-items-center border-top">
                                <SmartphoneIcon class="fea icon-md mr-2 text-primary"></SmartphoneIcon>
                                <div class="content">
                                    <h6 class="mb-0">Install app now on your cellphones</h6>
                                    <a href="javascript:void(0)" class="text-primary">Learn More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
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
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Social Icons , features and testi End -->
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
