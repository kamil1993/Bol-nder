<template lang="pug">  
    //- modefizierte Html tags ,die Vuetify anbietet      
    v-container
        h1(style="text-align:center;") Willkommen in Boländer
        img(src="./logo.jpg" height="200" width="200" class="center")
        v-layout(row wrap justify-center)             
            v-flex(md5 lg5 xs5 )
                //- ein selectList um die Sprache auszuwählen
                v-select(
                :items="sprachen"
                v-model="spracheAuswahl"
                label="wähle eine sprache aus"                                   
                max-width="200"
                )           
                //- methode goToView() aufrufen ,um die komponente der ausgewählteSprache zu zeigen
        v-btn(@click="goToView()" class="center" color="primary" large) submit            
</template>
<script>
export default {
    data(){
        return{
            sprachen:['English','Deutsch'],
            spracheAuswahl:''
        }
    },
    methods:{
        goToView(){            
            if(this.spracheAuswahl == "English")
                this.$router.push('/viewEnglisch');
            if(this.spracheAuswahl == "Deutsch")
                this.$router.push('/viewDeutsch');            
        }
    }
}
</script>

<style scoped>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;    
}
</style>

