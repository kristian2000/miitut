<template>
    <component v-bind:is="Layout">
        <router-view />
    </component>
</template>

<script>
import LayoutDefault from './layouts/LayoutDefault'
import LayoutStandar from './layouts/LayoutStandar'

export default {
    props: ['user'],
    name: 'App',
    data() {
        return {
            Layout: this.user ? LayoutDefault : 'div'
        }
    },
    components: {
        LayoutDefault
    },
    created(){
        console.log('APP CREATED', this)
        console.log('User', this.user)
        this.$store.commit('setUpdateUser', this.user)
        //Mensaje de Bienvenida
        // this.makeNotice('primary', 'HOLA!', 'Bienvenido a Miitut')
    }
}
</script>
