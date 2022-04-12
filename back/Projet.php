<?php 

require 'Model.php';

class Projet extends Model {
    protected $Title;
    protected $Description;
    protected $Created_at;
    protected $Link_site;
    protected $Link_git;
    protected $Picture1;
    protected $Picture2;
    protected $Picture3;
    protected $Picture4;
    protected $Picture5;
    protected $table='projects';

    public function getTitle()
    {
        return $this->Title;
    }
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }
   
    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    public function getCreated_at()
    {
        return $this->Created_at;
    }
    public function setCreated_at($Created_at)
    {
        $this->Created_at = $Created_at;
        return $this;
    }

    public function getLink_site()
    {
        return $this->Link_site;
    }
    public function setLink_site($Link_site)
    {
        $this->Link_site = $Link_site;
        return $this;
    }

    public function getLink_git()
    {
        return $this->Link_git;
    }
    public function setLink_git($Link_git)
    {
        $this->Link_git = $Link_git;
        return $this;
    }

    
    /**
     * Get the value of Picture1
     */ 
    public function getPicture1()
    {
        return $this->Picture1;
    }

    /**
     * Set the value of Picture1
     *
     * @return  self
     */ 
    public function setPicture1($Picture1)
    {
        $this->Picture1 = $Picture1;

        return $this;
    }

    /**
     * Get the value of Picture2
     */ 
    public function getPicture2()
    {
        return $this->Picture2;
    }

    /**
     * Set the value of Picture2
     *
     * @return  self
     */ 
    public function setPicture2($Picture2)
    {
        $this->Picture2 = $Picture2;

        return $this;
    }

    /**
     * Get the value of Picture3
     */ 
    public function getPicture3()
    {
        return $this->Picture3;
    }

    /**
     * Set the value of Picture3
     *
     * @return  self
     */ 
    public function setPicture3($Picture3)
    {
        $this->Picture3 = $Picture3;

        return $this;
    }

    /**
     * Get the value of Picture4
     */ 
    public function getPicture4()
    {
        return $this->Picture4;
    }

    /**
     * Set the value of Picture4
     *
     * @return  self
     */ 
    public function setPicture4($Picture4)
    {
        $this->Picture4 = $Picture4;

        return $this;
    }

     /**
     * Get the value of Picture5
     */ 
    public function getPicture5()
    {
        return $this->Picture5;
    }

    /**
     * Set the value of Picture5
     *
     * @return  self
     */ 
    public function setPicture5($Picture5)
    {
        $this->Picture5 = $Picture5;

        return $this;
    }
}


?>