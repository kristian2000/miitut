<script>
export default {
    props: ['doc', 'onCall'],
    data(){
        return {
            form: {
                nameOfBeneficiary: "",
                code: 'ES21',
                ccc: ""
            }
        }
    },
    created(){
        if (this.doc) {
            console.log('doc', this.doc)
            this.form.nameOfBeneficiary = this.doc.nameOfBeneficiary;
            this.form.ccc = this.doc.ccc;
        }
    },
    methods: {
        save(){
            this.onCall(this.form)
        }
    }
}
</script>

<template>
<div>
    <div class="p-2">

        <div class="form-group">
            <label class="font-weight-bold">Nombre del Beneficiario: </label>
            <input 
                type="text"
                class="form-control pl-5"
                v-model="form.nameOfBeneficiary"
            >
        </div>

        <!-- <div>
            <span class="font-weight-bold">Code:</span>
            <span class="text-muted">
                {{ docAccount.doc.code }}
            </span>
        </div> -->
        <div class="form-group">
            <label class="font-weight-bold">Numero de cuenta: </label>
            <input 
                type="text"
                class="form-control pl-5"
                v-model="form.ccc"
            />
        </div>

        <div class="d-flex justify-content-center">
            <div>
                <button 
                    class="btn btn-primary"
                    @click="save"
                >
                    Guardar
                </button>
            </div>
        </div>
    </div>

</div>
</template>