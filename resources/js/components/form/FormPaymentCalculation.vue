<script>
export default {
    props: ['doc'],
    data(){
        return {
            days: [
                { key: 'LUN', value: 1},
                { key: 'MAR', value: 2},
                { key: 'MIE', value: 3},
                { key: 'JUE', value: 4},
                { key: 'VIE', value: 5},
                { key: 'SAB', value: 6},
                { key: 'DOM', value: 7},
            ],
        }
    }
}
</script>

<template>
<div>
    <!-- Si el Contrato es Ocacional -->
    <div v-if="doc.typeContract === 'occasional'">
        <!-- Tipo Contrato -->
        <div>
            <span class="font-weight-bold">Tipo Contrato:</span>
            <span class="text-muted">Ocasional</span>
        </div>
        <!-- Precio Por Hora -->
        <div>
            <span class="font-weight-bold">Precio Por Hora:</span>
            <span class="text-muted">€ {{doc.priceHour}}</span>
        </div>
        <!-- Horas del Contrato -->
        <div>
            <span class="font-weight-bold">Horas del Contrato:</span>
            <span class="text-muted">{{doc.hours}} hrs</span>
        </div>
        <!-- Porcentaje Comision -->
        <div>
            <span class="font-weight-bold">Porcentaje de Comision:</span>
            <span class="text-muted">% {{doc.porcentageComission}}</span>
        </div>
        <!-- Comision -->
        <div>
            <span class="font-weight-bold">Total comision:</span>
            <span class="text-muted">€ {{Number(doc.totalComission).toFixed(2)}}</span>
        </div>

        <!-- total -->
        <div 
            class="border-top border-bottom text-center"
            style="font-size: 20px;"
        >
            <span class="font-weight-bold">Total:</span>
            <span class="text-muted">€ {{Number(doc.totalAmount).toFixed(2)}}</span>
        </div>
    </div>
    <!-- Si el Contrato es Habitual -->
    <div v-else>
        <!-- Tipo Contrato -->
        <div>
            <span class="font-weight-bold">Tipo Contrato:</span>
            <span class="text-muted">habitual</span>
        </div>
        <!-- Precio Por Hora -->
        <div>
            <span class="font-weight-bold">Precio Por Hora:</span>
            <span class="text-muted">€ {{doc.priceHour}}</span>
        </div>
        <!-- Precio Por Hora -->
        <div>
            <span class="font-weight-bold">Horas Por dia:</span>
            <span class="text-muted">{{doc.hoursByDay}}</span>
        </div>
        <!-- Porcentaje Comision -->
        <div>
            <span class="font-weight-bold">Porcentaje de Comision:</span>
            <span class="text-muted">% {{doc.porcentageComission}}</span>
        </div>
        <!-- Total de Horas del Contrato -->
        <div>
            <span class="font-weight-bold">Total de Horas:</span>
            <span class="text-muted">{{doc.totalHours}} hrs</span>
        </div>
        <!-- Comision -->
        <div>
            <span class="font-weight-bold">Total comision:</span>
            <span class="text-muted">€ {{Number(doc.totalComission).toFixed(2)}}</span>
        </div>
        <!-- Fechas -->
        <div class="mt-2 border-top border-bottom">
            <div class="text-center">
                <span class="font-weight-bold">Mes:</span>
                <span class="text-muted">
                    ({{doc.dateStart}}) - ({{doc.dateEnd}})
                </span>                       
            </div>
            <div style="height: 150px; overflow:scroll" class="text-center">
                <b-table 
                    striped
                    hover 
                    small
                    :items="doc.days" 
                    :fields="[
                        {key: 'daySem', label: 'Dia'}, 
                        {key: 'date', label: 'Fecha'}
                    ]"
                >
                    <template #cell(daySem)="data">
                        {{ days.find(d => d.value === data.value).key }}
                    </template>
                </b-table>
            </div>
        </div>

        <!-- total -->
        <div 
            class="border-top border-bottom text-center"
            style="font-size: 20px;"
        >
            <span class="font-weight-bold">Total:</span>
            <span class="text-muted">€ {{Number(doc.totalAmount).toFixed(2)}}</span>
        </div>
    </div>
</div>
</template>