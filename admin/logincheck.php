<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET POST');
header('Access-Control-Allow-Headers: X-Requested-With');
header("Content-Type:application/json");

require 'vendor/autoload.php';

use Allankayz\Intwoafrica\Connection as Connection;
use Allankayz\Intwoafrica\Login as Login;

try {
    // connect to the database
    $pdo = Connection::get()->connect();
    //

    $Login = new Login($pdo);
   
    session_start();

if (isset($_POST['uname']) && isset($_POST['password'])) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

//Login form details array
$formData = array("username" => $uname, "password" => $pass);

// get requested user data from database
$user = array($Login->findByUsername($uname));
$userData = array("username" => $user[0]['username'], "password" => $user[0]['password']);

$a = json_encode($formData);
$b = json_encode($userData);

    if($a == $b) {
        header("Location: admin.php");
        exit();
    }
    else {
        header("Location: index.php?error=Login Failed");
        exit();
    }
}
else {
    header("Location:index.php?error=Please Fill In All Details");
    exit();
}


} catch (\PDOException $e) {
    echo $e->getMessage();
}