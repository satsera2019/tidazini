import './bootstrap';

import '../assets/css/bootstrap.css'
import '../assets/css/font-awesome.min.css'
import '../assets/css/responsive.css'
import '../assets/css/style.css'
// import '../assets/css/style.css.map'

// import '../assets/js/custom'
// import '../assets/js/jquery-3.4.1.min'


import { createApp } from 'vue'

import App from './components/app.vue'

import router from './router';

createApp(App).use(router).mount("#app")