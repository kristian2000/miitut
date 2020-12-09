<script>
import {
    ArrowUpIcon,
    UserIcon,
    MailIcon,
    PhoneIcon,
    BookIcon,
    MessageCircleIcon
} from 'vue-feather-icons';
import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-job-apply component
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
        PhoneIcon,
        BookIcon,
        MessageCircleIcon
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
                        <h4 class="title"> Job Apply Form </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                                    <li class="breadcrumb-item"><a href="#">Careers</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Apply</li>
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

    <!-- Job apply form Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-7">
                    <div class="card custom-form border-0">
                        <div class="card-body">
                            <form class="rounded shadow p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Name :<span class="text-danger">*</span></label>
                                            <user-icon class="fea icon-sm icons"></user-icon>
                                            <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Email :<span class="text-danger">*</span></label>
                                            <mail-icon class="fea icon-sm icons"></mail-icon>
                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Phone no. :<span class="text-danger">*</span></label>
                                            <phone-icon class="fea icon-sm icons"></phone-icon>
                                            <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Your phone no. :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Job Title :</label>
                                            <book-icon class="fea icon-sm icons"></book-icon>
                                            <input name="subject" id="subject" class="form-control pl-5" placeholder="Title :">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Types of jobs :</label>
                                            <select class="form-control custom-select" id="Sortbylist-Shop">
                                                <option>All Jobs</option>
                                                <option>Full Time</option>
                                                <option>Half Time</option>
                                                <option>Remote</option>
                                                <option>In Office</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Description :</label>
                                            <message-circle-icon class="fea icon-sm icons"></message-circle-icon>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Describe the job :"></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Upload Your Cv / Resume :</label>
                                            <input type="file" class="form-control-file" id="fileupload">
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
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Apply Now">
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
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Job apply form End -->
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
