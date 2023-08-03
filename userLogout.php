<?php
require_once("inc/config.inc.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Entity/Client.class.php");
require_once("inc/Entity/User.class.php");

require_once("inc/Utility/LoginManager.php");
require_once("inc/Utility/PDOService.class.php");   
require_once("inc/Utility/UserDAO.class.php");

session_start();
unset($_SESSION);

session_destroy();
Page::displayHeader("basicStyles.css");
echo "<div class=\"p-5 text-center\">";
echo "<h1>Thank you for your visit</h1>";
echo "</div>";
Page::displayFooter();

?>