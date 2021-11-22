<?php
session_start(); // session is god

if(!empty($_SESSION["username"]))
{


?>

<script>
<<<<<<< HEAD
      var warning=20; // data will come from html side not from php 
=======
      var warning=0; // data will come from html side not from php 
>>>>>>> 9e0f887002cfc863db403ac75f04f707a718c76a
       let where = 1;


      var  timer= '<?=$_SESSION["time"]?>'; 
<<<<<<< HEAD
    
=======
>>>>>>> 9e0f887002cfc863db403ac75f04f707a718c76a
      setTimeout(function(){
          
                $.ajax({
                    type: 'POST',
                    url: 'exam_end.php'
<<<<<<< HEAD
                }),  document.getElementById("man").style.display="none";
                    document.getElementById("finish").style.display="block";

                    window.location.href="index.html";},60000*timer); //timer function for paper
    
      var  total_question= '<?=$_SESSION["no_question"]?>'; // need this thing god like power
      
=======
                });
                
                document.getElementById("man").style.display="none";
                document.getElementById("finish").style.display="block";
                window.location.href="index.html";}

                ,60000*timer);

        setTimeout(function(){
            $(document).ready(function(){
                $(".sweet-alert").css({"visibility":"visible"});
                // $(".sweet-alert").animate({"visibility":"hidden"},10000);
            })
        },60000*(timer-1));
    
      var  total_question= '<?=$_SESSION["no_question"]?>'; // need this thing god like power
    //   console.log("Time hu mai:"+timer);
>>>>>>> 9e0f887002cfc863db403ac75f04f707a718c76a
    
</script>



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
<!-- <script type ="text/javascript" src =main.js > </script> -->
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

        @media print {
 
            html,
            body {
                display: none;
            }
        }
    </style>
</head> 

<body id="bdy" onmouseleave="mouseLeave()" style="visibility: visible;">
    <div class="">
    <nav>
        <div class="navbar" style="color: white;">
            <ul>
            <?php
            require 'connective.php';

            $profile_card = "SELECT *FROM user_info WHERE `user_name`='{$_SESSION["username"]}'";
            $query_profile=mysqli_query($connection,$profile_card);
            if(mysqli_num_rows($query_profile)>0)
                {   
                    while($rowler=mysqli_fetch_assoc($query_profile))
                    {
            ?>
                <li>Name of Institute/University</li>
            </ul>
            <ul>
                <li><?php echo $rowler["user_name"];?></li>
                <li>  <?php echo $rowler["student_Id"];?>   </li>
                <li><span style="font-size: 40px;" class="material-icons orange600">face</span></li>
                <?php
                }
            }
            ?>
            </ul>
        </div>
    </nav>
        <!-- <hr> -->
        <div class="main" id="man">
            <div class="content col-8">
                <div class="sweet-alert" style="background-color: tomato; color:white; padding-left:10px; visibility:hidden;">
                    Only 5 mins left!
                </div>
                <form action="correct_answer.php" method ="POST" class="form-group">
                    <h1>Question Area</h1>
                    <hr>
                    <div class="question">
                        <div class="question-box">

                        </div>
                        <ul class="options">
       
                        </ul>
                    </div>
                    
                </form>
                <div class="warn" style="height: 200px; width: 500px; visibility: hidden; margin: auto; position: sticky;">
                    <h1 style="color: red;">Don't do this again! Otherwise your Exam will submit AutoMatically</h1>
                </div>
                

            </div>


            <div class="proter-region">
<<<<<<< HEAD
                <div class="video" >
                    <?php include 'video.php';
               ?>

               <br>
               <br>
               <br>
                    <p id ="counter"></p>
                    <br>
                </div>
                <hr>

                <div class="number-of-question" style="width: 300px;">
=======
                <div class="video">
                    <p>VIDEO-VIEW</p>
                    <p style="border: 5px solid #87CEEB;" id ="counter"></p>
                    <!-- <br> -->
                </div>
                <hr>


                <div class="number-of-question" style="width: 300px; margin-top: 50px;">
