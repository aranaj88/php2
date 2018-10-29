<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <?php require_once "nav.php" ?>
    
    <div>
    
    <h1>Johnny Playlist</h1>
    
        
    
    </div>
    <br>
    <div>
    <h2><a href="upload">Upload</a></h2>
    </div>
    
    <table>
         <td>Name</td>
        <td>Song</td>
        <td>Cover</td>
        
        
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
