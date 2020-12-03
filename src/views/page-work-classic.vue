<script>
import {
    ArrowUpIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-work-classic component
 */
export default {
    data() {
        return {
            workData: [{
                    image: 'images/work/4.jpg',
                    title: 'Yellow bg with Books',
                    type: 'Books',
                    category: "branding"
                },
                {
                    image: 'images/work/2.jpg',
                    title: 'Mockup Collection',
                    type: 'Mockup',
                    category: "designing"
                },
                {
                    image: 'images/work/3.jpg',
                    title: 'Abstract images',
                    type: 'Abstract',
                    category: "photography"
                },
                {
                    image: 'images/work/4.jpg',
                    title: 'Yellow bg with Books',
                    type: 'Books',
                    category: "development"
                },
                {
                    image: 'images/work/5.jpg',
                    title: 'Company V-card',
                    type: 'V-card',
                    category: "branding"
                },
                {
                    image: 'images/work/6.jpg',
                    title: 'Mockup box with paints',
                    type: 'Photography',
                    category: "branding"
                },
                {
                    image: 'images/work/7.jpg',
                    title: 'Coffee cup',
                    type: 'Cups',
                    category: "designing"
                },
                {
                    image: 'images/work/8.jpg',
                    title: 'Pen and article',
                    type: 'Article',
                    category: "development"
                },
                {
                    image: 'images/work/9.jpg',
                    title: 'White mockup box',
                    type: 'Color',
                    category: "photography"
                },
                {
                    image: 'images/work/10.jpg',
                    title: 'Logo Vectors',
                    type: 'Logos',
                    category: "photography"
                },
                {
                    image: 'images/work/11.jpg',
                    title: 'Black and white T-shirt',
                    type: 'Clothes',
                    category: "branding"
                },
                {
                    image: 'images/work/12.jpg',
                    title: "Yellow bg with cellphone",
                    type: 'Cellphone',
                    category: "branding"
                }
            ],
            filterCategory: "all",
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon
    },
    computed: {
        filteredData: function () {
            if (this.filterCategory === "all") {
                return this.workData;
            } else {
                return this.workData.filter(x => x.category === this.filterCategory);
            }
        }
    },
    methods: {
        updateFilter(filterName) {
            this.filterCategory = filterName;
        },
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
                        <h4 class="title"> Work Classic </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item"><a href="#">Work</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Classic</li>
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

            <div class="row projects-wrapper">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 branding" v-for="(item,index) in filteredData" :key="index">

                    <div class="card border-0 work-container work-classic">
                        <div class="card-body p-0">
                            <router-link to="/page-work-detail"><img :src="item.image" class="img-fluid rounded work-image" alt=""></router-link>
                            <div class="content pt-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">{{item.title}}</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">{{item.type}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
