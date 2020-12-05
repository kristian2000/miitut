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
import { mapActions } from 'vuex';
export default {
    data(){
        return {
            form: {
                email: '',
                password: ''
            },
            isLogging: false
        }
    },
    methods: {
         ...mapActions(['loginSocialRedirect']),
        async submit(){
            const res = await this.callApi('post', 'app/login', this.form)

            if (res.status === 200){
                // this.makeNotice('success', 'Inicio Exitoso', res.data.msg);
                this.$store.commit('setUpdateUser', res.data.user);
                setTimeout(()=>{
                    this.$router.push('/');
                }, 1500)
            }else if (res.status === 403){
                this.makeNotice('warning', 'Verificacion Pendiente', res.data.msg)
            }else {
                this.makeNotice('danger', 'Error', res.data.msg);
            }
            console.log('Response Login', res)
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
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        HomeIcon,
        UserIcon,
        KeyIcon,
        MailIcon
    },
}
</script>
<template>
<div>

    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center" >
        <div class="container col-lg-5 col-md-6" >
            <div class="row align-items-center">
                <div class="">
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Iniciar Sesión</h4>
                            <form class="login-form mt-4" @submit.prevent="submit">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Correo <span class="text-danger">*</span></label>
                                            <user-icon class="fea icon-sm icons"></user-icon>
                                            <input v-model="form.email" type="email" class="form-control pl-5" placeholder="Escribe tu correo..." name="email" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Contraseña <span class="text-danger">*</span></label>
                                            <key-icon class="fea icon-sm icons"></key-icon>
                                            <input v-model="form.password" type="password" class="form-control pl-5" placeholder="Escribe tu contraseña..." required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Recuerdame</label>
                                                </div> -->
                                            </div>
                                            <p class="forgot-pass mb-0">
                                                <router-link to="/template/auth-re-password" class="text-dark font-weight-bold">¿Olvidaste tu contraseña ?</router-link>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-0 mt-2">
                                        <button class="btn btn-primary btn-block">Iniciar</button>
                                    </div>
                                    <div class="col-lg-12 mt-4 text-center">
                                        <h6>ó Iniciar con</h6>
                                        <ul class="list-unstyled social-icon mb-0 mt-3">
                                            <li class="list-inline-item" @click="loginSocial('facebook')">
                                                <a href="javascript:void(0)" class="rounded">
                                                    <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                                </a>
                                            </li>

                                            <li class="list-inline-item ml-1">
                                                <a href="javascript:void(0)" class="rounded" @click="loginSocial('google')">
                                                    <mail-icon class="fea icon-sm fea-social"></mail-icon>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end icon-->
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark mr-2">¿No tienes una cuenta?</small>
                                            <router-link to="/helpOrWork" class="text-dark font-weight-bold">Regístrate</router-link>
                                        </p>
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
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
</div>
</template>
