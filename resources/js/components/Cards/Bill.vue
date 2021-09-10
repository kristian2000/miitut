<template>
    <div class="">
        <div class="border item-bill">
            <!-- Start Header -->
            <div 
                @click="show = !show"
                class="item-bill-header px-2">
                <div>
                    <span v-if="!show">
                        {{ dateFormat(doc.created_at) }}
                    </span>
                    <span 
                        v-else 
                        style="cursor: pointer"
                        @click="exportPDF"
                        >
                        <DownloadIcon/>
                    </span>
                </div>
                <div 
                    class="btn-bill-more"
                >
                    <MinusIcon 
                        v-if="show"
                    />
                    <PlusIcon 
                        v-else
                    />
                </div>
            </div>
            <!-- End Header -->

            <!-- Start Body -->
            <div 
                v-if="show"
                class="item-bill-body border"
                id="bill" 
                ref='bill'
            >
                <!-- Content -->
                <div class="p-4">
                    <div class="text-miitut mb-4">Miitut</div>

                    <div class="row">
                        <div class="col-4 mb-3">
                            <div class="title-bill">Número de factura</div>
                            <div class="text-bill">{{ idFormat(doc.id) }}</div>
                        </div>
                        <div class="col-4">
                            <div class="title-bill">Fecha de Factura:</div>
                            <div class="text-bill">{{ dateFormat(doc.created_at) }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="title-bill">factura a:</div>
                            <div class="text-bill mb-3">{{ doc.data.infoClient.name}}</div>
                            <div class="text-bill">
                                Dirección: {{ doc.data.infoClient.address }}
                            </div>
                            <div class="text-bill">
                                NIF/CIF {{ doc.data.infoClient.CIF }}
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="title-bill">Empresa:</div>
                            <div class="text-bill">{{ doc.data.infoMiitut.name}} </div>
                            <div class="text-bill">Dirección: 
                               {{ doc.data.infoMiitut.address }}
                                NIF/CIF {{ doc.data.infoMiitut.CIF }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bill-desc mt-3">
                    <div class="px-4">
                        <table class="table table-bill">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th colspan="2">COSTE</th>
                                </tr>
                            </thead>
                            <tbody v-if="doc.type_payment === 'contract'">
                                <tr>
                                    <td>Import Bruto de la reserva del servicio</td>
                                    <td class="text-center">{{ doc.data.info.priceTotal }}€</td>
                                </tr>
                                <tr>
                                    <td>Comisión por servicios de Miitut
                                        {{doc.data.info.porcentageComission * 100}}%
                                    </td>
                                    <td class="text-center">{{ doc.data.info.totalComission }}€</td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <td>
                                    Cuenta Premium Miitut
                                </td>
                                <td>
                                    {{ doc.data.info.amount }}€
                                </td>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        SUBTOTAL
                                    </td>
                                    <td>{{ doc.data.info.subtotal }}€</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        (TIPO DE IVA)
                                    </td>
                                    <td>{{ doc.data.info.porcentageIva * 100}}%</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        I.V.A <span v-if="doc.contract_id">sobre comisión</span>
                                    </td>
                                    <td>{{ doc.data.info.totalIva.toFixed(2) }}€</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        TOTAL
                                    </td>
                                    <td>{{ doc.data.info.totalAmount }}€</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Body -->
        </div>
    </div>
</template>

<script>
import jsPDF from "jspdf";

import {
    DownloadIcon,
    MinusIcon,
    PlusIcon
} from 'vue-feather-icons';
import moment from 'moment';

export default {
    props: ['doc'],
    data() {
        return {
            show: false
        }
    },
    components: {
        DownloadIcon,
        MinusIcon,
        PlusIcon
    },
    created(){
        console.log('bill', this.doc.contract_id)
    },
    methods: {
        async exportPDF(){
            const el = this.$refs.bill;

            const options = {
                type: 'dataURL'
            }
            let output = await this.$html2canvas(el, options);

            var PDF = new jsPDF("p", "mm", "a4");

            PDF.addImage(output, 'JPEG', 20, 20);
            PDF.save(`factura_cod${this.doc.id}.pdf`);
        },
        dateFormat(date){
            return moment(date).format('DD/MM/YYYY')
        },
        idFormat(id){

            let UIDFormat = [...new Number(id)
                .toFixed(4)
                .replace('.', '')]
                .reverse()
                .join('');

            return UIDFormat;
        }
    }
}
</script>

<style scoped>
    .item-bill {
        width: 100%;
        /* background: #eee; */
        margin-bottom: 10px;
        
    }

    .btn-bill-more {
        cursor: pointer;
        font-size: 20px;
    }

    .item-bill-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #666;
        cursor: pointer;
    }

    .item-bill-body {
        /* padding: 0 10px; */
        min-width: 600px;
        height: auto;
        
        /* background: #ddd; */
    }

    .text-miitut {
        font-size: 1.5rem;
        font-weight: bolder;
        color: #5E7079;
    }

    .title-bill {
        color: #5E7079;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: underline;
        font-size: .9rem;
    }

    .text-bill {
        font-size: .85rem;
        line-height: 1.3;
    }

    .bill-desc {
        background: #F2F5F8;
    }

    .table-bill th{
        color: #5E7079;
        text-transform: uppercase;
        font-size: .8rem;
    }

    .table-bill tfoot {
        border-top: 1.2px solid #5E7079;
    }

    .table-bill tfoot td {
        font-size: .8rem;
        padding: 5px;
    }

    /* #5E7079 */
    /* #F2F5F8 */

</style>