<script>
    import LayoutStandar from '../../../layouts/LayoutStandar'
    export default {
        data(){
            return {
                loading: true,
                msg: ''
            }
        },
        components: {
            LayoutStandar
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

                // setTimeout(()=>{
                //     this.$route.push('/')
                // }, 2000)

            }else {
                if (res.status === 400){
                    this.makeNotice('danger', 'Error', 'Codigo invalido');
                }
                this.loading = false;
                this.msg = 'Código Inválido'

            }

        }
    };
</script>

<template>
<LayoutStandar>
        <!-- Hero Start -->
    <section class="bg-half-170 seccion1 d-table w-100">
        <div class="" id="container">
            <div class="row">
                <div class="mt-5 col-12 d-flex justify-content-center">
                    <div class="info p-3">
                        <div class="title-heading">
                            <h2 class="text-title mb-3 text-primary" v-if="loading">
                                Espere un momento, estamos Verificando el Código!
                            </h2>
                            <h2 class="text-title mb-3 text-info" v-if="!loading">
                                {{ msg }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
</LayoutStandar>
</template>

<style>
    .text-title {
        font-size: 2rem;
        text-align: center;
    }

    li {
        font-weight: bold;
    }

    .info {
        box-sizing: border-box;
        /* width: 100%; */
        /* max-width: 800px; */
        /* padding: 5vw; */
        border-radius: 10px;
        background: white;
        border: 3px solid #eee;
    }
</style>