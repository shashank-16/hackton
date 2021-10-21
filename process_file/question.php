<?php
session_start(); // session is god

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name"> -->
    <link rel="stylesheet" href="question.css" />
</head> 

<body>
    <div class="">
        <nav>
            <p>Institute Name/Organisation Name</p>
        </nav>
        <hr>
        <div class="main">
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
                                <label for="question"></label><textarea disabled style="height: 100%; width:100%; border:2px solid green; border-radius: 8px; resize: none;" name ="question" id= "questions"><?php echo  $rowforjoin['question_id'] ?></textarea>
                            
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
                <button id=" full" onclick="toggleFullScreen()" class="btn btn-primary"> fullscreen</button>

            </div>
        </div>
    </div>



<!-- testingn -->



    <script>
        where = 1;
    </script>

    <script>



        sessionStorage.setItem('username:','user_name')

        // function setCookie(name) {
        //     var expires = "";
        //     document.cookie = name;
        // }

        // function getCookie() {

        //     var nameEQ = name;
        //     var val=document.getElementById("opt-1").value;
        //     console.log(val);
        //     var ca = document.cookie;
        //     if (ca == val) {
        //         document.getElementById("opt-1").checked = select.checked;
        //     }
        // }


        $(document).ready(function() {
            $(document).keydown(function(e) {

                var $key = e.charCode || e.keyCode;


                if ($key == 65 || $key == 97) {
                    console.log("inside first");
                    
                    document.getElementById("opt-1").checked = true;
                    $op1=$('input[name="select"]:checked').val();
                    console.log($op1);
                    // setCookie();
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
                    console.log("option-c selected");
                }

                if ($key == 68 || $key == 100) {

                    document.getElementById("opt-4").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-2").checked = false;
                    $op4=$('input[name="select"]:checked').val();
                    console.log($op4);
                    console.log("option-d selected");
                }

                // M button for next
                if ($key == 77 || $key == 109) {



                    where++;
                    $.ajax({
                        url: "question_render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                        }
                    })


                    $.ajax({
                        url: "render-2.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".options").html(data);
                        }
                    })

                    
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

                //n button for previous
                if ($key == 78 || $key == 110) {
                    where--;
                    $.ajax({
                        url: "question_render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                        }
                    })


                    $.ajax({
                        url: "render-2.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".options").html(data);
                        }
                    })

                    // getCookie();
                } 



                //keys locked

                else if(e.escape=true){
                    console.log( "control || Alter || ctrl + alt closed");
                    return false;
                }

                else if(e.ctrlKey && e.altKey)
                {
                    console.log("ctrl+alt closed");
                    return false;
                    
                }
                else if(e.ctrlKey || e.metaKey || e.keyCode==32 || e.shiftKey){
                    console.log( "control || window || spacebar || shift");
                    return false;
                }
                else if(e.keyCode==122 || e.keyCode==123){
                    console.log("f11 || f12");
                    return true;
                }
                else if(e.keyCode==27)
                {
                    console.log("i will not, I am escape!");
                    return false;
                }

                else if( e.altKey && (e.keyCode==9))
                {
                    alert("You are violating the protocol!");
                    return false;
                }
                // else if (e.metaKey==true && e.shiftKey==true && e.keyCode === 83)
                // {
                // e.preventDefault();
                // }

                else if(e.keyCode==13){
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
                document.onmouseup = function (e) {
                    if (e != null && e.type == "mouseup") {
                        //Check the Mouse Button which is clicked.
                        if (e.which == 0 && e.which == 1) {
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
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } 
        else {
            if (document.exitFullscreen) {
            document.exitFullscreen();
            }
        }
        }
    </script>
    <script>
        $(window).on('focus', function () {

        });
        $(window).on('blur', function () {
            alert("this is yor 1st warning");
        });
      </script>
   
</body>

</html>
