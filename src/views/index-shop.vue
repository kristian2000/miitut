<script>
import {
    ArrowUpIcon,
    EyeIcon,
    HeartIcon,
    ShoppingCartIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Index-shop component
 */
export default {
    data() {
        return {
            slide: 0,
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        Carousel,
        Slide,
        EyeIcon,
        HeartIcon,
        ShoppingCartIcon
    }
}
</script>

<template>
<div>
    <Navbar />
    <!-- Hero Start -->
    <section class="main-slider">
        <b-carousel fade id="carousel-1" v-model="slide" class="slides">
            <b-carousel-slide class="bg-slider slider-rtl-2 d-flex align-items-center" :style="{'background':'url(' + require('../../public/images/shop/bg2.jpg')+ ')'}">
                <div class="container">
                    <div class="row mt-5 text-dark">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading mt-4">
                                <h1 class="display-4 title-white font-weight-bold mb-3">New Accessories <br> Collections</h1>
                                <p class="para-desc text-muted para-dark">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </b-carousel-slide>
            <b-carousel-slide class="bg-slider slider-rtl-2 d-flex align-items-center" :style="{'background':'url(' + require('../../public/images/shop/bg1.jpg')+ ')'}">
                <div class="container">
                    <div class="row mt-5 text-dark">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading mt-4">
                                <h1 class="display-4 title-white font-weight-bold mb-3">Headphones <br> Speaker</h1>
                                <p class="para-desc text-muted para-dark">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </b-carousel-slide>
            <b-carousel-slide class="bg-slider slider-rtl-2 d-flex align-items-center" :style="{'background':'url(' + require('../../public/images/shop/bg3.jpg')+ ')'}">
                <div class="container">
                    <div class="row mt-5 text-dark">
                        <div class="col-lg-7 col-md-7">
                            <div class="title-heading mt-4">
                                <h1 class="display-4 title-white font-weight-bold mb-3">Modern Furniture, <br> Armchair</h1>
                                <p class="para-desc text-muted para-dark">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </b-carousel-slide>
        </b-carousel>

    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Features Start -->
    <div class="container-fluid mt-5 pt-2">
        <div class="row">
            <div class="col-md-4">
                <div class="py-5 rounded shadow" style="background: url('images/shop/fea1.jpg') top center;">
                    <div class="p-4">
                        <h3>Summer <br> Collection</h3>
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="py-5 rounded shadow" style="background: url('images/shop/fea2.jpg') top center;">
                    <div class="p-4">
                        <h3>Summer <br> Collection</h3>
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="py-5 rounded shadow" style="background: url('images/shop/fea3.jpg') top center;">
                    <div class="p-4">
                        <h3>Summer <br> Collection</h3>
                        <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- Features End -->

    <!-- Start -->
    <section class="section">
        <!-- Start Most Viewed Products -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">Most Viewed Products</h5>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s1.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-1.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Branded T-Shirt</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del class="text-danger ml-2">$21.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s2.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-2.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Shopping Bag</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$21.00 <del class="text-danger ml-2">$25.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s3.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-3.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Elegent Watch</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$5.00 <span class="text-success ml-1">30% off</span> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s4.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-4.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Casual Shoes</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del class="text-danger ml-2">$22.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s5.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-5.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Earphones</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$3.00</h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s6.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-6.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Elegent Mug</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$4.50 <del class="text-danger ml-2">$6.50</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s7.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-7.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Sony Headphones</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$9.99 <span class="text-success ml-2">20% off</span> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s8.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-8.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Wooden Stools</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$22.00 <del class="text-danger ml-2">$25.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- End Most Viewed Product -->

        <!-- Start Catagories -->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">Top Categories</h5>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                <i class="uil uil-user-md"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Fashion</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                <i class="uil uil-tennis-ball"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Sports</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                <i class="uil uil-headphones"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Music</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                <i class="uil uil-bed-double"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Furniture</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                <i class="uil uil-airplay"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Electronics</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                <i class="uil uil-car-sideview"></i>
                            </div>
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Motors</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- Start Catagories -->

        <!-- Start Popular -->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">Popular Products</h5>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s9.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-9.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Coffee Cup / Mug</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del class="text-danger ml-2">$21.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s10.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-10.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Sunglasses</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$21.00 <del class="text-danger ml-2">$25.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s11.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-11.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Loafer Shoes</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$5.00 <span class="text-success ml-1">30% off</span> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s12.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-12.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">T-Shirts</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del class="text-danger ml-2">$22.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- End Popular -->

        <!-- Start CTA -->
        <div class="container-fluid mt-100 mt-60">
            <div class="rounded py-5" style="background: url('images/shop/cta.jpg') fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2 class="font-weight-bold mb-4">End of Season Clearance <br> Sale upto 30%</h2>
                                <p class="para-desc para-white text-muted mb-0">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
        <!--end container-->
        <!-- End CTA -->

        <!-- Start Recent -->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">Recent Products</h5>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s13.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-13.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Wooden Chair</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del class="text-danger ml-2">$21.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s14.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-14.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Women Block Heels</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$21.00 <del class="text-danger ml-2">$25.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s15.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-15.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">T-Shirts</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$5.00 <span class="text-success ml-1">30% off</span> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative overflow-hidden">
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <router-link to="/shop-product-detail"><img src="images/shop/product/s16.jpg" class="img-fluid" alt=""></router-link>
                            <router-link to="/shop-product-detail" class="overlay-work">
                                <img src="images/shop/product/s-16.jpg" class="img-fluid" alt="">
                            </router-link>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                        <heart-icon class="icons"></heart-icon>
                                    </a></li>
                                <li class="mt-2">
                                    <router-link to="/shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                        <eye-icon class="icons"></eye-icon>
                                    </router-link>
                                </li>
                                <li class="mt-2">
                                    <router-link to="/shop-cart" class="btn btn-icon btn-pills btn-soft-warning">
                                        <shopping-cart-icon class="icons"></shopping-cart-icon>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <router-link to="/shop-product-detail" class="text-dark product-name h6">Clock</router-link>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small font-italic mb-0 mt-1">$18.00 <del class="text-danger ml-2">$22.00</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!-- End Recent -->
    </section>
    <!--end section-->
    <!-- End -->
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

<style scoped>
::v-deep .carousel-caption {
    display: contents;
    text-align: left;
}
</style>
