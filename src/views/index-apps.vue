<script>
import {
    ArrowUpIcon,
    MonitorIcon,
    FeatherIcon,
    EyeIcon,
    UserCheckIcon,
    SmartphoneIcon,
    HeartIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index application component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        Carousel,
        Slide,
        MonitorIcon,
        FeatherIcon,
        EyeIcon,
        UserCheckIcon,
        SmartphoneIcon,
        HeartIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="title-heading mt-4">
                        <h1 class="heading mb-3">Manage all of you stuff using <span class="text-primary">Landrick.</span> app</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="text-md-right text-center">
                        <img src="images/app/home.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Features Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">App Features</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="row mt-4 pt-2">
                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <monitor-icon class="fea icon-ex-md text-primary"></monitor-icon>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Use On Any Device</h4>
                                    <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <feather-icon class="fea icon-ex-md text-primary"></feather-icon>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Feather Icons</h4>
                                    <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <eye-icon class="fea icon-ex-md text-primary"></eye-icon>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Retina Ready</h4>
                                    <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <user-check-icon class="fea icon-ex-md text-primary"></user-check-icon>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">W3c Valid Code</h4>
                                    <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <smartphone-icon class="fea icon-ex-md text-primary"></smartphone-icon>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Fully Responsive</h4>
                                    <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="media features pt-4 pb-4">
                                <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                    <heart-icon class="fea icon-ex-md text-primary"></heart-icon>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">Browser Compatibility</h4>
                                    <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 text-center text-md-right">
                    <img src="images/app/feature.png" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Feature End -->

    <!-- Showcase Start -->
    <section class="section pt-0 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">How Can We Help You ?</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    <img src="images/app/1.png" class="img-fluid mx-auto d-block" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Best <span class="text-primary">Landrick</span> App Partner For Your Life</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
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
                        <h4 class="title mb-4"><span class="text-primary">Landrick</span> App Showcase</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 mt-4 pt-2 text-center">

                    <b-tabs pills justified content-class="mt-4 pt-2" nav-wrapper-class="col-lg-8 col-md-12 offset-md-2">
                        <b-tab>
                            <template v-slot:title>
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">High Performance</h4>
                                </div>
                            </template>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="images/app/2.png" class="img-fluid mx-auto d-block" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title">
                                        <h4 class="title mb-4"><i class="mdi mdi-chevron-double-right text-primary"></i> High Performing Landing App</h4>
                                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                                        <ul class="list-unstyled text-muted">
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </b-tab>
                        <b-tab>
                            <template v-slot:title>
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Creative Design</h4>
                                </div>
                            </template>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="images/app/3.png" class="img-fluid mx-auto d-block" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title">
                                        <h4 class="title mb-4"><i class="mdi mdi-chevron-double-right text-primary"></i> Creative Design and Clean Code</h4>
                                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                                        <ul class="list-unstyled text-muted">
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </b-tab>
                        <b-tab>
                            <template v-slot:title>
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">24 / 7 Support</h4>
                                </div>
                            </template>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="images/app/4.png" class="img-fluid mx-auto d-block" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title">
                                        <h4 class="title mb-4"><i class="mdi mdi-chevron-double-right text-primary"></i> 24 / 7 App Supports and Responsive</h4>
                                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                                        <ul class="list-unstyled text-muted">
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                                        </ul>
                                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </b-tab>
                    </b-tabs>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Showcase End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Price Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Choose The Pricing Plan</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates bg-light py-5 border-0 rounded text-center">
                        <div class="card-body">
                            <h2 class="title text-uppercase mb-4">Free</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">0</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates starter-plan bg-light py-5 border-0 rounded text-center">
                        <div class="card-body">
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

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates bg-light py-5 border-0 rounded text-center">
                        <div class="card-body">
                            <h2 class="title text-uppercase mb-4">Professional</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">59</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
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
    <!-- Price End -->

    <!-- Testi n Download cta start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <carousel id="customer-testi" class="owl-carousel owl-theme" :per-page="3" dir="ltr" :autoplay="true">
                        <Slide>
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi border-0 text-center">
                                <div class="card-body">
                                    <img src="images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                    <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith</h6>
                                </div>
                            </div>
                        </Slide>
                    </carousel>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Get the App now !</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
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
    <!-- Testi n Download cta End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Section End -->
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
