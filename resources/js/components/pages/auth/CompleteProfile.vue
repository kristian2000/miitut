
<script>
import axios from 'axios'
import {
    SearchIcon,
    MapPinIcon
} from 'vue-feather-icons';

import LayoutStandar from '../../../layouts/LayoutStandar'
import SelectedLanguages from '../../SelectedLanguages'

let sizeImgMax = 10240000;

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
            country: '',
            county: '',
            state: '',
            town: '',
            amenity: '',
            postal_code: '',
            dni: '',
            description: '',

            loading: {
                localizar: false,
                avatar: false
            },
            own_vehicle: false,
            driving_license: false,
            first_aid: false,
            has_children: false,
            nationality: '',

            loadingSearchAddress: false,
            locationQuery: '',
            addressSearch: null, //lat y long
            suggestions: [{text: 'Sugerencias al buscar tu ubicacion', value: null}],

            selectedLanguages: []
        }
    },
    components: {
        SearchIcon,
        MapPinIcon,
        LayoutStandar,
        SelectedLanguages
    },
    created(){
        const user = this.$store.state.user;
        if (!user || user.fase_registry !== 'registro'){
            this.isAuthRedirect();
        }

        if (user.avatar){
            this.url = user.avatar
        }

         window.scroll(0, 0);
    },
    methods: {
        changeHandleSelectedLanguages(items){
            this.selectedLanguages = items;
        },
        async geolocalizationAddress(){
            // Validacion
            if (this.locationQuery === ''){
                return ;
            }

            // loading
            this.loading.localizar = true;

            const response = await axios.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.locationQuery}&addressdetails=1`)
            console.log('response location', response);

            console.log('geoLo', response.data)

            let suggestions = response.data.map( address => ({
                text: address.display_name,
                value: address
            }))

            this.suggestions = suggestions;
            let addressSearch = suggestions.length ? suggestions[0].value : null;
            console.log('addressSearch', addressSearch)
            this.address = addressSearch.display_name;
            // this.country = addressSearch.address.country;
            // this.state = addressSearch.address.state;

            this.addressSearch =  addressSearch
            this.coords = {
                lat: addressSearch.lat,
                lon: addressSearch.lon
            }

            this.loading.localizar = false;
        },
        selectImage(){
            this.$refs.fileInput.click()
        },
        async onFileChange(e){
             

            const image = e.target.files[0]
            console.log(image?.size);
            if (image?.size >= sizeImgMax){
                this.makeNotice(
                    'danger', 
                    'Tamaño Máximo', 
                    `La imagen debe ser menor a ${Number(sizeImgMax/1024).toFixed(0)}Kb`
                );
                return;
            }

            if (image){
                this.loading.avatar = true;
                this.url = null;
                
                const formData = new FormData();
                formData.append('avatar', image);

                const res = await this.callApi('post', 'app/users/updateAvatar', formData);
                console.log(res);

                this.loading.avatar = false;
                this.url = res.data.url;
            }            
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

                console.log(response)
                if (response.status === 200){

                    this.address = response.data.display_name;
                    // this.country = response.data.address.country;
                    // this.state = response.data.address.state;

                    // this.coords = {
                    //     lat: response.data.lat,
                    //     lon: response.data.lon
                    // }
                    this.loading.localizar = false;

                // Se agrega en sugerencias
                    this.locationQuery = response.data.display_name;
                    let addressSearch =  response.data ?  response.data : null;

                    let suggestions = [{
                        text: addressSearch.display_name,
                        value: addressSearch
                    }]

                    this.addressSearch = addressSearch;
                    this.suggestions = suggestions;

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
                dni: this.dni,
                nationality: this.nationality
            }

            // console.log('formValidate', form)
            //Hacer Validaciones manuales

            Object.keys(form).forEach( field => {
                const value = form[field];

                switch(field){
                    case 'gender':
                    case 'dni':
                    case 'address':
                    case 'nationality':
                    case 'phone': {
                        if (!value.length){
                            errors[field] = [ 'Por favor completa el campo, es requerido!' ];
                            errorsExist = true;
                        }
                    }; break;
                    case 'description': {
                        if (!value.length){
                            errors[field] = [ 'Por favor completa el campo, es requerido!' ];
                            errorsExist = true;
                        }
                        if (value.length >= 255){
                            errors[field] = [ 'Maximo de Caracteres!' ];
                            errorsExist = true;
                        }

                    };break;
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

                address: this.addressSearch.display_name,
                country: this.addressSearch.address.country,
                county: this.addressSearch.address.county,
                state:   this.addressSearch.address.state,
                town: this.addressSearch.address.road + " " + this.addressSearch.address.town,
                amenity: this.addressSearch.address.amenity,
                postal_code: this.addressSearch.address.postcode,
                lat: this.addressSearch.lat,
                lng: this.addressSearch.lon,

                description: this.description,
                dni: this.dni,
                nationality: this.nationality,
                own_vehicle: this.own_vehicle,
                driving_license: this.driving_license,
                first_aid: this.first_aid,
                has_children: this.has_children,

                spoken_language: this.selectedLanguages
            }

            console.log('formSubmit', form)

            try{
                const response = await this.callApi('post', 'app/users/completeProfile', form)
                if (response.status === 200){
                    let user = response.data.user;
                    this.$store.dispatch('updateUser',{user})
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
<LayoutStandar>
<section 
    class="d-flex align-items-center justify-content-center" 
    style="min-height: 950px bg-light"
>
    <div class="container col-md-10 col-lg-6 col-12 info p-2 mt-4">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="h2 text-muted">Completa Tu Perfil</h2>
            </div>

        </div>
        <div class="row mb-4">
            <!-- Start Selecionar Foto -->
            <div class="col-12 mt-2">
                <div id='preview' class="d-flex justify-content-center">
                    <div v-if="loading.avatar">
                        <b-spinner type="grow" label="Spinning" />
                    </div>
                    <div v-else>
                        <img
                            v-if="url"
                            :src="url"
                            width="100"
                            height="100"
                            style="cursor:pointer;"
                            @click="selectImage()"
                        />
                    </div>
                    <div v-if="!url && !loading.avatar" class="row text-center">
                        <div class="col-md-8 col-12">
                            <p 
                                class="text-muted"
                                style="font-size: 12px;"
                            >
                                Los perfiles sin fotografia inspiran desconfianza a los otros usuarios
                            </p>
                        </div>
                        <div class="col-md-2 col-12 text-center">
                            <b-button 
                                size="sm"
                                class='' 
                                variant="info" 
                                @click="selectImage()"
                            >
                                Subir Foto
                            </b-button>
                        </div>
                    </div>
                    <input 
                        ref="fileInput" 
                        id="input" 
                        type="file" 
                        style='display:none;'
                        @change="onFileChange" 
                        size="100"
                    >
                </div>
                <hr>

            </div>
            <!-- END Seleccionar Foto -->


            <!-- START Localizacion  -->
            <div class="col-12">
                <div class=" d-flex justify-content-center" v-if="!loading.localizar">
                    <!-- <div class="row align-items-center" v-if="!address">
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
                    </div> -->
                    <div class="col-12" style="">
                        <div class="row">
                            <div class="col-md-9 col-12">
                                <h6 class="font-weight-bold text-center">
                                    Ubicación
                                </h6>
                                <div class="d-flex">
                                    <b-form-input
                                        id="address"
                                        placeholder="Direccion Ciudad Pais"
                                        v-model="locationQuery"
                                        required
                                    />

                                    <div class="border ml-1 p-1"
                                        style="border-radius: 50%; cursor: pointer"
                                        placeholder="sugerencias"
                                        @click="geolocalizationAddress"
                                    >
                                        <SearchIcon />
                                    </div>
                                </div>
                                <!-- <p class="text-muted">{{this.addressSearch.display_name}}</p> -->
                                <div class="mt-2" v-if="suggestions.length">
                                    <b-form-select
                                        id="input-3"
                                        v-model="addressSearch"
                                        :options="suggestions"
                                        required
                                    ></b-form-select>
                                </div>
                            </div> 
                            <div class="col-md-3 col-12">
                                <div class="d-flex align-items-center" style="height: 100%;" >
                                    <div>
                                        <b-button   
                                            size="sm"
                                            class="btn btn-info" pill @click="localizar"
                                            v-b-tooltip.hover title="Click para obtener la ubicacion actual"
                                        >
                                            <MapPinIcon />    
                                        </b-button >
                                    </div>
                                </div>
                            
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
                        <div class="col-sm-6 col-12 text-center">
                            <label for="datepicker" class="text-muted">Fecha de Nacimiento</label>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex justify-content-center">
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
                                        locale="es-ES"
                                        aria-controls="example-input"
                                        @context="onContext"
                                        ></b-form-datepicker>
                                    </b-input-group-append>
                                </b-input-group>
                            </div>
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
                        <div class="col-sm-6 col-12 text-center">
                            <label for="" class="text-muted">Agrega una descripcion</label>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex justify-content-center">
                                <b-form-textarea
                                    id="textarea"
                                    v-model="description"
                                    placeholder="Escribe aqui..."
                                    rows="2"
                                    max-rows="4"
                                    style="width:300px"
                                />
                            </div>
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
                        <div class="col-sm-6 text-center">
                            <label for="dni" class="text-muted">
                                DNI/NIF/Passaporte 
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-center">
                                <b-form-input
                                    type="text"
                                    v-model="dni"
                                    style="width:200px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END DNI -->

            <!-- Start Nacionalidad -->
            <div class="col-12">
                <div class=" d-flex justify-content-center">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <label class="text-muted">Nacionalidad</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-center">
                                <b-form-input
                                    type="text"
                                    v-model="nationality"
                                    style="width:200px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Nacionalidad -->

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

            <!-- Start Languages -->

            <div 
                class="col-12 mb-3"
                v-if="$store.state.user.userType !== 'help'"
                >
                <div class="container">
                    <SelectedLanguages 
                        :changeHandler="changeHandleSelectedLanguages"
                    />
                </div>
            </div>

            <!-- End Languages -->

            <!-- Informacion Personal -->
            <div class="col-12" 
                v-if="$store.state.user.userType !== 'help'"
            >
                <div class="d-flex justify-content-center">
                    <div class="text-muted">
                        <div class="row">
                            <div 
                                class="col-md-6 col-12 d-flex justify-content-center"
                            >
                                <b-form-checkbox
                                    v-model="driving_license"
                                    name="check-button"
                                    switch
                                    size="lg"
                                    style="width: 220px"
                                >
                                    Carnet de Conducir
                                </b-form-checkbox>
                            </div>
                            <div class="col-md-6 col-12 d-flex justify-content-center">
                                <b-form-checkbox
                                    v-model="own_vehicle"
                                    name="check-button"
                                    switch
                                    size="lg"
                                    style="width: 220px"
                                >
                                    Vehículo Propio
                                </b-form-checkbox>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 d-flex justify-content-center">
                                <b-form-checkbox
                                    v-model="first_aid"
                                    name="check-button"
                                    switch
                                    size="lg"
                                    style="width: 220px"
                                >
                                    Primeros Auxilios
                                </b-form-checkbox>
                            </div>
                            <div class="col-md-6 col-12 d-flex justify-content-center">
                                <b-form-checkbox
                                    v-model="has_children"
                                    name="check-button"
                                    switch
                                    size="lg"
                                    style="width: 220px"
                                >
                                    Tiene niños
                                </b-form-checkbox>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 mt-4 ">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" @click="validate">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</section>
</LayoutStandar>
</template>