<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proctor SignUp</title>


    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
    <link rel="stylesheet" href="proctor-signup.css"/>
</head>
<body>
    <nav>
        <div class="navbar">
            <ul>
                <li><a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="107.604" height="66.099" viewBox="0 0 107.604 66.099">
                        <g id="Group_2" data-name="Group 2" transform="translate(-60.482 -170.341)">
                          <path id="Path_197" data-name="Path 197" d="M29.207,55.339V7.686L1.537,0,21.816,3.191,15.792,0H45.347V66.1H15.792l6.023-3.226L0,66.1ZM52.265,0H76.091a43.551,43.551,0,0,1,12.3,1.537c4.612.769,7.686,3.074,10.76,6.149s4.612,6.149,6.149,10.76A46.22,46.22,0,0,1,107.6,33.818,37.233,37.233,0,0,1,105.3,47.653a28.942,28.942,0,0,1-6.917,11.529c-2.306,2.306-5.38,3.843-9.223,5.38A46.519,46.519,0,0,1,77.628,66.1H52.265Zm0,0V66.1l23.058-10.76c3.843,0,6.149,0,7.686-.769a12.388,12.388,0,0,0,5.38-3.074c1.537-1.537,2.306-3.074,3.843-6.149s1.537-6.917,1.537-12.3a37.444,37.444,0,0,0-1.537-11.529,16.736,16.736,0,0,0-3.843-6.149c-1.537-1.537-3.843-2.306-6.149-3.074-1.537-.769-5.38-.769-10.76-.769L52.265,0Z" transform="translate(168.086 236.44) rotate(180)" fill="#ffffff"/>
                        </g>
                      </svg>
                      
                </a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Carrer</a></li>
            </ul>

            <ul>
                <a href="proctor-login.php" ><li>Proctor Login</li></a>
            </ul>
        </div>
    </nav>
  <hr>
  <!-- <div class="heading"> Online Exam Portal</div> -->
  <div class="main" >
      <form action="<?php  $_SERVER['PHP_SELF']; ?>" class="form-group" method="POST">
          <h2>Proctor SignUp</h2>
        <hr>
          <!-- <label for="Provided-id" class="inputs">Registration ID:</label>
          <input type="text" name= "Provided-id" style="outline: none;" class="form-control" autocomplete="Registration-id" placeholder="Provided-ID by University" autofocus> -->

          <label for="institute" class="inputs">Institute Name:</label>
          <input type="text" name= "Institute_Name" style="outline: none;" class="form-control" autocomplete="Institute Name" placeholder="Institute Name">


          <label for="Email" class="inputs">E-Mail</label>
          <input type="email" name= "email" style="outline: none;" class="form-control" autocomplete="Email" placeholder="Email">

          <br>
          <label for="Create Password" style="text-decoration: underline;">Create Password</label>
          <br>
          <label for="Password" class="inputs">Password:</label>
          <input type="password" name = "password" class="form-control" autocomplete="current-password" placeholder="Password">

          <label for="Password" class="inputs">Confirm Password:</label>
          <input type="password" name = "Confirm_password" class="form-control" autocomplete="confirm-password" placeholder="Confirm Password">
          
          <div class="button-sub">

            <button type = "submit" id="Register" name ="Register" class="btn btn-lg btn-primary">Register</button>
          </div>

          <?php 
          
          include 'connective.php';


        if(isset($_POST["Register"]))
        {
            $Institution=$_POST["Institute_Name"];
            $username_teacher=$_POST["email"];
            $password_teacher=$_POST["Confirm_password"];

            $sql_teacher="INSERT INTO teacher_info(`Username`,`Password`,`Institute_name`) VALUES('{$username_teacher}','{$password_teacher}','{$Institution}')";

            mysqli_query($connection,$sql_teacher) or die("please use different username .this already exist");

            // mysqli_close($connection);


        }

                ?>
      </form>
</body>
</html>