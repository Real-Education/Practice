<?php      

    include('connection.php');  
    $username = $_POST['name'];  
    $usermail = $_POST['newemail'];  
    $password = $_POST['newpwd'];  
    
    
        //to prevent from mysqli injection  
        $usermail = stripcslashes($usermail);  
        $password = stripcslashes($password);  
        $usermail = mysqli_real_escape_string($conn, $usermail);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM `studentlogin` WHERE email = '$usermail' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Successfully Logged In.<a href= '#'> Start</a></center></h1>";  
        }  
        else{  
            echo "<h1> Resister first! <a href= 'index.html'> Resister</a></h>";  
        }     

        // sql to create table
    $sql0 = "INSERT INTO studentlogin (name, email, password) VALUES('$username', '$usermail', '$password')";
    
    
    
    if (mysqli_query($conn, $sql0)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql0 . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
      
?>  