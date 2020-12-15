<?php
session_start();

//Check if double Auth is valid
if ($_POST['userDACode'] == $_SESSION['doubleAuthCode'])
{

    $_SESSION['lastTimeOfConnection'] = strval(time());
    header("Location: userProfilePage.php");
    exit();
}
else
{
    header("Location: connexion.php");
    exit();
}

?>