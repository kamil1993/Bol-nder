import Vue from 'vue'
import Router from 'vue-router'

import ansower from '../components/ansower.vue'
import viewEnglisch from '../components/viewEnglisch.vue'
import viewDeutsch from '../components/viewDeutsch.vue'
import category from '../components/category.vue'
import kategorie from '../components/kategorie.vue'
import about from '../components/about.vue'
import wilcomePage from '../components/wilcomePage.vue'
Vue.use(Router)


// hierwerden die Komponenten importiert , und dann als routs defeniert
export default new Router({
  routes: [
    
    {
      path: '/ansower/:id', //hier wird ein parameter verlangt,damit man weiss um welche frage es sich handelt ,und dann die frage aus den datenbank  zu fetchen 
      name: 'ansower',
      component:ansower
    },
    {
      path: '/viewEnglisch',
      name: 'viewEnglisch',
      component:viewEnglisch
    },
    {
      path: '/viewDeutsch',
      name: 'viewDeutsch',
      component:viewDeutsch
    },
    {
      path: '/category/:category',
      name: 'category',
      component:category
    },
    {
      path: '/kategorie/:category',
      name: 'kategorie',
      component:kategorie
    },
    {
      path: '/about',
      name: 'about',
      component:about
    },
    {
      path: '/',
      name: '/',
      component:wilcomePage
    }
  ],
  mode:'history'
  
})
