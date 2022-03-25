<?php include 'logic.php';?> 
<!doctype html>
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
    <link rel="stylesheet" href="style2.css">
    <!-- Style -->
    <style>
        * {
            font-family: 'Satisfy', cursive;
            font-family: 'Signika', sans-serif;
            font-family: 'Source Serif Pro', serif;
            word-spacing: 0.2rem;
            font-size: 1.03rem;

        }

        .form-css {
            border-collapse: collapse;
            border: none;
            text-align: left;
            border: 2px solid black;
        }
    </style>
    <title>E-Vidya | Teacher Pannel</title>
</head>

<body>
    <div class="heading" style="background-color: #ffc107;height:3rem;width: 100vw;">
        <h2 style="text-align: center; padding: auto;">E-Vidya Admin Pannel</h2>
    </div>
    <!-- navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark nav_bar_back"
    style="position: sticky ;z-index: 1;top: 0px; margin: 0; ">
    <!-- navbar-dark bg-dark -->
    <div class="container-fluid">>
            <a class="navbar-brand" href="#">
                <img src="../images/icon.png" alt="" width="40" height="40">
            </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="http://localhost/E-vidya-Minor-Project/Admin-side/Admin_pannel.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" target="_blank">Publish Notes</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/E-vidya-Minor-Project/file-upload-download-2/">Publish Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/E-vidya-Minor-Project/file-upload-download-1/upload/">Upload History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Remove Notes</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>




    <!-- All form and related Contain here -->
    <div class="content" style="width:100%;">
        <div class="form ">
            <form enctype="multipart/form-data" action="" name="form"  method="post"
                  style="max-width:800px; height: 800px;margin:auto ;padding:55px;">
                <h2 style="color: #ffffff; text-align: center;">Publish Notes</h2>
                <div class="input-container p-2">
                    <i class="bi bi-card-heading icon"></i>
                    <input type="text" name="title" id="title" placeholder="Title" class="input-field box" />
                </div>

                <div class="input-container p-2">
                    <i class="bi bi-text-left icon"></i>
                    <input type="text" name="desc" id="desc" placeholder="Description" class="input-field" />
                    
                </div>


                <div class="input-group mb-2 input-container p-2">
                    <i class="bi bi-file-earmark-pdf-fill icon-file-input"></i>
                    <label class="input-group-text label-color" for="notesf">Upload Notes Pdf/.doc</label>
                    <input type="file" name="file" id="file" class="form-control"/>
                   
                </div>

              

                <div class="input-container p-2">
                    <input type="submit" name="submit" id="submit" value="Submit" class="submit-btn p-2"/>
                  
                </div>
            </form>
        </div>

    </div>


    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>



<footer class="py-3 footer-back">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted active">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Student Portal</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Who We are</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Hrushikeh, Inc</p>
</footer>



</html>

