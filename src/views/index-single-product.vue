<script>
import {
    ArrowUpIcon,
    CameraIcon,
    WifiIcon,
    EyeIcon,
    VideoIcon,
    RssIcon,
    BatteryIcon,
    CpuIcon,
    GitMergeIcon,
    CompassIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-single-product component
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
        VueSlickCarousel,
        CameraIcon,
        WifiIcon,
        EyeIcon,
        VideoIcon,
        RssIcon,
        BatteryIcon,
        CpuIcon,
        GitMergeIcon,
        CompassIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center" style="background: url('images/single/bg01.jpg') center center; height: auto;" id="home">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                    <div class="title-heading margin-top-100">
                        <h1 class="display-4 font-weight-bold mb-3">DJI Professional Drone Camera</h1>
                        <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript: void(0);" v-b-modal.modal class="video-play-icon watch text-dark"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> WATCH VIDEO</a>
                        </div>
                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="99025203" />
                        </b-modal>
                    </div>

                    <div class="home-dashboard">
                        <img src="images/single/1.png" alt="" class="img-fluid mover">
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
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 p-4 text-center">
                    <img src="images/icon/camera.svg" height="45" alt="">
                    <h5 class="mt-2">Camera</h5>
                    <p class="text-muted mb-0">48 mp at 60mtr</p>
                </div>
                <!--end col-->

                <div class="col-md-3 col-6 p-4 text-center">
                    <img src="images/icon/speedometer.svg" height="45" alt="">
                    <h5 class="mt-2">Speed</h5>
                    <p class="text-muted mb-0">50 kph</p>
                </div>
                <!--end col-->

                <div class="col-md-3 col-6 p-4 text-center">
                    <img src="images/icon/low-battery.svg" height="45" alt="">
                    <h5 class="mt-2">Battery</h5>
                    <p class="text-muted mb-0">1 hour and 30 min</p>
                </div>
                <!--end col-->

                <div class="col-md-3 col-6 p-4 text-center">
                    <img src="images/icon/game.svg" height="45" alt="">
                    <h5 class="mt-2">Control</h5>
                    <p class="text-muted mb-0">20 km Range</p>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="images/single/camera.png" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-3">
                        <h4 class="title mb-4">DJI 48MP Camera</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
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

    <!-- Description Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="images/single/drone.gif" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Awesome Features</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <camera-icon class="fea icon-ex-md text-primary"></camera-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">48mp Camera</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <wifi-icon class="fea icon-ex-md text-primary"></wifi-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Faster Connection</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <eye-icon class="fea icon-ex-md text-primary"></eye-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Easy to Operate</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <video-icon class="fea icon-ex-md text-primary"></video-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Stable Video</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <rss-icon class="fea icon-ex-md text-primary"></rss-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Powerful Antenna</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <battery-icon class="fea icon-ex-md text-primary"></battery-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Battery Backup</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <cpu-icon class="fea icon-ex-md text-primary"></cpu-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Advance Technology</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <compass-icon class="fea icon-ex-md text-primary"></compass-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Easy Disassembly</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <git-merge-icon class="fea icon-ex-md text-primary"></git-merge-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Rebust Structure</h4>
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
                <div class="col-md-7">
                    <div class="position-relative">
                        <img src="images/single/bg02.jpg" class="rounded img-fluid mx-auto d-block" alt="">
                        <div class="play-icon">
                            <a href="javascript: void(0);" v-b-modal.modal-1 class="play-btn shadow video-play-icon">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
                        </div>
                        <b-modal id="modal-1" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="287684225" />
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
    <!-- Description End -->

    <!-- Testimonial Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Client's Feedback</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 pt-2 mt-2 text-center">
                    <carousel id="customer-testi" class="owl-carousel owl-theme" dir="ltr" :per-page="3">
                        <Slide>
                            <div class="card customer-testi m-2 text-center rounded shadow border-0">
                                <div class="card-body">
                                    <p class="text-muted h6 font-italic">" It seems that only fragments of the oem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <img src="images/client/01.jpg" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                </div>
                            </div>
                            <!--end customer testi-->
                        </Slide>
                        <Slide>
                            <div class="card customer-testi m-2 text-center rounded shadow border-0">
                                <div class="card-body">
                                    <p class="text-muted h6 font-italic">" The advantage of its Latin origin andor distract the viewer's attention from the layout. "</p>
                                    <img src="images/client/02.jpg" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                            <!--end customer testi-->
                        </Slide>
                        <Slide>
                            <div class="card customer-testi m-2 text-center rounded shadow border-0">
                                <div class="card-body">
                                    <p class="text-muted h6 font-italic">" There is now an abundance of readableives to the classic and tell short, funny or nonsensical stories. "</p>
                                    <img src="images/client/03.jpg" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>
                            <!--end customer testi-->
                        </Slide>
                        <Slide>
                            <div class="card customer-testi m-2 text-center rounded shadow border-0">
                                <div class="card-body">
                                    <p class="text-muted h6 font-italic">" According to most sources, Lorum Ipsuthe origin of the text by of the unusual word he could find "</p>
                                    <img src="images/client/04.jpg" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                </div>
                            </div>
                            <!--end customer testi-->
                        </Slide>
                        <Slide>
                            <div class="card customer-testi m-2 text-center rounded shadow border-0">
                                <div class="card-body">
                                    <p class="text-muted h6 font-italic">" It seems that only fragments of the oem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <img src="images/client/05.jpg" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>
                            <!--end customer testi-->
                        </Slide>
                        <Slide>
                            <div class="card customer-testi m-2 text-center rounded shadow border-0">
                                <div class="card-body">
                                    <p class="text-muted h6 font-italic">" It seems that only fragments of the otime certain letters at various positions within the text. "</p>
                                    <img src="images/client/06.jpg" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="">
                                    <ul class="list-unstyled mb-0 mt-3">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                            <!--end customer testi-->
                        </Slide>
                    </carousel>
                    <!--end owl carousel-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Partners start -->
        <div class="container mt-5 pt-3">

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center">
                    <img src="images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                    <img src="images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                    <img src="images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                    <img src="images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                    <img src="images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Testimonial End -->

    <!-- Gallery Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <VueSlickCarousel ref="c1" :arrows="false" :focusOnSelect="true" :asNavFor="$refs.c2" :dots="false" :autoplay="true" :fade="true">
                        <div><img src="images/single/01.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/single/02.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/single/03.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/single/04.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/single/05.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/single/06.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/single/07.jpg" class="img-fluid rounded" alt=""></div>
                    </VueSlickCarousel>

                    <VueSlickCarousel :asNavFor="$refs.c1" :arrows="false" :focusOnSelect="true" ref="c2" class="slick-slide" :slidesToShow="3">
                        <div><img src="images/single/01.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/single/02.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/single/03.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/single/04.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/single/05.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/single/06.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/single/07.jpg" class="img-fluid" alt=""></div>
                    </VueSlickCarousel>

                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-md-4">
                        <h4 class="title mb-4">DJI Spark Drone</h4>
                        <div class="d-flex justify-content-between my-4">
                            <h4 class="mb-0"><b>$ 1800</b></h4>
                            <div class="text-warning">
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star-half"></span>
                                <span class="text-muted pl-2">23 Reviews</span>
                            </div>
                        </div>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect. This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="mdi mdi-check mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                            <li><i class="mdi mdi-check mr-2"></i>Create your own skin to match your brand</li>
                            <li><i class="mdi mdi-check mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                            <li><i class="mdi mdi-check mr-2"></i>Create your own skin to match your brand</li>
                        </ul>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary">Buy Now</a>
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
                        <h4 class="title mb-4">Sign up for our Newsletter</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-lg-7 col-md-10">
                    <form>
                        <div class="form-group">
                            <div class="input-group mb-3">
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
        <!--END container-->
    </section>
    <!--end section-->
    <!-- Gallery End -->
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
