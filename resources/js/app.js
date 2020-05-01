/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/** 
 * Fonctions disable et enable 
 */

$(document).ready(function(){
  $("#niveauetude").change(function(){
    $("#champspe").fadeIn("slow");
  });
  $("#specialite").change(function(){
    $("#champqualite1").fadeIn("slow");
  });
  $("#qualite1").change(function(){
    $("#champqualite2").fadeIn("slow");
  });
  $("#qualite2").change(function(){
    $("#champqualite3").fadeIn("slow");
  });
  $("#qualite3").change(function(){
    $("#champqualite4").fadeIn("slow");
  });
  $("#qualite4").change(function(){
    $("#champqualite5").fadeIn("slow");
  });
  $("#qualite5").change(function(){
    $("#champdefaut1").fadeIn("slow");
  });
  $("#defaut1").change(function(){
    $("#champdefaut2").fadeIn("slow");
  });
  $("#defaut2").change(function(){
    $("#champdefaut3").fadeIn("slow");
  });
  $("#defaut3").change(function(){
    $("#champ_bouton_profil_1").fadeIn("slow");
  });
});

var specialite = document.forms["information_profil"]["specialite"].value;
var qualite1 = document.forms["information_profil"]["qualite1"].value;
var qualite2 = document.forms["information_profil"]["qualite2"].value;
var qualite3 = document.forms["information_profil"]["qualite3"].value;
var qualite4 = document.forms["information_profil"]["qualite4"].value;
var qualite5 = document.forms["information_profil"]["qualite5"].value;
var defaut1 = document.forms["information_profil"]["defaut1"].value;
var defaut2 = document.forms["information_profil"]["defaut2"].value;
var defaut3 = document.forms["information_profil"]["defaut3"].value;



$(document).ready(function(){

      if (specialite != "") {
        $("#champspe").attr("style", "display:yes");
      };

      if (qualite1 != "") {
        $("#champqualite1").attr("style", "display:yes");
      };

      if (qualite2 != "") {
        $("#champqualite2").attr("style", "display:yes");
      };

      if (qualite3 != "") {
        $("#champqualite3").attr("style", "display:yes");
      };

      if (qualite4 != "") {
        $("#champqualite4").attr("style", "display:yes");
      };

      if (qualite5 != "") {
        $("#champqualite5").attr("style", "display:yes");
      };

      if (defaut1 != "") {
        $("#champdefaut1").attr("style", "display:yes");
      };

      if (defaut2 != "") {
        $("#champdefaut2").attr("style", "display:yes");
      };

      if (defaut3 != "") {
        $("#champdefaut3").attr("style", "display:yes");
        $("#champ_bouton_profil_1").attr("style", "display:yes");
      };
});  

