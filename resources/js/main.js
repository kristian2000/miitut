require('./bootstrap');

import Vue from 'vue';
import router from './router/index'
import store from './store/index'

import { BootstrapVue } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import common from './common'

import VueTelInput from 'vue-tel-input'
import Multiselect from 'vue-multiselect'

Vue.component('multiselect', Multiselect)

Vue.use(VueTelInput)

Vue.mixin(common);

// Install BootstrapVue
Vue.use(BootstrapVue)

Vue.component('app', require('./App.vue').default)

new Vue({
    router,
    store,
    el: '#app'
});
