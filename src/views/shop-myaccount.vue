<script>
import {
    ArrowUpIcon,
    HeartIcon,
    EyeIcon,
    ShoppingCartIcon,
    KeyIcon,
    PhoneIcon,
    MailIcon,
    SettingsIcon,
    MapPinIcon
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Shop-myaccount component
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
        HeartIcon,
        EyeIcon,
        ShoppingCartIcon,
        KeyIcon,
        PhoneIcon,
        MailIcon,
        SettingsIcon,
        MapPinIcon
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
                        <h4 class="title"> My Profile / Account </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <router-link to="/index-shop">Shop</router-link>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                <div class="col-lg-4 col-md-5">
                    <div class="rounded p-4 border shadow">
                        <img src="images/client/01.jpg" class="avatar avatar-small rounded-pill" alt="">
                        <h6 class="mt-3">Calvin Carlo</h6>

                        <div class="media align-items-center mt-3">
                            <mail-icon class="fea icon-ex-md text-muted mr-3"></mail-icon>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Email :</h6>
                                <a href="javascript:void(0)" class="text-muted">calvincarlo0203@mail.com</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <map-pin-icon class="fea icon-ex-md text-muted mr-3"></map-pin-icon>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Location :</h6>
                                <a href="javascript:void(0)" class="text-muted">Beijing, China</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <phone-icon class="fea icon-ex-md text-muted mr-3"></phone-icon>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Cell No :</h6>
                                <a href="javascript:void(0)" class="text-muted">(+12) 1254-56-4896</a>
                            </div>
                        </div>

                        <ul class="list-unstyled mt-4 mb-0">
                            <li>
                                <key-icon class="fea icon-sm"></key-icon><a href="javascript:void(0)" class="text-primary h6 ml-2">Change your password</a>
                            </li>
                            <li class="mt-2">
                                <settings-icon class="fea icon-sm"></settings-icon><a href="javascript:void(0)" class="text-primary h6 ml-2">Change profile settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="mb-0">Order History</h5>
                    <div class="table-responsive mt-4 bg-white rounded shadow">
                        <table class="table table-center table-padding mb-0">
                            <thead>
                                <tr>
                                    <th class="py-3" style="min-width:20px "></th>
                                    <th class="py-3" style="min-width: 200px;">Product</th>
                                    <th class="text-center py-3" style="min-width: 160px;">Date</th>
                                    <th class="text-center py-3" style="min-width: 40px;">Qty</th>
                                    <th class="text-center py-3" style="min-width: 100px;">Amount</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="h6">1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/shop/product/s1.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                            <h6 class="mb-0 ml-3">T-Shirt</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">15/05/2018</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center font-weight-bold">$380.00</td>
                                </tr>
                                <tr>
                                    <td class="h6">2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/shop/product/s2.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                            <h6 class="mb-0 ml-3">Shopping Bag</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">10/07/2018</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center font-weight-bold">$210.00</td>
                                </tr>
                                <tr>
                                    <td class="h6">3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/shop/product/s3.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                            <h6 class="mb-0 ml-3">Watch</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">08/12/2018</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center font-weight-bold">$124.00</td>
                                </tr>
                                <tr>
                                    <td class="h6">4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/shop/product/s4.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                            <h6 class="mb-0 ml-3">Shoes</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">05/03/2019</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center font-weight-bold">$452.00</td>
                                </tr>
                                <tr>
                                    <td class="h6">5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/shop/product/s1.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                            <h6 class="mb-0 ml-3">T-Shirt</h6>
                                        </div>
                                    </td>
                                    <td class="text-center">15/05/2020</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center font-weight-bold">$450.00</td>
                                </tr>
                            </tbody>
                        </table>
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
                    <h5 class="mb-0">Trending Products</h5>
                </div>
                <!--end col-->

                <div class="col-12 mt-4">
                    <carousel id="client-four" class="owl-carousel owl-theme" dir="ltr" :per-page="4">
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
