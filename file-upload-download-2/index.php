<?php include 'logic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice-upload</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" name="form" method="post">
		Select File <br>
            <input type="text" name="title" id="title" placeholder="Title" /></td><br>
			<input type="file" name="file" id="file" /></td><br> <br>     
			<input type="submit" name="submit" id="submit" value="Submit" />
	</form>
</body>
</html>