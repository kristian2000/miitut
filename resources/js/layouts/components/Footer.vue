<script>
import {
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    MailIcon
} from 'vue-feather-icons';
export default {
    name: 'footer',
    data() {
        return {

        }
    },
    components: {
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        MailIcon
    }
}
</script>

<template>
<div>
    <!-- Footer Start -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo-footer">
                        <img src="https://i.ibb.co/YTDV8yz/Logo-01.png" height="24" alt="">
                    </a>
                    <p class="mt-4">Conectando a personas con los mismos valores y distintas necesidades</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded">
                                <facebook-icon class="fea icon-sm fea-social"></facebook-icon>
                            </a></li>
                        <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="rounded">
                                <instagram-icon class="fea icon-sm fea-social"></instagram-icon>
                            </a></li>
                    </ul>
                    <!--end icon-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-dark footer-head">Ayuda</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li>
                            <router-link to="/termAndCond" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terminos y Condiciones</router-link>
                        </li>
                        <!-- <li>
                            <router-link to="/page-services" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Politicas de privacidad</router-link>
                        </li> -->
                        <li>
                            <router-link to="/support" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Soporte</router-link>
                        </li>

                    </ul>
                </div>
                <!--end col-->


                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-dark footer-head">Boletin informativo</h4>
                    <p class="mt-4">Regístrese y reciba los últimos consejos por correo electrónico.</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="foot-subscribe form-group position-relative">
                                    <label>Escrbe tu email <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <mail-icon class="fea icon-sm icons "></mail-icon>
                                        <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Tu email : " required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary btn-block" value="suscribete">
                            </div>
                        </div>
                    </form>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© 2021 Miitut</p>
                        <!-- <p class="mb-0">© 2020 Landrick. Developed by with <i class="mdi mdi-heart text-danger"></i> by <a href="https://www.themesbrand.com" target="_blank" class="text-reset">Themesbrand</a>.</p> -->
                    </div>
                </div>
                <!--end col-->

                <!-- <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <ul class="list-unstyled text-sm-right mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                        <li class="list-inline-item  ml-1"><a href="javascript:void(0)"><img src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                        <li class="list-inline-item  ml-1"><a href="javascript:void(0)"><img src="images/payments/master-card.png" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                        <li class="list-inline-item  ml-1"><a href="javascript:void(0)"><img src="images/payments/paypal.png" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                        <li class="list-inline-item  ml-1"><a href="javascript:void(0)"><img src="images/payments/visa.png" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                    </ul>
                </div> -->
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
</div>
</template>
