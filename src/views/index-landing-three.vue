<script>
import {
    ArrowUpIcon,
    ChevronRightIcon,
    ArrowRightIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-landing-three component
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
        ChevronRightIcon,
        ArrowRightIcon
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />

    <!-- Hero Start -->
    <section class="bg-half-260 bg-primary d-table w-100" style="background: url('images/bg.png') center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="title-heading">
                        <h1 class="heading text-white title-dark mb-4">Powerfull analytics <br> tools for your business</h1>
                        <p class="para-desc mx-auto text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-light"><i class="mdi mdi-email"></i> Get Started</a>
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

    <!-- FEATURES START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="features-absolute">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media features p-4 bg-white shadow rounded">
                                    <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                        <i class="uil uil-comment-verify"></i>
                                    </div>
                                    <div class="content ml-4">
                                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Instant Chat</a></h5>
                                        <p class="text-muted mb-0">The most well-known dummy text is the, which is said to have originated in the 16th century.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="media features p-4 bg-white shadow rounded">
                                    <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                        <i class="uil uil-image"></i>
                                    </div>
                                    <div class="content ml-4">
                                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Media Messages</a></h5>
                                        <p class="text-muted mb-0">The most well-known dummy text is the, which is said to have originated in the 16th century.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="media features p-4 bg-white shadow rounded">
                                    <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                        <i class="uil uil-video"></i>
                                    </div>
                                    <div class="content ml-4">
                                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Video Messages</a></h5>
                                        <p class="text-muted mb-0">The most well-known dummy text is the, which is said to have originated in the 16th century.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 mt-4 pt-2">
                                <div class="media features p-4 bg-white shadow rounded">
                                    <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                        <i class="uil uil-database-alt"></i>
                                    </div>
                                    <div class="content ml-4">
                                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Dedicated Server</a></h5>
                                        <p class="text-muted mb-0">The most well-known dummy text is the, which is said to have originated in the 16th century.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12 mt-4 pt-2 text-center">
                                <a href="javascript:void(0)" class="text-primary h6">Explore features <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- About Start -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                <div class="card-body p-0">
                                    <img src="images/course/online/ab01.jpg" class="img-fluid" alt="work-image">
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Web Development</a>
                                        <small class="text-light">IT & Software</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="images/course/online/ab02.jpg" class="img-fluid" alt="work-image">
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="content">
                                                <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Michanical Engineer</a>
                                                <small class="text-light">Engineering</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                    <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="images/course/online/ab03.jpg" class="img-fluid" alt="work-image">
                                            <div class="overlay-work bg-dark"></div>
                                            <div class="content">
                                                <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Chartered Accountant</a>
                                                <small class="text-light">C.A.</small>
                                            </div>
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
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                    <div class="ml-lg-4">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">About Our Story</h4>
                            <p class="text-muted para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <p class="text-muted para-desc mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words.</p>
                        </div>

                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Fully Responsive</li>
                            <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Multiple Layouts</li>
                            <li class="mb-0"><span class="text-primary h4 mr-2"><i class="uim uim-check-circle"></i></span>Suits Your Style</li>
                        </ul>

                        <div class="watch-video mt-4 pt-2">
                            <a href="#" class="btn btn-primary mb-2">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                            <a href="javascript: void(0);" v-b-modal.modal class="video-play-icon watch text-dark mb-2 ml-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> Watch Video !</a>
                        </div>
                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <youtube video-id="jNTZpfXYJa4" ref="youtube" width="750" height="450"></youtube>
                        </b-modal>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="images/landing/3.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-md-left text-center">
                        <h4 class="title mb-4">Collaborate with your <br> team anytime and anywhare.</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="media align-items-center text-left mt-4 pt-2">
                            <div class="text-primary h4 mb-0 mr-3 p-3 rounded-md shadow">
                                <i class="uil uil-capture"></i>
                            </div>
                            <div class="media-body">
                                <a href="javascript:void(0)" class="text-dark h6">Find Better Leads</a>
                            </div>
                        </div>

                        <div class="media align-items-center text-left mt-4">
                            <div class="text-primary h4 mb-0 mr-3 p-3 rounded-md shadow">
                                <i class="uil uil-file"></i>
                            </div>
                            <div class="media-body">
                                <a href="javascript:void(0)" class="text-dark h6">Set Instant Metting</a>
                            </div>
                        </div>

                        <div class="media align-items-center text-left mt-4">
                            <div class="text-primary h4 mb-0 mr-3 p-3 rounded-md shadow">
                                <i class="uil uil-credit-card-search"></i>
                            </div>
                            <div class="media-body">
                                <a href="javascript:void(0)" class="text-dark h6">Get Paid Seemlessly</a>
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

    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <h6 class="text-primary">Partners</h6>
                        <h4 class="title mb-4 mb-lg-0">Manage your client <br> smartly with instappoint</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <p class="text-muted mb-0 mx-auto para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center pt-5">
                    <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5">
                    <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5">
                    <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5">
                    <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5">
                    <img src="images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-5">
                    <img src="images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title text-md-left text-center">
                        <h4 class="title mb-4">You have any questions ?</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <ul class="list-unstyled text-muted mt-4 mb-0">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="faq-content">
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

                            <b-card no-body class="mb-2 rounded border-bottom">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-4 href="javascript: void(0);">
                                        <h6 class="title mb-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-4" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>

                            <b-card no-body class="mb-2 rounded border-bottom">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-5 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How can i contact your technical team ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-5" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-5 pt-md-4 justify-content-center">
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
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
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
