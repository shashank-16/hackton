<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation-Deletion</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font+Name">


    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        body{
            background-color: #112322;

            background-color: rgb(13,37,35);
        }


        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: white;
        }
        nav{
            background-color: black;
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


        .main{

            width: 100%;
            display: flex;
            justify-content: center;
        }

        .heading{
            text-align: center;
            font-size: 40px;
        }


        .fields
        {
            display: flex;
            padding: 10px 30px 10px 30px;
        }

        input{
            color: #b9b9bd!important;
            background: transparent;
            border-bottom: 5px solid black;
            outline: none !important;
            border-radius: 0% !important;
            border-width: 0 0 2px 0 !important;
            font-size: 30px;
        }



        form{
            margin: auto;
            width: 600px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 30px;
            background-color: white;
            box-shadow: 1px -1px 20px white;
        }

        h2{
            color: black;
            text-align: center;
        }

        label{
            font-size: 20px;
        }

        .button-sub{
            margin: auto;
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
    </style>

</head>
<body>
    
    <nav>
        <div class="navbar position-stickey">
            <ul>
                <li><a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="107.604" height="66.099" viewBox="0 0 107.604 66.099">
                        <g id="Group_2" data-name="Group 2" transform="translate(-60.482 -170.341)">
                          <path id="Path_197" data-name="Path 197" d="M29.207,55.339V7.686L1.537,0,21.816,3.191,15.792,0H45.347V66.1H15.792l6.023-3.226L0,66.1ZM52.265,0H76.091a43.551,43.551,0,0,1,12.3,1.537c4.612.769,7.686,3.074,10.76,6.149s4.612,6.149,6.149,10.76A46.22,46.22,0,0,1,107.6,33.818,37.233,37.233,0,0,1,105.3,47.653a28.942,28.942,0,0,1-6.917,11.529c-2.306,2.306-5.38,3.843-9.223,5.38A46.519,46.519,0,0,1,77.628,66.1H52.265Zm0,0V66.1l23.058-10.76c3.843,0,6.149,0,7.686-.769a12.388,12.388,0,0,0,5.38-3.074c1.537-1.537,2.306-3.074,3.843-6.149s1.537-6.917,1.537-12.3a37.444,37.444,0,0,0-1.537-11.529,16.736,16.736,0,0,0-3.843-6.149c-1.537-1.537-3.843-2.306-6.149-3.074-1.537-.769-5.38-.769-10.76-.769L52.265,0Z" transform="translate(168.086 236.44) rotate(180)" fill="#ffffff"/>
                        </g>
                      </svg>
                      
                </a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="">About</a></li>
                <li style="color: white;">Name of Institute/University</li>
            </ul>
            <li style="font-size: 30px; margin-right: 10px; color: white; list-style: none;">Teacher Name</li>
        </div>
    </nav>

    <div class="container">

    
        <div class="col-6 main" style="margin-top:100px;" >

            <form action="creation_table.php" class="form-group" method="POST">
                <h2>Create or Delete</h2>
    
                <hr>

                <input type="radio" name="check" value="createTable">
                <label for="create">Create Test paper</label>
                <br>

                <input type="radio" name="check" value="DeleteTable">
                <label for="delete">Delete Test paper</label>

                <div class="fields">
                <label for="table name" class="inputs">Enter table Name:</label>
                <input type="text" name = "Table_name" class="form-control" autocomplete="table_name" placeholder="Enter Table Name">
                </div>
                
                
                <div class="fields">
                <label for="no_of_question" class="inputs">Enter Total No. of Question:</label>
                <input type="text" name = "no_of_question" class="form-control" autocomplete="num-of-question" placeholder="Enter Total No. of Question">
                
                </div>
                
                <div class="button-sub">
                <button type = "submit" id="sub" name = "submit" class="btn btn-lg btn-success">Go For Upload Question</button>
                
                </div>
                <div class="button-sub">
                <button style="margin: 4px;" type = "submit" id="sub" name = "submit" class="btn btn-lg btn-primary">Delete Paper</button>

                </div>

                
            </form>

            <form action="" class="form-group" method="POST" style="height: 520px;">
                <h2>Create or Delete</h2>

                <select name="subject" id="subjects" class="form-control" style="padding:20px">
                    <option value="Select">Select</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Maths">Maths</option>
                    <option value="DSA">DSA</option>
                    <option value="TAFL">TAFL</option>
                </select>
                
                <div class="fields" style="padding: 20px;">
                    <label for="no_of_question" class="inputs">Enter Total No. of Question:</label>
                    <input type="text" name = "no_of_question" class="form-control" autocomplete="num-of-question" placeholder="Enter Total No. of Question">
                </div>
                
                <div class="button-sub">
                <button type = "submit" id="sub" name = "submit" class="btn btn-lg btn-success">SHOW</button>
                </div>
                
            </form>
        </div>
    </div>







    <div class="record">
        <table>
            <tr>

                <!-- Done by you -->

                <th>Candidate-Name</th>
                <th>Subject Name</th>
                <th>Score</th>
                <th>Subject Name</th>
                <th>Score</th>
                <th>Subject Name</th>
                <th>Score</th>
                <th>Subject Name</th>
                <th>Score</th>  
                <th>Subject Name</th>
                <th>Score</th>
                <th>Subject Name</th>
                <th>Score</th> 

            </tr>
            <tr>
                <!-- done by you -->
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            
            <!-- <th>Candidate Name</th> -->
        </table>
    </div>

    <style>

        .record{
            margin-top: 100px;
            display: flex;
        }



        table{
            box-shadow: 1px -1px 20px white;
            align-self: center;
            /* margin-left: 2%; */
            margin: auto;
            background-color: white;
            border-radius: 20px 20px 0 0 ;
            
        }

        th{
            border: 1px solid black;
            /* border-radius: 20px 20px 0 0 ; */
        }

        tr,th,td{
            padding: 10px;
            /* border: 2px solid black; */
            width: fit-content;
            text-align: center;
            color: black;
            font-size: 20px;
        }
    </style>

</body>
</html>