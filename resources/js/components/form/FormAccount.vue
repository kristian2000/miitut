<script>
export default {
    props: ['submit'],
    data(){
        return {
            form: {
                code: '',
                ccc: '',
                nameOfBeneficiary: ''
            }
        }
    },
    methods: {
        validate(){
            let errors = {};
            let errorsExist = false;

            const form = { ...this.form }

            // console.log(form.ccc.length)
            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];

                switch(field){
                    case 'nameOfBeneficiary': {
                        if (!value.length){
                            errors[field] = [ 'Por favor completa el campo, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'code': {
                        if (value.length !== 4){
                            errors[field] = [ 'Este campo debe tener 4 caracteres, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'ccc': {
                        if (value.length !== 12){
                            errors[field] = [ 'Este campo debe tener 12 caracteres numericos, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    
                }
                // console.log('value', field, value)
            })

            // Compruebo los errors y doy mensaje
            if (errorsExist){
                this.makeNoticeListErrors(errors);
                return;
            }

            this.submit(form);
        }
    }
}
</script>

<template>
    <div class="mt-4 p-4 container-form">
        <div class="container">
            <h4 class="card-title text-center">Guardar Cuenta de Retiro</h4>

            <form class="login-form mt-4" v-on:submit.prevent="validate">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group position-relative">
                            <label>Nombre del Beneficiario</label>
                            <input v-model="form.nameOfBeneficiary" type="text" class="form-control pl-5" placeholder="Escribe el nombre del beneficiario" name="s" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative">
                            <label>Code</label>
                            <input v-model="form.code" type="text" class="form-control pl-5" placeholder="ES21" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative">
                            <label>Numero de Cuenta</label>
                            <input v-model="form.ccc" type="text" class="form-control pl-5" placeholder="Escribe tu cuenta" required="">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <div>
                        <b-button type="submit">Enviar</b-button>
                    </div>
                </div>
            </form>
                
        </div>
    </div>
</template>

<style scoped>

</style>