<script>

import CardStripe from '../CardStripe';

export default {
    data() {
        return {
            loading: true,
            methodsPayment: []
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
            const response = await this.callApi('get', `app/users/paymentMethods`);
            if (response.status === 200){
                this.loading = false;
                this.methodsPayment = response.data;

                console.log('methodsPayment', response.data)
            }
        },
        proccessPay(result){
            console.log('result', result)
        },

    }
}
</script>


<template>
    <div>
        <h4 class="text-center font-weight-bold"> 
            <span class="border-bottom">  Metodo de Pago </span>
        </h4>
        <div v-if="!loading">
            <div v-if="!methodsPayment.length">
                <div class="text-center font-weight-bold">
                    Agregar Tarjeta
                </div>
                <CardStripe
                    :stripeTokenHandler="proccessPay"
                    :paymentMethod="true"
                />
            </div>
            <div v-else>
                Mostrar Tarjeta (opciones)
            </div>
        </div>
        <div v-else>
            <div class="d-flex justify-content-center">
                <b-spinner type="grow" label="Spinning" />
            </div>
        </div>
    </div>
</template>
