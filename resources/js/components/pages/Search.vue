<script>
import {
    Trash2Icon,
    SearchIcon,
    ChevronDownIcon,
    ChevronUpIcon,

    CheckCircleIcon,
    CheckIcon,
    XIcon,
    AwardIcon,
    UserCheckIcon,
    ThumbsUpIcon,

    StarIcon,
    BookmarkIcon,
    MapPinIcon,
    NavigationIcon
} from 'vue-feather-icons';

import Score from '../score.vue';

export default {
    data() {
        return {
            // Map
            zoom: 13,
            center: [0, 0],
            rotation: 0,
            geolocPosition: undefined,
            markers: [],
            showMap: true,

            // Form
            form: {
                category: '',
                subCategory: '',
                localization: '',
                score: 1,
                yearExperience: 0,
                priceMin: 1,
                priceMax: 10,
                radius: 5

            },
            locationQuery: '',
            addressSearch: null, //lat y long
            suggestions: [{text: 'Sugerencias al buscar tu ubicacion', value: null}],
            categoriesForm : [],
            categories: [],
            categoriesUserWork: [],
            scoreOptions: [
                { text: 'Todos', value: 1},
                { text: 'De 2 en adelante', value: 2},
                { text: 'De 3 en adelante', value: 3},
                { text: 'De 4 en adelante', value: 4},
                { text: 'Solo 5 Estrellas', value: 5}
            ],

            //loading,
            loadingCategoriesUser: false,
            loadingSearchAddress: false
        }
    },
    components: {
        Trash2Icon,
        SearchIcon,
        ChevronDownIcon,
        ChevronUpIcon,
        CheckCircleIcon,
        CheckIcon,
        AwardIcon,
        UserCheckIcon,
        ThumbsUpIcon,
        StarIcon,
        Score,
        MapPinIcon,
        NavigationIcon,
        XIcon
    },
    async created(){
        const response = await this.callApi('get', `app/categories/getWithSubcategories`);
        console.log(response)

        if (response.status === 200){
            let categories = response.data.map( category => ({
                value: category,
                text: category.label,
            }));

            this.categories = categories;
            console.log('categories',categories)
        }

        // Si se detecta un usuario registrado
        if (this.$store.state.user){

            this.locationQuery = this.$store.state.user.address;
            this.addressSearch = {
                lat: this.$store.state.user.lat,
                lon: this.$store.state.user.lng
            }
        }

        if (this.$route.params.type === 'quickSearch'){
            this.form.category = this.$route.params.category;
            this.locationQuery = this.$route.params.address;
            this.form.radius = 30;

           // Buscar la lat, lng con la direccion
           await this.geolocalizationAddress();

           // hacer la busqueda de categoryUser
           
            if (this.addressSearch){
                this.submit();
            }
        }

        console.log('Params', this.$route.params);

    },
    computed: {
        subCategories(){
            return this.form.category.subcategories?.map( subCategory => ({
                text: subCategory.label,
                value: subCategory
            })) ?? []
        },
        centerMap: {
            get(){
                return this.addressSearch ? 
                    [Number(this.addressSearch.lon), Number(this.addressSearch.lat) ]
                    : 
                    [0, 0]
            },
            set(){
                return ;
            }
        },
        user() {
            this.$store.state.user
        }
    },
    methods: {
        validate(){
            if (!this.addressSearch){
                return this.makeNotice('danger', 'La ubicacion es requerida', 'Por favor escribe tu direccion, dale click en el icono de buscar y escoge una sugerencia de ubicacion')
            }
            this.submit();
        },
        async submit(){
            // loading
            this.loadingCategoriesUser = true;

            let form = this.form;
            let formData = Object.keys(form)
                .reduce( (acc, value)=> {
                    if (form[value] !== ''){
                        return {
                            ...acc,
                            [value]: value != 'category' ? form[value] : form[value].id
                        }
                    }
                    return acc;
                } , {
                    lat: this.addressSearch.lat,
                    lng: this.addressSearch.lon
                })

            console.log('search', formData)

            try{
                const response = await this.callApi('post', 'app/categoriesUser/getCategoriesUserWork', formData)

                if (response.status === 200){
                    let categoriesUserWork = response.data.users

                    let markers = categoriesUserWork.map(categoryUser => ({
                        id: categoryUser.id,
                        lat: categoryUser.lat,
                        lng: categoryUser.lng
                    }))

                    this.markers = markers;
                    this.categoriesUserWork = categoriesUserWork;

                    console.log('markers', markers)
                    console.log('getUsersWork', response.data)
                }
            }catch(error){
                console.log(error)
            }

            this.loadingCategoriesUser = false;
        },
        async geolocalizationAddress(){
            // Validacion
            if (this.locationQuery === ''){
                return ;
            }

            // loading
            this.loadingSearchAddress = true;

            const response = await axios.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.locationQuery}`)
            console.log('response location', response);

            let suggestions = response.data.map( address => ({
                text: address.display_name,
                value: address
            }))

            this.suggestions = suggestions;
            this.addressSearch =  suggestions.length ? suggestions[0].value : null;

            this.loadingSearchAddress = false;
        }

    }
}
</script>

<template>
<div>
    <!-- <Navbar :nav-light="true" /> -->

    <!-- Hero Start -->
    <section 
        class="bg-profile d-table w-100 bg-primary" 
        style="background: url('images/account/bg.png') center center;"
    >
        <div class="container">

                    <div class="card public-profile border-0 rounded shadow " style="z-index: 1; margin-top: 100px">
                        <div class="card-body ">

                            <div class="row">
                                <!-- START Formulario Filtros  -->
                                <div class="col-lg-4 col-12 mb-4 d-flex justify-content-center"
                                    style="height: 900px"
                                >
                                    <div class="row columna shadow" >
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Categoría</h6>
                                            <b-form-select
                                                id="input-3"
                                                v-model="form.category"
                                                :options="categories"
                                                required
                                            ></b-form-select>
                                        </div>
                                        <!-- <div class="col-12 item">
                                            <h6 class="font-weight-bold">Sub-Categoría</h6>
                                            <b-form-select
                                                id="input-3"
                                                v-model="form.subCategory"
                                                :options="subCategories"
                                                required
                                            ></b-form-select>
                                        </div> -->
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Ubicación</h6>
                                            <div class="d-flex ">
                                                <b-form-input
                                                    id="address"
                                                    placeholder="Direccion Ciudad Estado Pais"
                                                    v-model="locationQuery"
                                                    required
                                                />

                                                <div class="border ml-1 p-1"
                                                    style="border-radius: 50%; cursor: pointer"
                                                    @click="geolocalizationAddress"
                                                >
                                                    <SearchIcon />
                                                </div>
                                            </div>
                                            <!-- <p class="text-muted">{{this.addressSearch.display_name}}</p> -->
                                            <div class="mt-2">
                                                <b-form-select
                                                    id="input-3"
                                                    v-model="addressSearch"
                                                    :options="suggestions"
                                                    required
                                                ></b-form-select>
                                            </div>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Distancia km</h6>
                                            <b-input-group>
                                                <b-form-input
                                                    id="bg-opacity"
                                                    v-model="form.radius"
                                                    type="range"
                                                    number
                                                    min="5"
                                                    max="130"
                                                    step="5"
                                                ></b-form-input>
                                                <b-input-group-append is-text class="text-monospace">
                                                {{ form.radius }} km
                                                </b-input-group-append>
                                            </b-input-group>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Valoración</h6>
                                            <b-form-select
                                                id="input-3"
                                                v-model="form.score"
                                                :options="scoreOptions"
                                                required
                                            ></b-form-select>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Años de Experiencia</h6>
                                            <b-form-input id="yearExperience" type="number" v-model="form.yearExperience"></b-form-input>
                                        </div>
                                        <div class="col-12 item">
                                            <h6 class="font-weight-bold">Rango de Precio</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6 class="font-weight-bold">Min</h6>
                                                    <b-form-input
                                                        id="yearExperience"
                                                        type="number"
                                                        min="1"
                                                        v-model="form.priceMin">
                                                    </b-form-input>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="font-weight-bold">Max</h6>
                                                    <b-form-input
                                                        id="yearExperience"
                                                        type="number"
                                                        min="1"
                                                        v-model="form.priceMax">
                                                    </b-form-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center" @click="validate">
                                            <button id="btn-modify-2" class="text-white">Buscar</button>
                                        </div>

                                    </div>
                                </div>
                                <!-- END Formulario Filtros  -->

                                <!-- Column lateral -->
                                <div class="col-lg-8 col-md-12 col-sm-12" style="height: 900px">
                                <!-- Start Map -->
                                    <div>
                                        <div class="d-flex justify-content-end">
                                            {{showMap ? 'Esconder' : 'Mostrar'}} Mapa
                                            <div class="ml-2">
                                                <ChevronUpIcon
                                                    class="border"
                                                    style="cursor: pointer; border-radius: 50%"
                                                    v-if="showMap"
                                                    @click="()=>{ showMap=false }"
                                                />
                                                <ChevronDownIcon
                                                    class="border"
                                                    style="cursor: pointer; border-radius: 50%"
                                                    v-else
                                                    @click="()=> { showMap=true }"
                                                />
                                            </div>
                                        </div>
                                        <div v-if="showMap">
                                            <vl-map :load-tiles-while-animating="true" :load-tiles-while-interacting="true"
                                                    data-projection="EPSG:4326" style="height: 350px">
                                                <vl-view :zoom.sync="zoom" :center.sync="centerMap" :rotation.sync="rotation"></vl-view>

                                                <!-- <vl-geoloc @update:position="geolocPosition = $event"> -->
                                                    <!-- <template slot-scope="geoloc">
                                                    <vl-feature v-if="geoloc.position" id="position-feature">
                                                        <vl-geom-point :coordinates="geoloc.position"></vl-geom-point>
                                                        <vl-style-box>
                                                            <vl-style-icon src="/images/marker.png" :scale="0.4" :anchor="[0.5, 1]"></vl-style-icon>
                                                        </vl-style-box>
                                                    </vl-feature>
                                                    </template> -->
                                                    <div v-for=" marker in markers" :key="marker.id">
                                                        <vl-feature >
                                                            <vl-geom-point :coordinates="[Number(marker.lng), Number(marker.lat)]"></vl-geom-point>
                                                                <vl-style-box>
                                                                    <vl-style-icon src="/images/marker.png" :scale="0.4" :anchor="[0.5, 1]"></vl-style-icon>
                                                                </vl-style-box>
                                                        </vl-feature>

                                                    </div>
                                                <!-- </vl-geoloc> -->

                                                <vl-layer-tile id="osm">
                                                    <vl-source-osm></vl-source-osm>
                                                </vl-layer-tile>
                                            </vl-map>
                                        </div>
                                    </div>
                                    <!-- END map -->
                                    <div class="shadow mt-3" style="border-radius:15px;">
                                        <!-- Start List Usuario -->
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <label>
                                                    <span class="font-weight-bold">Lista de Usuarios</span>
                                                    <span>( {{categoriesUserWork.length}} )</span>
                                                </label>
                                            </div>
                                        </div>
                                <div v-if="!this.loadingCategoriesUser">
                                        <div class="border shadow"
                                            :style="`height: ${!showMap? 800 : 500}px; overflow:scroll; overflow-x:hidden; border-radius:15px;`"
                                        >
                                            <div class="my-4" v-if="categoriesUserWork.length">

                                                <!-- Start Items user -->
                                                <div class="" v-for="categoryUser in categoriesUserWork" :key="categoryUser.id">
                                                    <div class="my-2 border">
                                                        <div
                                                            class="p-2 shadow"
                                                            style="overflow-x:hidden"
                                                            @click="$router.push({path: `/profilePublic/${categoryUser.id}`})"
                                                        >
                                                            <div class="" style="position:relative">
                                                                <div style="position:absolute;">
                                                                    <div class="" v-if="Number(categoryUser.user.profile_check) &&
                                                                        Number(categoryUser.user.email_check)"
                                                                    >
                                                                        <div class="">
                                                                            <div style= "color: green; border-radius: 5px;">

                                                                                <span style="font-size: 10px">
                                                                                    <CheckCircleIcon width="15" />
                                                                                    Verificado
                                                                                </span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-around flex-wrap">
                                                                <div class="" style="">
                                                                    <div class="d-flex flex-column align-items-center " style="min-width:150px" >
                                                                        <!-- Imagen -->
                                                                        <div>
                                                                            <img
                                                                                :src="categoryUser.user.avatar ? categoryUser.user.avatar : 'images/avatarDefault.jpg'"
                                                                                class="avatar avatar-small rounded-circle shadow d-block"
                                                                                width="80px"
                                                                                height="80px"
                                                                                alt=""
                                                                            >
                                                                        </div>

                                                                        <div>
                                                                            <Score
                                                                                :scoreStar="Number(categoryUser.user.score) ?
                                                                                    Number(categoryUser.user.score)/Number(categoryUser.user.ratings)
                                                                                    :
                                                                                    0"
                                                                            />
                                                                        </div>
                                                                        <div>
                                                                            <!-- Nombre -->
                                                                            <span class="font-weight-bold name" style="font-size: 14px">
                                                                                {{ categoryUser.user.name }}
                                                                            </span>
                                                                        </div>
                                                                            <!-- Year old  -->
                                                                            <span style="font-size: 11px;">
                                                                                {{calculateAge(categoryUser.user.birthdate)}} años
                                                                            </span>

                                                                        <!-- <div>
                                                                            <Score scoreStar="3"/>
                                                                        </div> -->
                                                                    </div>
                                                                </div>

                                                                <div class="" style="min-width:250px">
                                                                    <!-- Title -->
                                                                    <div class="text-center">
                                                                        <span class="font-weight-bold title">
                                                                            {{ categoryUser.title }}
                                                                        </span>
                                                                        <div class="border-bottom">
                                                                            <span style="font-size:12px">
                                                                                Experiencia
                                                                                {{ Number(categoryUser.yearExperience) > 1 ? `${categoryUser.yearExperience} años` : "< 1 año" }},
                                                                                <span class="font-weight-bold">€‎{{ categoryUser.price}}/hr </span>
                                                                            </span>
                                                                        </div>
                                                                        <!-- Descripcion -->
                                                                        <div class="my-2">
                                                                            <p class="text-muted "
                                                                                style="line-height:1.2;overflow: hidden;font-size: 14px;">
                                                                                {{ categoryUser.description }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <div class="mr-3" style="height: 100px;">
                                                                            <div>
                                                                                <!-- Perfil verificado valoracion -->
                                                                                <div>
                                                                                    <div style= "color: #800000; border-radius: 5px;">
                                                                                        <div style="font-size: 10px; padding:0;">
                                                                                            <MapPinIcon width="15" />
                                                                                            {{ categoryUser.user.state }}, {{ categoryUser.user.country }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div style= "color: #0BFFF; border-radius: 5px;">
                                                                                        <div style="font-size: 10px">
                                                                                            <NavigationIcon width="15" />
                                                                                            A {{ categoryUser.distance > 1 ?
                                                                                                `${Number(categoryUser.distance).toFixed(2)} km`
                                                                                                :
                                                                                                `${Number(categoryUser.distance).toFixed(3).split('.')[1]} m`
                                                                                            }} de Ti
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div style="height: 50px;">
                                                                            <div style="font-size: 13px;">
                                                                                <div class="font-weight-bold">
                                                                                    Sub Servicios:
                                                                                </div>
                                                                                <div class="" style="font-size: 10px; height: 50px;overflow:scroll; overflow-x:hidden">
                                                                                    <div class="listSubService" v-for="subService in categoryUser.category.subcategories" :key="subService.id">
                                                                                        <div>
                                                                                            <CheckIcon
                                                                                                width="10"
                                                                                                v-if="categoryUser.sub_categories ?
                                                                                                    categoryUser.sub_categories
                                                                                                        .every(subCat => subCat.code === subService.id) : false"
                                                                                            />
                                                                                            <XIcon
                                                                                                v-else
                                                                                                width="10"
                                                                                            />
                                                                                            {{ subService.label }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="" style="position:relative">
                                                                <div style="position:absolute;bottom:0">
                                                                    <div class="" v-if="Number(categoryUser.user.membership_id)">
                                                                        <div class="">
                                                                            <div style= "color: green; border-radius: 5px;">
                                                                                <span 
                                                                                    class="d-flex flex-column justify-content-center align-items-center" 
                                                                                    style="font-size: 10px"
                                                                                >
                                                                                    <AwardIcon width="20" />
                                                                                    <span class="text-center">
                                                                                        Perfil <br> Recomendado
                                                                                    </span>
                                                                                </span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- End Items User -->
                                            </div>
                                            <div v-else>
                                                <div class="card" style="overflow-x:hidden">
                                                    <div class="row p-4">
                                                        <div class="col-12">
                                                            <h4 class="text-muted text-center">
                                                                No hay coincidencias
                                                            </h4>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="text-muted text-center">
                                                                Modifique los filtros para buscar distintos resultados
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List Usuario -->
                                </div>
                                <div v-else>
                                    <!-- Spinner -->
                                    <div
                                        class="border shadow"
                                        :style="`height: ${!showMap? 800 : 500}px; border-radius:15px;`"
                                    >
                                        <div 
                                            class="d-flex justify-content-center align-items-center" 
                                            style="height: 100%;"
                                        >
                                            <div>
                                                <b-spinner type="grow" label="Spinning" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <!-- END Column lateral -->
                            </div>


                        </div>
                    </div>
                </div>
                <!--end col-->
    </section>
    <!--end section-->

</div>
</template>

<style scoped>
    .listSubService {
        padding-left: 25px;
        margin: 0;

    }

    .title {
        font-size: 18px;
    }

    .name {
        color: #ff4b64;
        font-size: 20px;
    }

    h1 {
        color: #ff4b64;
    }

    h3 {
        font-size: 25px;
    }

    .avatar {
        padding: 0;
    }

    .card-body {
        margin-top: 50px;
    }

    .public-profile {
        margin-bottom: -70px;
        padding-bottom: -50px;
    }

    .accounts:hover, .accounts.active {
        background: rgb(244,124,59);
        background: linear-gradient(170deg, rgba(244,124,59,1) 0%, rgba(241,89,56,1) 51%);
    }

    #title {
        color: #f1905a;
    }

    .bg-primary, .btn-primary, .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.focus, .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-soft-primary:hover, .btn-soft-primary:focus, .btn-soft-primary:active, .btn-soft-primary.active, .btn-soft-primary.focus, .badge-primary, .pagination .page-item.active .page-link, .nav-pills .nav-link.active, .custom-control-input:checked ~ .custom-control-label::before, #preloader #status .spinner .double-bounce1, #preloader #status .spinner .double-bounce2, .social-icon li a:hover, #topnav .navbar-toggle.open span:hover, .gradient, .flex-control-paging li a.flex-active, .owl-theme .owl-dots .owl-dot span, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots.clickable .owl-dot:hover span, .watch-video a .play-icon-circle, .sidebar .widget .tagcloud > a:hover, .flatpickr-day.selected, .flatpickr-day.selected:hover, .bg-animation-left.crypto-home::after, .bg-animation-left.task-management-home::after, .classic-app-image .bg-app-shape::after, .classic-saas-image .bg-saas-shape::after, .work-container.work-modern .icons .work-icon:hover, .features.fea-primary:hover, .accounts:hover, .accounts.active, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .swiper-slider-hero .swiper-container .swiper-button-prev:hover, .swiper-slider-hero .swiper-container .swiper-button-next:hover {
            background-color: rgb(244,124,59) !important;
    }

    .caja {
        padding: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #ff4b64;
        cursor: pointer;
    }

    .caja .texto {
        position: absolute;
        margin-left: 80px;
    }

    .caja .avatar {
        margin-bottom: 10px;
    }

    /* .row h3 {
        font-size: 25px;
        color: #ff4b64;
        position: absolute;
    } */

    /* .row p {
        margin-top: 35px;
    } */

    label span {
        font-size: 20px;
        color: #8492a6;
        margin-left: 10px;
        margin-bottom: 2px;
    }

    label input {
        padding: 20px;
    }

    .row .item {
        padding: 15px;
        color: #ff4b64;
        border-bottom: 2px solid #ccc;
    }

    .columna button {
        margin: 30px;
        background: rgb(241,84,56);
        background: linear-gradient(90deg, rgba(241,84,56,1) 24%, rgba(244,125,59,1) 100%);
    }

    #btn-modify-2 {
        padding: 6px 30px 6px 30px;
        font-size: 15px;
        border-radius: 10px;
        border: none;
        /* margin-bottom: 0px; */
    }

    .bg-profile {
        padding: 0;
    }

    .espacio {
        margin: 50px;
    }

    @media (max-width: 576px) {

      .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
        padding-left: 0;
        padding-right: 0;
      }

    }

</style>
