import "./bootstrap";
import "remixicon/fonts/remixicon.css";
import "../css/app.css";
import "../css/default.css";

import { createApp } from "vue";
import router from "./vue/router/index.js";
import App from "./vue/App.vue";
import { VueReCaptcha } from 'vue-recaptcha-v3'

import { directive } from "vue3-click-away";

createApp(App).use(VueReCaptcha, {
    siteKey: '6Lfbj1EkAAAAAFUJ6m5k1MEYRKWaV_QbCbDs6gr7',
    loaderOptions: {
      useRecaptchaNet: true
    }
  }).use(router).directive("click-away", directive).mount("#app");
