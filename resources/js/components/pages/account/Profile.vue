<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GithubIcon,
    YoutubeIcon,
    GitlabIcon,
    MailIcon,
    UserPlusIcon,
    UsersIcon,
    MessageCircleIcon,
    BellIcon,
    ToolIcon,
    PhoneIcon,
    BookmarkIcon,
    ItalicIcon,
    GlobeIcon,
    GiftIcon,
    MapPinIcon,
    CheckIcon,
    AlertCircleIcon,
    AwardIcon,
    XIcon,
    AlertTriangleIcon
} from 'vue-feather-icons';

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormProfile from '../../form/FormProfile'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            user: this.$store.state.user,
            document: null,
            url: null
        }
    },
    created(){
        console.log('accountProfile', this.user)
    },
    components: {
        LayoutAccount,
        FormProfile,

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
        AlertTriangleIcon
    },
    methods: {
        sendEmailConfirmation(){
            this.makeNotice('success', 'Email Enviado!', `Email de verificación de cuenta enviado al correo example@test.com`);
        },
        showModalVerifDNI(){
            this.$bvModal.show('modalVerifDNI')
        },
        sendDocumentDNI(){
            this.$bvModal.hide('modalVerifDNI')
        },
        async onFileChange(e){
            const image = e.target.files[0]
            this.url = URL.createObjectURL(image);
        },
    }
}
</script>


<template>
<div>
    <LayoutAccount :active="'Perfil'">
        <div class="col-lg-8 col-12">
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
                                            <div class="d-flex flex-row align-items-center">
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
                                            </div>
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
                                    <h6 id="title" class="mb-0">Address :</h6>
                                    <a href="javascript:void(0)" class="text-muted">{{user.address}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START Modal Verificacion DNI  -->
        <div>
            <b-modal id="modalVerifDNI" hide-footer title="Verificar DNI" size="lg">
                <div class="container">
                    <div>
                        <p class="text-muted" style="font-size: 15px">
                            Verifica tu identidad y obten la confianza a los usuario de escogerte.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-muted" > Instrucciones </h3>
                        <ul>
                            <li class="text-muted" >Sube una foto legible y nitida de tu documento de identificacion</li>
                        </ul>
                    </div>
                </div>

                <div class="my-4">
                    <b-form-file
                        v-model="document"
                        :state="Boolean(document)"
                        placeholder="Choose a file or drop it here..."
                        drop-placeholder="Drop file here..."
                        @change="onFileChange"
                    ></b-form-file>
                </div>

                <div class="container">
                    <div class="d-flex justify-content-center mb-4">
                        <div style="width: 80%" v-if="!document">
                            <b-skeleton-img
                                height="300px"
                            />
                        </div>
                        <div v-else style="width: 80%">
                            <img :src="url" height="300px" width="100%" />
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="d-flex justify-content-center">
                        <b-button pill variant="outline-secondary" @click="sendDocumentDNI">
                            Enviar
                        </b-button>
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
                        title="Actualizar Tu Perfil!"
                        :user="user"
                    />
                </div>
            </b-modal>
        </div>
        <!-- END Modal Edit -->
    </LayoutAccount>
</div>
</template>
