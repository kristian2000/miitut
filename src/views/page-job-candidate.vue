<script>
import {
    ArrowUpIcon,
    UserIcon,
    MailIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GithubIcon,
    YoutubeIcon,
    GitlabIcon,
    GiftIcon,
    HomeIcon,
    MapPinIcon,
    GlobeIcon,
    ServerIcon,
    PhoneIcon,
    BookIcon,
    MessageCircleIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-job-candidate component
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
        UserIcon,
        MailIcon,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        GithubIcon,
        YoutubeIcon,
        GitlabIcon,
        GiftIcon,
        HomeIcon,
        MapPinIcon,
        GlobeIcon,
        ServerIcon,
        PhoneIcon,
        BookIcon,
        MessageCircleIcon
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />
    <!-- Hero Start -->
    <section class="bg-half-260 d-table w-100" style="background: url('images/job/candidate.jpg');">
        <div class="bg-overlay"></div>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Candidate Detail Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="card job-profile shadow border-0">
                        <div class="text-center py-5 border-bottom rounded-top">
                            <img src="images/client/01.jpg" class="avatar avatar-medium mx-auto rounded-circle shadow d-block" alt="">
                            <h5 class="mt-3 mb-0">Thomas Brewer</h5>
                            <p class="text-muted mb-0">Senior Web Developer</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Personal Details :</h5>

                            <ul class="list-unstyled">
                                <li class="h6">
                                    <mail-icon class="fea icon-sm text-warning mr-2"></mail-icon><span class="text-muted">Email :</span> thomas@mail.com
                                </li>
                                <li class="h6">
                                    <gift-icon class="fea icon-sm text-warning mr-2"></gift-icon><span class="text-muted">D.O.B. :</span> 31st Dec, 1996
                                </li>
                                <li class="h6">
                                    <home-icon class="fea icon-sm text-warning mr-2"></home-icon><span class="text-muted">Address :</span> 15 Razy street
                                </li>
                                <li class="h6">
                                    <map-pin-icon class="fea icon-sm text-warning mr-2"></map-pin-icon><span class="text-muted">City :</span> London
                                </li>
                                <li class="h6">
                                    <globe-icon class="fea icon-sm text-warning mr-2"></globe-icon><span class="text-muted">Country :</span> UK
                                </li>
                                <li class="h6">
                                    <server-icon class="fea icon-sm text-warning mr-2"></server-icon><span class="text-muted">Postal Code :</span> 521452
                                </li>
                                <li class="h6">
                                    <phone-icon class="fea icon-sm text-warning mr-2"></phone-icon><span class="text-muted">Mobile :</span> (+125) 1542-8452
                                </li>

                                <li>
                                    <ul class="list-unstyled social-icon mb-0 mt-4">
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
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <github-icon class="fea icon-sm fea-social"></github-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <youtube-icon class="fea icon-sm fea-social"></youtube-icon>
                                            </a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                                <gitlab-icon class="fea icon-sm fea-social"></gitlab-icon>
                                            </a></li>
                                    </ul>
                                    <!--end icon-->
                                </li>
                            </ul>
                            <a href="javascipt:void(0)" data-toggle="modal" data-target="#Contactme" class="btn btn-block btn-primary"><i class="mdi mdi-email"></i> Contact Me</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="ml-lg-4">
                        <h4>About us :</h4>
                        <p class="text-muted">Obviously I'M Web Developer. Web Developer with over 3 years of experience. Experienced with all stages of the development cycle for dynamic web projects. The as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p class="text-muted mb-0">Data Structures and Algorithms are the heart of programming. Initially most of the developers do not realize its importance but when you will start your career in software development, you will find your code is either taking too much time or taking too much space.</p>

                        <!-- Skills Start -->
                        <h4 class="mt-lg-5 mt-4">Skills :</h4>
                        <div class="progress-box mt-4">
                            <h6 class="title text-muted">WordPress</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                    <div class="progress-value d-block text-muted h6">84%</div>
                                </div>
                            </div>
                        </div>
                        <!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-muted">PHP / MYSQL</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:75%;">
                                    <div class="progress-value d-block text-muted h6">75%</div>
                                </div>
                            </div>
                        </div>
                        <!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-muted">Angular / JavaScript</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                    <div class="progress-value d-block text-muted h6">79%</div>
                                </div>
                            </div>
                        </div>
                        <!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="title text-muted">HTML</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:95%;">
                                    <div class="progress-value d-block text-muted h6">95%</div>
                                </div>
                            </div>
                        </div>
                        <!--end process box-->
                        <!-- Skills End -->

                        <!-- Experience Start -->
                        <h4 class="mt-lg-5 mt-4">Experience :</h4>
                        <div class="row">
                            <div class="col-lg-12 mt-4 pt-2">
                                <div class="media">
                                    <div class="company-logo text-muted h6 mr-3 text-center">
                                        <img src="images/job/Codepen.svg" class="avatar avatar-md-sm mx-auto d-block mb-2" alt="">2017-18
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title mb-0">Back-end Developer</h5>
                                        <small class="text-muted company-university">Codepen - CHINA</small>
                                        <p class="text-muted mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-12 mt-4 pt-2">
                                <div class="media">
                                    <div class="company-logo text-muted h6 mr-3 text-center">
                                        <img src="images/job/Circleci.svg" class="avatar avatar-md-sm mx-auto d-block mb-2" alt="">2014-17
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title mb-0">Senior Web Designer</h5>
                                        <small class="text-muted company-university">CircleCi - SAN FRANCISCO</small>
                                        <p class="text-muted mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <!-- Experience End -->

                        <!-- Start Projects Work -->
                        <h4 class="mt-lg-5 mt-4">Projects :</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mt-4 pt-2">
                                <div class="card border-0 work-container work-classic">
                                    <div class="card-body p-0">
                                        <router-link to="/page-work-detail"><img src="images/work/1.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                                        <div class="content pt-3">
                                            <h5 class="mb-0">
                                                <router-link to="/page-work-detail" class="text-dark title">Iphone mockup</router-link>
                                            </h5>
                                            <h6 class="text-muted tag mb-0">Branding</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 col-12 mt-4 pt-2">
                                <div class="card border-0 work-container work-classic">
                                    <div class="card-body p-0">
                                        <router-link to="/page-work-detail"><img src="images/work/2.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                                        <div class="content pt-3">
                                            <h5 class="mb-0">
                                                <router-link to="/page-work-detail" class="text-dark title">Mockup Collection</router-link>
                                            </h5>
                                            <h6 class="text-muted tag mb-0">Mockup</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 col-12 mt-4 pt-2">
                                <div class="card border-0 work-container work-classic">
                                    <div class="card-body p-0">
                                        <router-link to="/page-work-detail"><img src="images/work/3.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                                        <div class="content pt-3">
                                            <h5 class="mb-0">
                                                <router-link to="/page-work-detail" class="text-dark title">Abstract images</router-link>
                                            </h5>
                                            <h6 class="text-muted tag mb-0">Abstract</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-6 col-12 mt-4 pt-2">
                                <div class="card border-0 work-container work-classic">
                                    <div class="card-body p-0">
                                        <router-link to="/page-work-detail"><img src="images/work/4.jpg" class="img-fluid rounded work-image" alt=""></router-link>
                                        <div class="content pt-3">
                                            <h5 class="mb-0">
                                                <router-link to="/page-work-detail" class="text-dark title">Yellow bg with Books</router-link>
                                            </h5>
                                            <h6 class="text-muted tag mb-0">Books</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <!-- End Projects Work -->

                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary mr-2"><i class="mdi mdi-account-check"></i> Hire me</a>
                            <a href="javascript:void(0)" class="btn btn-outline-primary"><i class="mdi mdi-printer"></i> Print CV</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--enn row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- Modal Content Start -->
    <div class="modal fade" id="Contactme" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Contact Me </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="custom-form">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Your Name <span class="text-danger">*</span></label>
                                        <user-icon class="fea icon-sm icons"></user-icon>
                                        <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <mail-icon class="fea icon-sm icons"></mail-icon>
                                        <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Subject</label>
                                        <book-icon class="fea icon-sm icons"></book-icon>
                                        <input name="subject" id="subject" class="form-control pl-5" placeholder="Your subject :">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>Comments</label>
                                        <message-circle-icon class="fea icon-sm icons"></message-circle-icon>
                                        <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end custom-form-->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Content End -->
    <!-- Candidate Detail End -->
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
