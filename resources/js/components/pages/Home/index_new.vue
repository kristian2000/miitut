<script>
import {
  ArrowUpIcon,
  MailIcon,
  ArrowRightIcon,
  MapPinIcon,
  ArrowDownIcon,
} from "vue-feather-icons";
import { Carousel, Slide } from "vue-carousel";
// import flatPickr from "vue-flatpickr-component";
// import "flatpickr/dist/flatpickr.css";

// import Navbar from "@/components/navbar";
// import Switcher from "@/components/switcher";
// import Footer from "@/components/footer";
// import Testimonial from "@/components/testimonial";

import QuickSearch from '../../QuickSearch'
import PostLastest from '../../PostLastest'
import categoriesConfig from '../../../config/categories'

import CardCategory from '../../Cards/CardCategory.vue'

export default {
  components: {
    Carousel,
    Slide,
    ArrowUpIcon,
    MailIcon,
    ArrowRightIcon,
    MapPinIcon,
    ArrowDownIcon,
    QuickSearch,
    PostLastest,
    CardCategory
  },
  created(){
    
  },
  computed: {
      categories(){
          return this.$store.state.categories;
      },
      user(){
        return this.$store.state.user;
      },
      categoriesHome(){
        return categoriesConfig.filter(c => c.homeSelected);
      }
  },
  methods: {}
};
</script>

