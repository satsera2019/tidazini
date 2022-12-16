import { createRouter, createWebHistory } from 'vue-router'

import not_found from '../components/not_found.vue'
import index from '../components/user_panel/index.vue'
import about from '../components/user_panel/about/index.vue'
import contact from '../components/user_panel/contact/index.vue'

const routes = [
    { path: '/', component: index },
    { path: '/:pathMatch(.*)*', component: not_found },
    { path: '/about', component: about },
    { path: '/contact', component: contact }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router