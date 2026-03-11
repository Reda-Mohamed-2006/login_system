<?php
include 'database.php';

if(isset($_POST['signup'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // أمر إضافة مستخدم جديد في الجدول
    $sql = "INSERT INTO users (name, email, password) VALUES ('$user', '$email', '$pass')";

    if($conn->query($sql) === TRUE){
        echo "تم إنشاء الحساب بنجاح! <a href='login.php'>سجل دخول من هنا</a>";
    } else {
        echo "خطأ في التسجيل: " . $conn->error;
    }
}
?>