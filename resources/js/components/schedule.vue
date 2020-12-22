<script>
import {
    CheckIcon
} from 'vue-feather-icons';

const days = ['LUN', 'MAR', 'MIE', 'JUE', 'VIE', 'SAB', 'DOM']
const hours = ['6h / 8h', '6h / 12h', '12h / 14h', '14h / 16h', '16h / 20h', '20h / 24h']

export default {
    props: [
        'sheduleData',
        'setSheduleData',
        'changeHandleServer',
        'dataInitial'
    ],
    data(){
        return {
            days: days,
            columns: []
        }
    },
    created(){
        this.valuesInitial();
    },
    components: {
        CheckIcon
    },
    methods: {
        valuesInitial (){

            let values = hours.map( hour => {
                const data = this.dataInitial[hour];
                if ( this.dataInitial && data){
                    console.log('data', data)
                    return {
                        hours: hour,
                        days: data.days.map( day => {
                            if (data.days.includes(day)){
                                return { key: hour, value: true}
                            }
                            return { key: day, value: false }
                        })
                    }
                }
                return {
                    hours: hour,
                    days: days.map( day => ({ key: day, value: false }))
                }
            })

    // console.log('valuesINicialesSchedule', values)
            this.setSheduleData(values)
        },
        async handleChange(day, key){
            // Cambia la seleccion de un dia
            const values = this.sheduleData.map ( item => {
                if (item.hours === key){
                    return {
                        ...item,
                        days: item.days.map( d => {
                            if (d.key === day.key){
                                return { ...d, value: !d.value}
                            }
                            return d;
                        })
                    }
                }
                return item;
            })

            if (this.changeHandleServer != null){
                // Modificaciones en el server
               const response = await this.changeHandleServer({
                   day: day.key,
                   value: day.value,
                   hours: key
               })
               console.log(response)
                // Modificaciones en el front
                if (response.status === 200){
                    this.setSheduleData(values)
                }

            }else {
                // Modificaciones en el front
                this.setSheduleData(values)
                // console.log(values)
            }
        }
    }
}
</script>
<template>
    <div>
        <table style="width: 100%">
            <thead>
                <tr>
                    <th colspan="3" style="background: none; border: none;"></th>
                    <th v-for="day in days" :key="day">
                        {{day}}
                    </th>
                </tr>
            </thead>
            <tbody style="">
                <tr v-for="item in sheduleData" :key="item.hours">
                    <td colspan="3" style="background: #eee;">{{item.hours}}</td>
                    <td style="" v-for="(i, index) in item.days" :key="index" @click="handleChange(i, item.hours )" >
                        <CheckIcon v-if="i.value"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

    td {
        border: 1px solid #ccc;
        cursor: pointer;
        height: 30px;
    }
    th {
        background: #eee;
        border: 1px solid #ccc;
    }
</style>
