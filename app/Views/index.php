
    {if isset($ok)}
        {if $ok == 1}
                echo "<div class='passe'>Soumission réussie</div>";
        {else}
                echo "<div class='casse'>Erreur de soumission</div>";
        {/if} 
    {/if} 



<!DOCTYPE HTML>
<html>
    <head>
        <title>Banque du peuple</title>
        <meta charset="utf-8"/>
        <!-- <link type="text/css" rel="stylesheet" href="{$url_base}public/css/style.css"/> -->
        <style>
            
.info_employeur{ 
    background:url(i2.jpg);
    color: rgb(25, 43, 95);
    border-radius: 8px; 
    margin: 10px; 
    padding: 20px; 
    width: 400px;
    right: 15%; 
    top: 105%;
    position: absolute; 
    display: none;
}
.info_compte{
    background:url(i2.jpg);
    color: rgb(25, 43, 95);
    border-radius: 8px; 
    margin: 10px; 
    padding: 20px; 
    width: 400px; 
    right: 15%; 
    position:absolute; 
    top: 45%;
    display: none;
}
.pore{
    background: url(i2.jpg);
    color: rgb(25, 43, 95);
    border-radius: 8px; 
    margin: 10px; 
    padding: 20px; 
    left: 17%;
    top: 45%;
    width: 400px; 
    position: absolute;
    display: none;
}
.aorn{
    background: url(i2.jpg);
    color: rgb(25, 43, 95);
    border-radius: 8px; 
    margin: 10px; 
    padding: 20px; 
    left: 17%;
    top: 63%;
    width: 400px; 
    position: absolute;
    display: none;
}
.sccp{
    background: url(i2.jpg);
    color: rgb(25, 43, 95);
    border-radius: 8px; 
    margin: 10px; 
    padding: 20px; 
    left: 17%;
    top: 95%;
    width: 400px; 
    position: absolute;
    display: none;

}
.scce{
    background: url(i2.jpg);
    color: rgb(25, 43, 95);
    border-radius: 8px; 
    margin: 10px; 
    padding: 20px; 
    left: 17%;
    top: 95%;
    width: 400px; 
    position: absolute;
    display: none;

}

button{ 
    background-color:rgb(25, 43, 95); 
    color: white;
    position: absolute; 
    right: 40%;
    cursor: pointer; 
    right: 25%; 
    font-size: 18px; 
    border: rgb(25, 43, 95); 
    border-radius: 5px; 
    text-transform: uppercase;
    bottom: -15%;
    display: none;
    
   
}
a:link{ 
    text-decoration: none;
    font-size: 15px; 
    color: rgb(25, 43, 95); 
    padding : 20px; 
    margin-bottom: 3px; 
    font-size: 30px;
}
.ligne{ 
    color:rgb(241, 209, 66) 1px ;
    border-bottom: solid rgb(241, 209, 66) 1px;
}
h1{  
    color: rgb(241, 209, 66); 
    text-align: center;
}
h2{ 
    text-align: center;
    padding: 0px;
    margin: 0px;
    color:rgb(25, 43, 95);  
}
h3{
    text-align: right;
    margin-right: 10px;
    color:rgb(25, 43, 95);  
}
::placeholder {
    color: gray;
    opacity: 1;
}
.suite{
    text-align: center;
    border-bottom: solid rgb(241, 209, 66) 1px;
}
p{
    text-align: center;
    color: rgb(25, 43, 95);  
    font-size: 20px ;
}
img{
    width: 150px;
    height: 150px;
    top: 0%;
    position: absolute;
}
fieldset {
    margin-bottom:10px;
    border:1px solid; 
    text-transform: capitalize; 
}
label {
    margin-top: 10px;
    display: block ;
}

input{
    float: right;
    height: 15px;
    width: 250px; 
    border:rgb(52, 58, 73) solid 1px ;    
}
input[type=radio] {
    background-color:rgb(25, 43, 95);
    border:none;
    width:20px;
    
}
select{
    text-transform: capitalize;
    float: right;
    
}

#menu ul{
    margin: 10px;
    padding: 0;
    left: 40px;
    position: absolute;
}
#menu li{
    list-style: none;
    float: left;
    position: relative;
    background-color: rgb(25, 43, 95) ;
}
#menu ul li a{
    color: wheat ;
    text-decoration: none;
    width: 380px;
    height: 30px;
    display: block;
    text-align: center;
    border: 1px solid rgb(25, 43, 95); 
     
}
#menu ul ul {
    position: absolute;
    top : 20px;
    visibility: hidden;
}
#menu ul li:hover ul {
    visibility: visible;
    margin-top: 40px;
    font-size: 20px;
    text-align: center;
    padding-right: 40px;
}
/*.erreur{
    position: absolute;
    transform: translate(-50%);
    top: 40%;
    left: 50%;
    padding: 0px;
    color: red;
    font-size: 20px;
    transition: all 0.5s ease;
}*/
.passe{
    position: absolute;
    transform: translate(-50%);
    top: 40%;
    left: 50%;
    padding: 0px;
    color: white;
    background-color: green;
    font-size: 20px;
    transition: all 0.9s ease;
}

