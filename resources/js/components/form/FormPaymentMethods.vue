<script>

import CardStripe from '../CardStripe';

export default {
    data() {
        return {
            loading: true,
            paymentMethods: [],
            paymenMethodSelected: ''
        }
    },
    components: {
        CardStripe
    },
    created(){
        this.getPaymentMethods();
    },
    methods: {
        async getPaymentMethods(){
            const response = await this.callApi('get', `/app/users/paymentMethods`);
                console.log('methodsPayment', response.data)
            if (response.status === 200){
                this.loading = false;
                this.paymentMethods = response.data;

            }
        },
        async proccessTokenHandler(result){
            console.log('result', result)
            this.loading = true;
            const response = await this.callApi('post', `/app/users/paymentMethods`, {
                paymentMethod : result
            });

            if (response.status === 200){
                this.loading = false;
                this.paymentMethods = response.data.paymentMethods;

                this.makeNotice('success', 'Info', 'Tarjeta Agregada')
            }

            console.log('paymentMethod', response.data)
        },
        async destroyPaymentMethod(paymentMethodID){
            console.log('Destroy', paymentMethodID)
            this.loading = true;
            const response = await this.callApi('delete', `/app/users/paymentMethods`, {
                id : paymentMethodID
            });

            if (response.status === 200){
                this.loading = false;
                this.paymentMethods = response.data.paymentMethods;
            }

            console.log('paymentMethod', response.data)
        }

    }
}
</script>


<template>
    <div>
        <h4 class="text-center font-weight-bold"> 
            <span class="border-bottom">  Metodo de Pago </span>
        </h4>
        <div v-if="!loading">
            <div v-if="!paymentMethods.length">
                <div class="text-center font-weight-bold">
                    Agregar Tarjeta
                </div>
                <CardStripe
                    :stripeTokenHandler="proccessTokenHandler"
                />
            </div>
            <div v-else>
                <div 
                    v-for="(method) in paymentMethods" :key="method.id"
                    class="container-cards"
                    v-bind:class="{'bg-sucess text-light': paymenMethodSelected === method.id}"
                >
                    <div>
                        <div class="destroy-card-content">
                           <div 
                                class="destroy-card"
                                @click="destroyPaymentMethod(method.id)"
                            > 
                               <div class="close">
                                    &#x2716;
                               </div>
                            </div> 
                        </div>
                        <div class="stripe-card-element">
                                <!-- start Header -->
                                <div class="stripe-card-header">
                                    <div class="stripe-card-brand">
                                        {{ method.brand.toUpperCase() }}
                                    </div>
                                </div>
                                <!-- end header -->

                                <!-- start Body -->
                                <div class="stripe-card-body">
                                    <div class="stripe-card-text">
                                        Número de Tarjeta
                                    </div>
                                    <div class="stripe-card-number">
                                        <div>****</div>
                                        <div>****</div>
                                        <div>****</div>
                                        <div>{{ method.last_four }}</div>
                                    </div>
                                </div>
                                <!-- end body -->
                            
                                <!-- start Footer -->
                                <div class="stripe-card-footer">
                                    <div>
                                        <div class="stripe-card-text">
                                            Nombre de Tarjeta
                                        </div>
                                        <div class="stripe-card-name">
                                            {{ method.name }}
                                        </div>
                                    </div>
                                    <div>
                                        <div class="stripe-card-text">
                                            Expiración
                                        </div>
                                        <div class="stripe-card-exp">
                                            <div class="stripe-card-text">
                                                Valido:
                                            </div>
                                            <div class="stripe-card-exp-date">
                                                {{ method.exp_month }}
                                                /
                                                {{ method.exp_year }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Footer -->
                        </div>

                        <slot />
        
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="d-flex justify-content-center">
                <b-spinner type="grow" label="Spinning" />
            </div>
        </div>
    </div>
</template>

<style>
    .container-cards {
        display: flex;
        justify-content: center;
    }
    .stripe-card-element {
        width: 360px;
        height: auto;
        min-height: 180px;
        margin-bottom: 1em;
        font-size: 15px;
        padding: 15px;
        background: linear-gradient(rgba(0,212,255,1), rgba(9,9,121,1) 45%);

        border-radius: 20px;

        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .stripe-card-header {
        height: 25%;
    }
    .stripe-card-header {
      height: 50%;
    }
    .stripe-card-footer {
      height: 25%;
    }

    .stripe-card-brand {
        display: flex;
        justify-content: flex-end;
        color: white;
        font-weight: bold;
    }

    .stripe-card-name {
        color: white;
        max-width: 250px;
    }

    .stripe-card-text {
        color: #eee;
        font-size: 12px;
        font-weight: bold;
        line-height: .8;
    }
    .stripe-card-number {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 25px;
        color: white;
        margin: 10px;
    }

    .stripe-card-footer {
        display: flex;
        justify-content: space-between;
    }

    .stripe-card-exp {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stripe-card-exp-date {
        color: white;
        margin: 5px;
    }

    .destroy-card-content {
        height: 25px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        font-weight: bold;
        position: relative;
        left: 10px;
        top: 15px;

        font-size: 12px;
    }

    .destroy-card{
        width: 25px;
        height: 25px;

        background: rgba(155, 155, 155, 0.8);
        color: white;
        border-radius: 50%;
        border: 2px solid rgb(0, 27, 32);

        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }


    .destroy-card:hover {
        width: 35px;
        height: 35px;
    }

    .destroy-card.close {
        background: red
    }


  
</style>