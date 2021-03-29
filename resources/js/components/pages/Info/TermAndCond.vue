<script>

export default {
    data(){
        return {

        }
    },
    components: {
    },
    created(){
        window.scroll(0, 0);
    },
};
</script>

<template>
<div>
    <!-- Hero Start -->
    <section class="bg-half-170 seccion1 d-table w-100">
        <div class="container" id="container">
            <div class="row">
                <div class="mt-5 col-12 d-flex justify-content-center">
                    <div class="info">
                        <div class="title-heading">
                            <h1 class="heading">Terminos y Condiciones</h1>
                            <ol>
                                <li>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    facilis tempore temporibus cum eveniet impedit fugit. Totam 
                                </li>
                                <li>
                                    Ipsum, aliquid dignissimos officiis quia quam voluptatibus 
                                </li>
                                <li>
                                    eligendi harum itaque ea libero cum tempora.
                                </li>
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
</div>
</template>

<style scoped>
    li {
        color: rgb(41, 12, 0);
        font-weight: bold;
        color:#ff4b64
    }

    .info {
        padding: 50px;
        border-radius: 10px;
        background: white;
    }
</style>