<template>
  <div>

    <!-- Hero Start -->
    <section
      class="bg-half-170 d-table w-100 pb-4"
      style="background: url('/images/travel/bg.jpg') center center"
    >
      <div class="bg-overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-6">
            <div class="title-heading mt-4">
              <h1 class="display-4 font-weight-bold text-white title-dark mb-3">
                Encuentra con Miitut la ayuda que necesitas para tu hogar <br />
              </h1>
              <p class="para-desc text-white-50">
                Niñeras, cuidadores de mascotas, limpieza doméstica, atención domiciliaria para personas mayores, dependientes y mucho más.
              </p>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
            <QuickSearch />
          </div>
          <!--end col-->
          
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->
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
    

    <section class="mt-5">
      <div class="container mb-5" style="min-height: 900px">

        <div class="text-center mb-4 ">
            <h2 class="font-weight-bold subtitle">Nuestras Categorías</h2>
            <p class="text-muted text-center">Encuentra a la persona que se ajusta a tus necesidades de forma cómoda y segura.</p>
        </div>

        <div class="container d-flex justify-content-center" style="max-width: 1200px">
            <div 
              class="row" 
              style=""
              >
                <div
                  class="col-lg-4 col-md-6 col-12"
                  v-for="category in categoriesHome" :key="category.id"
                >
                  <CardCategory 
                    :category="category"
                  />
                </div>

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/cuidadodeniños`)">
                    <img src="images/categories/babySitter.jpg" width="320px" height="220px" />
                    <h3 class="textColor mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/cuidadodemayores`)">
                    <img src="images/categories/eldercare.jpg" width="320px" height="220px" />
                    <h3 class="textColor mt-2 font-weight-bold">Cuidado de Mayores</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/cuidadodemascotas`)">
                    <img src="images/categories/petcare.jpg" width="320px" height="220px" />
                    <h3 class="textColor mt-2 font-weight-bold">Cuidado de Mascotas</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/serviciosdelimpieza`)">
                        <img src="images/categories/housekeeping.jpg" width="320" height="220px" />
                        <h3 class="textColor mt-2 font-weight-bold">Servicio de Limpieza</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/mantenimiento`)">
                        <img src="images/categories/maintenance.jpg" width="320px" height="220px" />
                        <h3 class="textColor mt-2 font-weight-bold">Mantenimiento</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/parasanitaria`)">
                        <img src="images/categories/parasanitary.jpg" width="320px" height="220px" />
                        <h3 class="textColor mt-2 font-weight-bold">Parasanitario</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->

                <!-- <div class="m-2 context-category" @click="$router.push(`/acerca-categoria/profesoresparticulares`)">
                    <img src="images/categories/tutoring.jpg" width="320px" height="220px" />
                    <h3 class="textColor mt-2 font-weight-bold">Profesores Particulares</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
                </div> -->
          </div>
        </div>

          <div class="col-lg-12 text-center col-md-4 mt-4 pt-2">
              <div 
                class="btn btn-primary"
                @click="$router.push(`/todas-categorias`)"  
              >
                  Ver Mas
              </div>
          </div>

      </div>
    </section>
      <!--end container-->

    <section class="bg-light p-4">
      <div class="container mt-100 mt-60 mb-5">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-6 order-1 order-md-2">
            <img
              src="/images/travel/3.jpg"
              class="img-fluid rounded shadow-md"
              alt=""
            />
          </div>
          <!--end col-->

          <div
            class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0"
          >
            <div class="section-title mr-lg-5">
              <h4 class="title mb-4">
                Encuentra trabajo <br />
                de forma rápida y sencilla
              </h4>
              <p class="text-muted">
                Si eres una persona activa en busca de trabajo, Miitut es tu web. Entra y regístrate, cientos de personas de tu ciudad necesitan tu ayuda.
              </p>
            </div>
            <div class="faq-content mt-4 pt-2">
              <div class="accordion" id="accordionExampleone">
                <b-card no-body class="mb-2 rounded border-bottom">
                  <b-card-header class="border-0 bg-light p-3 pr-5">
                    <a
                      class="faq position-relative text-dark"
                      v-b-toggle.accordion-1
                      href="javascript: void(0);"
                    >
                      <h6 class="title mb-0">
                       ¿Cómo puedes registrarte?
                      </h6>
                    </a>
                  </b-card-header>
                  <b-collapse
                    id="accordion-1"
                    visible
                    accordion="my-accordion"
                    role="tabpanel"
                  >
                    <b-card-body class="px-2 py-4">
                      <p class="text-muted mb-0 faq-ans">
                        Es tan fácil como hacer Click en el botón de “regístrate gratis”, selecciona “trabajo”, y pulsa en el servicio que quieres ofrecer. 
                        Continúa añadiendo tus datos y completa tu perfil. Si ofreces más servicios puedes añadirlos más adelante haciéndote Premium.
                      </p>
                    </b-card-body>
                  </b-collapse>
                </b-card>
                <b-card no-body class="mb-2 rounded border-bottom">
                  <b-card-header class="border-0 bg-light p-3 pr-5">
                    <a
                      class="faq position-relative text-dark"
                      v-b-toggle.accordion-2
                      href="javascript: void(0);"
                    >
                      <h6 class="title mb-0">
                        ¿Es segura esta plataforma digital?
                      </h6>
                    </a>
                  </b-card-header>
                  <b-collapse
                    id="accordion-2"
                    accordion="my-accordion"
                    role="tabpanel"
                  >
                    <b-card-body class="px-2 py-4">
                      <p class="text-muted mb-0 faq-ans">
                            Con nuestro servicio de identificación de usuarios ofrecemos seguridad tanto para el trabajador como a la persona que busca ayuda. 
                            <br />
                            Ofrecemos servicios de pago seguro al trabajador.
                      </p>
                    </b-card-body>
                  </b-collapse>
                </b-card>
                <b-card no-body class="mb-2 rounded border-bottom">
                  <b-card-header class="border-0 bg-light p-3 pr-5">
                    <a
                      class="faq position-relative text-dark"
                      v-b-toggle.accordion-3
                      href="javascript: void(0);"
                    >
                      <h6 class="title mb-0">
                        ¿Por qué hacerme premium?
                      </h6>
                    </a>
                  </b-card-header>
                  <b-collapse
                    id="accordion-3"
                    accordion="my-accordion"
                    role="tabpanel"
                  >
                    <b-card-body class="px-2 py-4">
                      <p class="text-muted mb-0 faq-ans">
                        Disfrutaras de mayores ventajas respecto a los otros usuarios. Posicionamiento, recomendaciones y multi-servicios.
                      </p>
                    </b-card-body>
                  </b-collapse>
                </b-card>
              </div>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
    </section>
      <!--end container-->

    <!-- SECCION-->
    <section class="section">

        <div class="text-center mb-4 team04">
            <h1 class="font-weight-bold subtitle">Últimas Noticias</h1>
        </div>

        <div class="container">
          <PostLastest />
        </div>

    </section>

  </div>
</template>


<style>
    .categoriesGroup {
        background: none
    }

    .seccion4 {
      background: white;
      margin-top: 20px;
      margin-bottom: 20px;
      min-height: 800px;
      padding:20px;
    }

    .subtitle {
      font-size: 2rem;
    }

    .new {
      margin: 10px;
    }

    .new img {
      width: 30vw;
      min-width: 200px;
      min-height: 150px;
      background: #eee;
    }

    .context-category {
      cursor: pointer;
    }

    .context-category h3 {
      text-align: center;
    }

    .context-category img {
      border-radius: 15px;
    }

    .context-category:hover {
      opacity: 0.6;
    }

  
</style>