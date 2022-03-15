<?php
require_once ('../database.php');


Class Model {
protected $pdo;

public function __construct(
)
{
    $this->pdo=getPdo();
    
}

}



?>