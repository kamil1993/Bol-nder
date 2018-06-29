<template lang="pug">
 v-layout(row wrap)
    v-flex(md12 lg12 xs12)
      v-toolbar(color="primary" dark)
        v-btn(flat :to="'/kategorie/'+ freizeit") Freizeit
        v-btn(flat :to="'/kategorie/'+ studium") Studium
        v-btn(flat :to="'/kategorie/'+ anders") anders
    v-flex(md10 lg10 xs12)      
      v-layout(row wrap justify-end)       
        v-flex(md10 lg10 xs10 )          
          v-text-field(
              v-model="input"                
              label="bitte geben Sie ihre Frage ein!"
              class="input-group--focused"
              multi-line                                                  
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
          v-card( hover class="mb-3" v-for="item in res" :key="item.id" color="grey darken-4")
            span(class="grey--text") veröffentlicht am : {{item.created_at}}
            v-card-text(class="white--text") {{item.text}}
            v-layout(row)
              v-flex(md5 lg5 xs6 )
                v-btn(round color="primary") {{item.category}}
              v-flex(md5 lg5 xs6 )
                v-btn(round color="primary" :to="'/ansower/'+ item.id" )|Antwort
</template>
<script>

export default {
      
      data(){
        return{
          res :[],          
          selectItems:['freizeit','studium','anders'],
          selectedCategory:'',
          input:'',
          language:'englisch',
          freizeit: 'freizeit',
          studium: 'studium',
          anders: 'anders',
          category:this.$route.params.category,
        }
      },
    mounted() {
     this.fetchData();
  },
  computed : {
    reversedArr() {
        return res.slice().reverse();
    }
  },
  methods:{
    setFrage() {
         var vm = this;         
          this.axios.post('/api/quistions/create',{
          text : vm.input,
          category:vm.selectedCategory,
          language:vm.language
        })
          .then(response => {
              console.log(response); 
              this.fetchData();
              this.clean();
          })
          .catch(e => {
              console.error(e);
          })
      },
      fetchData(){
        var vm = this;      
        this.axios.get('/api/quistionsOfLanguageFromCategory/'+vm.category)
        .then(response => {
            console.log(response.data);
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

