<script>
export default {
    props: ['stripeTokenHandler'],
    data(){
        return {

        }
    },
    mounted(){
        // Set your publishable key: remember to change this to your live publishable key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        let stripe = Stripe('pk_test_51IEjGjFMHGc5BcHAXf1QcLCGWdsOx7ZFYtYyqRr7q99bWQ0zoNdW3fejDmCGgVDzHTPWCFYBpfeVL62bUYf2xS6q00efHHqCYH');
        let elements = stripe.elements();

        var style = {
            base: {
                // Add your base input styles here. For example:
                border: '1px solid #D8D8D8',
                borderRadius: '4px',
                color: "#000",
                fontSize: '16px'
            },
        };

        // // Create an instance of the card Element.\
        // let CardElement = document.getElementById('card-element');
        let card = elements.create('card', {style: style});
        card.mount('#card-element');

        // CardElement.append(card)
        console.log(card)

        // // Add an instance of the card Element into the `card-element` <div>.

        let form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
        });
});
    }
}
</script>
<template>

        <!-- <form action="/payment" method="post" id="payment-form"> -->
        <form id="payment-form">
            <div class="form-row my-4">

                <label for="card-element" class="labelElement mb-4 text-muted">
                    Tarjeta de Debito o Crédito
                </label>

                <div class="col-12 d-flex flex-row align-items-center justify-content-center">
                    <div class="d-flex justify-content-center cardElement" >
                        <div id="card-element" style="width: 450px">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>
                    </div>
                    <div class="">
                        <b-button type="submit">
                            Enviar Pago
                        </b-button>
                    </div>
                </div>


                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
        </form>

</template>

<style >
    .cardElement {
        background: white;
        padding: 10px;
        border-radius: 10px;
    }
    .labelElement{
        font-size: 16px;
    }

    .form-row {
        background: #f8f7f7;
        padding: 25px;
    }
</style>
