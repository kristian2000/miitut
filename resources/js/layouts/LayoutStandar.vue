<template>
    <div >
        <NavbarAuthorization v-if="user"/>
        <NavbarUnauthorization v-else/>
        <main
            style="background: url('/images/account/bg.png') center center; padding-top: 100px;"
        >
            <div
                class="py-5 pl-3 pr-3"
            >
                <div
                    class="container p-3"
                    :style="bgWhite ? 'background:white; border-radius: 25px;' : ''"
                >
                    <slot />
                </div>
            </div>
        </main>

        <Footer />

    </div>
</template>

<script>
import NavbarAuthorization from './components/navbarP.vue'
import NavbarUnauthorization from '../components/pages/Home/navbar';
import Footer from './components/Footer'

export default {
    props: [
        'bgWhite'
    ],
    data(){
        return {

        }
    },
    components: {
        NavbarAuthorization,
        NavbarUnauthorization,
        Footer
    },
    computed: {
        user(){
            return this.$store.state.user;
        }
    }
}
</script>
