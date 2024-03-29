<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="home.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&#038;display=swap"
        rel="stylesheet" />
</head>

<body class="bg">
    <!-- Start Header -->
    <div class="header">
        <div class="topnav">
            <img class="logo" src="images/capture7.PNG" alt="" />
            <a href="/logout">
                <a href="/">
                logout</a>
            <a href="/book">Book Now</a>
            <a href="/doctors">Doctors</a>
            <a href="#contact">Contact Us</a>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a class="active" href="#home">Home</a>
        </div>
    </div>
    @if (session('success_message'))
        <p class="sucess"> {{ session('success_message') }}</p>
    @endif
    </div>

    <!-- End Header -->
    <!-- Start Landing Section -->
    <div class="home" id="home">
        <div class="landing">
            <!--<div class="intro-text">
                <button class="btn btn-big btn-primary" onclick="window.location.href='/book'">book Now!</button>
                <h1>welcome</h1>
        <p> to our Orthopedic clinic </p>
            </div>-->
        </div>
    </div>
    <!-- End Landing Section -->
    <!-- Start Features -->

    <!-- End Features -->
    <!-- Start Services -->
    <div class="services" id="services">
        <div class="container">
            <h2 class="special-heading">Services</h2>
            <div class="services-content">
                <div class="col">
                    <!-- Start Service -->
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                            <img alt="1" src="images/spine1.jpg" width="200px" />
                            <h3>Spine clinic</h3>
                            <p>
                                Our spine consultants provide expert care to individuals.
                            </p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fab fa-sketch fa-2x"></i>
                        <div class="text">
                            <img alt="1" src="images/hand.png" width="220px" />
                            <h3>Hand surgery clinic</h3>
                            <p>
                                Hand surgery is the field of medicine that deals with problems of the hand.
                            </p>
                        </div>
                    </div>
                    <!-- End Service -->
                </div>
                <div class="col">
                    <!-- Start Services -->
                    <div class="srv">
                        <i class="fas fa-vector-square fa-2x"></i>
                        <div class="text">
                            <img alt="1" src="images/sport.jpg" width="150px" height="150" />
                            <h3>Sports injuries clinic</h3>
                            <p>
                                Most sports injuries fall into two categories: acute and chronic.<br>
                                An acute injury.
                            </p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fas fa-pencil-ruler fa-2x"></i>
                        <div class="text">
                            <img alt="1" src="images/osteopathic.jpg" width="190px" />
                            <h3>Osteopathy clinic</h3>
                            <p>
                                Osteopathy is a patient centered, holistic approach to health care.
                            </p>
                        </div>
                    </div>
                    <!-- End Services -->
                </div>
                <div class="col">
                    <!-- Start Service -->
                    <div class="srv">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                            <img alt="1" src="images/joint.jpg" width="150px" />
                            <h3>joint clinic</h3>
                            <p>
                                If you have pain or mobility problems in your hip, knee or shoulder joint .
                            </p>
                        </div>
                    </div>
                    <div class="srv">
                        <i class="fab fa-sketch fa-2x"></i>
                        <div class="text">
                            <img alt="1" src="images/physiotherapy.jpg" width="220px" />
                            <h3>physiotherapy clinic</h3>
                            <p>
                                We treat all musculo-skeletal problems including neck and back problems.
                            </p>
                        </div>
                    </div>
                    <!-- End Service -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start About -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="special-heading">About Us</h2>
            <div class="about-content">
                <div class="image">
                    <img src="images/Capture1.PNG" alt="" />
                </div>
                <div class="text">
                    <p>
                        OrthopedicClinic-Egypt is located in Cairo Nasr city , we offer all outpatient orthopedic and
                        rehabilitation
                        services.
                        Our consultants are highly experienced in the different.
                    </p>

                    <hr />

                    <p>
                        subspecialties of orthopedics and trauma including joint replacement surgeries,spine surgeries,
                        sports
                        injuries , pediatric orthopedic conditions and hand surgery.
                        Our team of physical therapists and osteopaths are well oriented of the different protocols in
                        postoperative
                        patient care and conservative treatment of different muscloskeletal conditions.
                        All basic radiological and laboratory investigations needed for our patients are also
                        availablein
                        OrthopedicClinic-Egypt.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Contact -->
    <div class="contact" id="contact">
        <div class="contact">
            <div class="container">
                <h2 class="special-heading">Contact</h2>
                <div class="info">
                    <p class="label">Feel free to drop us a line at:</p>
                    <a href="mailto:Orthopedic clinic.com?subject=Contact" class="link">Orthopedic.clinic@gmail.com</a>
                    <div class="social">
                      
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Contact -->
    <!-- Start Footer -->
    <div class="footer">&copy; 2022 All Right Reserved</div>

    <!--End Footer -->
</body>

</html>
