<template>
    <LayoutDefault>
        <router-view />
    </LayoutDefault>
</template>

<script>
import LayoutDefault from './layouts/LayoutDefault'
export default {
    props: ['user'],
    name: 'App',
    data() {
        return {

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
