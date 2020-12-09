<script>
import {
    ArrowUpIcon,
    CheckIcon,
    MapPinIcon
} from 'vue-feather-icons';
import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-job-sidebar component
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
        MapPinIcon
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
                        <h4 class="title"> Jobs / Careers </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                                    <li class="breadcrumb-item"><a href="#">Careers</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Jobs</li>
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

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Job List Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="sidebar sticky-bar p-4 rounded shadow">
                        <!-- SEARCH -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h4 class="widget-title">Search Keywords</h4>
                            <div id="jobkeywords" class="widget-search mt-4 mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- SEARCH -->

                        <!-- CATAGORIES -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h4 class="widget-title">Catagories</h4>
                            <div class="form-group mt-4 mb-0">
                                <select class="form-control custom-select" id="job-catagories">
                                    <option>All Jobs</option>
                                    <option>Digital & Creative</option>
                                    <option>Accountancy</option>
                                    <option>Banking</option>
                                    <option>IT Contractor</option>
                                    <option>Graduate</option>
                                    <option>Estate Agency</option>
                                </select>
                            </div>
                        </div>
                        <!-- CATAGORIES -->

                        <!-- Posted -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h4 class="widget-title">Date Posted</h4>
                            <div class="mt-4">
                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="lasthour" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="lasthour">Last Hour</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="oneday" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="oneday">Last 24 hours</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="sevenday" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="sevenday">Last 7 days</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="fourteenday" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="fourteenday">Last 14 days</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="onemonth" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="onemonth">Last 30 days</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Posted -->

                        <!-- Job Type -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h4 class="widget-title">Job Type</h4>
                            <div class="mt-4">
                                <div class="form-group mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="contract">
                                        <label class="custom-control-label" for="contract">Contract Base</label>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="freelancer">
                                        <label class="custom-control-label" for="freelancer">Freelancer</label>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fulltime">
                                        <label class="custom-control-label" for="fulltime">Full Time</label>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="parttime">
                                        <label class="custom-control-label" for="parttime">Part Time</label>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remote">
                                        <label class="custom-control-label" for="remote">Remote</label>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="intership">
                                        <label class="custom-control-label" for="intership">Intership</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Job Type -->

                        <!-- Posted -->
                        <div class="widget">
                            <h4 class="widget-title">Experience</h4>
                            <div class="mt-4">
                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="freshers" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="freshers">Fresher</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="oneyearex" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="oneyearex">+1 Year</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="twoyearex" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="twoyearex">+2 Year</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-2">
                                        <input type="radio" id="threeyearex" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="threeyearex">+3 Year</label>
                                    </div>
                                </div>

                                <div class="custom-control custom-radio">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="fiveyearex" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="fiveyearex">+5 Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Posted -->
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/full.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Web Designer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-success badge-pill">Full Time</li>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/full.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Web Developer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-success badge-pill">Full Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Codepen.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Codepen</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/part.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">UX Designer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-warning badge-pill">Part Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Discord.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Discord</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/full.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">UI Designer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-success badge-pill">Full Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Eslint.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Eslint</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/remote.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Back-End Developer</router-link>
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
                                        <img src="images/job/Gitlab.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Gitlab</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/part.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Photographer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-warning badge-pill">Part Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Gradle.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Gradle</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/full.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Mechanic</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-success badge-pill">Full Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Mg.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Mg</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/part.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Frontend Developer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-warning badge-pill">Part Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Sketch.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Sketch</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/remote.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Web Designer</router-link>
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
                                        <img src="images/job/Twilio.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Twilio</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/part.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Php Developer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-warning badge-pill">Part Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Udemy.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Udemy</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <div class="card job-box rounded shadow border-0 overflow-hidden">
                                <div class="border-bottom">
                                    <div class="position-relative">
                                        <img src="images/job/full.jpg" class="img-fluid" alt="">
                                        <div class="job-overlay bg-white"></div>
                                    </div>
                                    <h5 class="mb-0 position">
                                        <router-link to="/page-job-detail" class="text-dark">Web Designer</router-link>
                                        <ul class="list-unstyled h6 mb-0 text-warning">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </h5>
                                    <ul class="list-unstyled head mb-0">
                                        <li class="badge badge-success badge-pill">Full Time</li>
                                    </ul>
                                </div>

                                <div class="card-body content position-relative">
                                    <div class="firm-logo rounded-circle shadow bg-light text-center">
                                        <img src="images/job/Webhooks.svg" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="company-detail text-center mt-3">
                                        <h5 class="mb-0">
                                            <router-link to="/page-job-company" class="text-dark company-name">Webhooks</router-link>
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

                        <div class="col-lg-6 col-12 mb-4 pb-2">
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
                    <!--end row-->

                    <div class="row">
                        <!-- PAGINATION START -->
                        <div class="col-12">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                            </ul>
                        </div>
                        <!--end col-->
                        <!-- PAGINATION END -->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Job List End -->
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
