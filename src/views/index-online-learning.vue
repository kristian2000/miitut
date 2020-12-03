<script>
import {
    ArrowUpIcon,
    MailIcon,
    PhoneIcon,
    UserIcon,
    ChevronRightIcon,
    EyeIcon,
    ClockIcon,
    BookIcon,
    MonitorIcon,
    BoldIcon,
    FeatherIcon,
    MapPinIcon,
    SearchIcon,
    PenToolIcon,
    MusicIcon,
    CameraIcon,
    ShieldIcon,
    BarChart2Icon,
    ActivityIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-online-learning component
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
        MailIcon,
        PhoneIcon,
        UserIcon,
        ChevronRightIcon,
        EyeIcon,
        ClockIcon,
        BookIcon,
        MonitorIcon,
        BoldIcon,
        FeatherIcon,
        MapPinIcon,
        SearchIcon,
        PenToolIcon,
        MusicIcon,
        CameraIcon,
        ShieldIcon,
        BarChart2Icon,
        ActivityIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="section pt-5 pb-0 mt-4">
        <div class="container-fluid mt-md-1 px-0 px-md-3">
            <div class="rounded bg-light py-5 px-3 px-sm-0">
                <div class="row">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="title-heading mr-lg-4">
                                    <div class="alert alert-primary alert-pills shadow" role="alert">
                                        <span class="content"> Are you ready to learn online ?</span>
                                    </div>

                                    <h1 class="heading mb-3">Start Online Learning <br> With <span class="text-primary">: Landrick</span></h1>
                                    <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                    <div class="subcribe-form mt-4 pt-2">
                                        <form class="m-0">
                                            <div class="form-group">
                                                <input type="text" id="course" name="name" class="rounded" placeholder="Search your course">
                                                <button type="submit" class="btn btn-primary">Search <search-icon class="fea icon-sm"></search-icon></button>
                                            </div>
                                        </form>
                                        <!--end form-->
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-5 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <div class="position-relative">
                                    <img src="images/course/online/hero.jpg" class="rounded img-fluid mx-auto d-block" alt="">
                                    <div class="play-icon">
                                        <a href="javascript: void(0);" v-b-modal.modal class="play-btn video-play-icon">
                                            <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                                        </a>
                                        <b-modal id="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                                            <vimeo-player ref="player" :player-width="750" :player-height="450" :video-id="287684225" />
                                        </b-modal>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!--end row-->
            </div>
            <!--end div-->
        </div>
        <!--end container fluid-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Course list Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Get a choice of your course</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <pen-tool-icon class="fea"></pen-tool-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Designing</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <feather-icon class="fea"></feather-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Development</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <music-icon class="fea"></music-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Music</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <camera-icon class="fea"></camera-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Photography</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <shield-icon class="fea"></shield-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Marketing</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
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

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <bar-chart-2-icon class="fea"></bar-chart-2-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Business</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body py-5">
                            <div class="icon rounded-circle shadow-lg d-inline-block">
                                <activity-icon class="fea"></activity-icon>
                            </div>
                            <div class="content mt-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Health & Feetness</a></h5>
                                <a href="javascript:void(0)" class="text-muted small">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-12">
                    <div class="text-center mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary">See More Courses <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Course list End -->

    <!-- Partners start -->
    <section class="py-4 border-bottom border-top">
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

    <!-- Start -->
    <section class="section">
        <!-- About Start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-lg">
                                <div class="card-body p-0">
                                    <img src="images/course/online/ab01.jpg" class="img-fluid" alt="work-image">
                                    <div class="overlay-work bg-dark"></div>
                                    <div class="content">
                                        <a href="javascript:void(0)" class="title text-white d-block font-weight-bold">Web Development</a>
                                        <small class="text-light">IT & Software</small>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2 text-right d-none d-md-block">
                                <a href="javascript:void(0)" class="btn btn-primary">See More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
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

                                <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                    <div class="card work-container work-modern overflow-hidden rounded border-0 shadow-lg">
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

                        <h5>Our Branches :</h5>

                        <div class="row">
                            <div class="col-md-6 col-12 mt-4">
                                <div class="d-flex align-items-center">
                                    <map-pin-icon class="fea icon-md text-muted"></map-pin-icon>
                                    <div class="content ml-2">
                                        <h5 class="mb-0"><a href="javascript: void(0);" v-b-modal.modal-1 class="video-play-icon text-primary">U.S.A.</a></h5>
                                        <p class="text-muted mb-0">Long Street, WS, US</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 mt-4">
                                <div class="d-flex align-items-center">
                                    <map-pin-icon class="fea icon-md text-muted"></map-pin-icon>
                                    <div class="content ml-2">
                                        <h5 class="mb-0"><a href="javascript: void(0);" v-b-modal.modal-1 class="video-play-icon text-primary">China</a></h5>
                                        <p class="text-muted mb-0">Wuhan, China</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 mt-4">
                                <div class="d-flex align-items-center">
                                    <map-pin-icon class="fea icon-md text-muted"></map-pin-icon>
                                    <div class="content ml-2">
                                        <h5 class="mb-0"><a href="javascript: void(0);" v-b-modal.modal-1 class="video-play-icon text-primary">India</a></h5>
                                        <p class="text-muted mb-0">Channai, India</p>
                                    </div>
                                    <b-modal hide-footer header-close-variant="white" header-class="border-0" content-class="border-0" id="modal-1" size="lg" centered body-class="p-0">
                                        <iframe height="500" width="800" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0"></iframe>
                                    </b-modal>
                                </div>
                            </div>
                        </div>

                        <div class="watch-video mt-4 pt-2">
                            <a href="#" class="btn btn-primary mb-2">Read More <chevron-right-icon class="fea icon-sm"></chevron-right-icon></a>
                            <a href="https://www.youtube.com/watch?v=jNTZpfXYJa4" class="video-play-icon watch text-dark mb-2 ml-2"><i class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle title-dark text-white position-relative play play-iconbar"></i> Watch Video !</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="media align-items-center features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-airplay"></i>
                        </div>
                        <div class="content ml-3">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Learners</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="media align-items-center features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-bag"></i>
                        </div>
                        <div class="content ml-3">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Teachers</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="media align-items-center features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-star"></i>
                        </div>
                        <div class="content ml-3">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Parents</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="media align-items-center features">
                        <div class="icons m-0 rounded h2 text-primary text-center px-3">
                            <i class="uil uil-at"></i>
                        </div>
                        <div class="content ml-3">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Doners</a></h5>
                            <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- About End -->

        <!-- Popular Course Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Popular Courses</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/course/2.jpg" class="card-img-top" alt="...">
                            <div class="overlay bg-dark"></div>
                            <div class="teacher d-flex align-items-center">
                                <img src="images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                <div class="ml-2">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Lisa Marvel</a></h6>
                                    <p class="text-light small my-0">Professor</p>
                                </div>
                            </div>
                            <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                <h6 class="text-primary font-weight-bold fee">$15</h6>
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
                            <small><a href="javascript:void(0)" class="text-primary h6">Development</a></small>
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Access to Higher Education</a></h5>
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/course/3.jpg" class="card-img-top" alt="...">
                            <div class="overlay bg-dark"></div>
                            <div class="teacher d-flex align-items-center">
                                <img src="images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                <div class="ml-2">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Amanda Carlo</a></h6>
                                    <p class="text-light small my-0">Professor</p>
                                </div>
                            </div>
                            <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                <h6 class="text-primary font-weight-bold fee">$19</h6>
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
                            <small><a href="javascript:void(0)" class="text-primary h6">Software</a></small>
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Educational Communication</a></h5>
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/course/4.jpg" class="card-img-top" alt="...">
                            <div class="overlay bg-dark"></div>
                            <div class="teacher d-flex align-items-center">
                                <img src="images/client/04.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                <div class="ml-2">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Anne McKnight</a></h6>
                                    <p class="text-light small my-0">Professor</p>
                                </div>
                            </div>
                            <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                <h6 class="text-primary font-weight-bold fee">$9</h6>
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
                            <small><a href="javascript:void(0)" class="text-primary h6">Music</a></small>
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Introduction to Epidemiology</a></h5>
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/course/5.jpg" class="card-img-top" alt="...">
                            <div class="overlay bg-dark"></div>
                            <div class="teacher d-flex align-items-center">
                                <img src="images/client/05.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                <div class="ml-2">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Leosy Murfhy</a></h6>
                                    <p class="text-light small my-0">Professor</p>
                                </div>
                            </div>
                            <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                <h6 class="text-primary font-weight-bold fee">$24</h6>
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
                            <small><a href="javascript:void(0)" class="text-primary h6">Art & Fashion</a></small>
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Good Clinical Practice</a></h5>
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

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="images/course/6.jpg" class="card-img-top" alt="...">
                            <div class="overlay bg-dark"></div>
                            <div class="teacher d-flex align-items-center">
                                <img src="images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                <div class="ml-2">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-light user">Cristino Murfhy</a></h6>
                                    <p class="text-light small my-0">Professor</p>
                                </div>
                            </div>
                            <div class="course-fee bg-white text-center shadow-lg rounded-circle">
                                <h6 class="text-primary font-weight-bold fee">$21</h6>
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
                            <small><a href="javascript:void(0)" class="text-primary h6">Programmer</a></small>
                            <h5 class="mt-2"><a href="javascript:void(0)" class="title text-dark">Social Computing</a></h5>
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
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Popular Course End -->

        <!-- CTA Start -->
        <div class="container-fluid mt-100 mt-60">
            <div class="rounded py-md-5" style="background: url('images/course/online/cta.jpg') center center;">
                <div class="row py-5">
                    <div class="container">
                        <div class="row align-items-center px-3 px-sm-0">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="section-title">
                                    <h4 class="display-4 h1 text-white title-dark mb-4">Register Now !</h4>
                                    <p class="text-light title-dark para-desc">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <div class="mt-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Admission Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <div class="card login_page shadow rounded border-0">
                                    <div class="card-body">
                                        <h4 class="card-title">Register Now</h4>

                                        <form class="login-form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group position-relative">
                                                        <label>Your Name :<span class="text-danger">*</span></label>
                                                        <user-icon class="fea icon-sm icons"></user-icon>
                                                        <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="form-group position-relative">
                                                        <label>Your Email :<span class="text-danger">*</span></label>
                                                        <mail-icon class="fea icon-sm icons"></mail-icon>
                                                        <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="form-group position-relative">
                                                        <label>Your Phone no. :<span class="text-danger">*</span></label>
                                                        <phone-icon class="fea icon-sm icons"></phone-icon>
                                                        <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Your phone no. :">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary w-100">Register Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!---end row-->
            </div>
            <!--end div-->
        </div>
        <!--end container fluid-->
        <!-- CTA End -->

        <!-- Teachers Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Our Instructor</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Krista John</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/06.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Jack John</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/01.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Roger Jackson</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/02.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Luchhi Cina</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/03.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Sophiya Cally</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/04.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Johnny English</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Teachers End -->

        <!-- Testi Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">What Students Say ?</h4>
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
        <!-- Testi End -->

        <!-- Blog Start -->
        <div class="container mt-100 mt-60">
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
        <!-- Blog End -->
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

<style>
.modal-content {
    background-color: transparent;
}
</style>
