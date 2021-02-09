<?php
class Livre{

    private $title;
    private $pages;
    private $year;
    private $price;
    private $author;
    private $edit;

    public function __construct ($title=" ", $pages=" ", $year=" ", $price=" ", Author $author, Editor $edit){
        $this->title = $title;
        $this->pages = $pages;
        $this->year = $year;
        $this->price = $price;
        $this->author = $author;
        $this->edit = $edit;
    }



    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of pages
     */ 
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */ 
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

        /**
         * Get the value of author
         */ 
        public function getAuthor()
        {
                return $this->author;
        }

        /**
         * Set the value of author
         *
         * @return  self
         */ 
        public function setAuthor($author)
        {
                $this->author = $author;

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
        public function setEdit($edit)
        {
                $this->edit = $edit;

                return $this;
        }

    
        function __toString(){

            return $this->title." (".$this->year. ") : ".$this->pages ." pages / ".$this->price. "livre de : ".$this->author. " (édition : ".$this->edit. ")";
        }
        // function getInfos(){
        //     echo $this->author. " " .$this->title. " ".$this->getAuthor()->getEdit()->getName();

        // }

}
?>