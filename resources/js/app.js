import './bootstrap';

import '../assets/css/bootstrap.css'
import '../assets/css/font-awesome.min.css'
import '../assets/css/responsive.css'
import '../assets/css/style.css'
// import '../assets/css/style.css.map'

// import '../assets/js/custom'
// import '../assets/js/jquery-3.4.1.min'


import { createApp } from 'vue'
import { createI18n } from "vue-i18n";
import messages from "@intlify/unplugin-vue-i18n/messages";

const i18n = createI18n({
    legacy: false,
    globalInjection: true,
    locale: "en",
    fallbackLocale: "en",
    availableLocales: ["en", "ka", "ru"],
    messages: messages,
});

import App from './components/app.vue'
import router from './router';

createApp(App).use(i18n).use(router).mount("#app")