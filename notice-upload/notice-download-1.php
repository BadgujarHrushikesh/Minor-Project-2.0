<?php include 'notice-Logic.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>E-Vidya | Upload Notice </title>

</head>
<body>
<?php foreach ($files as $file): ?>
<a href="notice-download.php?file_id=<?php echo $file['id'] ?>"> <?php echo $file['name']; ?></a> <br>
<?php endforeach;?>



</body>
</html