<script>
import {
    ArrowUpIcon,
    HelpCircleIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-pricing component
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
        HelpCircleIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> Pricing </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                </ul>
                            </nav>
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
    <!-- Hero End -->

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
                        <h4 class="title mb-4">Pricing #1</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-5">
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
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
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
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Installment</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-5">
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

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Pricing #2</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-12 mt-4 pt-2">
                    <div class="text-center">
                        <b-tabs pills justified nav-class="justify-content-center d-inline-block border py-1 px-2 rounded-pill">
                            <b-tab title-item-class="d-inline-block" title-link-class="px-3 rounded-pill">
                                <template v-slot:title>
                                    Monthly
                                </template>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
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

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
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

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
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

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
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
                            </b-tab>
                            <b-tab title-item-class="d-inline-block" title-link-class="px-3 rounded-pill">
                                <template v-slot:title>
                                    Yearly <span class="badge badge-pill badge-success">15% Off </span>
                                </template>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                                            <div class="card-body">
                                                <h2 class="title text-uppercase mb-4">Free</h2>
                                                <div class="d-flex mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">10</span>
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

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="card pricing-rates business-rate shadow bg-white border-0 rounded">
                                            <div class="card-body">
                                                <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                                                <div class="d-flex mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">139</span>
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

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                                            <div class="card-body">
                                                <h2 class="title text-uppercase mb-4">Professional</h2>
                                                <div class="d-flex mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">159</span>
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

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="card pricing-rates business-rate shadow bg-light border-0 rounded">
                                            <div class="card-body">
                                                <h2 class="title text-uppercase mb-4">Ultimate</h2>
                                                <div class="d-flex mb-4">
                                                    <span class="h4 mb-0 mt-2">$</span>
                                                    <span class="price h1 mb-0">179</span>
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
                            </b-tab>
                        </b-tabs>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Price End -->

        <!-- Testi Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Client Reviews</h4>
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
    </section>
    <!--end section-->
    <!-- Testi End -->

    <!-- FAQ n Contact Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                            <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
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

            <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="mt-4 pt-2">
                            <router-link to="/page-contact-two" class="btn btn-primary">Contact us <i class="mdi mdi-arrow-right"></i></router-link>
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
    <!-- FAQ n Contact End -->

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
