<script>

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormContract from '../../form/FormContract';
import FormActionContractAccept from '../../form/FormActionContractAccept';

import CardStripe from '../../CardStripe';
import FormPaymentMethods from '../../form/FormPaymentMethods'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            contracts: [],
            currentContract: null,
            loading: false,
            itemsToDisplay: []
        }
    },
    components: {
        LayoutAccount,
        FormContract,
        CardStripe,
        FormActionContractAccept,
        FormPaymentMethods
    },
    async created(){
        const response = await this.callApi('get', `app/contracts`);
        console.log('contracts', response)
        if (response.status === 200){
            this.contracts = response.data;
        }
    },
    methods: {
        displayItems(newDocs){
            this.itemsToDisplay = newDocs;
        },
        showContract(contract){
            console.log('currentContract', contract)
            this.currentContract = contract;
            this.$bvModal.show('modalContract')
        },
        async rejectContract(){
           const response = await this.callApi('get', `app/contracts/rejectContract/${this.currentContract.id}`);
            console.log('rejectContract', response)
            if (response.status === 200){
                let newContract = response.data.contract;
                this.contracts = this.contracts.map( contract => contract.id !== newContract.id ?
                    contract
                    :
                    newContract
                )
                this.currentContract = null;
                this.$bvModal.hide('modalContract')
                this.makeNotice('success', 'Info', 'El rechazo del contrato ha sido enviado');
            }
        },
        async acceptContract(){
           const response = await this.callApi('get', `app/contracts/acceptContract/${this.currentContract.id}`);
            console.log('acceptContract', response)
            if (response.status === 200){
                let newContract = response.data.contract;
                this.contracts = this.contracts.map( contract => contract.id !== newContract.id ?
                    contract
                    :
                    newContract
                )
                this.currentContract = null;
                this.$bvModal.hide('modalContract')
                this.makeNotice('success', 'Info', 'La aceptacion del contrato ha sido enviado');
            }
        },
        async finalizeContract(){
            const response = await this.callApi('post', `app/contracts/finalize/${this.currentContract.id}`);
            console.log('finalizeContract', response)
            if (response.status === 200){
                let newContract = response.data.contract;
                this.contracts = this.contracts.map( contract => contract.id !== newContract.id ?
                    contract
                    :
                    newContract
                )
                this.currentContract = newContract;
                // this.$bvModal.hide('modalContract')
                this.makeNotice('success', 'Info', 'Contrato Finalizado');
            }
        },
        async qualityContract(score, comment){
            let form = {
                score,
                comment
            }
            const response = await this.callApi('post', `app/contracts/qualify/${this.currentContract.id}`, form);
            console.log('calificacionContract', response)

            if (response.status === 200){
                let newContract = response.data.contract;
                this.contracts = this.contracts.map( contract => contract.id !== newContract.id ?
                    contract
                    :
                    newContract
                )
                this.currentContract = null;
                this.$bvModal.hide('modalContract')
                this.makeNotice('success', 'Info', 'Se ha enviado tu calificacion');
            }
        },
        async payContract(result, info){
            if (this.loading){
                return ;
            }
            // Contrato Ocasional el pago es directo
            let form = {
                token: result,
                contract: this.currentContract.id
            }

            if (info === 'renovar'){
                form['renovation'] = true;
            }

            this.loading = true;
            const response = await this.callApi('post', `/app/payment/contract/${this.currentContract.type_contract}`, form);
            console.log('responesApi', response)

            if (response.status === 200){
                let newContract = response.data.contract;
                this.contracts = this.contracts.map( contract => contract.id !== newContract.id ?
                    contract
                    :
                    newContract
                )
                this.currentContract = null;

                this.$bvModal.hide('modalContract')
                this.$bvModal.hide('modalRenovarContract')
                this.makeNotice('success', 'Felicitaciones', 'Pago efectuado exitosamente!');

            }else{
                this.makeNotice('danger', 'Oops Ocurrio un error', 
                    response.message ? 
                        response.message : 'surgio un problema!'
                );
            }

            this.loading = false;
        },
        // async meditation(){
        //     const response = await this.callApi('post', `app/contracts/meditation/${this.currentContract.id}`);
        //     console.log('meditationContract', response)
        //     if (response.status === 200){
        //         let newContract = response.data.contract;
        //         this.contracts = this.contracts.map( contract => contract.id !== newContract.id ?
        //             contract
        //             :
        //             newContract
        //         )
        //         this.currentContract = null;
        //         this.$bvModal.hide('modalContract')
        //         this.makeNotice('success', 'Info', 'Contrato en mediacion, espere a que soporte revise su caso');
        //     }
        // },
        goCategoryUser(contract){
            // event.stopPropagation()
            if (this.$store.state.user.userType === 'help'){
                this.$router.push({path: `/perfil-publico/${contract.category_user_id}`})
            }
            // console.log({contract})
        }

    }
}
</script>

