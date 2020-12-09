<script>
import {
    ArrowUpIcon
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
 * Index-services component
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
        countTo
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
                <div class="col-lg-7 col-md-7">
                    <div class="title-heading mt-4">
                        <h1 class="heading mb-3">Build Anything <br>For Your Project</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="watch-video mt-4 pt-2">
                            <router-link to="/page-services" class="btn btn-primary mb-2 mr-2">Our Services</router-link>
                            <a href="javascript: void(0);" v-b-modal.modal class="video-play-icon watch text-dark mb-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> WATCH VIDEO</a>
                        </div>
                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <youtube video-id="jNTZpfXYJa4" ref="youtube" width="750" height="450"></youtube>
                        </b-modal>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="images/illustrator/services.svg" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Feature Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/stairs.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Built for Everyone</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam eleifend aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/device.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Responsive Design</h4>
                            <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the established text by compiling unusual word.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/code.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Build Everything</h4>
                            <p class="text-muted mb-0">It seems that only fragments of the original text remain in only fragments the Lorem Ipsum texts used today.</p>
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
    <!-- Feature End -->

    <!-- counter Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title mr-lg-5">
                        <h4 class="title mb-4">Get Notified About Importent Email</h4>
                        <p class="text-muted">This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic.</p>
                        <a href="javascript:void(0)" class="btn btn-outline-primary">Start Now <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 order-1 order-md-2">
                    <img src="images/laptop.png" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center" id="counter">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="counter-box text-center px-lg-4">
                        <h2 class="mb-0 text-primary display-4">
                            <countTo :startVal='3' :endVal="97" :duration="4000"></countTo>%
                        </h2>
                        <h5 class="counter-head">Happy Client</h5>
                        <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="counter-box text-center px-lg-4">
                        <h2 class="mb-0 text-primary display-4">
                            <countTo :startVal='1' :endVal="15" :duration="4000"></countTo>+
                        </h2>
                        <h5 class="counter-head">Awards</h5>
                        <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="counter-box text-center px-lg-4">
                        <h2 class="mb-0 text-primary display-4">
                            <countTo :startVal='3' :endVal="98" :duration="4000"></countTo>%
                        </h2>
                        <h5 class="counter-head">Project Complete</h5>
                        <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- counter End -->

    <!-- Testimonial Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="images/illustrator/analyze_report_4.svg" class="mr-md-4" alt="">
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-5">
                        <h4 class="title mb-4">Clean And Modern Code</h4>
                        <p class="text-muted">This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic.</p>
                        <a href="javascript:void(0)" class="btn btn-outline-primary">Start Now <i class="mdi mdi-chevron-right"></i></a>
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
                        <h4 class="title mb-4">Our Happy Customers</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-12 mt-4">
                    <carousel id="customer-testi" class="owl-carousel owl-theme" dir="ltr" :per-page="3">
                        <Slide>
                            <div class="card customer-testi text-center border-0 shadow rounded m-2">
                                <div class="card-body">
                                    <img src="images/client/amazon.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                    <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi text-center border-0 shadow rounded m-2">
                                <div class="card-body">
                                    <img src="images/client/google.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                    <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi text-center border-0 shadow rounded m-2">
                                <div class="card-body">
                                    <img src="images/client/lenovo.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                    <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi text-center border-0 shadow rounded m-2">
                                <div class="card-body">
                                    <img src="images/client/paypal.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                    <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi text-center border-0 shadow rounded m-2">
                                <div class="card-body">
                                    <img src="images/client/shopify.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                    <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle</h6>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card customer-testi text-center border-0 shadow rounded m-2">
                                <div class="card-body">
                                    <img src="images/client/spotify.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
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
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Subscribe for our Latest Newsletter</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-lg-7 col-md-10">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end form-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Testimonial End -->
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
