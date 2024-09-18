<?php      
    include('connection.php');  
    $Username = $_POST['User'];  
    $password = $_POST['pass'];  
      
         
        $Username = stripcslashes($Username);  
        $password = stripcslashes($password);  
        $Username = mysqli_real_escape_string($con, $Username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$Username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid Username or password.</h1>";  
        }     
?>