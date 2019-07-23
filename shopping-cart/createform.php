<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    require_once 'includes/header.php';
    ?>
    <form style="margin-left: 360px; margin-top: 40px; margin-right:400px; border: 2px solid darkgray"
        action="create-acc.php" method="POST">
        <fieldset style="width: 500px; margin-left: 20px; margin-bottom: 20px">
            <h2>Create Account</h2>
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" name="Name">
            </div>
            <div class="form-group">

                <label for="email">Email:</label>
                <input type="email" class="form-control" name="Email">
            </div>
            <div class="form-group">

                <label for="number">Mobile Number:</label>
                <input type="tel" class="form-control" name="Number">
            </div>
            <div class="form-group">

                <label for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Atleast 6 characters" name="Password">
                <p style="color: blue">password must be atleast 6 characters</p>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <p style="margin-top: 20px; margin-bottom:0%">Already have a account?</p>
            <button type="button" class="btn btn-link" style=" color: darkblue">
                <a href="sign-in.php" style="color: darkblue">Sign in!</a></button>
        </fieldset>

    </form>
    <?php
    require_once 'includes/footer.php';
    ?>
</body>

</html>