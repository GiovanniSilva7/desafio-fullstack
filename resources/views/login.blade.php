<!DOCTYPE html>
<html lang ='en'>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/login.css" rel="stylesheet" type="text/css" media="screen">
        <script scr = "/js/script.js"></script>
        <title>Document</title>
    </head>

    <body>
    <div class="login-container">
    <img src="/img/LOGO.png" alt="LOGO">
    <form method="post" action="{{ url('login') }}">
    @csrf 
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
</div>
</body>
</html>