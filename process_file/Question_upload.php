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
    
    
</head>
<body>
    <div class="container">
        <form action="render_question.php" method="POST">
        <div class="Question form-group">
            <hr>
            <textarea name="question" style="border: 2px solid black;
            margin-top: 50px;" id="question" cols="100" rows="10"></textarea>
            <ul>
                <label for="option-1">options</label>
                <li><input type="text" name="option_1" id="" placeholder="opoption-1"></li>
                <label for="option-1">options</label>
                <li><input type="text" name="option_2" id="" placeholder="opoption-1"></li>
                <label for="option-1">options</label>
                <li><input type="text" name="option_3" id="" placeholder="opoption-1"></li>
                <label for="option-1">options</label>
                <li><input type="text" name="option_4" id="" placeholder="opoption-1"></li>
                <label for="option-1">answers</label>
                <li><input type="text" name="answer" id="" placeholder="answer"></li>
            </ul>
        </div>
        <button type="submit" name="submit" class="btn btn-lg btn-primary">Upload</button>
        </form>
        
        

    </div>
</body>
</html>
