<script>
export default {
    props: [
        'selectedOption'
    ],
    data(){
        return {

        }
    }
}
</script>
<template>
    <div>
        <section class="d-flex align-items-center">
            <div class="container">
                <div class="mb-5 title-heading text-center">
                    <h2 class="heading title">¿Qué Necesitas?</h2>
                </div>

                <div class="row ">
                    <div class="col-md-6 col-12" >
                        <div class="features text-center" @click="selectedOption('help')">
                            <div class="btn ">
                                <img src="assets/icon_help.png" alt="" height="300">
                            </div>

                            <div class="">
                                <h3 class="heading" >Ayuda</h3>
                            </div>
                        </div>
                    </div>

                    <!-- <router-link :to="{path: this.$router.currentRoute.path + '/work' + '/signup'}" class="col-6"> -->
                    <div class="col-md-6 col-12" >
                        <div class="features text-center" @click="selectedOption('work')">
                            <div class="btn">
                                <img src="assets/icon_work.png" alt="" height="300">
                            </div>

                            <div class=" ">
                                <h3 class="heading ">Trabajo</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</template>

<style scoped>
    section {
        height: 75vh;
        min-height: 500px;
    }
    .heading {
        font-size: 2rem;
        color: black;
        font-weight: 800;
    }
    .title {
        font-size: 3.5rem;

    }
</style>
