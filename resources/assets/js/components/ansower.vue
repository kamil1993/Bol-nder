<template lang="pug">
  v-container
    div {{text}}
    v-card(v-for="item in ansowers" :key="item.id")
      <span class="grey--text">published at :{{item.created_at}}</span><br>
      v-card-text {{item.text}}
    v-card
      v-text-field(
      v-model="input"
      name=""
      label="bitte geben Sie ihr Antwort!"
      class="input-group--focused"
      multi-line
    )
      v-btn(@click="setAntwort()")|add ansower
</template>
<script>
export default {
  name: 'ansower',

  data(){
    return{
    id :parseInt(this.$route.params.id),
    input:'',
    ansowers:[],
    text:''
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
        })
          .catch(e => {
        console.log('errors')
          })
      },
      getQuistion(){
         var vm = this;
        this.axios.get('/api/getQuistion/'+vm.id)
          .then(response => {
            console.log(response.data.text)
          vm.text = response.data.text;
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
      }
    }
  
}
</script>
