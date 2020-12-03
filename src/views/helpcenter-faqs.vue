<script>
import {
    ArrowUpIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Helpcenter-faqs component
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
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> Frequently Asked Questions </h4>

                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <router-link to="/helpcenter-overview">Help Center</router-link>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">FAQs</li>
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

    <!-- Start Section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-12 d-none d-md-block">
                    <div class="rounded shadow p-4 sticky-bar">
                        <ul class="list-unstyled mb-0">
                            <li><a href="javascript: void(0);" v-scroll-to="{el:'#tech', offset: -100,  duration: 500}" class="mouse-down h6 text-dark">Buying Questions</a></li>
                            <li class="mt-4"><a href="javascript: void(0);" v-scroll-to="{el:'#general', offset: -100,  duration: 500}" class="mouse-down h6 text-dark">General Questions</a></li>
                            <li class="mt-4"><a href="javascript: void(0);" v-scroll-to="{el:'#payment', offset: -100,  duration: 500}" class="mouse-down h6 text-dark">Payments Questions</a></li>
                            <li class="mt-4"><a href="javascript: void(0);" v-scroll-to="{el:'#support', offset: -100,  duration: 500}" class="mouse-down h6 text-dark">Support Questions</a></li>
                        </ul>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-7 col-12">
                    <div class="section-title" id="tech">
                        <h4>Buying Product</h4>
                    </div>
                    <div class="faq-content mt-4 pt-2">
                        <div class="accordion" id="accordionExampleone">
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-1 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How our<span class="text-primary"> Landrick</span> work ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
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
                            <b-card no-body class="mb-2 border-0  rounded ">
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
                            <b-card no-body class="mb-2 border-0  rounded ">
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
                            <b-card no-body class="mb-2 border-0  rounded ">
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

                    <div class="section-title mt-5" id="general">
                        <h4>General Questions</h4>
                    </div>

                    <div class="faq-content mt-4 pt-3">
                        <div class="accordion" id="accordionExampletwo">
                            <b-card no-body class="mb-2 border-0 rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion2-1 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How our<span class="text-primary"> Landrick</span> work ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion2-1" visible accordion="accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion2-2 href="javascript: void(0);">
                                        <h6 class="title mb-0"> What is the main process open account ?</h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion2-2" accordion="accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion2-3 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How to make unlimited data entry ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion2-3" accordion="accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion2-4 href="javascript: void(0);">
                                        <h6 class="title mb-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion2-4" accordion="accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion2-5 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How can i contact your technical team ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion2-5" accordion="accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                        </div>
                    </div>

                    <div class="section-title mt-5" id="payment">
                        <h4>Payments Questions</h4>
                    </div>

                    <div class="faq-content mt-4 pt-3">
                        <div class="accordion" id="accordionExamplethree">
                            <b-card no-body class="mb-2 border-0 rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.paymentaccordion-1 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How our<span class="text-primary"> Landrick</span> work ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="paymentaccordion-1" visible accordion="paymentaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.paymentaccordion-2 href="javascript: void(0);">
                                        <h6 class="title mb-0"> What is the main process open account ?</h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="paymentaccordion-2" accordion="paymentaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.paymentaccordion-3 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How to make unlimited data entry ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="paymentaccordion-3" accordion="paymentaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.paymentaccordion-4 href="javascript: void(0);">
                                        <h6 class="title mb-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="paymentaccordion-4" accordion="paymentaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
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

                    <div class="section-title mt-5" id="support">
                        <h4>Support Questions</h4>
                    </div>

                    <div class="faq-content mt-4 pt-3">
                        <div class="accordion" id="accordionExamplefour">
                            <b-card no-body class="mb-2 border-0 rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.supportaccordion-1 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How our<span class="text-primary"> Landrick</span> work ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="supportaccordion-1" visible accordion="supportaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.supportaccordion-2 href="javascript: void(0);">
                                        <h6 class="title mb-0"> What is the main process open account ?</h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="supportaccordion-2" accordion="supportaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.supportaccordion-3 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How to make unlimited data entry ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="supportaccordion-3" accordion="supportaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.supportaccordion-4 href="javascript: void(0);">
                                        <h6 class="title mb-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="supportaccordion-4" accordion="supportaccordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0  rounded ">
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
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="media align-items-center shadow rounded p-4 features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-envelope-check"></i>
                        </div>
                        <div class="content ml-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Get in Touch !</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                            <div class="mt-2">
                                <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Submit a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="media align-items-center shadow rounded p-4 features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-webcam"></i>
                        </div>
                        <div class="content ml-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Start a Meeting</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                            <div class="mt-2">
                                <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Start Video Chat</a>
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
    <!-- End Section -->

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
