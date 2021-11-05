<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="Jquery.js">
    <script>
        
    </script>
</head>




<body>

    <nav class="nav navbar">
        <ul style="display: flex;">
            <li>
                <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="190.089" height="60.726" viewBox="0 0 229.089 140.726">
                <g id="Group_2" data-name="Group 2" transform="translate(-60.482 -170.341)">
                  <path id="Path_197" data-name="Path 197" d="M62.181,117.817V16.364L3.273,0,46.446,6.794,33.622,0H96.545V140.726H33.622l12.823-6.867L0,140.726ZM111.272,0H162c11.454,0,21.273,1.636,26.182,3.273C198,4.909,204.544,9.818,211.089,16.364s9.818,13.091,13.091,22.909S229.089,58.909,229.089,72q0,17.182-4.909,29.454A61.617,61.617,0,0,1,209.453,126c-4.909,4.909-11.454,8.182-19.636,11.454a99.039,99.039,0,0,1-24.545,3.273h-54Zm0,0V140.726l49.091-22.909c8.182,0,13.091,0,16.363-1.636,4.909-1.636,8.182-3.273,11.454-6.545s4.909-6.545,8.182-13.091,3.273-14.727,3.273-26.182S198,50.727,196.362,45.818a35.63,35.63,0,0,0-8.182-13.091c-3.273-3.273-8.182-4.909-13.091-6.545-3.273-1.636-11.454-1.636-22.909-1.636L111.272,0Z" transform="translate(289.571 311.067) rotate(180)" fill="#ffffff"/>
                </g>
              </svg>
                </a>
            </li>
            <li><a href="index.html">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Carrer</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>

    <div id="background-wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x2"></div>
        <div class="bubble x4"></div>
        <div class="bubble x10"></div>
        <div class="bubble x5"></div>
        <div class="bubble x10"></div>
        <div class="bubble x2"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x2"></div>
        <div class="bubble x10"></div>
        <div class="bubble x8"></div>
        <div class="bubble x3"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
        <div class="bubble x3"></div>
        <div class="bubble x10"></div>
    </div>


    <div class="main container">


        <div class="both">

                <div class="container Teachers">
                    <div class="avatar">
                        <!-- <a href="https://codepen.io/MarioDesigns/"> -->
                            <img src="avtart.png" alt="Avtar" />
                        <!-- </a> -->
                    </div>
                    <div class="content">
                        <h1>Teacher's Login</h1>
                    </div>
                </div>
                

                <div class="container candidates">
                    <div class="avatar2">
                        <!-- <a href="https://codepen.io/MarioDesigns/"> -->
                            <img src="avtart.png" alt="Avtar" />
                        <!-- </a> -->
                    </div>
                    <div class="content">
                        <h1>Candidate 
                            Login</h1>
                    </div>
                </div>
        </div>



        

        <!-- <hr style="rotate: 90deg;" color="black"> -->

        <div class="proctor col-5 gradient-border" style="margin-top: 100px;">
            <div class="head" style="display:flex; justify-content: space-around;">
                <div class="before"></div>
                <div class="head2" >Teacher Login</div>
                <div class="after"></div>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    
                    <hr style="color: white !important;">
                   
                    <div class="eppb"> 
                        <label for="UserName" class="inputs"> ID/Roll Number:</label>
                        <input type="text" name= "username" style="outline: none;" class="form-control" autocomplete="Roll-Number" placeholder="Reg ID/ Roll Num." autofocus>                    </div>
                    <div class="eppb"> 
                        <label for="Password">Password</label>
                        <input type="password" autocomplete="current-password" name="" class="form-control" minlength="8" maxlength="16" required placeholder="Password">
                    </div>
                    <div class="eppb" style="display: flex;"> 
                        <button type = "submit" id="sub" name = "Teacher-login" class="btn btn-lg btn-primary">Login</button>
                    </div>
                    <div class="login">
                        <p>Not Registered Yet <a href="signup.php">Register</a> here.</p>
                    </div>
                </form>

        </div>


        <div class="candidate col-5 gradient-border" style="margin-top:100px;">
            <div class="head" style="display:flex; justify-content: space-around;">
                
                <div class="before"></div>
                <div class="head2 linear-wipe">Candidate Login</div>
                <div class="after"></div>
            </div>
            <form action="testtime.php" method="POST">
                
                <hr style="color: white !important;">
                
                <div class="eppb"> 
                    <label for="Registered-ID" class="inputs">Registered ID:</label>
                    <input type="text" name= "Registered_ID" style="outline: none;" class="form-control" autocomplete="Registered ID" placeholder="Registered ID" autofocus>
                </div>
                <div class="eppb"> 
                    <label for="Email" class="inputs">E-Mail</label>
                    <input type="email" name= "username" style="outline: none;" class="form-control" autocomplete="Email" placeholder="Email" autofocus>
          
                </div>
                <div class="eppb"> 
                    <label for="Password" class="inputs">Password:</label>
                    <input type="password" name = "password" class="form-control" autocomplete="current-password" placeholder="Password">
                </div>
                <div class="eppb" style="display: flex;"> 
                    <button type = "submit" id="login" name ="login" class="btn btn-lg btn-primary">Login</button>
                </div>
            </form>
        </div>

    </div>


    <script>
        $(document).ready(function(){
            $(".Teachers").click(function(){
                $(".both").hide();
                $(".proctor").show();
            })

            $(".candidates").click(function(){
                $(".both").hide();
                $(".candidate").show();
            })
        })
    </script>
</body>
</html>


<?php
          
    include('connective.php');
    if(isset($_POST["Teacher-login"]))
        {
            $institute=$_POST["Registered_ID"];
            $username=$_POST["username"];
            $password=$_POST["password"];
            $sql="SELECT *FROM teacher_info where Username= '{$username}' and Password='{$password}'";
            
            $query1=mysqli_query($connection,$sql) or die("didnt login");

            if(mysqli_num_rows($query1)>0)
            {
                echo(10);
                header("Location: after_teacherlogin.php");

            }
 
            else{
                echo '<div class="alert alert-danger">check your username Or Password.</div>';
                header("Location: proctor-login.php");
            }

        }
?>