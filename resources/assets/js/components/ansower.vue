<template lang="pug">
  v-layout(row wrap)    
      v-layout(row wrap justify-center)
        v-flex(md10 lg10 xs10 class="mb-3")
          v-card( hover class="mt-3"  color="blue-grey darken-2")
            span(class="grey--text") veröffentlicht am : {{quistion.created_at}}
                  v-card-text(class="white--text") {{quistion.text}}
          v-flex(md10 lg10 xs10)
            v-layout(row wrap justify-center)
              v-flex(md10 lg10 xs10)
                v-card( color="blue-grey darken-2" class="mt-3" v-for="item in ansowers" :key="item.id")
                  <span class="grey--text">published at :{{item.created_at}}</span><br>
                  v-card-text(class="white--text") {{item.text}}
          v-flex(md10 lg10 xs10 justify-center class="mt-3")  
            v-layout(row wrap justify-center)       
                v-flex(md10 lg10 xs10 )  
                  v-card
                    v-text-field(
                    v-model="input"
                    name=""
                    label="bitte geben Sie ihre Antwort!"
                    class="input-group--focused"
                    multi-line
                  )
                  v-btn(color="primary" large @click="setAntwort()")|add ansower
   
</template>
<script>
export default {
  name: 'ansower',

  data(){
    return{
    id :parseInt(this.$route.params.id),
    input:'',
    ansowers:[],
    quistion:{}
    }
  },
  created(){
    this.getQuistion();
    this.getAnsowers();
  },
  methods:{
    setAntwort(){
      var vm = this;
        this.axios.post('/api/createAnsower',{
          text : vm.input,
          id:vm.id
        }).then(response=>{
          this.clean();
          this.getQuistion();
          this.getAnsowers();
        })
          .catch(e => {
        console.log('errors')
          })
      },
      getQuistion(){
         var vm = this;
        this.axios.get('/api/getQuistion/'+vm.id)
          .then(response => {
            console.log(response.data)
          vm.quistion = response.data;
          })
          .catch(e => {
        console.log('errors')
          })
      },
      getAnsowers(){
        var vm = this;
        this.axios.get('/api/getAnsowers/'+vm.id)
          .then(response => {
          vm.ansowers = response.data;
          })
          .catch(e => {
        console.log('errors')
          })
      },
        clean(){              
          this.input=null;
        }
    }
  
}
</script>
