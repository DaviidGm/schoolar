<?php
session_start();
session_destroy(); //destruye

header('Refresh: 0; URL=http://localhost/schoolar/src/signin.html'); //redireciona

?>