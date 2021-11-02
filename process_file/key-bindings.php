<?php 

session_start();
include 'connective.php';


if(isset($_POST["submit"]))
{
    $_SESSION["table_name"]=$_POST["subject"];
    $_SESSION["no_question"]=$_POST["question_no"];

   
    $table_name="online_test_".$_SESSION["table_name"];

    
    $sql_username_insertion_in_online_test= "INSERT INTO `$table_name` (Username_test,score) VALUES('{$_SESSION["username"]}','{$_SESSION["score"]}') ";
    $putting_name= mysqli_query($connection,$sql_username_insertion_in_online_test) or die($username);
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>Key-Bindings</title>
    <style>
        .container{
            display: block;
        }
        h1{
            text-align: center;
            background-color: green;
            padding-bottom: 10px;
        }
        .main{
            height: 500px;
            width: 500px;
            border: 2px solid black;
            border-radius: 10px;
            margin: auto;
            box-shadow: 1px -1px 7px grey;
        }
        #head p{
            font-size: 20px;
            text-align: center;
            color: rgb(255, 255, 255);
        }
        label{
            font-size: 20px;
            margin-top: 20px;
            margin-left: 20px;
        }

        ul li{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            All The Very Best For Your Exam!
        </h1>
        <ul>
            <li>Do Not choose any special character.</li>
            <li>Choose only Alphabets.</li>
            <li>You can choose only once for this exam.</li>
            <li>You can't <strong>Alter</strong> it, once you lock.</li>
        </ul>
        <hr>
        <div class="main form-group">
            <div id="head" style="background-color: royalblue;">
                <p>Enter your own Choise Key for Selection of Option.</p>
            </div>
            <hr>
            <label for="option"><b>Option-1</b><input id="option-1" class="form-control" type="text" name="opt-key-1" autofocus ></label>
            <span id="op1"></span>
            <label for="option"><b>Option-2</b><input id="option-2" class="form-control" type="text" name="opt-key-2"></label>
            <span id="op2"></span>
            <label for="option"><b>Option-3</b><input id="option-3" class="form-control" type="text" name="opt-key-3"></label>
            <span id="op3"></span>
            <label for="option"><b>Option-4</b><input id="option-4" class="form-control" type="text" name="opt-key-4"></label>
            <span id="op4"></span>
            <br>
            <a class="btn btn-primary btn-lg" style="margin-top: 50px; margin-left: 200px;" href="Question-paper.php">Lock</a>
        </div>
        
    </div>
       <script>

           var keycode1,keycode2,keycode3,keycode4
            this.input = document.getElementById('option-1');
            input.addEventListener('keypress', function(e) {
                if(e.charCode==13)
            {
                return false;
            }
             keycode1 = `Key pressed: ${String.fromCharCode(e.keyCode)} \ncharCode: ${e.keyCode}`;
            // document.getElementById("op1").innerHTML=keycode1;
            console.log(keycode1);
            sessionStorage.setItem("option-1", e.keyCode);
            console.log(sessionStorage.getItem("option-1"));
            // console.localStorage.getItem
            });
            
            this.input = document.getElementById('option-2');
            input.addEventListener('keypress', function(e) {
                if(e.charCode==13)
            {
                return false;
            }
            keycode2 = `Key pressed: ${String.fromCharCode(e.keyCode)} \ncharCode: ${e.keyCode}`;
            // document.getElementById("op2").innerHTML=keycode2;
            console.log(keycode2);
            sessionStorage.setItem("option-2", e.keyCode);
            console.log(sessionStorage.getItem("option-2"));

            });

            this. input = document.getElementById('option-3');
            input.addEventListener('keypress', function(e) {
            if(e.charCode==13)
            {
                return false;
            }
            keycode3 = `Key pressed: ${String.fromCharCode(e.keyCode)} \ncharCode: ${e.keyCode}`;
            // document.getElementById("op3").innerHTML=keycode3;
            console.log(keycode3);
            sessionStorage.setItem("option-3", e.keyCode);
            console.log(sessionStorage.getItem("option-3"));

            });

            this. input = document.getElementById('option-4');
            input.addEventListener('keypress', function(e) {
            if(e.charCode==13)
            {
                return false;
            }
            keycode4 = `Key pressed: ${String.fromCharCode(e.keyCode)} \ncharCode: ${e.keyCode}`;
            // document.getElementById("op4").innerHTML=keycode4;
            console.log(keycode4);
            sessionStorage.setItem("option-4", e.keyCode);
            console.log(sessionStorage.getItem("option-4"));

            });


       </script>

     
</body>
</html>