.casse{
    position: absolute;
    transform: translate(-50%);
    top: 40%;
    left: 50%;
    padding: 0px;
    color: white;
    background-color: red;
    font-size: 20px;
    transition: all 0.9s ease;

}
</style>

    </head>
    <body>
        <header>
            <div class="ligne" name="ligne">
                 <h1> BANQUE DU PEUPLE  </h1>
                 <h2> <i> Vous êtes notre raison d'être! </i></h2>
                 <h3> Espace responsable de compte</h3>
                 <img src="{$url_base}public/image0.jpg" alt="">
                </div>
            <div name="menu" id="menu">
                <ul name="menu_respo" id=menu_respo>
                    <li><a href="consultations">Consultations</a>   
                        <ul>
                            <li> <a href="#">Clients</a></li>
                            <li> <a href="#">Comptes</a></li>
                            <li> <a href="#">Historique</a></li>
                        </ul>
                    </li>
                    <li> <a href="opérations">Opérations</a> 
                        <ul>
                            <li> <a href="#">Virements</a></li>
                        </ul>
                    </li>
                    <li><a href="gestion">Gestion compte</a>  
                        <ul>
                            <li name="ovrc" id="ovrc" onclick="afficherForm()"> <a href="#Ouverture_compte">Ouverture compte</a></li>
                            <li> <a href="#">Gestion requêtes</a></li>
                            <li> <a href="#">Gestion réclamations</a></li>
                            <li> <a href="#">Fermeture comptes</a></li>
                            <li> <a href="#">Autres</a></li>
                        </ul>
                    </li>

                </ul>   
            </div> 
        </header>
        <nav>
            <div class="erreur" name="erreur" id="erreur"></div>


            <form name="formulaire" name="ouverture" id="ouverture" method="POST" action="<?php echo base_url('All/inserer');?>">
                
                    <div class="pore" name="pore" id="pore">
                        <fieldset>
                            <legend>type de client </legend> 
                            
                            <input type="radio" name="check1" value="Particulier"  id="Particulier" onchange="particulier()"/>
                            <label for="Particulier" class="inline">particulier</label>
                            <input type="radio" name="check1" value="Entreprise"  id="Entreprise" onchange="entreprise(), anulsal()" />
                            <label for="Entreprise" class="inline">entreprise</label>
                            
                        </fieldset> 
                    </div>    
                    <div class="aorn" name="aorn" id="aorn">
                        <fieldset >
                            <legend>infos client</legend> 
                            
                            <input type="radio" name="check2" value="Nouveau"  id="Nouveau" onchange="anulidc(), anulautomat ()"/>
                            <label for="Nouveau" class="inline">nouveau client</label>
                            <input type="radio" name="check2" value="Ancien"  id="Ancien" onchange="idc(), automat()" />
                            <label for="Ancien" class="inline">ancien client</label>

                            <label for= "id_client">id client:</label>
                            <input type="text" name="id_client" id= "id_client" placeholder="Saisir id client" disabled/> <br>
                        </fieldset>
                    </div>
                    <div class="sccp" name="sccp" id="sccp">
                        <fieldset>
                            <legend>infos client particulier</legend> 

                            <label for="prenom_client">prénom :</label>
                            <input type="text"  name="prenom_client" id="prenom_client" placeholder="Saisir le prenom" /> <br>
                                
                            <label for="nom_client">nom :</label>
                            <input type="text" name="nom_client" id="nom_client" placeholder="Saisir le nom" /> <br>
                            
                            <label for="datenaiss">date de naissance :</label> 
                            <input type="date" name="datenaiss" id="datenaiss" placeholder="choisir une date" /> <br>

                            <label for="cni">CNI :</label> 
                            <input type="number" name="cni" id="cni" placeholder="Saisir le numéro d'indentification national" /> <br>
                            
                            <label for="adresse_client">adresse :</label> 
                            <input type="text" name="adresse_client" id="adresse_client" placeholder="Saisir l'adresse" /> <br>
                            
                            <label for="tel_client">téléphone :</label> 
                            <input type="text" name="tel_client" id="tel_client" placeholder="Saisir le numéro de téléphone" /> <br>

                            <label for="email_client">email :</label>
                            <input type="text" name="email_client" id="email_client" placeholder="Saisir l'adresse mail"> <br>

                            <label for="profession">profession :</label> 
                            <input type="text" name="profession" id="profession" placeholder="Saisir la profession"/> <br>

                        </fieldset>  
                        <fieldset>

                            <legend>statut client particulier</legend> 

                            <input type="radio" name="check3" value="salarie" id="salarie" onchange="sal(), salac()"/>
                            <label for="salarie" class="inline">salarié</label>
                            <input type="radio" name="check3" value="autres" id="autres" onchange="anulsal(), anulsalac ()"/>
                            <label for="autres" class="inline">autres</label>

                            <input type="hidden" name="statut" id="statut"> <br>

                            
                            <label for="salaire">salaire actuel :</label> 
                            <input type="text" name="salaire" id="salaire" value ="0" placeholder="Saisir le salaire" disabled/> <br>


                        </fieldset>

                    </div>
                    <div class="scce" name="scce" id="scce">
                        <fieldset>

                            <legend>infos client entreprise</legend> 

                            <label for="statut_juridique">statut juridique :</label> 
                            <select name="statut_juridique" id="statut_juridique" > 
                                <option value="sa">SA</option>
                                <option value="sarl">SARL</option>
                                <option value="scs">SCS</option>
                                <option value="snc">SNC</option>
                                <option value="autre">autre</option>
                            </select> 

                            <label for="nom_entreprise">dénomination :</label>
                            <input type="text" name="nom_entreprise" id="nom_entreprise" placeholder="Saisir le nom de l'entreprise" /> <br>
                                
                            <label for="ninea">NINEA :</label> 
                            <input type="text" name="ninea" id="ninea" placeholder="Saisir le NINEA" /> <br>
                            
                            <label for="adresse_entreprise">adresse :</label> 
                            <input type="text" name="adresse_entreprise" id="adresse_entreprise" placeholder="Saisir l'adresse" /> <br>
                            
                            <label for="tel_entreprise">téléphone :</label> 
                            <input type="text" name="tel_entreprise" id="tel_entreprise" placeholder="Saisir le numéro de téléphone" /> <br>

                            <label for="email_entreprise">email :</label>
                            <input type="text" name="email_entreprise" id="email_entreprise" placeholder="Saisir l'adresse mail"> <br>

                        </fieldset>

                      
                    </div>
                    <div class="info_employeur" name="info_employeur" id="info_employeur" >
                        <fieldset>
                            <legend>infos employeur</legend>
                            
                            <label for="denomination">dénomination :</label> 
                            <input type="text" name="denomination" id="denomination" placeholder="Saisir la dénomination" /> <br>

                            <label for="raison_social">raison social :</label> 
                            <input type="text" name="raison_social" id="raison_social" placeholder="Saisir la raison sociale" /> <br>
                            
                            <label for="numero_identification">numéro d'identification :</label> 
                            <input type="text" name="numero_identification" id="numero_identification" placeholder="Saisir le numéro d'identification" /> <br>
                            
                            <label for="adresse_employeur">adresse :</label>
                            <input type="text" name="adresse_employeur" id="adresse_employeur" placeholder="Saisir l'adresse" /> <br>

                        </fieldset>
                            

                    </div>
                    <div class="info_compte" name="info_compte" id="info_compte"> 
                        <fieldset>
                            <legend>Type de Compte</legend>

                            <label for="type_de_compte">Type de Compte :</label> 
                            <select name="type_compte" id="type_compte" onchange="frais()">
                                <option value="ccourant" >compte courant</option>
                                <option value="cepargne" >compte épargne</option>
                                <option value="cbloqué" >compte bloqué</option>
                            </select> 
                            <input type="hidden" name="liaison" id="liaison"> <br>
                        </fieldset>
                        <fieldset>
                            <legend>infos compte</legend>

                            <label for="numero_agence">numéro agence :</label>
                            <input type="text" name="numero_agence" id="numero_agence" placeholder="Saisie automatique"/> <br>

                            <label for="numero_compte">numéro compte :</label>
                            <input type="text" name="numero_compte" id="numero_compte" placeholder="Saisie automatique"/> <br>

                            <label for="cle_rib">clé rib :</label>
                            <input type="text" name="cle_rib" id="cle_rib" placeholder="Saisie automatique"/> <br>

                            <label for="frais_ouverture">frais ouverture :</label>
                            <input type="text" name="frais_ouverture" id="frais_ouverture" value ="0" placeholder="Saisir le montant" disabled/> <br>
                        
                        </fieldset> 

                      

                    </div>


                <button type="submit" class="soumettre" name="soumettre" id="soumettre" onclick="verify()">soumettre</button>
                
            </form>
        </nav>
        <footer>

        </footer>
    </body>
    
    <script>

