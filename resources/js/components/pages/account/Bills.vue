<script>

import LayoutAccount from '../../../layouts/LayoutAccount'
import moment from 'moment'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            docs: []
        }
    },
    components: {
        LayoutAccount
    },
    async created(){
        const response = await this.callApi('get', `app/payments`);
        console.log('payments', response)

        if (response.status === 200){
            this.docs = response.data.payments;
        }
    },
    methods: {
        dateFormat(date){
            return moment(date).format('DD/MM/YYYY')
        }
    }
}
</script>

<template>
    <LayoutAccount :active="'Facturas'">

        <div class="col-lg-8 col-12 mt-4">

            <div class="border-bottom pb-4">
                <div class="row">

                    <h3 class="font-weight-bold col-sm-12">Facturas:</h3>

                    <div v-if="!docs.length">
                        <div class="text-center text-muted font-weight-bold m-5">
                            Sin Facturas
                        </div>
                    </div>

                    <div 
                        class="col-12 caja" 
                        v-for="doc in docs" :key="doc.id"
                    >
                        <h2 class="font-weight-bold">Fecha : {{  dateFormat(doc.created_at) }}</h2>

                        <div class="bill-contract text-muted">
                            <div class="font-weight-bold">Metodo de pago : {{ doc.method_payment }} </div>
                            <div class="font-weight-bold">Tipo de Pago : {{ doc.type_payment }} </div>
                            <div class="font-weight-bold">Categoria:  {{ doc.contract.category_user.category.label }}
                            </div>
                            <div class="font-weight-bolder">Precio: Eur {{ doc.amount }}</div>
                        </div>
                        <!-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ab facere unde eligendi asperiores repudiandae, minima dolorem, voluptate.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </LayoutAccount>
</template>

<style scoped>

    .bill-contract {
        font-size: 18px;
    }

    .caja {
        padding: 20px;
        margin-bottom: 10px;
    }

    .caja h2 {
        font-size: 30px;
        color: #8492a6;
    }

    .caja h3 {
        font-size: 30px;
        color: #ff4b64;
    }

    .row h3 {
        font-size: 30px;
        color: #ff4b64;
    }

</style>
