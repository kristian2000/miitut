<script>

import FormPaymentMethods from './FormPaymentMethods'

export default ({
    data(){
        return {
            plans: [],
            loading: true,
            laodingPlans: false,
            selectedPlan: null,
            subscribe: false,
            subscriptions: []
        }
    },
    created() {
        this.showPlans();
        // this.getPlans();
    },
    components: {
        FormPaymentMethods
    },
    methods: {
        async getPlans(){
            this.laodingPlans = true;

            const response = await this.callApi('get', `/app/plans`);
            console.log('plans', response)
            // this.$bvModal.show('modalAddCategory')

            if (response.status === 200){
                this.plans = response.data;

                this.laodingPlans = false;
            }
        },
        async showPlans(){
            this.loading = true;

            const response = await this.callApi('get', `/app/memberships/subscription`);

            if (response.status === 200){
                this.subscribed = response.data.subscribed;
                this.subscriptions = response.data.subscriptions;

                if (!response.data.subscribed){
                    this.getPlans();
                }
                this.loading = false;
            }
            console.log('showPlan', response)
        },
        async selectPlan(plan){
            console.log('selecte plan', plan)
            this.selectedPlan = plan;
        },
        async subscribePlan(){
            console.log('Subscribe', this.selectedPlan)

            const response = await this.callApi('post', `/app/memberships/subscription`, {
                plan: this.selectedPlan.id
            });
            // console.log('plans', response)

            if (response.status === 200){
                this.makeNotice('success','Subcripcion Exitosa', '');
                this.showPlans();

            }
            console.log(response)
        }
    }
})
</script>

<template>
<div>
    <div v-if="loading">
        <div class="d-flex justify-content-center mt-4">
            <b-spinner 
                type="grow" 
                label="Spinning" 
            />
        </div>
    </div>
    <div v-else>

        <div v-if="subscribed">
            <div v-if="subscriptions">
                <div class="card bg-white price-box">
                    <div class="pricing-name text-center">
                        <h4 class="mb-0 font-weight-bold">Tienes una Subscripcion</h4>
                    </div>
                    <div class="plan-price text-center mt-2">
                        <h3 class="text-custom font-weight-normal mb-0">
                            € {{ Number(subscriptions[0].plan.amount /100).toFixed(2) }}<span>/{{ subscriptions[0].plan.interval }}</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="m-4" v-if="!selectedPlan">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <h2 class="font-weight-bold">Hazte Premium</h2>
                        <p class="text-muted mx-auto">Obten una enorme ventaja!</p>
                        <div class="">
                            <div style="">
                                <div class="price-features">
                                    <i class="mdi mdi-check"></i>
                                    <span class="text-muted" style="font-size: 14px"> 
                                        Mejor ubicacion en los resultados
                                    </span>
                                </div>
                                <div class="price-features">
                                    <i class="mdi mdi-check"></i>
                                    <span class="text-muted" style="font-size: 14px"> 
                                        Perfil Recomendado
                                    </span>
                                    
                                </div>
                                <div class="price-features">
                                    <i class="mdi mdi-check"></i> 
                                    <span class="text-muted" style="font-size: 14px"> 
                                        Ofrecer mas servicios
                                    </span>
                                    
                                </div>
                                <div class="price-features">
                                    <i class="mdi mdi-check"></i> 
                                    <span class="text-muted" style="font-size: 14px"> 
                                        Hablar con mas de 3 contactos
                                    </span>
                                    
                                </div>                            
                            </div>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-around flex-wrap m-2"  v-if="!laodingPlans">
                    <div class="" v-for="plan in plans" :key="plan.id">
                        <div class="">
                            <div class="card bg-white price-box">
                                <div class="pricing-name text-center">
                                    <h4 class="mb-0 font-weight-bold">{{ plan.product.name }}</h4>
                                </div>
                                <div class="plan-price text-center mt-2">
                                    <h3 class="text-custom font-weight-normal mb-0">
                                        € {{ Number(plan.amount /100).toFixed(2) }}<span>/{{ plan.interval }}</span>
                                    </h3>
                                </div>

                                <div class="text-center mt-2">
                                    <div class="btn-plan"
                                        @click="selectPlan(plan)"
                                    >
                                        Adquirir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>

                    <div class="d-flex justify-content-center mt-4">
                        <b-spinner 
                            type="grow" 
                            label="Spinning" 
                        />
                    </div>
                </div>
                
            </div>     
            <div v-else>
                <FormPaymentMethods>
                    <div class="d-flex justify-content-center">
                        <div>
                            <b-button 
                                pill 
                                @click="(result)=> {this.subscribePlan()}"
                            >
                                Siguiente
                            </b-button>
                        </div>
                    </div>
                </FormPaymentMethods>
            </div>

        </div>

    </div>

</div>
</template>

<style>
    .btn-plan {
        padding: 8px 20px;
        outline: none;
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        font-weight: 600;
        border-radius: 6px;

        background-color: #7952B3;
        color: white;
        cursor: pointer;
    }

    .btn-plan:hover {
        opacity: .5;
    }

    .text-custom,
    .navbar-custom .navbar-nav li a:hover,
    .navbar-custom .navbar-nav li a:active,
    .navbar-custom .navbar-nav li.active a,
    .service-box .services-icon,
    .price-features i,
    .faq-icon,
    .social .social-icon:hover {
        color: #7952B3 !important;
    }

    .bg-custom,
    .btn-custom,
    .timeline-page .timeline-item .date-label-left::after,
    .timeline-page .timeline-item .duration-right::after,.back-to-top:hover 
    {
        background-color: #7952B3;
    }

    .btn-custom,
    .custom-form .form-control:focus,
    .social .social-icon:hover,
    .registration-input-box:focus {
        border-color: #7952B3;
    }

    .service-box .services-icon,
    .price-features i {
        background-color: rgba(246, 87, 110, 0.1);
    }


    .price-box {
        padding: 20px 30px;
    }

    .plan-price span {
        font-size: 16px;
        color: #000;
    }

    .price-features i {
        height: 20px;
        width: 20px;
        display: inline-block;
        text-align: center;
        line-height: 20px;
        font-size: 14px;
        border-radius: 50%;
        margin-right: 20px;
    }

</style>