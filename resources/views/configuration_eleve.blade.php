@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <form action="/inscription" method="post">
        {{ csrf_field() }}

        <div class="field">
                  <label class="label">Niveau d'études</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="niveauetude">
                            <option value="seconde">Seconde</option>
                            <option value="premiere">Première</option>
                            <option value="terminale">Terminale</option>
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('niveauetude'))
                        <p class="help is-danger">{{ $errors->first('niveauetude') }}</p>
                    @endif
                </div>

                <div class="field">
                  <label class="label">Bac préparé</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="bac">
                            <option value="bacg">Bac général</option>
                            <option value="bact">Bac technologique</option>
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('bac'))
                        <p class="help is-danger">{{ $errors->first('bac') }}</p>
                    @endif
                </div>

                <div class="field">
                  <label class="label">Spécialités</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="specialite" id="specialite">
                            <option value="m_es_h">MATHS-SES-HUMANITES</option>
                            <option value="m_s_h">MATHS-SVT-HUMANITES</option>
                            <option value="m_p_sp">MATHS-PHYS-SPO</option>
                            <option value="m_es_s">MATHS-SES-SVT</option>
                            <option value="m_es_p">MATHS-SES-PHYS</option>
                            <option value="m_p_lv">MATHS-PHYS-LV et CULT ANGLAIS</option>
                            <option value="m_es_lv">MATHS-SES-LV et CULT ANGLAIS</option>
                            <option value="m_es_sp">MATHS-SES-SPO</option>
                            <option value="m_p_si">MATHS-PHYS-SI</option>
                            <option value="m_p_s">MATHS-PHYS-SVT</option>
                            <option value="sp_es_lv">SPO-SES-LV et CULT ANGLAIS</option>
                            <option value="sp_h_es">SPO-HUMANITES-SES</option>  
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('specialite'))
                        <p class="help is-danger">{{ $errors->first('specialite') }}</p>
                    @endif
                </div>        

                <div class="field">
                  <label class="label">Qualité 1</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="qualite1" id="qualite1">
                            <option value="Analytique">Analytique</option>
                            <option value="Ambitieux">Ambitieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Charismatique">Charismatique</option>
                            <option value="Communicatif">Communicatif</option>
                            <option value="Constructif">Constructif</option>
                            <option value="Convaincant">Convaincant</option>
                            <option value="Cooperatif">Coopératif</option>
                            <option value="Courageux">Courageux</option>
                            <option value="Creatif">Créatif</option>
                            <option value="Curieux">Curieux</option>
                            <option value="Diplomate">Diplomate</option>
                            <option value="Dynamique">Dynamique</option>
                            <option value="Efficace">Efficace</option>
                            <option value="Fiable">Fiable</option>
                            <option value="Flexible">Flexible</option>
                            <option value="Honnete">Honnête</option>
                            <option value="Independant">Indépendant</option>
                            <option value="Inventif">Inventif</option>
                            <option value="Leader">Leader</option>
                            <option value="Loyal">Loyal</option>
                            <option value="Minutieux">Minutieux</option>
                            <option value="Observateur">Observateur</option>
                            <option value="Optimiste">Optimiste</option>
                            <option value="Organise">Organisé</option>
                            <option value="Ouvert d’esprit">Ouvert d’esprit</option>
                            <option value="Passionne">Passionné</option>
                            <option value="Perfectionniste">Perfectionniste</option>
                            <option value="Polyvalent">Polyvalent</option>
                            <option value="Reflechi">Réfléchi</option>
                            <option value="Rigoureux">Rigoureux</option>
                            <option value="Soigneux">Soigneux</option>
                            <option value="Souriant">Souriant</option>
                            <option value="Travailleur">Travailleur</option>
                            <option value="Volontaire">Volontaire</option> 
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('qualite1'))
                        <p class="help is-danger">{{ $errors->first('qualite1') }}</p>
                    @endif
                </div>   

                <div class="field">
                  <label class="label">Qualité 2</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="qualite2" id="qualite2">
                            <option value="Analytique">Analytique</option>
                            <option value="Ambitieux">Ambitieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Charismatique">Charismatique</option>
                            <option value="Communicatif">Communicatif</option>
                            <option value="Constructif">Constructif</option>
                            <option value="Convaincant">Convaincant</option>
                            <option value="Cooperatif">Coopératif</option>
                            <option value="Courageux">Courageux</option>
                            <option value="Creatif">Créatif</option>
                            <option value="Curieux">Curieux</option>
                            <option value="Diplomate">Diplomate</option>
                            <option value="Dynamique">Dynamique</option>
                            <option value="Efficace">Efficace</option>
                            <option value="Fiable">Fiable</option>
                            <option value="Flexible">Flexible</option>
                            <option value="Honnete">Honnête</option>
                            <option value="Independant">Indépendant</option>
                            <option value="Inventif">Inventif</option>
                            <option value="Leader">Leader</option>
                            <option value="Loyal">Loyal</option>
                            <option value="Minutieux">Minutieux</option>
                            <option value="Observateur">Observateur</option>
                            <option value="Optimiste">Optimiste</option>
                            <option value="Organise">Organisé</option>
                            <option value="Ouvert d’esprit">Ouvert d’esprit</option>
                            <option value="Passionne">Passionné</option>
                            <option value="Perfectionniste">Perfectionniste</option>
                            <option value="Polyvalent">Polyvalent</option>
                            <option value="Reflechi">Réfléchi</option>
                            <option value="Rigoureux">Rigoureux</option>
                            <option value="Soigneux">Soigneux</option>
                            <option value="Souriant">Souriant</option>
                            <option value="Travailleur">Travailleur</option>
                            <option value="Volontaire">Volontaire</option> 
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('qualite2'))
                        <p class="help is-danger">{{ $errors->first('qualite2') }}</p>
                    @endif
                </div>   

                <div class="field">
                  <label class="label">Qualité 3</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="qualite3" id="qualite3">
                            <option value="Analytique">Analytique</option>
                            <option value="Ambitieux">Ambitieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Charismatique">Charismatique</option>
                            <option value="Communicatif">Communicatif</option>
                            <option value="Constructif">Constructif</option>
                            <option value="Convaincant">Convaincant</option>
                            <option value="Cooperatif">Coopératif</option>
                            <option value="Courageux">Courageux</option>
                            <option value="Creatif">Créatif</option>
                            <option value="Curieux">Curieux</option>
                            <option value="Diplomate">Diplomate</option>
                            <option value="Dynamique">Dynamique</option>
                            <option value="Efficace">Efficace</option>
                            <option value="Fiable">Fiable</option>
                            <option value="Flexible">Flexible</option>
                            <option value="Honnete">Honnête</option>
                            <option value="Independant">Indépendant</option>
                            <option value="Inventif">Inventif</option>
                            <option value="Leader">Leader</option>
                            <option value="Loyal">Loyal</option>
                            <option value="Minutieux">Minutieux</option>
                            <option value="Observateur">Observateur</option>
                            <option value="Optimiste">Optimiste</option>
                            <option value="Organise">Organisé</option>
                            <option value="Ouvert d’esprit">Ouvert d’esprit</option>
                            <option value="Passionne">Passionné</option>
                            <option value="Perfectionniste">Perfectionniste</option>
                            <option value="Polyvalent">Polyvalent</option>
                            <option value="Reflechi">Réfléchi</option>
                            <option value="Rigoureux">Rigoureux</option>
                            <option value="Soigneux">Soigneux</option>
                            <option value="Souriant">Souriant</option>
                            <option value="Travailleur">Travailleur</option>
                            <option value="Volontaire">Volontaire</option> 
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('qualite3'))
                        <p class="help is-danger">{{ $errors->first('qualite3') }}</p>
                    @endif
                </div>   

                <div class="field">
                  <label class="label">Qualité 4</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="qualite4" id="qualite4">
                            <option value="Analytique">Analytique</option>
                            <option value="Ambitieux">Ambitieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Charismatique">Charismatique</option>
                            <option value="Communicatif">Communicatif</option>
                            <option value="Constructif">Constructif</option>
                            <option value="Convaincant">Convaincant</option>
                            <option value="Cooperatif">Coopératif</option>
                            <option value="Courageux">Courageux</option>
                            <option value="Creatif">Créatif</option>
                            <option value="Curieux">Curieux</option>
                            <option value="Diplomate">Diplomate</option>
                            <option value="Dynamique">Dynamique</option>
                            <option value="Efficace">Efficace</option>
                            <option value="Fiable">Fiable</option>
                            <option value="Flexible">Flexible</option>
                            <option value="Honnete">Honnête</option>
                            <option value="Independant">Indépendant</option>
                            <option value="Inventif">Inventif</option>
                            <option value="Leader">Leader</option>
                            <option value="Loyal">Loyal</option>
                            <option value="Minutieux">Minutieux</option>
                            <option value="Observateur">Observateur</option>
                            <option value="Optimiste">Optimiste</option>
                            <option value="Organise">Organisé</option>
                            <option value="Ouvert d’esprit">Ouvert d’esprit</option>
                            <option value="Passionne">Passionné</option>
                            <option value="Perfectionniste">Perfectionniste</option>
                            <option value="Polyvalent">Polyvalent</option>
                            <option value="Reflechi">Réfléchi</option>
                            <option value="Rigoureux">Rigoureux</option>
                            <option value="Soigneux">Soigneux</option>
                            <option value="Souriant">Souriant</option>
                            <option value="Travailleur">Travailleur</option>
                            <option value="Volontaire">Volontaire</option> 
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('qualite4'))
                        <p class="help is-danger">{{ $errors->first('qualite4') }}</p>
                    @endif
                </div>   

                <div class="field">
                  <label class="label">Qualité 5</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="qualite5" id="qualite5">
                            <option value="Analytique">Analytique</option>
                            <option value="Ambitieux">Ambitieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Charismatique">Charismatique</option>
                            <option value="Communicatif">Communicatif</option>
                            <option value="Constructif">Constructif</option>
                            <option value="Convaincant">Convaincant</option>
                            <option value="Cooperatif">Coopératif</option>
                            <option value="Courageux">Courageux</option>
                            <option value="Creatif">Créatif</option>
                            <option value="Curieux">Curieux</option>
                            <option value="Diplomate">Diplomate</option>
                            <option value="Dynamique">Dynamique</option>
                            <option value="Efficace">Efficace</option>
                            <option value="Fiable">Fiable</option>
                            <option value="Flexible">Flexible</option>
                            <option value="Honnete">Honnête</option>
                            <option value="Independant">Indépendant</option>
                            <option value="Inventif">Inventif</option>
                            <option value="Leader">Leader</option>
                            <option value="Loyal">Loyal</option>
                            <option value="Minutieux">Minutieux</option>
                            <option value="Observateur">Observateur</option>
                            <option value="Optimiste">Optimiste</option>
                            <option value="Organise">Organisé</option>
                            <option value="Ouvert d’esprit">Ouvert d’esprit</option>
                            <option value="Passionne">Passionné</option>
                            <option value="Perfectionniste">Perfectionniste</option>
                            <option value="Polyvalent">Polyvalent</option>
                            <option value="Reflechi">Réfléchi</option>
                            <option value="Rigoureux">Rigoureux</option>
                            <option value="Soigneux">Soigneux</option>
                            <option value="Souriant">Souriant</option>
                            <option value="Travailleur">Travailleur</option>
                            <option value="Volontaire">Volontaire</option> 
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('qualite5'))
                        <p class="help is-danger">{{ $errors->first('qualite5') }}</p>
                    @endif
                </div>   

                <div class="field">
                  <label class="label">Défaut 1</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="defaut1" id="defaut1">
                            <option value="Agressif">Agressif</option>
                            <option value="Anxieux">Anxieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Arrogant">Arrogant</option>
                            <option value="Assiste">Assisté</option>
                            <option value="Autoritaire">Autoritaire</option>
                            <option value="Bavard">Bavard</option>
                            <option value="Blessant">Blessant</option>
                            <option value="Capricieux">Capricieux</option>
                            <option value="Caracteriel">Caractériel</option>
                            <option value="Catastrophiste">Catastrophiste</option>
                            <option value="Colerique">Colérique</option>
                            <option value="Defaitiste">Défaitiste</option>
                            <option value="Desordonne">Désordonné</option>
                            <option value="Distrait">Distrait</option>
                            <option value="Emotif">Émotif</option>
                            <option value="Impatient">Impatient</option>
                            <option value="Impulsif">Impulsif</option>
                            <option value="Influençable">Influençable</option>
                            <option value="Intolerant">Intolérant</option>
                            <option value="Lent">Lent</option>
                            <option value="Manque_de_confiance">Manque de confiance</option>
                            <option value="Mefiant">Méfiant</option>
                            <option value="Obstination">Obstination</option>
                            <option value="Susceptible">Susceptible</option>
                            <option value="Timide">Timide</option>
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('defaut1'))
                        <p class="help is-danger">{{ $errors->first('defaut1') }}</p>
                    @endif
                </div>  

                <div class="field">
                  <label class="label">Défaut 2</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="defaut2" id="defaut2">
                            <option value="Agressif">Agressif</option>
                            <option value="Anxieux">Anxieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Arrogant">Arrogant</option>
                            <option value="Assiste">Assisté</option>
                            <option value="Autoritaire">Autoritaire</option>
                            <option value="Bavard">Bavard</option>
                            <option value="Blessant">Blessant</option>
                            <option value="Capricieux">Capricieux</option>
                            <option value="Caracteriel">Caractériel</option>
                            <option value="Catastrophiste">Catastrophiste</option>
                            <option value="Colerique">Colérique</option>
                            <option value="Defaitiste">Défaitiste</option>
                            <option value="Desordonne">Désordonné</option>
                            <option value="Distrait">Distrait</option>
                            <option value="Emotif">Émotif</option>
                            <option value="Impatient">Impatient</option>
                            <option value="Impulsif">Impulsif</option>
                            <option value="Influençable">Influençable</option>
                            <option value="Intolerant">Intolérant</option>
                            <option value="Lent">Lent</option>
                            <option value="Manque_de_confiance">Manque de confiance</option>
                            <option value="Mefiant">Méfiant</option>
                            <option value="Obstination">Obstination</option>
                            <option value="Susceptible">Susceptible</option>
                            <option value="Timide">Timide</option>
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('defaut2'))
                        <p class="help is-danger">{{ $errors->first('defaut2') }}</p>
                    @endif
                </div>  

                <div class="field">
                  <label class="label">Défaut 3</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="defaut3" id="defaut3">
                            <option value="Agressif">Agressif</option>
                            <option value="Anxieux">Anxieux</option>
                            <option value="Astucieux">Astucieux</option>
                            <option value="Arrogant">Arrogant</option>
                            <option value="Assiste">Assisté</option>
                            <option value="Autoritaire">Autoritaire</option>
                            <option value="Bavard">Bavard</option>
                            <option value="Blessant">Blessant</option>
                            <option value="Capricieux">Capricieux</option>
                            <option value="Caracteriel">Caractériel</option>
                            <option value="Catastrophiste">Catastrophiste</option>
                            <option value="Colerique">Colérique</option>
                            <option value="Defaitiste">Défaitiste</option>
                            <option value="Desordonne">Désordonné</option>
                            <option value="Distrait">Distrait</option>
                            <option value="Emotif">Émotif</option>
                            <option value="Impatient">Impatient</option>
                            <option value="Impulsif">Impulsif</option>
                            <option value="Influençable">Influençable</option>
                            <option value="Intolerant">Intolérant</option>
                            <option value="Lent">Lent</option>
                            <option value="Manque_de_confiance">Manque de confiance</option>
                            <option value="Mefiant">Méfiant</option>
                            <option value="Obstination">Obstination</option>
                            <option value="Susceptible">Susceptible</option>
                            <option value="Timide">Timide</option>
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('defaut3'))
                        <p class="help is-danger">{{ $errors->first('defaut3') }}</p>
                    @endif
                </div>  

                <div class="field">
                  <label class="label">Votre profil en classe</label>
                  <div class="control" id="nv">
                    <div class="select is-info">
                        <div class="select is-rounded">
                          <select name="profil" id="profil">
                            <option value="profil1">Ecoute et participe</option>
                            <option value="profil2">Bavard</option>
                            <option value="profil3">Bavard</option>
                            <option value="profil4">Bavard</option>
                            <option value="profil5">Bavard</option>
                            <option value="profil6">Bavard</option>
                            <option value="profil7">Bavard</option>
                            <option value="profil8">Bavard</option>
                            <option value="profil9">Bavard</option> 
                            <option value="profil10">Bavard</option>
                          </select>
                        </div>
                    </div>
                  </div>
                    @if($errors->has('profil'))
                        <p class="help is-danger">{{ $errors->first('profil') }}</p>
                    @endif
                </div>