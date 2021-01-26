<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/OrdersDAO.php';

class OrdersController extends Controller {
   private $ordersDAO;

   function __construct() {
     $this->ordersDAO = new OrdersDAO();

  }



   public function form() {


    
    if(!empty($_POST['action'])){
        if( $_POST['action'] == 'insertOrder'){
            
            $data['naam'] = $_POST['naam'];
            $data['postcode'] = $_POST['postcode'];
            $data['straat'] = $_POST['straat'];
            $data['nr'] = $_POST['nr'];
            $data['bus'] = $_POST['bus'];
            $data['datum'] = $_POST['datum'];
            $data['telefoon'] = $_POST['telefoon'];
            $data['email'] = $_POST['email'];
  
             
            $insertedOrder = $this->ordersDAO->insertOrder($data);
              if(!$insertedOrder){
                $errors = $this->ordersDAO->validate($data);
                $this->set('errors',$errors);
              }else{
                $_SESSION['info'] = 'Bedankt voor je order';
                header('Location:index.php?page=index');
                exit();
              }
            }
           }
    $this->set('currentPage', 'order');
    $this->set('title', 'Bestel nu bij ons');

  }

}

?>