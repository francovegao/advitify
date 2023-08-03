<?php
require_once("inc/config.inc.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Entity/Client.class.php");
require_once("inc/Entity/User.class.php");

require_once("inc/Utility/LoginManager.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");
require_once("inc/Utility/ClientClassDAO.class.php");

session_start();

if(LoginManager::verifyLogin()){
    //Initialize the DAO
    UserDAO::initialize('User');
    ClientCLassDAO::initialize("Client");

   
    $user = UserDAO::getUser($_SESSION['loggedUserName']);
    $clientInfo=ClientCLassDAO::getClientInfo($user->getUserId());

    Page::displayHeader("basicStyles.css");    //sent the basicStyles.css when merged

    
    Page::showUserDetails($clientInfo);
    
    Page::displayFooter();

}else{
    header("Location: MainController.php");
}

?>