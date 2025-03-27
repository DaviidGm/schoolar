<?php

  //config conecttion
  $host         = "localhost";
  $port         = "5432";
  $dbname       = "schoolar";
  $user         = "postgres";
  $password     = "unicesmag";

  //create conecttion
  $conn = pg_connect("
    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$password
  
  ");

  if(!$conn){
    die("coneccion error" . pg_last_error());
  }else{
   echo "success coneccion";
  }

?>