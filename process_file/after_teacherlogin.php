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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">


</head>

<body>
    <div class="side-nav2 vis2">
        <div class="nav-con2" id="cool">
    
            <div>
                <link rel="stylesheet" href="profile.css">
                <img src="https://images.unsplash.com/photo-1499557354967-2b2d8910bcca?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7d5363c18112a02ce22d0c46f8570147&auto=format&fit=crop&w=635&q=80%20635w" alt="profile-pic" class="profile" id="pic" onclick="click()">

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


    <div class="container" style="top:0" id="boom-bitch">


        <div class="col-12 offset-1 main" style="margin-top:100px;">

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
            </div>
        </div>

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

    
    
    
    

    </div>


    <style>
        .button {
            height: 100px;
            /* max-width: 100px; */
            display: flex;
            /* background-color: red; */
            /* border-radius: 50%; */
        }

        .bck {
            background-color: white;
            height: 80px;
            width: 80px;
            border: 2px solid transparent;
            border-radius: 50%;
            align-self: center;
            display: flex;
            margin: auto;
        }

        .bck span {
            margin: auto;
        }
    </style>








    <style>
        .custom-table {
            margin: 30px;
        }

        table {
            border-collapse: separate;
            border-spacing: 0;
            min-width: 350px;
            background-color: white;

        }

        table tr th,
        table tr td {
            border-right: 1px solid #bbb;
            border-bottom: 1px solid #bbb;
            padding: 5px;

        }

        table tr th:first-child,
        table tr th:last-child {
            border-top: solid 1px #bbb;
        }

        table tr th:first-child,
        table tr td:first-child {
            border-left: 1px solid #bbb;

        }

        table tr th:first-child,
        table tr td:first-child {
            border-left: 1px solid #bbb;
        }

        table tr th {
            background: #eee;
            text-align: left;
        }

        table.Info tr th,
        table.Info tr:first-child td {
            border-top: 1px solid #bbb;
        }

        /* top-left border-radius */
        table tr:first-child th:first-child,
        table.Info tr:first-child td:first-child {
            border-top-left-radius: 6px;
        }

        /* top-right border-radius */
        table tr:first-child th:last-child,
        table.Info tr:first-child td:last-child {
            border-top-right-radius: 6px;
        }

        /* bottom-left border-radius */
        table tr:last-child td:first-child {
            border-bottom-left-radius: 6px;
        }

        /* bottom-right border-radius */
        table tr:last-child td:last-child {
            border-bottom-right-radius: 6px;
        }
    </style>

    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        body {
            background-color: #112322;

            background-color: rgb(13, 37, 35);
        }


        .side-nav2 {
            width: 170px;
            height: 100%;
            position: fixed;
        }


        .nav-con2 {
            display: flex;
            flex-direction: column;
            margin-left: 10px;
            margin-top: 50px;
        }

        .nav-con2>a {
            font-size: 18px;
            color: white;
            margin-top: 10px;
            text-decoration: none;
            padding: 10px;
        }

        .nav-con2>a:hover {
            color: white;
            background-color: rgba(241, 238, 238, 0.3);
        }

        .nav-con2>a>i {
            font-size: 26px;
        }


        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: white;
        }

        .navbar li {
            font-size: 18px;
            color: white;
            list-style: none;
            align-self: center;
            margin: auto;
        }




        .main {

            width: 100%;
            display: flex;
            justify-content: space-evenly;
            left: 0%;
        }

        .main :nth-child(2) {
            align-self: center;
        }

        .heading {
            text-align: center;
            font-size: 40px;
        }


        .fields {
            display: flex;
            /* padding: 10px 30px 10px 30px; */
        }

        input {
            color: #b9b9bd !important;
            background: transparent;
            border-bottom: 5px solid black;
            outline: none !important;
            border-radius: 0% !important;
            border-width: 0 0 2px 0 !important;
            font-size: 30px;
        }



        form {
            /* margin: auto; */
            width: 400px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 30px;
            background-color: white;
            box-shadow: 1px -1px 20px white;
        }

        h2 {
            color: black;
            text-align: center;
        }

        label {
            font-size: 20px;
        }

        .button-sub {
            margin: auto;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
    </style>

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

            $("#cool").click(function() {
                $("#boom-bitch").css({"opacity":"0.4"});
                // $(".profile").hide();
                $("#profile-card").show();
                $("#profile-card").addClass('element-animation');
                $("#profile-card").removeClass('element-animation-exit');

            })

            $("#arrow-button").click(function() {
                $("#boom-bitch").css({"opacity":"1"});
                // $("#profile-card").css({"display":"none"});
                $(".pic").show();
                $("#profile-card").addClass('element-animation-exit');
                $("#profile-card").removeClass('element-animation');

                // $("#profile-card").hide();m
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



        })
    </script>

</body>

</html>

