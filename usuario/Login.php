<?php
  if($_POST){
    
  }else{
    $nombre = "Login";
    $registros = [
        ["tipo" =>     "text", "nombre" =>     "Correo", "mensaje" => "Correo@Email.com"],
        ["tipo" => "password", "nombre" =>  "Confirmar", "mensaje" =>         "********"]
    ];
    include "modalForm.php";
  }
?>