var typecompte=document.getElementById("typeX");
var compte_xeweul=document.getElementById("compte_epargne_xeweul");
var compte_Courant=document.getElementById("compte_courant");
var compte_Bloque=document.getElementById("compte_bloque");

typecompte.addEventListener('change',(event)=>{
    event.preventDefault();
    if(typecompte.value=="compteepargnexeweul"){
        compte_xeweul.style.display="block";
        compte_Courant.style.display="none";
        compte_Bloque.style.display="none";   
    }
    if(typecompte.value=="comptecourant"){
        compte_xeweul.style.display="none";
        compte_Courant.style.display="block";
        compte_Bloque.style.display="none";
    }
    if(typecompte.value=="comptebloque"){
        compte_xeweul.style.display="none";
        compte_Courant.style.display="none";
        compte_Bloque.style.display="block";

    }

})
window.onload =function() {
    compte_xeweul.style.display="none";
    compte_Courant.style.display="none";
    compte_Bloque.style.display="none";
}  


//compteEpargneXeweul
var ouverture=document.getElementById("frais_d_ouverture");
var agence=document.getElementById("numero_agence");
var rib=document.getElementById("cle_rib");
var numCompte=document.getElementById("numer_compte");
var envoyer=document.getElementById("envoyer2");
var ouverture_manquant=document.getElementById("ouverture_manquant");
//compteCourant
var Agios=document.getElementById("agios1");
var numer_agence=document.getElementById("numero_agence1");
var rib=document.getElementById("cle_rib1");
var numero_agence=document.getElementById("numer_compte1");
var agios_manquant=document.getElementById("agios_manquant");
var envoyer=document.getElementById("envoyer2");
//Compte Bloque
var fraisd=document.getElementById("frais_ouverture1");
var dure_bloc=document.getElementById("dure_de_blocage");
var delai_bloc=document.getElementById("delai_de_blocage");
var rib=document.getElementById("cle_rib2");
var num_agence=document.getElementById("numero_agence2");
var ouverture_manquant1=document.getElementById("ouverture_manquant1");
var envoyer=document.getElementById("envoyer2");


    envoyer.addEventListener('click',validation);
    function validation(event){
        if(typecompte.value== "compteepargnexeweul"){
            if(ouverture.value== ""){
                event.preventDefault();
                ouverture_manquant.textContent="ouverture manquant";
                ouverture_manquant.style.color="red";

            }  
        }
        if(typecompte.value=="comptecourant"){
            if( Agios.value==""){
                event.preventDefault();
                agios_manquant.textContent="agios manquant";
                agios_manquant.style.color="red";

            }
        }
        if(typecompte.value=="comptebloque"){
            if(fraisd.value==""){
                event.preventDefault();
            ouverture_manquant1.textContent="ouverture manquant";
            ouverture_manquant1.style.color="red";
            }
        }
    }















