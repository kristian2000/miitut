<script>
import {
    MapPinIcon
} from 'vue-feather-icons';
import axios from 'axios'
import Multiselect from 'vue-multiselect'
import Shedule from '../../components/schedule';

export default {
    props: [
        'type',
        'categoryUser',
        'setCategoryUser',
        'updateCategoryUser'
    ],
    data(){
        return {
            loading: false,
            userCategory: { category: { label: ''}},
            user: this.$store.state.user,
            locale: 'Euro',
            locales: [
                { value: 'Euro', text: 'Euro €'}
            ],
            subcategoriesSelected: [],
            subcategories: [],
            form: {
                title: '',
                description: '',
                price: 1,
                yearExperience: 0,
                descriptionExperience: '',
                address: '',
                lat: 0,
                lng: 0
            },
            sheduleData: []
        }
    },
    components: {
        Multiselect,
        Shedule,
        MapPinIcon
    },
    async created(){
        console.log('createModal', this.categoryUser)
        if (this.categoryUser != null){
            this.form = {
                title: this.categoryUser.title,
                description: this.categoryUser.description,
                price:  this.categoryUser.price,
                yearExperience: this.categoryUser.yearExperience,
                descriptionExperience: this.categoryUser.descriptionExperience || '',
                address: this.$store.state.user.address,
                lat: this.$store.state.user.lat,
                lng: this.$store.state.user.lng
            }

            this.subcategoriesSelected = this.categoryUser.sub_categories ?? []
            //Subcategories
            const responseSubCat = await this.callApi('get', `app/categories/${this.categoryUser.category.id}/subcategories`)

            if (responseSubCat.status === 200){
                // console.log('res', responseSubCat)
                this.subcategories = responseSubCat.data.map( sub => ({
                    name: sub.label,
                    code: sub.id
                }))
            }

        }

        // Times Available Union

        let mapTimesAvailable = {};

        // this.categoryUser.times_available.forEach( time => {
        //     let doc = mapTimesAvailable[time.hours]
        //     if (!doc){
        //         mapTimesAvailable[time.hours] = { days: [ time.day ]}
        //     }else {
        //         mapTimesAvailable[time.hours].days.push(time.day)
        //     }
        // })

        this.userCategory = {
            ...this.categoryUser,
            // times_available: mapTimesAvailable
        };

        this.sheduleData = this.categoryUser.shedule;
    },
    methods: {
        setSheduleData(value){
            // console.log(value)
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
        // async changeHandleTimeAvailable(time){
        //     const response = await this.callApi('post', `app/categoriesUser/${this.categoryUser.id}/changeTimeAvailable`, time);
        //     return response;
        // },
        async getUbicacion(){
            const response = await this.localizar();
            this.form.address = response.address;
            this.form.lat = response.coords.lat;
            this.form.lng = response.coords.lng;
            console.log(response)
        },
        async submit(){
            const form = this.form;

            const data = {
                ...form,
                shedule: this.sheduleData,
                sub_categories: this.subcategoriesSelected
            }

            this.updateCategoryUser(data);
        }

    }
}
</script>

<template>
<section class="d-flex align-items-center" v-if="!loading">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h2 text-info">Datos de la Categoria</h2>
                <hr>
            </div>

        </div>
        <div class="row">
            <!-- START Nombre de la categoria -->
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <h4 class="text-info h4">{{categoryUser.category.label}}</h4>
                </div>
                <!-- <hr> -->
            </div>
            <!-- End  Nombre de la categoria  -->

            <!-- START Informacion Basica -->
            <div class="col-12 mt-2">
                <b-card-group deck class="mb-3">
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
                                    @tag="addTag">
                                </multiselect>
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
                                <div class="row">
                                    <div class="col-2">
                                         <b-button
                                            v-b-tooltip.hover
                                            title="Click para obtener tu ubicacion actual"
                                            variant="outline-success"
                                            @click="getUbicacion"
                                        >
                                            <MapPinIcon />
                                        </b-button>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-muted"> {{user.address}} </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </b-card>
                </b-card-group>
            </div>
            <!-- End Informacion Basica -->

            <!-- START Experiencia -->
            <div class="col-12">
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
                        <Shedule
                            :sheduleData="sheduleData"
                            :setSheduleData="setSheduleData"
                            :dataInitial = categoryUser.shedule
                        />
                    </b-card>
                </b-card-group>
            </div>
            <!-- END Horario -->

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success" @click="submit">
                        Editar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

