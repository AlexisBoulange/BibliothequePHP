<?php
Class Author{

    private $name;
    private $firstName;
    private $edit;

    public function __construct($name = "Doe", $firstName = "John", Editor $edit){
        $this->name = $name;
        $this->firstName = $firstName;
        $this->$edition = $edit;
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

    /**
     * Get the value of edit
     */ 
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Set the value of edit
     *
     * @return  self
     */ 
    public function setEdition($edit)
    {
        $this->edit = $edit;

        return $this;
    }

    function __toString(){
        return $this->firstName." ".$this->name. " édition : ".$this->edit;
    }
}
?>