<script>
    export default {
        data(){
            return {
                loading: true,
                msg: ''
            }
        },
        async created(){

            const res = await this.callApi('post', 'app/verifyUserEmail', {
                code: this.$route.query.code
            })

            if (res.status === 200){
                this.makeNotice('success', 'Verificacion Exitosa', res.data.msg);
                // this.$store.commit('setUpdateUser', res.data.user);
                this.msg = res.data.msg;
                this.loading = false;

                setTimeout(()=>{
                    window.location.href = '/'
                }, 2000)

            }else {
                if (res.status === 400){
                    this.makeNotice('danger', 'Error', 'Codigo invalido');
                }
                this.loading = false;
                this.msg = 'Codigo Invalido'

            }

        }
    };
</script>

<template>
<div>
    <section class="row justify-content-center align-items-center" style="height:80vh">
        <div class="title-heading mt-4 text-center">
            <h2 class="heading mb-3 text-primary" v-if="loading">
               Espere un momento, estamos Verificando el Codigo!
            </h2>
            <h2 class="heading mb-3 text-info" v-if="!loading">
                {{ msg }}
            </h2>
        </div>
    </section>
</div>
</template>
