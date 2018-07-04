import Vue from 'vue'
import router from './router'
import {store} from './store/store'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import layout from './components/layout.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
 //axios ,ein http client-Library ,mit dem man abfragen an den Server schicken kann
//hier wird vue über die benötigten Moduls  benachrichtigt,die wir brauchen
Vue.use(Vuetify)
Vue.use(VueAxios ,axios)

Vue.use(store)


Vue.config.productionTip = false

/* hier wird das Vue Instance definiert  */
new Vue({
  // das root Element (der div aus index.html) defenieren
  el: '#app',
  //hier werden die Modules registriert 
  router, 
  store: store ,
  //hier ist unser Masterpage
  components:{layout},
   //masterpage wird gerendert 
  render: h => h(layout)
})