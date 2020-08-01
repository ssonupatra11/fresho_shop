<?php      
    session_start();
    include('connection.php');  
    $user_name = $_POST['uname'];  
    $password = $_POST['upass'];
    $user_phone = $_POST['uphone'];  
    $user_address = $_POST['uaddr'];
    $user_gen = $_POST['ugen'];  
    $user_email = $_POST['uemail'];
      
        //to prevent from mysqli injection  
        $user_name = mysqli_real_escape_string($con, $user_name);  
        $password = mysqli_real_escape_string($con, $password);  
        $user_phone = mysqli_real_escape_string($con, $user_phone);  
        $user_address = mysqli_real_escape_string($con, $user_address);
        $user_gen = mysqli_real_escape_string($con, $user_gen);  
        $user_email = mysqli_real_escape_string($con, $user_email);  
  
        $_SESSION["user_name"]=$user_name;

        $sql = "INSERT INTO user (user_name,password,phone,address,gender,email)
        VALUES('$user_name','$password','$user_phone','$user_address','$user_gen','$user_email')";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);            
        if($count == 0){  
                header("Location:create_table.php");
            }
        else{  
            header("Location:register.html");
        }
?>
