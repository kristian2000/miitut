<script>
import axios from 'axios'
import Multiselect from 'vue-multiselect'
import Shedule from '../../../components/schedule';

import LayoutStandar from '../../../layouts/LayoutStandar'

export default {
    data(){
        return {
            loading: true,
            user: this.$store.state.user,
            userCategory: { category: {label: ''}},
            locale: 'Euro',
            locales: [
                { value: 'Euro', text: 'Euro €'}
            ],
            subcategoriesSelected: [],
            subcategories: [],
            form: {
                title: 'Ofrezco servicio de limpieza',
                description: 'muy buen servicio',
                price: 1,
                yearExperience: 0,
                descriptionExperience: 'Ps cocino rico'
            },
            sheduleData: []
        }
    },
    components: {
        Multiselect,
        Shedule,
        LayoutStandar
    },
    async created(){
        const user = this.$store.state.user;

        if (!user || user.fase_registry !== 'completeProfileWork'){
            this.isAuthRedirect();
        }else{
            const response = await this.callApi('get', 'app/categoriesUser/pending')
            console.log('CategoryPeding', response.data)

            if (response.status === 200) {
                const responseSubCat = await this.callApi('get', `app/categories/${response.data.category.id}/subcategories`)

                if (responseSubCat.status === 200){
                    // console.log('res', responseSubCat)
                    this.subcategories = responseSubCat.data.map( sub => ({
                        name: sub.label,
                        code: sub.id
                    }))
                }
            }


            this.userCategory = {
                ...response.data,
                // times_available: mapTimesAvailable
            };

            // console.log('map',mapTimesAvailable)
            // this.setSheduleDataInitial();
            this.loading = false;
        }
    },
    methods: {
        setSheduleData(value){
            this.sheduleData = value;
        },
        addTag (newTag){
            const tag = {
                name: newTag,
                code: newTag
            }
            this.subcategoriasSelected.push(tag)
            // this.subcategories.push(tag)
        },
        async changeHandleTimeAvailable(time){
            // const response = await this.callApi('post', `app/categoriesUser/${this.userCategory.id}/changeTimeAvailable`, time);
            // return response;
        },
        async submit(){
            const form = this.form;

            let error = false;
            // Hacer Validacion manual
            Object.keys(form).forEach( field => {
                const value = form[field]
                console.log(value)
                if (value === '' ) {
                    this.makeNotice('danger', 'Faltan Datos', 'Por favor complete el campo ' + field)
                    error = true;
                }
            })

            if (error) return ;

            const data = {
                ...form,
                address: this.user.address,
                lat: this.user.lat,
                lng: this.user.lng,
                shedule: this.sheduleData,
                subcategoriasSelected: this.subcategoriesSelected
            }

            console.log('data', data);
            // console.log('shedule', this.sheduleData)
            //     console.log('form', form)
            const res = await this.callApi('post', `app/categoriesUser/${this.userCategory.id}/completeProfileWork`, data)

            console.log('response', res)

            if (res.status === 200){
                const user = res.data.user;

                this.$store.dispatch('updateUser', {user})
            }
        }

    }
}
</script>

<template>
<LayoutStandar>
<section class="col-md-10 col-lg-6 col-12 info my-3" v-if="!loading">
    <div class="p-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="text-info title-completeWork">Datos del Servicio</div>
            </div>

        </div>
        <div class="row">
            <!-- START Nombre de la categoria -->
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <label for="" class="text-info subtitle-completeWork">
                        {{userCategory.category.label}}
                    </label>
                </div>
                <!-- <hr> -->
            </div>
            <!-- End  Nombre de la categoria  -->

            <!-- START Informacion Basica -->
            <div class="col-12">
                <b-card-group deck class="">
                <b-card border-variant="light" header="Informacion Basica" class="text-center">
                    <div class=" d-flex justify-content-center">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <multiselect v-model="subcategoriesSelected"
                                    tag-placeholder="Agrega un nueva subcategoria"
                                    placeholder="Estoy disponible para"
                                    label="name" track-by="code"
                                    :options="subcategories" :multiple="true"
                                    :taggable="true"
                                    @tag="addTag"
                                    selectedLabel="Seleccionado"
                                    select-label="+"
                                    deselect-label="-"
                                />
                            </div>
                            <div class="col-12 mb-3">
                                <b-form-input
                                    id="input-1"
                                    v-model="form.title"
                                    type="text"
                                    placeholder="Escribe un titulo para tu servicio"
                                    required
                                ></b-form-input>
                            </div>
                            <div class="col-12">
                                <b-form-textarea
                                    id="textarea"
                                    v-model="form.description"
                                    placeholder="Escribe Una Descripcion..."
                                    rows="2"
                                    max-rows="6"
                                ></b-form-textarea>
                            </div>

                            <div class="col-6 mt-3">
                                <label for="" class="text-muted">Moneda</label>
                                <b-form-select id="sb-locales" v-model="locale" :options="locales"></b-form-select>
                            </div>

                            <div class="col-6 mt-3">
                                <label for="" class="text-muted">Costo por hora</label>
                                <b-form-spinbutton id="demo-sb" v-model="form.price" min="1" max="100"></b-form-spinbutton>
                            </div>

                            <div class="col-12 mt-3">
                                <label for="" class="text-muted">Ubicacion</label>
                                <div class="text-muted">{{user.address}}</div>
                            </div>

                        </div>

                    </div>
                </b-card>
                </b-card-group>
            </div>
            <!-- End Informacion Basica -->

            <!-- START Experiencia -->
            <div class="col-12 mt-3">
                <b-card-group deck class="">
                    <b-card border-variant="light" header="Cuentanos tu Experiencia" class="text-center">
                        <div class=" d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12">
                                    <b-form-textarea
                                        id="textarea"
                                        v-model="form.descriptionExperience"
                                        placeholder="Escribe aqui ..."
                                        rows="2"
                                        max-rows="6"
                                    ></b-form-textarea>
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="" class="text-muted">Años de Experiencia</label>
                                </div>
                                <div class="col-6 mt-3">
                                    <b-form-spinbutton id="demo-sb" v-model="form.yearExperience" min="0" max="100"></b-form-spinbutton>
                                </div>

                            </div>

                        </div>
                    </b-card>
                </b-card-group>
            </div>
            <!-- END Experiencia -->

            <!-- START Horario -->
            <div class="col-12 mt-3">
                <b-card-group deck class="mb-3">
                    <b-card border-variant="light" header="Asigna tu horario" class="text-center">
                            <!-- :changeHandleServer="changeHandleTimeAvailable" -->
                            <!-- :dataInitial = userCategory.times_available -->
                        <Shedule
                            :sheduleData="sheduleData"
                            :setSheduleData="setSheduleData"
                            :create="true"
                        />
                    </b-card>
                </b-card-group>
            </div>
            <!-- END Horario -->

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" @click="submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</section>
</LayoutStandar>
</template>

<style scoped>
    .title-completeWork {
        font-size: 2rem;
    }
    .subtitle-completeWork {
        font-size: 1.5rem;
    }
</style>
