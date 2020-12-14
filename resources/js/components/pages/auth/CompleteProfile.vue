<template>
<section class="d-flex align-items-center">
    <div class="container col-md-6 col-12 mt-4">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="h2">Completar tus datos basicos</h2>
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
                <div class=" d-flex justify-content-center">
                    <div class="row align-items-center" v-if="!address">
                        <div class="col-8">
                            <label for="datepicker" class="text-muted">Click para obtener tu ubicacion</label>
                        </div>
                        <div class="col-4">
                            <b-button  class="btn btn-info" pill @click="localizar">Buscar</b-button >
                        </div>
                    </div>
                    <div v-else>
                        <div>
                            <p> {{address}}  </p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Localizacion -->

            <!-- Start Genero -->
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="d-flex justify-content-between">
                            <label for="">Genero </label>
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
                            <label for="datepicker">Fecha de Nacimiento</label>
                        </div>
                        <div class="col-6">
                            <input type="date" @change="dateSelected">
                            <!-- <b-form-datepicker id="datepicker" v-model="value" class="mb-2" /> -->
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- END Fecha de Nacimiento -->

            <!-- START Telefono -->

            <div class="col-12">
                <div class=" d-flex justify-content-center">
                    <div class="row">
                        <!-- <div class="col-4">
                            <label for="datepicker">Telefono</label>
                        </div> -->
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
                    <button class="btn btn-success" @click="submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return {
            url: null,
            file: null,
            gender: 'woman',
            date: null,
            phone: '',
            coords: null,
            address: null
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

            // this.url = URL.createObjectURL(image)
            // this.file = image


        },
        dateSelected(e){
            this.date = e.target.value;
        },
        localizar(){
            navigator.geolocation.getCurrentPosition(async (pos)=>{
                console.log(pos)
                const response = await axios
                    .get(`https://nominatim.openstreetmap.org/reverse?lat=${pos.coords.latitude}&lon=${pos.coords.longitude}&format=json`)

                if (response.status === 200){
                    let { county, state, postcode, country } = response.data.address;
                    this.address = `${county}, ${state}, ${postcode}, ${country}`;
                    this.coords = {
                        lat: response.data.lat,
                        lon: response.data.lon
                    }
                }
            },(error)=>{
                this.makeNotice('danger', 'Error Ubicando', 'Permiso de ubicacion rechazado por el usuario, por favor, aceptar y reintentar.');
                console.log('error', error)
            })
        },
        async submit(){
            // if (this.date === null || this.phone === '' || this.address === null){
            //     this.makeNotice('danger', 'Faltan Datos', 'Por favor completos los campos. requeridos: *Ubicacion, *Fecha de Nacimiento, *Telefono')
            // }else{
                const form = {
                    phone: this.phone,
                    gender: this.gender,
                    birthdate: this.date,
                    address: this.address,
                    latitude: this.coords.lat,
                    longitude: this.coords.lon
                }

                const res = await this.callApi('post', 'app/users/updateProfile', form)
                // const res = await axios.post('app/users/updateProfile', formData, {
                //     headers: {
                //         'Content-Type': 'multipart/form-data'
                //     }
                // });
                console.log('submit', res)
            // }

            if (res.status === 200){
                this.$store.commit('setUpdateUser', res.data.user)
                this.$router.push('account-profile');
            }
        }
    }
}
</script>
