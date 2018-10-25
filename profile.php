<!doctype html>
<html>
<head>

</head>

<body>

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
	
	<table>
	<?php
$j = file_get_contents('assets/data.json');
$j = json_decode($j, true);
	
	foreach($j as $k => $v){
		echo "<tr>
				<td><audio controls src=\"".$v["audio"]."\"></audio></td>
			</tr> "		
	;}
	?>
	</table>
	</body>
</html>