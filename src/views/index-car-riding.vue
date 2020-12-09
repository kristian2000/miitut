<script>
import {
    ArrowUpIcon,
    MapPinIcon,
    UserIcon,
    MailIcon,
    KeyIcon,
    HelpCircleIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-car-riding component
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
        MapPinIcon,
        UserIcon,
        MailIcon,
        KeyIcon,
        HelpCircleIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="bg-white shadow rounded position-relative overflow-hidden">

                        <b-tabs pills justified>
                            <b-tab title-link-class="rounded-0 py-2">
                                <template v-slot:title>
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title font-weight-normal mb-0">User</h4>
                                    </div>
                                </template>
                                <form class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>First name <span class="text-danger">*</span></label>
                                                <user-icon class="fea icon-sm icons"></user-icon>
                                                <input type="text" class="form-control pl-5" placeholder="First Name" name="s" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <mail-icon class="fea icon-sm icons"></mail-icon>
                                                <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <key-icon class="fea icon-sm icons"></key-icon>
                                                <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user-check">
                                                    <label class="custom-control-label" for="user-check">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <button class="btn btn-success w-100">Signup</button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </b-tab>
                            <b-tab title-link-class="rounded-0 py-2">
                                <template v-slot:title>
                                    <div class="text-center pt-1 pb-1">
                                        <h4 class="title font-weight-normal mb-0">Driver</h4>
                                    </div>
                                </template>
                                <form class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>First name <span class="text-danger">*</span></label>
                                                <user-icon class="fea icon-sm icons"></user-icon>
                                                <input type="text" class="form-control pl-5" placeholder="First Name" name="s" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <mail-icon class="fea icon-sm icons"></mail-icon>
                                                <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <key-icon class="fea icon-sm icons"></key-icon>
                                                <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="driver-check">
                                                    <label class="custom-control-label" for="driver-check">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <button class="btn btn-success w-100">Signup</button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </b-tab>
                        </b-tabs>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-7 offset-lg-1 col-md-7 order-1 order-md-2">
                    <div class="title-heading mt-4">
                        <h1 class="display-4 font-weight-normal mb-3">Unbeatable Price & Expert Services</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
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
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Features Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Find Your Better Rides</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="ride-image position-relative">
                            <img src="images/riding/01.png" class="avatar avatar-ex-large shadow" alt="">
                        </div>
                        <div class="content mt-5 pt-3">
                            <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Select Car</a></h4>
                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing industry or by web designers to occupy the space</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="ride-image">
                            <img src="images/riding/02.png" class="avatar avatar-ex-large shadow" alt="">
                        </div>
                        <div class="content mt-5 pt-3">
                            <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Decide Your Destination</a></h4>
                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing industry or by web designers to occupy the space</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="ride-image">
                            <img src="images/riding/03.png" class="avatar avatar-ex-large shadow" alt="">
                        </div>
                        <div class="content mt-5 pt-3">
                            <h4 class="title-2"><a href="javascript:void(0)" class="text-dark">Contact With Dealer</a></h4>
                            <p class="text-muted mb-0">Dummy text is text that is used in the publishing industry or by web designers to occupy the space</p>
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
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Features End -->

    <!-- Ride Request Start -->
    <section class="section">
        <div class="container">
            <div class="card bg-light rounded border-0 overflow-hidden">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 mt-2 mt-sm-0 order-2 order-md-1">
                        <div class="card-body section-title p-lg-5">
                            <h2 class="mb-4 font-weight-normal">Request a ride now</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Choose Starting Point</label>
                                            <map-pin-icon class="fea icon-sm icons text-success"></map-pin-icon>
                                            <input name="name" id="location1" type="text" class="form-control pl-5" placeholder="Choose starting point...">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Choose Your Destination</label>
                                            <map-pin-icon class="fea icon-sm icons text-danger"></map-pin-icon>
                                            <input name="name" id="location2" type="text" class="form-control pl-5" placeholder="Choose your destination...">
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <a href="javascript:void(0)" class="btn btn-primary">Request Now <i class="mdi mdi-chevron-right"></i></a>
                            </form>
                            <!--end form-->
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 order-1 order-md-2">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">We've Provided More Services Too</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/car.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Transportation</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a eleifend Aliquam aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/food-and-restaurant.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Food</h4>
                            <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text established by compiling unusual word.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/fast.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Delivery</h4>
                            <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem the original Ipsum texts used today.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/card.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Payments</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a eleifend Aliquam aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/movie-tickets.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Tickets</h4>
                            <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text established by compiling unusual word.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/hotel.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Hotels</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a eleifend Aliquam aenean elementum semper.</p>
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
                        <h4 class="title mb-4">What our customer says!</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 col-12">
                    <carousel id="single-owl" class="owl-carousel owl-theme" dir="ltr" :per-page="1">
                        <Slide>
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Thomas Israel <small class="text-muted d-block">Driver</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" It seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!-- Review End -->
                        </Slide>
                        <Slide>
                            <!-- Review Start -->
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
                            <!-- Review End -->
                        </Slide>
                        <Slide>
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Christa Smith <small class="text-muted d-block">Passenger</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" I seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!-- Review End -->
                        </Slide>
                        <Slide>
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/04.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Carl Oliver <small class="text-muted d-block">Driver</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" Fully seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!-- Review End -->
                        </Slide>
                        <Slide>
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/05.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Jill Webb <small class="text-muted d-block">Passenger</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" There seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!-- Review End -->
                        </Slide>
                        <Slide>
                            <!-- Review Start -->
                            <div class="card rounded bg-light overflow-hidden border-0 m-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-md-5">
                                        <img src="images/client/06.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-7">
                                        <div class="card-body customer-testi">
                                            <h6 class="text-primary font-weight-bold">Dean Tolle <small class="text-muted d-block">User</small></h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                            <p class="text-muted h6 mb-0 font-italic">" It seems that only fragments of the original text remain in the Ipsum texts used today. The well known have originated in the 16th century. "</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!-- Review End -->
                        </Slide>
                    </carousel>
                    <!--end owl-fade-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Ride Request End -->

    <!-- App Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Have Question ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="row">
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

                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="media">
                            <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                            <div class="media-body">
                                <h5 class="mt-0"> What is the main process open account ?</h5>
                                <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="media">
                            <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                            <div class="media-body">
                                <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                                <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="media">
                            <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                            <div class="media-body">
                                <h5 class="mt-0"> Is <span class="text-primary">Landrick</span> safer to use with my account ?</h5>
                                <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end row-->

            <div class="row mt-5 pt-lg-3 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Download Our App Now !</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <div class="mt-4">
                            <form>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <input name="number" id="number" type="number" class="form-control" placeholder="Your Cell Number. :" required="" aria-describedby="cellnumber">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary submitBnt" type="submit" id="cellnumber">Send App Link</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>

                            <p class="text-muted">Or</p>

                            <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end contanainer-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- App End -->
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
