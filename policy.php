<?php
session_start();
if(isset($_SESSION['uname'])){
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="policy.css">
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
        <h2> Privacy Policy</h2>
        <div>
            <h3>Personal Information</h3>
            <p> Innovative Retail Concepts Pvt Ltd (“IRCPL”) is the licensed owner of the brand freshoshop.com and the website freshoshop.com (”The Site”) from Supermarket Grocery Supplies Pvt Ltd (“SGSPL”). IRCPL respects your privacy. This Privacy Policy
                provides succinctly the manner your data is collected and used by IRCPL on the Site. As a visitor to the Site/ Customer you are advised to please read the Privacy Policy carefully. By accessing the services provided by the Site you agree
                to the collection and use of your data by IRCPL in the manner provided in this Privacy Policy.</p>
            <h3>What information is, or may be, collected form you?</h3>
            <p> As part of the registration process on the Site, IRCPL may collect the following personally identifiable information about you: Name including first and last name, alternate email address, mobile phone number and contact details, Postal code,
                Demographic profile (like your age, gender, occupation, education, address etc.) and information about the pages on the site you visit/access, the links you click on the site, the number of times you access the page and any such browsing
                information.
            </p>
            <h3>How do we Collect the Information ?</h3>
            <p> IRCPL will collect personally identifiable information about you only as part of a voluntary registration process, on-line survey or any combination thereof. The Site may contain links to other Web sites. IRCPL is not responsible for the privacy
                practices of such Web sites which it does not own, manage or control. The Site and third-party vendors, including Google, use first.
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