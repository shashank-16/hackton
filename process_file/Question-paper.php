<?php
session_start(); // session is god

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name"> -->
    <link rel="stylesheet" href="Question-paper..css" />


    <style>
        
        .f{
            height: 400px;
            width: 600px;
            margin: auto;
            border: 2px solid red;
            box-shadow: 1px -1px 8px 2px grey;
            border-radius: 10px;
            display: block;
        }
        .f p{
            font-size: 30px;
            text-align: center;
        }

        .done{
            display: flex;
            justify-content: center;
        }
    </style>
</head> 

<body>
    <div class="">
    <nav>
        <div class="navbar">
            <ul>
                <li>Name of Institute/University</li>
            </ul>
            <ul>
                <li>Student Name</li>
                <li>Roll Number</li>
                <li><span style="font-size: 40px;" class="material-icons orange600">face</span></li>
            </ul>
        </div>
    </nav>
        <!-- <hr> -->
        <div class="main" id="man">
            <div class="content col-8">
                <form action="correct_answer.php" method ="POST" class="form-group">
                    <h1>Question Area</h1>
                    <hr>
                    <div class="question">
                        <!-- <h2><?php echo $count ?></h2> -->

                        <hr>
                        <div class="question-box">
                            <?php
                            include 'connective.php';
                            $count=1;
                            // $count=$_POST['count'];
                            $query = "SELECT * FROM optionsheet where question_no ='{$count}' ";
                        
                            $result = mysqli_query($connection, $query) or die("database cant load");
                            if (mysqli_num_rows($result) > 0) {
                        
                               while ($rowforjoin = mysqli_fetch_assoc($result)) {

                            ?>
                                <label style="margin-left:10px" for="question"><textarea disabled style="height: 100%; width:100%; border:0px solid green; border-radius: 8px; resize: none;" name ="question" id= "questions"><?php echo  $rowforjoin['question_id'] ?></textarea></label>
                            
                        </div>
                    </div>
                    <hr>

                    <ul class="options">

                        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-1" name="select" class="option-1" value="<?php echo  $rowforjoin['option1'] ?>"><?php echo  $rowforjoin['option1'] ?></label></li>
                        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-2" name="select" class="option-1" value="<?php echo  $rowforjoin['option2'] ?>"><?php echo  $rowforjoin['option2'] ?></label></li>
                        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-3" name="select" class="option-1" value="<?php echo  $rowforjoin['option3'] ?>"><?php echo  $rowforjoin['option3'] ?></label></li>
                        <li style="list-style: none;"><label for="option1"><input type="radio" id="opt-4" name="select" class="option-1" value="<?php echo  $rowforjoin['option4'] ?>"><?php echo  $rowforjoin['option4'] ?></label></li>

                    </ul>

                    <?php  
                    }
                    }?>
                        

                    
                </form>

            </div>


            <div class="proter-region">
                <div class="video">
                    <p>video-view</p>
                </div>
                <hr>


                <div class="number-of-question" style="width: 300px;">
                    <div id="menu-outer">
                        <div class="table" style="display: flex; flex-grow: initial; justify-content: space-sround">
                            <ul id="horizontal-list" style="margin: 8px; margin-bottom: 10px">
                                <!-- Question panel -->
                                <li id="q-1" class="no">1</li>
                                <li id="q-2" class="no">2</li>
                                <li id="q-3" class="no">3</li>
                                <li id="q-3" class="no">4</li>
                                <li id="q-1" class="no">5</li>
                                <li id="q-2" class="no">6</li>
                                <li id="q-3" class="no">7</li>
                                <li id="q-3" class="no">8</li>
                                <li id="q-1" class="no">9</li>
                                <li id="q-2" class="no">10</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <button id=" full" class="btn btn-primary"> fullscreen</button>

            </div>
        </div>
    </div>
    <hr>
    <div class="container" id="finish" style="display: none;">
        <div class="f">
            <p>
                Thank You
            </p>
            <p>
                Exam-Sumitted Sucessfully!
            </p>
            <div class="done"><img src="completed-task.png" width="200px" height="200px"></div>
        </div>
    </div>






    <script>
       var  where = 1;
    </script>

    <script>



        sessionStorage.setItem('username:','user_name')

        function setCookie(name,value,day) {
            var expires = "";
            if (days) {
                var date = new Date();    
                now.setTime(now.getTime() + 1 * 3600 * 1000);
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        function eraseCookie(name) {   
            document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }



        $(document).ready(function() {
            $(document).keydown(function(e) {

                var $key = e.charCode || e.keyCode;

                if ($key == 65 || $key == 97) {
                    console.log("inside first");
                    
                    document.getElementById("opt-1").checked = true;
                    $op1=$('input[name="select"]:checked').val();
                    console.log($op1);
                    setCookie(where,"opt-1",2);
                    document.getElementById("opt-2").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-4").checked = false;
                    console.log("option-a selected");

                }

                if ($key == 66 || $key == 98) {
                    document.getElementById("opt-2").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-4").checked = false;
                    $op2=$('input[name="select"]:checked').val();
                    setCookie(where,"opt-2",2);
                    console.log($op2);
                    console.log("option-b selected");
                }

                if ($key == 67 || $key == 99) {
                    document.getElementById("opt-3").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-2").checked = false;
                    document.getElementById("opt-4").checked = false;
                    $op3=$('input[name="select"]:checked').val();
                    console.log($op3);
                    setCookie(where,"opt-3",2);
                    console.log("option-c selected");
                }

                if ($key == 68 || $key == 100) {

                    document.getElementById("opt-4").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-2").checked = false;
                    $op4=$('input[name="select"]:checked').val();
                    console.log($op4);
                    setCookie(where,"opt-4",2);
                    console.log("option-d selected");
                }

                // M button for next
                if ($key == 77 || $key == 109) {
                    
                   var  total_question=6;

                    where++;
                    $.ajax({
                        url: "Question-Render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                        }
                    })


                    $.ajax({
                        url: "option-Render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".options").html(data);
                            var ans1 = getCookie(where);
                            var ans2 = getCookie(where);
                            var ans3 = getCookie(where);
                            var ans4 = getCookie(where);
                            
                            
                            if(ans1 || ans2 || ans3 || ans4){
                                if(ans1=='opt-1'){
                                    document.getElementById("opt-1").checked = true;
                                    console.log(ans1);
                                }
                                if(ans2=='opt-2'){
                                    document.getElementById("opt-2").checked = true;
                                    console.log(ans2);
                                }
                                if(ans3=='opt-3'){
                                    document.getElementById("opt-3").checked = true;
                                    console.log(ans3);
                                }
                                if(ans4=='opt-4'){
                                    document.getElementById("opt-4").checked = true;
                                    console.log(ans4);
                                }
                            }
                        }
                    })

                    getCookie();

                    if(where<=total_question)
                    {
                        // console.log(where<=total_question);

                    $.ajax({
                        type: 'POST',
                        url: 'correct_answer.php',
                        data: { answer: $('input[name="select"]:checked').val(),
                        question: $('textarea[name= "question"]').val()},
                        // do these thing 
                        success: function(response) {
                        $('#result').html(response);
                        }
                  });
                }
                    

                    if(where>total_question){
                   
                        $.ajax({
                        type: 'POST',
                        url: 'exam_end.php' 
                        
                    });
                    document.getElementById("man").style.display="none";
                    document.getElementById("finish").style.display="block";
                    }
                }


                

                //n button for previous
                if ($key == 78 || $key == 110) {
                    where--;
                    $.ajax({
                        url: "Question-Render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                        }
                    })

            

                    $.ajax({
                        url: "option-Render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".options").html(data);
                            var ans1 = getCookie(where);
                            var ans2 = getCookie(where);
                            var ans3 = getCookie(where);
                            var ans4 = getCookie(where);
                            
                            
                            if(ans1 || ans2 || ans3 || ans4){
                                if(ans1=='opt-1'){
                                    document.getElementById("opt-1").checked = true;
                                    console.log(ans1);
                                }
                                if(ans2=='opt-2'){
                                    document.getElementById("opt-2").checked = true;
                                    console.log(ans2);
                                }
                                if(ans3=='opt-3'){
                                    document.getElementById("opt-3").checked = true;
                                    console.log(ans3);
                                }
                                if(ans4=='opt-4'){
                                    document.getElementById("opt-4").checked = true;
                                    console.log(ans4);
                                }
                            }
                        }
                    })

                    getCookie();
                } 



                //keys locked

                else if(e.escape){     //Esc key
                    console.log( "escape");
                    return false;
                }

                else if(e.altKey==true && e.keyCode==9){    //Alt key + Tab key
                    console.log("Window Switched");
                    return false;
                }

                else if(e.ctrlKey && e.altKey){      //Ctrl + Alt kay
                    console.log("ctrl+alt closed");
                    return false;
                    
                }
                else if(e.ctrlKey || e.metaKey || e.keyCode==32 || e.shiftKey){     //control || window || spacebar || shift
                    console.log( "control || window || spacebar || shift");
                    return false;
                }
                else if(e.keyCode==122 || e.keyCode==123){      //F11 or F12
                    console.log("f11 || f12");
                    return true;
                }
                else if(e.keyCode==27){     // for escape
                    console.log("i will not, I am escape!");
                    return false;
                }

                else if( e.altKey && (e.keyCode==9)){       //Alt + Tab key
                    alert("You are violating the protocol!");
                    return false;
                }
                else if (e.metaKey && e.shiftKey && e.keyCode === 83){      //window + shift + s 
                e.preventDefault();
                }

                else if(e.keyCode==13){     // Enter key
                    return true;
                }

                else
                {
                    e.preventDefault();
                }
                
            })

        })
    </script>

    <script type="text/javascript">
            if (document.layers) {
                //Capture the MouseDown event.
                document.captureEvents(Event.MOUSEDOWN);
            
                //Disable the OnMouseDown event handler.
                document.onmousedown = function () {
                    return false;
                };
            }
            else {
                //Disable the OnMouseUp event handler.
                document.onmousedown = function (e) {
                    if (e != null && e.type == "mousedown") {
                        //Check the Mouse Button which is clicked.
                        if (e.which == 1 || e.which==2) {
                            //If the Button is middle or right then disable.
                            return false;
                        }
                        
                    }
                };
            }
            
            //Disable the Context Menu event.
            document.oncontextmenu = function () {
                return false;
            };
    </script>

    <script>
        function toggleFullScreen() {
            console.log("full");
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } 
        else {
            if (document.exitFullscreen) {
            document.exitFullscreen();
            }
        }
        }
        window.onload="toggleFullScreen()";
    </script>
    <script>
        var i=4;
        $(window).on('focus', function () {

        });
        $(window).on('blur', function () {

            i--;
            alert("This is your"+" "+ i +" "+"Warning")
            if(i==0){
                alert("Test is finished");
                $.ajax({
                        type: 'POST',
                        url: 'exam_end.php'
                        
                });
                document.getElementById("man").style.display="none";
                document.getElementById("finish").style.display="block";
            }
        });
      </script>
</body>

</html>