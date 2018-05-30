import Vue from 'vue'
import Router from 'vue-router'
import Englisch from '../components/Englisch.vue'
import Deutsch from '../components/Deutsch.vue'
import ansower from '../components/ansower.vue'
import viewEnglisch from '../components/viewEnglisch.vue'
import viewDeutsch from '../components/viewDeutsch.vue'
import antwort from '../components/antwort.vue'
Vue.use(Router)



export default new Router({
  routes: [
    {
      path: '/Englisch',
      name: 'Englisch',
      component: Englisch
    },
    {
      path: '/Deutsch',
      name: 'Deutsch',
      component:Deutsch
    }
    ,
    {
      path: '/ansower/:id',
      name: 'ansower',
      component:ansower
    },
    {
      path: '/viewEnglisch',
      name: 'viewEnglisch',
      component:viewEnglisch
    },
    {
      path: '/',
      name: 'viewDeutsch',
      component:viewDeutsch
    },
    {
      path: '/antwort/:id',
      name: 'antwort',
      component:antwort
    }
  ],
  mode:'history'
  
})
