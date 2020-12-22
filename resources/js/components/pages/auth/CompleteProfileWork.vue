<script>
import axios from 'axios'
import Multiselect from 'vue-multiselect'
import Shedule from '../../../components/schedule';

export default {
    data(){
        return {
            loading: true,
            user: this.$store.state.user,
            userCategory: { category: {label: ''}},
            locale: 'Dolar',
            locales: [
                { value: 'Dolar', text: 'Dolar $'}
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
        Shedule
    },
    async created(){
        if (!this.$store.state.user){
              this.$router.push('/');
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

            let mapTimesAvailable = {};

            response.data.times_available.forEach( time => {
                let doc = mapTimesAvailable[time.hours]
                if (!doc){
                    mapTimesAvailable[time.hours] = { days: [ time.day ]}
                }else {
                    mapTimesAvailable[time.hours].days.push(time.day)
                }
            })

            this.userCategory = {
                ...response.data,
                times_available: mapTimesAvailable
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
            this.subcategories.push(tag)
        },
        async changeHandleTimeAvailable(time){
            const response = await this.callApi('post', `app/categoriesUser/${this.userCategory.id}/changeTimeAvailable`, time);
            return response;
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
                address: this.user.address
            }

            console.log('data', data);
            console.log('shedule', this.sheduleData)
            //     console.log('form', form)
            const res = await this.callApi('post', `app/categoriesUser/${this.userCategory.id}/completeProfileWork`, data)

            console.log('response', res)

            if (res.status === 200){
                this.$store.commit('setUpdateUser', res.data.user)
                this.$router.push('/')
            }
        }

    }
}
</script>

<template>
<section class="d-flex align-items-center" v-if="!loading">
    <div class="container col-md-6 col-12 mt-4">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="display-4 text-info">Datos de la Categoria</h2>
            </div>

        </div>
        <div class="row">
            <!-- START Nombre de la categoria -->
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <label for="" class="text-info h2">{{userCategory.category.label}}</label>
                </div>
                <!-- <hr> -->
            </div>
            <!-- End  Nombre de la categoria  -->

            <!-- START Informacion Basica -->
            <div class="col-12 mt-3">
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
                        <Shedule
                            :sheduleData="sheduleData"
                            :setSheduleData="setSheduleData"
                            :changeHandleServer="changeHandleTimeAvailable"
                            :dataInitial = userCategory.times_available
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
</template>

