<script>
import {
    MapPinIcon,
    MoreVerticalIcon,
    PlayIcon,
    PauseIcon,
    PlusIcon,
    CheckIcon

} from 'vue-feather-icons';

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormContractAd from '../../form/FormContractAd';
import CardOffer from '../../Cards/CardOffer'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            docs: [],
            itemsToDisplay: [],
            category: '',
            price: '1',
            loading: false,
            currentAd: null,
            action: ''
        }
    },
    components: {
        CheckIcon,
        LayoutAccount,
        PlusIcon,
        FormContractAd,
        CardOffer
    },
    async created(){
        await this.getCategories();
        this.category = this.$store.state.categories[0]

        this.getOffersContract();
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
        displayItems(newDocs){
            this.itemsToDisplay = newDocs;
        },
        async getOffersContract(){
            const response = await this.callApi('get', `app/contracts/offers`);

            if (response.status === 200){
                this.docs = response.data.offers;
                this.loading = false;
            }
            console.log(response);
        },
        async sendRequest(){
            this.loading = true;
            const response = await this.callApi('post', `app/contracts/${this.currentAd.id}/requestOffer`);

            if (response.status === 200){
                this.$bvModal.hide('modalAddAd')
                this.action = '';
                this.makeNotice('success', 'Info', 'Solicitud enviada exitosamente');
            }
            console.log('sendRequest', response)
            this.loading = false;
        },
        
        async getRequest(){
            this.loading = true;

            const response = await this.callApi('get', `app/contracts/${this.currentAd.id}/requestSendOffer`);

            if (response.status === 200){
                // this.$bvModal.hide('modalAddAd')
                this.currentAd = {
                    ...this.currentAd,
                    request: response.data ? response.data.exists : false
                }

                // console.log('requestOffer', response.data)
            }

            this.loading = false;
        },
        async showContract(contract){
            // console.log('currentContract', contract)

            this.currentAd = { ...contract, request: false };

            await this.getRequest();

            this.action = '';
            this.$bvModal.show('modalAddAd')
        },
    }
}
</script>

<template>
    <LayoutAccount :active="'Ofertas'">
        <div class="col-lg-8 col-12 mt-4">
            <div v-if="!docs.length">
                <div class="text-center text-muted">
                    Sin Ofertas
                </div>
            </div>

<!-- style="height: 450px; overflow:scroll" -->
            <div class="border-bottom">
                 <div class="row" v-for="doc in itemsToDisplay" :key="doc.id">
                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <CardOffer 
                            type="offer"
                            :doc="doc"
                            :onCall="showContract"
                        />
                    </div>
                </div>
                <div 
                    v-if="docs.length"
                    class="col-12 d-flex justify-content-center mt-3"
                    >
                   <pagination-custom 
                        :items="docs"
                        :perPage="2"
                        :handleChange="displayItems"
                   />
                </div>
                
                <!-- <div class="row" v-for="doc in docs" :key="doc.id">
                    <div class="col-12 border shadow caja">

                        <div class="border p-3">
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <h2 class="font-weight-bold">
                                        Oferta
                                    </h2>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="d-flex justify-content-around align-items-center">
                                        <div class="">
                                            <div class="text-muted">
                                                <span class="font-weight-bold"> Tipo Contrato: </span>
                                                {{ doc.type_contract === "occasional" ? 'Ocacional' : 'Habitual' }}
                                            </div>
                                            <div class="text-muted">
                                                <span class="font-weight-bold"> Categoria: </span>
                                                {{ doc.category.label }}
                                            </div>
                                            <div class="text-muted">
                                                <span class="font-weight-bold"> Creado: </span>
                                                {{ new Date(doc.created_at).toISOString().slice(0, 10) }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex align-items-center ">
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
                                    </div>

                                </div>

                            </div>

                            <div class="d-flex justify-content-center mt-2">
                                <div class="d-flex flew-column">
                                    <div 
                                        class="d-flex justify-content-center" 
                                        @click="showContract(doc)"
                                    >
                                        <b-button class="text-white">Ver más</b-button>
                                    </div>
                                </div>
                            </div>

                            </div>
                    </div>
                </div> -->
 
            </div>
            <!-- Start Btn Agregar -->
            <!-- <div class="col-12">
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
            </div> -->
            <!-- End Btn Agregar -->
        


            <!-- Start Modal Ad -->
            <div >
                <b-modal
                    id="modalAddAd"
                    title="Anuncio de contrato"
                    scrollable
                    hide-footer
                    size="lg"
                >
                    <div v-if="!loading && this.currentAd">
                            <!-- :onSubmit="addAdContract" -->
                        <FormContractAd
                            :contract="currentAd"
                            :edit="false"
                            :typeForm="action"
                            type="ad"
                        />

                        <div 
                            class="d-flex justify-content-center"
                        >
                            <div
                                class="mr-2"
                                @click="sendRequest"
                                v-if="!currentAd.request"
                            >
                                <b-button variant="danger">
                                    Enviar Solicitud
                                </b-button>
                            </div>
                            <div v-if="currentAd.request">
                                <div class="text-success my-2">
                                    Ya has enviado una Solicitud !
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <div 
                            class="d-flex justify-content-center align-items-center"
                            style="min-height: 600px"
                        >
                            <div>
                                <b-spinner 
                                    type="grow" 
                                    label="Spinning" 
                                />
                            </div>
                        </div>
                    </div>
                </b-modal>
            </div>
            <!-- End Modal Ad -->
        </div>
    </LayoutAccount>
</template>
