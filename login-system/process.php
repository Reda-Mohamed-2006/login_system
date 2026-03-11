<?php
session_start();
include 'database.php'; 

if(isset($_POST['submit'])){


    $user = filter_input(INPUT_POST, 'UserName', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM users WHERE name='$user' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['username'] = $user;
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'Incorrect Login';
    }
}
?>