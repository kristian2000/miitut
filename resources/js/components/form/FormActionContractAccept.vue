<script>
import {
    StarIcon,
} from 'vue-feather-icons';

import BtnDesp from '../btnDespliegue';
import CardStripe from '../CardStripe';

import moment from 'moment';
import FormPaymentMethods from './FormPaymentMethods';
import FormPaymentCalculation from './FormPaymentCalculation';

export default {
    props: [
        'categoryUser',
        'contract',
        'onSubmit',
        'edit',
        'typeForm',
        'rejectCall',
        'acceptCall',
        'finalizeCall',
        'qualityCall',
        'onClose',
        'payContractOccasional',
        'payContractHabitual',
        'renovarCall',
        'meditationCall',
        'loading'
    ],
    components: {
        BtnDesp,
        CardStripe,
        StarIcon,
        FormPaymentMethods,
        FormPaymentCalculation
    },
    data(){
        return {
            scoreStar: 1,
            Comment: '',
            infoPayment: { loading: false, doc: null},
        }
    },
    created(){
    },
    computed: {
        totalPrice(){
            return new Number(this.hours * this.categoryUser.price).toFixed(2);
        }
    },
    methods: {
        changeHandleScore(newScore){
            this.scoreStar = newScore;
        },
        proccessPay(result){
            this.contract.typeContract === 'habitual' ?
            this.payContractHabitual(result)
            :
            this.payContractOccasional(result)
        },
        dateFormatRenovar(date){
            console.log({date, f: new Date(date)})
            return moment(new Date(date))
                .add(1, 'month')
                .format('YYYY-MM-DD')
                .toString();

        },
        dateFormat(date){
            return moment(new Date(date))
                .format('YYYY-MM-DD')
                .toString();
        },
        dateIsMenor(dateA, dateB){
            let d1 = new Date(dateA).getTime();
            let d2 = new Date(dateB).getTime();

            return d1 < d2;
        },
        dateIsMenorNow(date){
            let d1 = new Date().getTime();
            let d2 = new Date(date).getTime();

            return d1 > d2;
        },
        async calculatePayment(){

            this.infoPayment.loading = true;
            
            let form = {
                price: this.contract.price,
                hours:  this.contract.hours,
                typeContract:  this.contract.type_contract,
                daysSelected:  this.contract.daysSelected,
                dateStart:  this.dateFormatRenovar(this.contract.date_start)
            }

            const response = await this.callApi('post', `/app/payment/calculate`, form);

            if (response.status === 200){
                this.infoPayment.doc = response.data;
                this.$bvModal.show('infoRenovatePayment');
            }

            this.infoPayment.loading = false;
            console.log('calculatePayment', response)

        },
    }
}
</script>

