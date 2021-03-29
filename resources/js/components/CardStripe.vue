<script>
export default {
    props: [
        'stripeTokenHandler',
        'paymentMethod'
    ],
    data(){
        return {
            stripeAPIToken: 'pk_test_51IEjGjFMHGc5BcHAXf1QcLCGWdsOx7ZFYtYyqRr7q99bWQ0zoNdW3fejDmCGgVDzHTPWCFYBpfeVL62bUYf2xS6q00efHHqCYH',
            name: '',
            stripe: '',
            elements: '',
            card: '',
            loading: false
        }
    },
    mounted(){
        this.includeStripe('js.stripe.com/v3/', function(){
            this.configureStripe();
        }.bind(this) );
    },
    methods: {
        
        /*
            Includes Stripe.js dynamically
        */
        includeStripe( URL, callback ){
            let documentTag = document, tag = 'script',
                object = documentTag.createElement(tag),
                scriptTag = documentTag.getElementsByTagName(tag)[0];
            object.src = '//' + URL;
            if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
            scriptTag.parentNode.insertBefore(object, scriptTag);
        },
        /*
            Configures Stripe by setting up the elements and 
            creating the card element.
        */
        configureStripe(){
            this.stripe = Stripe(this.stripeAPIToken);

            this.elements = this.stripe.elements();
            this.card = this.elements.create('card');
            this.card.mount('#card-element');
        },
        async createTokenStripe(){
            this.loading = true;
            let result = this.paymentMethod ?
                await this.stripe.createPaymentMethod('card',this.card, {
                    billing_details: {
                        name: this.name 
                    }
                }) : await this.stripe.createToken(this.card);
            
            if (result.error){
                // Inform the customer that there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            }else {
                // Send the token to your server.
                this.stripeTokenHandler(this.paymentMethod ? result.paymentMethod : result.token);
            }
            this.loading = false;
        },
    
    },

}
</script>
<template>

        <!-- <form action="/payment" method="post" id="payment-form"> -->
        <div id="payment-form">
            <div class="form-row my-4">
                <div class="col-12">
                    <label 
                        for="card-element" 
                        class="labelElement mb-2 text-muted"
                    >
                        Tarjeta de Debito o Crédito
                    </label>
                    <div class="mb-2">
                        <b-form-input v-model="name" placeholder="Escribe nombre completo" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="cardElement col-12" >
                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>
                    </div>
                    <div class="mt-4">
                        <b-button 
                            type="submit"
                            @click="createTokenStripe" 
                            :disabled="loading"
                        >
                            Enviar Pago 
                            <b-spinner 
                                v-if="loading"
                                type="grow" 
                                label="Spinning"
                                small
                            />
                        </b-button>
                    </div>
                </div>


                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
        </div>

</template>

<style >
    .cardElement {
        background: white;
        padding: 10px;
        border-radius: 10px;
        width: 100%;
    }
    .labelElement{
        font-size: 16px;
    }

    .form-row {
        background: #f8f7f7;
        padding: 25px;
        width: 100%;
    }
</style>
