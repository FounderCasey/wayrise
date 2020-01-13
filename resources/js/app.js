import Welcome from "./components/Welcome.vue";
import Navbar from "./components/Navbar.vue";
import Pricing from "./components/Pricing.vue";
import UseCases from "./components/UseCases.vue";
import RegisterUser from "./components/RegisterUser.vue";
import CallToAction from "./components/CTA.vue";

import VueAnimate from "vue-animate-scroll";

window.Vue = require("vue");

Vue.use(VueAnimate);

const app = new Vue({
    el: "#app",
    components: {
        welcome: Welcome,
        navbar: Navbar,
        pricing: Pricing,
        "use-cases": UseCases,
        "register-user": RegisterUser,
        'call-to-action': CallToAction
    }
});
