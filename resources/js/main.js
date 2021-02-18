require('./bootstrap');

import Vue from 'vue';
import router from './router/index'
import store from './store/index'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import common from './common'

import VueTelInput from 'vue-tel-input'
import Multiselect from 'vue-multiselect'
import VueLayers from 'vuelayers'
import 'vuelayers/lib/style.css'

import VueMoment from 'vue-moment'

Vue.component('multiselect', Multiselect)

Vue.use(VueMoment)
Vue.use(VueTelInput)
Vue.use(VueLayers)
Vue.mixin(common);

// Install BootstrapVue
Vue.use(IconsPlugin)
Vue.use(BootstrapVue)

Vue.component('app', require('./App.vue').default)

new Vue({
    router,
    store,
    el: '#app',
    // mounted(){

    //     // window.Echo.channel('contract-tracker')
    //     //     .listen('ContractEvent', (e) => {
    //     //         console.log('OMG realtime')
    //     //     });
    //     window.Echo.private(`App.User.${10}`)
    //         .notification((notification) => {
    //             console.log('OMG realtime', notification)
    //         });
    // }
});
