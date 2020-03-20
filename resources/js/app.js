/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import 'admin-lte';
import 'jquery-ui/ui/widgets/datepicker.js';
import moment from 'moment';
window.Vue = require('vue');

Vue.filter('myday',function(myDay) {
    return moment(myDay).format('D');
});

Vue.filter('mymounth',function(myMounth) {
    return moment(myMounth).format('MM');
});

Vue.filter('myyear',function(myYear) {
    return moment(myYear).format('YYYY');
});



$("#datepicker").datepicker({
    format: 'yyyy-mm-dd',
    weekStart: 0,
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true,
    rtl: true,
    orientation: "auto"
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('blog-component', require('./components/BlogComponent.vue').default);
Vue.component('SinglePostComponent', require('./components/SinglePostComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
//Vue.component('CategorieComponent', require('./components/CategorieComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
