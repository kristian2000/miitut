<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index ebook component
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
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100 bg-light">
        <div class="container">
            <div class="row mt-5 mt-sm-0 align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-heading mr-lg-4">
                        <h4 class="display-4 font-weight-bold mb-3"> The Most <br> Comprehensive <br> Book! </h4>
                        <p class="text-muted para-desc mb-0">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-soft-primary mb-2">Buy Now @ $16</a>
                            <a href="javascript: void(0);" v-b-modal.modal-1 class="video-play-icon watch text-dark mb-2 ml-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle bg-light text-white title-dark position-relative play play-iconbar"></i> Overview</a>
                        </div>
                        <b-modal id="modal-1" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                            <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="99025203" />
                        </b-modal>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="bg-white p-5 rounded-md">
                        <img src="images/book/book.png" class="img-fluid mx-auto d-block" alt="">
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

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="bg-light p-5 rounded-md shadow mr-lg-5">
                        <img src="images/book/about.png" class="img-fluid mx-auto d-block" alt="">
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">About the Book</h4>
                        <p class="text-muted">It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</p>
                        <p class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others - which creates a distinct visual impression. Moreover, in Latin only words at the beginning of sentences are capitalized.</p>
                        <img src="images/book/sign.png" class="img-fluid" alt="">
                        <div class="media align-items-center mt-4">
                            <img src="images/client/05.jpg" class="avatar avatar-md-md rounded-circle shadow-lg" alt="">
                            <div class="content ml-3">
                                <h5 class="mb-0">Cristina Murphy</h5>
                                <p class="text-muted mb-0">Auther</p>
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
                <div class="col-lg-4 col-md-6">
                    <div class="media bg-light align-items-center p-3 shadow rounded-pill">
                        <img src="images/client/01.jpg" class="avatar avatar-small rounded-circle shadow" alt="">
                        <div class="media-body ml-3">
                            <p class="mb-0">Composers of the past used dummy texts as lyrics melodies. <span class="text-muted h6">- Calvin Carlo</span></p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="media bg-soft-warning align-items-center p-3 shadow rounded-pill">
                        <img src="images/social/facebook.jpg" class="avatar avatar-small rounded-circle shadow" alt="">
                        <div class="media-body ml-3">
                            <p class="mb-0">Composers of the past used dummy texts as lyrics melodies. <span class="h6">- Calvin Carlo</span></p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="media bg-soft-primary align-items-center p-3 shadow rounded-pill">
                        <img src="images/client/05.jpg" class="avatar avatar-small rounded-circle shadow" alt="">
                        <div class="media-body ml-3">
                            <p class="mb-0">Composers of the past used dummy texts as lyrics melodies. <span class="h6">- Calvin Carlo</span></p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media bg-soft-success align-items-center p-3 shadow rounded-pill">
                        <img src="images/social/instagram.jpg" class="avatar avatar-small rounded-circle shadow" alt="">
                        <div class="media-body ml-3">
                            <p class="mb-0">Composers of the past used dummy texts as lyrics melodies. <span class="text-muted h6">- Calvin Carlo</span></p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media bg-soft-info align-items-center p-3 shadow rounded-pill">
                        <img src="images/social/twitter.jpg" class="avatar avatar-small rounded-circle shadow" alt="">
                        <div class="media-body ml-3">
                            <p class="mb-0">Composers of the past used dummy texts as lyrics melodies. <span class="h6">- Calvin Carlo</span></p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container-fluid mt-100 mt-60">
            <div class="bg-light py-5 rounded shadow" style="background: url('images/book/auther.jpg') center center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title text-center">
                                <img src="images/client/05.jpg" class="img-fluid rounded-circle shadow-lg" alt="">
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="ml-md-5">
                                <div>
                                    <p class="text-muted">This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                                    <p class="text-muted">The comparison of different typefaces. Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>

                                    <h5>Cristina Murphy</h5>

                                    <ul class="list-unstyled social-icon mb-0 mt-3">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                                <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                            </a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
        <!--end container fluid-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Features & Pricing</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-12 mt-4 pt-2">
                    <img src="images/book/book-2.png" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 col-12 mt-4 pt-2">
                    <div class="ml-lg-5">
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces.</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>This prevents repetitive patterns from impairing the overall visual impression and facilitates the comparison of different typefaces.</li>
                        </ul>

                        <div class="row mt-4">
                            <div class="col-lg-8">
                                <div class="bg-soft-primary p-4 rounded shadow">
                                    <div class="media justify-content-between align-items-center">
                                        <img src="images/book/book-1.png" class="avatar avatar-md-md" style="height: auto;" alt="">
                                        <div class="mx-3">
                                            <h5 class="mb-0">Reguler Price</h5>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <span class="h4 mb-0 mt-2">$</span>
                                            <span class="price h1 mb-0">16</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
        <!--end contrainer-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">What people are say ?</h4>
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

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Other Books</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 pt-2">
                    <carousel id="six-slide" class="owl-carousel owl-theme" dir="ltr" :per-page="6">
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/1.jpg" title="">
                                        <img src="images/book/1.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/2.jpg" title="">
                                        <img src="images/book/2.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/3.jpg" title="">
                                        <img src="images/book/3.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/4.jpg" title="">
                                        <img src="images/book/4.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/5.jpg" title="">
                                        <img src="images/book/5.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/6.jpg" title="">
                                        <img src="images/book/6.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                        <Slide>
                            <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden mx-3">
                                <div class="card-body p-0">
                                    <a class="mfp-image d-inline-block" href="images/book/7.jpg" title="">
                                        <img src="images/book/7.jpg" class="img-fluid shadow rounded" alt="work-image">
                                    </a>
                                    <div class="content bg-white p-3">
                                        <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                        <h6 class="text-muted tag mb-0">$ 16</h6>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                    </carousel>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Subscribe Start -->
    <section class="section bg-primary">
        <!-- <div class="bg-overlay bg-overlay-white"></div> -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="app-subscribe text-center text-md-left">
                        <img src="images/book/6.jpg" class="img-fluid rounded-md shadow-md" alt="">
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center text-md-left">
                        <h1 class="font-weight-bold text-white title-dark mb-3">Upcoming Book</h1>
                        <p class="text-white-50 para-dark">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-warning">Pre-order Now</a>
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
    <!-- Subscribe End -->
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
