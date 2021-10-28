<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate SignUp</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
    <link rel="stylesheet" href="candidate-signup.css">
</head>
<body>
    <div class=" col signup_form">
        <div class="head">Welcome Students</div>
    <form class="form-group form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="bl"><h2> Students</h2></div>
        <h2>Registration</h2>
        <hr>
        <!-- <p>Create your Account for Free.</p> -->
        <div class="row">
            <div class="col">
                <label for="ID">Student ID</label>
                <input type="text" class="form-control" placeholder="Student ID">
                
            </div>
            <div class="col">
                <label for="ID">Branch</label>
                <input type="text" class="form-control" placeholder="Branch">
                
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="Name">First Name</label>
                <input type="text" class="form-control" autocomplete="First-name" placeholder="First Name">
                
            </div>
            <div class="col">
                <label for="Name">Last Name</label>
                <input type="text" class="form-control" autocomplete="Last-name" placeholder="Last Name">
            </div>
        </div>
        
        <div class="col"> 
            <label for="gender">Gender:</label>
            <input type="radio" name="gender">Male
            <input type="radio" name="gender">Female
            <input type="radio" name="gender">Transgender
        </div>

        <div class="col"> 
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Usermail" name = "Email" autocomplete="Email" placeholder="Email">
        </div>

        <div class="col"> 
            <label for="Password">Password</label>
            <input type="password" autocomplete="current-password" class="form-control" placeholder="Password">
        </div>

        <div class="col"> 
            <label for="Password">Confirm Password</label>
            <input type="password" autocomplete="current-password"  name = "password" class="form-control" placeholder="Password">
        </div>
        <div class="col"> 
            <button type="submit" onclick="hello()" name="submit" class="btn-sm btnn" >Register</button>
        </div>
    </form>

    <script>
        function hello(){
            alert(document.getElementById=("Usermail").value + "Sucessfully Registred");
        }
    </script>

    <?php

    include 'connective.php';

    if(isset($_POST["submit"]))
    {
    $username_for_student=$_POST["Email"];
    $password_of_student=$_POST["password"];

    $sql="INSERT INTO user_info(user_name,password) values('{$username_for_student}','{$password_of_student}')";

    $query= mysqli_query($connection,$sql);

    }

    ?>
    
    
</div>
</body>
</html>