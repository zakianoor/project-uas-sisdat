<?php

    define("BASE_URL", "http://localhost/onlineshop/");
    define("WEBNAME", "La Pâtisserie");
    $connect = mysqli_connect("localhost", "root", "", "online_shop");

    if(!mysqli_select_db($connect, "online_shop")) 
    {
        echo "Database Unconnected...";
    }

?>