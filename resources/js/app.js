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
    $("#champtempstravailsemaine").fadeIn("slow");
  });

  $("#tempstravailsemaine").change(function(){
    $("#champtempstravailwe").fadeIn("slow");
    window.scrollBy(0, 60);
  });

  $("#tempstravailwe").change(function(){
    $("#champmethodes").fadeIn("slow");
    window.scrollBy(0, 60);
  });

  $("#methodes").change(function(){
    $("#champmatieresfav").fadeIn("slow");
    window.scrollBy(0, 60);
  });

  $("#matieresfav").change(function(){
    $("#champmatieresdet").fadeIn("slow");
    window.scrollBy(0, 100);
  });
  
  $("#matieresdet").change(function(){
    var specialite1 = document.forms["information_profil"]["specialite"].value;
    if (specialite1 == "m_es_h") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champeco").fadeIn("slow");
      });

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "m_s_h") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champsvt").fadeIn("slow");
      });

      $("#svt").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "m_p_sp") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champphysique").fadeIn("slow");
      });

      $("#physique").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "m_es_s") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champsvt").fadeIn("slow");
      });

      $("#svt").change(function(){
        $("#champeco").fadeIn("slow");
      });

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      });  
    };

    if (specialite1 == "m_es_p") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        
        $("#champphysique").fadeIn("slow");
      });

      $("#physique").change(function(){
        $("#champeco").fadeIn("slow");
      });

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "m_es_lv") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champeco").fadeIn("slow");
      });

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      });  
    };

    if (specialite1 == "m_p_lv") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champphysique").fadeIn("slow");
      });

      $("#physique").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "m_es_sp") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champeco").fadeIn("slow");
      });

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      });  
    };

    if (specialite1 == "m_p_si") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champphysique").fadeIn("slow");
      });

      $("#physique").change(function(){
        $("#champsi").fadeIn("slow");
      });

      $("#si").change(function(){
        $("#champeco").fadeIn("slow");
      });

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "m_p_s") {
      $("#champmaths").fadeIn("slow");

      $("#maths").change(function(){
        $("#champphysique").fadeIn("slow");
      });

      $("#physique").change(function(){
        $("#champsvt").fadeIn("slow");
      });

      $("#svt").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "sp_es_lv") {
      $("#champeco").fadeIn("slow");

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
      }); 
    };

    if (specialite1 == "sp_h_es") {
      $("#champeco").fadeIn("slow");
      window.scrollBy(0, 100);

      $("#eco").change(function(){
        $("#champfrancais").fadeIn("slow");
        window.scrollBy(0, 100);
      });

      $("#francais").change(function(){
        $("#champphilosophie").fadeIn("slow");
        window.scrollBy(0, 100);
      });

      $("#philosophie").change(function(){
        $("#champanglais").fadeIn("slow");
        window.scrollBy(0, 100);
      });    
      
      $("#anglais").change(function(){
        $("#champ_bouton_profil_1").fadeIn("slow");
        window.scrollBy(0, 100);
      });  
    };
  });
});


/** 
 * Changer le style en cas de problème = display:none -> display=true
 */

$(document).ready(function(){
  var specialite = document.forms["information_profil"]["specialite"].value;
  if (specialite != "") {
    $("#champspe").attr("style", "display:yes");
  };

  var profileleve = document.forms["information_profil"]["profileleve"].value;
  if (profileleve != "") {
    $("#champprofileleve").attr("style", "display:yes");
  };

  var lv1 = document.forms["information_profil"]["lv1"].value;
  if (lv1 != "") {
    $("#champlv1").attr("style", "display:yes");
  };

  var ambiancetravail = document.forms["information_profil"]["ambiancetravail"].value;
  if (ambiancetravail != "") {
    $("#champambiancetravail").attr("style", "display:yes");
  };

  var tempstravailsemaine = document.forms["information_profil"]["tempstravailsemaine"].value;
  if (tempstravailsemaine != "") {
    $("#champtempstravailsemaine").attr("style", "display:yes");
  };

  var tempstravailwe = document.forms["information_profil"]["tempstravailwe"].value;
  if (tempstravailwe != "") {
    $("#champtempstravailwe").attr("style", "display:yes");
  };

  var methodes = document.forms["information_profil"]["methodes"].value;
  if (methodes != "") {
    $("#champmethodes").attr("style", "display:yes");
  };

  var matieresfav = document.forms["information_profil"]["matieresfav"].value;
  if (matieresfav != "") {
    $("#champmatieresfav").attr("style", "display:yes");
  };

  var matieresdet = document.forms["information_profil"]["matieresdet"].value;
  if (matieresdet != "") {
    $("#champmatieresdet").attr("style", "display:yes");
  };

  var maths = document.forms["information_profil"]["maths"].value;
  if (maths != "") {
    $("#champmaths").attr("style", "display:yes");
  };

  var physique = document.forms["information_profil"]["physique"].value;
  if (physique != "") {
    $("#champphysique").attr("style", "display:yes");
  };

  var svt = document.forms["information_profil"]["svt"].value;
  if (svt != "") {
    $("#champsvt").attr("style", "display:yes");
  };

  var si = document.forms["information_profil"]["si"].value;
  if (si != "") {
    $("#champsi").attr("style", "display:yes");
  };

  var francais = document.forms["information_profil"]["francais"].value;
  if (francais != "") {
    $("#champfrancais").attr("style", "display:yes");
  };

  var eco = document.forms["information_profil"]["eco"].value;
  if (eco != "") {
    $("#champeco").attr("style", "display:yes");
  };

  var anglais = document.forms["information_profil"]["anglais"].value;
  if (anglais != "") {
    $("#champanglais").attr("style", "display:yes");
    $("#champ_bouton_profil_1").attr("style", "display:yes");
  };

  var philosophie = document.forms["information_profil"]["philosophie"].value;
  if (philosophie != "") {
    $("#champphilosophie").attr("style", "display:yes");
  };
});  

