<?php
session_start();
include 'database.php';

if(isset($_SESSION['username'])){
    
    $user = $_SESSION['username'];

    
    $sql = "SELECT * FROM users WHERE name='$user'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo '<h1>Welcome ' . $row['name'] . '</h1>';
        echo '<p>Email: ' . $row['email'] . '</p>';
        echo '<a href="logout.php">Logout</a>';
    }

} else {
    header('Location: login.php');
    exit();
}
?>