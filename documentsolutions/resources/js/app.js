import './bootstrap';
import "remixicon/fonts/remixicon.css";
import "../css/app.css";

import { createApp } from "vue";
import router from "./vue/router/index.js";
import App from "./vue/App.vue";

import { directive } from "vue3-click-away";
import { VueReCaptcha } from 'vue-recaptcha-v3';

createApp(App).use(VueReCaptcha, {
    siteKey: '6LdRlHckAAAAABImNyASWX-xniBTbfzkMyHfT14Y',
    loaderOptions: {
      useRecaptchaNet: true
    }
  }).use(router).directive("click-away", directive).mount("#app");
