<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form id="sendForm" action="index.html" method="post">
            <h1>Fill in the form below!</h1>
            <input type="text" id="username" name="username" placeholder="Username" class = "form-control"><br>
            <input type="email" id="email" name="email" placeholder="Email" class = "form-control"><br>
            <input type="phone" id="phone" name="phone" placeholder="Phone" class = "form-control"><br>
            <textarea id="message" name="message" rows="4" cols="80" placeholder="Message" class = "form-control"></textarea><br>
            <button type="button" id="sendButton" class="btn btn-success" name="button">Send</button>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/main.js"> </script>
    </div>
</body>
</html>
