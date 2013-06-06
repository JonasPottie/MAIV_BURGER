<?php

require_once '../classes' . DIRECTORY_SEPARATOR . 'DatabasePDO.php';

class FilledInAnswersDAO
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = DatabasePDO::getInstance();
    }

    public function getFilledInAnswer($id){
        $sql = "SELECT * 
                FROM `filledinanswers`
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        if($stmt->execute()){
            $todo = $stmt->fetch(PDO::FETCH_ASSOC);
            if(!empty($todo)){
                return $todo;
            }
        }
        return array();
    }

    public function insertFilledInAnswer($question_id,$answer_id){
        $sql = "INSERT INTO `filledinanswers`(question_id,answer_id)
                VALUES(:question_id,:answer_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":question_id",$question_id);
        $stmt->bindValue(":answer_id",$answer_id);
        if($stmt->execute()){
            return $this->getFilledInAnswer($this->pdo->lastInsertId());
        }
        return false;
    }

}