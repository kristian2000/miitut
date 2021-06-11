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
        },
        notifications(){
            return this.$store.state.notifications;
        }
    },
    methods: {
        selectImage(){
            this.$refs.fileInput.click()
        },
        async onFileChange(e){
            const image = e.target.files[0]
            if (image){
                this.loading.avatar = true;
                
                const formData = new FormData();
                formData.append('avatar', image);

                const res = await this.callApi('post', 'app/users/updateAvatar', formData);

                if (res.status === 200){
                    console.log(res);
                    this.loading.avatar = false;
                }
                this.$forceUpdate();
            }            
        },
    }
}
</script>


<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section class="bg-profile d-table w-100" style="background: url('/images/account/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body" >
                            <div class="row align-items-center" >
                                <div class="col-lg-2 col-md-3 text-md-left text-center">
                                    <div v-if="loading.avatar">
                                        <b-spinner type="grow" label="Spinning" />
                                    </div>
                                    <div v-else>
                                        <img
                                            :src="avatar"
                                            class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt=""
                                            style="cursor:pointer;"
                                            @click="selectImage()"
                                        >
                                        <input ref="fileInput" id="input" type="file" @change="onFileChange" style='display:none;'>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-10 col-md-9 welcome" >
                                    <div class="row align-items-end">
                                        <div class="col-12 text-md-left text-center mt-4 mt-sm-0">
                                            <div class="d-flex flex-column align-items-center">                                                
                                                <h1 class="title mb-2 font-weight-bold">Bienvenido <span class="text-capitalize">{{ user.name }}</span></h1>
                                                <p class="text-muted h6 mr-2">{{ user.description }}</p>
                                            </div>
                                        </div>
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
                <MenuAccount :active="this.active"/>

                <!-- Content -->
                <slot />

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Profile End -->

</div>
</template>
