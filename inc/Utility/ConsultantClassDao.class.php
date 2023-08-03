<?php


/*
MariaDB [advitify]> desc consultant;
+--------------+--------------+------+-----+---------------------+-------------------------------+
| Field        | Type         | Null | Key | Default             | Extra                         |
+--------------+--------------+------+-----+---------------------+-------------------------------+
| ConsultantId | int(11)      | NO   | PRI | NULL                | auto_increment                |
| FirstName    | char(50)     | NO   |     | NULL                |                               |
| LastName     | char(50)     | NO   |     | NULL                |                               |
| Email        | varchar(100) | NO   |     | NULL                |                               |
| Phone        | char(15)     | NO   |     | NULL                |                               |
| Category     | char(100)    | NO   |     | NULL                |                               |
| Description  | text         | NO   |     | NULL                |                               |
| JoinedDate   | timestamp    | NO   |     | current_timestamp() | on update current_timestamp() |
| user_id      | int(11)      | NO   | MUL | NULL                |                               |
+--------------+--------------+------+-----+---------------------+-------------------------------+
9 rows in set (0.011 sec)
*/

class ConsultantCLassDAO  {

    // Declare Static DB member to store the database 
    private static $db;  


    static function initialize(string $className)    {
        //Remember to send in the class name for this DAO
        self::$db = new PDOService($className);
    }

    // One of the functionality for the class abstracted by this DAO: CREATE
    // Remember that Create means INSERT
    static function createConsultant(Consultant $newConsultant) : int {
        // QUERY BIND EXECUTE 
        // You may want to return the last inserted id
        $insertConsultant = "INSERT INTO `consultant` (FirstName, LastName, Email, Phone, Category, Description,user_id)";
        $insertConsultant .= "VALUES (:firstname, :lastname, :email, :phone, :category, :description, :user_id)";
        
        self::$db->query($insertConsultant);
        self::$db->bind(":firstname", $newConsultant->getFirstName());
        self::$db->bind(":lastname", $newConsultant->getLastName());
        self::$db->bind(":email", $newConsultant->getEmail());
        self::$db->bind(":phone", $newConsultant->getPhone());
        self::$db->bind(":category", $newConsultant->getCategory());
        self::$db->bind(":description", $newConsultant->getDescription());
        self::$db->bind(":user_id", $newConsultant->getuser_id());
        self::$db->execute();
       return self::$db->lastInsertedId();
    }
    
    // GET = READ = SELECT
    // This is for a single result 
    static function getConsultant(string $ConsultantId): Consultant  {
       //QUERY, BIND, EXECUTE, RETURN (the single result)
       $selectConsultant = "SELECT * FROM `consultant` WHERE ConsultantId = :consultantid";
       self::$db->query($selectConsultant);
       self::$db->bind(":consultantid", $ConsultantId);
       self::$db->execute();
       return self::$db->singleResult();
    }

    // GET = READ = SELECT ALLL
    // This is to get all consultants
    static function getConsultants() : array {
        
        //Prepare the Query
        $selectAll = "SELECT * FROM `consultant`";
        self::$db->query($selectAll);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->resultSet();
    }

    static function getLoggedInUserConsultants(int $clientId) : array {
        
        //Prepare the Query
        $selectAll = "SELECT * FROM `consultant` WHERE Clients_Id = :clientsid";
        self::$db->query($selectAll);
        self::$db->bind(":clientsid", $clientId);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->resultSet();
    }

    // UPDATE means update   
    static function updateConsultant (Consultant $ConsultantToUpdate) {

        // QUERY, BIND, EXECUTE
        // You may want to return the rowCount
         // You may want to return the last inserted id
         $updateConsultant = "UPDATE `consultant` SET PST=:pst, GST=:gst, TotalPrice=:totalprice ";
         $updateConsultant .= "WHERE ConsultantId=:consultantid";
         $ConsultantId = $ConsultantToUpdate->getConsultantId();
         
         self::$db->query($updateConsultant);
         self::$db->bind(":consultantid", $ConsultantToUpdate->getConsultantId());
         self::$db->bind(":pst", $ConsultantToUpdate->getPST());
         self::$db->bind(":gst", $ConsultantToUpdate->getGST());
         self::$db->bind(":totalprice", $ConsultantToUpdate->getTotalPrice());

         self::$db->execute();
         
         $rowCount = self::$db->rowCount();
         return array('rowCount' => $rowCount, 'lastInsertedId' => $ConsultantId);

    }
    
    // Sorry, I need to DELETE your record 
    static function deleteConsultant(string $ConsultantId) {

        $deleteConsultant = "DELETE FROM `consultant` WHERE ConsultantId = :consultantid";
        try{
        self::$db->query($deleteConsultant);
        self::$db->bind(":consultantid", $ConsultantId);
        self::$db->execute();

        if(self::$db->rowCount()!=1){
        throw new Exception("Problem in deleting the consultant");
         }

        }catch(Exception $ex) {
         return false;
        }
        return true;

    }
}

?>