<script>
import {
    MapPinIcon
} from 'vue-feather-icons';

export default {
    props: [
        'user',
        'title',
        'forceUpdate'
    ],
    data(){
        return {
            form: {
                address: '',
                lat: 0,
                lng: 0,
                avatar: null,
                birthdate: { date: '', valid: false},
                dni: '',
                description: '',
                email: '',
                gender: '',
                phone: '',
                name: ''
            },
            loading: {
                localizar: false
            },
            address: '',
            loadingAvatar: false
        }
    },
    created(){
        if (this.user){
            this.form = {
               address: this.user.address,
               lat: this.user.lat,
               lng: this.user.lng,
               avatar: this.user.avatar,
               birthdate: { date: this.user.birthdate , valid: true },
               dni: this.user.dni,
               description: this.user.description,
               email: this.user.email,
               gender: this.user.gender,
               phone: this.user.phone,
               name: this.user.name,

            }
        }
    },
    components: {
        MapPinIcon
    },
    methods: {
        onContext(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.form.birthdate.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        selectImage(){
            this.$refs.fileInput.click()
        },
        async onFileChange(e){
            const image = e.target.files[0]
            if (image){
                this.form.avatar = null;
                this.loadingAvatar = true;
                
                const formData = new FormData();
                formData.append('avatar', image);

                const res = await this.callApi('post', 'app/users/updateAvatar', formData);

                if (res.status === 200){
                    console.log(res);
    
                    this.form.avatar = res.data.url;
                    this.loadingAvatar = false;
                }
            }            
        },
        async validate(){
            let errors = {};
            let errorsExist = false;

            const form = { ...this.form }

            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];

                switch(field){
                    case 'gender':
                    case 'description':
                    case 'dni':
                    case 'address':
                    case 'phone': {
                        if (!value || !value.length){
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
                ...this.form,
                birthdate: this.form.birthdate.date
            }

            console.log('formSubmit', form)

            try{
                const response = await this.callApi('post', 'app/users/updateProfile', form)
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
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="h2">{{ title }}</h2>
            </div>

        </div>
        <div class="row">
            <!-- Start Selecionar Foto -->
            <div class="col-12 mt-2">
                <div id='preview' class="d-flex justify-content-center">
                    <div>
                        <div v-if="loadingAvatar">
                            <b-spinner type="grow" label="Spinning" />
                        </div>
                        <div v-else>
                                <!-- v-if="!loadingAvatar" -->
                            <img
                                v-if="form.avatar"
                                :src="form.avatar"
                                width="100"
                                height="100"
                                style="cursor:pointer;"
                                @click="selectImage()"
                            />
                        </div>
                    </div>
                    <input ref="fileInput" id="input" type="file" @change="onFileChange" style='display:none;'>
                </div>
                <hr>

            </div>
            <!-- END Seleccionar Foto -->


            <!-- START Localizacion  -->
            <div class="col-12 ">
                <div class="" v-if="!loading.localizar">
                    <div class="row">

                        <div class="" v-if="!form.address">
                            <div class="d-flex justify-content-center">
                                <p class="text-muted"> Click para obtener tu ubicacion </p>
                            </div>
                        </div>
                        <div v-else class="col-10">
                            <p class="text-muted"> {{form.address}} </p>
                        </div>
                        <div class="col-2">
                            <div class="d-flex justify-content-center">
                                <b-button  class="btn btn-info" pill @click="localizar">
                                    <MapPinIcon />
                                </b-button >
                            </div>
                        </div>

                    </div>

                </div>
                <div class="text-center d-flex justify-content-center" v-else>
                    <div>
                        <b-spinner
                            type="grow"
                        ></b-spinner>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Localizacion -->

            <!-- Start Genero -->
            <!-- <div class="col-12">
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
            </div> -->
            <!-- END Genero -->

            <!-- Start Name -->
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <label for="datepicker" class="text-muted">Nombre</label>
                    </div>
                    <div class="col-8">
                        <b-input-group class="mb-3">
                            <b-form-input
                                id="example-input"
                                v-model="form.name"
                                type="text"
                            ></b-form-input>
                        </b-input-group>
                    </div>
                </div>
                <hr>
            </div>
            <!-- End Name -->

            <!-- Start Name -->
            <!-- <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <label for="datepicker" class="text-muted">Email</label>
                    </div>
                    <div class="col-8">
                        <b-input-group class="mb-3">
                            <b-form-input
                                id="email"
                                v-model="form.email"
                                type="email"
                            ></b-form-input>
                        </b-input-group>
                    </div>
                </div>
                <hr>
            </div> -->
            <!-- End Name -->

            <!-- Start Description -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <b-form-textarea
                            type="textarea" v-model="form.description"
                            placeholder="Escribe una descripcion personal..."
                        />

                    </div>
                </div>
                <hr>
            </div>
            <!-- END Description -->

            <!-- Start Fecha de Nacimiento -->
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <label for="datepicker" class="text-muted">Fecha de Nacimiento</label>
                    </div>
                    <div class="col-6">
                        <b-input-group class="mb-3">
                            <b-form-input
                                id="example-input"
                                v-model="form.birthdate.date"
                                type="text"
                                placeholder="YYYY-MM-DD"
                                autocomplete="off"
                            ></b-form-input>
                            <b-input-group-append>
                                <b-form-datepicker
                                    v-model="form.birthdate.date"
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
                <hr>
            </div>
            <!-- END Fecha de Nacimiento -->

            <!-- Start DNI -->
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <label for="dni" class="text-muted">DNI</label>
                    </div>
                    <div class="col-6">
                        <input type="number" v-model="form.dni">
                    </div>
                </div>
                <hr>
            </div>
            <!-- END DNI -->

            <!-- START Telefono -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <vue-tel-input
                            v-model="form.phone"
                            required
                            validCharactersOnly
                            placeholder='Ingresa tu Telefono'
                        />
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
</template>
