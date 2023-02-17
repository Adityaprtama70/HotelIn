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

    <div class="header flex">
        <div class="logoDiv">
           <a href="index.html" class="flex">
            <img src="{{ asset("img/logo.png") }}" alt="Logo Image">
           </a>
        </div>

        <div class="navBar" id="navBar">
            <ul class="menu flex">
                <li class="menuList">
                    <a href="#" class="navLink">Home</a>
                </li>
                <li class="menuList">
                    <a href="{{ route('singleroom') }}" class="navLink"> Rooms</a>
                </li>
                <li class="menuList">
                    <a href="#amenities" class="navLink">Restaurants</a>
                </li>
                <li class="menuList">
                    <a href="#amenities" class="navLink">Event space</a>
                </li>
                <li class="menuList">
                    <a href="#amenities" class="navLink">Facilities</a>
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

    <!-- HERO SECTION -->
    <div class="heroSection">
    <div class="swiper heroSectionContainer">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiperOverlay"></div>
                <img src="{{ asset("img/5.jpg") }}" alt="">

                <div class="sectionContent flex">
                    <div class="leftSection flex">
                        <i class="uil uil-calling icon phoneIcon"></i>
                        <div>
                            <span class="subTitle">RESERVATION</span>
                            <h3>+ 65 6988 2364</h3>
                        </div>
                    </div>

                    <div class="centerSection">
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

            <div class="swiper-slide">
                <div class="swiperOverlay"></div>
                <img src="{{ asset("img/3.jpg") }}" alt="">
                <div class="sectionContent flex">
                    <div class="leftSection flex">
                        <i class="uil uil-calling icon phoneIcon"></i>
                        <div>
                            <span class="subTitle">RESERVATION</span>
                            <h3>+ 65 6988 2364</h3>
                        </div>
                    </div>

                    <div class="centerSection">
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
                    </div>

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
                <img src="{{ asset("img/1.jpg") }}" alt="">

                <div class="sectionContent flex">
                    <div class="leftSection flex">
                    <i class="uil uil-calling icon phoneIcon"></i>
                    <div>
                        <span class="subTitle">RESERVATION</span>
                        <h3>+ 65 6988 2364</h3>
                    </div>
                    </div>

                    <div class="centerSection">
                    <div class="flex stars animate__animated animate__fadeInUp" >
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
                        <h1>HERE'S THE BEST MOMENTS OF YOUR LIFE</h1>
                    </div>

                    <div class="heroBtn btn animate__animated animate__fadeInUp">
                        rooms & suites
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
                <a href="#about">
                    <i class="uil uil-arrow-down icon"></i>
                </a>
                </div>
        </div> 
        

        <div class="swiper-pagination"></div>
    </div>
    </div>
    <!-- HERO SECTION ENDS -->

    <!-- ABOUT SECTION  -->
    <div class="section container aboutSection" id="about">
        <div class="sectionContent flex">
            <div class="imgDiv">
                <img class="mainImage" src="{{ asset("img/hotel6.png") }}" alt="Best Hotel in Singapore">
                <img class="smallImage" src="{{ asset("img/hotel.png") }}" alt="Best Hotel in Singapore">
            </div>

            <div class="aboutText">
                <div class="flex stars">
                    <i class='bx bxs-star icon'></i>
                    <i class='bx bxs-star icon'></i>
                    <i class='bx bxs-star icon'></i>
                    <i class='bx bxs-star icon'></i>
                    <i class='bx bxs-star icon'></i>
                </div>

                <span class="subTitle">
                    the most luxurious hotel in Singapore
                </span>

                <span class="secTitle">
                    Enjoy a Luxury Experience 
                </span>

                <p class="desc">
                    Welcome to the Best New Hotel in Madras, Singapore. A large, family-friendly option with a prime location for leisure and business travellers alike. Comfortably furnished with premium beds our rooms are equipped with all amenities including air conditioning, Smart TVs, Wi-Fi internet access and clean private bathrooms. 
                </p>
                <br>
                <p class="desc">
                    The swimming pool, our very own Signature restaurant and lounge are the perfect place to enjoy while on vacation or business trip. Conveniently located just a 10-minute drive from Entebbe International Airport and close to many popular attractions like UWEC Entebbe Zoo, Victoria Mall, Imperial Mall and various resorts near Lake Victoria.
                </p>

                <div class="checkList grid">
                    <div class="singleCheck flex">
                        <i class="uil uil-check-circle icon"></i>
                        <p>Customer Rewards Program and excellent technology.</p>
                    </div>
                    <div class="singleCheck flex">
                        <i class="uil uil-check-circle icon"></i>
                        <p>24 Month / 24,000km Nationwide Warranty monotone.</p>
                    </div>
                    <div class="singleCheck flex">
                        <i class="uil uil-check-circle icon"></i>
                        <p>Curabitur dapibus nisl a urna congue, in pharetra urna accumsan.</p>
                    </div>
                </div>

              
                    <button class="btn flex bg">
                       <a href="" class="flex">
                        explore more
                        <i class="uil uil-file-info-alt icon"></i>
                       </a>
                    </button>
               
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION ENDS -->

    <!-- ROOMS & SUITES SECTION -->
    <div class="section  roomsSection" id="rooms">
        <div class="sectionContainer container">
            <div class="sectionIntro">
                <span class="subTitle">
                    the most luxurious hotel in Singapore
                </span>
                <span class="secTitle">
                    Our Rooms & Suites
                </span>
            </div>

            <div class="roomsContainer grid">
               <div class="firstGrid grid">
                    <div class="singleRoom">
                        <div class="imgDiv">
                            <img src="{{ asset("img/room (4).jpg") }}" alt="Best Hotel Rooms in Singapore - Entebbe">
                        </div>

                        <a href="" class="bookBtn">
                            BOOK
                        </a>

                        <div class="roomInfo">
                            <span class="price">
                                $150 / Night
                            </span>

                            <span class="roomType">
                                Junior Suite
                            </span>

                            <div class="overFlowText flex">
                                <div class="icons flex">
                                    <img src="{{ asset("img/bed.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath-towel.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/wifi.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/room-service.png") }}" alt="hotel Room in Entebbe">
                                </div>

                                <a href="singleRoomDetails.html" class="flex">DETAILS <i class="uil uil-arrow-right icon"></i></a>
                            </div>
                        </div>

                        <div class="overlayColor">

                        </div>
                    </div>
                    <div class="singleRoom">
                        <div class="imgDiv">
                            <img src="{{ asset("img/bedroom-490779_1920.jpg") }}" alt="Best Hotel Rooms in Singapore - Entebbe">
                        </div>

                        <a href="" class="bookBtn">
                            BOOK
                        </a>

                        <div class="roomInfo">
                            <span class="price">
                                $200 / Night
                            </span>

                            <span class="roomType">
                                Standard Suite
                            </span>

                            <div class="overFlowText flex">
                                <div class="icons flex">
                                    <img src="{{ asset("img/bed.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath-towel.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/wifi.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/room-service.png") }}" alt="hotel Room in Entebbe">
                                </div>

                                <a href="singleRoomDetails.html" class="flex">DETAILS <i class="uil uil-arrow-right icon"></i></a>
                            </div>
                        </div>

                        <div class="overlayColor">

                        </div>
                    </div>
                    <div class="singleRoom">
                        <div class="imgDiv">
                            <img src="{{ asset("img/honeymoon-couple-suite-hotel-horizon-entebbe.jpg") }}" alt="Best Hotel Rooms in Singapore - Entebbe">
                        </div>

                        <a href="" class="bookBtn">
                            BOOK
                        </a>

                        <div class="roomInfo">
                            <span class="price">
                                $250 / Night
                            </span>

                            <span class="roomType">
                               Honey Moon Suite
                            </span>

                            <div class="overFlowText flex">
                                <div class="icons flex">
                                    <img src="{{ asset("img/bed.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath-towel.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/wifi.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/room-service.png") }}" alt="hotel Room in Entebbe">
                                </div>

                                <a href="singleRoomDetails.html" class="flex">DETAILS <i class="uil uil-arrow-right icon"></i></a>
                            </div>
                        </div>

                        <div class="overlayColor">

                        </div>
                    </div>
                </div>

                <div class="secondGrid grid">
                    <div class="singleRoom">
                        <div class="imgDiv">
                            <img src="{{ asset("img/standard-room-entebbe-hotel-horizon-1.jpg") }}" alt="Best Hotel Rooms in Singapore - Entebbe">
                        </div>
    
                        <a href="" class="bookBtn">
                            BOOK
                        </a>
    
                        <div class="roomInfo">
                            <span class="price">
                                $250 / Night
                            </span>
    
                            <span class="roomType">
                               Super Delux Suite
                            </span>
    
                            <div class="overFlowText flex">
                                <div class="icons flex">
                                    <img src="{{ asset("img/bed.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath-towel.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/wifi.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/room-service.png") }}" alt="hotel Room in Entebbe">
                                </div>
    
                                <a href="singleRoomDetails.html" class="flex">DETAILS <i class="uil uil-arrow-right icon"></i></a>
                            </div>
                        </div>
    
                        <div class="overlayColor">
    
                        </div>
                    </div>
                    <div class="singleRoom">
                        <div class="imgDiv">
                            <img src="{{ asset("img/family-room-2-hotel-horizon-entebbe.jpg") }}" alt="Best Hotel Rooms in Singapore - Entebbe">
                        </div>
    
                        <a href="" class="bookBtn">
                            BOOK
                        </a>
    
                        <div class="roomInfo">
                            <span class="price">
                                $500 / Night
                            </span>
    
                            <span class="roomType">
                                Family Suite
                            </span>
    
                            <div class="overFlowText flex">
                                <div class="icons flex">
                                    <img src="{{ asset("img/bed.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/bath-towel.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/wifi.png") }}" alt="hotel Room in Entebbe">
                                    <img src="{{ asset("img/room-service.png") }}" alt="hotel Room in Entebbe">
                                </div>
    
                                <a href="singleRoomDetails.html" class="flex">DETAILS <i class="uil uil-arrow-right icon"></i></a>
                            </div>
                        </div>
    
                        <div class="overlayColor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROOMS & SUITES SECTION ENDS -->

    <!-- SERVICES SECTION -->
    <div class="section servicesSection container">
        <div class="sectionIntro">
            <span class="subTitle">
                our services and facilities
            </span>
            <span class="secTitle">
                Horizon Hotel Facilities
            </span>
        </div>

        <div class="sectionContent grid">
            <div class="singleService">
                <img src="{{ asset("img/travel.png") }}" alt="" class="primaryImage">
                <!-- <img src="./Assets/travel.png" alt="" class="overlayImage"> -->
                <span class="serviceTitle">
                    Pick Up & Drop
                </span>
                <p>We will pick and drop you off and on the airport at your arrival and departure times.</p>
            </div>

            <div class="singleService">
                <img src="{{ asset("img/parking.png") }}" alt="" class="primaryImage">
                <!-- <img src="./Assets/travel.png" alt="" class="overlayImage"> -->
                <span class="serviceTitle">
                    Parking Space
                </span>
                <p>We have and provide enough parking space for in-house and day guests.</p>
            </div>
            <div class="singleService">
                <img src="{{ asset("img/cleaning-cart.png") }}" alt="" class="primaryImage">
                <!-- <img src="./Assets/travel.png" alt="" class="overlayImage"> -->
                <span class="serviceTitle">
                    Room Services
                </span>
                <p>Great and professional guest room valets to keep your room clean at all time. </p>
            </div>

            <div class="singleService">
                <img src="{{ asset("img/swimming-pool.png") }}" alt="" class="primaryImage">
                <!-- <img src="./Assets/travel.png" alt="" class="overlayImage"> -->
                <span class="serviceTitle">
                    Swimming Pool
                </span>
                <p> Swimming time dolor sit amet, consectetur adipisicing elit. Ea, quas.</p>
            </div>

            <div class="singleService">
                <img src="{{ asset("img/wifi (3).png") }}" alt="" class="primaryImage">
                <!-- <img src="./Assets/travel.png" alt="" class="overlayImage"> -->
                <span class="serviceTitle">
                    Fast Internet Network
                </span>
                <p>We have a super fast internet and room cables for wired connection.</p>
            </div>

            <div class="singleService">
                <img src="{{ asset("img/breakfast.png") }}" alt="" class="primaryImage">
                <!-- <img src="./Assets/travel.png" alt="" class="overlayImage"> -->
                <span class="serviceTitle">
                    Room Dinning
                </span>
                <p>We offer room dinning with our chefs' made dishes or outsourced.</p>
            </div>
        </div>
    </div>
    <!-- SERVICES SECTION END -->

    <!-- EXTRA SERVICE SECTION -->
    <div class="section extraService">
        <div class="sectionContent container">

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
                            <img src="{{ asset("img/safe.jpg") }}" alt="Hotel Safe Box">
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
                            <img src="{{ asset("img/dining.jpg") }}" alt="Hotel Safe Box">
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
                            <img src="{{ asset("img/bar.png") }}" alt="Hotel Safe Box">
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
                            <img src="{{ asset("img/housekeeping.jpg") }}" alt="Hotel Safe Box">
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

    <!-- SEARCH ROOM  -->
    <div class="section searchRoom ">
        <div class="sectionContent container">
            <div class="sectionIntro">
                <span class="subTitle">
                    check room now
                </span>
                <span class="secTitle">
                  Search Rooms At Horizon
                </span>
            </div>

            <div class="searchField">
                <form method="POST" class="form ">
                    <div class="singleInput flex">
                        <label for="checkIn">Check In</label>
                        <input type="datetime-local" id="checkIn" name="checkInDate" required>  
                    </div>

                    <div class="singleInput flex">
                        <label for="checkOut">Check Out</label>
                        <input type="datetime-local" id="checkOut" name="checkOutDate" required>
                    </div>

                    <div class="singleInput flex">
                        <label for="capacity">Total People</label>
                        <input type="text" id="capacity" name="capacity" placeholder="E.g: 2 " required>
                        
                    </div>

                    <div class="singleInput flex">
                        <label for="roomType">Room Type</label>
                        <select name="roomType">
                            <option value="junior">Junior Room</option>
                            <option value="standard">Standard Room</option>
                            <option value="delux">Delux Room</option>
                            <option value="superDelux">Super Delux Room</option>
                            <option value="family" selected>Family Room</option>
                            <option value="business">Business Room</option>
                            <option value="honeymoon">Honeymoon Room</option>
                        </select>
                    </div>

                    <button class="btn bg ">Search Room </button>

                </form>

            </div>
        </div>
    </div>
    <!-- SEARCH ROOM ENDS -->

    <!-- TESTIMONIAL SECTION -->
    <div class="section testimonialSection">
    <div class="sectionContent container">
        <div class="sectionIntro">
            <span class="subTitle">
                testimonials
            </span>
            <span class="secTitle">
                What Our Clients' Say
            </span>
        </div>

        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide singleTestimony">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut vel dolore ipsum est sequi fuga eaque corporis fugit culpa necessitatibus, quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    Quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    </p>

                    <div class="clientDiv flex">
                        <div class="imgDiv">
                        <img src="{{ asset("img/user (14).png") }}" alt="Client Image">
                        </div>

                        <div class="clientBio">
                        <div class="flex stars animate__animated animate__fadeInUp">
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                        </div>

                        <span class="clientName">
                            Charmaine Tan
                        </span>
                        <small class="clientTitle">
                            Guest Review
                        </small>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide singleTestimony">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut vel dolore ipsum est sequi fuga eaque corporis fugit culpa necessitatibus, quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    Quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    </p>

                    <div class="clientDiv flex">
                        <div class="imgDiv">
                        <img src="{{ asset("img/user (12).png") }}" alt="Client Image">
                        </div>

                        <div class="clientBio">
                        <div class="flex stars animate__animated animate__fadeInUp">
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                        </div>

                        <span class="clientName">
                            Gerio Novic
                        </span>
                        <small class="clientTitle">
                            Guest Review
                        </small>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide singleTestimony">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut vel dolore ipsum est sequi fuga eaque corporis fugit culpa necessitatibus, quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    Quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    </p>

                    <div class="clientDiv flex">
                        <div class="imgDiv">
                        <img src="{{ asset("img/user (10).png") }}" alt="Client Image">
                        </div>

                        <div class="clientBio">
                        <div class="flex stars animate__animated animate__fadeInUp">
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                        </div>

                        <span class="clientName">
                            Christine Lopez
                        </span>
                        <small class="clientTitle">
                            Guest Review
                        </small>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide singleTestimony">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut vel dolore ipsum est sequi fuga eaque corporis fugit culpa necessitatibus, quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    Quidem explicabo facilis, maxime a ipsam non perspiciatis aperiam quibusdam.
                    </p>

                    <div class="clientDiv flex">
                        <div class="imgDiv">
                        <img src="{{ asset("img/user (25).png") }}" alt="Client Image">
                        </div>

                        <div class="clientBio">
                        <div class="flex stars animate__animated animate__fadeInUp">
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                            <i class='bx bxs-star icon'></i>
                        </div>

                        <span class="clientName">
                            Merez Linda
                        </span>
                        <small class="clientTitle">
                            Guest Review
                        </small>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>

        <i class='bx bxs-quote-alt-right quoteIcon' ></i>

    </div>
    </div>
    <!-- TESTIMONIAL SECTION ENDS -->

    <!-- GRID SECTION  -->
    <div class="section gridSection container" id="amenities">
        <div class="sectionContent grid">

            <div class="singleGrid flex">
                <div class="imageDiv">
                <img src="{{ asset("img/event.jpg") }}" alt="Event Space Image">
                </div>
                <div class="textDiv">
                <div class="sectionIntro">
                    <span class="secSubTitle">
                        discover
                    </span>
                    <span class="secMainTitle">
                        Event Spaces
                    </span>
                    
                </div>

                <p>
                    Check out our ambient and well-equipped event spaces that are not just a venue but a complete end-to-end service that ensure your event is a success without any hiccups! Check-out our event spaces by clicking the button below.
                </p>

                <a href="" class="btn bg">learn more</a>
                </div>
            </div>

            <div class="singleGrid flex">
                <div class="textDiv">
                    <div class="sectionIntro">
                        <span class="secSubTitle">
                            Experience
                        </span>
                        <span class="secMainTitle">
                            The Health Club & Pool
                        </span>
                        
                    </div>
    
                    <p>
                        Our health club and swimming  activities are well managed and fairly affordable by all people.
                        Getting a swimming pool membership gives you extra savings and benefits including discounted breakfast and 10% off on hotel rooms & events. See detailed pricing by clicking the button below.
                    </p>
    
                    <a href="" class="btn bg">learn more</a>
                    </div>
                <div class="imageDiv">
                <img src="{{ asset("img/relaxing-3112750_1920.jpg") }}" alt="Event Space Image">
                </div>
            </div>

            <div class="singleGrid flex">
                <div class="imageDiv">
                <img src="{{ asset("img/room (1).jpg") }}" alt="Event Space Image">
                </div>
                <div class="textDiv">
                <div class="sectionIntro">
                    <span class="secSubTitle">
                        dericiousness
                    </span>
                    <span class="secMainTitle">
                        Restaurants
                    </span>
                    
                </div>

                <p>
                    At Signature Restaurant, we pride ourselves on providing delicious, hygienically-prepared meals. Our international chef is a master at crafting continental dishes giving you a taste of the world. Discover what more the restaurant has to offer by clicking the button below.
                </p>

                <a href="" class="btn bg">learn more</a>
                </div>
            </div>

            <div class="singleGrid flex">
                <div class="textDiv">
                    <div class="sectionIntro">
                        <span class="secSubTitle">
                            comfort
                        </span>
                        <span class="secMainTitle">
                            Airport Pick Up & Drop Off
                        </span>
                        
                    </div>
    
                    <p>
                        We have experienced driver and comfirtable vehicles to get you off the airport at you arrival and departure times.
                        You simply need to let us know the number of guests you are moving with.
                    </p>
    
                    <a href="" class="btn bg">learn more</a>
                    </div>
                <div class="imageDiv">
                <img src="{{ asset("img/airport.jpg") }}" alt="Event Space Image">
                </div>
            </div>

        </div>
    </div>
    <!-- GRID SECTION ENDS -->

    <!-- NEWS SECTION -->
    <div class="section newSection">
        <div class="sectionContent container">
            <div class="sectionIntro">
                <span class="subTitle">
                    inside horizon hotel
                </span>
                <span class="secTitle">
                  Our Monthly Champions & News
                </span>
            </div>

            <div class="newsContainer swiper">
                <div class="swiper-wrapper">
                    <div class="singleNews swiper-slide">
                        <div class="imgDiv">
                         <img src="{{ asset("img/entebbe-hotel-horizon-elevation-road-view.jpg") }}" alt="">
                        </div>
                        <span class="dateBtn">
                         Nov  2022
                        </span>
 
                        <div class="infoCard">
                         <span class="tag">luxury</span>
                         <a href="" class="secMainTitle">
                             Why Horizon is the best Hotel in Entebbe
                         </a>
                        </div>
                    </div>

                    <div class="singleNews swiper-slide">
                       <div class="imgDiv">
                        <img src="{{ asset("img/chef-963195_1920.jpg") }}" alt="">
                       </div>
                       <span class="dateBtn">
                        Nov  2022
                       </span>

                       <div class="infoCard">
                        <span class="tag">champion</span>
                        <a href="" class="secMainTitle">
                            Introducing employee champion of  November
                        </a>
                       </div>
                    </div>
                    
                    <div class="singleNews swiper-slide">
                       <div class="imgDiv">
                        <img src="{{ asset("img/entebbe-hotel-horizon-reception.jpg") }}" alt="">
                       </div>
                       <span class="dateBtn">
                        Nov  2022
                       </span>

                       <div class="infoCard">
                        <span class="tag">record breaking</span>
                        <a href="" class="secMainTitle">
                            We hit 100% room occupancy this month.
                        </a>
                       </div>
                    </div>
                </div>
                
                <div class="swiper-button-next">
                    <i class="uil uil-arrow-right icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-arrow-left icon"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWS SECTION ENDS -->
     
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
                <p><a href="{{ route('login') }}">Administrators</a></p>
            </ul>
        </div>
        </div>
    </section>
    <!-- Footer Section Ends -->

    <!-- Link swiper.js -->
    <script src="{{ asset('js/swiper-bundle.min.js')}}"></script>
    <!-- Link to JS -->
    <script src="{{ asset('js/index.js') }}"></script>

    <!-- Link to the AOS animation Library  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>