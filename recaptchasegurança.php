<?php
$captcha = $_POST['g-recaptcha-response'];
if($captcha != ''){
   $secreto = '6Le4eCkaAAAAAOr-AYCoD8mSvHpQyI8Cztmjmoke';
   $ip      = $_SERVER['REMOTE_ADDR'];
   $var     = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
   $resposta = json_decode($var, true);
   if($resposta['success']){
  
       // seu código de envio aqui
   }else{
       echo 'A verificação não foi autenticada, gentileza tentar novamente';
   }
}else{
   echo 'Voc~e não selecionou o recaptcha';
}

?>