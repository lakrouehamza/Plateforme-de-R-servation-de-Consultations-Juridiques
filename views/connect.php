<?php 
function connect(){
try{
$mydata =  new PDO("mysql:host=localhost;dbname=cabinet","root","12345");
    return $mydata ;
$mydata->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    return null; 
   die( $e->getMessage());
}
}
?>
<?php
function inset_use($nom,$prenom,$email,$role,$password,$telephone){
    $mydata =connect();
    try {
        $mystmt = $mydata->prepare("INSERT INTO utilisateur (nom, prenom, email, role, password, telephone) 
            VALUES (:nom, :prenom, :email, :role, :password, :telephone)");
        $passwordHach = md5($password);
        $mystmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $mystmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $mystmt->bindParam(':email', $email, PDO::PARAM_STR);
        $mystmt->bindParam(':role', $role , PDO::PARAM_INT);
        $mystmt->bindParam(':password', $passwordHach, PDO::PARAM_STR);
        $mystmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
        $mystmt->execute();
        header('location: login.php');
        exit;
      } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
      }
}


function select_user($email, $password) {
    if (empty($email) || empty($password)) {
        die('Email and password are required.');
    }

    try {
        $data = connect();
        $mystmt = $data->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $mystmt->bindParam(':email', $email);
        $mystmt->execute();
        $mystmt->setFetchMode(PDO::FETCH_ASSOC);

        if ($result = $mystmt->fetch()) {
            $password =md5($password);
            if ($password == $result['password']) {
                connectSession($result['email'],$result['role']);
                if ($result['role'] == 2) {
                    header('Location: ./client/home.php');
                    exit;
                } else if ($result['role'] == 1) {
                    header('location: ./avocate/home.php');
                    exit;
                }
            }else
            echo  "password entre " . $password;
            echo "password de data " . $result['password'];

            die('Invalid password.');

        }

        die('Invalid email or password.');

    } catch (PDOException $e) {
        die('Database error: ' . $e->getMessage());
    }
}

function connectSession($email,$role){
    session_start(); 
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $role;
}

function   issetSession(){
    if(!isset($_SESSION['role'])){
        header("location: login.php");
        exit;
    }elseif($_SESSION['role']==1){
        header("location: avocate/home.php");
        exit;
    }elseif($_SESSION['role']==2){
        header("location: client/home.php");
        exit;
    }
}
function lougout(){
    session_unset();
    session_destroy();
}
?>


