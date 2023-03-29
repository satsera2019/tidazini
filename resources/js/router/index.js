import { createRouter, createWebHistory, RouterView } from 'vue-router'

import not_found from '../components/user_panel/layouts/not_found.vue'
import index from '../components/user_panel/index.vue'
import about from '../components/user_panel/about/index.vue'
import contact from '../components/user_panel/contact/index.vue'

const routes = [
    { path: '/', redirect: '/ka/home' },
    {
        path: '/:lang',
        // path: '/:lang(en|ka|ru)?',
        component: RouterView,
        children: [
            // { path: '/pathMatch(.*)*', name: 'not_found', component: not_found },
            { path: 'home', name: 'home', component: index, },
            { path: 'about', name: 'about', component: about, },
            { path: 'contact', name: 'contact', component: contact, },
        ],
    },
]



const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    let language = to.params.lang;
    let av_locales = ['en', 'ka', 'ru'];
    // console.log("beforeEach language " + language)

    if (!av_locales.includes(language)) console.log("!!!");
    if (!language) language = "ka";
    // console.log("beforeEach i18n.locale " + i18n.availableLocales)
    // if (!language) language = "ka";
    // i18n.locale = language

    next()
});

export default router