<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$number = $_POST['Number'];
$password = $_POST['Password'];

try{
    $dbh = new PDO('mysql:host=localhost;dbname=shoppingcart', 'root', '');

    $stmt = $dbh->prepare("INSERT INTO user(YourName, email, number, passwrd) VALUES(?, ?, ?, ?)");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //sql injection  

    if($stmt->execute([$name, $email, $number, $password]) == 1){
        echo 'Registered successfully.';
    }else{
        echo 'Registration failed. Please try again.';
    }
    //close
    $stmt = null;
    $dbh = null;
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



