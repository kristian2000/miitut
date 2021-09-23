<script>
import {
    StarIcon,
} from 'vue-feather-icons';

import BtnDesp from '../btnDespliegue';
import CardStripe from '../CardStripe';

import moment from 'moment';
import FormPaymentCalculation from './FormPaymentCalculation';

export default {
    props: [
        'categoryUser',
        'contract',
        'onSubmit',
        'edit',
        'action',
        'rejectCall',
        'acceptCall',
        'finalizeCall',
        'qualityCall',
        'onClose',
        'payContractOccasional',
        'payContractHabitual',
        'renovarCall'
    ],
    components: {
        BtnDesp,
        CardStripe,
        StarIcon,
        FormPaymentCalculation
    },
    data(){
        return {
            //contract
            dateInitial: {
                date: new Date().toJSON().slice(0,10).replace(/-/g,'-'),
                valid: true
            },
            dateEnd: {
                date: new Date(new Date().setDate(new Date().getDate() + 1))
                    .toJSON().slice(0,10).replace(/-/g,'-'),
                valid: true
            },
            hours: 6,
            message: '',
            address: '',
            typeContract: 'occasional',
            startTime: '00:00:00',
            days: [
                { key: 'LUN', value: 1},
                { key: 'MAR', value: 2},
                { key: 'MIE', value: 3},
                { key: 'JUE', value: 4},
                { key: 'VIE', value: 5},
                { key: 'SAB', value: 6},
                { key: 'DOM', value: 7},
            ],
            daysSelected: [],
            disabled: true,
            infoShow: true,
            scoreStar: 1,
            comment: '',
            loadingPayment: false,
            category: '',
            categories: [],
            price: 10,
            infoPayment: { loading: false, doc: null},
            loading: false
        }
    },
    async created(){
        await this.refreshContract();
    },
    computed: {
        totalPrice(){
            return new Number(this.hours * this.categoryUser.price).toFixed(2);
        }
    },
    methods: {
        async refreshContract(){
            // Si el usuario es empleador se crea el contrato
            // Si no solo puede observarlo
            if (this.contract){
                // Datos de un contrato
                this.dateInitial = {
                    date: this.contract.date_start,
                    valid: true
                }
                this.dateEnd = {
                    date: this.contract.date_end,
                    valid: true
                }
                this.hours = this.contract.hours
                this.message = this.contract.message
                this.address = this.contract.address
                this.typeContract = this.contract.type_contract
                this.startTime = this.contract.start_time
                this.daysSelected = this.contract.daysSelected
                this.price = this.contract.price

                this.infoShow = false;

                if (this.contract.status.name === "pending"){
                    this.infoShow = true;
                }

                // Solo en caso de ser contrato de un anuncio, categoria

                if (this.contract && this.contract.category){
                    this.categories = [{
                        value: this.contract.category,
                        text: this.contract.category.label
                    }];

                    this.category = this.contract.category;
                }
            }

            if (this.action === 'create'){
                this.disabled = false;
                await this.getCategories();

                this.categories = this.$store.state.categories
                    .map(category => ({
                        value: category,
                        text: category.label
                    }))
                this.category = this.$store.state.categories[0];
                
            }
        },
        changeHandleDay(day){
            if (this.disabled){
                return ;
            }

            this.daysSelected.includes(day.value) ? 
                this.daysSelected = this.daysSelected
                    .filter( d => d != day.value)
                :
                this.daysSelected = [
                    ...this.daysSelected,
                    day.value
                ].sort()
        },

        onContextStart(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.dateInitial.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        onContextEnd(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.dateInitial.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        validate(call){
            console.log('validate', call)
            
            let errors = {};
            let errorsExist = false;

            let form = {
                dateStart: this.dateInitial,
                startTime: this.startTime,
                hours: this.hours,
                address: this.address,
                message: this.message
            }
            
            
                form = {
                    ...form,
                    dateEnd: this.dateEnd,
                    hours: this.hours,
                    message: this.message,
                    daysSelected: this.daysSelected.length
                }
            
            
            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];
                // console.log('field', value)
                switch(field){
                    case 'message' :
                    case 'description':
                    case 'address': {
                        if (!value || !value.length){
                            errors[field] = [ 'Por favor completa el campo, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'dateStart': {
                        if (!value.valid){
                            errors[field] = [ 'La fecha Inicial es Invalida' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'dateEnd': {
                        if (!value.valid){
                            errors[field] = [ 'La fecha Final es Invalida' ];
                            errorsExist = true;
                        }
                    };break;
                    case 'startTime': {
                        if (value === ''){
                            errors[field] = [ 'La hora de inicio es Invalida' ];
                            errorsExist = true;
                        }
                    };break;
                    case 'daysSelected': {
                        if (!value){
                            errors[field] = [ 'Debe de tener seleccionado algun dia' ];
                            errorsExist = true;
                        }
                    }

                }
                // console.log('value', field, value
            })

            // Compruebo los errors y doy mensaje
            if (errorsExist){
                return this.makeNoticeListErrors(errors);
            }

            this.submit(call);
        },
        async submit(call){
            let form = {
                userHired: this.categoryUser?.user.id,
                dateStart: this.dateInitial.date,
                startTime: this.startTime,
                hours: this.hours,
                address: this.address,
                message: this.message,
                categoryUser: this.categoryUser?.id,
                typeContract: this.typeContract,
                category: this.category?.id,
                price: this.price
            }

            
                form = {
                    ...form,
                    dateEnd: this.dateEnd.date,
                    hours: this.hours,
                    message: this.message,
                    daysSelected: this.daysSelected
                }
            
            
            if (call === 'calculatePayment'){
                return this.calculatePayment(form);
            }

            this.onSubmit(form);
        },
        changeHandleScore(newScore){
            this.scoreStar = newScore;
        },
        proccessPay(result){
            this.contract.typeContract === 'habitual' ?
            this.payContractHabitual(result)
            :
            this.payContractOccasional(result)
        },
        dateFormat(date){
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
        async calculatePayment(form){
            console.log('infoPayment', form)
            this.infoPayment.loading = true;

            const response = await this.callApi('post', `/app/payment/calculate`, {
                price: form.price,
                hours: form.hours,
                typeContract: form.typeContract,
                daysSelected: form.daysSelected,
                dateStart: form.dateStart
            });

            if (response.status === 200){
                this.infoPayment.doc = response.data;
                this.$bvModal.show('infoPayment');
            }

            this.infoPayment.loading = false;
            console.log('calculatePayment', response)

        },
    }
}
</script>

<template>
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center border-bottom  mb-4">
                    <div class="d-flex justify-content-center">
                        <BtnDesp
                            title="Informacion Contrato"
                            :show="this.infoShow"
                            :onClick="()=>{ this.infoShow = !this.infoShow}"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div class="row" v-if="infoShow">
            <!-- Tipo Ad -->
            <div class="col-12"> 
                <!-- Seleccionar Categoria -->
                <div class="col-12">
                    <b-form-group
                        id="category"
                        description=""
                        label="Selecciona un Servicio"
                        label-for="selectCategory"
                    >
                        <b-form-select 
                            id="selectCategory"
                            v-model="category" 
                            :options="this.categories" 
                            :disabled="this.disabled"
                        />
                    </b-form-group>
                </div>

                <!-- Price -->
                <div class="col-12">
                    <b-form-group
                        description=""
                        label="Precio Euro/Hora"
                        label-for="precio"
                    >
                        <b-form-input 
                            id="price" 
                            type="number"
                            v-model="price" 
                            min="1"
                            :disabled="this.disabled"
                        />
                    </b-form-group>
                </div>
            </div>

            <!-- Start Tipo de Contrato -->
            <div class="col-12 mb-2">
                <div class="row">
                    <div class="col-3">
                        <label for="typeContract" class="text-muted">Tipo de Contrato</label>
                    </div>
                    <div class="col-9">
                        <b-form-select
                            v-model="typeContract"
                            :disabled="this.disabled"
                            :options="[
                            { text: 'Habitual', value: 'habitual' },
                            { text: 'Ocasional', value: 'occasional' },
                        ]"></b-form-select>
                    </div>
                </div>

            </div>
            <!-- End Tipo de Contrato -->

            <!-- Start Fecha de Inicio y Fecha Final -->
            <div class="col-12 ">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <label for="datepicker" class="text-muted">Fecha de Inicio</label>
                            </div>
                            <div class="col-12">
                                <b-input-group class="mb-3">
                                    <b-form-input
                                        id="example-input"
                                        v-model="dateInitial.date"
                                        type="text"
                                        placeholder="YYYY-MM-DD"
                                        autocomplete="off"
                                        :disabled="disabled"
                                    ></b-form-input>
                                    <b-input-group-append>
                                        <b-form-datepicker
                                        v-model="dateInitial.date"
                                        button-only
                                        right
                                        locale="en-US"
                                        aria-controls="example-input"
                                        @context="onContextStart"
                                        :disabled="disabled"
                                        ></b-form-datepicker>
                                    </b-input-group-append>
                                </b-input-group>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- Start Fecha de Inicio y Fecha Final -->

            <!-- Start hours -->
            <div class="col-12 ">
                <div class="row d-flex align-items-center justify-content-center mb-1">
                    <div class="col-4">
                        <div>
                            <label for="" class="text-muted">Hora Inicial</label>
                            <b-form-timepicker
                                v-model="startTime"
                                locale="en"
                                :disabled="disabled"
                            />
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="col-12">
                            <label for="hours" class="text-muted">Cantidad de Horas por Dia</label>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="col-10">
                                <b-form-input
                                    id="bg-opacity"
                                    v-model="hours"
                                    type="range"
                                    number
                                    min="1"
                                    max="24"
                                    step="1"
                                    :disabled="disabled"
                                ></b-form-input>
                            </div>
                            <div class="2">
                                <b-input-group-append is-text class="">
                                    {{ hours }} {{ hours > 1 ? 'hrs' : 'hr' }}
                                </b-input-group-append>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End hours -->

            <!-- Start Days Selected ( Only Contract habitual ) -->
            <div class="col-12 ">
                <div class="text-muted my-3">
                    <label for="">Días Seleccionados:</label>
                    <div class="d-flex justify-content-center">
                        <div v-for="day in days" :key="day.key">
                            <div class="p-1" style="width:70px">
                                <div
                                    :class="daysSelected.includes(day.value) ? 
                                        'day-btn-active' : 'day-btn'"
                                    @click="changeHandleDay(day)"
                                >
                                    {{ day.key }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End  Days Selected -->

            <!-- Start Descripcion -->
            <div class="col-12 ">
                <label for=""  class="text-muted">Mensaje</label>
                <b-form-textarea
                    id="textarea"
                    v-model="message"
                    placeholder="Envia un Mensaje"
                    rows="2"
                    max-rows="4"
                    :disabled="disabled"
                ></b-form-textarea>
            </div>
            <!-- End Descripcion -->

            <!-- Start Direccion -->
            <div class="col-12 mb-2">
                <label for=""  class="text-muted">Dirección</label>
                <b-form-textarea
                    id="textarea"
                    v-model="address"
                    placeholder="Ubicacion del hogar"
                    rows="2"
                    max-rows="4"
                    :disabled="disabled"
                ></b-form-textarea>
            </div>
            <!-- End Direccion -->

            <div class="col-12 border-bottom mb-1">
                <div class="text-muted">
                    <label>Informacion Pago: </label>
                    <div class="row">
                        <div class="col-7">
                            <span class="text-center">
                                {{ typeContract === 'occasional' ? 
                                    'Este contrato es de un unico pago,' :
                                    'Este contrato es mensual, con posibilidad de renovación terminado el periodo,'
                                }}
                                Una vez finalizado el contrato no podrá ser editado.
                            </span>
                        </div>
                        <div class="col-5 d-flex justify-content-center">
                            <div>
                                <b-button 
                                    pill 
                                    size="sm"
                                    variant="outline-primary" 
                                    v-b-tooltip.hover 
                                    title="Complete todos los campos para calcular el pago"
                                    @click="()=>{ validate('calculatePayment'); }"
                                >
                                    Calcular Pago

                                    <b-spinner 
                                        v-if="infoPayment.loading"
                                        small
                                        type="grow" 
                                        label="Spinning"
                                    />
                                </b-button>
                            </div>
                        </div >
                    </div>
                </div>
            </div>

            <!-- Action Create -->
            <div class="col-12" v-if="this.action === 'create'">
                <div class="col-12" >
                    <div class="col-12" >
                        <div class="d-flex justify-content-center mt-3">
                            <b-button pill variant="outline-secondary" @click="validate">
                                Enviar
                            </b-button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal Payment Calculation -->
        <b-modal 
            id="infoPayment" 
            title="Informacion de Pago"
            hide-footer
        >
            <div v-if="!infoPayment.loading && infoPayment.doc">
                <FormPaymentCalculation 
                    :doc="infoPayment.doc"
                />   
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
