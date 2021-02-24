<template>
    <div >
        <Navbar />

        <main
            style="background: url('images/account/bg.png') center center; padding-top: 100px;"
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
