<?php

require_once(__DIR__ . '/DAO.php');

class MaterialsDAO extends DAO {

    public function selectAllMaterials() {
        $sql = "SELECT * FROM `materials` ORDER BY `id`  ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
    
}
{
    
}


?>