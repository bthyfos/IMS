
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



Vue.component('example', require('./components/Example.vue'));
//Vue.component('TypeAhead', require('./node_modules/vue2-typeahead/src/components/TypeAhead.vue'));
const app = new Vue({
    el: '#app'
});
