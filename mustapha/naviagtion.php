<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navigation">
    <a href="">School Registration</a>
    <ul class="nav-menu">
        <li><a href="">SignUp</a></li>
        <li><a href="">LogIn</a></li>
    </ul>
</div>

<style>
    *{
        margin: 0;
        padding:0;
    }
    .navigation{
        display: flex;
        justify-content:space-around;
        align-items: center;
        background-color:#223ddd;
        height:70px;
        
    }

    .nav-menu{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        list-style: none;
    }

    a{
        text-decoration: none;
    }
</style>
</body>
</html>