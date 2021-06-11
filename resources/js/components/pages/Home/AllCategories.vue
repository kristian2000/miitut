<script>
import {
  ArrowUpIcon
} from "vue-feather-icons";

import categories from '../../../config/categories'
import QuickSearch from '../../QuickSearch'

export default {
  data() {
    return {
      infoCategory: {},
    };
  },
  computed: {
      categories(){
          return this.$store.state.categories;
      }
  },
  components: {
    QuickSearch
  },
  created(){
      window.scroll(0, 0);
      const category = categories
        .filter(c => c.id === this.$route.params.category)[0]

      this.infoCategory = category;

      // console.log(category)

      // console.log(this.$route.params.category)
  }
};
</script>

<template>
  <div class="mb-5">
    <!-- Hero Start -->
    <section 
      class="bg-half bg-dark d-table w-100"
      style="background: url('/images/travel/bg.jpg') center center"
    >
    <div class="bg-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <div class="page-next-level">
              <!-- <h4 class="title text-white">
                Todas las Categorias
              </h4> -->

              <div class="mt-3 d-flex justify-content-center">
                  <div class="col-md-6" v-if="categories.length">
                    <QuickSearch  
                    />
                  </div>
              </div>

            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
      <div class="shape overflow-hidden text-white">
        <svg
          viewBox="0 0 2880 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
    </div>
    <!--Shape End-->

        <div class="text-center mb-4 mt-5">
            <h2 id="titlecolor" class="h1 font-weight-bold">Nuestras Categorías</h2>
        </div>

        <div class="container-fluid categoriesGroup mt-4" style="max-width: 1200px">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="m-2">
                    <img src="/images/categories/babySitter.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Niñera</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2" >
                    <img src="/images/categories/eldercare.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Cuidado de Mayores</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/petcare.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Cuidado de Mascotas</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2" >
                        <img src="/images/categories/housekeeping.jpg" width="320" height="220px" />
                        <div class="img-boxText">
                            <h3 class="mt-2 font-weight-bold">Servicio de Limpieza</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
                </div>


                <div class="m-2" >
                        <img src="/images/categories/parasanitary.jpg" width="320px" height="220px" />
                        <div class="img-boxText">
                            <h3 class="mt-2 font-weight-bold">Parasanitario</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
                </div>

                <div class="m-2" >
                    <img src="/images/categories/tutoring.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Profesores Particulares</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/maintenance.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Mantenimiento</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/kitchen.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Servicios de Cocina</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/personalTraining.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Entrenamiento personal a domicilio</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/elderlycare.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Atención domiciliaria</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/repair.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Servicios de Reparación</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/garder.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Jardinería y piscinas</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <div class="m-2">
                    <img src="/images/categories/hairdressing.jpg" width="320px" height="220px" />
                    <div class="img-boxText">
                        <h3 class="mt-2 font-weight-bold">Servicios de peluquería</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

          </div>
        </div>

  </div>
</template>

<style>
.modal-content {
  background-color: transparent;
}
.categoriesGroup {
    background: none;
}
.img-boxText {
    max-width: 320px;
}
</style>
