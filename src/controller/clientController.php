<?php
require_once '../model/connectdb.php';
require_once '../entity/cliententity.php';
//class clientController

function add($moral)
{
    $db = new connectdb();
    $a = $db->getConnection();

    $client = new client();

    $client->setnomEntreprise($moral['nomClientMoral']);
    $client->setraisonsocial($moral['raisonSocialClientMoral']);
    $client->setaddresseclientmoral($moral['adresse']);
    $client->setemailclient($moral['email']);
    $client->settelephoneclient($moral['telephone']);

    // $sql= "INSERT INTO clientmoral(id, nomEntreprise, raisonSocial, adresse, email, telephone) /VALUES (NULL,:nomEntreprise,:raisonSocial,:adresseClientMoral,:emailClientMoral,//:telephoneClientMoral)";
    $sql = "INSERT INTO `clientmoral`(`id`, `nomEntreprise`, `raisonSocial`, `adresse`, `email`, `telephone`) VALUES (NULL,:nomEntreprise,:raison,:adresse,:email,:telephone)";

    $z = $a->prepare($sql);
    // $db = $query->execute($array);
    $array = [
        // 'id' => $client->getId(),
        'nomEntreprise' => $client->getNomentreprise(),
        'raison' => $client->getraisonsocial(),
        'adresse' => $client->getAddresseclientmoral(),
        'email' => $client->getemailclient(),
        'telephone' => $client->gettelephoneclient()
    ];
    $k = $z->execute($array);
    return $k;
}



if (isset($_POST['valider'])) {
    // var_dump($_POST);
    //  die();

    if ($_POST['typeclient'] == 'clientmoral') {
        $m = add($_POST);
        echo $m;
        // var_dump($_POST);
        //
        die();
    } else echo 2;
}
                
              
            
    
  

   


    

    // }
    //$db= new connectdb();
    //$db-> getConnection();
    // 













//extract($_POST);
//var_dump($_POST);
//die;
//if ($typeclient == '1') {
//var_dump($_POST);
//function insertclientmoral()






/* $client = new client();
 $client = setId($data);
   $db= new connectdb();
   
    $insert= $db-> get();
   // $client1 = new client();
   
 //   $a = $array->execute($array);
    if (isset($_POST['valider'])) {
        if (isset($_POST['typeclient'=='1']) ){
          //  client($_POST);
           // var_dump($_POST)
           $nomEntreprise =  ($_POST['nomClientMoral']);
           $raisonSocial = $_POST['raisonSocialClientMoral'];
           $adresseClientMoral = $_POST['adresseClientMoral'];
           $emailClientMoral = $_POST['emailClientMoral'];
           $telephoneClientMoral = $_POST['telephoneClientMoral'];
         //  $query ->insertclientmoral  prepare($client1->addclientmoral());
         $sql= "INSERT INTO `clientmoral`(`id`, `nomEntreprise`, `raisonSocial`, `adresse`, `email`, `telephone`) VALUES (NULL,'$nomEntreprise','$raisonSocial','$adresseClientMoral','$emailClientMoral,'$telephoneClientMoral')";
           $array = array(
               'nomEntreprise' => $nomEntreprise,
               'raisonSocial' => $raisonSocial,
               'adresse' => $adresseClientMoral,
               'email' => $emailClientMoral,
               'telephone' => $telephoneClientMoral
           );
           $a=$insert->query( $sql)->exec();
        
          }*/


       
     
 
      
            
            // insertclientmoral();//
