<?php
session_start();
if (isset($_SESSION['uname']))
{
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <header>
        <nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <a href="home.php">
                        <li>Home</li>
                    </a>
                    <a href="vegetable.php">
                        <li>Vegetable</li>
                    </a>
                    <a href="about.html">
                        <li>About</li>
                    </a>
                    <a>
                        <li>Welcome '.$_SESSION['uname'].'!</li>
                    </a>
                    <a href="logout.php">
                        <li>Logout</li>
                    </a>
                    <a href="cart_next.php">
                        <li><i class="fa fa-shopping-cart"></i></li>
                    </a>
                </ul>
            </div>
        </nav>
        <h1>Fresho Shop</h1>
        <div align="center">
            <form>
                <input class="search_bar" placeholder="Search fruits or vegetables" onkeyup="myFunction()" type="search" id="gsearch" name="gsearch">
            </form>
        </div>
    </header>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="http://oculomotor-hazard.000webhostapp.com/img/p100.png">
        </div>

        <div class="mySlides fade">
            <img src="http://oculomotor-hazard.000webhostapp.com/img/p101.png">
        </div>

        <div class="mySlides fade">
            <img src="http://oculomotor-hazard.000webhostapp.com/img/p102.png">
        </div>
    </div>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <h6>VEGETABLES</h6>
    <form method="post">
<div id="box" class="grid div">';
$val=$_SESSION['uname'];
$url = "http://oculomotor-hazard.000webhostapp.com/view.php";

//call api
$json = file_get_contents($url,true);
$array=json_decode($json, true);
for ($x=0;$x<7;$x++){
    if ($array[$x]["type"]=='VEGITABLE'){
    echo '<div><h3><img src="'.$array[$x]["image_path"].'" class="image"><h2>Fresh</h2><h4>'.$array[$x]["name"].'</h4><h2>'.$array[$x]["weights_measures"].'</h2><h2 class="mrp">MRP:Rs <s>'.$array[$x]["mrp"].'</s>&nbsp;&nbsp;&nbsp;<i>Rs'.$array[$x]["price"].'</i></h2><input name='.$array[$x]["product_code"].' class="image_btn" type="submit" value="BUY NOW"></h3></div>' ;
}
if(array_key_exists($array[$x]["product_code"], $_POST)) { 
        include('connection.php');  
        $product_code = $array[$x]["product_code"];  
        $name = $array[$x]["name"];
        $price =$array[$x]["price"];  
        
        //to prevent from mysqli injection  
        $product_code = mysqli_real_escape_string($con, $product_code);  
        $name = mysqli_real_escape_string($con, $name);  
        $price = mysqli_real_escape_string($con, $price);  
      
        $sql = "INSERT INTO $val (product_code,name,price)
        VALUES('$product_code','$name','$price')";  
        mysqli_query($con, $sql);      
        }
}
echo '</div>    <a href="vegetable.html">
        <h6>View More</h6>
    </a>
    <h6>FRUITS</h6>
    <div id="box1" class="grid div">';

$url = "http://oculomotor-hazard.000webhostapp.com/view.php";

//call api
$json = file_get_contents($url,true);
$array=json_decode($json, true);
for ($x=0;$x<7;$x++){
    if ($array[$x]["type"]=='FRUITS'){
    echo '<div><h3><img src="'.$array[$x]["image_path"].'" class="image"><h2>Fresh</h2><h4>'.$array[$x]["name"].'</h4><h2>'.$array[$x]["weights_measures"].'</h2><h2 class="mrp">MRP:Rs <s>'.$array[$x]["mrp"].'</s>&nbsp;&nbsp;&nbsp;<i>Rs'.$array[$x]["price"].'</i></h2><input name='.$array[$x]["product_code"].' class="image_btn" type="submit" value="BUY NOW"></h3></div>' ;
}
        if(array_key_exists($array[$x]["product_code"], $_POST)) { 
        include('connection.php');  
        $product_code = $array[$x]["product_code"];  
        $name = $array[$x]["name"];
        $price =$array[$x]["price"];  
        
        //to prevent from mysqli injection  
        $product_code = mysqli_real_escape_string($con, $product_code);  
        $name = mysqli_real_escape_string($con, $name);  
        $price = mysqli_real_escape_string($con, $price);  
      
        $sql = "INSERT INTO $val (product_code,name,price)
        VALUES('$product_code','$name','$price')";  
        mysqli_query($con, $sql);      
        }
 }
echo '</div>
    <a href="vegetable.html">
        <h6>View More</h6>
    </a></form>
<footer>
            <div class="foot">
            <h5>Get Social With Us</h5>
        <i class="fa fa-instagram" aria-hidden="true"><a href="https://www.instagram.com">insta</a></i><i class="fa fa-facebook" aria-hidden="true"><a href="https://www.facebook.com">facebook</a></i><i class="fa fa-twitter"
            aria-hidden="true"><a href="https://www.twitter.in">twitter</a></i><i class="fa fa-google-plus" aria-hidden="true"><a href="https://www.fresho.com">fresho</a></i>
        <h5>Our Email</h5>
            <div class="i_size">EMAIL:-<a href="https://www.gmail.com">freshoshop@gmail.com</a></div>
        <h5>Fresho Shop</h5>
<a href="aboutus.html">About Us</a>&nbsp;&nbsp;&nbsp;
    <a href="policy.html">Privacy Policy</a>
<h5>Cities We Serve</h5>
<p>Bhubaneswar,Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Mysore, Coimbatore, Vijayawada-Guntur, Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore, Chandigarh Tricity, Jaipur, Bhopal, Noida-Ghaziabad, Kochi.</p>
<h5>Help</h5>
<a href="faqs.html">FAQs</a>&nbsp;&nbsp;&nbsp;
<a href="#">Contact Us:-9787xxxxxx</a>
</div>
    </footer>
        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        function myFunction() {
            var input, filter, ul, ul1, li1, li, a, i, txtValue;
            input = document.getElementById("gsearch");
            filter = input.value.toUpperCase();
            ul = document.getElementById("box");
            li = ul.getElementsByTagName("div");
            ul1 = document.getElementById("box1");
            li1 = ul1.getElementsByTagName("div");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("h4")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
            for (i = 0; i < li1.length; i++) {
                a = li1[i].getElementsByTagName("h4")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li1[i].style.display = "";
                } else {
                    li1[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>';
}
else{
    header("Location:login.html");
}
?>