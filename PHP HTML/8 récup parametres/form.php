<?php
$co = 0;
$login=$_REQUEST['login'];
$password=$_REQUEST['password'];
$aut = array('sguyon'=>'azerty', 'scatanese'=>'22042002', 'jbertrand'=>'sio');
foreach($aut as $log=>$pass){
  if($log==$login){
    if($pass==$password){
      echo('<h1>Connexion établie, bienvenue '.$login.'!</h1>');
      $co = 1;
    }
  }
}
if($co==0){
  echo('<h1>Connexion impossible, veuillez vérifier votre identifiant ou votre mot de passe.</h1>');
}

?>