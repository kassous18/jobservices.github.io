<?php
session_start();
include('connect.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EASY JOB</title>

	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

	<!-- Other css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/style.css">

	<!-- main css for template -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- ===============>> Preloader start here <<================= -->
	<div class="preloader">
		<div class="loader">
            <img src="assets/images/favicon.png" alt="Cleana">
        </div>
	</div>
	<!-- ===============>> Preloader end here <<================= -->


	<!-- Search Area start here-->
    <div class="search">
        <div class="search__close">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="search__area">
            <form action="#">
                <input type="text" name="s" placeholder="Sarch Here...">
                <button type="submit"><img src="assets/images/header/icon/04.png" alt="rajibraj"></button>
            </form>
        </div>
    </div>
    <!-- Search Area ending here -->


	<!-- ==========Header Section Starts Here========== -->
    <header class="header header--two">
        <div class="header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-6">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo-removebg-preview.png" alt="rajibraj"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-12 d-none d-xl-block">
                        <div class="info">
                            <ul>
                                <li>
                                    <div class="info__icon">
                                        <img src="assets/images/header/icon/01.png" alt="rajibraj">
                                    </div>
                                    <div class="info__content">
                                        <p>Office Time</p>
                                        <p><b>Mon - Sun 08am-10pm</b></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info__icon">
                                        <img src="assets/images/header/icon/02.png" alt="rajibraj">
                                    </div>
                                    <div class="info__content">
                                        <p>Email Address</p>
                                        <p><b>manuelleblokhine@gmail.com</b></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info__icon">
                                        <img src="assets/images/header/icon/03.png" alt="rajibraj">
                                    </div>
                                    <div class="info__content">
                                        <p>Office Location</p>
                                        <p><b>New Deido, Douala Cameroon</b></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 d-xl-none">
                        <div class="header__bararea justify-content-end">
                            <div class="header__bar d-xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="area">
                    <div class="main-menu">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="#0">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li>
                                            <a href="#0">Team</a>
                                            <ul>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-single.html">Team Single</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Services</a>
                                    <ul>
                                        <li><a href="services.html">Service</a></li>
                                        <li><a href="service-2.html">Service Two</a></li>
                                        <li><a href="service-single.html">Service Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0" class="active">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio 2 Grid</a></li>
                                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-2.html">Blog Classic</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                            <div class="d-flex flex-wrap">
                                <div class="search_cart d-none d-xl-block">
                                    <ul>
                                        <li class="search_icon">
                                            <img src="assets/images/header/icon/04.png" alt="rajib raj">
                                        </li>
                                    </ul>
                                </div>
                                <a href="appointment.html" class="lab-btn">Online Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->



    <!-- ==========Pageheader Section Start Here========== -->
	<div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/header/section/pageheader.jpg);">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>Appointment</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Pageheader Section Ends Here========== -->



    <!-- ==========Order Form Section Starts Here========== -->
    <div class="orderform padding-tb">
        <div class="container">
            <div class="orderform__area">
                <div class="orderform__head">
                    <h5>Book your cleaning service in 60 seconds</h5>
                </div>
                <div class="orderform__body">
                    <form method="post" action="online.php">
                        <div class="orderform__item">
                            <h6>Contact Information</h6>
                            <p>This information will be used to contact you about your service.</p>
                            <div class="row g-3">
                                <div class="col-lg-6 col-12">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="text" placeholder="Your address">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="email" placeholder="Your email">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <input type="text" placeholder="Phone number">
                                </div>
                                <div class="col-lg-8 col-14">
                                    <input type="text" placeholder="Location">
                                </div>
                            </div>
                        </div>
                        <div class="orderform__item">
                            <h6>Home Information</h6>
                            <div class="col-lg-14 col-22">
                                <input type="text" placeholder="">
                            </div>
                        <div class="orderform__item">
                            <h6>Service Requested</h6>
                            <select name="service" id="servicelist">
                                <option value="1">Please select</option>
                                <option value="2">Nanny</option>
                                <option value="3">Plumbering</option>
                                <option value="4">Electricity repairs</option>
                                <option value="5">Mechanical repair</option>
                                <option value="6">Technical repair</option>
                                <option value="7">Delivery</option>
                                <option value="8">Maintenance</option>
                                <option value="9">Gardening</option>
                                <option value="10">Housekeeper</option>
                                <option value="11">Move in/out team</option>
                                <option value="12">Driver</option>
                                <option value="13">Home teacher</option>
                                <option value="14">Cook</option>
                                <option value="15">Ironer</option>
                            </select>
                        </div>
                        <div class="orderform__item">
                            <h6>Service Requested</h6>
                            <div class="row g-3">
                                <div class="col-lg-6 col-12">
                                    <label>When would you like us to come?</label>
                                    <input type="date">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label>Any time between</label>
                                    <div class="row g-3">
                                        <div class="col-sm-6 col-12">
                                            <select>
                                                <option value="1">1:00 AM</option>
                                                <option value="2">1:15 AM</option>
                                                <option value="3">1:30 AM</option>
                                                <option value="4">1:45 AM</option>
                                                <option value="5">2:00 AM</option>
                                                <option value="6">2:15 AM</option>
                                                <option value="7">2:30 AM</option>
                                                <option value="8">2:45 AM</option>
                                                <option value="9">1:45 AM</option>
                                                <option value="10">3:00 AM</option>
                                                <option value="11">3:15 AM</option>
                                                <option value="12">3:30 AM</option>
                                                <option value="13">3:45 AM</option>
                                                <option value="14">4:00 AM</option>
                                                <option value="15">4:15 AM</option>
                                                <option value="16">4:30 AM</option>
                                                <option value="17">4:45 AM</option>
                                                <option value="18">5:00 AM</option>
                                                <option value="19">5:15 AM</option>
                                                <option value="20">5:30 AM</option>
                                                <option value="21">5:45 AM</option>
                                                <option value="22">6:00 AM</option>
                                                <option value="23">6:15 AM</option>
                                                <option value="24">6:30 AM</option>
                                                <option value="25">6:45 AM</option>
                                                <option value="26">7:00 AM</option>
                                                <option value="27">7:15 AM</option>
                                                <option value="28">7:30 AM</option>
                                                <option value="29">7:45 AM</option>
                                                <option value="30">8:00 AM</option>
                                                <option value="31">8:15 AM</option>
                                                <option value="32">8:30 AM</option>
                                                <option value="33">8:45 AM</option>
                                                <option value="34">9:00 AM</option>
                                                <option value="35">10:15 AM</option>
                                                <option value="36">10:30 AM</option>
                                                <option value="37">10:45 AM</option>
                                                <option value="38">11:00 AM</option>
                                                <option value="39">11:15 AM</option>
                                                <option value="40">11:30 AM</option>
                                                <option value="41">11:45 AM</option>
                                                <option value="42">12:00 AM</option>
                                                <option value="43">12:15 AM</option>
                                                <option value="44">12:30 AM</option>
                                                <option value="45">12:45 AM</option>
                                                <option value="46">1:00 PM</option>
                                                <option value="47">1:15 PM</option>
                                                <option value="48">1:30 PM</option>
                                                <option value="49">1:45 PM</option>
                                                <option value="50">2:00 PM</option>
                                                <option value="51">2:15 PM</option>
                                                <option value="52">2:30 PM</option>
                                                <option value="53">2:45 PM</option>
                                                <option value="54">1:45 PM</option>
                                                <option value="55">3:00 PM</option>
                                                <option value="56">3:15 PM</option>
                                                <option value="57">3:30 PM</option>
                                                <option value="58">3:45 PM</option>
                                                <option value="59">4:00 PM</option>
                                                <option value="60">4:15 PM</option>
                                                <option value="61">4:30 PM</option>
                                                <option value="62">4:45 PM</option>
                                                <option value="63">5:00 PM</option>
                                                <option value="64">5:15 PM</option>
                                                <option value="65">5:30 PM</option>
                                                <option value="66">5:45 PM</option>
                                                <option value="67">6:00 PM</option>
                                                <option value="68">6:15 PM</option>
                                                <option value="69">6:30 PM</option>
                                                <option value="70">6:45 PM</option>
                                                <option value="71">7:00 PM</option>
                                                <option value="72">7:15 PM</option>
                                                <option value="73">7:30 PM</option>
                                                <option value="74">7:45 PM</option>
                                                <option value="75">8:00 PM</option>
                                                <option value="76">8:15 PM</option>
                                                <option value="77">8:30 PM</option>
                                                <option value="78">8:45 PM</option>
                                                <option value="79">9:00 PM</option>
                                                <option value="80">10:15 PM</option>
                                                <option value="81">10:30 PM</option>
                                                <option value="82">10:45 PM</option>
                                                <option value="83">11:00 PM</option>
                                                <option value="84">11:15 PM</option>
                                                <option value="85">11:30 PM</option>
                                                <option value="86">11:45 PM</option>
                                                <option value="86">00:00 AM</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <select>
                                                <option value="1">1:00 AM</option>
                                                <option value="2">1:15 AM</option>
                                                <option value="3">1:30 AM</option>
                                                <option value="4">1:45 AM</option>
                                                <option value="5">2:00 AM</option>
                                                <option value="6">2:15 AM</option>
                                                <option value="7">2:30 AM</option>
                                                <option value="8">2:45 AM</option>
                                                <option value="9">1:45 AM</option>
                                                <option value="10">3:00 AM</option>
                                                <option value="11">3:15 AM</option>
                                                <option value="12">3:30 AM</option>
                                                <option value="13">3:45 AM</option>
                                                <option value="14">4:00 AM</option>
                                                <option value="15">4:15 AM</option>
                                                <option value="16">4:30 AM</option>
                                                <option value="17">4:45 AM</option>
                                                <option value="18">5:00 AM</option>
                                                <option value="19">5:15 AM</option>
                                                <option value="20">5:30 AM</option>
                                                <option value="21">5:45 AM</option>
                                                <option value="22">6:00 AM</option>
                                                <option value="23">6:15 AM</option>
                                                <option value="24">6:30 AM</option>
                                                <option value="25">6:45 AM</option>
                                                <option value="26">7:00 AM</option>
                                                <option value="27">7:15 AM</option>
                                                <option value="28">7:30 AM</option>
                                                <option value="29">7:45 AM</option>
                                                <option value="30">8:00 AM</option>
                                                <option value="31">8:15 AM</option>
                                                <option value="32">8:30 AM</option>
                                                <option value="33">8:45 AM</option>
                                                <option value="34">9:00 AM</option>
                                                <option value="35">10:15 AM</option>
                                                <option value="36">10:30 AM</option>
                                                <option value="37">10:45 AM</option>
                                                <option value="38">11:00 AM</option>
                                                <option value="39">11:15 AM</option>
                                                <option value="40">11:30 AM</option>
                                                <option value="41">11:45 AM</option>
                                                <option value="42">12:00 AM</option>
                                                <option value="43">12:15 AM</option>
                                                <option value="44">12:30 AM</option>
                                                <option value="45">12:45 AM</option>
                                                <option value="46">1:00 PM</option>
                                                <option value="47">1:15 PM</option>
                                                <option value="48">1:30 PM</option>
                                                <option value="49">1:45 PM</option>
                                                <option value="50">2:00 PM</option>
                                                <option value="51">2:15 PM</option>
                                                <option value="52">2:30 PM</option>
                                                <option value="53">2:45 PM</option>
                                                <option value="54">1:45 PM</option>
                                                <option value="55">3:00 PM</option>
                                                <option value="56">3:15 PM</option>
                                                <option value="57">3:30 PM</option>
                                                <option value="58">3:45 PM</option>
                                                <option value="59">4:00 PM</option>
                                                <option value="60">4:15 PM</option>
                                                <option value="61">4:30 PM</option>
                                                <option value="62">4:45 PM</option>
                                                <option value="63">5:00 PM</option>
                                                <option value="64">5:15 PM</option>
                                                <option value="65">5:30 PM</option>
                                                <option value="66">5:45 PM</option>
                                                <option value="67">6:00 PM</option>
                                                <option value="68">6:15 PM</option>
                                                <option value="69">6:30 PM</option>
                                                <option value="70">6:45 PM</option>
                                                <option value="71">7:00 PM</option>
                                                <option value="72">7:15 PM</option>
                                                <option value="73">7:30 PM</option>
                                                <option value="74">7:45 PM</option>
                                                <option value="75">8:00 PM</option>
                                                <option value="76">8:15 PM</option>
                                                <option value="77">8:30 PM</option>
                                                <option value="78">8:45 PM</option>
                                                <option value="79">9:00 PM</option>
                                                <option value="80">10:15 PM</option>
                                                <option value="81">10:30 PM</option>
                                                <option value="82">10:45 PM</option>
                                                <option value="83">11:00 PM</option>
                                                <option value="84">11:15 PM</option>
                                                <option value="85">11:30 PM</option>
                                                <option value="86">11:45 PM</option>
                                                <option value="86">00:00 AM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orderform__item">
                            <h6>How Often?</h6>
                            <p>It's all about matching you with the perfect cleaner for your home. Scheduling is flexible. Cancel or reschedule anytime.</p>
                            <ul>
                                <li>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultone" checked>
                                    <label for="flexRadioDefaultone">One time service daily</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaulttwo">
                                    <label for="flexRadioDefaulttwo">Weekly 13.00% Discount</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultthree">
                                    <label for="flexRadioDefaultthree">Every 4 Weeks 10% Discount</label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultfour">
                                    <label for="flexRadioDefaultfour">Every 4 Weeks 9% Discount</label>
                                </li>
                            </ul>
                        </div>
                        <div class="orderform__item">
                            <button type="submit" class="lab-btn">Free Estimate <i class="icofont-hand-drawn-right"></i></button>
                            <p>We will confirm your service request within 24 hours. Thank you very much!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Order Form Section Ends Here========== -->



    <!-- ==========Footer Section Ends Here========== -->
    <footer class="footer bg-img" style="background-image: url(assets/images/footer/bg.jpg);">
        <div class="footer__top">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--title">
                            <h2>Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--form">
                            <form action="#">
                                <input type="email" placeholder="enter email address">
                                <button type="submit" class="lab-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__middile">
            <div class="container">
                <div class="row justify-content-center g-5 g-lg-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="footer__about">
                            <div class="footer__title">
                                <h5>about us</h5>
                            </div>
                            <p>We believe that boutique practice we are better placed info respond quickly to our client bespoke service</p>
                            <h6>follow us</h6>
                            <ul>
                                <li>
                                    <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i> <span>Facebook</span></a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i> <span>linkedin</span></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i> <span>twitter</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title">
                                <h5>Eco Products</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="product-single.html"><img src="assets/images/product/eco/01.jpg" alt="rajib raj"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="product-single.html">100% Safe & Organic eco cleaning product</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="product-single.html"><img src="assets/images/product/eco/02.jpg" alt="rajib raj"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="product-single.html">100% Safe & Organic eco cleaning product</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="footer__title">
                                <h5>Recent news</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/new/01.jpg" alt="rajib raj"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="blog-single.html">industry leaders soften change their.</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/new/02.jpg" alt="rajib raj"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="blog-single.html">Food industry leaders soften change their promoter.</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="footer__gallery">
                            <div class="footer__title">
                                <h5>Our photo gallery</h5>
                            </div>
                            <ul>
                                <li>
                                    <a href="assets/images/carpenter.png" data-rel="lightcase"><img src="assets/images/carpenter.png" alt="rajibraj"></a>
                                </li>
                                <li>
                                    <a href="assets/images/dress cleaner.png" data-rel="lightcase"><img src="assets/images/dress cleaner.png" alt="rajibraj"></a>
                                </li>
                                <li>
                                    <a href="assets/images/nanny.png" data-rel="lightcase"><img src="assets/images/nanny.png" alt="rajibraj"></a>
                                </li>
                                <li>
                                    <a href="assets/images/photographer.png" data-rel="lightcase"><img src="assets/images/photographer.png" alt="rajibraj"></a>
                                </li>
                                <li>
                                    <a href="assets/images/mechanician.png" data-rel="lightcase"><img src="assets/images/mechanician.png" alt="rajibraj"></a>
                                </li>
                                <li>
                                    <a href="assets/images/electrician.png" data-rel="lightcase"><img src="assets/images/electrician.png" alt="rajibraj"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="text-center">
                    <p>&copy; 2024  <a href="index.html">EASY JOB</a> - All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->
    



	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-up"></i></a>
	<!-- scrollToTop ending here -->



	<!-- All Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/circularProgressBar.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>