<script>
import {
    ArrowUpIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-work-grid component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon
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
                        <h4 class="title"> Work Grid </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item"><a href="#">Work</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Grid</li>
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
            <div class="row projects-wrapper">
                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 branding">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/1.jpg" title="">
                                <img src="images/work/1.jpg" class="img-fluid" alt="work-image">
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

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 designing">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/2.jpg" title="">
                                <img src="images/work/2.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Mockup Collection</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 photography">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/3.jpg" title="">
                                <img src="images/work/3.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Abstract images</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Abstract</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 development">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/4.jpg" title="">
                                <img src="images/work/4.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Yellow bg with Books</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Books</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 branding">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/5.jpg" title="">
                                <img src="images/work/5.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Company V-card</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">V-card</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 branding">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/6.jpg" title="">
                                <img src="images/work/6.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Mockup box with paints</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Photography</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 designing">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/7.jpg" title="">
                                <img src="images/work/7.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Coffee cup</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Cups</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 development">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/8.jpg" title="">
                                <img src="images/work/8.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Pen and article</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Article</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 photography">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/9.jpg" title="">
                                <img src="images/work/9.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">White mockup box</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Color</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 photography">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/10.jpg" title="">
                                <img src="images/work/10.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Logo Vectors</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Logos</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 branding">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/11.jpg" title="">
                                <img src="images/work/11.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Black and white T-shirt</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Clothes</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mb-4 pb-2 branding">
                    <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a class="mfp-image d-inline-block" href="images/work/12.jpg" title="">
                                <img src="images/work/12.jpg" class="img-fluid" alt="work-image">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0">
                                    <router-link to="/page-work-detail" class="text-dark title">Yellow bg with cellphone</router-link>
                                </h5>
                                <h6 class="text-muted tag mb-0">Cellphone</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <!-- PAGINATION START -->
                <div class="col-12">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                    </ul>
                </div>
                <!--end col-->
                <!-- PAGINATION END -->
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
