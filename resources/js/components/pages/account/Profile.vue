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
    MapPinIcon,
    CheckIcon,
    AlertCircleIcon
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
        MapPinIcon,
        CheckIcon,
        AlertCircleIcon
    }
}
</script>


<template>
<div>
    <LayoutAccount :active="'Perfil'">
        <div class="col-lg-8 col-12">
            <div class="border-bottom pb-4">
                <p class="text-muted mb-0 mt-5"></p>
            </div>

            <div class="border-bottom pb-4">
                <div class="row">
                    <div class="col-md-6 col-sm-6 mt-4 border-bottom">
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
                                    <h6 id="title" class="mb-0">DNI :</h6>
                                    <p class="text-muted">{{user.dni}}</p>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Telefono :</h6>
                                    <p class="text-muted">{{user.phone}}</p>
                                </div>
                            </div>
                            <!-- <div class="media align-items-center mt-3">
                                <italic-icon class="fea icon-ex-md text-muted mr-3"></italic-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Language :</h6>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-4 border-bottom ">
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

                <div>
                    <div class="text-center mt-2">
                        <h6 id="title" class="mb-0 text-info">Verificaciones</h6>
                    </div>
                    <div class="media align-items-center mt-3">
                        <div class="media-body">
                            <h6 id="title" class="mb-0">Email</h6>
                        </div>
                        <CheckIcon
                            v-if="user.email_check"
                            class="fea icon-ex-md text-muted mr-3"
                        />
                        <AlertCircleIcon
                            v-else
                            class="fea icon-ex-md text-muted mr-3"
                        />
                    </div>
                    <div class="media align-items-center mt-3">
                        <div class="media-body">
                            <h6 id="title" class="mb-0">DNI</h6>
                        </div>
                        <CheckIcon
                            v-if="user.email_check"
                            class="fea icon-ex-md text-muted mr-3"
                        />
                        <AlertCircleIcon
                            v-else
                            class="fea icon-ex-md text-muted mr-3"
                        />
                    </div>
                </div>
            </div>

        </div>
    </LayoutAccount>
</div>
</template>
