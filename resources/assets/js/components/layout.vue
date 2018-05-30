<template>
  <v-app id="inspire"  >
    <v-toolbar app fixed clipped-left color="black" >
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-btn color="primary" flat to="/">Home</v-btn>
      <v-btn color="primary" flat to="/viewEnglisch">Englisch</v-btn>
    </v-toolbar>
    <v-content id="cont">
      <v-container >
        <router-view></router-view>
      </v-container>
    </v-content>
    <v-footer app fixed>
      <span>&copy; 2017</span>
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawer: true
    }),
    props: {
      source: String
    }
  }
</script>
 <style scoped>
.container{
  padding:0%;
  margin: 0%;
  max-width: 2000px;
}


</style>
