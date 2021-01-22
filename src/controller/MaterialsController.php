<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/MaterialsDAO.php';


class MaterialsController extends Controller {
   private $materialsDAO;

   function __construct() {
     $this->materialsDAO = new MaterialsDAO();

  }
   public function index() {

    $this->set('currentPage', 'huis');
    $this->set('title', 'Huis');

  }

  public function about() {

    $this->set('currentPage', 'over');
    $this->set('title', 'Over');

  }

  public function kits() {

    $makers = $this->materialsDAO->selectAllMakers();
    $materials = $this->materialsDAO->selectAll();

    $this->set('makers', $makers);
    $this->set('materials', $materials);
    $this->set('currentPage', 'bestel iets');
    $this->set('title', 'Bestel iets');

  }
}

?>