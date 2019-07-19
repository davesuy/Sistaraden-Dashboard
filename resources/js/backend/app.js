import '@coreui/coreui'


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-backend', require('./components/appBackend.vue').default);
Vue.component('account', require('./components/pages/account.vue').default);
Vue.component('active-lists', require('./components/pages/activeLists.vue').default);
Vue.component('campaign', require('./components/pages/campaign.vue').default);
Vue.component('client', require('./components/pages/client.vue').default);
Vue.component('email', require('./components/pages/email.vue').default);

// Vue.component('navbar', require('./components/NavBar.vue'));


const app = new Vue({
    el: '#app-backend'
});
