<?php

class Bdd
{

  protected $pdo;

  public function __construct()
  {
    $this->pdo = new PDO('mysql:host=localhost;dbname=backoffice;charset=utf8', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
      session_start();
  }}