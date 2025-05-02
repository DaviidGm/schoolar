<?php

  //config conecttion
  $host         = "aws-0-us-east-1.pooler.supabase.com";
  $port         = "6543";
  $dbname       = "postgres";
  $user         = "postgres.bnpjlhkfpyyefwfyqqka";
  $password     = "unicesmag@@";
 

  /*
  $host         = "localhost";
  $port         = "5432";
  $dbname       = "schoolar";
  $user         = "postgres";
  $password     = "unicesmag";
  */

  //create conecttion
  $conn = pg_connect("
    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$password
  
  ");

  if(!$conn){
    //die("coneccion error" . pg_last_error());
  }else{
   //echo "success coneccion";
  }

?>