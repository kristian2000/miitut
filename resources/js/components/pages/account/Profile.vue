<script>
import {
    MailIcon,
    BookmarkIcon,
    ItalicIcon,
    MapPinIcon,
    CheckIcon,
    AlertCircleIcon,
    AwardIcon,
    XIcon,
    AlertTriangleIcon
} from 'vue-feather-icons';

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormProfile from '../../form/FormProfile'
import FormPaymentMethods from '../../form/FormPaymentMethods'
import FormPremium from '../../form/Premium'
import FormAccountBank from '../../form/FormAccountBank'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            docFront: null,
            docBack: null,
            urlFront: null,
            urlBack: null,
            docStatus: { loading: false, doc: null, isExists: false},
            loading: {
                avatar: false
            },
            docAccount: { loading: true, doc: null}
        }
    },
    components: {
        LayoutAccount,
        FormProfile,
        FormPaymentMethods,

        // Components <-> Icons
        MailIcon,
        BookmarkIcon,
        ItalicIcon,
        MapPinIcon,
        CheckIcon,
        AlertCircleIcon,
        AwardIcon,
        XIcon,
        CheckIcon,
        AlertTriangleIcon,
        
        FormPremium,
        FormAccountBank
    },
    created(){
        // console.log('accountProfile', this.user)
        // setInterval(()=>{ 
        //     if (this.$store.state.user){
        //         this.getNotifications() 
        //     }
        // }, 3000)
    },
    computed: {
        user(){
            return this.$store.state.user;
        }
    },
    methods: {
        sendEmailConfirmation(){
            this.makeNotice('success', 'Email Enviado!', `Email de verificación de cuenta enviado al correo example@test.com`);
        },
        async showModalVerifDNI(){
            // llamar a la api, verificar si existe un document
            this.docStatus.loading = true;

            this.$bvModal.show('modalVerifDNI')

            const response = await this.callApi('get', `app/users/getInfoDNI`);

            const enStatus = (status) => {
                switch(status){
                    case 'pending': return 'Pendiente';
                    case 'reject': return 'Rechazado';
                    default:
                        return 'Not Status'
                }
            }

            const dateFormat = (date) => {
                let objDate = new Date(date)
                let d = objDate.getDate()
                let m = objDate.getMonth() + 1
                let y = objDate.getFullYear()

                return `${d < 10 ? ( '0' + d ) : d }-${m < 10 ? ( '0' + m) : m}-${y}`
            }

            if (response.status === 200){
                if (response.data.isExists){
                    this.docStatus = {
                        loading: false,
                        doc: {
                            createdAt: dateFormat(response.data.create_at),
                            status: enStatus(response.data.status),
                            isExists: response.data.isExists
                        }
                    }

                    console.log(this.docStatus)

                }else{
                    this.docStatus.loading = false;
                    this.docStatus.doc = false;
                    this.docStatus.isExists = false;
                }
            }
            console.log(response)
        },
        async sendDocumentDNI(){
            this.docStatus.loading = true;
            // llamar a la api subir DNI

            let formdata = new FormData();
            formdata.append('docFront', this.docFront)
            formdata.append('docBack', this.docBack)

            const response = await this.callApi('post', `app/users/uploadDNI`, formdata);

            if (response.status === 200){
                this.$bvModal.hide('modalVerifDNI')
                this.makeNotice('success', 'Envio Exitoso', 'Su documento ha sido enviado')
            }
            this.docStatus.loading = false;
            console.log(response)
            
        },
        async previewDoc(e, type){
            // console.log(e, type)
            const image = e.target.files[0]
            if (type === 'front'){
                this.urlFront = URL.createObjectURL(image);
            }else{
                this.urlBack = URL.createObjectURL(image);
            }
        }, 
        async getDocAccount(){
            this.docAccount.loading = true;
            const response = await this.callApi('get', `app/users/accountRetirement`);

            if (response.status === 200){
                this.docAccount.doc = response.data.account;
                console.log('docAccount', response)
            }

            this.docAccount.loading = false;
        },
        async updateAccountBank(newData){
            this.docAccount.loading = true;
            const response = await this.callApi('put', `app/users/accountRetirement`, newData);

            if (response.status === 200){
                this.docAccount.doc = response.data.account;
                // console.log('docAccount', response)
                this.makeNotice('success', 'Info', 'Se Actualizo tu cuenta bancaria exitosamente');
                this.$bvModal.hide('modalAccount');
            }

            this.docAccount.loading = false;
        },
        showModalAccount(){
            this.getDocAccount();
            this.$bvModal.show('modalAccount');
        },
        async showPaymentMethods(){
            // Listar metodos de pago, si no exite crear
            this.$bvModal.show('modalPaymentMethods');
        },
        async updateProfile(form){
            try{
                const response = await this.callApi('post', 'app/users/updateProfile', form)
                if (response.status === 200){
                    let user = response.data.user;
                    this.$store.commit('setUpdateUser', user)
                    
                    this.makeNotice('success', 'Info', 'Actualizacion Exitosa')
                    this.$bvModal.hide('modalEdit')
                    
                }
                console.log('responseSubmit', response)

            }catch(error){
                this.makeNotice('danger', 'Ocurrio un Error !', 'Se presento un problema al enviar tu solicitud')
                console.log('submitError', error)
            }
        }

    }
}
</script>


