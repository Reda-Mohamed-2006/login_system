<?php
include 'database.php';

if(isset($_POST['signup'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Inserting data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$user', '$email', '$pass')";

    if($conn->query($sql) === TRUE){
        echo "<h3>Registration Successful!</h3>";
        echo "<p>Your account has been created. <a href='login.php'>Login Now</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>