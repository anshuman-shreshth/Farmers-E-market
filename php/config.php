<?php   
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'anshuman');
    define('DB_PASSWORD', 'abc123');
    define('DB_NAME', 'organo');
    
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

?>