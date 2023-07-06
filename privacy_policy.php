<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Privacy Policy</title>
  <link rel="stylesheet" href="/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* General styles */
        html{
            font-family: 'Poppins';
        }
        body{
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .container-fluid{
            margin: 0;
            padding: 0;
        }
        .container-fluid2{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        div.home-nav-logo{
            width: 10%;
        }
        .home-nav-logo-img {
            width: 70%;
            margin-left: 3%;
        }
        .navbar-expand-lg{
            padding: 0.5em 0.5em;  
        }
        .navbar-nav{
            display: flex;
            align-items: center;
        }
        .navbar-nav .nav-link {
            color: blue;
            font-weight: 600;
        }
        .card-img-top{
            background-color: #e7e7e7;
        }
        .nav-link{
            margin: 0 0.5em;
        }
        .right-nav{
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .icon-color{
            color: blue;
        }
        .nav-item{
            color: white;
        }
        .navbar-collapse {
            flex-grow: unset;
        }
        .content{
            width: 80%;
        }

    h1 {
      text-align: center;
    }

    .sub-head{
        color: #6c6c6c;
        font-size: medium;
        font-weight: 600;
    }

    p {
      margin-bottom: 10px;
    }

    footer {
      margin-top: 20px;
      text-align: center;
      font-size: 12px;
    }

    @media (max-width: 576px) {
        html{
            padding: 0;
            margin: 0;
        }
        body{
            padding: 0;
            margin: 0;
            font-family: 'Poppins';
        }
        .container-fluid {
            margin: 0;
            padding: 0;
        }
        .home-nav-logo {
            width: 100%;
        }
        .home-nav-logo-img {
            margin-left: 0;
            width: 100%;
        }
        .navbar-expand-lg {
            padding: 0.5em 1em;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
    }

    /* Responsive styles */
    @media (min-width: 577px) and (max-width: 768px) {
        .home-nav-logo-img {
            width: 30%;
            margin-left: 3%;
        }
    }

    /* Styles for large screens (768px and above) */
    @media (min-width: 769px) {
        .home-nav-logo {
                width: 10%;
            }
            .home-nav-logo-img {
                margin-left: 3%;
                width: 70%;
            }
    }
  </style>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg bg-light fixed-top" style="z-index: 100;">
            <div class="container-fluid">
                <div class="home-nav-logo">
                    <a href="index.php"><img src="./assets/Asset 2112.png" alt="home-logo" class="home-nav-logo-img"></a>
                </div>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse right-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link m-0" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-0" href="contact_form.php">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">

                        <?php
                        if(!isset($_SESSION['user_email'])){
                            echo "<li class='nav-item'>
                                    <a href='./users_area/user_login.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }else{
                            echo "<li class='nav-item'>
                                    <a href='./users_area/profile.php' class='icon-color px-2 mx-1'><i class='fas fa-user'></i></a>
                                </li>";
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid2" style="margin-top: 60px;">


  <h1>Yearbook Canvas Privacy Policy</h1>
  <div class="content">
  <p>
    Our Privacy Policy is designed to protect and keep confidential your personal information. This document explains the process for collating and restricted dissemination of information we collect from you. This Privacy Policy does not apply to information about you collected by our affiliates or third party websites that may post links or advertisements on or otherwise be accessible from the Site. The information collected by these affiliates or third party websites is subject to their own privacy policies. By using this Site, you consent to the collection and use of your information as we have outlined in this Privacy Policy. From time to time, we may update this Privacy Policy. We encourage you to check back and review this Privacy Policy so that you may always know what personally identifiable information we collect, how we use it, and to whom we disclose it. Your continued use of this Site will be subject to the then current Privacy Policy.
  </p>
  <h4>Types of information collected:</h4>
  <p class="sub-head">Automatically collected information:</p>
  <p>Your IP address, browser details, OS etc are automatically collected when you visit our Site or when you are a member with us. Such information gathering helps us in administering our Site and diagnosing problems with our server. Also, we track your browsing activities on our Site and the links or sites you visit before and after our Site. This helps us to do internal research on your interests and liking and serve you better in the future.</p>
  <p class="sub-head">Information you provide yourself</p>
  <p>- When you send us information through e-mails by filling out a form and give us information while registering for an account with us, we collect those information about you. For example- when you register for an account with us or when you participate in any competition organized by Yearbook Canvas you give us details like your name, email address, billing address, password etc. This may also include personal information such as gender, marital status, age, financial status etc.</p>
  <p class="sub-head">Information about your transactions</p>
  <p>In addition to above mentioned information, collect history of your orders, payments and purchases with us and your billing history.</p>
  <p class="sub-head">Correspondence information</p>
  <p>email communications, blogs chat room board communication, instant messages, fax communication etc all this is stored with us</p>
  <p class="sub-head">Usage of cookies and server logs</p>
  <p>Our Site uses 'cookies' and other server logs to gather information about your activities on our Site. Using these, we are enabled to recall you as a customer/ visitor and also your orders or preferences with the help of records of your earlier visits. Through cookies, we can then tailor our Site elements and special offers to you. This helps us to gather feedback in order to constantly improve the Site and serve you better. You can always reset your browser to refuse all cookies or to display a message when a cookie is being sent. If you reset your browser, some of this Site features and functionality will not be available to you. This Privacy Policy covers the use of cookies and similar files by Yearbook Canvas only and does not cover the use of cookies and similar files by any third party advertisers or websites linked to the Site.</p>
  <p class="sub-head">Usage and disclosure of information collected</p>
  <p>Your personal information is collected for purpose of maintaining, improving, administering and expanding our business activities, providing customer service and making available other products and services to our customers and prospective customers. Occasionally, we may use the information collected to notify you about important changes to the Site and new services and special offers that we feel you will find valuable. If you do not wish to receive such communication, you may notify us at any time, or unsubscribe for the same. We may also share the personal information we collect with other companies with whom we have business, marketing arrangements. We may also disclose information, including personal information; we collect about you in other circumstances as required or permitted by law. For example, Yearbook Canvas reserves the right to disclose personal information, including account information, when we believe such disclosure is appropriate to cooperate with an investigation of activities claimed to be unlawful, to enforce our terms of use or to protect the rights or property of Yearbook Canvas or others. When you use certain services that are to an open, public environment or forum including (without limitation) any blog, community or discussion board, it is not confidential and does not constitute personal information, and is not subject to protection under our Privacy Policy.</p>
  <p class="sub-head">General Exception</p>
  <p>In order to carry out certain business functions, such as order fulfillment, e-mail delivery, marketing, or for payments that you make to Yearbook Canvas for any purchase, we sometime hire other companies to perform such services on our behalf. We may disclose personal information that we collect about you to these companies to enable them to perform these services, but they are required to safeguard the personal information and are not authorized to use it for any purpose other than completing their contractual requirements to offer us their services. You acknowledge and agree that in the interests of improving personalization and service efficiency, we may, under controlled and secure circumstances, share your personal information with our affiliates.</p>
  <p class="sub-head">Third parties and external links</p>
  <p>While visiting our Site, you may be presented with links to other websites and opportunity to purchase third party products or services. If you click on one of the presented offers, you will be redirected to the site of the third party, and any information you provide in response to the offer will be collected and used by the third party and not by Yearbook Canvas. Information you provide to the third party and any dealings you have with the third party will be governed by the privacy and other policies of that third party. We will have no liability, whatsoever in that connection.</p>
  <p class="sub-head">Communication and information sharing</p>
  <p>For promotion of Yearbook Canvas we may send offers through emails, sms and physical mailers. You have the option to subscribe/ unsubscribe to communication from Yearbook Canvas. This option is available when you are registering with us. Also, you can drop in a mail or call our helpdesk for the same facility. Your account too will have the option to unsubscribe the newsletters or any communication from Yearbook Canvas or some other third parties.</p>
  <p class="sub-head">Website security</p>
  <p>We have reasonable safeguarding techniques to help us protect your nonpublic personal information against loss, misuse, disclosure and alteration. For example, we use Secure Socket Layer (SSL) technology to encrypt your credit card information when you purchase products through our Site. When you establish an account at Yearbook Canvas you choose a password to help protect your account information.</p>
  <p class="sub-head">Changes in Privacy Policy</p>
  <p>This Privacy Policy was last modified on (date). Yearbook Canvas holds the right to revise this Privacy Policy from time to time and we will post a revised Privacy Policy on our Site. Any revision will be posted on this Site, and shall be effective as of date.</p>
  <br>
  <h2>Yearbook Canvas Refund And Return Policy</h2>
  <p>Yearbooks are made according to your needs. We provide personalized yearbooks to each institute according to their needs. Once created, it cannot be sold to any but your institute, unlike the normal merchandise which is sold in the mass market. Thus, we do not provide refunds on yearbooks, but if you happen to find any defects in printing/binding quality, please let us know, we can reprint yearbook(s) after verifying the defect(s).</p>
  <p>Yearbook Canvas will accept replacement of the goods purchased, subject to the terms and conditions mentioned below.</p>
  <ul>
    <li>Customer will have to inform yearbookcanvas.com of the defects within 7 days of receipt of the yearbook at his/her destination.</li>
    <li>Order once processed and printed will be replaced only if there is a printing mistake on the company's part.</li>
    <li>Goods damaged, used, or manhandled will not be accepted for replacement or refund.</li>
  </ul>
  <h3>Shipping Policy</h3>
  <p>
    <ul>
        <li>There are no extra shipping charges; the Shipping charges are inclusive in our cost.</li>
        <li>We guarantee delivery to your school in 4 weeks or less from the day you tell us your book is ready. We have a reputation of delivering early with most of our clients and we generally deliver within 2 – 3 weeks.</li>
        <li>Standard Shipping takes 10-12 business days for delivery while Express Shipping takes around 4-5 business days for delivery across the globe.</li>
        <li>For your order to reach you in the fastest time and in good condition, we only ship through reputed courier companies.</li>
        <li>While we shall endeavor to ship all items in your order together, this may not always be possible due to product characteristics or lack of availability.</li>
        <li>If you believe, that the product is not in good condition or if the packaging is tampered with or damaged, please refuse to take delivery of the package, and call our Customer Care or mail us at support@yearbookcanvas.com.</li>
        <li>You may track the shipping status of your order in the following ways: Once the order is dispatched from our store we update the Airway bill (AWB) number in your "My Account" page. You can logon to the logistic partner site and track your order.</li>
    </ul>
  </p>
  </div>
  
  </div>
</div>
  <footer>
    <p>Copyright &copy; Yearbook Canvas. All rights reserved.</p>
  </footer>
</body>
</html>
