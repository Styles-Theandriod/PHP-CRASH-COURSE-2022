<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php include('navigation.php')  ?>

<header>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
</header>
<h3>Georgia, Tbilisi 5&#8451;</h3>
<h1>Welcome to my cool website</h1>


<?php
    session_start();
?>

<?php

    $_SESSION['ourimage'] = '<img src=".">'

?>






<form action="./process.php" method="post">
    <input type="text" name="name">
    <input type="email" name="Email">       
    
    <input type="password" name="password">
</form>


<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<footer>
    Copyright &copy; 2020 TheCodeholic
</footer>
</body>
</html>