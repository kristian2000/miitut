
<script>
import LayoutStandar from '../../../layouts/LayoutStandar'

let sizeImgMax = 307200;

export default {
    data(){
        return {
            docFront: null,
            docBack: null,
            docStatus: { loading: false, doc: null, isExists: false}
        }
    },
    created(){
        const user = this.$store.state.user;

        if (!user || user.fase_registry !== 'dni'){
            this.isAuthRedirect();
        }

         window.scroll(0, 0);
    },
    components: {
        LayoutStandar
    },
    methods: {
        async previewDoc(e, type){
            // console.log(e, type)
            const image = e.target.files[0]

            if (image?.size >= sizeImgMax){
                this.makeNotice(
                    'danger', 
                    'Tamaño Máximo', 
                    `La imagen debe ser menor a ${Number(sizeImgMax/1024).toFixed(0)}Kb`
                );
                return;
            }
            
            if (type === 'front'){
                this.urlFront = URL.createObjectURL(image);
            }else{
                this.urlBack = URL.createObjectURL(image);
            }
        }, 
        async sendDocumentDNI(){
            this.docStatus.loading = true;
            // llamar a la api subir DNI

            let formdata = new FormData();
            formdata.append('docFront', this.docFront)
            formdata.append('docBack', this.docBack)

            const response = await this.callApi('post', `app/users/uploadDNI`, formdata);

            if (response.status === 200){
                this.makeNotice('success', 'Envio Exitoso', 'Su documento ha sido enviado')
                setTimeout(()=>{
                    const user = response.data.user;

                    this.$store.dispatch('updateUser', {user})
                }, 3000)
            }
            this.docStatus.loading = false;
            console.log(response)
            
        },

    }
}
</script>

<template>
<LayoutStandar>
<section 
    class="container col-md-10 col-12 my-4 info p-3" 
    style="min-height: 60vh;"
>
    <div class="container text-center">
        <h3 class="text-muted title-dni">
            Verifica tu identidad.
        </h3>
    </div>
    <div class="mt-4 container col-md-12 col-12">
        <div v-if="!docStatus.loading">
                <!-- <div>
                    <p class="text-muted" style="font-size: 20px">
                    </p>
                </div> -->
            <div class="" >
                <div class="text-intructions-dni">
                    <h3 class="text-muted" > Instrucciones </h3>
                    <ul>
                        <li class="text-muted" >Sube una foto frente de tu DNI</li>
                        <li class="text-muted" >Sube una foto reverso de tu DNI</li>
                        <li class="text-muted" >Las fotos deben ser legibles y nitidas</li>
                    </ul>
                </div>
            </div>

            <div class="my-3">
                <b-form-file
                    v-model="docFront"
                    :state="Boolean(docFront)"
                    placeholder="Carga el DNI Frente..."
                    drop-placeholder="Drop file here..."
                    @change="e => previewDoc(e, 'front')"
                ></b-form-file>
            </div>

            <div class="container">
                <div class="row d-flex justify-content-center mb-4">
                    <div class="col-12 col-md-8" v-if="!docFront">
                        <b-skeleton-img class="img-dni"/>
                    </div>
                    <div v-else class="col-12 col-md-8">
                        <img :src="urlFront" class="img-dni" />
                    </div>
                </div>
            </div>

            <div class="my-3">
                <b-form-file
                    v-model="docBack"
                    :state="Boolean(docBack)"
                    placeholder="Carga el DNI Reverso..."
                    drop-placeholder="Drop file here..."
                    @change="e => previewDoc(e, 'back')"
                ></b-form-file>
            </div>

            <div class="container">
                <div class="d-flex justify-content-center mb-4">
                    <div class="col-12 col-md-8" v-if="!docBack">
                        <b-skeleton-img class="img-dni" />
                    </div>
                    <div v-else class="col-12 col-md-8">
                        <img :src="urlBack" class="img-dni" />
                    </div>
                </div>
            </div>

            <div class="" v-if="Boolean(docFront) && Boolean(docBack)">
                <div class="d-flex justify-content-center">
                    <b-button pill variant="outline-secondary" @click="sendDocumentDNI">
                        Enviar
                    </b-button>
                </div>
            </div>

        </div>
        <div v-else>
            <div class="d-flex justify-content-center">
                <div>
                    <b-spinner type="grow" label="Spinning" />
                </div>
            </div>
        </div>
    </div>
</section>
</LayoutStandar>
</template>

<style scoped>
    .title-dni {
        line-height: 1;
        font-size: 1.2rem;
    }

    .text-intructions-dni h3{
        font-size: 1.5rem;
    }
    .text-intructions-dni ul{
        font-size: .8rem;
    }
    .img-dni {
        width: 100%;
    }
</style>
