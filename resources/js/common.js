import axios from 'axios'
import moment from 'moment'

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
            switch(field.toLowerCase()){
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
                case 'daysselected': return 'Selección de dias';
                case 'nameofbeneficiary': return 'Nombre del Beneficiario';
                case 'ccc': return 'Numero de Cuenta';
                case 'password': return 'Contraseña';
                case 'message': return "Mensaje";
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
        },
        dateFormat(date){
            let objDate = new Date(date)
            let d = objDate.getDate()
            let m = objDate.getMonth() + 1
            let y = objDate.getFullYear()

            return `${d < 10 ? ( '0' + d ) : d }-${m < 10 ? ( '0' + m) : m}-${y}`
        },

        async getNotifications(){
            const response = await this.callApi('get', `/app/users/notifications`);

            if(this.$store.state.user && response.status === 200){
                // console.log('notifications', response.data.notifications)
                if (response.data.notifications){
                    this.$store.commit('setUpdateNotifications', response.data.notifications)
                }
            }
        },
        async getCategories(){
            const response = await this.callApi('get', `/app/categories/getWithSubcategories`);

            if(response.status === 200){
                // console.log('categories app', response.data)
                this.$store.commit('setUpdateCategories', response.data)
            }
        },
        isAuthRedirect(){
            const user = this.$store.state.user;
            console.log('faseRegistro', user.fase_registry)
            if (user){
                if (user.userType === 'admin'){
                    this.$router.push('/admin-users');
                }else {
                    switch(user.fase_registry){
                        case 'registro': {
                            this.$router.push('/completeProfile');
                        } break;
                        case 'completeProfileWork': {
                            this.$router.push('/completeProfileWork');
                        } break;
                        case 'accountRetirement': {
                            this.$router.push('/accountRetirement');
                        } break;
                        case 'dni': {
                            this.$router.push('/dni');
                        } break;
                        default: {
                            this.$router.push('/account-profile');
                        }
                    }
                }
            }else {
                this.$router.push('/')
            }
        },
        dateFormat(date){
            return moment(date).format('DD/MM/YYYY')
        },
        avatarDefault(img){
            return img ? img : '/images/avatarDefault.jpg';
        },
        formatStringEmailPhones(text){
            let expReg_email = new RegExp("^[^@]+@[^@]+\.[a-zA-Z]{2,}$");
            let expReg_phone = new RegExp('[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$');

            if (expReg_email.test(text) || expReg_phone.test(text)){
                this.makeNotice('danger', 'Accion Prohibida', 'Está prohibido el envío de email y teléfonos en la plataforma.');

                return true;
            }


            return false;
        }
    }
}
