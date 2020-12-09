<script>
import {
    ArrowUpIcon,
    HelpCircleIcon,
    ChevronRightIcon,
    SmartphoneIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-digital-agency component
 */
export default {
    data() {
        return {

        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        HelpCircleIcon,
        ChevronRightIcon,
        SmartphoneIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-260 d-table w-100" style="background: url('images/digital/home-bg.png') center center" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-heading mt-4">
                        <div class="alert alert-light alert-pills shadow" role="alert">
                            <span class="badge badge-pill badge-danger mr-1">v2.5</span>
                            <span class="content"> Build <span class="text-primary">anything</span> you want - Landrick.</span>
                        </div>
                        <h1 class="heading mb-3">A <span class="text-primary">Digital</span> Product <br> Marketing Agency</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-pills btn-primary mb-2">Get Started</a>
                            <a href="javascript: void(0);" v-b-modal.modal class="video-play-icon watch text-dark mb-2 ml-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle bg-light text-white title-dark position-relative play play-iconbar"></i> Watch now !</a>
                        </div>
                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="99025203" />
                        </b-modal>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="images/digital/seo.gif" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Partners start -->
    <section class="py-4 border-bottom border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                    <img src="images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Partners End -->

    <!-- Start -->
    <section class="section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card features px-md-3 border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-flip-v"></i>
                        </div>

                        <div class="card-body p-0 content">
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">High-End Anaylizing</a></h5>
                            <p class="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated</p>

                            <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-4 pt-sm-0">
                    <div class="card features px-md-3 border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-layer-group"></i>
                        </div>

                        <div class="card-body p-0 content">
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Excellence Track Record</a></h5>
                            <p class="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated</p>

                            <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-4 pt-lg-0">
                    <div class="card features px-md-3 border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-object-group"></i>
                        </div>

                        <div class="card-body p-0 content">
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Our Dedicated Support</a></h5>
                            <p class="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated</p>

                            <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
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
                <div class="col-md-6">
                    <img src="images/digital/about.png" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">We provide best SEO service</h4>
                        <p class="text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented &amp; Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary mb-2 mr-2">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <a href="javascript: void(0);" v-b-modal.modal-1 class="video-play-icon watch text-dark"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> WATCH VIDEO</a>
                        </div>
                        <b-modal id="modal-1" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="99025203" />
                        </b-modal>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <b-tabs pills justified vertical nav-wrapper-class="col-md-5" nav-class="rounded-md" content-class="col-md-7 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0 saas-feature-shape-right">
                    <b-tab active>
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h4 class="title font-weight-bold">Management Tools</h4>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                            </div>
                        </template>
                        <img src="images/digital/1.png" class="img-fluid mx-auto d-block" alt="">
                    </b-tab>
                    <b-tab title-link-class="border-top">
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h4 class="title font-weight-bold">Increase Effectiveness</h4>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                            </div>
                        </template>
                        <img src="images/digital/2.png" class="img-fluid mx-auto d-block" alt="">
                    </b-tab>
                    <b-tab title-link-class="border-top">
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h4 class="title font-weight-bold">Data Analysis</h4>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                            </div>
                        </template>
                        <img src="images/digital/3.png" class="img-fluid mx-auto d-block" alt="">
                    </b-tab>
                </b-tabs>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <img src="images/illustrator/app.svg" alt="">
                </div>
                <!--end col--->

                <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                    <div class="section-title">
                        <h4 class="title mb-4">A marketing agency that <br> helps you succeed</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Find More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                    </div>
                </div>
                <!--end col--->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Testi Start -->
    <section class="section bg-light" style="background: url('images/digital/testi.png') center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <carousel id="single-owl" class="owl-carousel owl-theme" dir="ltr" :per-page="1">
                        <Slide>
                            <div class="testi text-center">
                                <p class="h5 text-muted font-italic font-weight-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. "</p>
                                <div class="commenter mt-5">
                                    <img src="images/client/01.jpg" class="avatar avatar-medium rounded-circle d-block mx-auto shadow-lg" alt="">
                                    <div class="content mt-4">
                                        <ul class="list-unstyled h6 text-warning mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                        <h5 class="text-primary mb-0">Ronald Kinsey</h5>
                                        <small class="text-muted">User</small>
                                    </div>
                                </div>
                            </div>
                            <!--end review content-->
                        </Slide>
                        <Slide>
                            <div class="testi text-center">
                                <p class="h5 text-muted font-italic font-weight-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. "</p>
                                <div class="commenter mt-5">
                                    <img src="images/client/02.jpg" class="avatar avatar-medium rounded-circle d-block mx-auto shadow-lg" alt="">
                                    <div class="content mt-4">
                                        <ul class="list-unstyled h6 text-warning mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                        <h5 class="text-primary mb-0">Raquel Service</h5>
                                        <small class="text-muted">App User</small>
                                    </div>
                                </div>
                            </div>
                            <!--end review content-->
                        </Slide>
                        <Slide>
                            <div class="testi text-center">
                                <p class="h5 text-muted font-italic font-weight-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. "</p>
                                <div class="commenter mt-5">
                                    <img src="images/client/03.jpg" class="avatar avatar-medium rounded-circle d-block mx-auto shadow-lg" alt="">
                                    <div class="content mt-4">
                                        <ul class="list-unstyled h6 text-warning mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                        <h5 class="text-primary mb-0">Leona Moore</h5>
                                        <small class="text-muted">Client</small>
                                    </div>
                                </div>
                            </div>
                            <!--end review content-->
                        </Slide>
                        <Slide>
                            <div class="testi text-center">
                                <p class="h5 text-muted font-italic font-weight-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. "</p>
                                <div class="commenter mt-5">
                                    <img src="images/client/04.jpg" class="avatar avatar-medium rounded-circle d-block mx-auto shadow-lg" alt="">
                                    <div class="content mt-4">
                                        <ul class="list-unstyled h6 text-warning mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                        <h5 class="text-primary mb-0">Mark Rose</h5>
                                        <small class="text-muted">CEO</small>
                                    </div>
                                </div>
                            </div>
                            <!--end review content-->
                        </Slide>
                        <Slide>
                            <div class="testi text-center">
                                <p class="h5 text-muted font-italic font-weight-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. "</p>
                                <div class="commenter mt-5">
                                    <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle d-block mx-auto shadow-lg" alt="">
                                    <div class="content mt-4">
                                        <ul class="list-unstyled h6 text-warning mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                        <h5 class="text-primary mb-0">Marsha Donoho</h5>
                                        <small class="text-muted">User</small>
                                    </div>
                                </div>
                            </div>
                            <!--end review content-->
                        </Slide>
                        <Slide>
                            <div class="testi text-center">
                                <p class="h5 text-muted font-italic font-weight-normal">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. "</p>
                                <div class="commenter mt-5">
                                    <img src="images/client/06.jpg" class="avatar avatar-medium rounded-circle d-block mx-auto shadow-lg" alt="">
                                    <div class="content mt-4">
                                        <ul class="list-unstyled h6 text-warning mb-0">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                        <h5 class="text-primary mb-0">Xavier Giancola</h5>
                                        <small class="text-muted">App User</small>
                                    </div>
                                </div>
                            </div>
                            <!--end review content-->
                        </Slide>
                    </carousel>
                    <!--end owl carousel-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Testi End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <h4 class="title mb-4">Our Pricing Plans</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 mt-4 pt-2">
                    <div class="text-center">
                        <b-tabs nav-class="rounded-pill justify-content-center d-inline-block border" pills content-class="col-lg-7 col-md-12 text-center offset-md-2">
                            <b-tab title-link-class="px-3 py-2 rounded-pill" title-item-class="d-inline-block">
                                <template v-slot:title>
                                    <a class="px-3 py-2 rounded-pill">
                                        Monthly
                                    </a>
                                </template>
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-12 mt-4 pt-4 pl-md-0 pr-md-0">
                                        <div class="card pricing-rates starter-plan text-center shadow rounded border-0">
                                            <div class="card-body py-5">
                                                <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                                                <div class="d-flex justify-content-center mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">0</span>
                                                    <span class="h4 align-self-end mb-1">/mo</span>
                                                </div>

                                                <ul class="list-unstyled mb-0 pl-0">
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                                </ul>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6 col-12 mt-4 pt-2 pt-md-4 pl-md-0 pr-md-0">
                                        <div class="card pricing-rates bg-light text-center shadow rounded border-0">
                                            <div class="card-body py-5">
                                                <h2 class="title text-uppercase text-primary mb-4">Professional</h2>
                                                <div class="d-flex justify-content-center mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">59</span>
                                                    <span class="h4 align-self-end mb-1">/mo</span>
                                                </div>

                                                <ul class="list-unstyled mb-0 pl-0">
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                                </ul>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Try it now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </b-tab>
                            <b-tab title-link-class="px-3 py-2 rounded-pill" title-item-class="d-inline-block">
                                <template v-slot:title>
                                    Yearly <span class="badge badge-pill badge-danger ml-1">10% Off </span>
                                </template>
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-12 mt-4 pt-4 pl-md-0 pr-md-0">
                                        <div class="card pricing-rates starter-plan text-center shadow rounded border-0">
                                            <div class="card-body py-5">
                                                <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                                                <div class="d-flex justify-content-center mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">9</span>
                                                    <span class="h4 align-self-end mb-1">/mo</span>
                                                </div>

                                                <ul class="list-unstyled mb-0 pl-0">
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                                </ul>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6 col-12 mt-4 pt-2 pt-md-4 pl-md-0 pr-md-0">
                                        <div class="card pricing-rates bg-light text-center shadow rounded border-0">
                                            <div class="card-body py-5">
                                                <h2 class="title text-uppercase text-primary mb-4">Professional</h2>
                                                <div class="d-flex justify-content-center mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">49</span>
                                                    <span class="h4 align-self-end mb-1">/mo</span>
                                                </div>

                                                <ul class="list-unstyled mb-0 pl-0">
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                                </ul>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-4">Try it now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </b-tab>

                        </b-tabs>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-4 pb-2 text-center">
                        <h4 class="title mb-4">Frequently Asked Questions</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                            <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0"> What is the main process open account ?</h5>
                            <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                            <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ?</h5>
                            <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-5 mt-sm-0 pt-sm-0 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <router-link to="/page-contact-two" class="btn btn-primary mt-4"><i class="mdi mdi-phone"></i> Contact us</router-link>
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
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End -->

    <section class="section border-bottom bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12 order-1 order-md-2">
                    <img src="images/illustrator/user_interface.svg" class="img-fluid mx-auto d-block" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-7 col-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">Available for your <br> Smartphones</h4>
                        <p class="text-muted para-desc mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="my-4">
                            <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-lg btn-dark mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                        </div>

                        <div class="d-inline-block">
                            <div class="pt-4 d-flex align-items-center border-top">
                                <smartphone-icon class="fea icon-md mr-2 text-primary"></smartphone-icon>
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
