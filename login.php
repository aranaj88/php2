<?php session_start(); ?>

<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <?php require_once "nav.php"; ?>

    <!-- Continue HTML -->
    <h2>Login</h2>
    <form method="post" action="assets/longinprocess.php">
        <label>E-mail
	<input type="email" name="email"  value="" required><br>
</label>
        <br>
        <label>Password
	<input type="password" name="pw" value="" required><br>
</label>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>



</body>

</html>
