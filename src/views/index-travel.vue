<script>
import {
    ArrowUpIcon,
    MailIcon,
    ArrowRightIcon,
    MapPinIcon,
    ArrowDownIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-travel component
 */
export default {
    data() {
        return {
            date: null,
            checkoutdate: null
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        MailIcon,
        ArrowRightIcon,
        MapPinIcon,
        ArrowDownIcon,
        flatPickr
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/travel/bg.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="title-heading mt-4">
                        <h1 class="display-4 font-weight-bold text-white title-dark mb-3">Booking tour <br> made easy</h1>
                        <p class="para-desc text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-light">
                                <arrow-down-icon class="icons"></arrow-down-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card login_page shadow rounded border-0 ml-lg-5">
                        <div class="card-body">
                            <h5 class="card-title">You can start search here</h5>

                            <form class="login-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Destination</label>
                                            <map-pin-icon class="fea icon-sm icons"></map-pin-icon>
                                            <input type="text" class="form-control pl-5" placeholder="Whare" name="s" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Check in : </label>
                                            <flat-pickr v-model="date" class="flatpickr flatpickr-input form-control" id="checkin-date" name="date">
                                            </flat-pickr>

                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Check out : </label>
                                            <flat-pickr v-model="checkoutdate" class="flatpickr flatpickr-input form-control" id="checkout-date" name="date">
                                            </flat-pickr>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Email</label>
                                            <mail-icon class="fea icon-sm icons"></mail-icon>
                                            <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success w-100">Search Now</button>
                                    </div>
                                </div>
                            </form>
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
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Benefit for Traveller</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-shield-check"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Secure Payment</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-shield-check"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-thumbs-up"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Easy Book</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-thumbs-up"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-keyboard-show"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Free Amenities</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-keyboard-show"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-award"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Best Offers</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-award"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-bookmark"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Cheap than Other</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-bookmark"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-favorite"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Top Rated</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-favorite"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-clock"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>24/7 Support</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-clock"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-process"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Fast Refund</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-process"></i>
                        </span>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-12 text-center col-md-4 mt-4 pt-2">
                    <a href="javascript:void(0)" class="btn btn-primary">See more <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-end mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-left">
                        <h6 class="text-primary">Find Out Most</h6>
                        <h4 class="title mb-4">Popular Destination</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0">
                    <div class="text-center text-md-right">
                        <a href="javascript:void(0)" class="text-primary h6">See More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 pt-2">
                    <carousel id="six-slide" class="owl-carousel owl-theme" :loop="true" dir="ltr" :pagination-enabled="false" :per-page="6" :auto-play="true">
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/dubai.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Dubai</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/thailand.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Thailand</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/india.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">India</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/london.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Londan</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/paris.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Paris</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/singapore.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Singapore</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/dubai.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Dubai</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/thailand.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Thailand</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                        <Slide>
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-3">
                                <img src="images/travel/india.jpg" class="img-fluid" alt="">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">India</a>
                                </div>
                            </div>
                            <!--end tour post-->
                        </Slide>
                    </carousel>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end section-->

    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title font-weight-bold mb-4">Everyone Needs Travel. <br> Want to Break Free for a While</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/travel/1.jpg" class="card-img-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Conversations, Feedback, Recognition</a></h5>
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

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">Experience Luxury & <br> Find Your Base</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Search Destination <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="images/travel/3.jpg" class="img-fluid rounded shadow-md" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">100% Money back <br> Guarantee if You Cancel</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                        <div class="faq-content mt-4 pt-2">
                            <div class="accordion" id="accordionExampleone">
                                <b-card no-body class="mb-2 rounded border-bottom">
                                    <b-card-header class="border-0 bg-light p-3 pr-5">
                                        <a class="faq position-relative text-dark" v-b-toggle.accordion-1 href="javascript: void(0);">
                                            <h6 class="title mb-0"> How our <span class="text-primary">Landrick</span> work ? </h6>
                                        </a>
                                    </b-card-header>
                                    <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                                        <b-card-body class="px-2 py-4">
                                            <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>
                                <b-card no-body class="mb-2 rounded border-bottom">
                                    <b-card-header class="border-0 bg-light p-3 pr-5">
                                        <a class="faq position-relative text-dark" v-b-toggle.accordion-2 href="javascript: void(0);">
                                            <h6 class="title mb-0"> What is the main process open account ?</h6>
                                        </a>
                                    </b-card-header>
                                    <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                                        <b-card-body class="px-2 py-4">
                                            <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>
                                <b-card no-body class="mb-2 rounded border-bottom">
                                    <b-card-header class="border-0 bg-light p-3 pr-5">
                                        <a class="faq position-relative text-dark" v-b-toggle.accordion-3 href="javascript: void(0);">
                                            <h6 class="title mb-0"> How to make unlimited data entry ? </h6>
                                        </a>
                                    </b-card-header>
                                    <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
                                        <b-card-body class="px-2 py-4">
                                            <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                        </b-card-body>
                                    </b-collapse>
                                </b-card>
                            </div>
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
                    <img src="images/travel/2.jpg" class="img-fluid rounded shadow-md" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">We have More than 500 <br> Selected Destination</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Search Destination <i class="mdi mdi-chevron-right"></i></a>
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
                        <h4 class="title mb-4">Whats Our Clients Said About <span class="text-primary">Landrick</span> Project</h4>
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
