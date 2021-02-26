<script>
import {
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    HomeIcon,
    UserIcon,
    KeyIcon,
    MailIcon
} from 'vue-feather-icons';

import LayoutStandar from '../../../layouts/LayoutStandar'

export default {
    data(){
        return {
            form: {
                email: '',
                code: '',
                password: '',
                confirm_password: ''
            },
            loading: false
        }
    },
    created(){
        const { email, code } = this.$route.query;

        if ( !email || !code ){
            this.$router.push('/');
        }

        this.form.email = email;
        this.form.code = code;

    },
    methods: {
        async validate(){
            // validacion rapida

            if (this.form.password !== this.form.confirm_password){
                return this.makeNotice(
                    'danger', 
                    'Validacion', 
                    'Las contraseñas no coinciden'
                );
            }

            this.submit();
        },
        async submit(){

            const res = await this.callApi('post', 'app/auth/resetPassword', this.form)

            if (res.status === 200 ){
                this.makeNotice(
                    'success', 
                    'Info', 
                    `Contraseña Cambiada, ya puedes iniciar sesion`
                );

                setTimeout(()=>{
                    this.$router.push('/'); 
                }, 2000)
            }else {

                this.makeNotice('danger', 'Error', 
                    res.data.msg ? 
                        res.data.msg 
                        : 
                        'Oops ocurrio un error interno'
                );
            }

            console.log(res);
        }
    },
    components: {
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        HomeIcon,
        UserIcon,
        KeyIcon,
        MailIcon,
        LayoutStandar
    },
}
</script>
<template>
<LayoutStandar>

    <div class="container my-5 col-lg-5 col-md-6" >
        <div class="row align-items-center">
            <div class="">
                <div class="card login-page bg-white shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">Resetear Contraseña</h4>
                        <form class="login-form mt-4" @submit.prevent="validate">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Nueva Contraseña <span class="text-danger">*</span></label>
                                        <key-icon class="fea icon-sm icons mt-1"></key-icon>
                                        <input 
                                            v-model="form.password" 
                                            type="password" 
                                            class="form-control pl-5" 
                                            placeholder="Escribe tu contraseña..." 
                                            required=""
                                        >
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Confirmar Contraseña <span class="text-danger">*</span></label>
                                        <key-icon class="fea icon-sm icons mt-1"></key-icon>
                                        <input 
                                            v-model="form.confirm_password" 
                                            type="password" 
                                            class="form-control pl-5" 
                                            placeholder="Escribe tu contraseña..." 
                                            required=""
                                        >
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-0 mt-2">
                                    <button class="btn btn-primary btn-block">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!---->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</LayoutStandar>
</template>
