<script>
import categories from '../../../config/categories';

export default {
    data(){
        return {
            categories
        }
    },
    methods: {
        generatePath(service){
            return `/help/${service}/signup`;
        }
    }
};
</script>

<template>
    <div>
        <section class="d-flex align-items-center">
            <div class="container" >
                <div class="title-heading mt-4 text-center">
                    <h2 class="h1 mb-5 text-dark">¿Cúal servicio ofreceras?</h2>
                </div>

                <div class="row justify-content-center">
                    <div v-for="category in categories" :key="category.id" class="col-lg-3 col-md-4 col-6 text-center ">
                        <router-link :to="{ path: `/help/${category.id}/signup`}"  >
                            <div class="btn ">
                                <img
                                    v-bind:src="category.icon"
                                    alt=""
                                    class="avatar avatar-large"
                                    height="130"
                                >
                            </div>
                            <div class="text-muted text-center">
                                <h4>{{ category.label }}</h4>
                            </div>
                        </router-link>
                    </div>

                </div>
            </div>

        </section>
    </div>
</template>
