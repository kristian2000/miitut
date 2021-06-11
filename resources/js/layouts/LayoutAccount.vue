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

let sizeImgMax = 102400;

export default {
    props: [
        'active'
    ],
    data() {
        return {
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
        user(){
            return this.$store.state.user;
        },
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

            if (image?.size >= sizeImgMax){
                this.makeNotice(
                    'danger', 
                    'Tamaño Máximo', 
                    `La imagen debe ser menor a ${Number(sizeImgMax/1024).toFixed(0)}Kb`
                );
                return;
            }

            if (image){
                this.loading.avatar = true;
                
                const formData = new FormData();
                formData.append('avatar', image);

                const res = await this.callApi('post', 'app/users/updateAvatar', formData);

                if (res.status === 200){
                    console.log(res);
                     window.location.href = 'account-profile';
                    // this.loading.avatar = false;
                }
                
            }            
        },
    }
}
</script>


<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section 
        class="bg-profile d-table w-100 bg-primary" 
        style="background: url('/images/account/bg.png') center center;"
        >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body" >
                            <div class="row align-items-center">
                                <!-- Start Avatar -->
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
                                <!-- End Avatar -->

                                <div class="col-lg-10 col-md-9">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                            <h3 class="title mb-0 text-capitalize">{{ user.name }}</h3>
                                            <small class="text-muted h6 mr-2">{{ user.description }}</small>
                                            <ul class="list-inline mb-0 mt-3">
                                                <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted" title="Instagram">
                                                        <instagram-icon class="fea icon-sm mr-2"></instagram-icon>krista_joseph
                                                    </a></li>
                                                <li class="list-inline-item">
                                                    <router-link to="/account-setting" class="rounded text-muted" v-b-tooltip.hover title="Settings">
                                                        <linkedin-icon class="fea icon-sm fea-social mr-2"></linkedin-icon>
                                                        Krista Joseph
                                                    </router-link>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!-- End Info User -->
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

<style>

</style>
