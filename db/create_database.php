<?php 
    require "../backend/connection.php";

    $db_name = ""; //Modify this if you want to add another database.
    $db_check = $conn->query("SHOW DATABASES LIKE '$db_name'"); //Checks if the database is already exists.

    if ($db_check->num_rows == 0) {
        $sql = "CREATE DATABASE $db_name"; //Creates the database.
        if ($conn->query($sql) === TRUE) {
            echo "Database '$db_name' created successfully";
        } else {
            echo "Error creating database . {$conn->error}";
        }
    } else {
        echo "Database '$db_name' already exists."; //Output a message if the database is already exists.
    }
    
    $conn->close();
?>