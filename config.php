<?php
session_start();


date_default_timezone_set('America/Sao_Paulo');

$autoload = function($class){
    if($class == "Email"){
        include('classes/PHPMailer/src/Exception.php');
        include('classes/PHPMailer/src/PHPMailer.php');
        include('classes/PHPMailer/src/SMTP.php');
    }
    include('classes/' . $class . ".php");

};

spl_autoload_register($autoload);


//Indexes
define('INITIAL_PATH', 'https://luksdev.cloud/broto/');



?>