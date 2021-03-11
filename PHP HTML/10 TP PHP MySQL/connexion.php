
<?php
//Etablissement de la connexion :
$conn = mysqli_connect('localhost','root','','salaries');
//Verification de la connexion :
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error) ;
}
?>