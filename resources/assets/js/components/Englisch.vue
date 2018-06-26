<template lang="pug">
 v-container
    v-text-field(
      v-model="input"
      name=""
      label="bitte geben Sie ihr Frage!"
      class="input-group--focused"
      multi-line
    )
    v-btn(@click="setFrage() ; $router.go(-1)")|Send

</template>
<script>
export default {
      name: 'Englisch',
      data(){
        return{
         input: '',
         category: 'freizeit',
         language: 'english'
        }
      },
      methods:{
        setFrage() {
         var vm = this;
        this.axios.post('api/quistions/create',{
          text : vm.input,
          category:vm.category,
          language:vm.language
        })
          .then(response => {
              console.log(response); 
          })
          .catch(e => {
              console.error(e);
          })
      }
    }
}
</script>

<style  scoped>
.Antwort{
width: 50%;

}
</style>


