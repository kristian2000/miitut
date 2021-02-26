<template>
    <div>
        <NavbarAuthorization v-if="user"/>
        <div v-else>
            <NavbarUnauthorization />
        </div>

        <main>
            <slot />
        </main>

        <!-- <Footer /> -->
    </div>
</template>

<script>
import NavbarAuthorization from './components/Navbar'
import NavbarUnauthorization from '../components/pages/Home/navbar'
import Footer from './components/Footer'

export default {
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
