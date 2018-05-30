import Vue from 'vue'
import router from './router'
import {store} from './store/store'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import layout from './components/layout.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
 
Vue.use(Vuetify)
Vue.use(VueAxios ,axios)

Vue.use(store)


Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store: store ,
  components:{layout},
   
  render: h => h(layout)
})