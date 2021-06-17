<template>
    <div>
        <Navbar :isAuth="isAuth"/>

        <main style="min-height: 80vh">
            <router-view></router-view>
        </main>

        <Footer />
    </div>
</template>

<script>
import Navbar from './components/navbarP'
import Footer from './components/Footer'

export default {
    components: {
        Navbar,
        Footer
    },
    computed: {
        isAuth(){
            return Boolean(this.$store.state.user);
        }
    },
    created(){
        // console.log('Init')
    }
}
</script>
