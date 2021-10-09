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
    <link rel="stylesheet" href="question.css"/>
</head>
<body>
    <div class="">
        <nav>
            <p>Institute Name/Organisation Name</p>
        </nav>
        <hr>
        <div class="main">
        <div class="content col-8">
            <h1>Question Area</h1>
        <hr>
        <div class="question">
            <h2>1</h2>
            <hr>
            <div class="question-box"> 
                <?php
                require 'connective.php';
                $query="SELECT *FROM optionsheet";

                $result= mysqli_query($connection,$query) or die ("database cant load");
                if(mysqli_num_rows($result)>0)
                {

                

                    while($rowforjoin=mysqli_fetch_assoc($result))
                    {
                        
                        
                        ?>
                        <p> <?php echo  $rowforjoin['question_id']?></p>
            </div>
        </div>
        <hr>

        <ul class="options">
            <li><input type="radio" name="select"class="option-1" ><?php echo  $rowforjoin['option1']?></li>
            <li><input type="radio" name="select"class="option-2><?php echo  $rowforjoin['option2']?></li>
            <li><input type="radio" name="select"class="option-3><?php echo  $rowforjoin['option3']?></li>
            <li><input type="radio" name="select"class="option-4><?php echo  $rowforjoin['option4']?></li>
        </ul>
        </div>
        <?php }
        }?>

        <div class="proter-region">
            <div class="video">
                <p>video-view</p>
            </div>''
            <hr>


            <div class="number-of-question">
                <div id="menu-outer">
                    <div class="table">
                      <ul id="horizontal-list">
                        <li class="no">1</li>
                        <li class="no">2</li>
                        <li class="no">3</li>
                        <li class="no">4</li>
                      </ul>
                    </div>
                  </div>
                
            </div>

        </div>
    </div>
    </div>



    <script type="text/javascript">
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
    </script>

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