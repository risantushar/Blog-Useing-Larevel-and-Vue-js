
require('./bootstrap');

window.Vue = require('vue');

// IMPORT VUE ROUTER
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//Import route.js
import {routes} from './route'





Vue.component('admin-master', require('./components/admin-component/admin-master.vue').default);


const router = new VueRouter({
    routes,
    mode:'history',
  })


const app = new Vue({
    el: '#app',
    router
});
