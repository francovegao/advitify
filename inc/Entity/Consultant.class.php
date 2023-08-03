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

class Consultant{

    // attributes
    private $ConsultantId = 0;
    private $FirstName ="";
    private $LastName= "";
    private $Email= "";
    private $Phone= "";
    private $Category= "";
    private $Description= "";
    private $JoinedDate= "";
    private $user_id= "";

    // getter
    function getConsultantId() : int{
        return $this->ConsultantId;
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
    function getCategory(): string{
        return $this->Category;
    }
    function getDescription(): string{
        return $this->Description;
    }
    function getJoinedDate(): string{
        return $this->JoinedDate;
    }
    function getuser_id(): int{
        return $this->user_id;
    }

    //Setter
    function setConsultantId(int $ConsultantId) {
        $this->ConsultantId=$ConsultantId;
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
    function setCategory(string $Category){
        $this->Category=$Category;
    }
    function setDescription(string $Description){
        $this->Description=$Description;
    }
    function JoinedDate(string $JoinedDate){
        $this->Category=$JoinedDate;
    }
    function setuser_id(int $user_id){
        $this->user_id=$user_id;
    }
}

?>