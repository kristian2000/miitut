<template>
    <div>
        <section class="d-flex align-items-center">
            <div class="container">
                <div class="mb-5 title-heading text-center">
                    <h2 class="h1 font-weight-bold">¿Qué Necesitas?</h2>
                </div>

                <div class="row ">
                    <router-link :to="{path: '/help/signup'}" class="col-md-6 col-12">
                        <div class="features text-center">
                            <div class="btn ">
                                <img src="assets/icon_help.png" alt="" height="300">
                            </div>

                            <div class="content">
                                <h3 class="title-2 text-dark  heading" >Ayuda</h3>
                            </div>
                        </div>
                    </router-link>

                    <!-- <router-link :to="{path: this.$router.currentRoute.path + '/work' + '/signup'}" class="col-6"> -->
                    <router-link :to="{path: '/work/categories'}" class="col-md-6 col-12">
                        <div class="features text-center">
                            <div class="btn">
                                <img src="assets/icon_work.png" alt="" height="300">
                            </div>

                            <div class="content ">
                                <h3 class="title-2 heading text-dark ">Trabajo</h3>
                            </div>
                        </div>
                    </router-link>

                </div>
            </div>
        </section>

    </div>
</template>
