<script>
import {
    ArrowUpIcon,
    HeartIcon,
    EyeIcon,
    ShoppingCartIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Shop-product-detail component
 */
export default {
    data() {
        return {
            countval: 1
        }
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        Carousel,
        Slide,
        ArrowUpIcon,
        VueSlickCarousel,
        HeartIcon,
        EyeIcon,
        ShoppingCartIcon
    },
    methods: {
        increment() {
            this.countval++
        },
        decrement() {
            this.countval--
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
                        <h4 class="title"> Branded T-Shirts </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <router-link to="/index-shop">Shop</router-link>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
            <div class="row align-items-center">
                <div class="col-md-5">
                    <VueSlickCarousel ref="c1" :arrows="false" :focusOnSelect="true" :asNavFor="$refs.c2" :dots="false" :autoplay="true" :fade="true">
                        <div><img src="images/shop/product/single-1.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/shop/product/single-2.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/shop/product/single-3.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/shop/product/single-4.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/shop/product/single-5.jpg" class="img-fluid rounded" alt=""></div>
                        <div><img src="images/shop/product/single-6.jpg" class="img-fluid rounded" alt=""></div>
                    </VueSlickCarousel>

                    <VueSlickCarousel :asNavFor="$refs.c1" :arrows="false" :focusOnSelect="true" ref="c2" class="slick-slide" :slidesToShow="3">
                        <div><img src="images/shop/product/single-1.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/shop/product/single-2.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/shop/product/single-3.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/shop/product/single-4.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/shop/product/single-5.jpg" class="img-fluid" alt=""></div>
                        <div><img src="images/shop/product/single-6.jpg" class="img-fluid" alt=""></div>
                    </VueSlickCarousel>
                </div>
                <!--end col-->

                <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-md-4">
                        <h4 class="title">Branded T-Shirts</h4>
                        <h5 class="text-muted">$21.00 <del class="text-danger ml-2">$25.00</del> </h5>
                        <ul class="list-unstyled text-warning h5 mb-0">
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        </ul>

                        <h5 class="mt-4 py-2">Overview :</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>

                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span> Our Talented &amp; Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span> Create your own skin to match your brand</li>
                        </ul>

                        <div class="row mt-4 pt-2">
                            <div class="col-lg-6 col-12">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">Your Size:</h6>
                                    <ul class="list-unstyled mb-0 ml-3">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">S</a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">M</a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">L</a></li>
                                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <div class="d-flex shop-list align-items-center">
                                    <h6 class="mb-0">Quantity:</h6>
                                    <div class="ml-3">
                                        <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold" @click="decrement">
                                        <input type="text" v-model="countval" step="1" min="1" name="quantity" value="1" title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold ml-1">
                                        <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold ml-1" @click="increment">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                            <router-link to="/shop-cart" class="btn btn-soft-primary ml-2">Add to Cart</router-link>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">Related Products</h5>
                </div>
                <!--end col-->

                <div class="col-12 mt-4">
                    <carousel id="client-four" class="owl-carousel owl-theme" dir="ltr" :per-page="3">
                        <Slide>
                            <div class="card shop-list border-0 position-relative overflow-hidden m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <router-link to="/shop-product-detail"><img src="images/shop/product/s1.jpg" class="img-fluid" alt=""></router-link>
                                    <router-link to="/shop-product-detail" class="overlay-work">
                                        <img src="images/shop/product/s-1.jpg" class="img-fluid" alt="">
                                    </router-link>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                                <heart-icon class="icons"></heart-icon>
                                            </a></li>
                                        <li class="mt-2"><a href="shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                                <eye-icon class="icons"></eye-icon>
                                            </a></li>
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
                        </Slide>
                        <Slide>
                            <div class="card shop-list border-0 position-relative overflow-hidden m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <router-link to="/shop-product-detail"><img src="images/shop/product/s3.jpg" class="img-fluid" alt=""></router-link>
                                    <router-link to="/shop-product-detail" class="overlay-work">
                                        <img src="images/shop/product/s-3.jpg" class="img-fluid" alt="">
                                    </router-link>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                                <heart-icon class="icons"></heart-icon>
                                            </a></li>
                                        <li class="mt-2"><a href="shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                                <eye-icon class="icons"></eye-icon>
                                            </a></li>
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
                        </Slide>
                        <Slide>
                            <div class="card shop-list border-0 position-relative overflow-hidden m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <router-link to="/shop-product-detail"><img src="images/shop/product/s6.jpg" class="img-fluid" alt=""></router-link>
                                    <router-link to="/shop-product-detail" class="overlay-work">
                                        <img src="images/shop/product/s-6.jpg" class="img-fluid" alt="">
                                    </router-link>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger">
                                                <heart-icon class="icons"></heart-icon>
                                            </a></li>
                                        <li class="mt-2"><a href="shop-product-detail" class="btn btn-icon btn-pills btn-soft-primary">
                                                <eye-icon class="icons"></eye-icon>
                                            </a></li>
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
                        </Slide>
                        <Slide>
                            <div class="card shop-list border-0 position-relative overflow-hidden m-2">
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
                        </Slide>
                        <Slide>
                            <div class="card shop-list border-0 position-relative overflow-hidden m-2">
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
                        </Slide>
                    </carousel>
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
