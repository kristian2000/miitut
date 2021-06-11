<script>
import LayoutStandar from '../../../../layouts/LayoutStandar'

export default {
    data(){
        return {

        }
    },
    components: {
        LayoutStandar
    },
    created(){
        
    }
};
</script>

<template>
<LayoutStandar>
    <!-- Hero Start -->
    <section class="bg-half-170 seccion1 d-table w-100">
        <div class="container" id="container">
            <div class="row">
                <div class="mt-5 col-12 d-flex justify-content-center">
                    <div class="info">
                        <div class="title-heading">
                            <h1 class="text-title">Verifica tu Correo!</h1>
                            <ol>
                                <li class="textColor" >Ingresa a tu correo</li>
                                <li class="textColor">
                                    Click en el enlace para verificar 
                                    <div class="text-muted" style="font-size: 12px;line-height: 1">
                                        (revisar carpeta SPAM o correo no deseado)
                                    </div>
                                </li>
                                <li class="textColor">Iniciar Sesion en Miitut!</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
</LayoutStandar>
</template>

<style scoped>
    .text-title {
        font-size: 2rem;
        text-align: center;
    }

    li {
        font-weight: bold;
    }

    .info {
        padding: 50px;
        border-radius: 10px;
        background: white;
        border: 1px solid #eee;
    }
</style>