<?php
//require_once '../model/connectdb.php';

class client
{
    private $id ;
    private $nomEntreprise;
    private $raisonSocial;
    private $adresseClientMoral;
    private $emailClientMoral;
    private $telephoneClientMoral;
    

    public function getId()
    {
        return $this->id;
    }
    public function set_Id($id)
    {
        $this->id = $id;
    }


    public function getNomentreprise()
    {
        return $this->nomEntreprise;
    }
    public function setnomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;
    }

    public function getraisonsocial()
    {
        return $this->raisonSocial;
    }
    public function setraisonsocial($raisonSocial)
    {
        return $this->raisonSocial=$raisonSocial;
    }

    public function getAddresseclientmoral()
    {
        return $this->adresseClientMoral;
    }
    public function setaddresseclientmoral($adresseClientMoral)
    {
        return $this->adresseClientMoral= $adresseClientMoral;
    }

    public function getemailclient ()
    {
        return $this->emailClientMoral;
    }
    public function setemailclient($emailClientMoral)
    {
        return $this->emailClientMoral =$emailClientMoral;
    }
    
    public function gettelephoneclient()
    {
        return $this->telephoneClientMoral;
    }
    public function settelephoneclient($telephoneClientMoral)
    {
        return $this->telephoneClientMoral=$telephoneClientMoral;
    }
   }
   ?>