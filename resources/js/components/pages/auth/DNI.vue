
<script>
export default {
    data(){
        return {
            docFront: null,
            docBack: null,
            docStatus: { loading: false, doc: null, isExists: false}
        }
    },
    created(){
        
    },
    methods: {
        async previewDoc(e, type){
            // console.log(e, type)
            const image = e.target.files[0]
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
                    window.location.href = '/'
                }, 3000)
            }
            this.docStatus.loading = false;
            console.log(response)
            
        },

    }
}
</script>

<template>
<section 
    class="my-4" 
    style="min-height: 950px"
>
    <div class="container text-center">
        <h3 class="text-muted">
            Verifica tu identidad y obten la confianza a los usuario de escogerte.
        </h3>
    </div>
    <div class="mt-4 container col-md-6 col-12">
        <div v-if="!docStatus.loading">
                <!-- <div>
                    <p class="text-muted" style="font-size: 20px">
                    </p>
                </div> -->
            <div class="container" >
                <div>
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
                <div class="d-flex justify-content-center mb-4">
                    <div style="width: 80%" v-if="!docFront">
                        <b-skeleton-img
                            height="300px"
                        />
                    </div>
                    <div v-else style="width: 80%">
                        <img :src="urlFront" height="300px" width="100%" />
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
                    <div style="width: 80%" v-if="!docBack">
                        <b-skeleton-img
                            height="300px"
                        />
                    </div>
                    <div v-else style="width: 80%">
                        <img :src="urlBack" height="300px" width="100%" />
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
</template>
