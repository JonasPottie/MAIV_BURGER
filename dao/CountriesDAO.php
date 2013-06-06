<?php

require_once '../classes' . DIRECTORY_SEPARATOR . 'DatabasePDO.php';
//require_once 'QuestionsDAO.php';


class CountriesDAO
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = DatabasePDO::getInstance();
        //$this->questionsDAO = new QuestionsDAO();
    }

    public function getCountries(){
        $sql = "SELECT * 
                FROM tblCountries LIMIT 0,5";
        $stmt = $this->pdo->prepare($sql);
        if($stmt->execute())
        {
            $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $countries;
    }

    public function getVervoer(){
        $sql = "SELECT * 
                FROM vervoersmiddelen";
        $stmt = $this->pdo->prepare($sql);
        if($stmt->execute())
        {
            $vervoersmiddelen = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $vervoersmiddelen;
    }

    public function getCountriesVal($id){
        $sql = "SELECT * FROM location WHERE city like '%$id%' LIMIT 0,4";
        $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $countries;
    }

    public function getAllTrips($id){
        $sql = "SELECT * FROM trips WHERE title like '%$id%' LIMIT 0,4";
        $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $countries;
    }

    public function getRestaurants($id){
        $sql = "SELECT eetgelegenheid.name FROM eetgelegenheid INNER JOIN location ON eetgelegenheid.country_id=location.id WHERE location.id = $id";
        $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $countries;
    }

     public function getBezigheden($id){
        $sql = "SELECT bezigheden.name FROM bezigheden INNER JOIN location ON bezigheden.country_id=location.id WHERE location.id = $id";
        $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $countries;
    }

    public function getPosition($id){
        
        $sql = "SELECT latitude,longitude FROM location WHERE id =(:id)";
        $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        return $countries;
    }

    public function insertRestaurant($name,$id){
        //$sql = "INSERT INTO eetgelegenheid(name,country_id) VALUES($name,$id)";
        $sql = "INSERT INTO eetgelegenheid(name,country_id) VALUES(:name,:id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name",$name);
        $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            return $this->getLastInsertedRestaurant($this->pdo->lastInsertId());
            //return $stmt->pdo->lastInsertId();
        }
        throw new Exception("insert is mislukt");
    }

    public function updateATrip($vervoer,$slaapplaats,$aantalPersonen,$vertrek,$eind,$eetgelegenheden,$title,$code){
        //$sql = "UPDATE trips SET vervoer='6' WHERE title=:title";
        $sql = "UPDATE trips SET vervoer=:vervoer,slaap=:slaapplaats,aantal=:aantalPersonen,vertrekDatum=:vertrek,eindDatum=:eind,eetgelegenheden=:eetgelegenheden WHERE title=:title AND code=:code";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":vervoer",$vervoer);
        $stmt->bindValue(":slaapplaats",$slaapplaats);
        $stmt->bindValue(":aantalPersonen",$aantalPersonen);
        //$stmt->bindValue(":eetgelegenheden",$eetgelegenheden);
        //$stmt->bindValue(":activiteiten",$activiteiten);
        $stmt->bindValue(":vertrek",$vertrek);
        $stmt->bindValue(":eind",$eind);
        $stmt->bindValue(":eetgelegenheden",$eetgelegenheden);
        $stmt->bindValue(":title",$title);
        $stmt->bindValue(":code",$code);

       if($stmt->execute())
        {
            return true;
        }
        return false;
    }

    public function insertATrip($title,$city,$vervoer,$slaapplaats,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$code){
        //,$slaapplaats,$aantalPersonen,$eetgelegenheden,$activiteiten,$vertrek,$eind,$email,$code
        //$sql = "INSERT INTO trips(title,city,vervoer,slaap,aantal,eetgelegenheden,activiteiten,vertrekDatum,eindDatum,email,code) VALUES(:title,:city,:vervoer,:slaap,:aantalPersonen,:eetgelegenheden,:activiteiten,:vertrekDatum,:eindDatum,:email,:code)";
        $sql = "SELECT title FROM trips WHERE title =(:title)";
        $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":title",$title);

        if($stmt->execute())
        {
                $countries = $stmt->fetch(PDO::FETCH_ASSOC);

                    if($countries<1){       
                        $sql = "INSERT INTO trips(title,city,vervoer,slaap,aantal,eetgelegenheden,activiteiten,vertrekDatum,eindDatum,email,code) VALUES(:title,:city,:vervoer,:slaapplaats,:aantalPersonen,:eetgelegenheden,:activiteiten,:vertrek,:eind,:email,:code)";
                
                        $stmt = $this->pdo->prepare($sql);
                        $stmt->bindValue(":title",$title);
                        $stmt->bindValue(":city",$city);
                        $stmt->bindValue(":vervoer",$vervoer);
                        $stmt->bindValue(":slaapplaats",$slaapplaats);
                        $stmt->bindValue(":aantalPersonen",$aantalPersonen);
                        $stmt->bindValue(":eetgelegenheden",$eetgelegenheden);
                        $stmt->bindValue(":activiteiten",$activiteiten);
                        $stmt->bindValue(":vertrek",$vertrek);
                        $stmt->bindValue(":eind",$eind);
                        $stmt->bindValue(":email",$email);
                        $stmt->bindValue(":code",$code);

                        if($stmt->execute())
                        {
                            return $this->pdo->lastInsertId();
                        }
                        throw new Exception("insert is mislukt");
                }else{
                }
            
        }

    }

    public function insertbezighoud($name,$id){
        //$sql = "INSERT INTO eetgelegenheid(name,country_id) VALUES($name,$id)";
        $sql = "INSERT INTO bezigheden(name,country_id) VALUES(:name,:id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name",$name);
        $stmt->bindValue(":id",$id);

        if($stmt->execute())
        {
            return $this->getLastInsertedbezighoud($this->pdo->lastInsertId());
            //return $stmt->pdo->lastInsertId();
        }
        throw new Exception("insert is mislukt");
    }

    public function getFilledInRestaurant($id){
        $sql = "SELECT * FROM 'eetgelegenheid' WHERE id = :id";
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


}