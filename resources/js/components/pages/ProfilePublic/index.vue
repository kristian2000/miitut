<script>
import {
  ArrowUpIcon,
  UserIcon,
  MailIcon,
  FacebookIcon,
  InstagramIcon,
  TwitterIcon,
  LinkedinIcon,
  GithubIcon,
  YoutubeIcon,
  GitlabIcon,
  GiftIcon,
  HomeIcon,
  MapPinIcon,
  GlobeIcon,
  ServerIcon,
  PhoneIcon,
  BookIcon,
  MessageCircleIcon,
  FlagIcon
} from 'vue-feather-icons';

import MenuAccount from './MenuPublic'
import Shedule from '../../../components/schedule';
import FormContract from '../../form/FormContract';

import Score from '../../score';

export default {
    data(){
        return {
            zoom: 16,
            center: [0, 0],
            rotation: 0,
            geolocPosition: undefined,
            loading: true,
            textMessage: '',
            user: {},
            categoryUser: null,
            sheduleData: [],
            descriptionReport: '',
            loadingReport: false,
            loadingCategoryUser: true,
            loadingContract: false
        }
    },
    components: {
        ArrowUpIcon,
        UserIcon,
        MailIcon,
        FacebookIcon,
        InstagramIcon,
        TwitterIcon,
        LinkedinIcon,
        GithubIcon,
        YoutubeIcon,
        GitlabIcon,
        GiftIcon,
        HomeIcon,
        MapPinIcon,
        GlobeIcon,
        ServerIcon,
        PhoneIcon,
        BookIcon,
        MessageCircleIcon,

        MenuAccount,
        // CheckIcon,
        // XIcon,
        FlagIcon,
        Shedule,
        FormContract,
        Score,
    },
    async created(){
        const id = this.$route.params.id;
        // console.log('ro', this.$route)
        const response = await this.callApi('get', `/app/categoriesUser/${id}`);
        if (response.status === 200){
            this.categoryUser = {
                ...response.data,
                // times_available: mapTimesAvailable
            };

            let coords = [ Number(response.data.lng), Number(response.data.lat) ]

            this.geolocPosition = coords;
            this.center =  coords;
            console.log('categoryUser', response.data)
        }

        this.loadingCategoryUser = false;
    },
    computed: {
        calculateAge(){
            let now = new Date();
            let birthdate = new Date(this.categoryUser.user.birthdate);
            let yearOld = now.getFullYear() - birthdate.getFullYear();
            let m = now.getMonth() - birthdate.getMonth();

            if (m < 0 || (m === 0 && now.getDate() < birthdate.getDate())){
                return yearOld;
            }

            return --yearOld;
        }
    },
    methods: {
        booleanToYesOrNot(boolean){
            return boolean ? 'Si' : 'No'
        },
        changeHandleMenu(active){
            this.active = active;
        },
        setSheduleData(values){
            this.sheduleData = values;
        },
        showModalSendMessage(item){
            this.$bvModal.show('modalSendMessage')
        },
        showModalSendContract(item){
            this.$bvModal.show('modalSendContract')
        },
        async sendContract(form){
            this.loadingContract = true;
            const response = await this.callApi('post', '/app/contracts/create', form);
            console.log('responseAxios', response)
            if (response.status === 200){
                this.makeNotice('success', 'Contrato Enviado', 'Felicidades tu contrato se ha enviado exitosamente');
            }else {
                 this.makeNotice('danger', 'Error', 'Se presento un error al enviar el contrato');
            }
            this.loadingContract = false;
            this.$bvModal.hide('modalSendContract')
        },
        async sendMessage(){
            let form = {
                to: this.categoryUser.user.id,
                message: this.textMessage
            }
            console.log('sendMessage', form)

           if (this.formatStringEmailPhones(form.message)){
                return ;

            }

            const response = await this.callApi('post', '/app/chats/sendMessage', form);
            console.log('responseAxios', response)
            if (response.status === 200){
                this.textMessage = '';
                this.makeNotice('success', 'Mensaje Enviado', 'Felicidades tu mensaje se ha enviado exitosamente');
            }else {
                 this.makeNotice('danger', 'Error', 'Se presento un error al enviar el mensaje');
            }

            this.$bvModal.hide('modalSendMessage')
        },
        async reportUser(){
            if (!this.descriptionReport.trim().length){
                return '';
            }

            this.loadingReport = true;

            let form = {
                userReported: this.categoryUser.user.id,
                categoryReported: this.categoryUser.id,
                description: this.descriptionReport
            }

            const response = await this.callApi('post', '/app/users/reportUser', form);

            if (response.status === 200){
                this.$bvModal.hide('modalReport')
                this.descriptionReport = '';
                this.makeNotice('success', 'Informacion', 'Reporte enviado exitosamente!');
            }
            this.loadingReport = false;
            console.log('responseAxios', response)
        }
    }
}
</script>

