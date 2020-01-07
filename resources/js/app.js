import Welcome from './components/Welcome.vue'
import Navbar from './components/Navbar.vue'
import Pricing from './components/Pricing.vue'
import UseCases from './components/UseCases.vue'

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {
        welcome: Welcome,
        navbar: Navbar,
        pricing: Pricing,
        'use-cases': UseCases
    }
});
