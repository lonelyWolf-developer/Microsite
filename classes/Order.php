<?php
    class Order{
        public static function createOrder($connection, $name, $surname, $phone, $email, $candy, $roulade, $cake){
            $sql = "INSERT INTO request (name, surname, phone, email, candy, roulade, cake) VALUES (:name, :surname, :phone, :email, :candy, :roulade, :cake)";
    
            $stmt = $connection->prepare($sql);
    
            $stmt->bindValue(":name", $name, PDO::PARAM_STR);
            $stmt->bindValue(":surname", $surname, PDO::PARAM_STR);
            $stmt->bindValue(":phone", $phone, PDO::PARAM_INT);
            $stmt->bindValue(":email", $email, PDO::PARAM_STR);
            $stmt->bindValue(":candy", $candy, PDO::PARAM_INT);
            $stmt->bindValue(":roulade", $roulade, PDO::PARAM_INT);
            $stmt->bindValue(":cake", $cake, PDO::PARAM_INT);
    
            try{
                if($stmt->execute()){
                    return $connection->lastInsertId();
                }else{
                    throw new Exception("Vytvoření objednávky se nezdařilo.");
                }
            }catch(Exception $e) {
                error_log($e->getMessage(), 3, "../errors/error.log");
                echo $e->getMessage();
            }       
        }
    }

?>