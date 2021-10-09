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
    <link rel="stylesheet" href="Login.css"/>
</head>
<body>
  <nav>
      <p>Institute Name/Organisation Name</p>
  </nav>
  <hr>
  <div class="heading"> Online Exam Portal</div>
  <div class="main" >

      <form action="testtime.php" class="form-group" method="POST">
          <h2>Login</h2>

          <hr>

          <label for="UserName" class="inputs">Registration ID/Roll Number:</label>
          <input type="text" name= "username" style="outline: none;" class="form-control" placeholder="Username" autofocus>

          <label for="Password" class="inputs">Password:</label>
          <input type="text" name = "password" class="form-control" placeholder="Username">
          
          <div class="button-sub">

            <button type = "submit" name = "submit" class="btn btn-lg btn-primary">Login</button>
          </div>
      </form>
  </div>
</body>
</html>