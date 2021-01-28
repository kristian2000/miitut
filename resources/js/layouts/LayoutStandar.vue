<template>
    <div >
        <Navbar />

        <main
            class="pb-4"
            style="background: url('images/account/bg.png') center center; padding-top: 100px;"
        >
            <div
                class="container d-table p-3"
                :style="bgWhite ? 'background:white; border-radius: 25px;' : ''"
            >
                <slot />
            </div>
        </main>

        <Footer />

    </div>
</template>

<script>
import Navbar from './components/navbarP.vue'
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
        Navbar,
        Footer
    }
}
</script>
