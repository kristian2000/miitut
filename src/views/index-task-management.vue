<script>
import {
    ArrowUpIcon,
    ArrowRightIcon,
    ArrowRightCircleIcon,
    HelpCircleIcon
} from 'vue-feather-icons';
import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index task-management component
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
        ArrowRightIcon,
        ArrowRightCircleIcon,
        HelpCircleIcon
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />
    <!-- Start Home -->
    <section class="bg-home d-flex align-items-center bg-animation-left task-management-home" style="height: auto;" id="home">
        <div class="container position-relative" style="z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mt-0 mt-md-5 pt-0 pt-md-5">
                    <div class="title-heading margin-top-100">
                        <h1 class="heading text-white title-dark mb-3">A Better Way to Manage your Schedule</h1>
                        <p class="para-desc mx-auto text-white-50">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="text-center subcribe-form mt-4 pt-2">
                            <form>
                                <div class="form-group mb-0">
                                    <input type="email" id="email" name="email" class="border rounded-pill" required placeholder="Email Address">
                                    <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <div class="home-dashboard">
                                <img src="images/task/laptop.png" alt="" class="img-fluid">
                            </div>
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
    <!-- End Home -->

    <!-- Features Start -->
    <section class="section mt-0 mt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/clipboard.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Easy To Use</h4>
                            <p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a Aliquam eleifend aenean elementum semper.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/shield.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Secure</h4>
                            <p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the established text by compiling unusual word.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/vector.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Flexible</h4>
                            <p class="text-muted mb-0">It seems that only fragments of the original text remain in only fragments the Lorem Ipsum texts used today.</p>
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
                <div class="col-lg-6 col-md-6">
                    <img src="images/task/timeline.png" class="img-fluid shadow rounded-md" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-5">
                        <h1 class="text-primary"><i class="uil uil-schedule"></i></h1>
                        <h4 class="title mb-4">Track your timeline</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <arrow-right-circle-icon class="fea icon-sm text-primary mr-2"></arrow-right-circle-icon>Digital Marketing Solutions for Tomorrow
                            </li>
                            <li>
                                <arrow-right-circle-icon class="fea icon-sm text-primary mr-2"></arrow-right-circle-icon>Create your own skin to match your brand
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                    <img src="images/task/task.svg" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="section-title mr-lg-5">
                        <h1 class="text-primary"><i class="uil uil-list-ui-alt"></i></h1>
                        <h4 class="title mb-4">Plans and Collaborate <br> your content</h4>
                        <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-unstyled text-muted">
                            <li>
                                <arrow-right-circle-icon class="fea icon-sm text-primary mr-2"></arrow-right-circle-icon>Digital Marketing Solutions for Tomorrow
                            </li>
                            <li>
                                <arrow-right-circle-icon class="fea icon-sm text-primary mr-2"></arrow-right-circle-icon>Create your own skin to match your brand
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
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
                        <h4 class="title mb-4">Discover what makes <span class="text-primary">Task manager</span> great.</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">

                <b-tabs pills justified vertical nav-wrapper-class="col-md-5" nav-class="rounded-md" content-class="col-md-7 col-12 mt-4 pt-2">
                    <b-tab active>
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h5 class="title">Management Dashboard</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </template>
                        <img src="images/task/apps.png" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </b-tab>
                    <b-tab>
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h5 class="title">Management Timeline</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </template>
                        <img src="images/task/widgets2.png" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </b-tab>
                    <b-tab>
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h5 class="title">Payment Management</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </template>
                        <img src="images/task/task.png" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </b-tab>
                    <b-tab>
                        <template v-slot:title>
                            <div class="p-3 text-left">
                                <h5 class="title">File Integrate</h5>
                                <p class="text-muted tab-para mb-0">Dummy text is text that is used in the publishing industry or by web designers.</p>
                            </div>
                        </template>
                        <img src="images/task/file.png" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="">
                    </b-tab>
                </b-tabs>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-12">
                    <div class="sticky-bar">
                        <div class="section-title text-lg-left text-center mb-4 mb-lg-0 pb-2 pb-lg-0">
                            <h4 class="title mb-4">Great Features</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                                        <span class="h1 icon2 text-primary">
                                            <i class="uil uil-meeting-board"></i>
                                        </span>
                                        <div class="card-body p-0 content">
                                            <h5>Task Planning</h5>
                                            <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                                        <span class="h1 icon2 text-primary">
                                            <i class="uil uil-schedule"></i>
                                        </span>
                                        <div class="card-body p-0 content">
                                            <h5>Task Scheduling</h5>
                                            <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                                        <span class="h1 icon2 text-primary">
                                            <i class="uil uil-clock"></i>
                                        </span>
                                        <div class="card-body p-0 content">
                                            <h5>Task Tracking</h5>
                                            <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                                        <span class="h1 icon2 text-primary">
                                            <i class="uil uil-calender"></i>
                                        </span>
                                        <div class="card-body p-0 content">
                                            <h5>Calendar</h5>
                                            <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2">
                                    <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                                        <span class="h1 icon2 text-primary">
                                            <i class="uil uil-presentation-plus"></i>
                                        </span>
                                        <div class="card-body p-0 content">
                                            <h5>Collaboration</h5>
                                            <p class="para text-muted mb-0">It is a long established fact that a reader will be of a page reader will be of at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12 mt-4 pt-2 text-center text-md-left">
                                    <a href="javascript:void(0)" class="btn btn-primary">See more <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
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
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Let’s get some real price done here.</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-end">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="pricing text-center rounded overflow-hidden shadow">
                        <div class="price-header border-bottom pt-5 pb-5">
                            <h1 class="text-primary"><i class="uil uil-lightbulb-alt"></i></h1>
                            <h5 class="price-title">Starter</h5>
                            <p class="mb-0 text-muted">Suitable for Starter</p>
                        </div>
                        <div class="border-bottom py-4">
                            <h2 class="font-weight-bold">$ 0.00</h2>
                            <h6 class="text-muted mb-0 font-weight-normal">Billed monthly per user</h6>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Start Free</a>
                        </div>
                        <div class="pricing-features text-left p-4">
                            <h5>What's included:</h5>
                            <ul class="feature list-unstyled mb-0">
                                <li class="text-muted">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Full Access
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Enhanced Security
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Source Files
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>1 Domain Free
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Free Appointments
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Free Installment
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end price three-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="pricing text-center rounded overflow-hidden shadow-lg">
                        <div class="price-header border-bottom bg-primary pt-5 pb-5">
                            <h1 class="text-white-50"><i class="uil uil-award"></i></h1>
                            <h5 class="price-title text-white">Standerd</h5>
                            <p class="mb-0 text-light">Suitable for Collaborating Team</p>
                        </div>
                        <div class="border-bottom py-5">
                            <h2 class="font-weight-bold">$ 19.00</h2>
                            <h6 class="text-muted mb-0 font-weight-normal">Billed monthly per user</h6>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Start Standerd</a>
                        </div>
                        <div class="pricing-features text-left p-4">
                            <h5>What's included:</h5>
                            <ul class="feature list-unstyled mb-0">
                                <li class="text-muted">
                                    <arrow-right-icon class="fea icon-sm text-primary mr-2"></arrow-right-icon>Full Access
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-primary mr-2"></arrow-right-icon>Enhanced Security
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-primary mr-2"></arrow-right-icon>Source Files
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-primary mr-2"></arrow-right-icon>1 Domain Free
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-primary mr-2"></arrow-right-icon>Free Appointments
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-primary mr-2"></arrow-right-icon>Free Installment
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end price three-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="pricing text-center rounded overflow-hidden shadow">
                        <div class="price-header border-bottom pt-5 pb-5">
                            <h1 class="text-primary"><i class="uil uil-briefcase-alt"></i></h1>
                            <h5 class="price-title">Premium</h5>
                            <p class="mb-0 text-muted">Suitable for Premium</p>
                        </div>
                        <div class="border-bottom py-4">
                            <h2 class="font-weight-bold">$ 9.00</h2>
                            <h6 class="text-muted mb-0 font-weight-normal">Billed monthly per user</h6>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Start Premium</a>
                        </div>
                        <div class="pricing-features text-left p-4">
                            <h5>What's included:</h5>
                            <ul class="feature list-unstyled mb-0">
                                <li class="text-muted">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Full Access
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Enhanced Security
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Source Files
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>1 Domain Free
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Free Appointments
                                </li>
                                <li class="text-muted mt-2">
                                    <arrow-right-icon class="fea icon-sm text-dark mr-2"></arrow-right-icon>Free Installment
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end price three-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="media">
                        <help-circle-icon class="fea icon-ex-md text-primary mr-2 mt-1"></help-circle-icon>
                        <div class="media-body">
                            <h5 class="mt-0">How our <span class="text-primary">Landrick</span> work ?</h5>
                            <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
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

            <div class="row mt-5 pt-4 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <router-link to="/page-contact-two" class="btn btn-primary mt-4"><i class="mdi mdi-phone"></i> Contact us</router-link>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Features End -->
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
