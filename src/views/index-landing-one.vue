<script>
import {
    ArrowUpIcon,
    EyeIcon,
    ArrowRightIcon,
    HeartIcon,
    BoldIcon,
    FeatherIcon,
    CodeIcon,
    MonitorIcon,
    UserCheckIcon,
    GitMergeIcon,
    SettingsIcon
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
 * Index-landing-one component
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
        EyeIcon,
        ArrowRightIcon,
        BoldIcon,
        FeatherIcon,
        CodeIcon,
        MonitorIcon,
        UserCheckIcon,
        GitMergeIcon,
        SettingsIcon,
        HeartIcon,
        countTo
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />

    <!-- Hero Start -->
    <section class="bg-half-260 pb-lg-0 pb-md-4 bg-primary d-table w-100">
        <div class="bg-overlay bg-black" style="opacity: 0.8;"></div>
        <div class="container">
            <div class="row position-relative" style="z-index: 1;">
                <div class="col-md-7 col-12 mt-lg-5">
                    <div class="title-heading">
                        <h1 class="heading text-white title-dark mb-4">Bluid your audiance <br> and sale more</h1>
                        <p class="para-desc text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary mb-2">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=jNTZpfXYJa4" class="video-play-icon watch text-white title-dark mb-2 ml-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle text-white title-dark position-relative play play-iconbar"></i> WATCH VIDEO</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-5 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="shape-before">
                        <div class="carousel-cell"><img src="images/landing/2.jpg" class="img-fluid rounded-md" alt=""></div>
                        <img src="images/shapes/shape1.png" class="img-fluid shape-img" alt="">
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
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-ontent-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Solutions made for you</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <user-check-icon class="fea icon-ex-md text-primary"></user-check-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">W3c Valid Code</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
                    <div class="media key-feature align-items-center p-3 rounded-md shadow">
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
        <!--ed container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <h4 class="title mb-4">Trusted client by over <br> <span class="text-primary">10000+</span> of the world’s</h4>
                        <p class="text-muted mb-0 mx-auto para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="row" id="counter">
                        <div class="col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div class="content text-center">
                                <h1 class="mb-0">
                                    <countTo :startVal="1" :duration="4000" :endVal="10000"></countTo>+
                                </h1>
                                <ul class="list-unstyled mb-0 h5">
                                    <li class="list-inline-item"><i class="mdi mdi-heart text-danger"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-heart text-danger"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-heart text-danger"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-heart text-danger"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-heart text-danger"></i></li>
                                </ul>
                                <h6>Trusted Users</h6>
                            </div>
                        </div>

                        <div class="col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div class="content text-center">
                                <h1 class="mb-0">
                                    <countTo :startVal="1" :duration="4000" :endVal="1402"></countTo>+
                                </h1>
                                <ul class="list-unstyled mb-0 h5">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <h6>Users Review</h6>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-ontent-center mt-4">
                        <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                            <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                            <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                            <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-3 col-6 text-center py-4">
                            <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                        </div>
                        <!--end col-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="video-solution-cta position-relative" style="z-index: 1;">
                        <div class="position-relative">
                            <img src="images/email/1.png" class="img-fluid" alt="">
                            <div class="play-icon">
                                <a href="https://www.youtube.com/watch?v=sZ7bKASht8w" class="play-btn video-play-icon">
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
                                                <h6 class="text-white-50">Customers needs</h6>
                                                <h4 class="title text-white mb-0 title-dark">Control Everything <br> in a single place</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-4 pt-md-2">
                                            <div class="section-title text-md-left">
                                                <p class="text-white-50 para-desc">Start working with <span class="text-light title-dark">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                <a href="javascript:void(0)" class="text-light title-dark">Read More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
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

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="images/course/online/ab01.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
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

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <div class="text-right">
                        <img src="images/course/online/ab03.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-md-left text-center">
                        <h4 class="title mb-4">Whats our clients said <br> about landrick project</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="row justify-content-center">
                            <div class="col-lg-12 mt-4">
                                <carousel id="single-owl" class="owl-carousel owl-theme" dir="ltr" :per-page="1">
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
                        <h4 class="title mb-4">See everything about your employee at one place.</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2">Get Started Now</a>
                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2">Free Trial</a>
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
    <!-- End -->

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
