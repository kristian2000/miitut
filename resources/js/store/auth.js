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

                    resolve(dispatch('loginSocialCallback', {
                        ...payload,
                        ...e.data
                    }));
                }

            });
        },
        loginSocialRedirect({ dispatch, commit}, payload){
            console.log('loginSocialredirect', payload)

            return new Promise((resolve, reject) => {
                axios
                .get(`/app/authorize/${payload.driver}/redirect`)
                .then( response => {
                    console.log('loginRedirect', response)
                        resolve(dispatch("socialAuthorize", {
                            ...payload,
                            url: response.data
                        }))
                    })
                    .catch(error => {
                        // console.log(error)
                        reject(error)
                    });
            })
        },
        loginSocialCallback({dispatch, commit},  payload){
            console.log('loginSocialCallback', payload)

            return new Promise((resolve, reject) => {
                axios
                    .post(`/app/authorize/${payload.driver}/callback`, payload)
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
