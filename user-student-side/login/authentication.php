<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script> location.href='http://localhost/E-vidya-Minor-Project/Admin-side/Admin_pannel.html'; </script>";
        }  
        else{  
            // echo "<script> alert('Login failed. Invalid Username or Password.'); exit();</script>";  
            echo '<script language="javascript">';
            echo 'alert("Login failed. Invalid Username or Password. GO back And Relogin")';
            echo '</script>';
        }     
?>  