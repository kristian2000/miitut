<script>
import LayoutAdmin from '../../../layouts/LayoutAdmin'
import { 
    MoreVerticalIcon,
    Edit3Icon,
    Trash2Icon
 } from 'vue-feather-icons'

export default {
    data(){
        return {
            docs: [],
            fields: [
                { key: 'created_at', label: 'Fecha'},
                { key: 'typePayment', label: 'Tipo' },
                { key: 'status', label: 'Estado' },
                { key: 'amount', label: 'Monto' },
                { key: 'typeContract', label: 'Tipo Contrato'},
                { key: 'more', label: 'info'},
            ],
            loading: false,
            currentDoc: null,
            date: { valid: false}
        }
    },
    created(){
        this.getContracts();
    },
    components: {
        LayoutAdmin,
        MoreVerticalIcon,
        Edit3Icon,
        Trash2Icon
    },
    methods: {
        async getContracts(){
            this.loading = true;
            const response = await this.callApi('get', `app/admin/paymentsContract`);
            console.log('paymentsContract', response.data)

            if (response.status === 200){
                this.docs = response.data.payments;
                this.loading = false; 
            }
        },
        info(doc, index, button) {
            console.log(doc)
            this.currentDoc = doc;
            this.$bvModal.show('modalInfo')
        },
        onContext(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.date.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        async onCallFinalize(){
            this.loading = true;

            const response = await this.callApi('get', `app/admin/paymentsContractFinalize/${this.currentDoc.id}`);
            console.log('paymentsContract', response.data)
            let newPayment = response.data.payment;

            if (response.status === 200){
                this.docs = this.docs.map(doc => doc.id !== newPayment.id ?
                    doc : newPayment
                )    
            }
            this.loading = false; 
        }
    }
}
</script>

<template>
    <LayoutAdmin active="Pagos de Contrato">
        <div class="col-12 col-lg-8" v-if="!loading">
            <div class="text-center">
                <div class="font-weight-bold mb-2">
                    Lista de Pago pendiente por liberacion
                </div>
                <div>
                   <b-table
                        responsive
                        striped 
                        hover 
                        outlined
                        small
                        :items="docs"
                        :fields="fields"
                        style="max-height: 350px"
                          
                    >
                        <template #cell(created_at)="data">
                            <div>
                                {{ dateFormat( data.item.created_at) }}
                            </div>
                        </template>
                        <template #cell(typePayment)="data">
                            <div>
                                {{ data.item.type_payment }}
                            </div>
                        </template>
                        <template #cell(status)="data">
                            <div>
                                {{ data.item.status.label }}
                            </div>
                        </template>
                        <template #cell(amount)="data">
                            <div>
                                {{ data.item.amount }}
                            </div>
                        </template>
                        <template #cell(typeContract)="data">
                            <div>
                                {{ data.item.contract.type_contract }}
                            </div>
                        </template>
                        <template #cell(more)="data">
                            <div 
                                class="text-center btn-more"
                                @click="info(data.item, data.index, $event.target)" 
                                
                            >
                                <MoreVerticalIcon 
                                    size="1x"
                                />
                            </div>
                        </template>
                    </b-table>
                </div>
            </div>
        <!-- Modal Info Start -->
        <b-modal id="modalInfo" hide-footer title="Informacion">
            <div v-if="currentDoc">
                <div class="border-bottom">
                    <div class="border-bottom font-weight-bold text-center"> 
                        Informacion
                    </div>
                    <div class="">
                        <label> Estatus: </label>
                        <span> {{ currentDoc.contract.status.label }} </span>
                    </div>
                    <div class="mt-2">
                        <label> Fecha Inicial: </label>
                        <span> {{ currentDoc.contract.date_start }} </span>
                    </div>
                    <div class="">
                        <label> Tipo de Contrato: </label>
                        <span> {{ currentDoc.contract.type_contract }} </span>
                    </div>
                    <div class="">
                        <label> Monto cancelado: </label>
                        <span> {{ currentDoc.amount }} </span>
                    </div>
                    <div class="">
                        <label> Categoria: </label>
                        <span> {{ currentDoc.contract.category_user.category.label }} </span>
                    </div>
                </div>
                <div>
                    <div class="border-bottom font-weight-bold text-center"> 
                        Usuarios Involucrados
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-6 border p-2">
                                <div class="font-weight-bold">
                                    Usuario Empleador
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <img
                                        :src="currentDoc.user.avatar ? currentDoc.user.avatar : 'images/avatarDefault.jpg'"
                                        class=" item-avatar shadow d-block"
                                        width="80px"
                                        height="80px"
                                        alt=""
                                    >
                                    <div>
                                        {{ currentDoc.user.name }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 border p-2">
                                <div class="font-weight-bold">
                                    Usuario Empleado
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <img
                                        :src="currentDoc.contract.category_user.user.avatar ?
                                            currentDoc.contract.category_user.user.avatar 
                                            : 
                                            'images/avatarDefault.jpg'"
                                        class=" item-avatar shadow d-block"
                                        width="80px"
                                        height="80px"
                                        alt=""
                                    >
                                    <div>
                                        {{ currentDoc.contract.category_user.user.name }}
                                    </div>                                  
                                </div>
                            </div>

                        </div>

                        <div class="">
                            <div class="mt-2">
                                <div class="font-weight-bold text-center border-bottom">
                                    Datos de Retiro:
                                </div>
                                <div>
                                    <span class="font-weight-bold">
                                        Nombre del Beneficiario
                                    </span>
                                    <span>
                                        {{ currentDoc.contract.category_user.user.account.nameOfBeneficiary }}
                                    </span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">
                                        Code
                                    </span>
                                    <span>
                                        {{ currentDoc.contract.category_user.user.account.code }}
                                    </span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">
                                        Numero de Cuenta
                                    </span>
                                    <span>
                                        {{ currentDoc.contract.category_user.user.account.ccc }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div 
                        class="d-flex justify-content-center mt-2"
                        v-if="currentDoc.status.label !== 'Finalizado'"
                    >
                        <b-button pill size="sm" @click="onCallFinalize">
                            Finalizar
                        </b-button>
                    </div>
                            
                </div>
            </div>
        </b-modal>
        <!-- Modal Info End -->
        </div>
        <div v-else class="col-12 col-lg-8">
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <b-spinner 
                        type="grow" 
                        label="Spinning" 
                    />
                </div>

            </div>
        </div>

    </LayoutAdmin>
</template>

<style>
    .size-min-field {
        width: 100px;
    }

    .btn-checkbox {
        width: 100px;
    }

    .btn-more {
        cursor: pointer;
        border-radius: 15px;

    }
    .btn-more:hover {
        background: #ddd;
    }

    .item-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 3px solid #eee;
    }
</style>