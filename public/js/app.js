//clientmoral
var nom=document.getElementById("name");
var prenom=document.getElementById("Prenom");
var adresse=document.getElementById("adresse");
var email=document.getElementById("email");
var telephone=document.getElementById("telephone");
var raisonSocial=document.getElementById("raisonSocial");
var envoyer=document.getElementById("envoyer3");
var nommanquant=document.getElementById("nom_manquant");

//clientphysique
var nom1=document.getElementById("name1");
var prenomm=document.getElementById("Prenom1");
var adresse1=document.getElementById("adresse1");
var email1=document.getElementById("email1");
var telephone1=document.getElementById("telephone1");
var salaire1=document.getElementById("salaire1");
var compte1=document.getElementById("compte1");
var profession1=document.getElementById("profession1");
var envoyer=document.getElementById("envoyer3");
var prnommanquant=document.getElementById ("prenom1_manquant"); 
//ClientNonSalarie
var name2=document.getElementById("name2");
var prenom2=document.getElementById("Prenom2");
var adresse2=document.getElementById("adresse2");
var telephone2=document.getElementById("telephone2");
var telephonemanquant=document.getElementById("telephone2_manquant");

//ClientSalarie
var name3=document.getElementById("name3");
var prenom3=document.getElementById("prenom3");
var adresse3=document.getElementById("adresse3");
var telephone3=document.getElementById("telephone3");
var CNI=document.getElementById("CNI");
var email3=document.getElementById("email3");
var emailmanquant=document.getElementById ("email3_manquant"); 



var nomManquant=document.getElementById("nom_manquant");
var prenomManquant=document.getElementById("Prenom_manquant");
var adressemanquant=document.getElementById("adresse_manquant");
var emailManquant=document.getElementById("email_manquant");
var telephoneManquant=document.getElementById("telephone_manquant");
var entrepriseManquant=document.getElementById("entreprise_manquant")
var socialManquant=document.getElementById("social_manquant");

var nom1Manquant=document.getElementById("name1_manquant");
var prenom1Manquant=document.getElementById("prenom1_manquant");
var adresse1Manquant=document.getElementById("adresse1_manquant");
var email1Manquant=document.getElementById("email1_manquant");
var telephone1Manquant=document.getElementById("telephone1_manquant");
var salaire1Manquant=document.getElementById("salaire1_manquant");
var compte1Manquant=document.getElementById("compte1_manquant");
var profession1Manquant=document.getElementById("profession1_manquant");
//var cliemoral=document.getElementById
//Choix type client(select)
var typeclient=document.getElementById("typeC");
/*var typeclient=document.getElementById("typeclient1");
var typeclient=document.getElementById("typeclient2");
var typeclient=document.getElementById("typeclient3");*/

var client_moral=document.getElementById("client_moral");
var client_salarie=document.getElementById("client_salarie");
var non_salarie=document.getElementById("non_salarie");
var physique=document.getElementById("client_physique");


	typeclient.addEventListener('change',(event)=>{
			event.preventDefault();
			if( typeclient.value=="clientmoral"){
				client_moral.style.display="block";
				client_salarie.style.display="none";
				non_salarie.style.display="none";
				physique.style.display="none";
				return 1;
			} 
			if (typeclient.value=="clientphysique"){
				client_moral.style.display="none";
				client_salarie.style.display="none";
				non_salarie.style.display="none";
				physique.style.display="block";
				return 2;
			}
			if(typeclient.value=="clientSalarie"){
				client_moral.style.display="block";
				client_salarie.style.display="block";
				non_salarie.style.display="none";
				physique.style.display="none";
				return 3;
			}
			if(typeclient.value=="clientNSalarie"){
				client_moral.style.display="none";
				client_salarie.style.display="none";
				non_salarie.style.display="block";
				physique.style.display="none";
				return 4;
			}
			document.getElementById("typeclient1")=typeclient.value;
			
	})
	window. onload =function() {
		client_moral.style.display="none";
		client_salarie.style.display="none";
		non_salarie.style.display="none";
		physique.style.display="none";
	}  

envoyer.addEventListener('click',validation);

function validation(event){
	if(typeclient.value == "clientmoral"){
		if (nom.value==""){
			event.preventDefault();
			nommanquant.textContent='Nom manquant';
			nommanquant.style.color='red';
		}
		}
		if(typeclient.value == "clientphysique"){
			if (prenomm.value==""){
				event.preventDefault();
				prnommanquant.textContent='prenom manquant';
				prnommanquant.style.color='red';
		
			}
		}
		if(typeclient.value == "clientNSalarie"){
			if (telephone2.value==""){
				event.preventDefault();
				telephonemanquant.textContent='telephone manquant';
				telephonemanquant.style.color='red';
			}
		}
		if(typeclient.value == "clientSalarie"){
			if (email3.value==""){
				event.preventDefault();
				emailmanquant.textContent='email manquant';
				emailmanquant.style.color='red';
			}
		}
	}

