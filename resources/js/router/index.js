import { createRouter, createWebHistory, RouterView } from 'vue-router'

import not_found from '../components/user_panel/layouts/not_found.vue'
import index from '../components/user_panel/index.vue'
import about from '../components/user_panel/about/index.vue'
import contact from '../components/user_panel/contact/index.vue'

const routes = [
    { path: '/', redirect: '/ka/home' },
    {
        path: '/:lang',
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

export default router