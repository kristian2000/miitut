<template>
    <div style="margin-top: 200px;">
        <h1 v-if="status">Login, please wait !</h1>
        <h6 v-else>{{ message }}</h6>
    </div>
</template>

<script>
import { mapActions } from 'vuex';

export default {
    name: 'loginCallback',
    data() {
        return {
            status: true,
            message: '',
        }
    },
    async created(){
        // this.loginCallback()
        // window.opener.postMessage({
        //     code: this.$route.query.code,
        //     socialName: this.$route.params.drive
        // });
        // window.close();
        let data = {
            code: this.$route.query.code,
            socialName: this.$route.params.drive,
            driver: this.$route.params.drive
        };
        console.log('data', data)

        try{
            await this.loginSocialCallback(data);
            window.location.href = '/cuenta-perfil';

        }catch(error){
            window.location.href = '/';
        }

    },
    methods: {
        ...mapActions(['loginSocialCallback']),
    }
}
</script>
