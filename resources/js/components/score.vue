<script>
import {
    StarIcon,
} from 'vue-feather-icons';

// import {  } from "@mdi/font";

export default {
    props: ['scoreStar'],
    data(){
        return {

        }
    },
    components: {
        StarIcon
    }
}
</script>

<template>
    <div>
        <span
            class="m-1"
            v-for="(star, index) in [1, 2, 3, 4, 5]" :key="index"
            v-bind="scoreStar"
        >
            <b-icon
                :icon="(index + 1) < Number(scoreStar) ? 'star-fill' : 'star'"
                variant="warning"
            />
        </span>
    </div>
</template>

<style>
</style>
