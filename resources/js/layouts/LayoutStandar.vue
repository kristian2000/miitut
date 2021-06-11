<template>
    <div>
        <main class="position-relative">
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

            <!-- contenido -->
            <div class="container container-main">
                <slot />
            </div>
            
        </main>
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

<style>
    .container-main {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .container-main-body {
        margin-top: 100px;
    }

    @media (min-width: 768px) {
        .container-main-body {
            margin-top: 150px
        } 
     }
</style>