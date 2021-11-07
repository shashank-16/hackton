<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation-Deletion</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
    <link rel="stylesheet" href="after_login.css">


</head>

<body>
    <nav>
            <span id="profile-pic" style="display: flex; padding:20px; z-index:1;">
                <img src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7d5363c18112a02ce22d0c46f8570147&auto=format&fit=crop&w=635&q=80%20635w" alt="profile-pic" class="profile" id="pic" onclick="click()">
            </span>
    </nav>

<<<<<<< HEAD
            </div>


                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
                <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        </div>
    </div>

    <!-- <div id="container">
  <div id="navi">a</div>
  <div id="infoi">
    <img src="https://appharbor.com/assets/images/stackoverflow-logo.png" height="20" width="32" />b
  </div>
</div>m
<style>

#container {
  width: 100px;
  height: 100px;
  position: relative;
}
#navi,
#infoi {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
#infoi {
  z-index: 10;
}
    </style> -->
=======
>>>>>>> a2c0e6f9d09ebdf1c3988ebb50763dfb2173ff16


    <div class="container" style="position: absolute;">

        <div class="col-12 offset-1 main">

            <form action="creation_table.php" style="z-index: 1;" class="form-group" method="POST">
                <h2>Create or Delete</h2>

                <hr>

                <input type="radio" name="check" value="createTable">
                <label for="create">Create Test paper</label>
                <br>

                <input type="radio" name="check" value="DeleteTable">
                <label for="delete">Delete Test paper</label>

                <div class="fields">
                    <label for="table name" class="inputs">Enter table Name:</label>
                    <input type="text" name="Table_name" class="form-control" autocomplete="table_name" placeholder="Enter Table Name">
                </div>


                <div class="fields">
                    <label for="no_of_question" class="inputs">Enter No. of Question:</label>
                    <input type="text" name="no_of_question" class="form-control" autocomplete="num-of-question" placeholder="Enter No. of Question">

                </div>

                <div class="button-sub">
                    <button type="submit" id="sub" name="submit" class="btn btn-lg btn-success">Go For Upload Question</button>

                </div>
                <div class="button-sub">
                    <button style="margin: 4px;" type="submit" id="sub" name="submit" class="btn btn-lg btn-danger">Delete Paper</button>

                </div>


            </form>




            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="ecord" onclick="show()" style="margin-left:-42%" class="form-group" method="POST">

                <h2>Exam Record</h2>

                <select name="subject" id="subjects" class="form-control" style="padding:20px">
                    <option value="Select" selected>Select</option>
                    <?php
                    require 'connective.php';

                    $sql_subject = "SELECT `subject` FROM subject_info";
                    $show_subject = mysqli_query($connection, $sql_subject) or die("cannot show subject");

                    if (mysqli_num_rows($show_subject) > 0) {
                        while ($row = mysqli_fetch_assoc($show_subject)) {
                    ?>
                            <option value=<?php echo $row["subject"]; ?> name="subject"> <?php echo $row["subject"]; ?> </option>

                    <?php }
                    }
                    ?>
                </select>

                <div class="button-sub">
                    <button type="submit" id="sub" name="show" class="btn btn-lg btn-success">SHOW</button>
                </div>

            </form>

            <div class="record custom-table">


                <table>
                    <?php
                    require 'connective.php';

                    if (isset($_POST["show"])) {

                        $subject_choosen = $_POST["subject"];
                        $sql_show_record = "SELECT `user_name`,`$subject_choosen` FROM exam_record";
                        $query_show_record = mysqli_query($connection, $sql_show_record) or die("exam record error");

                        if (mysqli_num_rows($query_show_record) > 0) {
                    ?>
                            <tr>

                                <th>Student Name</th>

                                <th><?php echo $subject_choosen; ?></th>

                            </tr>
                            <tr>
                                <?php
                                while ($row_subject = mysqli_fetch_assoc($query_show_record)) {   ?>

                                    <td><?php echo $row_subject["user_name"]; ?></td>
                                    <td> <?php echo $row_subject[$subject_choosen]; ?></td>

                            </tr>

                <?php
                                }
                            }
                        }
                ?>
                </table>
            </div>
        </div>

        <div class="button">
            <div class="bck">
                <a href="index.html">
                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 16 16">
                        <defs>
                            <clipPath id="clip-path">
                                <rect width="16" height="16" fill="none" />
                            </clipPath>
                        </defs>
                        <g id="Backward_arrow" data-name="Backward arrow" clip-path="url(#clip-path)">
                            <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#112322" />
                        </g>
                    </svg>
                </span>
                </a>
            </div>
        </div>
    </div>

