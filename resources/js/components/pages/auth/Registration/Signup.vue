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

import { mapActions } from 'vuex';

export default {
    props: [
        'userType',
        'category'
    ],
    data() {
        return {
            loading: false,
            acceptTerm: true,
            showAlert: false,
            message: '',
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                userType: this.userType
            }
        }
    },
    created(){
        if (this.$store.getters['auth/isAuth']){
            this.$router.push('/cuenta-perfil');
        }
         window.scroll(0, 0);
    },
    methods: {
         ...mapActions(['loginSocialRedirect']),

        handleAcceptTerm(){
            this.acceptTerm = !this.acceptTerm;
        },

        async submit(){
            this.loading = true;

            let data = this.userType === 'work' ? Object.assign({
                category: this.category
            } , this.form) : this.form;

            console.log('submit Form', data)
            const res = await this.callApi('post', '/app/register', data)
            // console.log(res)

            if (res.status === 201){
                this.makeNotice('success', 'Registro Exitoso', res.data.msg);
                
                setTimeout(()=>{
                    this.$router.push('/info-ver-email');
                    // window.location.href = '/'
                }, 3000)

            }else if (res.status === 422){
                const dataError = res.data.errors
                const fieldErrors = Object.keys(dataError)
                console.log('422', res.data)

                this.makeNoticeListErrors(dataError);

            }else {
                this.makeNotice('danger', 'Error', 'Error interno');
            }

            this.loading = false;
        },
        async loginSocial(driver){
            try{
                const res = await this.loginSocialRedirect({
                    driver,
                    userType: this.userType,
                    [this.category ? 'category': ''] :  this.category
                });
                if (res.status === 200){

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
<!-- <section class=""> -->
    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
        <div>
            <div class="card login_page shadow rounded border-0" style="max-width: 500px">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">
                        <span class="border-bottom"> Registro </span>
                    </h4>
                    <form class="login-form mt-4" 
                        v-if="!loading"
                        v-on:submit.prevent="submit" 
                    >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group position-relative">
                                    <label>Nombre <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <user-icon class="fea icon-sm icons"></user-icon>
                                        <input 
                                            v-model="form.name" 
                                            type="text" 
                                            class="form-control pl-5" 
                                            placeholder="Escribe tu nombre..." 
                                            name="name" 
                                            required=""
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative">
                                    <label>Correo <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <mail-icon class="fea icon-sm icons"></mail-icon>
                                        <input 
                                            v-model="form.email"
                                            type="email" 
                                            class="form-control pl-5" 
                                            placeholder="Escribe tu Correo..." 
                                            name="email" 
                                            required=""
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative" >
                                    <label>Contraseña <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <key-icon class="fea icon-sm icons"></key-icon>
                                        <input v-model="form.password" type="password" class="form-control pl-5" placeholder="Escribe tu contraseña..." required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group position-relative">
                                    <label>Confirmar Contraseña <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <key-icon class="fea icon-sm icons"></key-icon>
                                        <input v-model="form.password_confirmation" type="password" class="form-control pl-5" placeholder="Escribe tu contraseña..." required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <div class="text-center">
                                            <span class="text-muted" style="font-size: 12px">
                                                Al hacer clic en "Registrarte", aceptas nuestras 
                                                <span 
                                                    class="text-info" 
                                                    style="cursor:pointer"
                                                    @click="()=> { this.$bvModal.show('modalPermitsAndConditions')}"
                                                >
                                                    Condiciones.
                                                </span>
                                            </span>
                                        </div>
                                        <!-- <input type="checkbox" class="custom-control-input" id="acceptTerm" v-model="acceptTerm">
                                        <label class="custom-control-label" for="customCheck1">Acepto <a href="#" class="text-primary">los terminos y condiciones</a></label> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button 
                                    class="btn btn-primary btn-block" 
                                    :disabled="!acceptTerm"
                                >
                                    Registrarte
                                </button>
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
                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Si ya tienes una cuenta</small>
                                    <router-link to="/login" class="text-dark font-weight-bold">Iniciar sesión</router-link>
                                </p>
                            </div>
                        </div>
                    </form>
                    <div v-else>
                        <div 
                            class="d-flex justify-content-center align-items-center" 
                            style="min-height: 70vh; min-width: 450px;"
                        >
                            <div style="height: 100%;">
                                <b-spinner type="grow" label="Spinning" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Modal Contrato -->
        <b-modal
            id="modalPermitsAndConditions"
            title="Terminos y Condiciones"
            scrollable
            hide-footer
        >
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sapiente asperiores blanditiis est omnis tempora harum, velit officiis rerum voluptatum alias hic accusamus suscipit enim ut cum ad praesentium magni!
            </p>

        </b-modal>
        <!-- End Modal Contrato -->
    </div>


<!-- </section> -->
</template>

<style scoped>
    .section {
        height: 60vh;
    }
</style>
