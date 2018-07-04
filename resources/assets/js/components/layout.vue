<template>
<!-- hier wird das sidebar defeniert -->
  <v-app id="inspire"  >
     <v-navigation-drawer
      v-model="drawer"      
      clipped
      class="grey lighten-4"
      app
    >

      <v-list dense class="grey lighten-4">
         <v-list-tile @click="toHomeView()">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="toDeutschView()">
          <v-list-tile-action>
            <v-icon>arrow_forward</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Deutsch</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>         
        <v-list-tile @click="toEnglischView()">
          <v-list-tile-action>
            <v-icon>arrow_forward</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Englisch</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="toAboutView()">
          <v-list-tile-action>
            <v-icon>help</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>about</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
      </v-navigation-drawer>

    <!-- toolbar und sidebar durch icon zu zueigen  -->
    <v-toolbar app fixed  clipped-left  color="black" height="50">
      <v-toolbar-side-icon @click.stop="drawer = !drawer" flat color="primary"></v-toolbar-side-icon>
      <v-btn color="primary" flat to="/">Home</v-btn>
      <v-btn color="primary" flat to="/viewDeutsch">Deutsch</v-btn>
      <v-btn color="primary" flat to="/viewEnglisch">Englisch</v-btn>
      <v-spacer></v-spacer>      
      <img src="./logo.jpg" height="45" width="50"/>>
    </v-toolbar>
    <!-- hier werden alle komponenten gezeigt -->
    <v-content >
      <v-container >
        <router-view :key="$route.fullPath">
          <!-- hier werden die komponenten die durch den router aufgerufen werden angezeigt werden -->
        </router-view>
      </v-container>
    </v-content>
    <!-- footer -->
    <v-footer height="20" class="black" app clipped>
      <v-layout row wrap justify-center>      
      <v-flex xs12 py-3 text-xs-left cyan--text>
        &copy;2018 — <strong >Boländer</strong>
      </v-flex>
    </v-layout>
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawer: false,
      links: ['Home', 'About Us', 'Team', 'Services', 'Blog', 'Contact Us']
    }),
    props: {
      source: String
    },
    methods:{
      toEnglischView(){
        this.$router.push('/viewEnglisch');//die gewünschte komponente zeigen
      },
       toDeutschView(){
        this.$router.push('/viewDeutsch');
      },
       toAboutView(){
        this.$router.push('/about');
      }
      ,
       toHomeView(){
        this.$router.push('/');
      }
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
