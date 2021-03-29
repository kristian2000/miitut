<script>

export default {
    data(){
        return {
            loading: false,
            form: {
                subject: null,
                email: '',
                message: ''
            },
            options: [
                { value: null, text: 'Por Favor Seleciona tu Asunto' },
                'Problema con un Contrato',
                'Problema con la Plataforma',
                'Problema con un Pago',
            ]
        }
    },
    components: {
    },
    created(){
        window.scroll(0, 0);
    },
    methods: {
        async submit(){
            this.loading = true;
            const res = await this.callApi('post', '/app/users/supportMessage',  this.form); 

            if (res.status === 200){
                this.makeNotice('success', 'Info', "Mensaje Enviardo Correctamente, espere que soporte se comunique con usted");
                //Limpiar datos
                this.subject = null;
                this.email = '';
                this.message = '';
            }else {
                this.makeNotice('danger', 'Oops', "Ocurrio un error")
            }

            this.loading = false;
            // console.log('support', res.data)
        }
    }
};
</script>

<template>
<div>
    <!-- Hero Start -->
    <section class="bg-half-170 seccion1 d-table w-100">
        <div class="container" id="container">
            <div class="row">
                <div class="mt-5 col-12 d-flex justify-content-center">
                    <div class="info">
                        <div class="title-heading">
                            <h1 class="heading">Comunicate con nosotros!</h1>
                        </div>
                        <div class="" v-if="!loading">
                            <div class="container">
                                <form v-on:submit.prevent="submit">
                                    <div class="m-3">
                                        <b-form-select 
                                            v-model="form.subject" 
                                            :options="options"
                                        />
                                    </div>
                                    <div class="m-3">
                                        <b-form-input 
                                            v-model="form.email"
                                            type="email"
                                            placeholder="Escribe tu Email"
                                            required
                                        />
                                    </div>
                                    <div class="m-3">
                                        <b-form-textarea
                                            v-model="form.message"
                                            placeholder="Escribe aqui..."
                                            rows="3"
                                            max-rows="6"
                                            required
                                        />
                                    </div>

                                    <div class="mt-3 d-flex justify-content-center">
                                        <div>
                                            <b-button   
                                                variant="outline-primary"
                                                type="submit"
                                            >
                                                Enviar
                                            </b-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div v-else>
                            <div 
                                class="d-flex justify-content-center align-items-center"
                                style="min-height:350px"
                            >
                                <div>
                                    <b-spinner type="grow" label="Spinning" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
</div>
</template>

<style scoped>
    .heading {
        font-weight: bold;
    }

    li {
        color: rgb(41, 12, 0);
        font-weight: bold;
        color:#ff4b64
    }

    .info {
        padding: 50px;
        border-radius: 10px;
        background: white;
    }
</style>