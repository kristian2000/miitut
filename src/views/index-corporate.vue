<script>
import {
    ArrowUpIcon,
    ChevronRightIcon,
    EyeIcon,
    ArrowRightIcon,
    MonitorIcon,
    HeartIcon,
    CodeIcon,
    UserCheckIcon,
    GitMergeIcon,
    SettingsIcon,
    FeatherIcon,
    BoldIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';
import {
    Swiper,
    SwiperSlide,
    directive
} from 'vue-awesome-swiper'

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-corporate component
 */
export default {
    data() {
        return {
            swiperOptions: {
                lazy: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            }
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        Carousel,
        Slide,
        Swiper,
        SwiperSlide,
        EyeIcon,
        ChevronRightIcon,
        ArrowRightIcon,
        HeartIcon,
        CodeIcon,
        UserCheckIcon,
        GitMergeIcon,
        SettingsIcon,
        FeatherIcon,
        MonitorIcon,
        BoldIcon
    },
    directives: {
        swiper: directive
    },
    computed: {
        swiper() {
            return this.$refs.mySwiper.$swiper
        }
    },
    methods: {
        nextSlide() {
            this.$refs.mySwiper.$swiper.slideNext()
        },
        prevSlide() {
            this.$refs.mySwiper.$swiper.slidePrev()
        }
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />
    <swiper ref="mySwiper" class="swiper-slider-hero position-relative d-block vh-100" :options="swiperOptions">
        <swiper-slide>
            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" :style="{'background':'url(' + require('../../public/images/corporate/1.jpg')+ ')'}">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center">
                                    <h1 class="heading text-white title-dark mb-4">Discover the world of <br> business</h1>
                                    <p class="para-desc mx-auto text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>

                                    <div class="mt-4 pt-2">
                                        <a href="javascript:void(0)" class="btn btn-primary">Contact us</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div><!-- end slide-inner -->
            </div> <!-- end swiper-slide -->
        </swiper-slide>
        <swiper-slide>
            <div class="swiper-slide d-flex align-items-center overflow-hidden">
                <div class="slide-inner slide-bg-image d-flex align-items-center" :style="{'background':'url(' + require('../../public/images/corporate/2.jpg')+ ')'}">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="title-heading text-center">
                                    <h1 class="heading text-white title-dark mb-4">Meet our brand <br> new solution</h1>
                                    <p class="para-desc mx-auto text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>

                                    <div class="mt-4 pt-2">
                                        <a href="javascript:void(0)" class="btn btn-primary">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div><!-- end slide-inner -->
            </div> <!-- end swiper-slide -->
        </swiper-slide>
        <div class="swiper-container" slot="pagination">
            <div class="swiper-button-next border rounded-circle text-center" slot="button-prev" @click="nextSlide()"></div>
            <div class="swiper-button-prev border rounded-circle text-center" slot="button-next" @click="prevSlide()"></div>
        </div>
    </swiper>

    <!-- FEATURES START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="features-absolute">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <i class="uil uil-airplay"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Best Financial Advice</a></h5>
                                        <p class="text-muted">The most well-known which is said to have originated</p>

                                        <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-md-0 pt-2 pt-md-0">
                                <div class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <i class="uil uil-clipboard-alt"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Authorised Finance Brand</a></h5>
                                        <p class="text-muted">The most well-known which is said to have originated</p>

                                        <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <i class="uil uil-credit-card-search"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Compehensive Advices</a></h5>
                                        <p class="text-muted">The most well-known which is said to have originated</p>

                                        <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                                    <div class="icons rounded h2 text-center text-primary px-3">
                                        <i class="uil uil-ruler-combined"></i>
                                    </div>

                                    <div class="card-body p-0 content">
                                        <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Best Tax Advantages</a></h5>
                                        <p class="text-muted">The most well-known which is said to have originated</p>

                                        <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="images/company/about2.png" class="img-fluid mx-auto" alt="">
                        <div class="play-icon">
                            <a href="http://vimeo.com/287684225" class="play-btn video-play-icon">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">We are the largest <br> Business expert </h4>
                        <p class="text-muted">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>
                        <a href="javascript:void(0)" class="btn btn-primary mt-3">Buy Now <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Key Features</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <monitor-icon class="fea icon-ex-md text-primary"></monitor-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Fully Responsive</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <heart-icon class="fea icon-ex-md text-primary"></heart-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Browser Compatibility</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <eye-icon class="fea icon-ex-md text-primary"></eye-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Retina Ready</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <bold-icon class="fea icon-ex-md text-primary"></bold-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Based On Bootstrap 4</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <feather-icon class="fea icon-ex-md text-primary"></feather-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Feather Icons</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <code-icon class="fea icon-ex-md text-primary"></code-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Built With SASS</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <UserCheckIcon class="fea icon-ex-md text-primary"></UserCheckIcon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">W3c Valid Code</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <git-merge-icon class="fea icon-ex-md text-primary"></git-merge-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Flaticon Icons</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <settings-icon class="fea icon-ex-md text-primary"></settings-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Easy to customize</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-12 mt-4 pt-2 text-center">
                    <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Start -->
    <section class="section bg-white pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="video-solution-cta position-relative" style="z-index: 1;">
                        <div class="position-relative">
                            <img src="images/cta-bg.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                            <div class="play-icon">
                                <a href="https://www.youtube.com/watch?v=jNTZpfXYJa4" class="play-btn video-play-icon">
                                    <i class="mdi mdi-play text-primary rounded-circle bg-white shadow-lg"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content mt-md-4 pt-md-2">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mt-4 pt-2">
                                            <div class="section-title text-md-left">
                                                <h6 class="text-white-50">Team</h6>
                                                <h4 class="title text-white title-dark mb-0">Meet Experience <br> Team Member</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-4 pt-md-2">
                                            <div class="section-title text-md-left">
                                                <p class="text-white-50 para-desc">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                <a href="javascript:void(0)" class="text-white title-dark">Read More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row -->
            <div class="feature-posts-placeholder bg-primary"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <section class="section">
        <div class="container">
            <div class="row mt-lg-4 align-items-center">
                <div class="col-lg-5 col-md-12 text-center text-lg-left">
                    <div class="section-title mb-4 mb-lg-0 pb-2 pb-lg-0">
                        <h4 class="title mb-4">Our Consulting Charge</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <a href="#" class="btn btn-primary mt-4">Buy Now <span class="badge badge-pill badge-danger ml-2">v2.5</span></a>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-12">
                    <div class="row align-items-center ml-lg-5">
                        <div class="col-md-6 col-12 mt-4 pt-4 pl-md-0 pr-md-0">
                            <div class="card pricing-rates starter-plan text-center shadow rounded border-0">
                                <div class="card-body py-5">
                                    <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                                    <div class="d-flex justify-content-center mb-4">
                                        <span class="h4 mb-0 mt-2">$</span>
                                        <span class="price h1 mb-0">39</span>
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
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Our Clients Said</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
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

        <div class="container mt-100 mt-60">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <h6 class="text-primary">Blog</h6>
                        <h4 class="title mb-4 mb-lg-0">Reads Our Latest <br> News & Blog</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <p class="text-muted mb-0 mx-auto para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                </ul>
                                <router-link to="/page-blog-detail" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></router-link>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="images/blog/02.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                </ul>
                                <router-link to="/page-blog-detail" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></router-link>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="images/blog/03.jpg" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for Business</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                </ul>
                                <router-link to="/page-blog-detail" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></router-link>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
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
.swiper-button-prev::after {
    display: none
}

.swiper-button-next::after {
    display: none
}
</style>
