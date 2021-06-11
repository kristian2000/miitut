<script>
import {
    SearchIcon,
    MapPinIcon
} from 'vue-feather-icons';

export default {
    props: ['addressDefault', 'onCall'],
    data(){
        return {
            loading: {
                localizar: false,
            },
            loadingSearchAddress: false,
            locationQuery: '',
            addressSearch: null, //lat y long
            suggestions: [{
                text: 'Sugerencias de la busqueda',
                value: null
            }]
        }
    },
    components: {
        SearchIcon,
        MapPinIcon
    },
    created(){
        if (this.addressDefault){
            this.locationQuery = this.addressDefault;
        }
    },
    methods: {
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

            if (!suggestions.length){
                this.loading.localizar = false;
                return;
            }

            let addressSearch = suggestions.length ? suggestions[0].value : null;
            console.log('addressSearch', addressSearch)
            let address = this.createAddress(addressSearch);
            // let address = addressSearch?.display_name;
            // this.country = addressSearch.address.country;
            // this.state = addressSearch.address.state;

            this.addressSearch =  addressSearch;
            let coords = {
                lat: addressSearch.lat,
                lon: addressSearch.lon
            }

            this.onCall({
                coords,
                address
            })

            this.loading.localizar = false;
        },
        createAddress(addressSearch){
            if (!addressSearch) return;

            let address = `${addressSearch.address.suburb ?? ''}, ${addressSearch.address.city ?? ''}, ${addressSearch.address.state ?? ''}, ${addressSearch.address.country ?? ''}`.normalize()

            return address;

        },
        async currentLocalizar(){
            this.loading.localizar = true;

            let localization = await this.localizar();

            this.locationQuery = localization.address;

            this.onCall({
                coords: localization.coords,
                address: localization.address
            })

            console.log('localization', localization)
            this.loading.localizar = false;
        }
    }
}
</script>

<template>
    <div class="col-12">
        <div 
            class=" d-flex justify-content-center" 
            v-if="!loading.localizar"
        >
            <div class="col-12 d-flex align-items-center">
                <div class="col-10 item">
                    <h6 class="font-weight-bold text-center">
                        Ubicación
                    </h6>
                    <div class="d-flex ">
                        <b-form-input
                            id="address"
                            placeholder="Direccion Ciudad Estado Pais"
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
                <div class="col-2">
                    <b-button  
                        class="btn btn-info" pill @click="currentLocalizar"
                        v-b-tooltip.hover title="Click para obtener la ubicacion actual"
                    >
                        <MapPinIcon />    
                    </b-button >
                
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
</template>