function afficherForm (){
  document.getElementById("pore").style.display="block"
  document.getElementById("aorn").style.display="block"
  document.getElementById("info_compte").style.display="block"
}

function particulier(){
  document.getElementById("sccp").style.display="block"
  document.getElementById("soumettre").style.display="block"
  document.getElementById("scce").style.display="none"
}

function entreprise(){
  document.getElementById("scce").style.display="block"
  document.getElementById("soumettre").style.display="block"
  document.getElementById("sccp").style.display="none"
  document.getElementById("info_employeur").style.display="none"
}

function map(){
  document.getElementById("sccp")
  if(sccp.style.display = "none"){
    document.getElementById("prenom_client").required= false
    document.getElementById("nom_client").required= false
    document.getElementById("datenaiss").required= false
    document.getElementById("cni").required= false
    document.getElementById("adresse_client").required= false
    document.getElementById("tel_client").required= false
  }
  document.getElementById("scce")
  if(scce.style.display = "none"){
    document.getElementById("statut_juridique").required= false
    document.getElementById("nom_entreprise").required= false
    document.getElementById("ninea").required= false
    document.getElementById("adresse_entreprise").required= false
    document.getElementById("tel_entreprise").required= false
  }
  document.getElementById("info_employeur")
  if(info_employeur.style.display = "none"){
    document.getElementById("denomination").required= false
    document.getElementById("raison_sociale").required= false
    document.getElementById("numero_identification").required= false
    document.getElementById("adresse_employeur").required= false
  }
}

