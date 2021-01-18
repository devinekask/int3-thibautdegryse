<?php

require_once(__DIR__ . '/DAO.php');

class OrdersDAO extends DAO {

    public function selectById($id){
        $sql = "SELECT * FROM `orders` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }

    public function insertOrder($data){

        $errors = $this->validate($data);
        if(empty($errors)){
       $sql = "INSERT INTO `orders` (`naam`,`postcode` ,`straat`, `nr`, `bus`, `datum`, `telefoon`, `email`, `betaaloptie`) VALUES (:naam, :postcode, :straat, :nr, :bus, :datum, :telefoon, :email, :betaaloptie )";
       $stmt = $this->pdo->prepare($sql);
       $stmt->bindValue(':naam', $data['naam']);
       $stmt->bindValue(':postcode', $data['postcode']);
       $stmt->bindValue(':straat', $data['straat']);
       $stmt->bindValue(':nr', $data['nr']);
       $stmt->bindValue(':bus', $data['bus']);
       $stmt->bindValue(':datum', $data['datum']);
       $stmt->bindValue(':telefoon', $data['telefoon']);
       $stmt->bindValue(':email', $data['email']);

   
       if($stmt->execute()){
         return $this->selectById($this->pdo->lastInsertId());
       }
   
        }
        
        return false;
   
   
   }
   
   public function validate($data){
     $errors = [];
     if(empty($data['naam'])){
       $errors['naam'] = 'Gelieve een naam in te geven.';
     }

   if(empty($data['email'])){
     $errors['email'] = 'Gelieve een email in te geven.';
   
   }
   if(empty($data['telefoon'])){
     $errors['telefoon'] = 'Gelieve een telefoon nummer in te geven.';
   
   }
   
   
   return $errors;
     }  

    
}
{
    
}


?>