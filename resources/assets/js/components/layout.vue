<template>
  <v-app id="inspire"  >
     <v-navigation-drawer
      v-model="drawer"
      
      clipped
      class="grey lighten-4"
      app
    >

      <v-list dense class="grey lighten-4">
        <v-list-tile>
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile>
          <v-list-tile-action>
            <v-icon>contact_mail</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Contact</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
      </v-navigation-drawer>
    <v-toolbar app fixed  clipped-left  color="black" >
      <v-toolbar-side-icon @click.stop="drawer = !drawer" flat color="primary"></v-toolbar-side-icon>
      <v-btn color="primary" flat to="/">Home</v-btn>
      <v-btn color="primary" flat to="/viewEnglisch">Englisch</v-btn>
    </v-toolbar>
    <v-content id="cont">
      <v-container >
        <router-view>
          
        </router-view>
      </v-container>
    </v-content>
    <v-footer height="80" class="black" app clipped>
      <v-layout row wrap justify-center>
        <v-btn
          v-for="link in links"
          :key="link"
          color="primary"
          flat
        >
        {{link}}
        </v-btn>
      <v-flex xs12 py-3 text-xs-center cyan--text>
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
