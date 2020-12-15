<?php
session_start();

//Check if double Auth is valid
if ($_POST['userDACode'] == $_SESSION['doubleAuthCode'])
{
    header("Location: connectedProfile.php");
    exit();
}
else
{
    header("Location: connexion.php");
    exit();
}

?>