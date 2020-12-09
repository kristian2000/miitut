<script>
import {
    ArrowUpIcon
} from 'vue-feather-icons';
import VueEasyLightbox from "vue-easy-lightbox";
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-portfolio component
 */
export default {
    data() {
        return {
            list: [{
                    image: 'images/work/20.jpg',
                    title: 'Iphone mockup',
                    type: 'Branding',
                    category: 'branding'
                },
                {
                    image: 'images/work/13.jpg',
                    title: 'Mockup Collection',
                    type: 'Mockup',
                    category: 'designing'
                },
                {
                    image: 'images/work/14.jpg',
                    title: 'Abstract images',
                    type: 'Abstract',
                    category: 'photography'
                },
                {
                    image: 'images/work/15.jpg',
                    title: 'Yellow bg with Books',
                    type: 'Books',
                    category: 'development'
                },
                {
                    image: 'images/work/16.jpg',
                    title: 'Company V-card',
                    type: 'V-card',
                    category: 'branding'
                },
                {
                    image: 'images/work/17.jpg',
                    title: 'Mockup box with paints',
                    type: 'Photogrphy',
                    category: 'branding'
                },
                {
                    image: 'images/work/18.jpg',
                    title: 'Coffee cup',
                    type: 'Cups',
                    category: 'designing'
                },
                {
                    image: 'images/work/19.jpg',
                    title: 'Pen and article',
                    type: 'Article',
                    category: 'development'
                },
            ],
            lightboximgs: [
                'images/work/20.jpg',
                'images/work/13.jpg',
                'images/work/14.jpg',
                'images/work/15.jpg',
                'images/work/16.jpg',
                'images/work/17.jpg',
                'images/work/18.jpg',
                'images/work/19.jpg'
            ],
            filterCategory: "all",
            visible: false,
            index: 0, // default: 0,
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        VueEasyLightbox
    },
    computed: {
        filteredData: function () {
            if (this.filterCategory === "all") {
                return this.list;
            } else {
                return this.list.filter(x => x.category === this.filterCategory);
            }
        }
    },
    methods: {
        updateFilter(filterName) {
            this.filterCategory = filterName;
        },
        showImg(index) {
            this.index = index;
            this.visible = true;
        }
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half-260 d-table w-100" style="background: url('images/work/bg-portfolio.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center mt-5 pt-4">
                        <h1 class="display-1 font-weight-bold mb-3">Minimal Portfolio</h1>
                        <p class="para-desc mx-auto h6">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
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
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Work Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <ul class="col container-filter list-unstyled categories-filter text-center mb-0" id="filter">
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('all')" :class="{'active':filterCategory == 'all'}">All</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('branding')" :class="{'active':filterCategory == 'branding'}">Branding</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('designing')" :class="{'active':filterCategory == 'designing'}">Designing</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('photography')" :class="{'active':filterCategory == 'photography'}">Photography</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('development')" :class="{'active':filterCategory == 'development'}">Development</a></li>
                </ul>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container-fluid">
            <div class="row container-grid projects-wrapper">
                <div class="col-lg-3 col-md-6 col-12 spacing mt-3 branding" v-for="(item, index) in filteredData" :key="index">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="javascript: void(0);" @click="() => showImg(index)" title="">
                                <img :src="item.image" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Iphone mockup</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Branding</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <vue-easy-lightbox :visible="visible" :index="index" :imgs="lightboximgs" @hide="visible = false"></vue-easy-lightbox>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Let's talk about your portfolio</h4>
                        <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>

                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary">Get Started Now</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end section-->
    <!-- Work End -->

    <!--end section-->
    <Footer />
    <!-- Footer End -->
    <Switcher />
    <!-- Back to top -->
    <a href="javascript: void(0);" class="btn btn-icon btn-soft-primary back-to-top" id="back-to-top" v-scroll-to="'#topnav'">
        <arrow-up-icon class="icons"></arrow-up-icon>
    </a>
    <!-- Back to top -->
</div>
</template>
