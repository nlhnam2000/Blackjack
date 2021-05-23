<?php 
    include("index.html"); 
    $conn = new mysqli('localhost', 'root', '', 'Blackjack'); 
    if ($conn->connect_error) {
        exit; 
    }
    $sql = "SELECT * FROM Player"; 
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Username: " . $row['Username'] . "<br>"; 
        }
    }
    else {
        echo "No result"; 
    }

?>