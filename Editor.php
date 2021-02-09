<?php
Class Editor{

    private $name;

    public function __construct($name = "Doe"){
        $this->name = $name;

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

    // public function edition($array, $edit){
    //     for($i=0 ; $i<count($array) ; $i++){
    //         if ($array[$i]->getEdit() == $edit){
    //             echo $array[$i];
    //         }
    //     }
    // }
    public function edition($array, $edit){
        foreach ($array as $key=>$value){
            if ($value->getEdit() == $edit){
                echo $value."<br/>";
            }
        }
    }

    function __toString(){
        return $this->name;
    }

}
?>