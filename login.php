<?php      

    include('connection.php');  
    $usermail = $_POST['email'];  
    $password = $_POST['pwd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $usermail);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM `login` WHERE  email = '$usermail' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> <a href= 'https://ankush297.github.io/Practice-/'> Start</a></center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h>";  
        }     
?>  