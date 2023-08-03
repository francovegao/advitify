<?php
/*
MariaDB [advitify]> desc client;
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| ClientId  | int(11)      | NO   | PRI | NULL    | auto_increment |
| FirstName | char(50)     | NO   |     | NULL    |                |
| LastName  | char(50)     | NO   |     | NULL    |                |
| Email     | varchar(100) | NO   |     | NULL    |                |
| Phone     | char(15)     | NO   |     | NULL    |                |
| user_id   | int(11)      | NO   | MUL | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+
6 rows in set (0.014 sec)
*/


class ClientCLassDAO  {

    // Declare Static DB member to store the database 
    private static $db;  


    static function initialize(string $className)    {
        //Remember to send in the class name for this DAO
        self::$db = new PDOService($className);
    }

    // One of the functionality for the class abstracted by this DAO: CREATE
    // Remember that Create means INSERT
    static function createClient(Client $newClient) : int {
        // QUERY BIND EXECUTE 
        // You may want to return the last inserted id
        $insertClient = "INSERT INTO `clients` (FirstName, LastName, Email, Phone, user_id)";
        $insertClient .= "VALUES (:firstname, :lastname, :email, :phone, :user_id)";
        
        self::$db->query($insertClient);
        self::$db->bind(":firstname", $newClient->getFirstName());
        self::$db->bind(":lastname", $newClient->getLastName());
        self::$db->bind(":email", $newClient->getEmail());
        self::$db->bind(":phone", $newClient->getPhone());
        self::$db->bind(":user_id", $newClient->getUser_Id());
        self::$db->execute();
       return self::$db->lastInsertedId();
    }

    static function getClients() : array {
        
        //Prepare the Query
        $selectAll = "SELECT * FROM client";
        self::$db->query($selectAll);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->resultSet();
    }

    static function getClientInfo(string $ClientId): Client {
        //QUERY, BIND, EXECUTE, RETURN (the single result)
        $selectClient = "SELECT * FROM client WHERE ClientId = :userid";
        self::$db->query($selectClient);
        self::$db->bind(":userid", $ClientId);
        self::$db->execute();
        return self::$db->singleResult();
     }

}


?>