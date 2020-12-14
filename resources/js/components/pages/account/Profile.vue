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

import LayoutAccount from '../../../layouts/LayoutAccount'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            user: this.$store.state.user
        }
    },
    created(){
        console.log('accountProfile', this.user)
    },
    components: {
        LayoutAccount,

        // Components <-> Icons
        MailIcon,
        BookmarkIcon,
        ItalicIcon,
        MapPinIcon
    }
}
</script>


<template>
<div>
    <LayoutAccount :active="'Perfil'">
        <div class="col-lg-8 col-12">
            <div class="border-bottom pb-4">
                <p class="text-muted mb-0">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
            </div>

            <div class="border-bottom pb-4">
                <div class="row">
                    <div class="col-md-6 col-sm-6 mt-4">
                        <div class="mt-4">
                            <div class="media align-items-center">
                                <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Email :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.email}}</a>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Skills :</h6>
                                    <!-- <a href="javascript:void(0)" class="text-muted">html</a>, <a href="javascript:void(0)" class="text-muted">css</a>, <a href="javascript:void(0)" class="text-muted">js</a>, <a href="javascript:void(0)" class="text-muted">mysql</a> -->
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <italic-icon class="fea icon-ex-md text-muted mr-3"></italic-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Language :</h6>
                                    <!-- <a href="javascript:void(0)" class="text-muted">English</a>, <a href="javascript:void(0)" class="text-muted">Japanese</a>, <a href="javascript:void(0)" class="text-muted">Chinese</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-4">
                        <div class="mt-4">
                            <div class="media align-items-center">
                                <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Fecha de Nacimiento :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.birthdate}}</a>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Genero :</h6>
                                     <a href="javascript:void(0)" class="text-muted">{{user.gender == 'man' ? 'Hombre' : 'Mujer'}}</a>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <MapPinIcon class="fea icon-ex-md text-muted mr-3"></MapPinIcon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Address :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.address}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </LayoutAccount>
</div>
</template>