<template>
    <LayoutAccount :active="'Contratos'">
        <div class="col-lg-8 col-12 mt-4">
            <div v-if="!contracts.length">
                <div class="text-center text-muted">
                    Sin Contratos
                </div>
            </div>

            <div class="border-bottom pb-4">
                <div class="row contracts-container" 
                    v-for="contract in itemsToDisplay" :key="contract.id"
                >
                    <div class="col-12 border shadow caja mb-4">

                        <div class="border p-3">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img 
                                            :src="'/assets/icon_services/' + contract.category_user.category.name + '.svg'"  
                                            alt="" 
                                            width="80px"
                                            style="cursor:pointer; width: 80px; height: 80px; border-radius: 50%"
                                        >
                                    </div>
                                </div>
                                <div>
                                    <h2 class="font-weight-bold">
                                        Contrato ({{ contract.status.label }})
                                    </h2>
                                </div>
                            </div>
                            <div >
                                <div class="row" style="min-height: 100px">
                                    <div class="col-md-8 col-12 d-flex justify-content-center">
                                        <div>
                                            <div class="text-muted">
                                                <span class="font-weight-bold"> Tipo Contrato: </span>
                                                {{ contract.type_contract === "occasional" ? 'Ocacional' : 'Habitual' }}
                                            </div>
                                            <div class="text-muted">
                                                <span class="font-weight-bold"> Categoria: </span>
                                                {{ contract.category_user.category.label }}
                                            </div>
                                            <div class="text-muted">
                                                <span class="font-weight-bold"> Creado: </span>
                                                {{ new Date(contract.created_at).toISOString().slice(0, 10) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12" style="min-height: 90px">
                                        <div class="d-flex justify-content-center" style="position:relative;">
                                            <div 
                                                :style="`position:absolute; z-index:1; 
                                                    ${$store.state.user.userType === 'help' ?
                                                        'cursor: pointer' : ''
                                                    }`" 
                                                @click="(event)=> { 
                                                    event.stopPropagation(); 
                                                    goCategoryUser(contract);
                                                }"
                                            >
                                                <div>
                                                    <span class="text-muted font-weight-bold border-bottom">
                                                    Usuario {{ 
                                                        $store.state.user.userType === 'help' ?
                                                                'Contratado'
                                                                :
                                                                "Empleador"
                                                        }}:
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center ">
                                                    <div>
                                                        <img 
                                                            :src="$store.state.user.userType === 'help' ?
                                                                avatarDefault(contract.category_user.user.avatar)
                                                                :
                                                                avatarDefault(contract.user.avatar)
                                                            "  
                                                            alt="" 
                                                            width="80px"
                                                            style="width: 80px; height: 80px; border-radius: 50%"
                                                        >
                                                    </div>
                                                    <div class="">
                                                        <div class="text-muted ml-2">
                                                            {{ $store.state.user.userType === 'help' ?
                                                                    contract.category_user.user.name
                                                                    :
                                                                    contract.user.name
                                                            }}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div>
                            <div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-2">      
                            <b-button 
                                pill 
                                id="btn-modify-2" 
                                class="text-white"
                                @click="showContract(contract)"
                                variant="primary"
                                >
                                ver más
                            </b-button>
                        </div>
                    </div>

                </div>
                <div 
                    v-if="contracts.length"
                    class="row d-flex justify-content-center"
                >
                   <pagination-custom 
                        :items="contracts"
                        :perPage="2"
                        :handleChange="displayItems"
                   />
                </div>

            </div>
        </div>
        <!-- Start Modal Contrato -->
        <div >
            <b-modal
                id="modalContract"
                title="Detalles del Contrato"
                scrollable
                hide-footer
                size="lg"

            >
                <FormContract
                    :contract="currentContract"
                    :onSubmit="()=>{}"
                    :onClose="()=>{this.$bvModal.hide('modalContract')}"
                    :acceptCall="this.acceptContract"
                    :rejectCall="this.rejectContract"
                    :finalizeCall="this.finalizeContract"
                    :qualityCall="this.qualityContract"
                    :renovarCall="()=> { this.$bvModal.show('modalRenovarContract') }"
                    :payContractOccasional="this.payContract"
                    :payContractHabitual="this.payContract"
                    :edit="true"
                />

                <FormActionContractAccept 
                    :contract="currentContract"
                    :acceptCall="this.acceptContract"
                    :rejectCall="this.rejectContract"
                    :finalizeCall="this.finalizeContract"
                    :qualityCall="this.qualityContract"
                    :renovarCall="()=> { this.$bvModal.show('modalRenovarContract') }"
                    :onClose="()=>{this.$bvModal.hide('modalContract') }"
                    :payContractOccasional="this.payContract"
                    :payContractHabitual="this.payContract"
                    :loading="this.loading"
                />
                    <!-- :meditationCall="this.meditation" -->
            </b-modal>
        </div>
        <!-- End Modal Contrato -->

        <!-- Start Modal Renovar -->
        <div>
            <b-modal
                id="modalRenovarContract"
                title="Renovar Contrato"
                hide-footer
            >
                <div>
                    <FormPaymentMethods>
                        <div>
                            <div>
                                <b-button 
                                    pill 
                                    @click="(result)=> {this.payContract(result, 'renovar')}"
                                >
                                    Siguiente
                                </b-button>
                            </div>
                        </div>
                    </FormPaymentMethods>
                    <!-- <CardStripe
                        :stripeTokenHandler="(result)=> {this.payContract(result, 'renovar')}"
                    /> -->
                </div>
            </b-modal>
        </div>
        <!-- End Modal Renovar -->

    </LayoutAccount>
</template>

<style scope>
    .contracts-container {
        max-height: 650px; 
        overflow: auto;
    }

    @media (min-width: 768px) {
        .categorias-container {
            max-height: 450px; 
            overflow: auto;
        }
    }
</style>

