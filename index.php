<!doctype html>
<html lang="en">

<head>

    <?php  include 'css.php'?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home Page</title>
</head>

<body>



    <div class="wrapper">
        <!-- top banner  -->
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner">
                        <div class="logo">
                            <img src="./assets/images/logo.png" alt="" srcset="">
                            <h5>We Help You Building The Dreams & Bring More Than You Expect</h5>
                            <button class="est-btn">Search Properties
                                <img src="./assets/images/icons/search.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="banner-img">
                        <!-- <img src="./assets/images/banner.jpg" alt=""> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- navbar section  -->
        <div class="navbar-container">
            <nav class="navbar navbar-expand-lg ms-auto">
                <div class="container-fluid">
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button> -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-md-auto">
                            <li class="nav-item ">
                                <a class=" est-btn" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="" href="#">Projects</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="" href="#">Localities</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="" href="#">Developers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="toggle-btn ms-5">
                        <!-- <img src="./assets/images/icons/toggle.svg" alt="" srcset=""> -->
                        <i class="fas fa-bars"></i>
                        <!-- <button class="ms-5"></button> -->
                    </div>
                </div>
            </nav>
            <!-- <nav class="navbar navbar-expand-lg ms-auto">
                  <div class="navbar navbar-collapse" id="navbar">
                        <ul class="navbar-nav ms-md-auto">
                            <li class="nav-item">
                                <a href="" class=" est-btn">Home</a>
                            </li>
                        </ul>
                  </div>
              </nav> -->
        </div>


        <div class="est-com">

            <div class="card-slider">
                <div class="row">
                    <div class="col-md-4">
                        <div class="est-card">
                            <div class="card-img">
                                <img src="./assets/images/company_logo/lodha.png" alt="" height="100px" srcset="">
                            </div>
                            <div class="card-content mt-5">
                                <h3>Lodha Group</h3>
                                <p>35+ years of experience</p>
                                <h5>270+ Project Done</h5>
                            </div>
                            <div class="mt-5">
                                <button class="card-btn">Check Profile
                                    <div class="arrow-btn">
                                        <i class="far fa-chevron-double-down"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="est-card">
                            <div class="card-img text-center">
                                <img src="./assets/images/company_logo/prestige.png" alt="" height="100px" srcset="">
                            </div>
                            <div class="card-content mt-5">
                                <h3>Presitge Group</h3>
                                <p>40+ years of experience</p>
                                <h5>140+ Project Done</h5>
                            </div>
                            <div class=" mt-5">
                                <button class="card-btn">Check Profile
                                    <div class="arrow-btn">
                                        <i class="far fa-chevron-double-down"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="est-card">
                            <div class="card-img text-center">
                                <img src="./assets/images/company_logo/brigade.png" alt="" height="100px" srcset="">
                            </div>
                            <div class="card-content mt-5">
                                <h3>Bridge Group</h3>
                                <p>25+ years of experience</p>
                                <h5>180+ Project Done</h5>
                            </div>
                            <div class=" mt-5">

                                <button class="card-btn">Check Profile
                                    <div class="arrow-btn">
                                        <i class="far fa-chevron-double-down"></i>
                                    </div>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="est-com">
            <div class="search-container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-text">
                                    <input type="text" class="input-bar w-100"
                                        placeholder="Search Property name, Locality, Developer">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <span class="d-inline">Bedrooms</span>
                                    </div>
                                    <div class="plus-minus input-text ms-3">
                                        <input type="number" name="" class="input-bar w-100" id="">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <div class="d-flex align-items-center">
                                <span>Price Segment</span>
                                <div class="plus-minus input-text ms-3">
                                    <input type="text" name="" class="input-bar" id="" placeholder="Affordable">

                                </div>
                                <span>Ready To Move</span>
                                <div class="plus-minus input-text ms-3">
                                    <input type="text" name="" class="input-bar" id="">
                                </div>
                                <div class="ms-3">

                                    <button class="ad-filter-btn">Advance Filter</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-2">
                        <div class="search-icon1 ms-auto d-flex align-items-center">
                            <div class="search-icon2 mx-auto">
                                <i class="far fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-slide-container">
            <div class="row">
                <div class="col-md-2 p-0">
                    <div class="img img-2 position-relative d-flex align-items-center justify-content-center">
                        <img src="./assets/images/home3.jpg" height="500px" class="w-100" alt="">
                        <div class="bottom-text">
                            <h5>Aashiyana</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 p-0">
                    <div class="img img-2 position-relative d-flex align-items-center justify-content-center">
                        <img src="./assets/images/home2.jpg" height="500px" class="w-100" alt="">
                        <div class="bottom-text">
                            <h5>Lodha Miracle</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="img-container position-relative">
                        <div class="img ">
                            <img src="./assets/images/home1.jpg" height="500px" class="w-100" alt="">
                            <div class="pricing ">
                                <h5>Lodha Miracles</h5>
                                <p>Andheri East, Mumbai</p>
                                <h6>$ 450k - 680k</h6>
                                <div class="d-flex">
                                    <button>1BHK</button>
                                    <button>2BHK</button>
                                    <button>Rental</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- owl carousel 1  -->

        
        <!-- owl carousel 1 -->




        <div class="est-com">
            <div class="est-heading">
                <h4>Property Selection Process</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, repellendus? <br> Vero nesciunt
                    alias
                    reprehenderit recusandae quibusdam?</p>
            </div>

            <div class="process-flow">
                <div class="row">
                    <div class="col-md-3">

                        <div class="process-container">
                            <img src="./assets/images/icons/search.png" alt="">
                            <h5>Esplore</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="number-circle1">
                                <h3>01</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-container">
                            <img src="./assets/images/icons/check.svg" alt="">
                            <h5>Select a Property</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="number-circle">
                                <h3>02</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-container">
                            <img src="./assets/images/icons/date.svg" alt="">
                            <h5>Book a site</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="number-circle3">
                                <h3>03</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="process-container">
                            <div class="circle-card">
                                <img src="./assets/images/icons/book.svg" alt="">
                                <h5>Book Your Property</h5>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <div class="number-circle">
                                    <h3>04</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- <div class="est-com">
            <h4>Localities</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br> Itaque iste voluptatibus amet eos at.</p>
            <div class="localities">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="card-slider mx-auto">
                            <img src="./assets/images/slider1.jpg" height="250px" alt="">
                            <div class="cart-slide-text">
                                <h3>Bandra </h3>
                                <p>Sea-facing, specious</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-slider mx-auto">
                            <img src="./assets/images/slider1.jpg" height="300px" alt="">
                            <div class="cart-slide-text">
                                <h3>Bandra </h3>
                                <p>Sea-facing, specious</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-slider  mx-auto">
                            <img src="./assets/images/slider1.jpg" height="250px" alt="">
                            <div class="cart-slide-text">
                                <h3>Bandra </h3>
                                <p>Sea-facing, specious</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



        <!-- owl carousel  -->
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class=" ">
                    <img src="./assets/images/slider1.jpg" height="250px" alt="">
                    <div class="cart-slide-text">
                        <h3>Bandra </h3>
                        <p>Sea-facing, specious</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class=" ">
                    <img src="./assets/images/slider1.jpg" height="250px" alt="">
                    <div class="cart-slide-text">
                        <h3>Bandra </h3>
                        <p>Sea-facing, specious</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <img src="./assets/images/slider1.jpg" height="250px" alt="">
                    <div class="cart-slide-text">
                        <h3>Bandra </h3>
                        <p>Sea-facing, specious</p>
                    </div>
                </div>
            </div>
        </div>






        <div class="about-us position-relative">
            <div class="about-bg">
                <img src="./assets/images/aboutUsBg.jpg" height="" class="img-fluid" alt="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3>About Us
                                <h5>Key Points About Company</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing <br> elit. Officiis harum, neque
                                    sapiente doloribus minima earum?</p>
                                <div class="dropdowns">
                                    <ul>
                                        <li>
                                            <span>History</span>
                                        </li>
                                        <li>
                                            <span>Quality</span>
                                        </li>
                                        <li>
                                            <span>Future</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-icons">
                                    <div class="d-flex">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-youtube"></i>
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                </div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>

        </div>

        <!-- what we do  -->
        <?php include 'what-we-do.php'?>

        <div class="est-com">
            <div class="recent-project">
                <h3>Check Our Recent Project</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui sunt eius ipsam consequatur iste quia
                    error deleniti cupiditate quasi eos reprehenderit a voluptate dolores omnis velit recusandae,
                    tempore officia debitis! Quia quisquam, non sed voluptate nemo maxime laboriosam similique tempora.
                </p>
                <div class="project-img">
                    <img src="./assets/images/homeDesign.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="contact-form-dark">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./assets/images/contact-side.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <div class="w-logo">
                                <img src="./assets/images/whiteLogo.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem id assumenda
                                optio veritatis suscipit!</p>
                            <form action="">
                                <div class="mb-4">
                                    <input type="text" class="input-dark" placeholder="Your name">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="input-dark" placeholder="youremailaddressplease@mail.com">
                                </div>
                                <div class="mb-4">
                                    <button class="dark-btn">Get in Touch with Us <i
                                            class="far fa-long-arrow-right ms-3"></i> </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>







    </div>



    <?php include 'js.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>