<template>
  <div>
    <!-- Hero Start -->
    <section
      class="bg-half-260 d-table w-100"
      style="
        background: url('/images/Calendario.png') no-repeat; 
        background-size: cover;
        
        "
    >
      <div class="bg-overlay"></div>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Candidate Detail Start -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-12">
            <div class="card job-profile shadow border-0">
              <div class="text-center py-5 border-bottom rounded-top">
                <img
                  :src="avatarDefault(categoryUser.user.avatar)"
                  class="avatar avatar-medium mx-auto rounded-circle shadow d-block"
                  alt=""
                />
                <h5 class="mt-3 mb-0"> {{ categoryUser.user.name }} </h5>
                <p class="text-muted mb-0">{{ categoryUser.category.label }}</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">Detalles Personales :</h5>

                <ul class="list-unstyled">
                    <li class="h6">
                        <gift-icon class="fea icon-sm text-warning mr-2" />
                        <span class="text-muted">Edad :
                        </span> {{ calculateAge }}
                    </li>

                  <li class="h6">
                    <home-icon class="fea icon-sm text-warning mr-2" />
                    <span class="text-muted">Sexo :
                    </span> {{ categoryUser.user.gender == 'man'? 'Masculino' : 'Femenino' }}
                  </li>
                  <li class="h6">
                    <map-pin-icon
                      class="fea icon-sm text-warning mr-2"
                    />
                    <span class="text-muted">Poblado :
                    </span> London
                  </li>
                  <li class="h6">
                    <globe-icon
                      class="fea icon-sm text-warning mr-2"
                    />
                    <span class="text-muted">Provincia :
                    </span> {{ categoryUser.user.state }}
                  </li>
                  <li class="h6">
                    <server-icon
                      class="fea icon-sm text-warning mr-2"
                    />
                    <span class="text-muted">Código Postal :
                    </span> 521452
                  </li>
                  <li class="h6">
                    <span class="text-muted">Nacionalidad :
                    </span>{{ categoryUser.user.nationality }}
                  </li>

                    <li class="h6">
                        <span class="text-muted">Carnet de Conducir :
                        </span> {{ booleanToYesOrNot(categoryUser.user.driving_license) }}
                    </li>
                    <li class="h6">
                        <span class="text-muted">Vehiculo Propio :
                        </span> {{ booleanToYesOrNot(categoryUser.user.own_vehicle) }}
                    </li>
                    <li class="h6">
                        <span class="text-muted">Primero Auxilios :
                        </span> {{ booleanToYesOrNot(categoryUser.user.first_aid) }}
                    </li>
                    <li class="h6">
                        <span class="text-muted">Percio por hora :
                        </span> {{ categoryUser.price }} €
                    </li>
                </ul>

                <!-- Start Map -->
                <div>
                    <vl-map :load-tiles-while-animating="true" :load-tiles-while-interacting="true"
                            data-projection="EPSG:4326" style="height: 200px">
                    <vl-view :zoom.sync="zoom" :center.sync="center" :rotation.sync="rotation"></vl-view>

                    <template >
                        <vl-feature v-if="geolocPosition" id="position-feature">
                            <vl-geom-point :coordinates="geolocPosition"></vl-geom-point>
                            <vl-style-box>
                                <vl-style-icon src="/assets/marker.png" :scale="0.4" :anchor="[0.5, 1]"></vl-style-icon>
                            </vl-style-box>
                        </vl-feature>
                    </template>

                    <vl-layer-tile id="osm">
                        <vl-source-osm></vl-source-osm>
                    </vl-layer-tile>
                    </vl-map>
                </div>
                <!-- End Map -->
                
                <div class="mt-4">
                  <div
                    @click="showModalSendMessage"
                    class="btn btn-block btn-primary"
                    ><i class="mdi mdi-email"></i> Preguntar
                  </div>
                  <div
                    @click="showModalSendContract"
                    class="btn btn-block btn-primary"
                    >Contratar
                  </div>
                </div>


                <div class="my-4">
                  <div class="text-muted">
                    Valoración

                    <div class="m-2 border-bottom">
                        <div class="d-flex justify-content-center align-items-center">
                            <Score
                                :scoreStar="Number(categoryUser.user.score) ?
                                    Number(categoryUser.user.score)/Number(categoryUser.user.ratings) + 1
                                    :
                                    0"
                                sizeStar="sm"
                            />
                            <div class="">
                                <div 
                                    class="text-muted font-weight-bold ml-2" 
                                    style="font-size: 14px"
                                >
                                    ( {{ categoryUser.user.ratings }} )
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <div class="m-2" v-if="$store.state.user.userType === 'help'">
                      <div 
                          class="font-weight-bold report" 
                          @click="$bvModal.show('modalReport')"
                      >
                          <FlagIcon size="1.2x"/>
                          Reportar 
                      </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!--end col-->

          <div class="col-lg-8 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="ml-lg-4">
              <h4>Sobre mi :</h4>
              <p class="text-muted">
                {{ categoryUser.description }}
              </p>

              <h4 class="mt-lg-5 mt-4">Servicios Prestados :</h4>
              <div>
                <h5 class="mt-2">{{ categoryUser.category.label }}</h5>
                <div>
                  <img 
                    :src="`/images/categories/${categoryUser.category.name}.jpg`" 
                    alt=""
                    width="400"
                  >
                </div>
              </div>

              <!-- Experience Start -->
              <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                  <div class="media">
                    <div class="company-logo text-muted h6 mr-3 text-center">
                      <img
                        src="/images/job/Codepen.svg"
                        class="avatar avatar-md-sm mx-auto d-block mb-2"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h5 class="title mb-0">Experiencia :</h5>
                      <small class="text-muted company-university"
                        >Promedio de {{ categoryUser.yearExperience }} {{ categoryUser.yearExperience < 1 ? 'Años' : 'Año'}}</small
                      >
                      <p class="text-muted mt-2 mb-0">
                        {{ categoryUser.descriptionExperience }}
                      </p>
                    </div>
                  </div>
                </div>
                <!-- end Experiencia -->

                <div class="col-lg-12 mt-4 pt-2">
                  <div class="media">
                    <div class="company-logo text-muted h6 mr-3 text-center">
                      <img
                        src="/images/job/Circleci.svg"
                        class="avatar avatar-md-sm mx-auto d-block mb-2"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h5 class="title mb-0">Disponibilidad</h5>
                      <div class="text-muted mt-2 mb-0">
                        <b-card-group deck class="mb-3">
                            <b-card border-variant="light" class="text-center">
                                    <!-- :dataInitial = categoryUser.shedule -->
                                <Shedule
                                    :disabled="true"
                                    :sheduleData="categoryUser.shedule"
                                    :setSheduleData="()=>{}"
                                />
                            </b-card>
                        </b-card-group>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end Disponibilidad -->

                <div 
                  class="col-lg-12 mt-4 pt-2"
                  v-if="categoryUser.comments.length"
                  >
                  <div class="media">
                    <div class="company-logo text-muted h6 mr-3 text-center">
                      <div style="width:40px"></div>
                    </div>
                    <div class="media-body">
                      <h5 class="title mb-0">Comentarios:</h5>
                      <div class="text-muted mt-2 mb-0">
                          <div class="container" style="max-height: 400px; overflow: scroll">

                            <div v-for="(comment, index) in categoryUser.comments" :key="index">
                                <div class="d-flex">
                                    <div class="user-comment ">
                                        <div>
                                            <img
                                                :src="comment.user.avatar ? comment.user.avatar : 'images/avatarDefault.jpg'"
                                                class="avatar-comment"
                                                width="80px"
                                                height="80px"
                                                alt=""
                                            >
                                        </div>
                                        <div>
                                            <!-- Nombre -->
                                            <span class="font-weight-bold name" style="font-size: 14px">
                                                {{ comment.user.name }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="border p-2 comment" >
                                        <div style="max-height: 150px; overflow: scroll">
                                            {{ comment.comment }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                          </div>
                      </div>
                      <!-- end comentarios -->
                    </div>
                  </div>
                </div>
              </div>
              <!--end row-->

              <!-- Experience End -->
              <!--end row-->
<!-- 
              <div class="mt-4 pt-2">
                <a href="javascript:void(0)" class="btn btn-primary mr-2"
                  ><i class="mdi mdi-account-check"></i> Hire me</a
                >
                <a href="javascript:void(0)" class="btn btn-outline-primary"
                  ><i class="mdi mdi-printer"></i> Print CV</a
                >
              </div> -->
            </div>
          </div>
          <!--end col-->
        </div>
        <!--enn row-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->


    <!-- Start Modal Enviar Mensaje -->
    <div>
        <b-modal
            id="modalSendMessage"
            title="Enviar Mensaje"
            scrollable
            hide-footer
        >
            <b-form-textarea
                v-model="textMessage"
                id="textarea"
                placeholder="Escribe tu mensaje..."
                rows="3"
                max-rows="6"
            ></b-form-textarea>
            <div 
                class="d-flex justify-content-center mt-3"
                @click="sendMessage"
            >
                <b-button pill variant="outline-secondary">
                    Enviar
                </b-button>
            </div>
        </b-modal>
    </div>
    <!-- End Modal  Enviar Mensaje -->

    <!-- Start Modal Contrato -->
    <div>
        <b-modal
            id="modalSendContract"
            title="Enviar Solicitud de Contrato"
            scrollable
            hide-footer
            size="lg"
        >
            <div v-if="!loadingContract">
                <FormContract
                    :categoryUser="categoryUser"
                    :onSubmit="sendContract"
                    :loading="loading"
                    userType="help"
                    :edit="true"
                    typeForm="create"
                />
            </div>
            <div v-else>
                <div 
                    class="d-flex justify-content-center align-items-center" 
                    style="min-height: 250px"
                >
                    <div>
                        <b-spinner 
                            type="grow" 
                            label="Spinning" 
                        />
                    </div>
                </div>
            </div>
        </b-modal>
    </div>
    <!-- End Modal Contrato -->

    <!-- Start Modal Report -->
    <div>
        <b-modal
            id="modalReport"
            title="Reportar Usuario"
            scrollable
            hide-footer
        >
            <div 
                v-if="!loadingReport" 
                style="min-height: 200px"
            >
                <b-form-group
                    description="Su reporte sera evaluado y se realizaran las acciones necesarias ."
                    label="Describe el problema que observas en este perfil"
                    label-for="report"
                >
                    <b-form-textarea
                        id="report"
                        v-model="descriptionReport"
                        placeholder="Escribe aqui..."
                        rows="3"
                        max-rows="6"
                    ></b-form-textarea>
                </b-form-group>
                <div>
                    <div class="d-flex justify-content-center" >
                        <b-button 
                            pill 
                            variant="outline-secondary"
                            @click="reportUser"
                        >
                            Enviar
                        </b-button>
                    </div>
                </div>
            </div>
            <div v-else>
                <div 
                    class="d-flex justify-content-center align-items-center" 
                    style="min-height: 250px"
                >
                    <div>
                        <b-spinner 
                            type="grow" 
                            label="Spinning" 
                        />
                    </div>
                </div>
            </div>
        </b-modal>
    </div>
    <!-- End Modal Report -->
  </div>
</template>

<style>

    .user-comment {
        width: 100px;
    }

    .avatar-comment {
        border-radius: 50%;
        width: 60px;
        height: 60px;
    }

    .comment {
        width: 350px;
        border-radius: 15px;
    }

    .report {
        position: absolute; 
        right:0; 
        font-size: 12px;
        cursor: pointer;
        border-radius: 10px;
        padding: 5px;
    }

    .report:hover {
        background: #eee
    }

    .job-profile {
      position: 'absolute'
    }

    @media (min-width: 768px) and (max-width: 1023px){
      .job-profile {
        top: -450px;
      }
    }

    @media (max-width: 767px){
      .bg-home, .bg-half-170, .bg-half-260, .main-slider .slides .bg-slider, .bg-marketing, .swiper-slider-hero .swiper-container .swiper-slide {
          padding: 100px 0;
          height: auto;
      }
    }

</style>
