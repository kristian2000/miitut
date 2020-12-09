<script>
import {
    ArrowUpIcon,
    CameraIcon
} from 'vue-feather-icons';
import VueEasyLightbox from "vue-easy-lightbox";

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-work-masonry component
 */
export default {
    data() {
        return {
            list: [{
                    image: 'images/work/13.jpg',
                    title: 'Iphone mockup',
                    text: 'Branding',
                    category: 'branding'
                },
                {
                    image: 'images/work/21.jpg',
                    title: 'Mockup Collection',
                    text: 'Mockup',
                    category: 'designing'
                },
                {
                    image: 'images/work/14.jpg',
                    title: 'Abstract images',
                    text: 'Abstract',
                    category: 'photography'
                },
                {
                    image: 'images/work/22.jpg',
                    title: 'Yellow bg with Books',
                    text: 'Books',
                    category: 'development'
                },
                {
                    image: 'images/work/16.jpg',
                    title: 'Company V-card',
                    text: 'V-card',
                    category: 'branding'
                },
                {
                    image: 'images/work/15.jpg',
                    title: 'Coffee cup',
                    text: 'Cups',
                    category: 'designing'
                },
                {
                    image: 'images/work/23.jpg',
                    title: 'Mockup box with paints',
                    text: 'Photography',
                    category: 'branding'
                },
                {
                    image: 'images/work/17.jpg',
                    title: 'Pen and article',
                    text: 'Article',
                    category: 'development'
                },
                {
                    image: 'images/work/24.jpg',
                    title: 'White mockup box',
                    text: 'Color',
                    category: 'photography'
                },
                {
                    image: 'images/work/18.jpg',
                    title: 'Logo Vectors',
                    text: 'Logos',
                    category: 'photography'
                },
                {
                    image: 'images/work/19.jpg',
                    title: 'Black and white T-shirt',
                    text: 'Clothes',
                    category: 'branding'
                }
            ],
            filterCategory: "all",
            visible: false,
            index: 0, // default: 0,
            lightboximgs: [
                'images/work/13.jpg',
                'images/work/21.jpg',
                'images/work/14.jpg',
                'images/work/22.jpg',
                'images/work/16.jpg',
                'images/work/15.jpg',
                'images/work/23.jpg',
                'images/work/17.jpg',
                'images/work/24.jpg',
                'images/work/19.jpg'
            ],
        }
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
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        CameraIcon,
        VueEasyLightbox
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
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> Work Masonry </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item"><a href="#">Work</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Masonry</li>
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
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
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

            <masonry class="projects-wrapper mt-4 pt-2" :cols="{default: 4, 1000: 3, 700: 2, 400: 1}">
                <div class="px-0 item" v-for="(item, index) in filteredData" :key="index">
                    <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded-0">
                        <div class="card-body p-0">
                            <img :src="item.image" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-white title">{{item.title}}</router-link>
                                </h5>
                                <h6 class="text-light tag mb-0">{{item.text}}</h6>
                            </div>
                            <div class="icons text-center">
                                <a @click="() => showImg(index)" class="text-primary work-icon bg-white d-inline-block rounded-pill mfp-image">
                                    <camera-icon class="fea icon-sm"></camera-icon>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-->
                <vue-easy-lightbox :visible="visible" :index="index" :imgs="lightboximgs" @hide="visible = false"></vue-easy-lightbox>
            </masonry>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
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
