import Vue from 'vue'
import Vuex from 'vuex'

import auth from './auth'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        user: false,
        notifications: []
    },
    getters: {

    },
    mutations: {
        setUpdateUser(state, data){
            state.user = data;
        },
        setUpdateNotifications(state, data){
            state.notifications = data
        }
    },
    actions: {

    },
    modules: {
        auth
    }
});
