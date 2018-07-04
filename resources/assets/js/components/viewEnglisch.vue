<template lang="pug">
  v-layout(row wrap)
    v-flex(md12 lg12 xs12)
      v-toolbar(color="primary" dark height="40")
       v-btn(flat :to="'/category/'+ freeTime") Free time
       v-btn(flat :to="'/category/'+ study") Study
       v-btn(flat :to="'/category/'+ etc") etc..
    v-flex(md10 lg10 xs12 )
      v-layout(row wrap justify-end)       
        v-flex(md10 lg10 xs10 )          
          //- v-model ist eine sofortige binding mit einer scriptvariable,somit werden die eingabe des Nutzers weiter verarbeitet
          v-text-field(               
              v-model="input"                
              label="bitte geben Sie ihre Frage ein!"
              class="input-group--focused"
              multi-line  
               placeholder="what do you want to ask ??" 
              name="input-1-3"                                                 
            )         
        v-flex(md10 lg10 xs10 )
          v-layout(row)
            v-flex(md3 lg3 xs3)
              v-btn(color="primary" large @click="setFrage()" )|schicken 
            v-flex(md7 lg7 xs7)
              v-select(
              :items="selectItems"
              v-model="selectedCategory"
              label="Select Category"
              class="input-group--focused"
              item-value="text",
              required
              :error-messages="['Please select an option']"
              )
      v-layout(row wrap justify-end)       
        v-flex(md10 lg10 xs10 )
          //- hier werden die Objekte ,die aus dem Server als Response kamen ,mit einer for Schlife angezeigt
          v-card( hover class="mb-3" v-for="item in res" :key="item.id" color="blue-grey darken-2")
            //- durch {{}} wird auf die values des Objektes zugegriffen
            span(class="grey--text") veröffentlicht am : {{item.created_at}}
            v-card-text(class="white--text") {{item.text}}
            v-layout(row)
              v-flex(md5 lg5 xs6 )
                v-btn(round color="primary" :to="'/category/'+ item.category") {{item.category}}
              v-flex(md5 lg5 xs6 )
                v-btn(round color="primary" :to="'/ansower/'+ item.id" )|Antwort            
</template>
<script>

export default {
      
      data(){
        return{
          res :[], //hier werden die Objecte die von dem Server empfangen worden gespeichert       
          selectItems:['Free Time','Study','etc..'],
          selectedCategory:'',
          input:'',
          language:'englisch',
          freeTime:'Free time',
          study:'Study',
          etc:'etc..'
        }
      },
    mounted() {
     this.fetchData();
  },
  methods:{
    setFrage() {
              var vm = this;              
              // so werden die requests an den Server gesandt
              this.axios.post('api/quistions/create',{
                text : vm.input,
                category:vm.selectedCategory,
                language:vm.language
              })
                .then(response => {         //wenn die daten vom Server empfangen werden ,           
                    this.fetchData();     //dann wrden die Daten mit der neu zugefügten Frage wieder durch ein get-request gefetcht
                    this.clean();   //damit die ausgewälte Sprache und der eingegebenen Text auf Null gesetzt werden
                })
                .catch(e => {
                    console.error(e);
                })
      },
      fetchData(){
              var vm = this;      
              this.axios.get('api/quistionsOfLanguage/'+vm.language)
              .then(response => {
                vm.res = response.data;
              })
              .catch(e => {
                console.log('errors')
              })
            },
            clean(){
              this.selectedCategory=null;
              this.input=null;
            }
  }
}
</script>
<style scoped>
.test{
  padding: 0%;
  margin: 0%;
}
</style>

