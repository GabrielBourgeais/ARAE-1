<?php
session_start();

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Receives inputs from the logIn page
$userId = $_POST['id'];
$userPassword = $_POST['password'];

//Connects to the Database
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=arae;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    echo "<script type='text/javascript'>alert('ERREUR');</script>";
}

//Sends SQL query
$query = $bdd->query(
    "SELECT user_id, firstname, lastname, email, password, doubleAuth, company_name, manager_firstname, 
    manager_lastname FROM user
    INNER JOIN company ON user.company_id = company.company_id
    INNER JOIN manager ON user.manager_id = manager.manager_id
    WHERE email = '$userId';");

//Gets and sorts out the resulting array
$result = $query -> fetch(); 


if (hash('SHA256',$userPassword) == $result['password']){

    //Saves current session data
    $_SESSION['user_id'] = $result['user_id'];
    $_SESSION['firstname'] = $result['firstname'];
    $_SESSION['lastname'] = $result['lastname'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['company_name'] = $result['company_name'];
    $_SESSION['manager_firstname'] = $result['manager_firstname'];
    $_SESSION['manager_lastname'] = $result['manager_lastname'];

    $double = $result['doubleAuth'];

    //Check if double Auth is activated
    if ($result['doubleAuth'])
    {
        //Generate doubleAuth code
        $doubleAuthCode = generateRandomString();

        //Saves doubleAuth code to session
        $_SESSION['doubleAuthCode'] = $doubleAuthCode;

        //Sends email with doubleAuth code
        $subject = 'Code de vérification';
        $message = 'Le code est : $doubleAuthCode';

        $alors = mail($result['email'], $subject, $message);
        $_SESSION['alors'] = $alors;

        //Redirects to doubleAuth page
        header("Location: doubleAuth.php");
        exit();
    }
    else
    {
        //Forwards to profile page
        header("Location: connectedProfile.php");
        exit();
    }   
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

    //Check if username is empty
    if(empty(trim($_POST["username"]))){
        $userInput_err = 'Please enter a username';
        header("Location: connexion.php");
        exit();
    }

    //Check if password is empty
    elseif(empty(trim($_POST['password']))){
        $passInput_err = 'Please enter a pasword';
        header("Location: connexion.php");
        exit();
    }
}


?>