<?php
/**
 *
 */
include_once 'dbModel.php';

class testeModel
{
  private $db;

  function __construct()
  {
    $this->db = new dbModel();
  }

  public function save()
  {
    $this->db->openDatabase();
  }

}
