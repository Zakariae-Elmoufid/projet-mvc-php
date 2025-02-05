<?php

namespace App\models; 
use App\core\Database;

use PDO;
use Exception;
use PDOException;


class Article {

    private $conn;
    public function __construct(){
        $this->conn = Database::getConnection();
    }
    
    public function fechAllArticle(){
        $query ="SELECT * FROM products"; 
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

}