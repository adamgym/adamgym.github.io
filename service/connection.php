
<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "calvary_store";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

    if ($db -> connect_error) {
        echo 'koneksi database rusak';
        die("error!!");
    }

?>