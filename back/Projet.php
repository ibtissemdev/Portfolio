<?php 

require 'Model.php';

class Projet extends Model {

    protected $Description;
    protected $CreatedAt;
    protected $Site;
    protected $Git;
    protected $table='projetcs';
   
    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }
    public function setCreatedAt($CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }

    public function getSite()
    {
        return $this->Site;
    }
    public function setSite($Site)
    {
        $this->Site = $Site;
        return $this;
    }

    public function getGit()
    {
        return $this->Git;
    }
    public function setGit($Git)
    {
        $this->Git = $Git;
        return $this;
    }

    
}


?>