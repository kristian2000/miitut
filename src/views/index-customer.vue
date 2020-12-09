<script>
import {
    ArrowUpIcon,
    BookIcon,
    GlobeIcon,
    MessageCircleIcon,
    UserIcon,
    MailIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";
/**
 * Index customer component
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
        BookIcon,
        GlobeIcon,
        MessageCircleIcon,
        UserIcon,
        MailIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center mt-5 pt-3">
                        <div class="alert alert-light alert-pills" role="alert" data-aos="fade-up" data-aos-duration="1000">
                            <span class="badge badge-pill badge-success mr-1">Support</span>
                            <span class="content"> Customer Support 24/7</span>
                        </div>
                        <h1 class="heading mb-3" data-aos="fade-up" data-aos-duration="1400">How Can We Help You ?</h1>
                        <p class="para-desc mx-auto text-muted" data-aos="fade-up" data-aos-duration="1800">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="subcribe-form mt-4 pt-2" data-aos="fade-up" data-aos-duration="2200">
                            <form>
                                <div class="form-group mb-0">
                                    <input type="text" id="help" name="name" class="border bg-white rounded-pill shadow" required="" placeholder="Search the help center">
                                    <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                </div>
                            </form>
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

    <!-- Communiaction Priority Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <span class="badge badge-pill badge-success" data-aos="fade-up" data-aos-duration="1000">Features</span>
                        <h4 class="title my-4" data-aos="fade-up" data-aos-duration="1400">Communication Resources</h4>
                        <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1800">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card catagories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="images/icon/chat.svg" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">Live Chat</a></h5>
                            <p class="text-muted mb-0 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card catagories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1300">
                        <div class="card-body">
                            <img src="images/icon/customer-service.svg" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">Social</a></h5>
                            <p class="text-muted mb-0 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card catagories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1600">
                        <div class="card-body">
                            <img src="images/icon/user.svg" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">Support Portal</a></h5>
                            <p class="text-muted mb-0 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card catagories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1900">
                        <div class="card-body">
                            <img src="images/icon/call.svg" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">Phone Supports</a></h5>
                            <p class="text-muted mb-0 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card catagories text-center rounded border-0" data-aos="fade-up" data-aos-duration="2200">
                        <div class="card-body">
                            <img src="images/icon/writing.svg" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">Tickets</a></h5>
                            <p class="text-muted mb-0 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card catagories text-center rounded border-0" data-aos="fade-up" data-aos-duration="2500">
                        <div class="card-body">
                            <img src="images/icon/mail.svg" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">FAQ's</a></h5>
                            <p class="text-muted mb-0 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making</p>
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
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Need to CRM Support</h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 mt-4 pt-2 text-center">
                    <b-tabs pills justified content-class="mt-5 pt-2" nav-class="col-lg-8 col-md-12 offset-md-2 text-center">
                        <b-tab>
                            <template v-slot:title>
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Community</h4>
                                </div>
                            </template>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="images/customer/1.png" data-aos="fade-up" data-aos-duration="1400" class="img-fluid mx-auto d-block shadow rounded" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title ml-md-4">
                                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">User Community</h4>
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">CRM systems start by collecting a customer's website, email, telephone, social media data, and more, across multiple sources and channels. It may also automatically pull in other information, such as recent news about the company's activity, and it can store personal details, such as a client's personal preferences on communications.</p>
                                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1800">
                                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded mr-3">Read More <i class="mdi mdi-chevron-right"></i></a>
                                            <a href="javascript:void(0)" class="text-warning p-1 px-2 shadow rounded">Blogs</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </b-tab>
                        <b-tab>
                            <template v-slot:title>
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Self Service</h4>
                                </div>
                            </template>
                            <div class="row align-items-center">
                                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title mr-md-4">
                                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Self-service Portal</h4>
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">CRM systems start by collecting a customer's website, email, telephone, social media data, and more, across multiple sources and channels. It may also automatically pull in other information, such as recent news about the company's activity, and it can store personal details, such as a client's personal preferences on communications.</p>
                                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1800">
                                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded mr-3">Read More <i class="mdi mdi-chevron-right"></i></a>
                                            <a href="javascript:void(0)" class="text-warning p-1 px-2 shadow rounded">Blogs</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-md-6 order-1 order-md-2">
                                    <img src="images/customer/2.png" data-aos="fade-up" data-aos-duration="1400" class="img-fluid mx-auto d-block shadow rounded" alt="">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </b-tab>
                        <b-tab>
                            <template v-slot:title>
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title font-weight-normal mb-0">Teamwork</h4>
                                </div>

                            </template>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="images/customer/3.png" data-aos="fade-up" data-aos-duration="1400" class="img-fluid mx-auto d-block shadow rounded" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title ml-md-4">
                                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Proper Teamwork</h4>
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">CRM systems start by collecting a customer's website, email, telephone, social media data, and more, across multiple sources and channels. It may also automatically pull in other information, such as recent news about the company's activity, and it can store personal details, such as a client's personal preferences on communications.</p>
                                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1800">
                                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded mr-3">Read More <i class="mdi mdi-chevron-right"></i></a>
                                            <a href="javascript:void(0)" class="text-warning p-1 px-2 shadow rounded">Blogs</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </b-tab>

                    </b-tabs>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-community" role="tabpanel" aria-labelledby="community-tab">

                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade" id="pills-self" role="tabpanel" aria-labelledby="selfservice-tab">

                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade" id="pills-teamwork" role="tabpanel" aria-labelledby="teamwork-tab">

                        </div>
                        <!--end teb pane-->
                    </div>
                    <!--end tab content-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Testi Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Customer's Review</h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pt-2">
                    <carousel id="customer-testi" dir="ltr" class="owl-carousel owl-theme" :per-page="3">
                        <Slide>
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1000">
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
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1400">
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
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="1800">
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
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2200">
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
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2400">
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
                            <div class="media customer-testi m-2" data-aos="fade-up" data-aos-duration="2800">
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
        <!-- Testi end -->

        <!-- Submit Ticket Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">Submit A Ticket</h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 col-12 mt-4 pt-2">
                    <img src="images/customer/customer.svg" data-aos="fade-up" data-aos-duration="1400" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-md-7 col-12 mt-4 pt-2">
                    <div class="card rounded shadow border-0 ml-lg-4" data-aos="fade-up" data-aos-duration="1400">
                        <div class="card-body p-4">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Name :</label>
                                            <user-icon class="fea icon-sm icons"></user-icon>
                                            <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Email :</label>
                                            <mail-icon class="fea icon-sm icons"></mail-icon>
                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Reasons / Catagories :</label>
                                            <select class="form-control custom-select" id="Sortbylist-Shop">
                                                <option>Catagories</option>
                                                <option>General Question</option>
                                                <option>Bugs</option>
                                                <option>Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Subject :</label>
                                            <book-icon class="fea icon-sm icons"></book-icon>
                                            <input name="subject" id="subject" class="form-control pl-5" placeholder="Your subject :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Url :</label>
                                            <globe-icon class="fea icon-sm icons"></globe-icon>
                                            <input name="url" id="url" type="url" class="form-control pl-5" placeholder="Url :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Description :</label>
                                            <message-circle-icon class="fea icon-sm icons"></message-circle-icon>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Describe your problem :"></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Submit">
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
        <!-- Submit Ticket End -->
    </section>
    <!--end section-->
    <!-- Communiaction Priority End -->
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
