<script>
export default {
    props: [
        'categoryUser'
    ],
    data(){
        return {
            dateInitial: {
                date: new Date().toJSON().slice(0,10).replace(/-/g,'-'),
                valid: true
            },
            dateEnd: {
                date: new Date().toJSON().slice(0,10).replace(/-/g,'-'),
                valid: true
            },
            hours: 1,
            description: '',
            address: ''
        }
    },
    computed: {
        totalPrice(){
            return new Number(this.hours * this.categoryUser.price).toFixed(2);
        }
    },
    methods: {
        onContext(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.dateInitial.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        validate(){
            let errors = {};
            let errorsExist = false;

            const form = {
                date: this.dateInitial,
                address: this.address,
                description: this.description
            }

            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];

                switch(field){
                    case 'description':
                    case 'address': {
                        if (!value.length){
                            errors[field] = [ 'Por favor completa el campo, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'date': {
                        if (!value.valid){
                            errors[field] = [ 'La fecha es Invalida' ];
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
            const form = {
                category: this.categoryUser.id,
                dateInitial: this.dateInitial.date,
                hours: this.hours,
                description: this.description,
                address: this.address,
                price: this.categoryUser.price
            }

            console.log('submit', form)
        }
    }
}
</script>

<template>
    <div class="container">
        <div class="row">
            <!-- Start Fecha de Nacimiento -->
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <label for="datepicker" class="text-muted">Fecha</label>
                    </div>
                    <div class="col-9">
                        <b-input-group class="mb-3">
                            <b-form-input
                                id="example-input"
                                v-model="dateInitial.date"
                                type="text"
                                placeholder="YYYY-MM-DD"
                                autocomplete="off"
                            ></b-form-input>
                            <b-input-group-append>
                                <b-form-datepicker
                                v-model="dateInitial.date"
                                button-only
                                right
                                locale="en-US"
                                aria-controls="example-input"
                                @context="onContext"
                                ></b-form-datepicker>
                            </b-input-group-append>
                        </b-input-group>
                    </div>
                </div>

            </div>
            <!-- END Fecha de Nacimiento -->

            <!-- Start hours -->
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <label for="hours">Horas</label>
                    </div>
                    <div class="col-6">
                        <b-form-spinbutton id="hours" v-model="hours" min="1" max="300" />
                    </div>
                </div>
            </div>
            <!-- End hours -->

            <!-- Start Price -->
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-3">
                        <label for="price">Precio por hora</label>
                    </div>
                    <div class="col-3">
                        <b-form-input
                            :placeholder="'€ ' + categoryUser.price"
                            disabled
                            style="text-align: center"
                        />
                    </div>
                </div>
            </div>
            <!-- End Price -->

            <!-- Start Descripcion -->
            <div class="col-12 my-3">
                <b-form-textarea
                    id="textarea"
                    v-model="description"
                    placeholder="Escribe una descripción..."
                    rows="3"
                    max-rows="6"
                ></b-form-textarea>
            </div>
            <!-- End Descripcion -->

            <!-- Start Direccion -->
            <div class="col-12">
                <label for="">Dirección</label>
                <b-form-textarea
                    id="textarea"
                    v-model="address"
                    placeholder="Ubicacion del hogar"
                    rows="3"
                    max-rows="6"
                ></b-form-textarea>
            </div>
            <!-- End Direccion -->

            <!-- Start Total -->
            <div class="col-12 my-3">
                <hr>
                <div class="text-center">
                    <p>Total € <span class="" style="font-weight: 900">{{ totalPrice }}</span></p>
                </div>
                <hr>
            </div>
            <!-- End Total -->

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <b-button pill variant="outline-secondary" @click="validate">
                        Enviar Contrato
                    </b-button>
                </div>
            </div>
        </div>
    </div>
</template>
