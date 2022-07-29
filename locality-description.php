<!doctype html>
<html lang="en">

<head>

    <?php  include 'css.php'?>
    <title>Developer Description</title>
</head>

<body>
    <div class="wrapper">
        <!-- header section  -->
        <?php include 'header.php' ?>



        <div class="row m-0 p-0 align-items-center">
            <div class="col-md-4 p-0 m-0">
                <div class="container">
                    <h2>Nerul, <br> Navi Mumbai</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, voluptas quos ipsum deleniti
                        laudantium perferendis reiciendis debitis!</p>
                </div>
            </div>
            <div class="col-md-8 p-0 m-0">
                <div class="banner-img">
                    <img src=".assets/images/banner4.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>


        <div class="desc-img-container mt-5">
            <div class="property-desc-bg">
                <div class="middle-img">
                    <img src="./assets/images/architech2.jpg" class="img-fluid" alt="">
                </div>
                <div class="top-img">
                    <img src="./assets/images/lines.svg" alt="" srcset="">
                </div>
                <div class="bottom-img">
                    <img src="./assets/images/lines2.svg" alt="" srcset="">
                </div>
            </div>
        </div>




        <div class="est-com">
            <div class="est-heading">
                <h3>Price trends</h3>
                <div id="chart"></div>
            </div>
        </div>


        <div class="est-com">
            <div class="img-slider">
                <h3>image slider</h3>
            </div>
        </div>

        <div class="est-com">
            <div class="card property-box m-5 rounded">
                <div class="prt-card-img p-4">
                    <img src="./assets/images/map2.jpg" class="card-img-top rounded" alt="...">
                    <!-- <div class="side-line">
                        <img src="./assets/images/slideline.svg" alt="">
                    </div> -->
                </div>
            </div>
        </div>


        <div class="desc-img-container">
            <div class="property-desc-bg">
                <div class="middle-img">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                           <div class="pros text-light">
                               <ul>
                                <h3>Pros</h3>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor delectus quo id eius esse.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor delectus quo id eius esse.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor delectus quo id eius esse.</li>
                                
                            </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                        <div class="cons text-light">
                            <ul>
                                <h3>Cons</h3>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor delectus quo id eius esse.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor delectus quo id eius esse.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor delectus quo id eius esse.</li>
                                
                            </ul>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="top-img">
                    <img src="./assets/images/lines.svg" alt="" srcset="">
                </div>
                <div class="bottom-img">
                    <img src="./assets/images/lines2.svg" alt="" srcset="">
                </div>
            </div>
        </div>







    </div>

    <!-- apex charts links -->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <?php include 'js.php' ?>

</body>

</html>