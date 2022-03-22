<?php include 'logic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Notes</title>
</head>
<body>
    <h4>Find Your Notes Below........!</h4>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <table cellpadding="0" cellspacing="0" border="1"  id="example">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <!-- <th>Files</th> -->
                <th>Action</th>	
            </tr>
        </thead>
        <?php
        $query=$conn->query("select * from upload order by id desc");
        while($row=$query->fetch()){
            $name=$row['name'];
            $title=$row['title'];
            $desc=$row['desc'];


        ?>
        <tr>
            <td> 
                &nbsp;<?php echo $title ;?>
            </td>
            <td> 
                &nbsp;<?php echo $desc ;?>
            </td>
            <!-- <td>
                &nbsp;<?php echo $name ;?>
            </td> -->
            <td>
                <button class="alert-success"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
            </td>
        </tr>
        <?php }?>
    </table>

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