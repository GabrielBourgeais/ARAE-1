<?php
session_start();

//Receives inputs from the logIn page
$userId = $_POST['id'];
$userPassword = $_POST['password'];
$userDoubleAuth = $_POST['doubleAuth'];

//Connects to the Database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=arae;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    echo "<script type='text/javascript'>alert('ERREUR');</script>";
}

//Sends SQL query
$query = $bdd->query("SELECT * FROM user WHERE email = '$userId';");

//Gets and sorts out the resulting array
$result = $query -> fetch();
$answer = $result['password'];

if (hash('SHA256',$userPassword) == $answer){

    //Saves current session data
    $_SESSION['user_id'] = $result['user_id'];
    $_SESSION['firstname'] = $result['firstname'];
    $_SESSION['lastname'] = $result['lastname'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['company_id'] = $result['company_id'];
    $_SESSION['manager_id'] = $result['manager_id'];
    
    //Forwards to profile page
    require("connectedProfile.php");
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

    //Check if username is empty
    if(empty(trim($_POST["username"]))){
        $userInput_err = 'Please enter a username';
        require("connexion.php");
    }

    //Check if password is empty
    elseif(empty(trim($_POST['password']))){
        $passInput_err = 'Please enter a pasword';
        require("connexion.php");
    }
}

?>