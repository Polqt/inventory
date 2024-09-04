<?php
    require "../backend/connection.php";
    $dbname = "inventory";

    //Select the database
    if(!mysqli_select_db($conn, $dbname)) {
        die("Failed to select database . {$conn->error}");
    }

    $table_name = "user_registration";
    $table_check = $conn->query("SHOW TABLES LIKE '$table_name'");
    

    if ($table_check->num_rows == 0) {
        $sql = "CREATE TABLE $table_name (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(45) NOT NULL,
        last_name VARCHAR(45) NOT NULL,
        email VARCHAR(45) NOT NULL,
        birthday DATE,
        password VARCHAR(45) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table '$table_name' created succesfully";
        } else {
            echo "Error creating table . {$conn->error}";
        }
    } else {
        echo "Table '$table_name' already exists.";
    }
    
    $conn->close();
?>