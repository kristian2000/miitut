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
    <LayoutAccount :active="'Contratos'">
        <div class="col-lg-8 col-12">

            <div class="border-bottom pb-4">
                <div class="row">

                    <div class="col-12 border shadow caja">
                        <h2 class="font-weight-bold">Logo</h2>
                        <h3 class="font-weight-bold">Diseños creativos</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p>
                        <button id="btn-modify-2" class="text-white">ver más</button>
                    </div>

                    <div class="col-12 border shadow caja">
                        <h2 class="font-weight-bold">Logo</h2>
                        <h3 class="font-weight-bold">Diseños creativos</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p>
                        <button id="btn-modify-2" class="text-white">ver más</button>
                    </div>

                    <div class="col-12 border shadow caja">
                        <h2 class="font-weight-bold">Logo</h2>
                        <h3 class="font-weight-bold">Diseños creativos</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p>
                        <button id="btn-modify-2" class="text-white">ver más</button>
                    </div>

                </div>

            </div>
        </div>

    </LayoutAccount>
</template>
