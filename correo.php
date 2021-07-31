<?php

    $destino= 'abiyuli219@gmail.com';
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $affair= $_POST['affair'];
    $message= $_POST['message'];


    $header="Envio desde Mdrilling";
    $mensajecompleto= "\n Nombre:" . $fullname . "\n". "Télefono:" . $phone . "\n". 
    "Mensaje:" . $message; 
    
    mail($destino, $affair, $mensajecompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href= 'Contacto.html'\",1000)</script>";
   
   ?>

