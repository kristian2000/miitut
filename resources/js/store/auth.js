import axios from 'axios';

export default {
    state: {

    },
    getters: {

    },
    mutations: {

    },
    actions: {
        socialAuthorize({ dispatch, commit}, payload){
            // console.log(payload)
            return new Promise((resolve, reject) => {
                //Se Crea la ventana y se centra
                window
                    .open(
                            payload.url,
                            "Miitut",
                            `width=600,height=600,
                            top=${screen.height/2-300},
                            left=${screen.width/2-250}`
                        )

                //Se crea el escucha evento
                window.onmessage = function (e){
                    const data = e
                    console.log('Evento de la otra ventana', data)

                    resolve(dispatch('loginSocialCallback', e.data));
                }

            });
        },
        loginSocialRedirect({ dispatch, commit}, socialName){
            // console.log('loginSocialredirect', socialName)
            return new Promise((resolve, reject) => {
                axios
                .get(`/app/authorize/${socialName}/redirect`)
                .then( response => {
                    console.log('loginRedirect',response)
                        resolve(dispatch("socialAuthorize", { url: response.data}))
                    })
                    .catch(error => {
                        // console.log(error)
                        reject(error)
                    });
            })
        },
        loginSocialCallback({dispatch, commit},  { socialName, code}){
            // console.log('loginSocialCallback', {socialName, code})

            return new Promise((resolve, reject) => {
                axios
                    .get(`/app/authorize/${socialName}/callback`, {
                        params: {
                            code
                        }
                    })
                    .then( response => {
                        // console.log('loginCallback',response)
                        resolve(response)
                    })
                    .catch(error => {
                        reject(error)
                    });
            })

        }

    }
}
