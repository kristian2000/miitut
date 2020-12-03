<script>
import {
    VueTyper
} from 'vue-typer'
import {
    ArrowUpIcon,
    PlayIcon
} from 'vue-feather-icons';
import countTo from 'vue-count-to';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-business component
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
        PlayIcon,
        'vue-typer': VueTyper,
        countTo
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-170 border-bottom d-table w-100" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="title-heading mt-4">
                        <div class="alert alert-light alert-pills shadow" role="alert">
                            <span class="badge badge-pill badge-danger mr-1">v2.5</span>
                            <span class="content"> Build <span class="text-primary">anything</span> you want - Landrick.</span>
                        </div>
                        <h1 class="heading mb-3">Leading Digital Business For <span class="element text-primary">
                                <vue-typer :text='["Agency","Software", "Technology", "Studio", "Webapps"]'></vue-typer>
                            </span> Solution</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-outline-primary rounded"><i class="mdi mdi-google-my-business"></i> Make Your Shop</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="images/busi01.jpg" class="rounded img-fluid mx-auto d-block" alt="">
                        <div class="play-icon">
                            <a href="http://vimeo.com/287684225" class="play-btn video-play-icon">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
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

    <!-- Feature Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">What We Do ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features mt-5">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/pen.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Design & Development</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/video.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Management & Marketing</h4>
                            <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by established compiling unusual word.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/intellectual.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Stratagy & Research</h4>
                            <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem the original Ipsum texts used today.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/user.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Easy To Use</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/calendar.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Daily Reports</h4>
                            <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by established compiling unusual word.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/sand-clock.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Real Time Zone</h4>
                            <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts the original used today.</p>
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
    <!-- End feature -->

    <!-- CTA Start -->
    <section class="section bg-cta" data-jarallax='{"speed": 0.5}' style="background: url('images/2.jpg');" id="cta">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title title-dark text-white mb-4">Stop leaving money on the table.</h4>
                        <p class="text-light para-dark para-desc mx-auto">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <a href="javascript: void(0);" v-b-modal.modal class="play-btn border border-light mt-4 video-play-icon">
                            <play-icon class="fea icon-ex-md text-white title-dark"></play-icon>
                        </a>
                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <youtube video-id="jNTZpfXYJa4" ref="youtube" width="750" height="450"></youtube>
                        </b-modal>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- CTA End -->

    <!-- Price Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Choose Simple Pricing</h4>
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
        <!-- Price End -->

        <!-- Counter End -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title mb-4">See everything about your <span class="text-primary">Landrick</span> Business</h4>
                        <p class="text-muted para-desc">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6">
                    <div class="row ml-lg-5" id="counter">
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div class="card counter-box border-0 bg-light shadow text-center rounded">
                                        <div class="card-body py-5">
                                            <h2 class="mb-0">
                                                <countTo :startVal="3" :endVal="97" :duration="4000"></countTo>%
                                            </h2>
                                            <h5 class="counter-head mb-0">Happy Client</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card counter-box border-0 bg-primary shadow text-center rounded">
                                        <div class="card-body py-5">
                                            <h2 class="text-light title-dark mb-0">
                                                <countTo :startVal="1" :endVal="15" :duration="4000"></countTo>+
                                            </h2>
                                            <h5 class="counter-head mb-0 title-dark text-light">Awards</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end Row-->
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="row pt-lg-4 mt-lg-4">
                                <div class="col-12 mt-4 pt-2">
                                    <div class="card counter-box border-0 bg-success shadow text-center rounded">
                                        <div class="card-body py-5">
                                            <h2 class="text-light title-dark mb-0">
                                                <countTo :startVal="0" :endVal="2" :duration="4000"> </countTo>K
                                            </h2>
                                            <h5 class="counter-head mb-0 title-dark text-light">Job Placement</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card counter-box border-0 bg-light shadow text-center rounded">
                                        <div class="card-body py-5">
                                            <h2 class="mb-0">
                                                <countTo :startVal="3" :endVal="98" :duration="4000"></countTo>%
                                            </h2>
                                            <h5 class="counter-head mb-0">Project Complete</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end Row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end Row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Counter End -->

    <!-- News Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Latest News</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
    <!-- News End -->
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
.vue-typer .custom.char.typed {
    color: #2f55d4;
}

.modal-content {
    background-color: transparent;
}
</style>
