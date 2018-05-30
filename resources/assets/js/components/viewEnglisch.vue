<template lang="pug">
 v-container
  v-layout(row wrap)
    v-flex(md2 lg2 xs2  )
      v-navigation-drawer( stateless permanent value="true" class="blue lighten-3" )
        v-list 
          v-list-tile(v-for="item in listItems" :key="item.title")
            v-list-tile-title(v-text="item.title" )
    v-flex(md10 lg10 xs10  )
      v-card(color="grey lighten-2" v-for="item in res" :key="item.id")
        <span class="grey--text">published at :{{item.created_at}}</span><br>
        v-card-text {{item.text}}
        v-btn(color="primary" flat :to="'/ansower/'+ item.id")|Antwort
      v-btn(color="primary" large to="/Englisch")|new Quistion


</template>
<script>

export default {
      name:'viewEnglisch',
      data(){
        return{
          res :[],
          listItems:[{title :'Free Time'},{title :'Study'},{title :'etc..'}]
        }
      },
    mounted() {
     var vm = this;
    this.axios.get('api/quistions')
    .then(response => {
      vm.res = response.data;
    })
    .catch(e => {
      console.log('errors')
    })
  }
}
</script>
<style scoped>
.test{
  padding: 0%;
  margin: 0%;
}
</style>

