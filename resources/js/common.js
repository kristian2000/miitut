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
        fieldSpanish(field){
            switch(field){
                case 'gender' : return 'Sexo';
                case 'description' : return 'Descriptión';
                case 'dni' : return 'DNI';
                case 'phone' : return 'Telefóno';
                case 'address': return 'Dirección';
                case 'birthdate': return 'Fecha de Cumpleaños';
                case 'nationality': return 'Nacionalidad';
                case 'date': return 'Fecha';
                case 'dateStart': return 'Fecha Inicial';
                case 'dateEnd': return 'Fecha Final';
                case 'startTime': return 'Hora Inicial';
                case 'daysSelected': return 'Seleccion de dias';
                default:
                    return field;
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

        makeNoticeListErrors(errors = {}){
            const fieldErrors = Object.keys(errors)
            // Se crea el elemento
            const h = this.$createElement
            // Se realiza recorre y se crea la lista
            const vNodesMsg = fieldErrors.map(field =>
                h(
                    'div',
                    { class: ['mb-0'] },
                    [
                        this.fieldSpanish(field),
                        h('ul',  { class: ['', 'mb-0'] },
                            errors[field].map( error => h('li', error))
                        )
                    ]
                )
            )

            this.makeNotice('danger', 'Datos Invalidos' ,[vNodesMsg]);
        },

        async localizar(){
            return new Promise((resolve, reject) => {

                navigator.geolocation.getCurrentPosition(async (pos)=>{
                    console.log(pos)
                    const response = await axios
                        .get(`https://nominatim.openstreetmap.org/reverse?lat=${pos.coords.latitude}&lon=${pos.coords.longitude}&format=json`)

                    let address = response.data.display_name;
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

        calculateAge(date){
            let now = new Date();
            let birthdate = new Date(date);
            let yearOld = now.getFullYear() - birthdate.getFullYear();
            let m = now.getMonth() - birthdate.getMonth();

            if (m < 0 || (m === 0 && now.getDate() < birthdate.getDate())){
                return --yearOld;
            }

            return yearOld;
        }

    }
}
