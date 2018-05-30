<template lang="pug">
 v-container
    v-text-field(v-model="input"
                name=""
                label="bitte geben Sie ihre Frage!"                
                class="input-group--focused"
                multi-line
                )
    v-btn(@click="setFrage(); $router.go(-1)")|Send
</template>
<script>
export default {
      name: 'Deutsch',
      data(){
        return{
         input: '',
         antwort: '',
         counter : this.$store.state.Deutsch.Freizeit.length
        }
      },
      methods:{
        setFrage () {
          var inputOb =
          {
            text : this.input,
            id : this.counter++,
            ansowers:[]
          }

          this.$store.dispatch('setFrage',inputOb );
        }
      }
}
</script>

<style  scoped>
.Antwort{
width: 50%;

}
</style>
