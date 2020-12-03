<script>
import {
    ArrowUpIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-studio component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon
    }
}
</script>

<template>
<div>
    <Navbar :is-white-navbar="true" />
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('images/3.jpg') center center;" id="home">
        <div class="container">
            <div class="row position-relative align-items-center pt-4">
                <div class="col-lg-7 offset-lg-5">
                    <div class="title-heading studio-home rounded bg-white shadow mt-5">
                        <h1 class="heading mb-3">Present Your Work With <span class="text-primary">Landrick</span> Studio</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="mt-4">
                            <router-link to="/page-contact-one" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-phone"></i> Get Started</router-link>
                            <router-link to="/documentation" class="btn btn-outline-primary mt-2"><i class="mdi mdi-book-outline"></i> Documentation</router-link>
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

    <!-- Partners start -->
    <section class="py-4 bg-light">
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

    <!-- Work Process Start -->
    <section class="section">
        <!--(.work-process) css write in (_feature.scss)-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Work Process</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card work-process border-0 rounded shadow">
                        <div class="card-body">
                            <h4 class="title">Discuss The Project</h4>
                            <p class="text-muted para">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                            <a href="javascript:void(0)" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled d-flex justify-content-between mb-0 mt-2">
                                <li class="step h1 mb-0 font-weight-bold">Step 01.</li>
                                <li class="step-icon"><i class="mdi mdi-chevron-double-right mdi-36px"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card work-process border-0 rounded shadow">
                        <div class="card-body">
                            <h4 class="title">Develop & Elaborate</h4>
                            <p class="text-muted para">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                            <a href="javascript:void(0)" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled d-flex justify-content-between mb-0 mt-2">
                                <li class="step h1 mb-0 font-weight-bold">Step 02.</li>
                                <li class="step-icon"><i class="mdi mdi-chevron-double-right mdi-36px"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="card work-process border-0 rounded shadow">
                        <div class="card-body">
                            <h4 class="title">Final Approvement</h4>
                            <p class="text-muted para">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                            <a href="javascript:void(0)" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                            <ul class="list-unstyled d-flex justify-content-between mb-0 mt-2">
                                <li class="step h1 mb-0 font-weight-bold">Step 03.</li>
                                <li class="step-icon"><i class="mdi mdi-check-all mdi-36px"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 pt-50">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Our Latest Projects</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img src="images/work/1.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Iphone mockup</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Branding</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img src="images/work/2.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Mockup Collection</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img src="images/work/3.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Abstract images</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Abstract</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img src="images/work/4.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Yellow bg with Books</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Books</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img src="images/work/5.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Company V-card</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">V-card</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img src="images/work/6.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Mockup box with paints</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Photography</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    <router-link to="/page-work-modern" class="btn btn-primary">See More <i class="mdi mdi-arrow-right"></i></router-link>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">See everything about your workplace</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="mt-3">
                            <a href="#" class="btn btn-primary mt-2 mr-2">Buy Now <span class="badge badge-pill badge-danger ml-2">v2.5</span></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#LoginForm" class="btn btn-outline-primary mt-2"><i class="mdi mdi-account-check-outline"></i> Free Trial</a>
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
    <!-- Work Process End -->

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
