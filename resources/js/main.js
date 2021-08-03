require('./bootstrap');

import Vue from 'vue';
import router from './router/index'
import store from './store/index'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import common from './common'

import VueTelInput from 'vue-tel-input'
import Multiselect from 'vue-multiselect'
import VueLayers from 'vuelayers'
import 'vuelayers/lib/style.css'

import VueMoment from 'vue-moment'

import PaginationCustom from "./components/PaginationCustom"

import VueHtml2Canvas from 'vue-html2canvas';
Vue.use(VueHtml2Canvas);

Vue.component('pagination-custom', PaginationCustom)

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
    el: '#app'
});
