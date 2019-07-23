<?php
$userid = $_POST['userid'];
$password = $_POST['password'];
$dbh = new PDO('mysql:host=localhost;dbname=shoppingcart', 'root', '');
$stmt = $dbh->prepare("SELECT YourName FROM userlogin WHERE userid=? psswrd=?");

//sql injection  
$stmt->execute([$userid, $password]);
if(empty($stmt->fetchAll())){
    echo 'Entry successful.';
}
else{
    echo 'Incorrect userid or password .';
}
//close
$stmt = null;
$dbh = null;
