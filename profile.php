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
        <label>cover: <br>
        <input type="file" accept="image/*" name="image">
    </label><br><br>
        <label>audio: <br>
        <input type="file" accept="audio/*" name="audio">
    </label><br><br>
        <input type="submit" value="Upload">
    </form>

    <table id="lok">
        <th>
            <td>Name</td>
            <td>Song</td>
    
        </th>
        <?php
$j = file_get_contents('assets/data.json');
$j = json_decode($j, true);
	
	foreach($j as $k => $v){
		echo "<tr><br>
				<td class=\"l\">".$v["title"]."</td><br>
                
                <td class=\"l\"><audio controls src=\"".$v["audio"]."\"></audio></td><br>
                
                <td class=\"l\"><img src=\"".$v["image"]."\"></td><br>
			</tr>"		
	;}
	?>
    </table>
</body>

</html>
