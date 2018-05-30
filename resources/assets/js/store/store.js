import Vuex from "vuex"
import Vue from "vue"


Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    Englisch : {
      Freizeit :
      [

      ],
        Studieren :
      [

      ]
    },




    //Deutsch Array
    Deutsch : {
      Freizeit :
      [

      ],
        Studieren :
      [

      ]
    },
  },
  mutations: {
    Set_Question : (state,payload) => {
      state.Englisch.Freizeit.push(payload)
    },
    setFrage:(state,payload) => {
      state.Deutsch.Freizeit.push(payload)
    },
    setAnsower:(state,options) => {
      state.Englisch.Freizeit.forEach(x=>{
        if(x.id === parseInt(options.id)){
          x.ansowres.push(options.ans)
        }
      })
    },
    setAntwort:(state,options) => {
      state.Deutsch.Freizeit.forEach(x=>{
        if(x.id === parseInt(options.id)){
          x.ansowres.push(options.ans)
        }
      })
    }

  },

  actions: {
    Set_Question : (context,payload) => {
    context.commit('Set_Question',payload)
  },
  setFrage:(context,payload) => {
    context.commit('setFrage',payload)
  },
  setAnsower:(context,options) => {
    context.commit('setAnsower',options)
  },setAntwort:(context,payload)=>{
    context.commit('setAntwort',payload)
  }
  },
  getters:{

  }
})
