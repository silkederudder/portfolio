<?php
require_once( __DIR__ . '/DAO.php');

class ProjectVisualDAO extends DAO {
  public function selectById($id) {
    $sql = "SELECT * FROM `project_visuals` WHERE `project_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
