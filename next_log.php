<?php      
session_start();
    include('connection.php');  
    $username = $_POST['uname'];  
    $password = $_POST['upass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from user where user_name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);            
        if($count == 1){  
            $_SESSION['uname']=$row['user_name'];
            $_SESSION['id']=$row['id'];
            header("Location:home.php");
        }  
        else{  
            if (is_null($row['user_name'])){
                header("Location:register.html");
            }
            else{
            header("Location:login.html");
            }
        }     
?>  