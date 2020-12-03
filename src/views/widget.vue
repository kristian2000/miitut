<script>
import {
    ArrowUpIcon,
    CheckIcon,
    BookIcon,
    ClockIcon,
    EyeIcon,
    HeartIcon,
    CameraIcon,
    ChevronRightIcon,
    MonitorIcon,
    PenToolIcon,
    ShoppingCartIcon,
    MapPinIcon,
    HelpCircleIcon
} from 'vue-feather-icons';
import countTo from 'vue-count-to';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Widget component
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
        CheckIcon,
        BookIcon,
        ClockIcon,
        EyeIcon,
        CameraIcon,
        HeartIcon,
        ChevronRightIcon,
        MonitorIcon,
        PenToolIcon,
        ShoppingCartIcon,
        MapPinIcon,
        HelpCircleIcon,
        countTo
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
                        <h4 class="title"> Widget </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Widget</li>
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
    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
    <!-- Hero End -->

    <!-- Widget Start -->
    <section class="section">
        <div class="container">
            <!-- Features Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h4>Features Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/user.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Easy To Use</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam eleifend aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media features pt-4 pb-4">
                        <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                            <monitor-icon class="fea icon-ex-md"></monitor-icon>
                        </div>
                        <div class="media-body">
                            <h4 class="title">Use On Any Device</h4>
                            <p class="text-muted para mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card course-feature text-center overflow-hidden rounded shadow border-0" style="margin: 0;">
                        <div class="card-body py-5">
                            <div class="icon">
                                <img src="images/icon/insurance.svg" class="avatar avatar-small" alt="">
                            </div>

                            <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark"> Unlimited Access</a></h4>
                            <p class="text-muted">It is a long established fact that a reader will be of a page reader will be of a page when looking at its layout. </p>
                            <a href="javascript:void(0)" class="text-primary read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            <img src="images/icon/insurance.svg" class="full-img" height="300" alt="">
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card bg-light rounded shadow border-0">
                        <div class="card-body py-5">
                            <img src="images/icon/rupee.svg" class="avatar avatar-md-sm" alt="">
                            <div class="mt-4">
                                <h5 class="card-title"><a href="javascript:void(0)" class="text-primary"> Low Fees</a></h5>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon">
                                <img src="images/icon/bitcoin.svg" class="avatar avatar-small" alt="">
                            </div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Phone</h4>
                                <p class="text-muted">Start working with Landrick that can provide everything</p>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white shadow">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <pen-tool-icon class="fea"></pen-tool-icon>
                            </div>
                            <h5 class="mt-3 title">Perfect Design</h5>
                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card features px-md-3 border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-flip-v"></i>
                        </div>

                        <div class="card-body p-0 content">
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">High-End Anaylizing</a></h5>
                            <p class="text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated</p>

                            <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <monitor-icon class="fea"></monitor-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">IT & Software</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-airplay"></i>
                        </div>
                        <div class="content ml-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Learners</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-briefcase"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Our Vision</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!-- Features End -->

            <!-- Testimonial Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Testimonial Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media customer-testi">
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
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card customer-testi text-center border rounded mx-2">
                        <div class="card-body">
                            <img src="images/client/lenovo.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                            <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                            <h6 class="text-primary">- Barbara McIntosh</h6>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
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
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card customer-testi border-0 text-center">
                        <div class="card-body">
                            <img src="images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                            <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                            <h6 class="text-primary">- Jill Webb</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-12 mt-4">
                    <div class="card rounded bg-light overflow-hidden border-0 m-2">
                        <div class="row align-items-center no-gutters">
                            <div class="col-md-5">
                                <img src="images/client/02.jpg" class="img-fluid" alt="">
                            </div>
                            <!--end col-->

                            <div class="col-md-7">
                                <div class="card-body customer-testi">
                                    <h6 class="text-primary font-weight-bold">Barbara McIntosh <small class="text-muted d-block">User</small></h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted h6 mb-0 font-italic">" This seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

            <!-- Blog Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Blog Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card courses-desc overflow-hidden rounded shadow border-0">
                        <div class="position-relative d-block overflow-hidden">
                            <img src="images/course/1.jpg" class="img-fluid rounded-top mx-auto" alt="">
                            <div class="overlay-work bg-dark"></div>
                            <a href="javascript:void(0)" class="text-white h6 preview">Preview Now <i class="mdi mdi-chevron-right"></i></a>
                        </div>

                        <div class="card-body">
                            <h5><a href="javascript:void(0)" class="title text-dark">Program for Missionaries</a></h5>
                            <div class="rating">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item">5 Star (3<i class="mdi mdi-account text-muted"></i>)</li>
                                </ul>
                            </div>
                            <div class="fees d-flex justify-content-between">
                                <ul class="list-unstyled mb-0 numbers">
                                    <li><i class="mdi mdi-school text-muted"></i> 30 Students</li>
                                    <li><i class="mdi mdi-book text-muted"></i> 5 Lession</li>
                                </ul>
                                <h4><span class="h6">$</span>75</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/course/1.jpg" class="card-img-top" alt="...">
                            <div class="overlay bg-dark"></div>
                            <div class="teacher d-flex align-items-center">
                                <img src="images/client/01.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                <div class="ml-2">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Dung Lewis</a></h6>
                                    <p class="text-light small my-0">Professor</p>
                                </div>
                            </div>
                            <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                <h6 class="text-primary font-weight-bold fee">$11</h6>
                            </div>
                        </div>
                        <div class="position-relative">
                            <div class="shape overflow-hidden text-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body content">
                            <small><a href="javascript:void(0)" class="text-primary h6">Design</a></small>
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Program for Missionaries</a></h5>
                            <p class="text-muted">The most well-known dummy text is the have originated in the 16th century.</p>
                            <a href="javascript:void(0)" class="text-primary">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                            <ul class="list-unstyled d-flex justify-content-between border-top mt-3 pt-3 mb-0">
                                <li class="text-muted small">
                                    <book-icon class="fea icon-sm text-info"></book-icon> 25 Lectures
                                </li>
                                <li class="text-muted small ml-3">
                                    <clock-icon class="fea icon-sm text-warning"></clock-icon> 1h 30m
                                </li>
                                <li class="text-muted small ml-3">
                                    <eye-icon class="fea icon-sm text-primary"></eye-icon> 3012
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end card / course-blog-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="row align-items-center no-gutters">
                            <div class="col-md-6 order-2 order-md-1">
                                <div class="card-body content">
                                    <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                                    <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability</p>
                                    <div class="post-meta d-flex justify-content-between mt-3">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                        <router-link to="/page-blog-detail" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></router-link>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 order-1 order-md-2">
                                <img src="images/work/15.jpg" class="img-fluid" alt="">
                                <div class="overlay bg-dark"></div>
                                <div class="author">
                                    <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                    <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end blog post-->
                </div>
                <!--end col-->
            </div>
            <!-- Blog End -->

            <!-- Shop Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Shop Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="javascript:void(0)"><img src="images/shop/product/s14.jpg" class="img-fluid" alt=""></a>
                            <a href="javascript:void(0)" class="overlay-work">
                                <img src="images/shop/product/s-14.jpg" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </a></li>
                                <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="javascript:void(0)" class="text-dark product-name h6">Women Block Heels</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$21.00 <del class="text-danger ml-2">$25.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!-- Shop End -->

            <!-- Work & Project Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Work, Project & Portfolio Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <a href="javascript:void(0)"><img src="images/work/2.jpg" class="img-fluid rounded work-image" alt=""></a>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                <h6 class="text-muted tag mb-0">Branding</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/1.jpg" title="">
                                <img src="images/work/1.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Iphone mockup</a></h5>
                                <h6 class="text-muted tag mb-0">Branding</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card work-container work-modern position-relative overflow-hidden shadow rounded border-0">
                        <div class="card-body p-0">
                            <img src="images/work/3.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Spa Cosmetics</a>
                                <small class="text-light">Developing</small>
                            </div>
                            <div class="client">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded-0">
                        <div class="card-body p-0">
                            <img src="images/work/4.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-0"><a href="javascript:void(0)" class="text-white title">Yellow bg with Books</a></h5>
                                <h6 class="text-light tag mb-0">Books</h6>
                            </div>
                            <div class="icons text-center">
                                <a href="images/work/4.jpg" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image">
                                    <camera-icon class="fea icon-sm"></camera-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card work-container work-modern rounded border-0 overflow-hidden">
                        <div class="card-body p-0">
                            <img src="images/hotel/01.jpg" class="img-fluid rounded" alt="work-image">
                            <div class="overlay-work"></div>
                            <div class="content">
                                <a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Regular Room</a>
                                <ul class="post-meta mb-0 mt-2 text-white list-unstyled">
                                    <li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1 Bed</li>
                                    <li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>1 Bathrooms</li>
                                </ul>
                                <p class="text-white d-block mb-0">Rent <span class="text-success">$350</span> /Night</p>
                            </div>
                            <div class="read_more bg-primary text-center rounded-circle">
                                <a href="javascript:void(0)" class="text-light d-block">
                                    <chevron-right-icon class="fea icon-sm title-dark"></chevron-right-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-lg">
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
            </div>
            <!-- Work & Project End -->

            <!-- Job Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Job Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card catagories overflow-hidden rounded shadow border-0">
                        <img src="images/work/5.jpg" class="img-fluid" alt="">
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between mb-0">
                                <li><a href="javascript:void(0)" class="title h6 text-dark">Communications</a></li>
                                <li class="h6 mb-0 jobs">125 Jobs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card job-box rounded shadow border-0 overflow-hidden">
                        <div class="border-bottom">
                            <div class="position-relative">
                                <img src="images/job/remote.jpg" class="img-fluid" alt="">
                                <div class="job-overlay bg-white"></div>
                            </div>
                            <h5 class="mb-0 position">
                                <router-link to="/page-job-detail" class="text-dark">Python Developer</router-link>
                                <ul class="list-unstyled h6 mb-0 text-warning">
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </h5>
                            <ul class="list-unstyled head mb-0">
                                <li class="badge badge-danger badge-pill">Remote</li>
                            </ul>
                        </div>

                        <div class="card-body content position-relative">
                            <div class="firm-logo rounded-circle shadow bg-light text-center">
                                <img src="images/job/Circleci.svg" class="avatar avatar-md-sm" alt="">
                            </div>
                            <div class="company-detail text-center mt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-job-company" class="text-dark company-name">CircleCi</router-link>
                                </h5>
                                <p class="text-muted"><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="video-play-icon text-muted">
                                        <map-pin-icon class="fea icon-sm"></map-pin-icon> San Francisco
                                    </a></p>
                            </div>
                            <ul class="job-facts list-unstyled">
                                <li class="list-inline-item text-muted">
                                    <check-icon class="fea icon-sm text-success mr-1"></check-icon> 2 Year Expirence
                                </li>
                                <li class="list-inline-item text-muted">
                                    <check-icon class="fea icon-sm text-success mr-1"></check-icon> Working Hours- 6hr
                                </li>
                                <li class="list-inline-item text-muted">
                                    <check-icon class="fea icon-sm text-success mr-1"></check-icon> Information strategy
                                </li>
                            </ul>
                            <router-link to="/page-job-detail" class="btn btn-outline-primary btn-block">Apply Now</router-link>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!-- Job End -->

            <!-- Price Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Price Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
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
            </div>
            <!-- Price End -->

            <!-- Payment Card Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Payment Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 pt-2">
                    <div class="card rounded shadow bg-light border-0">
                        <div class="card-body py-5">
                            <img src="images/payments/payment/master.png" height="60" class="text-right" alt="">
                            <div class="mt-4">
                                <h5 class="">•••• •••• •••• 4559</h5>
                                <div class="d-flex justify-content-between">
                                    <p class="h6 text-muted mb-0">Cristino Murfy</p>
                                    <h6 class="mb-0">Exp: <span class="text-muted">10/22</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!-- Payment end -->

            <!-- Counter Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Counter Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="row" id="counter">
                        <div class="col-12">
                            <div class="card counter-box border-0 bg-primary shadow text-center rounded">
                                <div class="card-body py-5">
                                    <h2 class="mb-0 text-light title-dark">
                                        <countTo :startVal="3" :endVal="97" :duration="4000">3</countTo>%
                                    </h2>
                                    <h5 class="counter-head text-light title-dark mb-0">Happy Client</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter End -->

            <!-- Event Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>Event Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-5 mt-4 pt-2">
                    <div class="card event-schedule rounded border">
                        <div class="card-body">
                            <div class="media">
                                <ul class="date text-center text-primary mr-3 mb-0 list-unstyled">
                                    <li class="day font-weight-bold mb-2">11</li>
                                    <li class="month font-weight-bold">OCT</li>
                                </ul>
                                <div class="media-body content">
                                    <h4><a href="javascript:void(0)" class="text-dark title">Digital Conference Event Intro</a></h4>
                                    <p class="text-muted location-time"><span class="text-dark h6">Address:</span> Hall 3, Sinchang-dong, Kwangju, <span class="text-danger">South Korea</span> <br> <span class="text-dark h6">Time:</span> 10:30AM to 11:15AM</p>
                                    <a href="#tickets" class="btn btn-sm btn-outline-primary mouse-down">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!-- Event End -->

            <!-- FAQ Start -->
            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="section-title">
                        <h4>FAQs Widget</h4>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                            <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <!-- FAQ End -->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Widget End -->
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
