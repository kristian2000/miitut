<script>
import {
    ArrowUpIcon,
    ArrowRightIcon
} from 'vue-feather-icons';

import Navbar from  "./navbar";
// import Switcher from "@/components/switcher";
import Footer from "./footer";

/**
 * Page-aboutus-two component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        // Switcher,
        Footer,
        ArrowUpIcon,
        ArrowRightIcon
    },
}
</script>

<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section class="bg-half d-table w-100" style="background: url('/images/company/aboutus.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level title-heading">
                        <h1 class="text-white title-dark"> Conócenos </h1>
                        <p class="text-white-50 para-desc mb-0 mx-auto">
                            Somos familias que han pasado por las mismas situaciones en la que te encuentras ahora mismo.
                        </p>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Miitut</router-link>
                                    </li>
                                    <li class="breadcrumb-item">Quienes Somos</li>
                                    <li class="breadcrumb-item active" aria-current="page">Conócenos</li>
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
            <div class="row align-items-center" id="counter">
                <div class="col-md-6">
                    <img src="/images/company/about2.png" class="img-fluid" alt="">
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="ml-lg-4">
                        <!-- <div class="d-flex mb-4">
                            <span class="text-primary h1 mb-0"><span class="counter-value display-1 font-weight-bold" data-count="15">0</span>+</span>
                            <span class="h6 align-self-end ml-2">Years <br> Experience</span>
                        </div> -->
                        <div class="section-title">
                            <h4 class="title mb-4">¿Quiénes Somos?</h4>
                            <p class="text-muted">
                                Miitut es una plataforma digital de atención domiciliaria que facilita el contacto entre las familias y las personas que ofrecen sus servicios. Somos conscientes de lo complicado que puede ser el día a día, a veces por falta de tiempo, otras por imprevistos que suceden o simplemente porque necesitamos una pequeña ayuda para seguir adelante, por ello desde aquí, ponemos todo nuestro empeño, constancia y dedicación para que tengas a tu alcance de la manera más sencilla, cómoda y segura todo aquello que necesites. Además de facilitar, la búsqueda de empleo para aquellos que deseen proporcionar alguno de los servicios ofrecidos en la plataforma.
                            </p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="/images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="/images/client/google.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="/images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="/images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="/images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                    <img src="/images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

        <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">¿ Cómo funciona ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">
                            Miitut es una plataforma digital, muy práctica y eficiente, que dispone de un sistema de busqueda avanzado e innovador mediante el cúal en pocos pasos podrás disponer de todos los servicios que necesites.
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="card features work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-presentation-edit"></i>
                        </div>

                        <div class="card-body">
                            <h4 class="title text-dark">Busqueda Selectiva</h4>
                            <p class="text-muted mb-0">
                                Mediante el uso de nuestros filtros podrás encontrar en pocos clics de manera fácil e intuitiva a los posibles candidatos que se ajusten más a tus necesidades.
                            </p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                    <div class="card features work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-airplay"></i>
                        </div>

                        <div class="card-body">
                            <h4 class="title text-dark">Toma de Contacto</h4>
                            <p class="text-muted mb-0">
                                Usa nuestro chat online como primera toma de contacto y así poder llegar a un acuerdo con la persona a contratar.
                            </p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                    <div class="card features work-process bg-transparent d-none-arrow border-0 text-center">
                        <div class="icons rounded h1 text-center text-primary px-3">
                            <i class="uil uil-image-check"></i>
                        </div>

                        <div class="card-body">
                            <h4 class="title text-dark">Contratación</h4>
                            <p class="text-muted mb-0">
                                Una vez establecidas las condiciones y con acuerdo mutuo, realizar la contratación.
                            </p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-end mb-4 pb-4">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-left">
                        <h6 class="text-primary">Nuestros Servicios</h6>
                        <h4 class="title mb-4">¿Qué hacemos?</h4>
                        <p class="text-muted mb-0 para-desc">En <span class="text-primary font-weight-bold">Miitut</span> te ofrecemos la oportunidad de que anuncies los servicios que deseas prestar o bien que encuentres la ayuda que necesitas para tu hogar.</p>
                    </div>
                </div>
                <!--end col-->

                <!-- <div class="col-md-4 mt-4 mt-sm-0">
                    <div class="text-center text-md-right">
                        <a href="javascript:void(0)" class="text-primary h6">See More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
                    </div>
                </div> -->
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">

                <b-tabs vertical justified pills nav-class="bg-white p-3 mb-0 flex-column" nav-wrapper-class="col-md-4 mt-4" content-class="col-md-8 col-12  mt-4 pt-2">
                    <b-tab>
                        <template v-slot:title>
                            <div class="text-center pt-1 pb-1">
                                <h6 class="title font-weight-normal mb-0">Anunciate</h6>
                            </div>
                        </template>
                        <img src="/images/aboutus/anunciate.jpg" class="img-fluid rounded shadow" alt="">
                        <div class="mt-4">
                            <p class="text-muted">Ya has hecho lo más difícil, dar ese primer paso hacia la búsqueda de un nuevo empleo, ahora sólo tienes que anunciar los servicios que quieres prestar, sé activo, constante, opten tu cuenta premium, estate atento a todas las novedades y así encontrarás ese trabajo tan deseado.</p>
                            <!-- <a href="javascript:void(0)" class="text-primary">See More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a> -->
                        </div>
                        <div>
                            <router-link to="/registro" class="btn btn-primary">
                                Registrate Gratis
                            </router-link>
                        </div>
                    </b-tab>
                    <b-tab title-item-class="mt-2">
                        <template v-slot:title>
                            <div class="text-center pt-1 pb-1">
                                <h6 class="title font-weight-normal mb-0">Busca Ayuda</h6>
                            </div>
                        </template>
                        <img src="/images/aboutus/busca ayuda.jpg" class="img-fluid rounded shadow" alt="">
                        <div class="mt-4">
                            <p class="text-muted">Porque sabemos lo difícil que es encontrar una buena ayuda, desde <span class="text-primary font-weight-bold">Miitut</span>, queremos hacerte la vida más cómoda y sencilla, para ello ponemos a tu disposición una plataforma digital pensada para ti y tus necesidades. Sabemos lo complicado que puede ser el día a día, a veces porque no disponemos de todo el tiempo que nos gustaría, aparece algún imprevisto o bien se requiere de una ayuda extra, por ello en <span class="text-primary font-weight-bold">Miitut</span> ponemos todo nuestro empeño y dedicación para que mediante el uso de nuestras herramientas encuentres al profesional más adecuado a tus necesidades.</p>
                            <!-- <a href="javascript:void(0)" class="text-primary">See More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a> -->
                        </div>
                        <div>
                            <router-link to="/registro" class="btn btn-primary">
                                Registrate Gratis
                            </router-link>
                        </div>
                    </b-tab>
                    <b-tab title-item-class="mt-2">
                        <template v-slot:title>
                            <div class="text-center pt-1 pb-1">
                                <h6 class="title font-weight-normal mb-0">Servicios</h6>
                            </div>
                        </template>
                        <img src="/images/aboutus/servicios.jpeg" class="img-fluid rounded shadow" alt="">
                        <div class="mt-4">
                            <p class="text-muted">La plataforma digital <span class="text-primary font-weight-bold">miitut</span> sirve como lazo de unión segura entre las personas que buscan ayuda y las que ofrecen sus servicios. Con el fin de facilitar las cosas a nuestros usuarios, hemos creado un sistema por categorías (cuidados de mayores, mascotas, niñeras, servicios de mantenimiento, limpieza, cocina, peluquería, reparación, jardinería y piscinas, entrenadores personales, profesores particulares, sanitarios y parasanitarios a domicilio), que además
 
implementa un buscador con una serie de filtros, para realizar búsquedas más concretas y precisas , incluyendo geolocalización, de forma que todo resulte más ameno e intuitivo.</p>
                            <!-- <a href="javascript:void(0)" class="text-primary">See More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a> -->
                        </div>
                        <div class="d-flex justify-content-end">
                            <router-link to="/todas-categorias" class="btn btn-primary">
                                Categorias
                            </router-link>
                        </div>
                    </b-tab>
                    <b-tab title-item-class="mt-2">
                        <template v-slot:title>
                            <div class="text-center pt-1 pb-1">
                                <h6 class="title font-weight-normal mb-0">Plataforma Digital</h6>
                            </div>
                        </template>
                        <img src="/images/work/1.jpg" class="img-fluid rounded shadow" alt="">
                        <div class="mt-4">
                            <p class="text-muted">
                                <span class="text-primary font-weight-bold">Miitut</span> es una plataforma digital de uso gratuito limitado, que pone a tu alcance las últimas tecnologías a la hora de encontrar empleo. Nuestra fuerte presencia en redes sociales y buscadores ayuda a poner en contacto profesionales con personas que necesitan de sus servicios. Disponemos de pago seguro, agendas personalizadas, chat interno, verificación de usuarios, una geolocalización de alta precisión, servidores de última generación, los cuales le ayudaran a tener una navegación más fluida y segura a través de nuestra web.</p>
                            <!-- <a href="javascript:void(0)" class="text-primary">See More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a> -->
                        </div>
                    </b-tab>
                </b-tabs>
                <!--end nav pills-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Start -->
    <section class="section bg-light pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="video-solution-cta position-relative" style="z-index: 1;">
                        <div class="position-relative">
                            <img src="/images/cta-bg.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                            <div class="play-icon">
                                <a href="javascript: void(0);" v-b-modal.modal class="play-btn video-play-icon">
                                    <i class="mdi mdi-play text-primary rounded-circle bg-white shadow-lg"></i>
                                </a>
                            </div>
                            <b-modal id="modal" ref="modal" hide-footer size="lg" header-close-variant="white" header-class="border-0" content-class="border-0" centered>
                                <!--<youtube video-id="jNTZpfXYJa4" ref="youtube" width="750" height="450"></youtube>-->
                                <div class="row">
                                    <div align="center" class="col-12">
                                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/jkLuovTgQOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <b-button class="mt-3 bg-primary" @click="()=>{ 
                                                                            this.$bvModal.hide('modal');
                                                                            }"> Cerrar</b-button>
                                    </div>
                                </div>
                            </b-modal>
                        </div>
                        <!-- <div class="content mt-md-4 pt-md-2">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mt-4 pt-2">
                                            <div class="section-title text-md-left">
                                                <h6 class="text-white-50">Team</h6>
                                                <h4 class="title text-white title-dark mb-0">Meet Experience <br> Team Member</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 mt-4 pt-md-2">
                                            <div class="section-title text-md-left">
                                                <p class="text-white-50 para-desc">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                <a href="javascript:void(0)" class="text-white title-dark">Read More <arrow-right-icon class="fea icon-sm"></arrow-right-icon></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row -->
            <div class="feature-posts-placeholder bg-primary"></div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
</div>
</template>

<style>
.modal-content {
    background-color: transparent;
}
.work-process.process-arrow:after {
    content: '';
    position: absolute;
    width: 60%;
    height: 40px;
    top: 80px;
    left: 80%;
    /* background: url(images/process.png) center center no-repeat; */
    z-index: 1;
}
</style>
