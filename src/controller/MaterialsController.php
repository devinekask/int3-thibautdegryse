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
    $this->set('title', 'Maker Faire');

  }

  public function about() {

    $this->set('currentPage', 'over');
    $this->set('title', 'Over ons');

  }

  public function kits() {

    $makers = $this->materialsDAO->selectAllMakers();
    $materials = $this->materialsDAO->selectAll();

    $this->set('makers', $makers);
    $this->set('materials', $materials);
    $this->set('currentPage', 'shop');
    $this->set('title', 'Bestel nu bij ons');

  }

  public function tutorial() {

    $this->set('currentPage', 'tutorial');
    $this->set('title', 'De drijvende strandstoel');

  }
}

?>