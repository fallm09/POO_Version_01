<?php
//namespace compteentity;
class compte {
    private $fraisOuverture;
    private $delaiblocage;
    private $numeroAgence;
    private $cleRib;
    private $NumeroCompte;

    /**
     * Get the value of delaiblocage
     */ 
    public function getDelaiblocage()
    {
        return $this->delaiblocage;
    }

    /**
     * Set the value of delaiblocage
     *
     * @return  self
     */ 
    public function setDelaiblocage($delaiblocage)
    {
        $this->delaiblocage = $delaiblocage;

        return $this;
    }

    /**
     * Get the value of fraisOuverture
     */ 
    public function getFraisOuverture()
    {
        return $this->fraisOuverture;
    }

    /**
     * Set the value of fraisOuverture
     *
     * @return  self
     */ 
    public function setFraisOuverture($fraisOuverture)
    {
        $this->fraisOuverture = $fraisOuverture;

        return $this;
    }

    /**
     * Get the value of numeroAgence
     */ 
    public function getNumeroAgence()
    {
        return $this->numeroAgence;
    }

    /**
     * Set the value of numeroAgence
     *
     * @return  self
     */ 
    public function setNumeroAgence($numeroAgence)
    {
        $this->numeroAgence = $numeroAgence;

        return $this;
    }

    /**
     * Get the value of cleRib
     */ 
    public function getCleRib()
    {
        return $this->cleRib;
    }

    /**
     * Set the value of cleRib
     *
     * @return  self
     */ 
    public function setCleRib($cleRib)
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    /**
     * Get the value of NumeroCompte
     */ 
    public function getNumeroCompte()
    {
        return $this->NumeroCompte;
    }

    /**
     * Set the value of NumeroCompte
     *
     * @return  self
     */ 
    public function setNumeroCompte($NumeroCompte)
    {
        $this->NumeroCompte = $NumeroCompte;

        return $this;
    }
}
