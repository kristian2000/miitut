<script>
import {
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    HomeIcon,
    UserIcon,
    KeyIcon
} from 'vue-feather-icons';
import { mapActions } from 'vuex';

/**
 * Auth-cover-login component
 */
export default {
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            isLogging: false,
            emailReset: ''            
        }
    },
    created(){
        window.scroll(0, 0);
    },
    components: {
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        HomeIcon,
        UserIcon,
        KeyIcon
    },
    methods: {
        ...mapActions(['loginSocialRedirect']),
        async submit(){
            
            const res = await this.callApi('post', 'app/login', this.form)
            console.log('Response Login', res)

            if (res.status === 200){
                // this.makeNotice('success', 'Inicio Exitoso', res.data.msg);
                // this.$store.commit('setUpdateUser', res.data.user);
                let user = res.data.user;
                this.$store.dispatch('updateUser', {user})

            }
            else if (res.status === 403) {
                    this.makeNotice('info', 'Info', res.data.msg)
            }
            else if (res.status === 422){
                const dataError = res.data.errors
                const fieldErrors = Object.keys(res.data.errors)
                console.log('422', res.data)

                const h = this.$createElement
                const vNodesMsg = fieldErrors.map(field =>
                    h(
                        'div',
                        { class: ['mb-0'] },
                        [
                            this.fieldSpanish(field),
                            h('ul',  { class: ['', 'mb-0'] },
                                dataError[field].map( error => h('li', error))
                            )
                        ]
                    )
                )

                this.makeNotice('danger', 'Datos Invalidos' ,[vNodesMsg]);

            }
            else {
                console.log('hubo un error', res)

                this.makeNotice('danger', 'Error', 
                    res.data.msg ? 
                        res.data.msg 
                        : 
                        'Oops ocurrio un error interno'
                );
            }
        },
        async loginSocial(driver){
            try{
                const res = await this.loginSocialRedirect({
                    driver
                });
                if (res.status === 200){
                    // console.log(res)
                    // this.$store.commit('setUpdateUser', res.data.user)
                    window.location.href = '/'
                }
            }catch(error){
                console.log('error', {...error})
                if (error.response.status === 404){
                    this.makeNotice('danger', 'Error', error.response.data.msg);
                }else{
                    this.makeNotice('danger', 'Error', 'Oops ocurrio un error interno');
                }
            }
        },
        async sendResetPassword(){
            if (!this.emailReset.length){
                return;
            }

            const res = await this.callApi('post', 'app/auth/sendResetPassword', {
                email: this.emailReset
            })

            if (res.status === 200 ){
                this.makeNotice(
                    'success', 
                    'Info', 
                    `correo de recuperacion enviado, 
                    ingresa a tu correo para resetear tu contraseña`
                );

                this.$bvModal.hide('modalResetPassword')
                this.emailReset = '';  
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
    }
}
</script>

<template>
<div>
    <div class="back-to-home rounded d-none d-sm-block">
        <router-link to="/" class="btn btn-icon btn-primary">
            <home-icon class="icons"></home-icon>
        </router-link>
    </div>

    <!-- Hero Start -->
    <section class="cover-user bg-white">
        <div class="container-fluid px-0">
            <div class="row no-gutters position-relative">
                <div class="col-lg-4 cover-my-30 order-2">
                    <div class="cover-user-img d-flex align-items-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="card login-page border-0" style="z-index: 1">
                                    <div class="card-body p-0">
                                        <h4 class="card-title text-center">Iniciar Sesión</h4>
                                        <form 
                                            class="login-form mt-4"
                                            @submit.prevent="submit"
                                        >
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group ">
                                                        <label>Correo <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                        <user-icon class="fea icon-sm icons"></user-icon>
                                                        <input 
                                                            v-model="form.email" 
                                                            type="email" 
                                                            class="form-control pl-5" 
                                                            placeholder="Email" 
                                                            name="Correo" 
                                                            required
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                                <!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Contraseña <span class="text-danger">*</span></label>
                                                            <div class="position-relative">
                                                        <key-icon class="fea icon-sm icons"></key-icon>
                                                        <input 
                                                                                                                                                               v-model="form.password" 
                                                            type="password" 
                                                            class="form-control pl-5" placeholder="Contraseña" 
                                                            required=""
                                                        >
                                                    </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-center">
                                                        <!-- <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                            </div>
                                                        </div> -->
                                                        <p 
                                                            class="forgot-pass mb-1"
                                                            @click="()=>{this.$bvModal.show('modalResetPassword') }"
                                                            style="cursor: pointer"
                                                        >
                                                            <!-- <router-link to="/auth-cover-re-password" class="text-dark font-weight-bold"> -->
                                                            ¿ Olvidaste la Contraseña ?
                                                             <!-- </router-link> -->
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12 mb-0">
                                                    <button class="btn btn-primary btn-block">
                                                        Iniciar Sesión
                                                    </button>
                                                </div>
                                                <!--end col-->

                                               <div class="col-lg-12 mt-4 text-center">
                                                        <h6>ó Iniciar Sesión Con</h6>
                                                        <div class="row">
                                                            <div 
                                                                class="col-6 mt-3"
                                                                @click="loginSocial('facebook')"
                                                            >
                                                                <div class="btn btn-block btn-light">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <i class="mdi mdi-facebook text-primary" /> 
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="labelSocial">
                                                                                Facebook
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->
                                                            
                                                            <div 
                                                                class="col-6 mt-3"
                                                                @click="loginSocial('google')"
                                                            >
                                                                <div class="btn btn-block btn-light">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <i class="mdi mdi-google text-danger" />
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="labelSocial">
                                                                                Google
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div>
                                                    </div>
                                                <!--end col-->

                                                <div class="col-12 text-center">
                                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Si no tienes cuenta</small>
                                                        <router-link to="/registro" class="text-dark font-weight-bold">Registrate</router-link>
                                                    </p>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div> <!-- end about detail -->
                </div> <!-- end col -->

                <div class="col-lg-8 offset-lg-4 padding-less img order-1" style="background-image:url('/images/user/01.jpg')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->
            </div>
            <!--end row-->
        </div>
        <!--end container fluid-->
    </section>
    <!--end section-->
    <!-- Hero End -->

            <!-- Start Modal reset password -->
        <b-modal
            id="modalResetPassword"
            title="Resetear Contraseña"
            scrollable
            hide-footer
        >
            <!-- Start DNI -->
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 text-center">
                            <label for="dni" class="text-muted">Ingresa tu Email</label>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <b-form-input
                                    type="email"
                                    v-model="emailReset"
                                    style="width:250px"
                                />
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <b-button  
                                        pill
                                        variant="outline-secondary"
                                        @click="sendResetPassword"
                                        :disabled="Boolean(!emailReset.length)"
                                    >
                                        Enviar
                                    </b-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END DNI -->
        </b-modal>
        <!-- End Modal reset password -->

</div>
</template>

<style scoped>
    .labelSocial {
        display: flex;
        justify-content: center;
        width: 100%;
        text-align: center;
    }
</style>