<<<<<<< HEAD
        <!-- playercard -->

        <div id= "profile-card" style="margin:auto ; display:none"  >
            <link rel="stylesheet" href="profile.css">
            <div class="grid-7">
          
                
           
            <div class="card color-card"> 
                <ul>
                <li id = "arrow-button"><i class="fas fa-arrow-left i-l w" ></i></li>
                <li><i class="fas fa-ellipsis-v i-r w"></i></li>
                </ul>

                <img src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7d5363c18112a02ce22d0c46f8570147&auto=format&fit=crop&w=635&q=80%20635w" alt="profile-pic" class="profile">
                <h1 class="title"><?php echo $_SESSION["teacher_name"]?></h1>
                <p class="job-title"> Teacher</p>
                <div class="desc top">
                <p>Javascript is god but C is grandpa</p>
                </div>
                    <button class="btn color-a top" name ="logout" id ="logout"> Logout</button>
            
                
        
                <hr>
                <div class="desc top">
                <p> India Instutite of Technology Dehli</p>

                <p> CSE </p>
                </div>
                 <div class="container">
                <div class="content">
                    <div class="grid-2">
                    <button class="color-b circule"> <i class="fab fa-dribbble fa-2x"></i></button>
                    <h2 class="title">12.3k</h2>
                    <p class="followers">Followers</p>
                    </div>
                    <div class="grid-2">
                    <button class="color-c circule"><i class="fab fa-behance fa-2x"></i></button>
                    <h2 class="title">16k</h2>
                    <p class="followers">Followers</p>
                    </div>
                    <div class="grid-2">
                    <button class="color-d circule"><i class="fab fa-github-alt fa-2x"></i></button>
                    <h2 class="title">17.8k</h2>
                    <p class="followers">Followers</p>
                    </div>
                </div>
                </div>
            
            </div>
            </div>
      </div>
      
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet"> 

    
    
    
    

=======
    <div class="profile-card" style="margin-left: -400px;">
        <!-- Arrow button -->
        <div class="first">
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
            <h3>user_ID</h3>
            <div class="name"><p>Name</p></div>
            <div class="designation"><p>Designation</p></div>
            <div class="branch"><p>Branch</p></div>
            <div class="phone"><p>Phone Number</p></div>
            <div class="" style="display: flex;">
                <button class="btn btn-primary" id="logout">Logout</button>
            </div>
        </div>
>>>>>>> a2c0e6f9d09ebdf1c3988ebb50763dfb2173ff16
    </div>


    <script>
        $(document).ready(function() {
            $("#ecord").click(function() {
                $("#ecord").animate({
                    "margin-left": "0%"
                }, 600);
                // $("#ecord").animate()
            })
            $("#ecord").mouseenter(function() {
                $("#ecord").animate({
                    "margin-left": "-40%"
                }, 400);
                $("#ecord").animate({
                    "margin-left": "-42%"
                }, 400);
            })



            $("#ecord").mouseleave(function() {
                $("#ecord").animate({
                    "margin-left": "-42%"
                }, 600);
            })

            $("#profile-pic").click(function() {
                $("body").css({"opacity":"0.5"});
                $(".profile-card").animate({"margin-left":"10px"},300);

            })

            $(".first span").click(function(){
                $("body").css({"opacity":"1"});
                $(".profile-card").animate({"margin-left":"-400px"},300);
            })
        })

            $("#logout").click(function(){
                $.ajax({
                            type: 'POST',
                            url: 'logout.php',
                            data: { logout: "1111" },
                            
                            // do these thing 
                            success: function(response) {
                                window.location.href="Login.php";
                            }
                        })
            })



    </script>

</body>

</html>

