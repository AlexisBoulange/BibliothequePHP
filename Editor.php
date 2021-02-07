<?php
Class Editor{

    private $edition;

    public function __construct($edition = "Glénat"){
        $this->edition = $edition;
    }

    /**
     * Get the value of edition
     */ 
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set the value of edition
     *
     * @return  self
     */ 
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }
    
    function __toString(){
        return  $this->edition ;
    }

}
?>