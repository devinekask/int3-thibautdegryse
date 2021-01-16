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
    $this->set('title', 'Home');

  }

  public function about() {

    $this->set('currentPage', 'about');
    $this->set('title', 'About');

  }

  public function kits() {

    $materials = $this->materialsDAO->selectAllMaterials();

    $this->set('materials', $materials);
    $this->set('currentPage', 'kits');
    $this->set('title', 'Kits');

  }
}

?>