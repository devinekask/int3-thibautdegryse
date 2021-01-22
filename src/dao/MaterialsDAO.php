<?php

require_once(__DIR__ . '/DAO.php');

class MaterialsDAO extends DAO {

    public function selectAllMakers() {
        $sql = "SELECT * FROM `materials` WHERE `maker` = 1 ORDER BY `id`  ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

      public function selectAll() {
        $sql = "SELECT * FROM `materials` ORDER BY `id`  ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
    
}
{
    
}


?>