<template>
    <div class="" >
        <div class="row" v-if="contract">
            <!-- Btn Acciones -->

                <!-- Si el estado es pending
                    - Si eres empleado [accion -> aceptar, rechazar }
                    - Si eres empleador [accion -> cancelar]
                -->
                <div class="col-12" v-if="contract.status.name === 'pending'">
                    <div class=""
                        v-if="$store.state.user.userType === 'work'"
                    >
                        <div class="d-flex justify-content-center mt-4">
                            <div class="mr-2">
                                <b-button pill variant="outline-secondary" @click="acceptCall">
                                    Aceptar
                                </b-button>
                            </div>
                            <div>
                                <b-button pill variant="outline-secondary" @click="rejectCall">
                                    Rechazar
                                </b-button>
                            </div>
                        </div>
                    </div>

                    <div v-else class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center flex-column">
                            <div class="text-center">
                                <h3> Información </h3>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="text-muted" style="width: 80%;">
                                    El Contrato esta pendiente, de ser aceptado o rechazado por el usuario de la categoria
                                </p>
                            </div>
                        </div>
                        <!-- <b-button pill variant="outline-secondary" @click="validate">
                            Cancelar
                        </b-button> -->
                    </div>
                </div>

            <!-- Si esta rechazado [accion -> archivar, cerrar] -->
                <div class="col-12" v-if="contract.status.name === 'reject'">
                    <div class="">
                        <div class="d-flex justify-content-center mt-4">
                            <!-- <div class="mr-2">
                                <b-button pill variant="outline-secondary" @click="acceptCall">
                                    Archivar
                                </b-button>
                            </div> -->
                            <div>
                                <b-button pill variant="outline-secondary" @click="onClose">
                                    Cerrar
                                </b-button>
                            </div>
                        </div>
                    </div>

                </div>

            <!-- Si esta pendiente de pago [ empleado -> info, empleador -> pagar ] -->
                <div class="col-12" v-if="contract.status.name === 'pendingPayment'">
                    <div class=""
                        v-if="$store.state.user.userType === 'help'"
                    >
                        <div class="d-flex justify-content-center flex-column ">
                            <div class="d-flex justify-content-center flex-column border-bottom mb-2">
                                <div class="text-center">
                                    <h3> Información </h3>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="text-muted">
                                        Al realizar el pago, se continuara con el proceso
                                    </p>
                                </div>
                            </div>
                            <div class="text-center">
                                <div>
                                    <FormPaymentMethods>
                                        <b-button @click="proccessPay" >
                                            Continuar

                                            <b-spinner 
                                                v-if="loading"
                                                type="grow" 
                                                label="Spinning" 
                                                small
                                            />
                                        </b-button>
                                    </FormPaymentMethods>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <div class="d-flex justify-content-center flex-column">
                            <div class="text-center">
                                <h3> Información </h3>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="text-muted" style="width: 80%;">
                                    El Contrato esta pendiente de pago, cuando el empleador realice el pago se te notificara
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Si esta en proceso [ empleado -> finalizar, empleador -> finalizar ] -->
                <div class="col-12" 
                    v-if="contract.status.name === 'process'"
                    >
                    <div v-if="!(contract[`finalized_${$store.state.user.userType}`])">
                        <div class="d-flex justify-content-center flex-column">
                            <div class="text-center">
                                <h3> Información </h3>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="text-muted" style="width: 80%;">
                                    El Contrato esta en proceso, cuando se culmine los acuerdos dale click en finalizar y da tu opinión  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-center border mb-2" v-if="contract.type_contract === 'habitual'">
                            <div>
                                <p class="text-muted">
                                    Este contrato se puede renovar {{ dateFormatRenovar(contract.date_start) }}
                                </p>
                            </div>
                            <div 
                                v-if="contract.type_contract === 'habitual'" 
                                class="mb-2"
                            >
                                    <!-- :disabled="!(dateIsMenor( dateFormatRenovar(contract.date_start), Date()))" -->
                                    <!-- @click="renovarCall" -->
                                <b-button 
                                    pill 
                                    variant="outline-secondary" 
                                    size="sm"
                                    @click="calculatePayment"
                                >       
                                    Renovar
                                </b-button>
                            </div>
                        </div>
                        <div 
                            v-if="!(contract[`finalized_${$store.state.user.userType}`])"
                            class="d-flex justify-content-center"
                        >
                            <div class="d-flex justify-content-center">
                                <div>
                                    <b-button 
                                        pill 
                                        variant="outline-secondary" 
                                        @click="finalizeCall"
                                    >
                                        Finalizar
                                    </b-button>
                                </div>
                            </div>
                        </div>
                        <div v-else>
                            <div class="text-muted text-center" >
                                <div>
                                   Finalizaste el contrato, en espera de la contraparte
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Si esta en finalizar [ empleado -> calificar, empleador -> calificar ] -->
                <div 
                    class="col-12" 
                    v-if="contract.status.name === 'finalized' 
                    && ($store.state.user.userType === 'work' ? 
                        !contract.qualification_hired_id
                        :
                        !contract.qualification_employer_id)"
                >
                    <div>
                        <div class="d-flex justify-content-center flex-column">
                            <div class="">
                                <div class="text-center">
                                    <h3 style="font-size: 18px"> 
                                        Contrato Finalizado, Califica 
                                    </h3> 
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="m-1">
                                    <img 
                                        :src="$store.state.user.userType === 'help' ?
                                            avatarDefault(contract.category_user.user.avatar)
                                            :
                                            avatarDefault(contract.user.avatar)
                                        "  
                                        alt="" 
                                        style="cursor:pointer; width: 60px; height: 60px; border-radius: 50%"
                                    >
                                </div>
                                <div class="">
                                    <div class="text-muted">
                                        {{ $store.state.user.userType === 'help' ?
                                                contract.category_user.user.name
                                                :
                                                contract.user.name
                                        }}
                                    </div>
                                    <div class="">
                                        <div>
                                            <span
                                                class="m-1"
                                                v-for="(star, index) in [1, 2, 3, 4, 5]" :key="index"
                                                @click="changeHandleScore(star)"
                                            >
                                                <b-icon
                                                    :icon="(star) <= Number(scoreStar) ? 'star-fill' : 'star'"
                                                    variant="warning"
                                                    style="width: 20px; cursor: pointer"
                                                />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div >
                                    <b-form-input 
                                        v-model="comment" 
                                        placeholder="Escribe un comentario" 
                                    />
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <b-button 
                                    pill 
                                    variant="outline-secondary" 
                                    @click="qualityCall(scoreStar, comment)"
                                >
                                    Calificar
                                </b-button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Modal Payment Calculation -->
        <b-modal 
            id="infoRenovatePayment" 
            title="Informacion de Pago"
            hide-footer
        >
            <div v-if="!infoPayment.loading && infoPayment.doc">
                <FormPaymentCalculation 
                    :doc="infoPayment.doc"
                />
                <div class="d-flex justify-content-center mt-4">
                    <div v-if="!dateIsMenor( dateFormatRenovar(contract.date_start), Date())">
                        Este contrato se puede renovar despues del : {{ dateFormatRenovar(contract.date_start) }}
                    </div>
                    <div >
                        <b-button 
                            pill 
                            variant="outline-success" 
                            @click="renovarCall"
                        >       
                            Pagar Renovacion
                        </b-button>
                    </div>
                </div>
            </div>
        </b-modal>
    </div>
</template>

<style>
    .day-btn {
        border: 1px solid #3CB371;
        color: #3CB371;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
    }

    .day-btn-active {
        background:#3CB371;
        color: white;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
    }
</style>
