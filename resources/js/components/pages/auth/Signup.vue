<script>
import {
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    HomeIcon,
    UserIcon,
    UserCheckIcon,
    MailIcon,
    KeyIcon
} from 'vue-feather-icons';

import axios from 'axios';
/**
 * Auth-signup component
 */

import { mapActions } from 'vuex';

export default {
    data() {
        return {
            acceptTerm: false,
            showAlert: false,
            message: '',
            form: {
                name: 'cherry gota',
                email: 'chgf1997@gmail.com',
                password: 'test12',
                password_confirmation: 'test12',
                userType: this.$route.params.option,
                category: this.$route.params.category
            }
        }
    },
    created(){
        if (this.$store.getters['auth/isAuth']){
            this.$router.push('/dashboard');
        }
    },
    methods: {
         ...mapActions(['loginSocialRedirect']),

        handleAcceptTerm(){
            this.acceptTerm = !this.acceptTerm;
        },

        async submit(){

            const res = await this.callApi('post', '/app/register', this.form)

            if (res.status === 201){
                this.makeNotice('success', 'Registro Exitoso', res.data.msg);
                // this.$store.commit('setUpdateUser', res.data.user);
                // this.$router.push('/dashboard');
                window.location.href = '/'
                // setTimeout(()=>{
                // }, 1500)
            }else if (res.status === 422){
                const dataError = res.data.errors
                const fieldErrors = Object.keys(res.data.errors)
                // console.log(res.data)

                const h = this.$createElement
                const vNodesMsg = fieldErrors.map(field =>
                    h(
                        'div',
                        { class: ['mb-0'] },
                        [
                            field.toUpperCase(),
                            h('ul',  { class: ['', 'mb-0'] },
                                dataError[field].map( error => h('li', error))
                            )
                        ]
                    )
                )

                this.makeNotice('danger', 'Datos Invalidos' ,[vNodesMsg]);

            }else {
                this.makeNotice('danger', 'Error', 'Error interno');
            }

        },
        async loginSocial(driver){
            try{
                const res = await this.loginSocialRedirect(driver);
                if (res.status === 200){
                    // console.log(res)
                    // this.$store.commit('setUpdateUser', res.data.user)
                    window.location.href = '/'
                }
            }catch(error){
                console.log('error', error)
            }
        }
    },
    components: {
        FacebookIcon,
        TwitterIcon,
        LinkedinIcon,
        HomeIcon,
        UserIcon,
        UserCheckIcon,
        MailIcon,
        KeyIcon
    }
}
</script>

<template>
<div>
    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center">
        <div class="container col-lg-5 col-md-6">
            <div class="row align-items-center">

                <div class="">
                    <div class="card login_page shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Registro</h4>
                            <form class="login-form mt-4" v-on:submit.prevent="submit">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Nombre <span class="text-danger">*</span></label>
                                            <user-icon class="fea icon-sm icons"></user-icon>
                                            <input v-model="form.name" type="text" class="form-control pl-5" placeholder="Escribe tu nombre..." name="s" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Correo <span class="text-danger">*</span></label>
                                            <mail-icon class="fea icon-sm icons"></mail-icon>
                                            <input v-model="form.email" type="email" class="form-control pl-5" placeholder="Escribe tu Correo..." name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Contraseña <span class="text-danger">*</span></label>
                                            <key-icon class="fea icon-sm icons"></key-icon>
                                            <input v-model="form.password" type="password" class="form-control pl-5" placeholder="Escribe tu contraseña..." required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Confirmar Contraseña <span class="text-danger">*</span></label>
                                            <key-icon class="fea icon-sm icons"></key-icon>
                                            <input v-model="form.password_confirmation" type="password" class="form-control pl-5" placeholder="Escribe tu contraseña..." required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox" v-on:click="handleAcceptTerm">
                                                <input type="checkbox" class="custom-control-input" id="acceptTerm" v-model="acceptTerm">
                                                <label class="custom-control-label" for="customCheck1">Acepto <a href="#" class="text-primary">los terminos y condiciones</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block" :disabled="!acceptTerm">Register</button>
                                    </div>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6>ó Registrate Con</h6>
                                        <ul class="list-unstyled social-icon mb-0 mt-3">
                                            <li class="list-inline-item" @click="loginSocial('facebook')">
                                                <a href="javascript:void(0)" class="rounded">
                                                    <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                                </a>
                                            </li>

                                            <li class="list-inline-item ml-1" @click="loginSocial('google')">
                                                <a href="javascript:void(0)" class="rounded">
                                                    <mail-icon class="fea icon-sm fea-social"></mail-icon>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end icon-->
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">Ya tienes una cuenta ?</small>
                                            <router-link to="/login" class="text-dark font-weight-bold">Iniciar sesión</router-link>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
</div>
</template>
