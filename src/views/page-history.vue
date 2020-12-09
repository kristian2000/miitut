<script>
import {
    ArrowUpIcon,
    MonitorIcon,
    HeartIcon,
    EyeIcon,
    BoldIcon,
    FeatherIcon,
    CodeIcon,
    UserCheckIcon,
    GitMergeIcon,
    SettingsIcon,
    StarIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-history component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        MonitorIcon,
        HeartIcon,
        EyeIcon,
        BoldIcon,
        FeatherIcon,
        CodeIcon,
        UserCheckIcon,
        GitMergeIcon,
        SettingsIcon,
        StarIcon
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
                        <h4 class="title"> Company Story </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Company</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">History</li>
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
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="main-icon rounded-pill text-primary text-center mt-4 pt-2">
                        <star-icon class="fea icon-md-sm"></star-icon>
                    </div>
                    <div class="timeline-page pt-2 position-relative">
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2002</div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="images/blog/01.jpg" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="mb-0 text-capitalize">Founding</h5>
                                            <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="images/blog/02.jpg" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="mb-0 text-capitalize">Partnership</h5>
                                            <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">2006</div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2012</div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="images/blog/03.jpg" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="mb-0 text-capitalize">Secuirty</h5>
                                            <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="images/blog/04.jpg" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="mb-0 text-capitalize">Branch</h5>
                                            <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">2013</div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2016</div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-left">
                                        <img src="images/blog/05.jpg" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="mb-0 text-capitalize">Global</h5>
                                            <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-left">
                                        <img src="images/blog/06.jpg" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="mb-0 text-capitalize">Branches</h5>
                                            <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-left">2018</div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end timeline item-->
                    </div>
                    <!--end timeline page-->
                    <!-- TIMELINE END -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>

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
