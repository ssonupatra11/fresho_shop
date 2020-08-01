<html> 
      
<head> 
    <title> 
        How to call PHP function 
        on the click of a Button ? 
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        GeeksforGeeks 
    </h1> 
      
    <h4> 
        How to call PHP function 
        on the click of a Button ? 
    </h4> 
    <form method="post">
<?php
$url = "http://oculomotor-hazard.000webhostapp.com/view.php";

//call api
$json = file_get_contents($url,true);
$array=json_decode($json, true);
for ($x=0;$x<count($array);$x++){
    echo '<div><h3><img src="'.$array[$x]["image_path"].'" class="image"><h2>Fresh</h2><h4><input type="text" name="'.$array[$x]["name"].'" value="'.$array[$x]["name"].'"></h4><h2>'.$array[$x]["weights_measures"].'</h2><h2 class="mrp">MRP:Rs <s>'.$array[$x]["mrp"].'</s>&nbsp;&nbsp;&nbsp;<i>Rs<input type="text" name="'.$array[$x]["price"].'" value="'.$array[$x]["price"].'"</i></h2><input name='.$array[$x]["product_code"].' class="image_btn" id="bttn" type="submit" value="BUY NOW"></h3></div>' ;
}
    for ($x=0;$x<count($array);$x++){
        if(array_key_exists($array[$x]["product_code"], $_POST)) { 
        include('connection.php');  
        $product_code = $array[$x]["product_code"];  
        $name = $_POST[$array[$x]["name"]];
        $price = $_POST[$array[$x]["price"]];  
        
        //to prevent from mysqli injection  
        $product_code = mysqli_real_escape_string($con, $product_code);  
        $name = mysqli_real_escape_string($con, $name);  
        $price = mysqli_real_escape_string($con, $price);  
      
        $sql = "INSERT INTO sonu (product_code,name,price)
        VALUES('$product_code','$name','$price')";  
        mysqli_query($con, $sql);      
        }
    } 

    ?> 
  </form>
</head> 
  
</html> 