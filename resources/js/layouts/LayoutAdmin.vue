<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GithubIcon,
    YoutubeIcon,
    GitlabIcon,
    MailIcon,
    UserPlusIcon,
    UsersIcon,
    MessageCircleIcon,
    BellIcon,
    ToolIcon,
    PhoneIcon,
    BookmarkIcon,
    ItalicIcon,
    GlobeIcon,
    GiftIcon,
    MapPinIcon
} from 'vue-feather-icons';

import MenuAccount from './components/MenuAccount'

/**
 * Account-profile component
 */
export default {
    props: [
        'active'
    ],
    data() {
        return {
            user: this.$store.state.user,
            loading: {
                avatar: false
            }
        }
    },
    components: {
        MenuAccount,

        ArrowUpIcon,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        GithubIcon,
        YoutubeIcon,
        GitlabIcon,
        MailIcon,
        UserPlusIcon,
        UsersIcon,
        MessageCircleIcon,
        BellIcon,
        ToolIcon,
        PhoneIcon,
        BookmarkIcon,
        ItalicIcon,
        GlobeIcon,
        GiftIcon,
        MapPinIcon
    },
    computed: {
        avatar(){
          return this.user.avatar ? this.user.avatar : '/images/avatarDefault.jpg';
        }
    },
    methods: {

    }
}
</script>


<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section class="position-relative">
        <!-- Fondo -->
        <div
            class="bg-half-170 d-table w-100"
            style="
                background: url('/images/travel/bg.jpg') center center;
                height: 50vh;
                position:absolute
            "
        >
            <!-- Capa Oscura -->
            <div class="bg-overlay"></div>

            <!-- Ilusion Curva -->
            <div class="" style="">
                <div class="shape overflow-hidden text-white">
                    <svg
                    viewBox="0 0 2880 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
                        fill="currentColor"
                    ></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="title-admin font-weight-bold my-3">
                            Acceso Admin
                        </h2>
                    </div>
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body" >
                            <div class="row" >

                                <!-- Profile Start -->
                                <section class="col-12" style="height: 60vh">
                                    <div class="mt-lg-3">
                                        <div class="row">
                                            <MenuAccount :active="this.active"/>

                                            <!-- Content -->
                                            <slot />
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end container-->
                                </section>
                                <!-- Profile end -->


                                
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

</div>
</template>

<style>

    .vh-max {
        height: 100vh;
    }

    .bg-admin {
        height: 100%;
        /* margin-top: 30px; */
    }

    .title-admin {
        color: white;
    }

</style>
