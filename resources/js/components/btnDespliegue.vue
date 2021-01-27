<script>
import {
    ChevronDownIcon,
    ChevronUpIcon,
} from 'vue-feather-icons';

export default {
    props: ['title', 'onClick'],
    components: {
        ChevronUpIcon,
        ChevronDownIcon
    },
    data(){
        return {
            show: true
        }
    },
    methods: {
        changeHandle(){
            if (this.onClick){
                this.onClick(!this.show);
            }
            this.show = !this.show
        }
    }
}
</script>

<template>
    <div class="my-2 d-flex justify-content-end">
        {{show ? 'Esconder' : 'Mostrar'}} {{ title }}
        <div class="ml-2" @click="changeHandle">
            <ChevronUpIcon
                class="border"
                style="cursor: pointer; border-radius: 50%"
                v-if="this.show"
            />
            <ChevronDownIcon
                class="border"
                style="cursor: pointer; border-radius: 50%"
                v-else
            />
        </div>
    </div>
</template>
