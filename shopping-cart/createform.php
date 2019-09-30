<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    #homeform{
        margin-left: auto;
        margin-bottom: 3rem;
        margin-top: 3rem;
        margin-right:auto;
        background: #eee;
        max-width: 600px;
        padding: 2rem;
    }
    </style>
</head>

<body>
    <?php
    require_once 'includes/header.php';
    ?>
    <form  id="homeform" action="create-acc.php" method="POST">
        <fieldset style="width: 500px; margin-left: 20px; margin-bottom: 20px">
            <h2>Create Account</h2>
            <div class="form-group">
                <label for="name">Your Name*:</label>
                <input type="text" class="form-control" name="Name">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">

                <label for="email">Email*:</label>
                <input type="email" class="form-control" name="Email" id="Email">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">

                <label for="number">Mobile Number*:</label>
                <input type="tel" class="form-control" name="Number">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">

                <label for="password">Password*:</label>
                <input type="password" class="form-control" placeholder="Atleast 6 characters" name="Password">
                <div class="invalid-feedback"></div>
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
    <script>
    document.querySelector('#homeform').onsubmit = function(e){
        let errorFlag = false;
        document.querySelectorAll('is-invalid').forEach(function(el){
                el.classList.remove('is-invalid');
            });
    
    const name = document.querySelector("input[name='Name']").value.trim();
    const email = document.querySelector("input[name='Email']").value.trim();
    const number = document.querySelector("input[name='Number']").value.trim();
    const password = document.querySelector("input[name='Password']").value.trim();
    if(name.length === 0){
        errorFlag= true;
        document.querySelector("input[name='Name']").nextElementSibling.innerHTML= "Name is required.";
        document.querySelector("input[name='Name']").classList.add('is-invalid');
    }
    else if(!(/^[a-zA-Z\s]+$/.test(name))){
        errorFlag= true;
        document.querySelector("input[name='Name']").nextElementSibling.innerHTML= "Name is invalid.";
        document.querySelector("input[name='Name']").classList.add('is-invalid');
    } 
    if(email.length === 0){
                errorFlag = true;
                document.querySelector("input[name='Email']").nextElementSibling.innerHTML = "Email is required.";
                document.querySelector("input[name='Email']").classList.add('is-invalid');
            }
   
           else if(!(/^(?=.*[a-z0-9])&(?=.{.com})$/.test(email))){
                errorFlag = true;
                document.querySelector("input[name='Email']").nextElementSibling.innerHTML = "Email is invalid.";
                document.querySelector("input[name='Email']").classList.add('is-invalid');
            }
            if(number.length === 0){
                errorFlag = true;
                document.querySelector("input[name='Number']").nextElementSibling.innerHTML = "number is required.";
                document.querySelector("input[name='Number']").classList.add('is-invalid');
            }
          else  if(!(/^(?=.*[0-9]).{10}$/.test(number))){
                errorFlag = true;
                document.querySelector("input[name='Number']").nextElementSibling.innerHTML = "number is invalid.";
                document.querySelector("input[name='Number']").classList.add('is-invalid');
            }
            if(password.length === 0){
                errorFlag = true;
                document.querySelector("input[name='Password']").nextElementSibling.innerHTML = "Password is required.";
                document.querySelector("input[name='Password']").classList.add('is-invalid');
            }
           else  if(!(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.[!@#_]).{6,}$/.test(password))){
                errorFlag = true;
                document.querySelector("input[name='Password']").nextElementSibling.innerHTML = "password must have lowercase, uppercase, numeric and special characters. Password  should have atleast 6 characters.";
                document.querySelector("input[name='Password']").classList.add('is-invalid');
            }
            if(errorFlag){
                e.preventDefault();
            }

    }
    </script>
</body>

</html>