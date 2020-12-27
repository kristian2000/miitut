import axios from 'axios'

export default {
    data(){
        return {

        }
    },
    methods: {
        async callApi(method, url, data){
            try {
                return await axios({ method, url, data });

            } catch (error) {
                return error.response;
            }
        },
        makeNotice(variant = 'default', title, desc = '...', solid = true) {
            this.$bvToast.toast(desc, {
              title,
              variant,
              solid
            })
        },

        error (desc="Somethingn went wrong! Please try again.", title="Oops ") {
            this.makeNotice('danger', title, desc)
        },

        async localizar(){
            return new Promise((resolve, reject) => {

                navigator.geolocation.getCurrentPosition(async (pos)=>{
                    console.log(pos)
                    const response = await axios
                        .get(`https://nominatim.openstreetmap.org/reverse?lat=${pos.coords.latitude}&lon=${pos.coords.longitude}&format=json`)

                    let { county, state, postcode, country } = response.data.address;
                    let address = `${county}, ${state}, ${postcode}, ${country}`;
                    let coords = {
                        lat: response.data.lat,
                        lon: response.data.lon
                    }
                    return resolve({address, coords});

                },(error)=>{
                    this.makeNotice('danger', 'Error Ubicando', 'Permiso de ubicacion rechazado por el usuario, por favor, aceptar y reintentar.');
                    console.log('error', error)
                    return reject();
                })
            })

        },

    }
}
