<?php
include('../config/database.php');

$fname  = $_POST['f_name'];
$lname  = $_POST['l_name'];
$email  = $_POST['e_mail'];
$passwd = $_POST['passw'];


//$enc_pass = md5($passwd);
$enc_pass = sha1($passwd);

$sql_email_exist = "SELECT COUNT (email) as total FROM users WHERE EMAIL = '$email' LIMIT 1 "; 
$res = pg_query($conn, $sql_email_exist);
 if($res){
   $row = pg_fetch_assoc($res);
   if($row['total']>0){
     echo "email already exist";} 
 else{
    $sql = "INSERT INTO users(firstname, lastname, email, password)
    VALUES('$fname','$lname','$email','$enc_pass')
    ";

     $res = pg_query($conn, $sql);

    if($res){
     echo "user has been created succesfully";

    } else {
      echo "error";

    }


  } 

}





?>