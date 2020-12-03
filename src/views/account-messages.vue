<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    GithubIcon,
    YoutubeIcon,
    GitlabIcon,
    LinkedinIcon,
    UserPlusIcon,
    UsersIcon,
    BellIcon,
    ToolIcon,
    PlusIcon,
    UserIcon,
    BookIcon,
    MessageCircleIcon,
    EyeOffIcon,
    CornerUpLeftIcon,
    CornerRightUpIcon,
    Trash2Icon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Account-messages component
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
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        GithubIcon,
        YoutubeIcon,
        GitlabIcon,
        UserPlusIcon,
        UsersIcon,
        MessageCircleIcon,
        BellIcon,
        ToolIcon,
        PlusIcon,
        UserIcon,
        BookIcon,
        EyeOffIcon,
        CornerUpLeftIcon,
        CornerRightUpIcon,
        Trash2Icon
    }
}
</script>

<template>
<div>
    <Navbar :nav-light="true" />

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-left text-center">
                                    <img src="images/client/05.jpg" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                </div>
                                <!--end col-->

                                <div class="col-lg-10 col-md-9">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                            <h3 class="title mb-0">Krista Joseph</h3>
                                            <small class="text-muted h6 mr-2">Web Developer</small>
                                            <ul class="list-inline mb-0 mt-3">
                                                <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted" title="Instagram">
                                                        <instagram-icon class="fea icon-sm mr-2"></instagram-icon>krista_joseph
                                                    </a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted" title="Linkedin">
                                                        <linkedin-icon class="fea icon-sm mr-2"></linkedin-icon>Krista Joseph
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-5 text-md-right text-center">
                                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" v-b-tooltip.hover title="Add Friend">
                                                        <user-plus-icon class="fea icon-sm fea-social"></user-plus-icon>
                                                    </a></li>
                                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded" v-b-tooltip.hover title="Messages">
                                                        <message-circle-icon class="fea icon-sm fea-social"></message-circle-icon>
                                                    </a></li>
                                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded" v-b-tooltip.hover title="Notifications">
                                                        <bell-icon class="fea icon-sm fea-social"></bell-icon>
                                                    </a></li>
                                                <li class="list-inline-item ml-1">
                                                    <router-link to="/account-setting" class="rounded" v-b-tooltip.hover title="Settings">
                                                        <tool-icon class="fea icon-sm fea-social"></tool-icon>
                                                    </router-link>
                                                </li>
                                            </ul>
                                            <!--end icon-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--ed container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                    <div class="sidebar sticky-bar p-4 rounded shadow">
                        <div class="widget">
                            <h5 class="widget-title">Followers :</h5>
                            <div class="row mt-4">
                                <div class="col-6 text-center">
                                    <user-plus-icon class="fea icon-ex-md text-primary mb-1"></user-plus-icon>
                                    <h5 class="mb-0">2588</h5>
                                    <p class="text-muted mb-0">Followers</p>
                                </div>
                                <!--end col-->

                                <div class="col-6 text-center">
                                    <users-icon class="fea icon-ex-md text-primary mb-1"></users-icon>
                                    <h5 class="mb-0">454</h5>
                                    <p class="text-muted mb-0">Following</p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Projects :</h5>
                            <div class="progress-box mt-4">
                                <h6 class="title text-muted">Progress</h6>
                                <div class="progress">
                                    <div class="progress-bar position-relative bg-primary" style="width:50%;">
                                        <div class="progress-value d-block text-muted h6">24 / 48</div>
                                    </div>
                                </div>
                            </div>
                            <!--end process box-->
                        </div>
                        <div class="widget">
                            <div class="row">
                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-profile" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="title text-dark h6 my-0">Profile</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-members" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-users-alt"></i></span>
                                        <h6 class="title text-dark h6 my-0">Members</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-works" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-file"></i></span>
                                        <h6 class="title text-dark h6 my-0">Works</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-messages" class="accounts active rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-envelope-star"></i></span>
                                        <h6 class="title text-dark h6 my-0">Messages</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-payments" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-transaction"></i></span>
                                        <h6 class="title text-dark h6 my-0">Payments</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/account-setting" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                        <h6 class="title text-dark h6 my-0">Settings</h6>
                                    </router-link>
                                </div>
                                <!--end col-->

                                <div class="col-6 mt-4 pt-2">
                                    <router-link to="/auth-login-three" class="accounts rounded d-block shadow text-center py-3">
                                        <span class="pro-icons h3 text-muted"><i class="uil uil-sign-out-alt"></i></span>
                                        <h6 class="title text-dark h6 my-0">Logout</h6>
                                    </router-link>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Follow me :</h5>
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
                </div>
                <!--end col-->

                <div class="col-lg-8 col-12">
                    <div class="rounded shadow p-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Messages:</h5>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#composemail" class="btn btn-primary">
                                <plus-icon class="fea icon-sm"></plus-icon> Compose
                            </a>
                        </div>

                        <!-- Modal Content Start -->
                        <div class="modal fade" id="composemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content rounded shadow border-0">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">New Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group position-relative">
                                                        <label>Your Name <span class="text-danger">*</span></label>
                                                        <user-icon class="fea icon-sm icons"></user-icon>
                                                        <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
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
                                                    <div class="form-group position-relative mb-0">
                                                        <label>Comments</label>
                                                        <message-circle-icon class="fea icon-sm icons"></message-circle-icon>
                                                        <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <div class="border-top p-4">
                                        <button type="button" class="btn btn-primary">Send Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Content End -->

                        <div class="d-flex border-bottom align-items-center justify-content-between bg-light mt-4 p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="checkAll">
                                        <label class="custom-control-label" for="checkAll">Select all</label>
                                    </div>
                                </div>
                            </div>

                            <b-dropdown class="btn-group dropdown-primary mr-2 mt-2" text="Action" variant="primary">
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <eye-off-icon class="fea icon-sm"></eye-off-icon> Mark Unread
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <corner-up-left-icon class="fea icon-sm"></corner-up-left-icon> Reply
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <corner-right-up-icon class="fea icon-sm"></corner-right-up-icon> Forward
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item text-danger">
                                    <trash-2-icon class="fea icon-sm"></trash-2-icon> Delete
                                </a>

                            </b-dropdown>
                        </div>

                        <div class="d-flex border-bottom p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail1">
                                        <label class="custom-control-label" for="mail1"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/01.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Calvin Carlo</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom bg-light p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail2">
                                        <label class="custom-control-label" for="mail2"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/02.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Miriam Walya</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail3">
                                        <label class="custom-control-label" for="mail3"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/03.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Jenelia Parker</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom bg-light p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail4">
                                        <label class="custom-control-label" for="mail4"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/04.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Jack Deo</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail5">
                                        <label class="custom-control-label" for="mail5"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/05.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Marya Joseph</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom bg-light p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail6">
                                        <label class="custom-control-label" for="mail6"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/06.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Maninder Khan</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail7">
                                        <label class="custom-control-label" for="mail7"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/07.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Pitambar Das</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex border-bottom bg-light p-3">
                            <div class="form-check pl-0">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input check" id="mail8">
                                        <label class="custom-control-label" for="mail8"></label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="media ml-2">
                                    <img src="images/client/08.jpg" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                                    <div class="content ml-3">
                                        <h6 class="text-dark">Cristino Murfy</h6>
                                        <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <span class="text-muted h6 mb-0">Showing 8 out of 33</span>
                            <a href="javascript:void(0)" class="btn btn-primary">See more</a>
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
    <!-- Profile End -->
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
