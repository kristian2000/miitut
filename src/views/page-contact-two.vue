<script>
import {
    ArrowUpIcon,
    UserIcon,
    MailIcon,
    MessageCircleIcon,
    MapPinIcon,
    PhoneIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-contact-two component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        UserIcon,
        ArrowUpIcon,
        MailIcon,
        MessageCircleIcon,
        MapPinIcon,
        PhoneIcon
    }
}
</script>

<template>
<div>
    <Navbar />
    <!-- Start Contact -->
    <section class="section pt-5 mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card map border-0">
                        <div class="card-body p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
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
                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="card custom-form rounded shadow border-0">
                        <div class="card-body">
                            <div id="message"></div>
                            <form name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group position-relative">
                                            <label>Your Name <span class="text-danger">*</span></label>
                                            <user-icon class="fea icon-sm icons"></user-icon>
                                            <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group position-relative">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <mail-icon class="fea icon-sm icons"></mail-icon>
                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
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
                                        <input type="button" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-->
                        </div>
                    </div>
                    <!--end custom-form-->
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <div class="title-heading ml-lg-4">
                        <h4 class="mb-4">Contact Details</h4>
                        <p class="text-muted">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
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
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End contact -->
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
