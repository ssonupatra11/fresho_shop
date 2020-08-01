<?php      
    include('connection.php');  
    $id = $_POST['nam']; 
            //to prevent from mysqli injection  
        $id = stripcslashes($id);    
        $sql = "DELETE FROM sonu WHERE id=$id";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);            
        if($count == 1){  
            header("Location:cart_next.php");

        }
        else{
            header("Location:cart_next.php");
        }
?>  