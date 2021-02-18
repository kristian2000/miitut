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

        <div class="col-lg-8 col-12">

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

<style>

    .bill-contract {
        font-size: 18px;
    }

    h1 {
        color: #ff4b64;
    }

    .public-profile {
        padding: 30px;
    }

    .avatar {
        border: solid 1px #eeeeee;
        padding: 10px;
        background-clip: content-box; /* support: IE9+ */
        background-color: #ccc;
    }

    .accounts:hover, .accounts.active {
        background: rgb(244,124,59);
        background: linear-gradient(170deg, rgba(244,124,59,1) 0%, rgba(241,89,56,1) 51%);
    }

    #title {
        color: #f1905a;
    }

    .bg-primary, .btn-primary, .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.focus, .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-soft-primary:hover, .btn-soft-primary:focus, .btn-soft-primary:active, .btn-soft-primary.active, .btn-soft-primary.focus, .badge-primary, .pagination .page-item.active .page-link, .nav-pills .nav-link.active, .custom-control-input:checked ~ .custom-control-label::before, #preloader #status .spinner .double-bounce1, #preloader #status .spinner .double-bounce2, .social-icon li a:hover, #topnav .navbar-toggle.open span:hover, .gradient, .flex-control-paging li a.flex-active, .owl-theme .owl-dots .owl-dot span, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots.clickable .owl-dot:hover span, .watch-video a .play-icon-circle, .sidebar .widget .tagcloud > a:hover, .flatpickr-day.selected, .flatpickr-day.selected:hover, .bg-animation-left.crypto-home::after, .bg-animation-left.task-management-home::after, .classic-app-image .bg-app-shape::after, .classic-saas-image .bg-saas-shape::after, .work-container.work-modern .icons .work-icon:hover, .features.fea-primary:hover, .accounts:hover, .accounts.active, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .swiper-slider-hero .swiper-container .swiper-button-prev:hover, .swiper-slider-hero .swiper-container .swiper-button-next:hover {
            background-color: rgb(244,124,59) !important;
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
