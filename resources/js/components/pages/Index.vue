<script>

import {
    UserIcon,
    MailIcon,
    KeyIcon,
    ArrowUpIcon,
    HelpCircleIcon
} from 'vue-feather-icons';

import Navbar from "../layouts/navbar";
import Switcher from "../layouts/switcher";
import Footer from "../layouts/footer";


/**
 * Index-1
 */
export default {
    components: {
        Navbar,
        Switcher,
        UserIcon,
        MailIcon,
        KeyIcon,
        ArrowUpIcon,
        Footer,
        HelpCircleIcon
    },
    methods: {}
};
</script>

<template>
<div>
    <Navbar />
    <!-- Hero Start -->
    <section class="bg-half-170 seccion1 d-table w-100">
        <div class="container" id="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-heading">
                        <h1 class="heading">Our Creativity Is Your</h1>
                        <p class="para-desc">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <div class="botones">
                            <router-link to="/page-contact-one" class="btn btn-primary mt-2 mr-2"><i class="mdi mdi-email"></i> Get Started</router-link>
                            <router-link to="/documentation" class="btn btn-outline-primary mt-2"><i class="mdi mdi-book-outline"></i> Documentation</router-link>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="indeximg  col-md-6">
                    <img src="https://i.ibb.co/wwWRDKH/Vector-1.png" alt="" style="width: 100%">
                </div>
                <!--end col-->
            </div>
                <div class="section content team01">
                    <h1 id="titlecolor" class="font-weight-bold">¿Cómo funciona?</h1>
                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Atque neque harum unde. Saepe totam ullam quidem id quos excepturi aliquid illo ipsam quia possimus aperiam commodi modi blanditiis eveniet, nobis?</p>
                    <button id="btn-modify" class="text-white">Servicio <span>→</span></button>
                </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- SECCICON 2 -->
    <section class=" seccion2">

        <div class="text-center mb-4 team02">
            <h2 id="titlecolor" class="h1 font-weight-bold">Nuestras Categorías</h2>
            <p class="text-muted text-center">Lorem, ipsum dolor sit amet</p>
        </div>

        <div class="container">
          <div class="row team">

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <h3 class="mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <h3 class="mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <h3 class="mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>

          </div>
        </div>

        <div class="container">
          <div class="row team">

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <h3 class="mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <h3 class="mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <h3 class="mt-2 font-weight-bold">Niñera</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet</p>
            </div>

          </div>
        </div>

    </section>


    <!-- SECCION 3 -->
    <section class="seccion3">

        <div class="container">
          <div class="row team2">

            <div class="col-md-6 item2">
                    <img src="https://i.ibb.co/Bnd1JJL/vector-chi-011.png" />
            </div>

            <div class="col-md-6 item2text">
                    <h1 class="text-white font-weight-bold">¡Encuentra trabajo!</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur.</p>
                    <button id="btn-modify-3">REGISTRATE GRATIS <span>→</span></button>
            </div>

          </div>
        </div>

    </section>


    <!-- SECCION 4 -->
    <section class="section seccion4">

        <div class="text-center mb-4 team04">
            <h1 id="titlecolor" class="font-weight-bold">Últimas Noticias</h1>
            <p class="text-center text-muted">Lorem, ipsum dolor sit amet consectetur</p>
        </div>

        <div class="container">
          <div class="row team">

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <p class="mt-4 text-muted">Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <p class="mt-4 text-muted">Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="col-md-4 item">
                    <img src="https://i-cf3.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/en_ae/ae_img_EN/childrens-banne-mob.jpg" width="350px" height="200" />
                    <p class="mt-4 text-muted">Lorem ipsum dolor sit amet.</p>
            </div>

          </div>
        </div>

    </section>

    <!-- SECCION 5 -->
    <section class="section seccion5">

        <div class="container rounded-lg p-4">
          <div class="row team5 align-items-center">

            <div class="col-md-4 item5 p-4 itemcol">
                    <div class="col-1">
                        <h2 class="text-white">Newsletter</h2>
                    </div>
                    <div class="col-2">
                        <img src="https://i.ibb.co/YTDV8yz/Logo-01.png" alt="">
                    </div>
            </div>

            <div class="col-md-4 item5 p-4">
                    <input class="text-white" type="text" placeholder="Escribe tu email..">
            </div>

            <div class="col-md-4 item5 p-4">
                    <button id="btn-modify-2" class="text-white">Enviar <span>→</span></button>
            </div>

          </div>
        </div>

    </section>



    <Footer />

    <Switcher />
    <!-- back to top -->
    <a href="javascript: void(0);" class="btn btn-icon btn-soft-primary back-to-top" id="back-to-top" v-scroll-to="'#topnav'">
        <arrow-up-icon class="icons"></arrow-up-icon>
    </a>
    <!-- Back to top -->


</div>
</template>


<style>

    .seccion5, .seccion3, .seccion4, .seccion2, .seccion1 {
        background-color: #edf2f9;
    }

