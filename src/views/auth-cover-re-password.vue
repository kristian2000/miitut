<script>
import Switcher from "@/components/switcher";
import {
    HomeIcon,
    MailIcon
} from 'vue-feather-icons';

/**
 * Auth-cover-re-password component
 */
export default {
    data() {
        return {}
    },
    components: {
        Switcher,
        HomeIcon,
        MailIcon
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
                                        <h4 class="card-title text-center">Recover Account</h4>
                                        <form class="login-form mt-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>
                                                    <div class="form-group position-relative">
                                                        <label>Email address <span class="text-danger">*</span></label>
                                                        <mail-icon class="fea icon-sm icons"></mail-icon>
                                                        <input type="email" class="form-control pl-5" placeholder="Enter Your Email Address" name="email" required="">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <button class="btn btn-primary btn-block">Send</button>
                                                </div>
                                                <!--end col-->
                                                <div class="mx-auto">
                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Remember your password ?</small>
                                                        <router-link to="/auth-cover-login" class="text-dark font-weight-bold">Sign in</router-link>
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

                <div class="col-lg-8 offset-lg-4 padding-less img order-1" style="background-image:url('images/user/03.jpg')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->
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
