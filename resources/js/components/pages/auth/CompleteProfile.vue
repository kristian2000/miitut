
<script>
import axios from 'axios'
export default {
    data(){
        return {
            url: null,
            file: null,
            gender: 'woman',
            date: {birthdate: '', valid: ''},
            phone: '',
            coords: null,
            address: '',
            dni: '',
            description: '',

            loading: {
                localizar: false
            }
        }
    },
    created(){
        const user = this.$store.state.user;
        if (!user || user.fase_registry !== 'registro'){
            this.$router.push('/');
        }

        if (user.avatar){
            this.url = user.avatar
        }
    },
    methods: {
        selectImage(){
            this.$refs.fileInput.click()
        },
        async onFileChange(e){
            const image = e.target.files[0]
            const formData = new FormData();
            formData.append('avatar', image);

            const res = await this.callApi('post', 'app/users/updateAvatar', formData);
            console.log(res);

            this.url = res.data.url;
        },
        onContext(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.date.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        localizar(){
            this.loading.localizar = true;
            navigator.geolocation.getCurrentPosition(async (pos)=>{
                console.log(pos)
                const response = await axios
                    .get(`https://nominatim.openstreetmap.org/reverse?lat=${pos.coords.latitude}&lon=${pos.coords.longitude}&format=json`)

                if (response.status === 200){

                    this.address = response.data.display_name;
                    this.coords = {
                        lat: response.data.lat,
                        lon: response.data.lon
                    }
                    this.loading.localizar = false;
                }
            },(error)=>{
                this.makeNotice('danger', 'Error Ubicando', 'Permiso de ubicacion rechazado por el usuario, por favor, aceptar y reintentar.');
                console.log('error', error)
            })
        },
        async validate(){
            let errors = {};
            let errorsExist = false;

            const form = {
                phone: this.phone,
                gender: this.gender,
                birthdate: this.date,
                address: this.address,
                description: this.description,
                dni: this.dni
            }

            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];

                switch(field){
                    case 'gender':
                    case 'description':
                    case 'dni':
                    case 'address':
                    case 'phone': {
                        if (!value.length){
                            errors[field] = [ 'Por favor completa el campo, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'birthdate': {
                        if (!value.valid){
                            errors[field] = [ 'La fecha es Invalida' ];
                            errorsExist = true;
                        }
                    }

                }
                // console.log('value', field, value)
            })

            // Compruebo los errors y doy mensaje
            if (errorsExist){
                this.makeNoticeListErrors(errors);
                return;
            }

            this.submit();

        },
        async submit(){
            const form = {
                phone: this.phone,
                gender: this.gender,
                birthdate: this.date.birthdate,
                address: this.address,
                lat: this.coords? this.coords.lat : '',
                lng: this.coords ?  this.coords.lon : '',
                description: this.description,
                dni: this.dni
            }

            console.log('formSubmit', form)

            try{
                const response = await this.callApi('post', 'app/users/completeProfile', form)
                if (response.status === 200){
                    this.$store.commit('setUpdateUser', response.data.user)
                    this.$router.push('/');
                }
                console.log('responseSubmit', response)

            }catch(error){
                this.makeNotice('danger', 'Ocurrio un Error !', 'Se presento un problema al enviar tu solicitud')
                console.log('submitError', error)
            }


        }

    }
}
</script>

<template>
<section class="d-flex align-items-center">
    <div class="container col-md-6 col-12 mt-4">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="h2">Completar tus Perfil</h2>
            </div>

        </div>
        <div class="row">
            <!-- Start Selecionar Foto -->
            <div class="col-12 mt-2">
                <div id='preview' class="d-flex justify-content-center">
                    <img
                        v-if="url"
                        :src="url"
                        width="100"
                        height="100"
                        style="cursor:pointer;"
                        @click="selectImage()"
                    />
                    <div v-else class="d-flex justify-content-center">
                        <p class="text-muted mt-2" style="width:250px; font-size: 12px;">
                            Los perfiles sin fotografia inspiran confianza a los otros usuarios
                        </p>
                        <b-button class='m-2' pill variant="info" @click="selectImage()">Subir Foto</b-button>
                    </div>
                    <input ref="fileInput" id="input" type="file" @change="onFileChange" style='display:none;'>
                </div>
                <hr>

            </div>
            <!-- END Seleccionar Foto -->


            <!-- START Localizacion  -->
            <div class="col-12">
                <div class=" d-flex justify-content-center" v-if="!loading.localizar">
                    <div class="row align-items-center" v-if="!address">
                        <div class="col-8">
                            <label for="datepicker" class="text-muted">Click para obtener tu ubicacion</label>
                        </div>
                        <div class="col-4">
                            <b-button  class="btn btn-info" pill @click="localizar">Buscar</b-button >
                        </div>
                    </div>
                    <div v-else>
                        <div class="d-flex justify-content-center">
                            <div style="width:60%;">
                                <p class="text-muted"> {{address}}  </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center d-flex justify-content-center" v-else>
                    <b-spinner
                        type="grow"
                    ></b-spinner>
                </div>
                <hr>
            </div>
            <!-- END Localizacion -->

            <!-- Start Genero -->
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="d-flex justify-content-between">
                            <label for="" class="text-muted">Genero </label>
                            <b-form-radio v-model="gender" name="some-radios" value="woman">Mujer</b-form-radio>
                            <b-form-radio v-model="gender" name="some-radios" value="man">Hombre</b-form-radio>
                        </div>

                    </div>
                </div>
                <hr>
            </div>
            <!-- END Genero -->

            <!-- Start Fecha de Nacimiento -->
            <div class="col-12">
                <div class=" d-flex justify-content-center">
                    <div class="row">
                        <div class="col-6">
                            <label for="datepicker" class="text-muted">Fecha de Nacimiento</label>
                        </div>
                        <div class="col-6">
                            <b-input-group class="mb-3">
                                <b-form-input
                                    id="example-input"
                                    v-model="date.birthdate"
                                    type="text"
                                    placeholder="YYYY-MM-DD"
                                    autocomplete="off"
                                ></b-form-input>
                                <b-input-group-append>
                                    <b-form-datepicker
                                    v-model="date.birthdate"
                                    button-only
                                    right
                                    locale="en-US"
                                    aria-controls="example-input"
                                    @context="onContext"
                                    ></b-form-datepicker>
                                </b-input-group-append>
                            </b-input-group>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Fecha de Nacimiento -->

            <!-- Start Description -->
            <div class="col-12">
                <div class=" d-flex justify-content-center">
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="text-muted">Agrega una descripcion</label>
                        </div>
                        <div class="col-6">
                            <textarea type="textarea" v-model="description"/>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Description -->

            <!-- Start DNI -->
            <div class="col-12">
                <div class=" d-flex justify-content-center">
                    <div class="row">
                        <div class="col-6">
                            <label for="dni" class="text-muted">DNI</label>
                        </div>
                        <div class="col-6">
                            <input type="number" v-model="dni">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END DNI -->

            <!-- START Telefono -->

            <div class="col-12">
                <div class=" d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            <vue-tel-input
                                v-model="phone"
                                required
                                validCharactersOnly
                                placeholder='Ingresa tu Telefono'
                            />
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Telefono -->

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" @click="validate">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</section>
</template>
