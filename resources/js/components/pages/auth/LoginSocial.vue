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
    created(){
        // this.loginCallback()
        window.opener.postMessage({
            code: this.$route.query.code,
            socialName: this.$route.params.drive
        });
        window.close();
    }
}
</script>