>>>>>>> 9e0f887002cfc863db403ac75f04f707a718c76a
                    <div id="menu-outer">
                        <div id="tt" class="table" style="display: flex; flex-grow: initial; justify-content: space-sround">
                            <ul id="horizontal-list" style="margin: 8px; margin-bottom: 10px">
                                <!-- Question panel -->
                                
                                    <script>
                                        var cont = document.getElementById('tt');
                                        var ul = document.createElement('ul');
                                        ul.setAttribute('style', 'padding: 0; margin: 0;');
                                        ul.setAttribute('id', 'theList');
                                        
                                        for (i = 1; i <= total_question; i++) {
                                            var li = document.createElement('li');
                                            li.innerHTML = i;
                                            li.setAttribute('style', 'display: inline-block; margin:8px; padding:9px; background-color:red; color:white;');
                                            li.setAttribute('id','thelist'+i);
                                            ul.appendChild(li);
                                        }

                                        cont.appendChild(ul);
                                    </script>
                            </ul>
                        </div>
                    </div>
                </div>
                

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



        sessionStorage.setItem('username:','user_name')

        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days+60*60*60*24));
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
        
        document.getElementById('counter').innerText=where+"/"+total_question;

        window.addEventListener("load",()=>{

        


            $.ajax({
                url: "Question-Render.php",
                type: "POST",
                data: {
                count: where
                },
                success: function(data) {
                    $(".question-box").html(data);
                }
            });
                    
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
            });  
        });

       
           

        $(document).ready(function() {
            $(document).keydown(function(e) {

                var $key = e.keyCode;
                console.log("$key: " + $key)
                var key1 = sessionStorage.getItem("option-1");
                var key2 = sessionStorage.getItem("option-2")
                var key3 = sessionStorage.getItem("option-3")
                var key4 = sessionStorage.getItem("option-4")

                if ($key == key1-32) {
                    // console.log();

                    
                    document.getElementById("opt-1").checked = true;
                    $op1=$('input[name="select"]:checked').val();
                    console.log($op1);
                    setCookie(where,"opt-1",1);
                    document.getElementById("opt-2").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-4").checked = false;
                    console.log("option-a selected");

                }

                if ($key == key2-32) {


                    document.getElementById("opt-2").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-4").checked = false;
                    $op2=$('input[name="select"]:checked').val();
                    setCookie(where,"opt-2",1);
                    console.log($op2);
                    console.log("option-b selected");
                }


                if ($key == key3-32) {
 

                    document.getElementById("opt-3").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-2").checked = false;
                    document.getElementById("opt-4").checked = false;
                    $op3=$('input[name="select"]:checked').val();
                    console.log($op3);
                    setCookie(where,"opt-3",1);
                    console.log("option-c selected");
                }

                if ($key == key4-32) {


                    document.getElementById("opt-4").checked = true;
                    document.getElementById("opt-1").checked = false;
                    document.getElementById("opt-3").checked = false;
                    document.getElementById("opt-2").checked = false;
                    $op4=$('input[name="select"]:checked').val();
                    console.log($op4);
                    setCookie(where,"opt-4",1);
                    console.log("option-d selected");
                }
              

                // -> button for next
                if ($key == 39) {

                    if(where<=total_question)
                    {
                            $.ajax({
                            type: 'POST',
                            url: 'correct_answer.php',
                            data: { answer: $('input[name="select"]:checked').val(),
                            question: $('textarea[name= "question"]').val(),count: where },
                            
                            // do these thing 
                            success: function(response) {
                            $('#result').html(response);
                            }
                        })
                        
                        if(where==total_question)
                        {
                            $.ajax({
                                type: 'POST',
                                url: 'exam_end.php', 
                                
                            })
                            document.getElementById("man").style.display="none";
                            document.getElementById("finish").style.display="block";

                      
                            setTimeout(function(){ window.location.href="index.html";},10000);
                        }
                            
                          $.ajax({
                            type:'POST',
                            url:'color_changing.php',
                            data:{count:where },
                      
                            success:function(data)
                            {
                                numb=where-1;
                                // console.log("these"+numb+where+data);
                                $('#thelist'+numb).html(data);
                              
                            }

                         })
                                           
                   
                    }
                    
                    where++;
                    document.getElementById('counter').innerText=where +"/"+ total_question;
                    
                    
                    $.ajax({
                        url: "Question-Render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                        }
                    });


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
                    });

                    getCookie();
           
                }


                

                // <- button for previous
                if ($key == 37) {
                    if(where>=1)
                    {
                        where--;
                        if(where!=0)
                        {
                        
                        
                        document.getElementById('counter').innerText=where +"/"+ total_question;

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
                     else{
                         where++;
                     }
                    }

                } 



                //keys locked

                else if(e.metaKey && e.shiftKey && e.keyCode===83)
                {
                    console.log("win");
                    return false;
                    console.log("not");
                }

                else if(e.keyCode==38 || e.keyCode==40){ //arrow button;
                    return true;
                }

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
                    return false;
                }
                else if(e.keyCode==27){     // for escape
                    console.log("i will not, I am escape!");
                    return false;
                }

                else if( e.altKey && (e.keyCode==9)){       //Alt + Tab key
                    alert("You are violating the protocol!");
                    return false;
                }

                // Prevent Ctrl+a = disable select all
                // Prevent Ctrl+u = disable view page source
                // Prevent Ctrl+s = disable save
                if (e.ctrlKey && (e.keyCode === 85 || e.keyCode === 83 || e.keyCode ===65 )) {
                return false;
                }
                // Prevent Ctrl+Shift+I = disabled debugger console using keys open
                else if (e.ctrlKey && e.shiftKey && e.keyCode === 73)
                {
                return false;
                }

                else if(e.keyCode==13){     // Enter key
                    return false;
                }

                else
                {
                    e.preventDefault();
                }
                
            })

        })
    </script>

    <script>
        document.addEventListener("keyup", function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which;
                    if (keyCode == 44) {
                        stopPrntScr();
                    }
                });
        function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 100);

        
       
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
        window.addEventListener("load",()=>{
            toggleFullScreen();
        })

       
    </script>
    <script>
        
      
        $(window).on('focus', function () {
            function mouseLeave() {
            alert("warning! Don't Do this again");
        }

        });
        $(window).on('blur', function () {

            warning++;
            alert("This is your"+" "+warning +" "+"Warning")
            if(warning==5){
                alert("Test is finished");
                $.ajax({
                    type: 'POST',
                    url: 'exam_end.php'
                });
                document.getElementById("man").style.display="none";
                document.getElementById("finish").style.display="block";
                setTimeout(function(){ window.location.href="index.html";},10000);
            }
        });
      </script>

      <script>
            $(document).ready(function(){
                $("#bdy").mouseleave(function(){
                    $(".warn").css({"visibility":"visible"});
                })
                $("#bdy").mouseenter(function(){
                    $(".warn").css({"visibility":"hidden"});
                })
            })
      </script>
</body>
<?php
}
else{
    session_destroy();
    echo("trying to be oversmart plz do it proper then come to page hehehee...");
}
?>
</html>
