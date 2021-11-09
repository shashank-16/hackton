<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Examination</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name"> -->
    <link rel="stylesheet" href="subject.css" />
</head>

<body>
    <nav>
            <span id="profile-pic">
                <img src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7d5363c18112a02ce22d0c46f8570147&auto=format&fit=crop&w=635&q=80%20635w" alt="profile-pic" class="profile" id="pic" onclick="click()">
            </span>
    </nav>

    <div class="profile-card" style="margin-left: -400px;">
        <!-- Arrow button -->
        <div class="first" style="display:flex; justify-content:end;">
        <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 16 16">
            <defs>
                <clipPath id="clip-path">
                <rect width="16" height="16" fill="none"/>
                </clipPath>
            </defs>
            <g id="Backward_arrow" data-name="Backward arrow" clip-path="url(#clip-path)">
                <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#ffffff"/>
            </g>
            </svg>
            </span>
        </div>
        <div class="second">
            <img src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7d5363c18112a02ce22d0c46f8570147&auto=format&fit=crop&w=635&q=80%20635w" alt="profile-pic" class="profile" id="pic">
        </div>
        <div class="details">
            <?php
            require 'connective.php';

            $profile_card = "SELECT *FROM user_info WHERE `user_name`='{$_SESSION["username"]}'";
            $query_profile=mysqli_query($connection,$profile_card);
            if(mysqli_num_rows($query_profile)>0)
                {   
                    while($rowl=mysqli_fetch_assoc($query_profile))
                    {
            ?>
            <div><p><?php echo $_SESSION["username"];?></p></div>
            <div class="name"><p><?php echo $rowl["name_student"]; ?></p></div>
            <div class="designation"><p>Student</p></div>
            <div class="branch"><p><?php echo $rowl["branch"]; ?></p></div>
            <div class="phone"><p><?php echo $rowl["student_Id"]; ?></p></div>
            <div class="" style="display: flex;">
                <button class="btn btn-primary"  id="logout">Logout</button>
        
            </div>
            <?php }
    }?>
        </div>
        
    </div>






    <div>

    <div class="instruction">
        <p style="color: black;">Please Read The Instruction care fully.</p>
        <ul>
            <li>Procced for key binding.</li>
            <li>Choose Key wisely according to your comfort.</li>
        </ul>
    </div>


    <div class="file">
    <div class="main">

            <?php
    include('connective.php');

    $show_subject="SELECT * FROM subject_info";
    

    $query_subject=mysqli_query($connection,$show_subject) or die("cannot show subject");

    if (mysqli_num_rows($query_subject) > 0) {
        while ($row = mysqli_fetch_assoc($query_subject)) {
    ?>
                <div class="sub-div remove">

                
                    <form id="nm" action="key-bindings.php" method="POST" class="form-group" name="<?php echo ($row["subject"]); ?>">
                        <div class="sub-name">
                            <select name="subject" style="display: none;">
                                <option value="<?php echo ($row["subject"]); ?>"></option>
                            </select>

                           Subject : <?php  echo ($row["subject"]); 
                           $_SESSION["time"]=$row["Duration"];
                           
                           require 'connective.php';
                           $subject=$row["subject"];
                           $sql_existing="SELECT `user_name` FROM `user_info` WHERE `user_name`= '{$_SESSION["username"]}' AND `$subject`=True ";
                           $existing=mysqli_query($connection,$sql_existing) or die("cannot disable button");

                           ?>
                        </div>


                        <div class="time-div">
                            Time:4:00 PM
                        </div>


                        <div class="duration-div" name="duration">
                            <select name="duration" style="display: none;">
                                <option value="<?php echo ($row["duration"]); ?>"></option>
                            </select>
                           Duration :  <?php echo ($row["duration"]); ?>
                        </div>


                        <div class="no-ques-div" name="question_no" >
                            <select name="question_no" style="display: none;">
                                <option value="<?php echo ($row["no_question"]); ?>"></option>
                            </select>
                           Number of question : <?php echo ($row["no_question"]); ?>
                        </div>


                        <div class="total-marks-div">
                            Total marks:100
                        </div>
                        <?php
                        if(mysqli_num_rows($existing)>0)
                        {
                           echo '<div class="already_given" style="margin-left:40px;">
                            Already given the test 
                        </div>';
                        }
                        else{
                       echo ' <button type="submit" style="margin-left: 50px;" name="submit" class="btn btn-lg btn-primary" onclick="change()">Test Time</button>';
                        }?>


                    </form>
                </div>
            

        <?php

    }
    }
        ?>
        </div>  
            </div>

    </div>
    </div>

</body>



<script>
    function change() {
        console.log(document.getElementsById('nm').name);
    }
    $(document).ready(function(){
        $(".file").click(function(){
            $(".main").animate({"margin-left":"320px"},600);
            // $(".main").animate({"margin-left":"320px"},600);
            $(".sub-div").removeClass('remove');
        })
        




            $("#profile-pic").click(function() {
                $(".profile-card").animate({"margin-right":"450px"},300);
                $(".main,.instruction,.sub-div,.file::before,.file::after").addClass("blurr");
            })

            $(".first span").click(function(){
                $("body").css({"opacity":"1"});
                $(".profile-card").animate({"margin-right":"-400px"},300);
                $(".main,.instruction,.sub-div").removeClass("blurr");
            })


            $("#logout").click(function(){
                $.ajax({
                            type: 'POST',
                            url: 'logout.php',
                            data: { logout: "1" },
                            
                            // do these thing 
                            success: function(response) {
                                window.location.href="Login.php";
                            }
                        })
            })
    })
</script>

</html>