/* SECCION 1 */
.seccion1 {
    background-image: url(https://i.ibb.co/M1wNGmX/banner-02-111.png);
    background-size: contain;
    background-repeat: no-repeat;
    height: 63vw;
}

.bg-half-170 {
    background-position: inherit;
}

.title-heading {
    line-height: 26px;
    color: #fff;
}

  p {
    font-size: 18px;
}

    @media (min-width: 1024px){
        .content {
            max-width: 700px;
            margin-top: -150px;

        }

    }

    .content p {

        text-align: justify;
    }

    #titlecolor {
        color: #ff4b64;

    }

    .team01 button {
        background: rgb(241,84,56);
        background: linear-gradient(90deg, rgba(241,84,56,1) 24%, rgba(244,125,59,1) 100%);
    }

    #btn-modify {
        padding: 15px 40px 15px 40px;
        width: 220px;
        max-width: 220px;
        font-size: 25px;
        border-radius: 350px;
        border: none;
        -webkit-box-shadow:  3px 3px 3px 2px #ccc;
        -moz-box-shadow:     3px 3px 6px 2px #ccc;
        box-shadow:          3px 3px 6px 2px #ccc;
    }

    #btn-modify span {
        background-color: white;
        border-radius: 50%;
        padding: 0 4px 0 4px;
        color: rgba(244,125,59,1);
    }

/* SECCION 2 */

    .team {
        pointer-events:none;
        text-align: center;
    }

    .team img {
        border-radius: 10%;
        cursor: pointer;
    }

    .team h3 {
        color: #e82e4d;
        font-size: 30px;
        cursor: pointer;
    }

    .seccion2 {
    background-image: url(/images/back1.jpg);
    background-size: contain;
    background-repeat: no-repeat;
    height: 50vw;
}


    .seccion2 .item p {
        font-size: 20px;
    }

    .seccion2 .team02 {
        margin-top: -200px;
    }


/* SECCION 3 */

.seccion3 {
    background-image: url(/images/Baack-03.png);
    background-size: contain;
    background-repeat: no-repeat;
    text-align: center;
    height: 32vw;
    padding-top: 7%;
}

    .seccion3 button {
        background: white;
        color: #ff5a5c;
    }

    .seccion3 .item2 img {
        height: auto;
        width: 350px;
    }

    #btn-modify-3 {
        padding: 15px 40px 15px 40px;
        font-size: 25px;
        border-radius: 350px;
        border: none;
    }

    #btn-modify-3 span {
        background-color: #ff5a5c;
        border-radius: 50%;
        padding: 0 4px 0 4px;
        color: white;
    }

    .seccion3 h1 {
        font-size: 54px;
    }

    .seccion3 p {
        font-size: 25px;
    }

    .col-md-6.item2text {
    text-align: justify;
}


/* SECCION 4 */

    .seccion4 .team04 p {
        font-size: 25px;
    }

    .seccion4 p {
        font-size: 20px;
    }

    .seccion4 .container {
        background-color: #edf2f9;
    }


/* SECCION 5 */

    .seccion5 .container {
        background-color: #ff5360;
        max-width: 350px;
        text-align: center;
        margin-top: -30px;
    }

    .seccion5 .team5 input {
        background: none;
        border: none;
        margin-left: 20px;
    }

    .seccion5 .team5 .itemcol {
        margin-left: 35px;
    }

    .seccion5 button {
        background: rgb(241,84,56);
        background: linear-gradient(90deg, rgba(241,84,56,1) 24%, rgba(244,125,59,1) 100%);
    }

    #btn-modify-2 {
        padding: 15px 40px 15px 40px;
        font-size: 25px;
        border-radius: 350px;
        border: none;
    }

    #btn-modify-2 span {
        background-color: white;
        border-radius: 50%;
        padding: 0 4px 0 4px;
        color: rgba(244,125,59,1);
    }
@media only screen and (max-width: 768px) {

    .seccion1 {

    background-size: cover;
    height: inherit;

}

.seccion2 {

    background-size: cover;
    height: inherit;

}

.seccion3 {

    background-size: cover;
    height: inherit;

}

}

@media only screen and (min-width: 768px) {

    /*SECCION 1*/




    .content p {

        text-align: justify;
    }

    /*SECCION 2*/



    .team img {
        height: auto;
        width: 230px;
    }

    /*SECCION 3*/



    /*SECCION 4*/

    .seccion4 .team04 {
        margin-top: -120px;
    }

    /*SECCION 5*/

    .seccion5 .container {
        background-color: #ff5360;
        max-width: 600px;
        text-align: center;
        margin-top: -80px;
    }

    .seccion5 .team5 input {
        background: none;
        border: none;
        margin-left: 50px;
    }

    #btn-modify-2 {
        padding: 15px 40px 15px 40px;
        font-size: 25px;
        width: 250px;
    }

    #btn-modify-2 span {
        background-color: white;
        border-radius: 50%;
        padding: 0 4px 0 4px;
        color: rgba(244,125,59,1);
    }


}

@media only screen and (min-width: 990px) {

    /*SECCION 2*/
    .team img {
        height: auto;
        width: 300px;
    }

    .team h3, p {
        text-align: left;
    }

    /*SECCION 3*/



    /*SECCION 4*/



    .seccion4 .team04 {
        margin-top: -100px;
        padding: -50px;
    }

    /*SECCION 5 */

    .seccion5 .container {
        max-width: 900px;
        margin-top: -140px;
    }

    #btn-modify-2 {
        padding: 15px 35px 15px 35px;
        font-size: 25px;
        width: 200px;
    }

    .seccion5 .team5 {
        display: flex;
        flex-wrap: nowrap;
    }

}



</style>
