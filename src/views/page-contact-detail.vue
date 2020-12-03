<script>
import {
    ArrowUpIcon,
    MailIcon,
    PhoneIcon,
    YoutubeIcon,
    MapPinIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GithubIcon,
    GitlabIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";

/**
 * Page-contact-detail component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        ArrowUpIcon,
        MailIcon,
        PhoneIcon,
        MapPinIcon,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        GithubIcon,
        YoutubeIcon,
        GitlabIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="vh-100 d-flex align-items-center" style="background: url('images/contact-detail.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="title-heading mt-5 pt-4">
                        <h1 class="heading">Let's talk about your portfolio</h1>
                        <p class="text-dark">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="media contact-detail align-items-center mt-3">
                            <div class="icon">
                                <mail-icon class="fea icon-m-md text-dark mr-3"></mail-icon>
                            </div>
                            <div class="media-body content">
                                <h4 class="title font-weight-bold mb-0">Email</h4>
                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                            </div>
                        </div>

                        <div class="media contact-detail align-items-center mt-3">
                            <div class="icon">
                                <phone-icon class="fea icon-m-md text-dark mr-3"></phone-icon>
                            </div>
                            <div class="media-body content">
                                <h4 class="title font-weight-bold mb-0">Phone</h4>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>
                        </div>

                        <div class="media contact-detail align-items-center mt-3">
                            <div class="icon">
                                <map-pin-icon class="fea icon-m-md text-dark mr-3"></map-pin-icon>
                            </div>
                            <div class="media-body content">
                                <h4 class="title font-weight-bold mb-0">Location</h4>
                                <a href="javascript: void(0);" class="video-play-icon text-primary" v-b-modal.modal-1>View on Google map</a>
                            </div>
                            <b-modal hide-footer header-close-variant="white" header-class="border-0" content-class="border-0" id="modal-1" size="lg" centered body-class="p-0">
                                <iframe height="500" width="800" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0"></iframe>
                            </b-modal>
                        </div>
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
    <!--end section-->
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
