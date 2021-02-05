<?php
Class Author{

    private $name;
    private $firstName;

    public function __construct($name = "Doe", $firstName = "John"){
        $this->name = $name;
        $this->firstName = $firstName;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    function __toString(){
        return $this->firstName." ".$this->name;
    }
}
?>