<template>
<div>
    <LayoutAccount :active="'Perfil'">
        <div class="col-lg-8 col-12 mt-4">
            <div class="border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-muted mb-0 mt-4">
                        Datos Básicos
                    </p>
                    <div>
                        <b-button pill size="sm" variant="outline-secondary" @click="$bvModal.show('modalEdit')">
                            Editar
                        </b-button>
                    </div>
                </div>
            </div>

            <div class="border-bottom pb-4">
                <div class="row">
                    <div class="col-md-6 col-sm-6 mt-4">
                        <div class="mt-4">
                            <div class="media align-items-center">
                                <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Email :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.email}}</a>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">DNI :</h6>
                                    <p class="text-muted">{{user.dni}}</p>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Telefono :</h6>
                                    <p class="text-muted">{{user.phone}}</p>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <award-icon class="fea icon-ex-md text-muted mr-3"></award-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Verificaciones :</h6>
                                    <div class="">
                                        <div class="pl-3">
                                            <!-- START Verificacion Button Email-->
                                            <!-- <div class="d-flex flex-row align-items-center">
                                                <p class="text-muted mr-2" style="margin-bottom:0">
                                                    Email
                                                </p>
                                                <b-button
                                                    variant="outline-warning"
                                                    size="sm"
                                                    style="padding:0"
                                                    v-b-tooltip.hover title="Tu email no esta verificado, presiona para verificar"
                                                    @click="sendEmailConfirmation"
                                                >
                                                    <AlertTriangleIcon v-if="!Number(user.email_check)" style="color:red" size="2x"/>
                                                </b-button>
                                                <CheckIcon v-if="Number(user.email_check)" style="color:green" size="1x"/>
                                            </div> -->
                                            <!-- END Verificacion Button Email-->

                                            <!-- START Verificacion Button Perfil-->
                                            <div class="d-flex flex-row align-items-center">
                                                <p class="text-muted mr-2" style="margin-bottom:0">
                                                    DNI
                                                </p>
                                                <b-button
                                                    variant="outline-warning"
                                                    size="sm"
                                                    style="padding:0"
                                                    v-b-tooltip.hover title="Tu Perfil no esta verificado, presiona para verificar"
                                                    @click="showModalVerifDNI"
                                                >
                                                    <AlertTriangleIcon v-if="!Number(user.profile_check)" style="color:red" size="2x"/>
                                                </b-button>
                                                <CheckIcon v-if="Number(user.profile_check)" style="color:green" size="1x"/>
                                            </div>
                                            <!-- END Verificacion Button Perfil-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-4">
                        <div class="mt-4">
                            <div class="media align-items-center">
                                <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Fecha de Nacimiento :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.birthdate}}</a>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <bookmark-icon class="fea icon-ex-md text-muted mr-3"></bookmark-icon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Genero :</h6>
                                     <a href="javascript:void(0)" class="text-muted">{{user.gender == 'man' ? 'Hombre' : 'Mujer'}}</a>
                                </div>
                            </div>
                            <div class="media align-items-center mt-3">
                                <MapPinIcon class="fea icon-ex-md text-muted mr-3"></MapPinIcon>
                                <div class="media-body">
                                    <h6 id="title" class="mb-0">Dirección :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.address}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-around ">
                    <div 
                        class="media align-items-center justify-content-center"
                    >
                        <div>
                            <b-button pill size="sm" variant="outline-secondary" @click="showPaymentMethods">
                                Metodo de Pago
                            </b-button>
                        </div>
                    </div>
                    <div 
                        v-if="user.userType === 'work'"
                        class="media align-items-center justify-content-center"
                    >
                        <div>
                            <b-button pill size="sm" variant="outline-secondary" @click="showModalAccount">
                                Ver Cuenta Bancaria
                            </b-button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center mt-2" v-if="$store.state.user.userType === 'work'">
                <b-button variant="secondary" @click="()=>{
                    $bvModal.show('modaPremium')
                }">
                    Hazte Premium
                </b-button>
            </div>
        </div>

        <!-- START Modal Verificacion DNI  -->
        <div>
            <b-modal id="modalVerifDNI" hide-footer title="Verificar DNI" size="lg">
                <div v-if="docStatus.loading">
                    ...cargando
                </div>
                <div v-else>
                    <div v-if="docStatus.isExists === false">
                        <div class="container" >
                            <div>
                                <p class="text-muted" style="font-size: 15px">
                                    Verifica tu identidad y obten la confianza a los usuario de escogerte.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-muted" > Instrucciones </h3>
                                <ul>
                                    <li class="text-muted" >Sube una foto frente de tu DNI</li>
                                    <li class="text-muted" >Sube una foto reverso de tu DNI</li>
                                    <li class="text-muted" >Las fotos deben ser legibles y nitidas</li>
                                </ul>
                            </div>
                        </div>

                        <div class="my-3">
                            <b-form-file
                                v-model="docFront"
                                :state="Boolean(docFront)"
                                placeholder="Carga el DNI Frente..."
                                drop-placeholder="Drop file here..."
                                @change="e => previewDoc(e, 'front')"
                            ></b-form-file>
                        </div>

                        <div class="container">
                            <div class="d-flex justify-content-center mb-4">
                                <div style="width: 80%" v-if="!docFront">
                                    <b-skeleton-img
                                        height="300px"
                                    />
                                </div>
                                <div v-else style="width: 80%">
                                    <img :src="urlFront" height="300px" width="100%" />
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <b-form-file
                                v-model="docBack"
                                :state="Boolean(docBack)"
                                placeholder="Carga el DNI Reverso..."
                                drop-placeholder="Drop file here..."
                                @change="e => previewDoc(e, 'back')"
                            ></b-form-file>
                        </div>

                        <div class="container">
                            <div class="d-flex justify-content-center mb-4">
                                <div style="width: 80%" v-if="!docBack">
                                    <b-skeleton-img
                                        height="300px"
                                    />
                                </div>
                                <div v-else style="width: 80%">
                                    <img :src="urlBack" height="300px" width="100%" />
                                </div>
                            </div>
                        </div>

                        <div class="" v-if="Boolean(docFront) && Boolean(docBack)">
                            <div class="d-flex justify-content-center">
                                <b-button pill variant="outline-secondary" @click="sendDocumentDNI">
                                    Enviar
                                </b-button>
                            </div>
                        </div>

                    </div>
                    <div v-else >
                        <div >
                            <div>
                                <h3 class="text-muted" > Información de tu Trámite </h3>
                                <div>
                                    <div>
                                        <p class="text-muted ml-2">
                                        <span class="font-weight-bold"> Fecha de creacion : </span>
                                        {{docStatus.doc.createdAt}}</p>
                                    </div>
                                    <div>
                                        <p class="text-muted ml-2"> <span class="font-weight-bold"> Estatus : </span>
                                            {{ docStatus.doc.status }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div v-if="docStatus.doc.status === 'Rechazado'">
                                 <b-button pill variant="outline-secondary" @click="()=> { this.docStatus.doc = null}">
                                    Re Enviar
                                </b-button>
                            </div>
                        </div>
                    </div>

                </div>
            </b-modal>
        </div>
        <!-- END Modal Verificacion DNI  -->

        <!-- START Modal Edit -->
        <div>
            <b-modal id="modalEdit" hide-footer title="Editar Perfil">
                <div>
                    <FormProfile
                        :user="user"
                        :submit="updateProfile"
                    />
                </div>
            </b-modal>
            <!-- END Modal Edit -->
            <b-modal id="modalAccount" hide-footer title="Cuenta Bancaria">
                <div>
                    <!-- <h4 class="text-center font-weight-bold"> Cuenta Bancaria </h4> -->
                    <div v-if="!docAccount.loading">
                        <FormAccountBank 
                            :doc="docAccount.doc"
                            :onCall="updateAccountBank"
                        />
                    </div>
                    <div v-else>
                        <div>
                            <b-spinner type="grow" label="Spinning"></b-spinner>
                        </div>
                    </div>
                </div>
            </b-modal>
            <!-- END Modal Edit -->

            <!-- START Modal Metodo de Pago -->
            <b-modal id="modalPaymentMethods" hide-footer title="Metodo de Pago">
                <FormPaymentMethods />
            </b-modal>
            <!-- END Modal Metodo de Pago -->

            <!-- START Modal Premium -->
            <b-modal 
                id="modaPremium"  
                hide-footer 
                title="Hazte Premium"
                size="lg" 
            >
                <FormPremium :onCall="updateAccountBank" />
            </b-modal>
            <!-- END Modal Premium -->
        </div>
    </LayoutAccount>
</div>
</template>
