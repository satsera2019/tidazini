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
    locale: "ka",
    fallbackLocale: "ka",
    availableLocales: ["en", "ka", "ru"],
    messages: messages,
});

import App from './components/app.vue'
import router from './router';

/* router.beforeEach((to, from, next) => {
    let language = to.params.lang;
    if (!language) {
        language = 'ka';
    }
    i18n.locale = language
    console.log("i18n.locale " + i18n.locale)
    next()
}); */



createApp(App).use(i18n).use(router).mount("#app")