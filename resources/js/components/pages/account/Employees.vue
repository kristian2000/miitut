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
        return {}
    },
    components: {
        LayoutAccount
    }
}
</script>

<template>
    <LayoutAccount :active="'Empleados'">
        <div class="col-lg-8 col-12 mt-4">

            <div class="border-bottom pb-4">
                <div class="row">

                    <div class="col-12 container border shadow caja">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 mt-2 col-sm-4">
                                <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle shadow d-block" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-8">
                                <h2 class="font-weight-bold">Luisana Amiga</h2>
                                <h3 class="font-weight-bold">Diseños Creativos</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <button id="btn-modify-2" class="text-white">ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 container border shadow caja">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 mt-2 col-sm-4">
                                <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle shadow d-block" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-8">
                                <h2 class="font-weight-bold">Luisana Amiga</h2>
                                <h3 class="font-weight-bold">Diseños Creativos</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <button id="btn-modify-2" class="text-white">ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 container border shadow caja">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 mt-2 col-sm-4">
                                <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle shadow d-block" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-8">
                                <h2 class="font-weight-bold">Luisana Amiga</h2>
                                <h3 class="font-weight-bold">Diseños Creativos</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <button id="btn-modify-2" class="text-white">ver más</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </LayoutAccount>
</template>

<style scoped>

    .caja {
        padding: 20px;
        margin-bottom: 30px;
        border-bottom: 1px solid #ff4b64;
    }

    .caja h2 {
        font-size: 30px;
        color: #8492a6;
    }

    .caja h3 {
        font-size: 30px;
    }

    .row h3 {
        font-size: 30px;
    }

    label span {
        font-size: 20px;
        color: #8492a6;
        margin-left: 10px;
        margin-bottom: 2px;
    }

    label input {
        padding: 20px;
    }

    .caja button {
        background: rgb(241,84,56);
        background: linear-gradient(90deg, rgba(241,84,56,1) 24%, rgba(244,125,59,1) 100%);
    }

    #btn-modify-2 {
        padding: 6px 25px 6px 25px;
        font-size: 20px;
        border-radius: 350px;
        border: none;
    }

</style>
