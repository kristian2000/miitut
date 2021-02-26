<script>
import {
  ArrowUpIcon,
  FacebookIcon,
  InstagramIcon,
  TwitterIcon,
  LinkedinIcon,
  MonitorIcon,
  HeartIcon,
  EyeIcon,
  BoldIcon,
  FeatherIcon,
  CodeIcon,
  UserCheckIcon,
  GitMergeIcon,
  SettingsIcon,
} from "vue-feather-icons";
// import { Carousel, Slide } from "vue-carousel";

import Navbar from "./navbar";
// import Switcher from "@/components/switcher";
import Footer from "./footer";
// import Team from "@/components/team";

/**
 * Page-aboutus component
 */
export default {
  data() {
    return {
      teamData: [
        {
          image: "images/client/01.jpg",
          name: "Ronny Jofra",
          designation: "C.E.O",
        },
        {
          image: "images/client/04.jpg",
          name: "Micheal Carlo",
          designation: "Director",
        },
        {
          image: "images/client/02.jpg",
          name: "Aliana Rosy",
          designation: "Manager",
        },
        {
          image: "images/client/03.jpg",
          name: "Sofia Razaq",
          designation: "Developer",
        },
      ],
    };
  },
  components: {
    Navbar,
    // Switcher,
    Footer,
    // Carousel,
    // Team,
    // Slide,
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    MonitorIcon,
    HeartIcon,
    EyeIcon,
    BoldIcon,
    FeatherIcon,
    CodeIcon,
    UserCheckIcon,
    GitMergeIcon,
    SettingsIcon,
  },
  created(){
      window.scroll(0, 0);

      // console.log(this.$route.params.category)
  }
};
</script>

<template>
  <div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half bg-dark d-table w-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <div class="page-next-level">
              <h4 class="title text-white">Categoria</h4>
              <div class="page-next">
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

    <!-- About Start -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
            <div class="position-relative">
              <img
                :src="`/images/categories/${this.$route.params.category}.jpg`"
                class="rounded img-fluid mx-auto d-block"
                alt=""
              />
              <div class="play-icon">
                <a
                  v-b-modal.modal
                  href="javascript:void(0);"
                  class="play-btn video-play-icon"
                >
                  <i
                    class="mdi mdi-play text-primary rounded-circle bg-white shadow"
                  ></i>
                </a>

                <b-modal
                  id="modal"
                  hide-footer
                  size="lg"
                  header-close-variant="white"
                  header-class="border-0"
                  content-class="border-0"
                  centered
                >
                  <vimeo-player
                    ref="player"
                    :player-width="750"
                    :player-height="450"
                    :video-id="287684225"
                  />
                </b-modal>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
            <div class="section-title ml-lg-4">
              <h4 class="title mb-4">Our Story</h4>
              <p class="text-muted">
                Start working with
                <span class="text-primary font-weight-bold">Landrick</span> that
                can provide everything you need to generate awareness, drive
                traffic, connect. Dummy text is text that is used in the
                publishing industry or by web designers to occupy the space
                which will later be filled with 'real' content. This is required
                when, for example, the final text is not yet available. Dummy
                texts have been in use by typesetters since the 16th century.
              </p>
              <a href="javascript:void(0)" class="btn btn-primary mt-3"
                >Buy Now <i class="mdi mdi-chevron-right"></i
              ></a>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->

      <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
              <h4 class="title mb-4">Key Features</h4>
              <p class="text-muted para-desc mx-auto mb-0">
                Start working with
                <span class="text-primary font-weight-bold">Landrick</span> that
                can provide everything you need to generate awareness, drive
                traffic, connect.
              </p>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <monitor-icon
                  class="fea icon-ex-md text-primary"
                ></monitor-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Fully Responsive</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <heart-icon class="fea icon-ex-md text-primary"></heart-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Browser Compatibility</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <eye-icon class="fea icon-ex-md text-primary"></eye-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Retina Ready</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <bold-icon class="fea icon-ex-md text-primary"></bold-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Based On Bootstrap 4</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <feather-icon
                  class="fea icon-ex-md text-primary"
                ></feather-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Feather Icons</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <code-icon class="fea icon-ex-md text-primary"></code-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Built With SASS</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <user-check-icon
                  class="fea icon-ex-md text-primary"
                ></user-check-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">W3c Valid Code</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <git-merge-icon
                  class="fea icon-ex-md text-primary"
                ></git-merge-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Flaticon Icons</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-4 col-md-6 mt-4 pt-2">
            <div
              class="media key-feature align-items-center p-3 rounded shadow"
            >
              <div class="icon text-center rounded-circle mr-3">
                <settings-icon
                  class="fea icon-ex-md text-primary"
                ></settings-icon>
              </div>
              <div class="media-body">
                <h4 class="title mb-0">Easy to customize</h4>
              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-12 mt-4 pt-2 text-center">
            <a href="javascript:void(0)" class="btn btn-primary"
              >See More <i class="mdi mdi-arrow-right"></i
            ></a>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->
    <!-- About End -->

    <!-- Team Start -->
    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
              <h4 class="title mb-4">Our Greatest Minds</h4>
              <p class="text-muted para-desc mx-auto mb-0">
                Start working with
                <span class="text-primary font-weight-bold">Landrick</span> that
                can provide everything you need to generate awareness, drive
                traffic, connect.
              </p>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->

        <!-- <Team :team-data="teamData" /> -->
      </div>
      <!--end container-->

      <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <div class="section-title">
              <h4 class="title mb-4">
                See everything about your employee at one place.
              </h4>
              <p class="text-muted para-desc mx-auto">
                Start working with
                <span class="text-primary font-weight-bold">Landrick</span> that
                can provide everything you need to generate awareness, drive
                traffic, connect.
              </p>

              <div class="mt-4">
                <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2"
                  >Get Started Now</a
                >
                <a
                  href="javascript:void(0)"
                  class="btn btn-outline-primary mt-2"
                  >Free Trial</a
                >
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
    <!-- Team End -->

    <!--end section-->
    <Footer />
    <!-- Footer End -->
  </div>
</template>

<style>
.modal-content {
  background-color: transparent;
}
</style>
