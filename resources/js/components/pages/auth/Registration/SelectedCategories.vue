<script>
import categories from '../../../../config/categories';

export default {
    props: [
        'selectedItem'
    ],
    data(){
        return {
            categories
        }
    },
    created(){
         window.scroll(0, 0);
    }
};
</script>

<template>
    <div class="container" >
        <div class="title-heading mt-4 text-center">
            <h2 class="h1 mb-5 text-dark">¿Cúal servicio ofreceras?</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-6 text-center"
                v-for="category in categories" :key="category.id"
            >
                <div @click="selectedItem(category.id)">
                    <div class="btn ">
                        <img
                            v-bind:src="category.icon"
                            alt=""
                            height="130"
                        >
                    </div>
                    <div class="text-muted">
                        <p class="itemLabel">{{ category.label }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<style>
    .itemLabel {
        font-size: 1.5rem;
        line-height: 1;
        text-align: center;
    }

</style>

