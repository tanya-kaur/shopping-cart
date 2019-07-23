<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<?php
require_once 'includes/header.php';
?>
    <form style="margin-left: 360px; margin-top: 40px; margin-right:400px; border: 2px solid darkgray"
        action="signin.php" method="post">
        <fieldset style="width: 500px; margin-left: 20px; margin-bottom: 20px">
            <h2>Login</h2>
            <div class="form-group">
                <label for="userid">UserID:</label>
                <input type="email" class="form-control" name="userid" placeholder="ID">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="PASSWORD">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </fieldset>
    </form>
    <?php
require_once 'includes/footer.php';
?>
</body>

</html>