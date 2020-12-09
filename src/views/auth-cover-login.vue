<script>
import Switcher from "@/components/switcher";
import {
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    HomeIcon,
    UserIcon,
    KeyIcon
} from 'vue-feather-icons';

/**
 * Auth-cover-login component
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
        KeyIcon
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
                                <div class="card login-page border-0" style="z-index: 1">
                                    <div class="card-body p-0">
                                        <h4 class="card-title text-center">Login</h4>
                                        <form class="login-form mt-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group position-relative">
                                                        <label>Your Email <span class="text-danger">*</span></label>
                                                        <user-icon class="fea icon-sm icons"></user-icon>
                                                        <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="form-group position-relative">
                                                        <label>Password <span class="text-danger">*</span></label>
                                                        <key-icon class="fea icon-sm icons"></key-icon>
                                                        <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <p class="forgot-pass mb-0">
                                                            <router-link to="/auth-cover-re-password" class="text-dark font-weight-bold">Forgot password ?</router-link>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12 mb-0">
                                                    <button class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12 mt-4 text-center">
                                                    <h6>Or Login With</h6>
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
                                                    </ul>
                                                    <!--end icon-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-12 text-center">
                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small>
                                                        <router-link to="/auth-cover-signup" class="text-dark font-weight-bold">Sign Up</router-link>
                                                    </p>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div> <!-- end about detail -->
                </div> <!-- end col -->

                <div class="col-lg-8 offset-lg-4 padding-less img order-1" style="background-image:url('images/user/01.jpg')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->
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
