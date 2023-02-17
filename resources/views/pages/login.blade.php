<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Hotel Horizon</title>

    <!-- Link css  -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!-- Link to icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link swiper css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">

    <!-- Link to AOS Animation Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>


    <div class="header headerBg flex">
        <div class="logoDiv">
           <a href="{{ route('hotel') }}" class="flex">
            <img src="{{ asset("img/logo.png") }}" alt="Logo Image">
           </a>
        </div>

        <div class="navBar" id="navBar">
            <ul class="menu flex">
                <li class="menuList">
                    <a href="{{ route('hotel') }}" class="navLink">Home</a>
                </li>
                <li class="menuList">
                    <a href="singleRoomDetails.html" class="navLink"> Rooms</a>
                </li>
                <li class="menuList">
                    <a href="{{ route('hotel') }}" class="navLink">Restaurants</a>
                </li>
                <li class="menuList">
                    <a href="{{ route('hotel') }}" class="navLink">Event space</a>
                </li>
                <li class="menuList">
                    <a href="{{ route('hotel') }}" class="navLink">Facilities</a>
                </li>
                <li class="menuList">
                    <a href="{{ route('contact') }}" class="navLink">Contact Us</a>
                </li>
               </ul>

          

           <div class="closeNavbar" id="closeNavbar">
            <i class="uil uil-times-circle icon"></i>
        </div>
        </div>

        <div class="toggleNavbaIcon" id="toggleNavbaIcon">
            <i class="uil uil-bars icon"></i>
        </div> 
    </div>
    <!-- Header Div Ends-->

    <!-- Page content -->
    <div class="loginPage">
       <div class="container">
        <div class="sectionIntro">
            <span class="subTitle">
                where everything builds up
            </span>
            <span class="secTitle">
               Administrators' Page
            </span>
        </div>   
        <div class="formSection">
            <div class="formTitle">
                <h1>Sign In Form</h1>
                <p>Sign In To Your Portal In HomFinder</p>
                <p>Be Authentic!</p>
            </div>
            <form method="post" class="loginForm grid">
                <div class="singleField">
                    <label for="userName">User Name</label>
                    <input type="text" id="userName" name="userName" placeholder="Enter Your User Name"  required>
                </div>

                <div class="singleField">
                    <label for="email">User Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email"  required>
                </div>

                <div class="singleField">
                    <label for="password">User Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Your password"  required>
                </div>

               <a href="./admin/admin.html" class="bg btn flex">
                <!-- <button class="bg btn flex">Login <i class='bx bx-right-arrow-alt icon'></i></button> -->
                Login <i class='bx bx-right-arrow-alt icon'></i>
               </a>
            </form>

            <span>
                <p>Failed to login? <a href="signUp.html">Contact Super Administrator</a></p>
            </span>
        </div>
       </div>
     
    </div>
    <!-- Page content Ends -->

    <!-- Footer Section -->
    <section class="footer">
        <div class="sectionContainer container">
        <div class="mainContent grid">

            <div class="introDiv">
                <div class="logoDiv flex">
                    <!-- <img src="./img/logo.png" alt="Logo Image"> -->
                    <h3>Hotel Horizon</h3>
                </div>

                <p>Most luxurious hotel in Entebbe Singapore.</p>

                <div class="payment flex">
                    <img src="{{ asset("img/mastercard.png") }}" alt="sponsor logo">
                    <img src="{{ asset("img/paypal.png") }}" alt="sponsor logo">
                    <img src="{{ asset("img/visa.png") }}" alt="sponsor logo">
                </div>
            </div>

            <div class="support">
                <div class="title">
                    <h2>Support</h2>
                </div>
                <ul>
                    <li>Bookings</li>
                    <li>Help Videos</li>
                    <li>Accessories</li>
                    <li>Support</li>
                    <li>Features</li>
                </ul>
            </div>

            <div class="services">
                <div class="title">
                    <h2>Services</h2>
                </div>
                <ul>
                    <li>Payment & Tips</li>
                    <li>Terms & Service</li>
                    <li>Swimming Pool</li>
                    <li>Restaurants</li>
                    <li>Q&A</li>
                </ul>
            </div>

            <div class="about">
                <div class="title">
                    <h2>About</h2>
                </div>
                <ul>
                    <li>About Us</li>
                    <li>History</li>
                    <li>Contact</li>
                    <li>News</li>
                    <li><a href="jobs.html">Careers</a></li>
                </ul>
            </div>

            <div class="address">
                <div class="title">
                    <h2>Address</h2>
                </div>
                <p>28 Madras St, Singapore 208422</p>
                <div class="socials flex">
                    <i class='bx bxl-facebook icon'></i>
                    <i class='bx bxl-twitter icon' ></i>
                    <i class='bx bxl-instagram-alt icon' ></i>
                    <i class='bx bxl-telegram icon' ></i>
                </div>
            </div>
        
        </div>

        <div class="lowerDivision flex">
            <p>All rights reserved - Hotel Horizon 2023</p>
            <ul class="flex">
                <p>Services</p>
                <p>Partners</p>
                <p>Feedbacks</p>
                <p><a href="{{ route('login') }}">Administrators</a></p>
            </ul>
        </div>
        </div>
    </section>
    <!-- Footer Section Ends -->

    <!-- Link swiper.js -->
    <script src="./swiper-bundle.min.js"></script>
    <!-- Link to JS -->
    <script src="{{ asset('js/index.js') }}"></script>

    <!-- Link to the AOS animation Library  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>