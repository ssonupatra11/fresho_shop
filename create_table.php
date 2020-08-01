<?php      
        session_start();
        include('connection.php');  
        $user_name = $_SESSION['user_name'];  
        echo $_SESSION['user_name'];
        //to prevent from mysqli injection  
        $user_name = mysqli_real_escape_string($con, $user_name);  
        $sql = "CREATE TABLE $user_name(id int NOT NULL AUTO_INCREMENT,product_code varchar(40),name varchar(40),price int,PRIMARY KEY (id))";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);            
        if($count == 0){  
                header("Location:login.html");
            }
        else{  
            header("Location:register.html");
        }
?>
