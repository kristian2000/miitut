<script>
import {
    StarIcon,
} from 'vue-feather-icons';

// import {  } from "@mdi/font";

export default {
    props: ['scoreStar', 'sizeStar'],
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
                :class="`star-${sizeStar}`"
            />
        </span>
    </div>
</template>

<style>
    .star-lg {
        width: 50px; 
        height: 50px;
    }

    .star-sm {
        width: 25px;
        height: 25px;
    }
</style>
