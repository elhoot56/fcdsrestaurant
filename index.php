<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="add.php" method="post">
        <h1>Sign up</h1>
        <label for="email">First Name</label>
        <input type="text" name="FirstName" id="email" required />
        <label for="email">Last Name</label>
        <input type="text" name="LastName" id="email" required />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
        <button>Sign Up!</button>

        <!-- .........///sign-up///.......... -->

      </form>
<?php 
    $connection = new mysqli("localhost","root","","signup");

    ?>
</body>
</html>