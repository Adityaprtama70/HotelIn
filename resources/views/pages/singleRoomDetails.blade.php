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

    <!-- Header Div -->
    <!-- <div class="topBanner flex">
      <div class="col flex">
        <i class="uil uil-clock icon"></i>
        <span>Monday - Sunday: 24/7</span>
        <span class="flex">
            <i class="uil uil-phone-pause icon"></i>
            +971 (0)52 431 2309
        </span>
      </div>

      <div class="col flex">
        <a href="">
            <i class="uil uil-facebook-f icon"></i>
        </a>
        <a href="">
            <i class="uil uil-instagram-alt icon"></i>
        </a>
        <a href="">
            <i class="uil uil-twitter icon"></i>
        </a>
        <a href="">
            <i class="uil uil-linkedin icon"></i>
        </a>
      </div>
    </div> -->
    <div class="header flex">
        <div class="logoDiv">
           <a href="index.html" class="flex">
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
                    <a href="contactPage.html" class="navLink">Contact Us</a>
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

    <!-- SINGLE ROOM DETAILS PAGE -->
    <div class="heroSection minHeroSection">
        <div class="swiper heroSectionContainer">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiperOverlay"></div>
                    <img src="{{ asset("img/1.jpg") }}" alt="">
    
                    <div class="sectionContent flex">
                        <div class="leftSection flex">
                            <i class="uil uil-calling icon phoneIcon"></i>
                            <div>
                                <span class="subTitle">RESERVATION</span>
                                <h3>+ 65 6988 2364</h3>
                            </div>
                        </div>
    
                        <!-- <div class="centerSection">
                            <div class="flex stars animate__animated animate__fadeInUp">
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                            </div>
    
                            <span class="subTitle animate__animated animate__fadeInUp" >
                                Luxury hotel & best resort
                            </span>
    
                            <div  class="mainTitle animate__animated animate__fadeInUp" >
                                <h1>THE PERFECT BASE FOR YOU</h1>
                            </div>
    
                            <a href="#rooms">
                            <div class="heroBtn btn animate__animated animate__fadeInUp">
                                rooms & suites
                            </div>
                            </a>
                        </div> -->
    
                        <div class="rightSection">
                            <div class="line"></div>
                            <div class="socialIcons grid">
                                <i class="uil uil-facebook-f icon"></i>
                                <i class="uil uil-instagram icon"></i>
                                <i class="uil uil-twitter-alt icon"></i>
                                <i class="uil uil-linkedin-alt icon"></i>
                            </div>
                            <div class="line"></div>
                        </div>
                        </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="swiperOverlay"></div>
                    <img src="./Assets/3.jpg" alt="">
                    <div class="sectionContent flex">
                        <div class="leftSection flex">
                            <i class="uil uil-calling icon phoneIcon"></i>
                            <div>
                                <span class="subTitle">RESERVATION</span>
                                <h3>+ 256 705 886 700</h3>
                            </div>
                        </div>
    
                        <!-- <div class="centerSection">
                            <div class="flex stars animate__animated animate__fadeInUp">
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                                <i class='bx bxs-star icon'></i>
                            </div>
    
                            <span class="subTitle animate__animated animate__fadeInUp">
                                Luxury hotel & best resort
                            </span>
    
                            <div class="mainTitle animate__animated animate__fadeInUp">
                                <h1>ENJOY A LUXURY EXPERIENCE</h1>
                            </div>
    
                            <div class="heroBtn btn animate__animated animate__fadeInUp">
                                rooms & suites
                            </div>
                        </div> -->
    
                        <div class="rightSection grid">
                            <div class="line"></div>
                            <div class="socialIcons grid">
                                <i class="uil uil-facebook-f icon"></i>
                                <i class="uil uil-instagram icon"></i>
                                <i class="uil uil-twitter-alt icon"></i>
                                <i class="uil uil-linkedin-alt icon"></i>
                            </div>
                            <div class="line"></div>
                        </div>
                        </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="swiperOverlay"></div>
                    <img src="./Assets/1.jpg" alt="">
    
                    <div class="sectionContent flex">
                        <div class="leftSection flex">
                        <i class="uil uil-calling icon phoneIcon"></i>
                        <div>
                            <span class="subTitle">RESERVATION</span>
                            <h3>+ 65 6988 2364</h3>
                        </div>
                        </div>
    
                        <div class="rightSection">
                            <div class="line"></div>
                            <div class="socialIcons grid">
                            <i class="uil uil-facebook-f icon"></i>
                            <i class="uil uil-instagram icon"></i>
                            <i class="uil uil-twitter-alt icon"></i>
                            <i class="uil uil-linkedin-alt icon"></i>
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>  
                </div>
    
                <div class="scrollDown">
                    <a href="#roomDetails">
                        <i class="uil uil-arrow-down icon"></i>
                    </a>
                    </div>
            </div> 
            
    
            <div class="swiper-pagination"></div>
        </div>       
    </div>
    <div class="roomDetails container section" id="roomDetails">
        <div class="flex stars animate__animated animate__fadeInUp">
            <i class='bx bxs-star icon'></i>
            <i class='bx bxs-star icon'></i>
            <i class='bx bxs-star icon'></i>
            <i class='bx bxs-star icon'></i>
            <i class='bx bxs-star icon'></i>
        </div>

        <div class="sectionIntro ">
            <span class="subTitle">
                hotel horizon entebbe 
            </span>
            <span class="secTitle">
                Family Suite
            </span>
        </div>

        <div class="mainInfo flex">
            <div class="leftDiv">
                <p>
                    Our family room is the perfect spot for couples with kids, but it’s also great for parents and their grown kids. The two rooms are connected via a door so parents and kids can spend quality time together. The big double bed in the main room is perfect for both parents, and the two single beds available in the other room are great for the kids, so everyone can have their own space.
                </p>

                <div class="checkIn_checkOutInfo flex">
                    <div class="checkInInfo">
                        <span class="spanTitle">
                            Check-In
                        </span>
                        <div class="singleInfo flex">
                            <i class="uil uil-check icon"></i>
                            <span>Checkn-in from 10:00 AM - anytime.</span>
                        </div>
                        <div class="singleInfo flex">
                            <i class="uil uil-check icon"></i>
                            <span>Early check-in subject to availability.</span>
                        </div>

                        <div class="singleInfo flex">
                            <i class="uil uil-check icon"></i>
                            <span>Lagguage will be deliverd by the battlers.</span>
                        </div>
                    </div>

                    <div class="checkOutInfo">
                        <span class="spanTitle">
                            Check-Out
                        </span>
                        <div class="singleInfo flex">
                            <i class="uil uil-check icon"></i>
                            <span>Check-out before 1:00 PM</span>
                        </div>
                        <div class="singleInfo flex">
                            <i class="uil uil-check icon"></i>
                            <span>Express check-out allowed.</span>
                        </div>
                        <div class="singleInfo flex">
                            <i class="uil uil-check icon"></i>
                            <span>Lagguage will be collected by the battlers.</span>
                        </div>
                    </div>
                </div>

                <div class="specialInformation grid">
                  <div class="specialCheckIn">
                    <span class="spanTitle">
                        Special Check-In Instructions
                    </span>

                    <p>
                        Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.
                    </p>
                  </div>

                    <div class="petsInfo">
                        <span class="spanTitle">
                           Pets
                        </span>
    
                        <p>
                            Pets are allowed (Family Suite).
                        </p>
                    </div>

                    <div class="childrenInfo">
                        <span class="spanTitle">
                           Children & Extra Beds
                        </span>
    
                        <p>
                            Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.
                        </p>
                    </div>
                </div>

            </div>

            <div class="rightDiv">
                <span class="spanTitle">
                    Amenities
                </span>
                <div class="singleInfo flex">
                    <img src="{{ asset("img/team.png") }}" alt="Hotel amenities Image">
                    <span>Max. 3 Persons</span>
                </div>
                <div class="singleInfo flex">
                    <img src="{{ asset("img/wifi (3).png") }}" alt="Hotel amenities Image">
                    <span>Fast Wifi Network</span>
                </div>
                <div class="singleInfo flex">
                    <img src="{{ asset("img/room.png") }}" alt="Hotel amenities Image">
                    <span>200 Sqft Room</span>
                </div>

                <div class="singleInfo flex">
                    <img src="{{ asset("img/breakfast.png") }} " alt="Hotel amenities Image">
                    <span>Breakfast Included</span>
                </div>

                <div class="singleInfo flex">
                    <img src="{{ asset("img/towels.png") }}" alt="Hotel amenities Image">
                    <span>Linen</span>
                </div>

                <div class="singleInfo flex">
                    <img src="{{ asset("img/swimming-pool.png") }}" alt="Hotel amenities Image">
                    <span>Swimming Pool Access</span>
                </div>
            </div>
        </div>

    </div>
    <div class="bookingForm">
        <div class="formContainer container">
            <span class="formTitle">
                Fill the form to book this room.
            </span>

            <form method="" class="grid">
                <div class="singleField">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter Your First Name"  required>
                </div>

                <div class="singleField">
                    <label for="secName">Second Name</label>
                    <input type="text" id="secName" name="secName" placeholder="Enter Your Second Name"  required>
                </div>

                <div class="singleField">
                    <label for="nationality">Nationality</label>
                    <input type="text" id="nationality" name="nationality" placeholder="Enter Your nationality Name"  required>
                </div>

                <div class="singleField">
                    <label for="passportNo">Passport Number</label>
                    <input type="text" id="passportNo" name="passportNo" placeholder="Enter Your Passport Number"  required>
                </div>

                <div class="singleField">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email Address"  required>
                </div>

                <div class="singleField">
                    <label for="persons">Number Person</label>
                    <input type="number" id="persons" name="persons" placeholder="E.g: 2"  required>
                </div>

                <div class="singleField">
                    <label for="children">Children (Persons Under 12)</label>
                    <input type="number" id="children" name="children" placeholder="E.g 2">
                </div>

                <div class="optionDiv">
                    <label for="pickUp">Airport Pick Up</label>
                    <div class="input flex">
                       <div class="radio">
                        <input type="radio" name="yes" class="input1">
                        <!-- <span class="after"></span> -->
                       </div>
                        <label for="yes">Yes, pick me up.</label>
                    </div>

                    <div class="input flex">
                        <div class="radio">
                            <input type="radio" name="no">
                            <!-- <span class="after input2"></span> -->
                        </div>
                        <label for="mobile">No, thank you.</label>              
                    </div>
                </div>

                <div class="singleField">
                    <label for="arrivalDate">Arrival Date</label>
                    <input type="date" id="arrivalDate" name="arrivalDate"  required>
                </div>

                <div class="singleField">
                    <label for="depDate">Departure Date</label>
                    <input type="date" id="depDate" name="depDate"  required>
                </div>

                <div class="singleField">
                    <label for="message">Any Message (Optional)</label>
                   <textarea name="message" id="message" placeholder="Enter any message"></textarea>
                </div>

                <button class="btn bg">
                    book this room
                </button>
            </form>
        </div>
    </div>
    <!-- SINGLE ROOM DETAILS PAGE ENDS-->

    <!-- EXTRA SERVICE SECTION -->
    <div class="section extraService">
        <div class="sectionContent container flex">

            <div class="textSection">
            <span class="subTitle">BEST PRICE  IN ENTEBBE </span>
            <span class="secTitle">
                Extra Services
            </span>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut ad, cum optio facere magnam voluptatem.
                <br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut ad, cum optio facere magnam voluptatem.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas explicabo libero nesciunt temporibus laborum magnam doloremque obcaecati unde distinctio cum!
            </p>

            <div class="reservationsNumber flex">
                <i class="uil uil-calling icon"></i>
                <div>
                    <span class="subTitle">
                        For more information
                    </span>
                    <a href="tel:+ 65 6988 2364">+ 65 6988 2364</a>
                </div>
            </div>
            </div>

            <div class="swiperSection swiper">
                <div class="swiper-wrapper">
                    <div class="singleService swiper-slide">
                        <div class="imgDiv">
                            <img src="{{ asset("img/safe.jpg")}}" alt="Hotel Safe Box">
                        </div>
                        <div class="serviceInfo">
                            <span class="serviceTitle">Elsafe Box</span>
                            <h3 class="price">$16<small> / Day</small></h3>

                            <div class="checkList grid">
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Nationwide Warranty monotone.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-times-circle icon"></i>
                                    <p>Curabitur dapibus nisl a urna congue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="singleService swiper-slide">
                        <div class="imgDiv">
                            <img src="./Assets/dining.jpg" alt="Hotel Safe Box">
                        </div>
                        <div class="serviceInfo">
                            <span class="serviceTitle">In-room Dining</span>
                            <h3 class="price">$15<small> / Day</small></h3>
                            

                            <div class="checkList grid">
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Nationwide Warranty monotone.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-times-circle icon"></i>
                                    <p>Curabitur dapibus nisl a urna congue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="singleService swiper-slide">
                        <div class="imgDiv">
                            <img src="./Assets/bar.png" alt="Hotel Safe Box">
                        </div>
                        <div class="serviceInfo">
                            <span class="serviceTitle">In-room Bar</span>
                            <h3 class="price">$20<small> @ Item</small></h3>
                            

                            <div class="checkList grid">
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Nationwide Warranty monotone.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-times-circle icon"></i>
                                    <p>Curabitur dapibus nisl a urna congue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="singleService swiper-slide">
                        <div class="imgDiv">
                            <img src="./Assets/housekeeping.jpg" alt="Hotel Safe Box">
                        </div>
                        <div class="serviceInfo">
                            <span class="serviceTitle">Special Room Cleaning</span>
                            <h3 class="price">$15<small> / Day</small></h3>

                            <div class="checkList grid">
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-check-circle icon"></i>
                                    <p>Nationwide Warranty monotone.</p>
                                </div>
                                <div class="singleCheck flex">
                                    <i class="uil uil-times-circle icon"></i>
                                    <p>Curabitur dapibus nisl a urna congue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="swiper-pagination"></div>             
            </div>
        </div>
    </div>
    <!-- EXTRA SERVICE SECTION ENDS -->

    <!-- Footer Section -->
    <section class="footer">
        <div class="sectionContainer container">
        <div class="mainContent grid">

            <div class="introDiv">
                <div class="logoDiv flex">
                    <!-- <img src="./Assets/logo.png" alt="Logo Image"> -->
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
                <p><a href="login.html">Administrators</a></p>
            </ul>
        </div>
        </div>
    </section>
    <!-- Footer Section Ends -->

<!-- Link swiper.js -->
<script src="{{ asset('js/swiper-bundle.js') }}"></script>
<!-- Link to JS -->
<script src="{{ asset('js/index.js') }}"></script>


</body>
</html>