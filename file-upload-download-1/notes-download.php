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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">
    <title>Download Notes</title>
</head>
<body >

<nav class="navbar navbar-expand-lg navbar-dark nav_bar_back" style="position: sticky ;z-index: 1;top: 0px;">
        <!-- navbar-dark bg-dark -->
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="../images/icon.png" alt="" width="40" height="40">
            </a>

            <a class="navbar-brand" href="#">E-Vidya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/E-vidya-Minor-Project/user-student-side/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Student Portal</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Important Links
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Library</a></li>
                            <li><a class="dropdown-item" href="#">NPTEL-Swayam</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/E-vidya-Minor-Project/user-student-side/students_care.html">Student Care</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/E-vidya-Minor-Project/user-student-side/who_we_are.html">Who we are ?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container border my-4 text-center heading p-2">
        <h4>Find Your Notes Below........!</h4>
    </div>
    

<div class="input-group mb-3 container">
  <span class="input-group-text bg-warning" id="basic-addon1"><i class="bi bi-search"></i></span>
  <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Titles...." title="Type in a name" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="container"><br>
    <table cellpadding="0" cellspacing="0" id="example" class="table table-hover table-bordered border-seconadary">
        <thead  class="table-dark">
            <tr class="text-center">
                <th>Title</th>
                <th>Description</th>
                <!-- <th>Files</th> -->
                <th>Action</th>	
            </tr>
        </thead>
        <?php
        $query=$conn->query("SELECT * FROM `upload` order by id desc");
        while($row=$query->fetch()){
            $name=$row['name'];
            $title=$row['title'];
            $desc=$row['desc'];


        ?>
        <tr class="text-center">
            <td> 
                &nbsp;<?php echo $title ;?>
            </td>
            <td> 
                &nbsp;<?php echo $desc ;?>
            </td>
            <!-- <td>
                &nbsp;<?php echo $name ;?>
            </td> -->
            <td class="text-center">
                <button class=" btn btn-success"><a id="anchor" href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
            </td>
        </tr>
        <?php }?>
    </table>
    </div>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>