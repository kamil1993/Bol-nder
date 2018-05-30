<template lang="pug">
  v-container
    v-card
      v-card-text {{item.text}}
      v-card-text
      v-text-field(
      v-model="input"
      name=""
      label="bitte geben Sie ihr Antwort!"
      class="input-group--focused"
      multi-line
    )
      v-btn(@click="setAntwort();$router.go(-1)")|add ansower
</template>
<script>
export default {
  name: 'ansower',

  data(){
    return{
    id :this.$route.params.id,
    item : {},
    input:'',
    counter:0
    }
  },
  created(){
    return this.$store.state.Deutsch.Freizeit.forEach(element => {
           if(element.id === parseInt(this.id)){
             return this.item = element
           }
       });
  },
  methods:{
    setAntwort(){
      var ansower =
          {
            text : this.input,
            id : this.counter
          }
      this.$store.dispatch('setAntwort',
      {
        ans:ansower,
        id:this.id
      });
      this.counter++
    }
  }
}
</script>
