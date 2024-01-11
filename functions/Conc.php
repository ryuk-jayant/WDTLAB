<?php

$sname= "localhost:8111";

$unmae= "root";

$password = "";

$db_name = "fool_dukan";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
