<?php



require_once("inc/config.inc.php");
require_once("inc/Entity/Page.class.php");

//entities
require_once("inc/Entity/User.class.php");

//utilities
require_once("inc/Utility/LoginManager.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");


UserDAO::initialize("User");

$login="";

if(!empty($_POST['username'])){
    $authUser = UserDAO::getUser($_POST['username']);

    if($authUser && $authUser->verifyPassword($_POST['password'])){
        session_start();
        $_SESSION['loggedUserName'] = $authUser->getUserName();
        $_SESSION['loggedUserId'] = $authUser->getUserId();
        $login="success";
    }else{
        $login="failed";
    }
}

if(LoginManager::verifyLogin()){
   
    $user = UserDAO::getUser($_SESSION['loggedUserName']);
    header("Location: userProfile.php");
   
    // after the call to header, make sure to exit
    exit;
}else if($login=="failed"){
    Page::displayHeader("basicStyles.css");
    Page::diplayLoginErrorMessage();
    Page::displayLoginForm();
}
else {
    // If login button is not clicked, display the homepage
    Page::displayHeader("basicStyles.css");
    Page::displayLoginForm();
}

 Page::displayFooter();


?>