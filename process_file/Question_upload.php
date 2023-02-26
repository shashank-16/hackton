<?php
session_start();
require 'connective.php';
$sql_Univer_name = "SELECT `Institute_name` FROM teacher_info WHERE `Username`='{$_SESSION['teacher_name']}' ";
$inst_name = mysqli_query($connection, $sql_Univer_name);
if (mysqli_num_rows($inst_name) > 0) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Question Upload</title>

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
        <!-- <link rel="stylesheet" href="Login.css"> -->



        <style>
            body {
                margin: 0%;
                padding: 0%;
                box-shadow: none;
                /* background-image: url('Green-india.png'); */
                background: url(./uploadpaperbg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }

            a {
                text-decoration: none;
                color: black;
            }

            .navbar{
                color: white;
                display: flex;
                align-items: center;
                position: fixed;
                top: 0;
                width: 100vw;
                background-color: rgba(0, 0, 0,0.7);
                padding: 1rem;
            }
            .navbar ul{
                margin-bottom: 0;
            }
            
            
            .navbar ul li {
                list-style: none;
                display: inline-block;
                margin: 0 1rem;
                cursor: pointer;
            }

            .navbar ul li:hover{
                transform: scale(1.2);
            }
            
            .navbar ul li a {
                color: white;
            }

            .paper-area{
                margin-top: 5%;
                border-radius: 1.5rem;
                background: rgb(0,212,255);
                background: linear-gradient(90deg, rgba(0,212,255,1) 8%, rgba(9,9,121,1) 51%, rgba(2,0,36,1) 79%);
            }

            h1 {
                color: red;
            }

            textarea {
                border-radius: 10px !important;
                width: 100%;
                height: 10vh;
            }

            label {
                font-size: 30px;
            }

            input {
                border-radius: 8px !important;
            }

            .Question {
                /* border: 2px solid gray; */
                border-radius: 10px;
                padding: 1rem
            }

            .Question ul li {
                list-style: none;   
            }
            .Question ul li input{
                width: 50%;  
            }



            button {
                width: 200px;
                margin-bottom: 2rem;
            }

            .warn{
                display: flex; 
                justify-content:center;
                flex-direction:column;
                background-color: rgb(0, 0, 0, 30%);
                color: white;
                margin: 1rem 0;
            }


            @media screen and (max-width="350px") {
                .navbar ul li {
                list-style: none;
                /* display: inline-block; */
                margin: 0 1rem;
                font-size: 1rem;
                }
                .Question ul{
                    margin-left: 0;
                }
            }   
        </style>


    </head>

    <body>

        <nav>
            <div class="navbar">
                <ul>
                    <!-- <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80.604" height="50.099" viewBox="0 0 107.604 66.099">
                                <g id="Group_2" data-name="Group 2" transform="translate(-60.482 -170.341)">
                                    <path id="Path_197" data-name="Path 197" d="M29.207,55.339V7.686L1.537,0,21.816,3.191,15.792,0H45.347V66.1H15.792l6.023-3.226L0,66.1ZM52.265,0H76.091a43.551,43.551,0,0,1,12.3,1.537c4.612.769,7.686,3.074,10.76,6.149s4.612,6.149,6.149,10.76A46.22,46.22,0,0,1,107.6,33.818,37.233,37.233,0,0,1,105.3,47.653a28.942,28.942,0,0,1-6.917,11.529c-2.306,2.306-5.38,3.843-9.223,5.38A46.519,46.519,0,0,1,77.628,66.1H52.265Zm0,0V66.1l23.058-10.76c3.843,0,6.149,0,7.686-.769a12.388,12.388,0,0,0,5.38-3.074c1.537-1.537,2.306-3.074,3.843-6.149s1.537-6.917,1.537-12.3a37.444,37.444,0,0,0-1.537-11.529,16.736,16.736,0,0,0-3.843-6.149c-1.537-1.537-3.843-2.306-6.149-3.074-1.537-.769-5.38-.769-10.76-.769L52.265,0Z" transform="translate(168.086 236.44) rotate(180)" fill="#111111" />
                                </g>
                            </svg>
                        </a>
                    </li> -->
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <?php
                    while ($roww = mysqli_fetch_assoc($inst_name)) {
                    ?>
                        <li><?php echo $roww['Institute_name']; ?></li>
                <?php
                    }
                }
                ?>
                </ul>

                <div class="bck" style="padding-right:1rem;color:white">
                    <a href="after_teacherlogin.php">
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 16 16">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect width="16" height="16" fill="none" />
                                    </clipPath>
                                </defs>
                                <g id="Backward_arrow" data-name="Backward arrow" clip-path="url(#clip-path)">
                                    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(16 16) rotate(180)" fill="#fff" />
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="container paper-area">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="nm" name="form-a" method="POST">

                <?php
                include 'connective.php';

                $count = $_SESSION["number_question"];


                for ($i = 0; $i < $count; $i++) {
                    $a = 1


                ?>


                    <div class="Question form-group">
                        <hr style="border: 2px solid white !important;">
                        <textarea class="form-control" name="paperdata[<?php echo $i ?>][question]" style="border: 2px solid black;margin-top: 50px;" id="question" placeholder="Insert Question Here..."></textarea>
                        <ul>
                            <label for="option-1">Options</label>
                            <li><input class="form-control" type="text" name="paperdata[<?php echo $i ?>][option_1]" id="" placeholder="Option-1"></li>
                            <br>
                            <li><input class="form-control" type="text" name="paperdata[<?php echo $i ?>][option_2]" id="" placeholder="Option-2"></li>
                            <br>
                            <li><input class="form-control" type="text" name="paperdata[<?php echo $i ?>][option_3]" id="" placeholder="Option-3"></li>
                            <br>
                            <li><input class="form-control" type="text" name="paperdata[<?php echo $i ?>][option_4]" id="" placeholder="Option-4"></li>
                            <label for="Answer">Answer</label>
                            <li><input class="form-control" type="text" name="paperdata[<?php echo $i ?>][answer]" id="" placeholder="Corect Answer"></li>
                        </ul>
                    </div>

                <?php
                }
                ?>
                <div class="warn">
                    <p style="color:red; font-size:30px; align-self:center">Once upload Can't Alter, Review it now!</p>
                    <h3>Editing Feature Coming Soon...</h3>
                </div>
                <div class="btnn" style="display:flex; justify-content:center;">

                    <button type="submit" name="submit" class="btn btn-lg btn-success">Upload</button>
                </div>
            </form>

        </div>

        <!-- Question Table for Review=============================================>  for Take a loook before Upload the Question paper -->

        <table class="table" id="datatable">
        <thead>
          <tr>
            <th>Id</th>
            <th>Question</th>
            <th>Option 1</th>
            <th>Option 2</th>
            <th>Option 3</th>
            <th>Option 4</th>
            <th>Answer</th>
          </tr>
        </thead>
        <tbody>
          <!-- {tableData.map((data, index) => {
            return ( -->
              <tr key={index} id={`row${index+1}`}>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <!-- <td><button id={`row${index+1}-btn`} className="btn btn-danger" onClick={(e)=>{
                    let tempid = e.target.id.split("-")[0];
                    console.log(tempid);
                    document.getElementById(tempid).remove();
                }}>Delete</button></td> -->
              </tr>
            <!-- );
          })} -->
        </tbody>
      </table>
    </body>

    </html>


    <?php



    if (isset($_POST["submit"])) {

        // $c = $_POST['paperdata'];
        // print_r($c);

        function insertData($data)
        {

            include 'connective.php';
            // print_r($data);
            $Question = $data['question'];
            $option_1 = $data['option_1'];
            $option_2 = $data['option_2'];
            $option_3 = $data['option_3'];
            $option_4 = $data['option_4'];
            $Answer = $data['answer'];


            $optionsheet = "optionsheet_" . $_SESSION["table_name"];
            $test = "test_" . $_SESSION["table_name"];



            $sql = "INSERT INTO `$optionsheet`(`question_id`,`option1`,`option2`,`option3`,`option4`) 
        values('{$Question}','{$option_1}','{$option_2}','{$option_3}','{$option_4}')";

            // print_r($sql);

            mysqli_query($connection, $sql) or die("question nhi gya");



            $sql2 = "INSERT INTO `$test`(question,answer) VALUE('{$Question}','{$Answer}')";
            mysqli_query($connection, $sql2) or die("answer nhi gya");
            // header("Location: after_login.php");
        }
        array_map("insertData", $_POST['paperdata']);
    }


    ?>