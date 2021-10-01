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
      },
      categoryInfo(){
        const category = categories
        .filter(c => c.label.replaceAll(' ', '').toLowerCase() === this.$route.params.category)[0]

        return category;
      }
  },
  components: {
    QuickSearch
  },
  created(){

    this.init();
  },
  updated(){
    this.init();
  },
  methods: {
    init(){
      window.scroll(0, 0);
      const category = categories
        .filter(c => c.label.replaceAll(' ', '').toLowerCase() === this.$route.params.category)[0]
  
      this.infoCategory = category;

      //console.log('category', this.infoCategory)
    }
  }

};
</script>

<template>
  <div>
    <!-- Hero Start -->
    <section 
      class="bg-half-170 d-table w-100 pb-4 bg-cover"
      :style="`background-image: url(${categoryInfo.pathImgHeader});`"
    >
    <div class="bg-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <div class="page-next-level">
              <h4 class="title text-white">
                {{ categoryInfo.label }}
              </h4>

              <div class="mt-3 d-flex justify-content-center">
                  <div class="col-md-6" v-if="categories.length">
                      <QuickSearch  
                        :categorySelected="categoryInfo"
                        :disabled="true"
                        :key="this.infoCategory.label"
                      />
                  </div>
              </div>

              <!-- <div class="page-next">
                <nav aria-label="breadcrumb" class="d-inline-block">
                  <ul class="breadcrumb bg-white rounded shadow mb-0">
                    <li class="breadcrumb-item">
                      <router-link to="/">Landrick</router-link>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      About Us
                    </li>
                  </ul>
                </nav>
              </div> -->
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

    <!-- About Start -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
            <div class="position-relative">
              <img
                :src="`/images/categories/${categoryInfo.id}.jpg`"
                class="rounded img-fluid mx-auto d-block"
                alt=""
              />
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
            <div class="section-title ml-lg-4">
              <h4 class="mb-4"> {{ categoryInfo.desc.title }} </h4>
              <p class="text-muted">{{ categoryInfo.desc.text }}</p>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </section>

  </div>
</template>

<style>
.modal-content {
  background-color: transparent;
}
.bg-cover {
  background-size: cover;
}
</style>
