<?php    
 function connectDatabase(): mysqli {
    $servername = 'localhost';
    $username = 'root';        
    $password = "";            
    $dbname = 'dct-ccs-finals'; 

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>