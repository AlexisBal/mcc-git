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
 * Afficher les champs du formulaire Profil élève 
 */



$(document).ready(function(){
  $("#niveauetude").change(function(){
    $("#champspe").fadeIn("slow");
  });

  $("#specialite").change(function(){
    $("#champlv1").fadeIn("slow");
  });

  $("#lv1").change(function(){
    $("#champprofileleve").fadeIn("slow");
  });

  $("#profileleve").change(function(){
    $("#champambiancetravail").fadeIn("slow");
  });

  $("#ambiancetravail").change(function(){
    $("#champtempstravail").fadeIn("slow");
  });

  $("#tempstravail").change(function(){
    $("#champmethodes").fadeIn("slow");
  });

  $("#methodes").change(function(){
    $("#champmatieresfav").fadeIn("slow");
  });
  
  $("#matieresfav").change(function(){
    var specialite1 = document.forms["information_profil"]["specialite"].value;
    if (specialite1 == "m_es_h") {
      $("#champmaths").show();
      $("#champeco").show();
      $("#champfrancais").show();
      $("#champphilosophie").show();
      $("#champanglais").show();
    };

    if (specialite1 == "m_s_h") {
      $("#champmaths").fadeIn("slow");
      $("#champsvt").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_p_sp") {
      $("#champmaths").fadeIn("slow");
      $("#champphysique").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_es_s") {
      $("#champmaths").fadeIn("slow");
      $("#champsvt").fadeIn("slow");
      $("#champeco").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_es_p") {
      $("#champmaths").fadeIn("slow");
      $("#champphysique").fadeIn("slow");
      $("#champeco").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_es_lv") {
      $("#champmaths").fadeIn("slow");
      $("#champeco").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_p_lv") {
      $("#champmaths").fadeIn("slow");
      $("#champphysique").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_es_sp") {
      $("#champmaths").fadeIn("slow");
      $("#champeco").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_p_si") {
      $("#champmaths").fadeIn("slow");
      $("#champphysique").fadeIn("slow");
      $("#champsi").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "m_p_s") {
      $("#champmaths").fadeIn("slow");
      $("#champphysique").fadeIn("slow");
      $("#champsvt").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "sp_es_lv") {
      $("#champeco").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

    if (specialite1 == "sp_h_es") {
      $("#champeco").fadeIn("slow");
      $("#champfrancais").fadeIn("slow");
      $("#champphilosophie").fadeIn("slow");
      $("#champanglais").fadeIn("slow");
    };

  });

  $("#anglais").change(function(){
    $("#champ_bouton_profil_1").fadeIn("slow");
  });
});



/** 
 * Changer le style en cas de problème = display:none -> display=true
 */

var specialite = document.forms["information_profil"]["specialite"].value;
var lv1 = document.forms["information_profil"]["lv1"].value;
var profileleve = document.forms["information_profil"]["profileleve"].value;
var ambiancetravail = document.forms["information_profil"]["ambiancetravail"].value;
var tempstravail = document.forms["information_profil"]["tempstravail"].value;
var methodes = document.forms["information_profil"]["methodes"].value;
var matieresfav = document.forms["information_profil"]["matieresfav"].value;
var maths = document.forms["information_profil"]["maths"].value;
var physique = document.forms["information_profil"]["physique"].value;
var svt = document.forms["information_profil"]["svt"].value;
var si = document.forms["information_profil"]["si"].value;
var eco = document.forms["information_profil"]["eco"].value;
var francais = document.forms["information_profil"]["francais"].value;
var philosophie = document.forms["information_profil"]["philosophie"].value;
var anglais = document.forms["information_profil"]["anglais"].value;
var qualite1 = document.forms["information_profil_2"]["qualite1"].value;
var qualite2 = document.forms["information_profil_2"]["qualite2"].value;
var qualite3 = document.forms["information_profil_2"]["qualite3"].value;
var qualite4 = document.forms["information_profil_2"]["qualite4"].value;
var qualite5 = document.forms["information_profil_2"]["qualite5"].value;
var defaut1 = document.forms["information_profil_2"]["defaut1"].value;
var defaut2 = document.forms["information_profil_2"]["defaut2"].value;
var defaut3 = document.forms["information_profil_2"]["defaut3"].value;


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
      };

      if (profileleve != "") {
        $("#champprofileleve").attr("style", "display:yes");
      };

      if (lv1 != "") {
        $("#champlv1").attr("style", "display:yes");
      };

      if (ambiancetravail != "") {
        $("#champambiancetravail").attr("style", "display:yes");
      };

      if (tempstravail != "") {
        $("#champtempstravail").attr("style", "display:yes");
      };

      if (methodes != "") {
        $("#champmethodes").attr("style", "display:yes");
      };

      if (matieresfav != "") {
        $("#champmatieresfav").attr("style", "display:yes");
      };

      if (maths != "") {
        $("#champmaths").attr("style", "display:yes");
      };

      if (physique != "") {
        $("#champphysique").attr("style", "display:yes");
      };

      if (svt != "") {
        $("#champsvt").attr("style", "display:yes");
      };

      if (si != "") {
        $("#champsi").attr("style", "display:yes");
      };

      if (francais != "") {
        $("#champfrancais").attr("style", "display:yes");
      };

      if (eco != "") {
        $("#champeco").attr("style", "display:yes");
      };

      if (anglais != "") {
        $("#champanglais").attr("style", "display:yes");
      };

      if (philosophie != "") {
        $("#champphilosophie").attr("style", "display:yes");
        $("#champ_bouton_profil_1").attr("style", "display:yes");
      };
});  

