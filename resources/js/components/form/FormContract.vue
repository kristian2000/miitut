<script>
import BtnDesp from '../btnDespliegue';
import CardStripe from '../CardStripe';

export default {
    props: [
        'categoryUser',
        'contract',
        'onSubmit',
        'edit',
        'typeForm',
        'rejectCall',
        'acceptCall',
        'onClose'
    ],
    components: {
        BtnDesp,
        CardStripe
    },
    data(){
        return {
            dateInitial: {
                date: new Date().toJSON().slice(0,10).replace(/-/g,'-'),
                valid: true
            },
            dateEnd: {
                date: new Date(new Date().setDate(new Date().getDate() + 1))
                    .toJSON().slice(0,10).replace(/-/g,'-'),
                valid: true
            },
            hours: 1,
            message: '',
            address: '',
            typeContract: 'habitual',
            startTime: '',
            daysSelected: [
                { key: 'LUN', value: false},
                { key: 'MAR', value: false},
                { key: 'MIE', value: false},
                { key: 'JUE', value: false},
                { key: 'VIE', value: false},
                { key: 'SAB', value: false},
                { key: 'DOM', value: false},
            ],
            disabled: true,
            infoShow: true
        }
    },
    created(){
        // Si el usuario es empleador se crea el contrato
        // Si no solo puede observarlo
        if (this.contract){
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

            if (this.contract.status.name === "pendingPayment"){
                this.infoShow = false;
            }
        }

        if (this.typeForm === 'create'){
            this.disabled = false;
        }
    },
    computed: {
        totalPrice(){
            return new Number(this.hours * this.categoryUser.price).toFixed(2);
        }
    },
    methods: {
        changeHandleDay(day){
            if (this.disabled){
                return ;
            }

            this.daysSelected = this.daysSelected
            .map( d =>
                d.key !== day.key ? d
                :
                { key: day.key, value: !day.value }
            )
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
        validate(){
            let errors = {};
            let errorsExist = false;

            let form = {
                dateStart: this.dateInitial,
                startTime: this.startTime,
                hours: this.hours,
                address: this.address,
                message: this.message
            }

            if (this.typeContract === 'habitual'){
                form = {
                    ...form,
                    dateEnd: this.dateEnd,
                    hours: this.hours,
                    message: this.message,
                     daysSelected: this.daysSelected.filter( d => d.value === true).length
                }
            }

            // console.log('validateForm', form)

            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];
                // console.log('field', value)
                switch(field){
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
                // console.log('value', field, value)
            })

            // Compruebo los errors y doy mensaje
            if (errorsExist){
                this.makeNoticeListErrors(errors);
                return;
            }

            this.submit();
        },
        async submit(){
            let form = {
                userHired: this.categoryUser.user.id,
                dateStart: this.dateInitial.date,
                startTime: this.startTime,
                hours: this.hours,
                address: this.address,
                message: this.message,
                categoryUser: this.categoryUser.id,
                typeContract: this.typeContract
            }

            if (this.typeContract === 'habitual'){
                form = {
                    ...form,
                    dateEnd: this.dateEnd.date,
                    hours: this.hours,
                    message: this.message,
                    daysSelected: this.daysSelected
                }
            }
            console.log('submit', form)

            this.onSubmit(form);
        },
        async processPayment(tokenStripe){
            console.log(tokenStripe)
        }
    }
}
</script>

<template>
    <div class="container" >
        <div class="row">
            <div class="col-12" v-if="this.typeForm !== 'create'">
                <div class="d-flex justify-content-center border-bottom  mb-4">
                    <div class="d-flex justify-content-center">
                        <BtnDesp
                            title="Informacion Contrato"
                            :show="this.infoShow"
                            :onClick="(show)=>{ this.infoShow = show}"
                        />
                    </div>
                </div>
            </div>

        </div>

        <div class="row" v-if="infoShow">
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
                            { text: 'Ocacional', value: 'occasional' },
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
                    <!-- <div v-if="typeContract === 'habitual'" class="col">
                        <div class="row">
                            <div class="col-12">
                                <label for="datepicker" class="text-muted">Fecha Final</label>
                            </div>
                            <div class="col-12">
                                <b-input-group class="mb-3">
                                    <b-form-input
                                        id="example-input"
                                        v-model="dateEnd.date"
                                        type="text"
                                        placeholder="YYYY-MM-DD"
                                        autocomplete="off"
                                        :disabled="disabled"
                                    ></b-form-input>
                                    <b-input-group-append>
                                        <b-form-datepicker
                                        v-model="dateEnd.date"
                                        button-only
                                        right
                                        locale="en-US"
                                        aria-controls="example-input"
                                        @context="onContextEnd"
                                        :disabled="disabled"
                                        ></b-form-datepicker>
                                    </b-input-group-append>
                                </b-input-group>
                            </div>
                        </div>
                    </div> -->

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
            <div v-if="typeContract === 'habitual'" class="col-12 ">
                <div class="text-muted my-3">
                    <label for="">Días Seleccionados:</label>
                    <div class="d-flex justify-content-center">
                        <div v-for="day in daysSelected" :key="day.key">
                            <div class="p-1" style="width:70px">
                                <div
                                    :class="day.value ? 'day-btn-active' : 'day-btn'"
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

            <!-- Start Price -->
            <!-- <div class="col-12 mt-3">
                <div class="row">
                    <div class="col">
                        <label for="price" class="text-muted">Precio por hora publicado</label>
                    </div>
                    <div class="col">
                        <b-form-input
                            :placeholder="'€ ' + categoryUser.price"
                            disabled
                            style="text-align: center"
                        />
                    </div>
                </div>
            </div> -->
            <!-- End Price -->

            <!-- Start Descripcion -->
            <div class="col-12 ">
                <label for=""  class="text-muted">Mensaje</label>
                <b-form-textarea
                    id="textarea"
                    v-model="message"
                    placeholder="Envia un Mensaje, te recomendamos no enviar numero de telefono o email."
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

            <!-- TypeForm Create -->
            <div class="col-12" v-if="this.typeForm === 'create'">

                <!-- Start Total -->
                <div class="col-12 my-2">
                    <hr>
                    <div class="">
                        <label class="border-bottom font-weight-bold">Calculo del Contrato :</label>
                        <div class="text-center">
                            <div class="my-2" v-if="this.typeContract === 'occasional'">
                                <div class="font-weight-bold">
                                    Precio Publicado: <span class="text-muted"> € {{ categoryUser.price }} </span>
                                </div>
                            </div>
                            <p>Total € <span class="" style="font-weight: 900">{{ totalPrice }}</span></p>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- End Total -->
                <!-- Btn Action create -->
                <div class="col-12" >
                    <div class="col-12 " v-if="!contract">
                        <div class="d-flex justify-content-center mt-3">
                            <b-button pill variant="outline-secondary" @click="validate">
                                Enviar Contrato
                            </b-button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

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
                        <b-button pill variant="outline-secondary" @click="validate">
                            Cancelar
                        </b-button>
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
                            <div class="text-center">
                                <div class="">
                                    <p class="text-muted">
                                        Al realizar el pago, se continuara con el proceso
                                    </p>
                                </div>
                                <div>
                                    <CardStripe
                                        :stripeTokenHandler="processPayment"
                                    />
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


        </div>

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
