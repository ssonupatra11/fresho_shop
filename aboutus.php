<?php
session_start();
if(isset($_SESSION['uname'])){
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="about.css">
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
                    <a>
                        <li><i class="fa fa-shopping-cart"></i></li>
                    </a>
                </ul>
            </div>
        </nav>
        <h1>Fresho Shop</h1>
    </header>
    <div class="about">
        <h2>About Us</h2>
        <div>
            <h3>What is freshoshop.com?</h3>
            <p> freshoshop.com (Innovative Retail Concepts Private Limited) is India’s largest online food and grocery store. With over 18,000 products and over a 1000 brands in our catalogue you will find everything you are looking for. Right from fresh
                Fruits and Vegetables, Rice and Dals, Spices and Seasonings to Packaged products, Beverages, Personal care products, Meats – we have it all. Choose from a wide range of options in every category, exclusively handpicked to help you find
                the best quality available at the lowest prices. Select a time slot for delivery and your order will be delivered right to your doorstep, anywhere in Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Noida, Mysore, Coimbatore, Vijayawada-Guntur,
                Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore and Chandigarh Tricity You can pay online using your debit / credit card or by cash / sodexo on delivery. We guarantee on time
                delivery, and the best quality! <br>
                <br> Happy Shopping!
            </p>

            <h3> Why should I use freshoshop.com?</h3>
            <p> freshoshop.com allows you to walk away from the drudgery of grocery shopping and welcome an easy relaxed way of browsing and shopping for groceries. Discover new products and shop for all your food and grocery needs from the comfort of your
                home or office. No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags – get everything you need, when you need, right at your doorstep. Food shopping online is now easy as every product
                on your monthly shopping list, is now available online at freshoshop.com, India’s best online grocery store.
            </p>
        </div>
    </div>
    <footer>
        <div class="foot">
            <h5>Get Social With Us</h5>
            <i class="fa fa-instagram" aria-hidden="true"><a href="https://www.instagram.com">insta</a></i><i class="fa fa-facebook" aria-hidden="true"><a href="https://www.facebook.com">facebook</a></i><i class="fa fa-twitter" aria-hidden="true"><a href="https://www.twitter.in">twitter</a></i>
            <i class="fa fa-google-plus" aria-hidden="true"><a href="https://www.fresho.com">fresho</a></i>
            <h5>Our Email</h5>
            <div class="i_size">EMAIL:-<a href="https://www.gmail.com">freshoshop@gmail.com</a></div>
            <h5>Fresho Shop</h5>
            <a href="aboutus.html">About Us</a>&nbsp;&nbsp;&nbsp;
            <a href="policy.html">Privacy Policy</a>
            <h5>Cities We Serve</h5>
            <p>Bhubaneswar,Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Mysore, Coimbatore, Vijayawada-Guntur, Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore, Chandigarh Tricity, Jaipur,
                Bhopal, Noida-Ghaziabad, Kochi.</p>
            <h5>Help</h5>
            <a href="faqs.html">FAQs</a>&nbsp;&nbsp;&nbsp;
            <a href="#">Contact Us:-9787xxxxxx</a>
        </div>
    </footer>
</body>

</html>';
}
else{
    header("Location:login.html");
}
?>