function sal(){
  document.getElementById("info_employeur").style.display="block"
  document.getElementById("soumettre").style.bottom="-55%"
}

function anulsal(){
  document.getElementById("info_employeur").style.display="none"
  document.getElementById("soumettre").style.bottom="-15%"

}

function idc (){
  document.getElementById("id_client")
  id_client.disabled = false
}

function anulidc (){
  document.getElementById("id_client")
  id_client.disabled = true
}

function salac (){
  document.getElementById("salaire")
  salaire.disabled = false
}

function anulsalac (){
  document.getElementById("salaire")
  salaire.disabled = true 
}

function frais(){
  document.getElementById("frais_ouverture")
  frais_ouverture.disabled = false
  frais_ouverture.required = true
}

function anulfrais(){
  document.getElementById("frais_ouverture")
  frais_ouverture.disabled = true
}

function automat(){
    document.getElementById("prenom_client").disabled = true
    document.getElementById("nom_client").disabled = true
    document.getElementById("datenaiss").disabled = true
    document.getElementById("cni").disabled = true
    document.getElementById("statut_juridique").disabled = true
    document.getElementById("nom_entreprise").disabled = true
    document.getElementById("ninea").disabled = true
    document.getElementById("adresse_entreprise").disabled = true
    document.getElementById("tel_entreprise").disabled = true
  
}

function anulautomat(){
  document.getElementById("prenom_client").disabled = false
  document.getElementById("nom_client").disabled = false
  document.getElementById("datenaiss").disabled = false
  document.getElementById("cni").disabled = false
  document.getElementById("statut_juridique").disabled = false
  document.getElementById("nom_entreprise").disabled = false
  document.getElementById("ninea").disabled = false
  document.getElementById("adresse_entreprise").disabled = false
  document.getElementById("tel_entreprise").disabled = false


}

/*
function verify(){

  var erreur = document.getElementById("erreur")

          var prenom_client = document.getElementById("prenom_client")
      
          if(prenom_client.value.trim() == ""){
            erreur.textContent="Merci de saisir un prénom valide"
        
            prenom_client.style.borderColor = "red"
         
          }
          var nom_client = document.getElementById("nom_client")
      
          if(nom_client.value.trim() == ""){
            erreur.textContent="Merci de saisir un nom valide"
        
            nom_client.style.borderColor = "red"
        
          }
          var datenaiss = document.getElementById("datenaiss")
      
          if(datenaiss.value.trim() == ""){
            erreur.textContent="Merci de saisir une date valide"
        
            datenaiss.style.borderColor = "red"
        
          }  
          var cni = document.getElementById("cni")
      
          if(cni.value.trim() == ""){
            erreur.textContent="Merci de saisir un numéro valide"
        
            cni.style.borderColor = "red"
        
          }
          var adresse_client = document.getElementById("adresse_client")
      
          if(adresse_client.value.trim() == ""){
            erreur.textContent="Merci de saisir une adresse valide "
        
            adresse_client.style.borderColor = "red"
        
          }
          var tel_client = document.getElementById("tel_client")
      
          if(tel_client.value.trim() == ""){
            erreur.textContent="Merci de saisir un numéro de téléphone valide "
        
            tel_client.style.borderColor = "red"
        
          }
} 

*/
    </script>
</html>

