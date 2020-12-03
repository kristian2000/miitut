<script>
import {
    ArrowUpIcon,
    ArrowRightIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * page-cases component
 */
export default {
    data() {
        return {
            caseList: [{
                    image: 'images/work/1.jpg',
                    title: '200% Extended Facebook Reach',
                    variant: 'primary',
                    type: 'Business',
                },
                {
                    image: 'images/work/2.jpg',
                    title: 'SEO Success For Insulation',
                    variant: 'warning',
                    type: 'Marketing',
                },
                {
                    image: 'images/work/3.jpg',
                    title: 'Mobile-Friendly Campaigns',
                    variant: 'success',
                    type: 'Finance',
                },
                {
                    image: 'images/work/4.jpg',
                    title: 'HVAC SEO Campaign',
                    variant: 'info',
                    type: 'HR',
                },
                {
                    image: 'images/work/5.jpg',
                    title: 'Social Media & Small Business',
                    variant: 'primary',
                    type: 'Business',
                },
                {
                    image: 'images/work/6.jpg',
                    title: 'PPC Success For HVAC Company',
                    variant: 'warning',
                    type: 'Marketing',
                },
                {
                    image: 'images/work/7.jpg',
                    title: 'Ecommerce PPC Case Studys',
                    variant: 'success',
                    type: 'Finance',
                },
                {
                    image: 'images/work/8.jpg',
                    title: 'Iphone mockup',
                    variant: 'info',
                    type: 'HR',
                },
                {
                    image: 'images/work/9.jpg',
                    title: 'Iphone mockup',
                    variant: 'info',
                    type: 'HR',
                },
            ],
            filterCategory: "all",
            visible: false,
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        ArrowRightIcon
    },
    computed: {
        filteredData: function () {
            if (this.filterCategory === "all") {
                return this.caseList;
            } else {
                return this.caseList.filter(x => x.type === this.filterCategory);
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
    <Navbar :nav-light="true" />

    <!-- Hero Start -->
    <section class="bg-half d-table w-100" style="background: url('images/2.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white title-dark"> All Cases </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cases</li>
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

    <section class="section">
        <div class="container">
            <div class="row">
                <ul class="col container-filter list-unstyled categories-filter text-center mb-0" id="filter">
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('all')" :class="{'active':filterCategory == 'all'}">All</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('Business')" :class="{'active':filterCategory == 'Business'}">Business</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('Marketing')" :class="{'active':filterCategory == 'Marketing'}">Marketing</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('Finance')" :class="{'active':filterCategory == 'Finance'}">Finance</a></li>
                    <li class="list-inline-item"><a class="categories border d-block text-dark rounded" @click="updateFilter('HR')" :class="{'active':filterCategory == 'HR'}">Human Research</a></li>
                </ul>
            </div>
            <!--end row-->

            <div class="row projects-wrapper">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 business" v-for="(item, index) in filteredData" :key="index">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img :src="item.image" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" :class="`badge badge-${item.variant}`">{{item.type}}</a>
                                <h5 class="mt-3">
                                    <router-link to="/page-case-detail" class="text-dark title">{{item.title}}</router-link>
                                </h5>
                                <p class="text-muted">This is required when, for example, the final text is not yet available.</p>
                                <a href="javascript:void(0)" class="text-primary h6">Read More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
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
