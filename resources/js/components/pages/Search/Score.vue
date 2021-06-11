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
    <span class="d-flex justify-content-center">
        <ul 
            class="list-unstyled mb-1 mt-2"
            v-for="(star, index) in [1, 2, 3, 4, 5]" :key="index"
            v-bind="scoreStar"
        >
            <li class="list-inline-item">
                <i 
                    :class="`mdi ${ (index + 1) < Number(scoreStar) ? 
                        'mdi-star' 
                        : 
                        'mdi-star-outline'
                    } text-warning`" 
                    
                />
            </li>
        </ul>
    </span>
</template>

<style>
    .star-lg {
        width: 50px; 
        height: 50px;
    }
</style>
