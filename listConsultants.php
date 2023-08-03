<?php
//Config
require_once('inc/config.inc.php');

//Entities
require_once("inc/Entity/Page.class.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Consultant.class.php");

//Utility Classes
require_once("inc/Utility/LoginManager.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");
require_once("inc/Utility/ConsultantClassDao.class.php");

//Verify login
if(LoginManager::verifyLogin()){

    //Initialize the DAO
ConsultantCLassDAO::initialize('Consultant');
UserDAO::initialize('User');

//get the user
$user = UserDAO::getUser($_SESSION['loggedUserName']);

//Process any POST data
//Get the consultants
$consultants=ConsultantCLassDAO::getConsultants();

//Display the page
Page::displayHeader("basicStyles.css");

Page::displayConsultantsTable($consultants);

Page::displayFooter();
}else{
    header("Location: TeamNumber11.php");
}


?>