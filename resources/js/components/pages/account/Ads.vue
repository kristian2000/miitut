<script>
import {
    MapPinIcon,
    MoreVerticalIcon,
    PlayIcon,
    PauseIcon,
    PlusIcon,
    BellIcon,
    ClipboardIcon
} from 'vue-feather-icons';

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormContractAd from '../../form/FormContractAd';

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            docs: [],
            loading: false,
            currentAd: null,
            action: ''
        }
    },
    components: {
        LayoutAccount,
        PlusIcon,
        FormContractAd,
        BellIcon,
        ClipboardIcon
    },
    async created(){
        await this.getCategories();
        this.category = this.$store.state.categories[0]

        this.getAdsContract();
    },
    computed: {
        categories(){
            return this.$store.state.categories
                .map( category => ({
                    value: category,
                    text: category.label,
                }));
        }
    },
    methods: {
        async getAdsContract(){
            const response = await this.callApi('get', `app/contracts/ads`);

            if (response.status === 200){
                this.docs = response.data;
                this.loading = false;
            }
            console.log(response);
        },
        async addAdContract(form){

            const response = await this.callApi('post', `app/contracts/ads`, form);

            if (response.status === 200){
                this.docs = [response.data.ad, ...this.docs];
                this.$bvModal.hide('modalAddAd')
                this.action = '';
            }
            console.log('addAdContract', response)
        },
        showContract(contract){
            console.log('currentContract', contract)
            this.currentAd = contract;
            this.action = '';
            this.$bvModal.show('modalAddAd')
        },
        async destroyAd(){
            this.loading = true;
            const response = await this.callApi('delete', `app/contracts/${this.currentAd.id}`);

            if (response.status === 200){
                this.docs = this.docs.filter(d => d.id != this.currentAd.id);
                this.$bvModal.hide('modalAddAd')
                this.action = '';
                this.currentAd = null;
                this.loading = false;
            }
            
        },
        showRequests(contract){
            this.currentAd = contract;
            this.$bvModal.show('modalRequests')
        },
        async acceptRequest(doc){
            this.loading = true;
            console.log('acceptRequest', { currentAd: this.currentAd, doc})

            const response = await this.callApi('post', `app/contracts/${this.currentAd.id}/acceptRequest/${doc.id}`);

            console.log(response)
            if (response.status === 200){
                this.docs = this.docs.filter(d => d.id != this.currentAd.id);
                this.$bvModal.hide('modalRequests')
                this.$bvModal.hide('modalAddAd')
                this.action = '';
                this.currentAd = null;
                this.loading = false;

                this.makeNotice('success', 'info', 'Solicitud Aceptada, dirigete a los contratos y revisalo')
            }

            this.loading = false;
        }
    }
}
</script>

<template>
    <LayoutAccount :active="'Anuncios'">
        <div class="col-lg-8 col-12 mt-4">
            <div v-if="!docs.length">
                <div class="text-center text-muted">
                    Sin Anuncios
                </div>
            </div>

            <div class="border-bottom" style="height: 450px; overflow:scroll">
                
                <div class="row" v-for="ad in docs" :key="ad.id">
                    <div class="col-12 border shadow caja">

                        <div class="border p-3">
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <h2 class="font-weight-bold">
                                        Anuncio 
                                        <!-- ({{ ad.status.label }}) -->
                                        <span 
                                            class="btn-icon"
                                            v-if="ad"
                                            @click="showRequests(ad)"
                                        >
                                            <span>
                                                <ClipboardIcon />
                                                <span style="position:relative">
                                                    <b-badge 
                                                        variant="dark"
                                                        style="position: absolute; right: -2px; font-size: 10px;"
                                                    >
                                                        {{ ad.requests.length }}
                                                    </b-badge>
                                                </span>
                                            </span>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="">
                                        <div class="text-muted">
                                            <span class="font-weight-bold"> Tipo Contrato: </span>
                                            {{ ad.type_contract === "occasional" ? 'Ocacional' : 'Habitual' }}
                                        </div>
                                        <div class="text-muted">
                                            <span class="font-weight-bold"> Categoria: </span>
                                            {{ ad.category.label }}
                                        </div>
                                        <div class="text-muted">
                                            <span class="font-weight-bold"> Creado: </span>
                                            {{ new Date(ad.created_at).toISOString().slice(0, 10) }}
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="d-flex justify-content-center mt-2">
                            <div class="d-flex flew-column">
                                <!-- <div
                                    class="mr-2"
                                >
                                    <b-button variant="danger">
                                        Borrar
                                    </b-button>
                                </div> -->
                                <div 
                                    class="d-flex justify-content-center" 
                                    @click="showContract(ad)"
                                >
                                    <b-button class="text-white">Ver más</b-button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
            <!-- Start Btn Agregar -->
            <div class="col-12">
                <div class="d-flex justify-content-center mt-4">
                    <div>
                        <b-button
                            v-b-tooltip.hover
                            title="Click para crear un anuncio"
                            variant="outline-success"
                            class="btn-add"
                            hide-footer
                            @click="()=>{ 
                                this.currentAd = null;
                                this.$bvModal.show('modalAddAd');
                                this.action = 'create';
                            }"
                        >
                            <PlusIcon
                                style="cursor: pointer"
                            />
                        </b-button>
                    </div>
                </div>
            </div>
            <!-- End Btn Agregar -->

            <!-- Start Modal Ad -->
            <div >
                <b-modal
                    id="modalAddAd"
                    title="Anuncio del Servicio Requerido"
                    scrollable
                    hide-footer
                    size="lg"
                >
                        <!-- :onSubmit="addAdContract"
                        :contract="currentAd"
                        :edit="false"
                        :typeForm="action" -->
                    <FormContractAd
                        :onSubmit="addAdContract"
                        :contract="currentAd"
                        :action="action"

                    />
                    <div 
                        class="d-flex justify-content-center"
                        v-if="action !== 'create'"
                    >
                        <div
                            class="mr-2"
                        >
                            <b-button 
                                variant="danger"
                                @click="destroyAd"
                            >
                                Borrar
                            </b-button>
                        </div>
                    </div>
                </b-modal>
            </div>
            <!-- End Modal Ad -->

            <!-- Start Modal Requests -->
            <div>
                <b-modal
                    id="modalRequests"
                    title="Ver Solicitudes"
                    scrollable
                    hide-footer
                >
                    <div v-if="currentAd">
                        <div 
                            v-for="(doc, index) in currentAd.requests" 
                            :key="index"
                        >
                            <div class="d-flex justify-content-center border">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <div>
                                            <img 
                                                :src="doc.user.avatar"  
                                                alt="" 
                                                width="80px"
                                                style="cursor:pointer; width: 60px; height: 60px; border-radius: 50%"
                                            >
                                        </div>
                                        <div class="">
                                            <div class="text-muted">
                                                {{ doc.user.name }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div>
                                            <b-button 
                                                pill
                                                size="sm"
                                                @click="acceptRequest(doc)"
                                            >
                                                Aceptar
                                            </b-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="!currentAd.requests.length">
                            <div class="text-center">
                                <div>
                                    No Hay Solicitudes
                                </div>
                            </div>
                        </div>
                    </div>
                </b-modal>
            </div>
            <!-- End Modal Request -->
        </div>
    </LayoutAccount>
</template>

<style>

    .btn-icon {
        cursor: pointer;
    }

</style>
