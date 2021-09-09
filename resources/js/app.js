

require('./bootstrap');

window.Vue = require('vue').default;
Vue.component('search-component', require('./components/Search.vue').default);

const app = new Vue({
    el: '#app',
});
