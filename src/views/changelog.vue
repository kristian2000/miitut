<script>
import {
    ArrowUpIcon,
    ArrowRightCircleIcon,
    CornerDownRightIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Changelog-list
 */
export default {
    data() {
        return {

        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        ArrowRightCircleIcon,
        CornerDownRightIcon
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
                        <h4 class="title"> Changelog </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Changelog</li>
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
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Changelog Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="p-4 shadow rounded border">
                        <!-- v1.0 Start -->
                        <h5 class="mt-5">Version <span class="text-success">2.5.1</span> - 27th September 2020</h5>
                        <ul class="list-unstyled">
                            <li class="text-muted my-2 ml-3">
                                <arrow-right-circle-icon class="fea icon-sm mr-2"></arrow-right-circle-icon>Initial Released
                            </li>
                        </ul>
                        <!-- v1.0 End -->

                        <div class="mt-4">
                            <a href="#" class="btn btn-primary">Purchase Now</a>
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
    <!-- Changelog End -->
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
