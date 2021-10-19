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


                        </div>
                    </div>
                    <hr>

                    <ul class="options">

                    </ul>

                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Next</button>
                </form>

            </div>


            <div class="proter-region">
                <div class="video">
                    <p>video-view</p>
                </div>
                <hr>


                <div class="number-of-question">
                    <div id="menu-outer">
                        <div class="table">
                            <ul id="horizontal-list">
                                <!-- Question panel -->
                                <li id="q-1" class="no">1</li>
                                <li id="q-2" class="no">2</li>
                                <li id="q-3" class="no">3</li>
                                <li id="q-3" class="no">4</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



<!-- testingn -->

    <script>
        $(document).ready(function(){
            $("#q-2").click(function(){


                where=2;
                    $.ajax({
                        url: "question_render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                            // $(".options").html(data);
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

            })


            $("#q-1").click(function(){


                where=1;
                    $.ajax({
                        url: "question_render.php",
                        type: "POST",
                        data: {
                            count: where
                        },
                        success: function(data) {
                            $(".question-box").html(data);
                            // $(".options").html(data);
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

                })
        })
    </script>


    <script>
        where = 1;
    </script>

    <script>

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
            $(document).keypress(function(e) {

                var $key = e.charCode || e.keyCode;


                if ($key == 65 || $key == 97) {
                    console.log("inside first");
                    
                    $("#opt-1").attr("checked", true);
                    var var1 = document.querySelector('input[name="select"]:checked').innerHTML;
                    console.log(var1);
                    // setCookie(var1);
                    $("#opt-2").removeAttr("checked", true);
                    $("#opt-3").removeAttr("checked", true);
                    $("#opt-4").removeAttr("checked", true);
                    console.log("option-a selected");
                    var inner=document.getElementById("opt-1").innerHTML;
                    console.log(inner);

                }

                if ($key == 66 || $key == 98) {
                    $("#opt-1").removeAttr("checked", true);
                    $("#opt-2").attr("checked", true);
                    $("#opt-3").removeAttr("checked", true);
                    $("#opt-4").removeAttr("checked", true);
                    console.log("option-b selected");
                }

                if ($key == 67 || $key == 99) {
                    $("#opt-1").removeAttr("checked", true);
                    $("#opt-2").removeAttr("checked", true);
                    $("#opt-3").attr("checked", true);
                    $("#opt-4").removeAttr("checked", true);
                    console.log("option-c selected");
                }

                if ($key == 68 || $key == 100) {

                    $("#opt-1").removeAttr("checked", true);
                    $("#opt-2").removeAttr("checked", true);
                    $("#opt-3").removeAttr("checked", true);
                    $("#opt-4").attr("checked", true);
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
                            // $(".options").html(data);
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
                else {
                    e.preventDefault();
                }


                function getKeyCodeEvent(ev) {
                    var code = (document.all) ?
                        event.keyCode : ev.which;

                    var alt = (document.all) ?
                        event.altKey :
                        ev.modifiers & Event.ALT_MASK;

                    if (document.all) {

                        // Example ALT+F4
                        if (alt && code == 115) {
                            try {
                                // Your requirements
                                console.log("close");
                            } catch (e) {}
                        }
                    }
                }
            })

        })
    </script>


    <!-- <script>
    $(document).ready(function(){
        $(document).keypress(function(e){
            var $key = e.charCode || e.keyCode;
            if($key==377 || $key==375)
            {
                // $where++;
                console.log("hii")

            }
        })
    })
</script> -->

    <!-- <script>
    document.onkeydown = function (e) {
        return false;
    }   
</script> -->


    <!-- <script type="text/javascript">
      document.onkeydown = function (e) {
        e.preventDefault();
      };
    </script>

    <script type="text/javascript">
      document.onkeydown = function (e) {
        var key = e.charCode || e.keyCode;
        if (key == 65 || key == 66 || key == 67 || key == 68) {
            var option = document.getElementsByClassName("options");
            options.addEventListener("")

          if (key == 65) {

          } else if (key == 66) {
          } else if (key == 67) {
          } else {
          }
          // enter key do nothing
        } else if (key == 37 || key == 38 || key == 39 || key == 40) {
        } else {
          e.preventDefault();
        }
      };
    </script> -->

    <!-- <script type="text/javascript">
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
        </script> -->
</body>

</html>