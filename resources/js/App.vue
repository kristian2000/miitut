<template>

    <!-- <component v-bind:is="Layout"> -->
        <router-view />
    <!-- </component> -->
</template>

<script>

import LayoutDefault from './layouts/LayoutDefault'
// import LayoutEmpty from './layouts/LayoutEmpty'
// import LayoutStandar from './layouts/LayoutStandar'

// const notViewMenu = ['/login'];

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
    async created(){
        console.log('APP CREATED', this)
        console.log('User', this.user)
        this.$store.commit('setUpdateUser', this.user)

    }
}
</script>
