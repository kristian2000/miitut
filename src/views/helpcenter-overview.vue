<script>
import {
    ArrowUpIcon
} from 'vue-feather-icons';
import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Helpcenter-overview component
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
                        <h4 class="title"> Hello! <br> How can we help you? </h4>

                        <div class="subcribe-form mt-4 pt-2">
                            <form>
                                <div class="form-group mb-0">
                                    <input type="text" id="help" name="name" class="border bg-white rounded-pill shadow" required="" placeholder="Search your questions or topic...">
                                    <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <router-link to="/helpcenter-overview">Help Center</router-link>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
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
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="mb-4">Find the help you need</h4>
                        <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block mb-2 h2">
                                <i class="uil uil-question-circle"></i>
                            </div>
                            <div class="content mt-3">
                                <router-link to="/helpcenter-faqs" class="title h5 text-dark">FAQs</router-link>
                                <p class="text-muted mt-3 mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block mb-2 h2">
                                <i class="uil uil-file-bookmark-alt"></i>
                            </div>
                            <div class="content mt-3">
                                <router-link to="/helpcenter-guides" class="title h5 text-dark">Guides / Support</router-link>
                                <p class="text-muted mt-3 mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block mb-2 h2">
                                <i class="uil uil-cog"></i>
                            </div>
                            <div class="content mt-3">
                                <router-link to="/helpcenter-support-request" class="title h5 text-dark">Support Request</router-link>
                                <p class="text-muted mt-3 mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
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
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="mb-4">Get Started</h4>
                        <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-9 mt-4 pt-2">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExampleone">
                            <b-card no-body class="mb-2 border-0 rounded">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-1 href="javascript: void(0);">
                                        <h6 class="title mb-0"> How does it work ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-1" visible accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0 rounded">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-2 href="javascript: void(0);">
                                        <h6 class="title mb-0"> What is the main process open account ?</h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans"> Do I need a designer to use Landrick ? </p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>
                            <b-card no-body class="mb-2 border-0 rounded">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-3 href="javascript: void(0);">
                                        <h6 class="title mb-0"> What do I need to do to start selling ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
                                    <b-card-body class="px-2 py-4">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </b-card-body>
                                </b-collapse>
                            </b-card>

                            <b-card no-body class="mb-2 border-0 rounded">
                                <b-card-header class="border-0 bg-light p-3 pr-5">
                                    <a class="faq position-relative text-dark" v-b-toggle.accordion-4 href="javascript: void(0);">
                                        <h6 class="title mb-0"> What happens when I receive an order ? </h6>
                                    </a>
                                </b-card-header>
                                <b-collapse id="accordion-4" accordion="my-accordion" role="tabpanel">
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
