<script>
import Switcher from "@/components/switcher";
import {
    HomeIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    UserIcon,
    UserCheckIcon,
    MailIcon,
    KeyIcon,
    GitlabIcon
} from 'vue-feather-icons';

/**
 * Auth-cover-signup component
 */
export default {
    data() {
        return {}
    },
    components: {
        Switcher,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        HomeIcon,
        UserIcon,
        UserCheckIcon,
        MailIcon,
        KeyIcon,
        GitlabIcon
    }
}
</script>

<template>
<div>
    <div class="back-to-home rounded d-none d-sm-block">
        <router-link to="/" class="btn btn-icon btn-soft-primary">
            <home-icon class="icons"></home-icon>
        </router-link>
    </div>

    <!-- Hero Start -->
    <section class="cover-user bg-white">
        <div class="container-fluid px-0">
            <div class="row no-gutters position-relative">
                <div class="col-lg-4 cover-my-30 order-2">
                    <div class="cover-user-img d-flex align-items-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="card login_page border-0" style="z-index: 1">
                                    <div class="card-body p-0">
                                        <h4 class="card-title text-center">Signup</h4>
                                        <form class="login-form mt-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group position-relative">
                                                        <label>First name <span class="text-danger">*</span></label>
                                                        <user-icon class="fea icon-sm icons"></user-icon>
                                                        <input type="text" class="form-control pl-5" placeholder="First Name" name="s" required="">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-md-6">
                                                    <div class="form-group position-relative">
                                                        <label>Last name <span class="text-danger">*</span></label>
                                                        <user-check-icon class="fea icon-sm icons"></user-check-icon>
                                                        <input type="text" class="form-control pl-5" placeholder="Last Name" name="s" required="">
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
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-md-12">
                                                    <button class="btn btn-primary btn-block">Register</button>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12 mt-4 text-center">
                                                    <h6>Or Signup With</h6>
                                                    <ul class="list-unstyled social-icon mb-0 mt-3">
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
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                                                <gitlab-icon class="fea icon-sm fea-social"></gitlab-icon>
                                                            </a></li>
                                                    </ul>
                                                    <!--end icon-->
                                                </div>
                                                <!--end col-->

                                                <div class="mx-auto">
                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small>
                                                        <router-link to="/auth-cover-login" class="text-dark font-weight-bold">Sign in</router-link>
                                                    </p>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div> <!-- end about detail -->
                </div> <!-- end col -->

                <div class="col-lg-8 offset-lg-4 padding-less img order-1" style="background-image:url('images/user/02.jpg')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->
            </div>
            <!--end row-->
        </div>
        <!--end container fluid-->
    </section>
    <!--end section-->
    <!-- Hero End -->
    <Switcher />
</div>
</template>
