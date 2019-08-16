import store from './store'

require('./bootstrap');

window.Vue = require('vue');

Vue.component('search-form', require('./components/SearchForm.vue').default);

const app = new Vue({
    el: '#app',
    store
});
