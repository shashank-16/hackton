<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">
    <link rel="stylesheet" href="Login.css">
    


    <style>
        a{
            text-decoration: none;
            color: white;
        }

        nav{
            background-image: url('wallppr.jpg');
            background-position: center;
        }


        .navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0px 20px 0 20px;
            font-size: 30px;
        }
        .navbar ul li a:hover{
            /* background-color: rgba(0, 0, 0, 0.6); */
            color: seashell;
        }

        h1{
            color: red;
        }

        textarea{
            width: 100%;
            height: 10vh;
        }

        form{
            padding: 30px
        }

        .Question{
            border: 2px solid gray;
            border-radius: 10px;
            padding: 30px;
        }

        .Question ul li{
            list-style: none;
        }

        button{
            width: 200px;
        }
    </style>

    
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
                <li><a href="#">About</a></li>
                <li>Name of Institute/University</li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="nm" name="form-a" method="POST">
        
        <?php

        session_start();
        include 'connective.php';

        $count=$_SESSION["number_question"];
        

        for($i=0;$i<$count ; $i++)
        {

        ?>


            <div class="Question form-group">
                <h1>Upload Question</h1>
                <hr>
                <textarea name="paperdata[<?php echo $i ?>][question]" style="border: 2px solid black;
                margin-top: 50px;" id="question"></textarea>
                <ul>
                    <label for="option-1">Options</label>
                    <li><input type="text" name="paperdata[<?php echo $i ?>][option_1]" id="" placeholder="Option-1"></li>
                    <br>
                    <li><input type="text" name="paperdata[<?php echo $i ?>][option_2]" id="" placeholder="Option-2"></li>
                    <br>
                    <li><input type="text" name="paperdata[<?php echo $i ?>][option_3]" id="" placeholder="Option-3"></li>
                    <br>
                    <li><input type="text" name="paperdata[<?php echo $i ?>][option_4]" id="" placeholder="Option-4"></li>
                    <label for="Answer">Answer</label>
                    <li><input type="text" name="paperdata[<?php echo $i ?>][answer]" id="" placeholder="Corect Answer"></li>
                </ul>
                
            </div>

        <?php    
        }
        ?>
        <button type="submit" name="submit" class="btn btn-lg btn-primary" >Upload</button>
            
            <!-- <div class="Question form-group">
                <h1>Upload Question</h1>
                <hr>
                <textarea name="paperdata[1][question]" style="border: 2px solid black;
                margin-top: 50px;" id="question"></textarea>
                <ul>
                    <label for="option-1">Options</label>
                    <li><input type="text"  name="paperdata[1][option_1]" id="" placeholder="Option-1"></li>
                    <br>
                    <li><input type="text"  name="paperdata[1][option_2]" id="" placeholder="Option-2"></li>
                    <br>
                    <li><input type="text"  name="paperdata[1][option_3]" id="" placeholder="Option-3"></li>
                    <br>
                    <li><input type="text"  name="paperdata[1][option_4]" id="" placeholder="Option-4"></li>
                    <label for="Answer">Answer</label>
                    <li><input type="text" name="paperdata[1][answer]" id="" placeholder="Corect Answer"></li>
                </ul>
                <button type="submit" name="submit" class="btn btn-lg btn-primary" >Next</button>
            </div> -->
        
        </form>
        
        

    </div>
</body>
</html>


<?php



if(isset($_POST["submit"]))
{
    
    // $c = $_POST['paperdata'];
    // print_r($c);
    
    function insertData($data)
    {
        
        include 'connective.php';
        print_r($data);
        $Question = $data['question'];
        $option_1 = $data['option_1'];
        $option_2 = $data['option_2'];
        $option_3 = $data['option_3'];
        $option_4 = $data['option_4'];
        $Answer= $data['answer'];


        $optionsheet="optionsheet_".$_SESSION["table_name"];
        $test="test_".$_SESSION["table_name"];



        $sql="INSERT INTO `$optionsheet`(`question_id`,`option1`,`option2`,`option3`,`option4`) 
        values('{$Question}','{$option_1}','{$option_2}','{$option_3}','{$option_4}')";

        print_r($sql);

        mysqli_query($connection,$sql) or die("question nhi gya");



        $sql2="INSERT INTO `$test`(question,answer) VALUE('{$Question}','{$Answer}')";
        mysqli_query($connection,$sql2) or die("answer nhi gya");
        }
        array_map("insertData", $_POST['paperdata']);
}


?>
