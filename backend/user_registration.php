<?php 
    include "./connection.php";
    $dbname = "inventory";
    $table_name = "user_registration";

    if (!mysqli_select_db($conn, $dbname)) {
        die("Failed to connect to database . {$conn->error}");
    }

    $first_name = "first-name";
    $last_name = "last-name";
    $email = "email";
    $birthday = "birthday";
    $password = "password";
    
    if(isset($_POST[""]) == TRUE) {
        
    }
    
    
    $conn->close();
?>