<?php
session_start();
if(isset($_SESSION['uname'])){
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="faq.css">
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
        <h2>FAQs</h2>
        <div>
            <p> Kindly check the FAQ below if you are not very familiarwith the functioning of this website. If your query is of urgent nature and is different from the set of questions then do write to us at customerservice@freshoshop.com or call us on 1860
                123 1000 between 7 am & 10 pm on all days including Sunday to get our immediate help.
            </p>
            <h4> Registration</h4>
            <h3> How do I register?</h3>
            <p> You can register by clicking on the "Register" link at the top right corner of the homepage. Please provide the information in the form that appears. You can review the terms and conditions, provide your payment mode details and submit the
                registration information.
            </p>
            <h3> Are there any charges for registration?</h3>
            <p> No. Registration on freshoshop.com is absolutely free.</p>

            <h3> Do I have to necessarily register to shop on freshoshop?</h3>
            <p> You can surf and add products to the cart without registration but only registered shoppers will be able to checkout and place orders. Registered members have to be logged in at the time of checking out the cart, they will be prompted to do
                so if they are not logged in.
            </p>
            <h3> Can I have multiple registrations?</h3>
            <p> Each email address and contact phone number can only be associated with one freshoshop account.
            </p>
            <h3> Can I add more than one delivery address in an account?</h3>
            <p> Yes, you can add multiple delivery addresses in your freshoshop account. However, remember that all items placed in a single order can only be delivered to one address. If you want different products delivered to different address you need
                to place them as separate orders.</p>
            <h3>
                Can I have multiple accounts with same mobile number and email id?</h3>
            <p> Each email address and phone number can be associated with one freshoshop account only.
            </p>
            <h3> Can I have multiple accounts for members in my family with different mobile number and email address but same or common delivery address?</h3>
            <p> Yes, we do understand the importance of time and the toil involved in shopping groceries. Up to three members in a family can have the same address provided the email address and phone number associated with the accounts are unique.
            </p>
            <h3> Can I have different city addresses under one account and still place orders for multiple cities?</h3>
            <p> Yes, you can place orders for multiple cities.
            </p>
            <h4> Account Related</h4>
            <h3> What is My Account?</h3>
            <p> My Account is the section you reach after you log in at freshoshop.com. My Account allows you to track your active orders, credit note details as well as see your order history and update your contact details.
            </p>
            <h3>
                How do I reset my password?</h3>
            <p> You need to enter your email address on the Login page and click on forgot password. An email with a reset password will be sent to your email address. With this, you can change your password. In case of any further issues please contact our
                customer support team.</p>
            <h3>
                What are credit notes & where can I see my credit notes?</h3>
            <p> Credit notes reflect the amount of money which you have pending in your freshoshop account to use against future purchases. This is calculated by deducting your total order value minus undelivered value. You can see this in "My Account" under
                credit note details.
            </p>
            <h3> What is My Shopping List?</h3>
            <p> My Shopping List is a comprehensive list of all the items previously ordered by you on freshoshop.com. This enables you to shop quickly and easily in future.
            </p>
            <h4> Payment</h4>
            <h3> What are the modes of payment?</h3>
            <p> You can pay for your order on freshoshop.com using the following modes of payment:a. Cash on deliveryb. Credit and debit cards (VISA / Mastercard / Rupay)c. Sodexo passes on delivery (only for food items)
            </p>
            <h3>Are there any other charges or taxes in addition to the price shown? Is VAT added to the invoice?</h3>
            <p> There is no VAT. However, GST will be applicable as per Government Regulizations.
            </p>
            <h3> Is it safe to use my credit/ debit card on freshoshop?</h3>
            <p> Yes it is absolutely safe to use your card on freshoshop.com. A recent directive from RBI makes it mandatory to have an additional authentication pass code verified by VISA (VBV) or MSC (Master Secure Code) which has to be entered by online
                shoppers while paying online using visa or master credit card. It means extra security for customers, thus making online shopping safer.
            </p>
            <h3> What is the meaning of cash on delivery?</h3>
            <p> Cash on delivery means that you can pay for your order at the time of order delivery at your doorstep.
            </p>
            <h3> If I pay by credit card how do I get the amount back for items not delivered?</h3>
            <p> If we are not able to delivery all the products in your order and you have already paid for them online, the balance amount will be refunded to your freshoshop account as store credit and you can use it at any time against your future orders.
                Should you want it to be credited to your bank account please contact our customer support team and we will refund it back on to your card.
            </p>
            <h3> Where do I enter the coupon code?</h3>
            <p>
                Once you are done selecting your products and click on checkout you will be prompted to select delivery slot and payment method. On the payment method page there is a box where you can enter any evoucher/ coupon code that you have. The amount will automatically
                be deducted from your invoice value.
            </p>
            <h3> What is freshoshop Wallet?</h3>
            <p> The freshoshop Wallet is a pre-paid credit account that is associated with your freshoshop account. This prepaid account allows you to pay a lump sum amount once to freshoshop and then shop multiple times without having to pay each time.
            </p>
            <h4> Delivery Related</h4>
            <h3> When will I receive my order?
            </h3>
            <p> Once you are done selecting your products and click on checkout you will be prompted to select delivery slot. Your order will be delivered to you on the day and slot selected by you. If we are unable to deliver the order during the specified
                time duration (this sometimes happens due to unforeseen situations) we will credit 5% of your order value to your freshoshop account.
            </p>
            <h3> How are the fruits and vegetables packaged?</h3>
            <p> Fresh fruits and vegetables are hand picked, hand cleaned and hand packed in reusable plastic trays covered with cling. We ensure hygienic and careful handling of all our products.
            </p>
            <h3> How are the fruits and vegetables weighed?</h3>
            <p> Every fruit and vegetable varies a little in size and weight. While you shop we show an estimated weight and price for everything priced by kilogram. At the time of delivery we weigh each item to determine final price. This could vary by 10%
                at maximum. Therefore if you have shopped for something that costs Rs. 100 per kg, and we delivery 1.5 kg of the product to you (eg cabbage, pineapple), you will still be charged a maximum of Rs. 110. In case the weight of the product
                is lesser than what you ordered, you will pay correspondingly less.
            </p>
            <h3>
                How will the delivery be done?</h3>
            <p> We have a dedicated team of delivery personnel and a fleet of vehicles operating across the city which ensures timely and accurate delivery to our customers.
            </p>
            <h3> How do I change the delivery info (address to which I want products delivered)?</h3>
            <p> You can change your delivery address on our website once you log into your account. Click on "My Account" at the top right hand corner and go to the "Update My Profile" section to change your delivery address.
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