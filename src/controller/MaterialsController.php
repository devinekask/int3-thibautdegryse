<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/MaterialsDAO.php';

class MaterialsController extends Controller {
   private $materialsDAO;

   function __construct() {
     $this->materialsDAO = new MaterialsDAO();

  }
   public function index() {

    $this->set('currentPage', 'home');
    $this->set('title', 'Blub');

  }

  public function diy() {

    $this->set('currentPage', 'diy');
    $this->set('title', 'Diy');

  }
}

?>