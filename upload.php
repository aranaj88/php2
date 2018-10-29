<!doctype html>
<html>

<head>

<link rel="stylesheet" href="css/style.css" type="text/css">


</head>

<body>

    <?php require_once "nav.php" ?>

    <form action="assets/process.php" method="post" enctype="multipart/form-data">
        <label>tracktitle: <br>
            <input type="text" name="title">
        </label><br><br>
        <label>audio: <br>
            <input type="file" accept="audio/*" name="audio">
        </label><br><br>
        <label>cover: <br>
            <input type="file" accept="image/*" name="image">
        </label><br><br>
        <input type="submit" value="Upload">
    </form>
    
</body>
</html>
