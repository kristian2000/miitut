import Vue from 'vue'
import Vuex from 'vuex'

import router from '../router/index'
import auth from './auth'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        user: false,
        notifications: [],
        categories: []
    },
    getters: {

    },
    mutations: {
        setUpdateUser(state, data){
            state.user = data;
        },
        setUpdateNotifications(state, data){
            state.notifications = data;
        },
        setUpdateCategories(state, data){
            state.categories = data;
        }
    },
    actions: {
        updateUser({commit, state}, data){
            commit('setUpdateUser', data.user);

            const user = state.user;
            console.log('faseRegistro', user.fase_registry)
            if (user){
                if (user.userType === 'admin'){
                    router.push('/admin-users');
                }else {
                    switch(user.fase_registry){
                        case 'registro': {
                            router.push('/completar-perfil');
                        } break;
                        case 'completeProfileWork': {
                            router.push('/completar-perfil-trabajo');
                        } break;
                        case 'accountRetirement': {
                            router.push('/cuenta-retiro');
                        } break;
                        case 'dni': {
                            router.push('/dni');
                        } break;
                        default: {
                            router.push('/cuenta-perfil');
                        }
                    }
                }
            }
        }
    },
    modules: {
        auth
    }
});
