

<?php
          session_start();

          include('connective.php');

          if(isset($_POST["login"]))
          {
              $institute=$_POST["Registered_ID"];

              $username=$_POST["username"];
              $password=$_POST["password"];
               $sql="SELECT *FROM teacher_info where Username= '{$username}' and Password='{$password}'";
            
                $query1=mysqli_query($connection,$sql) or die("didnt login");

                if(mysqli_num_rows($query1)>0)
                {
                    $_SESSION["teacher_name"]=$username;
                    
                    header("Location: after_teacherlogin.php");

                }

                
                else{
                    echo '<div class="alert alert-danger">check your username Or Password.</div>';
                    header("Location: proctor-login.php");
                }

            }
            else{
                session_destroy();
                header("Location : Login.php");
            }

          
?>