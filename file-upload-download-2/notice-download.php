<?php include 'logic.php';?>
<!DOCTYPE html>
<html lang="en">
 
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- icon css using Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Satisfy&family=Signika:wght@500&family=Source+Serif+Pro:wght@600&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="notice-download.css">
    <title>Notice Section</title>
</head>
<body>

     <!-- Cards For Notice -->
     <div class="row m-2">
        <div class="col-sm-4">
            <div class="card text-white" style="background-color: rgb(65, 6, 73);height: 500px;">
                <div class="card-body">
                    <h5 class="card-header bg-transparent border-success text-warning">Notices</h5>
                    <div>
                        <marquee behavior="" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                            <ul>
                                <?php
                                $query=$conn->query("SELECT * FROM `upload-notice` order by id desc");
                                while($row=$query->fetch()){
                                    $name=$row['name'];
                                    $title=$row['title'];
                                ?>
                                <li>
                                    <a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>"><?php echo $title ;?></a>
                                </li> 
                                <?php }?>
                            </ul>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


