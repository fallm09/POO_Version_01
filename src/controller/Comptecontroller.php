<?php
require_once '../model/connectdb.php';
require_once '../entity/compteentity.php';
//use\entity\compteentity;
//include 'namespace.php;
//spl_autoload_register(monautoload);
/*function monautoload (){
     $niangcode='../model';
    $mohamed = '/connectdb.php',
    $g7= $niangcode.$mohamed ;
    include.once $g7;
}*/


function add($compte)
{
    $db = new connectdb();
    $a = $db->getConnection();


    $compte1 = new compte();
    $compte1->setDelaiblocage($compte['delai']);
    $compte1->setFraisOuverture($compte['frais']);
    $compte1->setNumeroAgence($compte['agence1']);
    $compte1->setNumeroCompte($compte['numeroCompte']);

    $sql = "INSERT INTO comptebloque(id, fraisOuverture, DelaiBlocage, numeroAgence, NumeroCompte) 
    VALUES (NULL,:fraisOuverture,:DelaiBlocage,:numeroAgence,:NumeroCompte)";
    $z = $a->prepare($sql);
    $array = [
        'fraisOuverture' => $compte1->getFraisOuverture(),
        'DelaiBlocage' => $compte1->getDelaiblocage(),
        'numeroAgence' => $compte1->getNumeroAgence(),
        'NumeroCompte' => $compte1->getNumeroCompte()
    ];
    $k = $z->execute($array);
    return $k;
}
if (isset($_POST['valider'])) {
    # code...
    //var_dump($_POST);
    //die;
    if ($_POST['typecompte'] == '3') {

        //var_dump($_POST);
        // die;
        $m = add($_POST);
        echo $m;
    } else echo 2;
}
?>