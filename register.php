<?php session_start();// Starting Session ?>
<!--start our HTML -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	 <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>REGISTRATION</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="assets/registerprocess.php" enctype ='multipart/form-data'>
<label>First Name
    <input type="text" name="fname" required><span class="error">*</span></label><br>
    <label>Last Name
        <input type="text" name="lname" required><span class="error">*</span>
</label><br>
<br>
<label>E-mail
	<input type="email" name="email" required><span class="error">*</span><br>
</label>
<br>
<label>User Name
	<input type="text" name="user" required><span class="error">*</span><br>
</label>
<br>
<label>Password
	<input type="password" name="pw" required><span class="error">*</span><br>
</label>
<br>
<button type="submit" name="submit" value="Submit">Sumbit</button>
</form>

</body>
</html>