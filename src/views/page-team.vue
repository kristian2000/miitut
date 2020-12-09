<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
} from 'vue-feather-icons';
import {
    Carousel,
    Slide
} from 'vue-carousel';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-team component
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
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
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
                        <h4 class="title"> Team Members </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Team</li>
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

    <!-- Team Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title">Team #1</h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                            <small class="designation text-muted">C.E.O</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/04.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                            <small class="designation text-muted">Director</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                            <small class="designation text-muted">Manager</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/03.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                            <small class="designation text-muted">Developer</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/06.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Calvin Carlo</a></h5>
                            <small class="designation text-muted">C.E.O</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/05.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Juhi Chawla</a></h5>
                            <small class="designation text-muted">Director</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/07.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Arlo Walker</a></h5>
                            <small class="designation text-muted">Manager</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0">
                        <div class="position-relative">
                            <img src="images/client/08.jpg" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                        <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <twitter-icon class="fea icon-sm fea-social"></twitter-icon>
                                    </a></li>
                                <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                        <linkedin-icon class="fea icon-sm fea-social"></linkedin-icon>
                                    </a></li>
                            </ul>
                            <!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Randeep Huda</a></h5>
                            <small class="designation text-muted">Developer</small>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title">Team #2</h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/05.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Krista John</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/06.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Jack John</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/01.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Roger Jackson</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/02.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Luchhi Cina</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/03.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Sophiya Cally</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="media align-items-center">
                        <img src="images/client/04.jpg" class="avatar avatar-medium rounded-circle img-thumbnail" alt="">
                        <div class="content ml-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Johnny English</a></h5>
                            <small class="position text-muted">Professor</small>
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
    <!-- Team Start -->
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
