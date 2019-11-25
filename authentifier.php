<?php 
require_once("connexion.php");
$login=$_POST['username'];
$password=$_POST['pwd'];

$ps= $connexion ->prepare(" SELECT * FROM user WHERE login_user=? AND pwd_user=? ");
$params= array($login,$password);
$ps->execute($params);
if ( $user = $ps->fetch() ) {
    session_start();
    $_SESSION['PROFILE']=$user;
    header("location:liste_husers.php");
}else{
    header("location:liste_husers.php");
}

    

?>