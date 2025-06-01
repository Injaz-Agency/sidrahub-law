import { createApp } from 'vue/dist/vue.esm-bundler'

import MobileMenu from './components/MobileNav.vue'
import LangMenu from './components/LangMenu.vue'
import ServicesMenu from './components/ServicesMenu.vue'
import AsideMenu from './components/AsideMenu.vue'
import Team from './components/Team.vue'

const app = createApp({})

app.component('mobile-menu', MobileMenu)
app.component('lang-menu', LangMenu)
app.component('services-menu', ServicesMenu)
app.component('aside-menu', AsideMenu)
app.component('team', Team)

app.mount('#app')
