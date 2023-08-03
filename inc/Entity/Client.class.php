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

class Client{

    // attributes
    private $ClientId = 0;
    private $FirstName ="";
    private $LastName= "";
    private $Email= "";
    private $Phone= "";
    private $user_id= "";

    // getter
    function getClientId() : int{
        return $this->ClientId;
    }
    function getFirstName(): string{
        return $this->FirstName;
    }
    function getLastName(): string{
        return $this->LastName;
    }
    function getEmail(): string{
        return $this->Email;
    }
    function getPhone(): string{
        return $this->Phone;
    }
    function getUser_Id(): int{
        return $this->user_id;
    }

    //setters 
    function setClientId(int $ClientId) {
        $this->ClientId=$ClientId;
    }
    function setFirstName(string $FirstName){
        $this->FirstName=$FirstName;
    }
    function setLastName(string $LastName){
        $this->LastName=$LastName;
    }
    function setEmail(string $Email){
        $this->Email=$Email;
    }
    function setPhone(string $Phone){
        $this->Phone=$Phone;
    }
    function setUser_Id(int $user_id){
        $this->user_id=$user_id;
    }
}

?>