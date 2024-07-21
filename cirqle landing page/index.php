<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        <?php

            include 'style.css';
        
        ?>
    </style>
</head>

<body>
    <header>

        <div class="header-div-1">
            <div>
                <img src="images/Group 1.png" alt="logo" class="logo">
            </div>
        </div>

        <div class="header-div-2">

            <div class="header-links-div"><a href="" onclick="add(1)" id="anchor-home"
                    class="header-anchors anchor-home">HOME</a></div>
            <div class="header-links-div"><a href="" onclick="add(2)" id="anchor-about-us" class="header-anchors">About
                    us</a></div>
            <div class="header-links-div"><a href="" onclick="add(3)" id="anchor-services"
                    class="header-anchors">Services</a></div>
            <div class="header-links-div"><a href="" onclick="add(4)" id="anchor-featured"
                    class="header-anchors">Features</a></div>
            <div class="header-links-div"><a href="" onclick="add(5)" id="anchor-contact-us"
                    class="header-anchors">Contact us</a></div>


            <div class="search-box" onclick="add(6)" id="inp">
                <input type="search" class="input-search" placeholder="search business |">
                <div class="search-icon-div">

                </div>
            </div>
            <i class="fa fa-bars" id="bar" onclick="bar()" aria-hidden="true"></i>



        </div>

        <div class="sidebar-main-div" id="sidebar-main-div">
            <nav>
                <div class="close"><i class="fa fa-window-close-o" id="close" onclick="closee()" aria-hidden="true"></i>
                </div>

                <div class="sidb-anc-div">
                    <a href="" class="sidebar-anchor">home</a>
                    <a href="" class="sidebar-anchor">About
                        us</a>
                    <a href="" class="sidebar-anchor">Services</a>
                    <a href="" class="sidebar-anchor">Features</a>
                    <a href="" class="sidebar-anchor">Contact us</a>

                </div>

            </nav>
        </div>


    </header>











    <section class="welcome-section">

        <div class="welcome-text-div">
            <div class="welcome-text-1">&nbsp;welcome to</div>
            <div class="welcome-text-2">Cirqle,</div>
            <div class="welcome-text-3">Transform How Business
                connect</div>
            <div class="welcome-text-4">
                Discover a seamless way to find, rate, and review businesses within
                your industry. Cirqle empowers both general and business users to
                connect, collaborate, and thrive with transparency and trust at
                its core. Join Cirqle today and elevate your business interactions
                to the next level.
            </div>

            <div class="welcome-text-btn-div">
                <button class="welcome-text-btn">Download the App</button>
            </div>

            <div class="app-google-img">
                <img src="images/pngwing 1.png" alt="google play" class="google-img">
            </div>

        </div>

        <div class="welcome-img-div">

        </div>

    </section>






    <section class="cirqle-benefit-section">

        <div class="cirqle-benefit-text">

            <div class="cirqle-benefit-text-1">How Cirqle Benefit
                Businesses?
            </div>

            <div class="cirqle-benefit-text-2">Cirqle is designed to help businesses
                enhance their visibility and credibility through community-driven
                reviews and ratings. Our platform provides a space where businesses
                can connect, share feedback, and grow together. Explore the unique
                features that make Cirqle an essential tool for your business
            </div>

            <div class="radios-div">

                <div class="radio-div_text">

                    <div class="radio-circle-div" onclick="radio(1)">
                        <div class="checked-circle" id="checked-circle-1"></div>
                    </div>
                    <div class="radio_text">Genuine Reviews and Ratings</div>

                </div>

                <div>
                    <div class="yellow-line">

                    </div>

                </div>



                <div class="radio-div_text radio-div_text-2">

                    <div class="radio-circle-div" onclick="radio(2)">
                        <div id="checked-circle-2"></div>
                    </div>
                    <div class="radio_text">Interactive Discussion Tables</div>

                </div>

                <div>
                    <div class="yellow-line yellow-line-2">

                    </div>

                </div>






                <div class="radio-div_text radio-div_text-3">

                    <div class="radio-circle-div" onclick="radio(3)">
                        <div id="checked-circle-3"></div>
                    </div>
                    <div class="radio_text">Enhanced Visibility</div>

                </div>

                <div>
                    <div class="yellow-line yellow-line-3">

                    </div>

                </div>




                <div class="radio-div_text radio-div_text-4">

                    <div class="radio-circle-div" onclick="radio(4)">
                        <div id="checked-circle-4"></div>
                    </div>
                    <div class="radio_text">Customizable Notifications</div>

                </div>

                <div>
                    <div class="yellow-line yellow-line-4">

                    </div>

                </div>



                <div class="radio-div_text radio-div_text-5">

                    <div class="radio-circle-div" onclick="radio(5)">
                        <div id="checked-circle-5"></div>
                    </div>
                    <div class="radio_text">Algorithm-Based Rankings</div>

                </div>



            </div>





        </div>


        <div class="cirqle-benefit-images">

            <div class="image-outer-div">

                <img src="images/Rectangle 113.png" alt="" id="radio_img" class="radio_img">

                <div class="radio_1_img_text">
                    <div class="radio_1_img_text_desc_1">
                        Features
                    </div>
                    <div class="radio_1_img_text_desc_2">
                        Genuine Reviews<br>
                        and Ratings
                    </div>
                </div>

            </div>

        </div>


    </section>



    <section class="about-section">

        <div class="about-img-div">

        </div>

        <div class="about-text-div">
            <div class="about-text-1">&nbsp;About Us</div>
            <div class="about-text-2">Get to Know Us</div>
            <div class="about-text-4">
                Cirqle is your ultimate platform for connecting with and rating
                businesses within your industry. Our mission is to foster transparency,
                trust, and collaboration, helping businesses and users alike build
                stronger, more reliable networks. Join us and experience the future
                of business networking.
            </div>

            <div class="about-text-btn-div">
                <button class="about-text-btn">Download the App</button>
            </div>

            <div class="app-google-img">
                <img src="images/pngwing 1.png" alt="google play" class="google-img">
            </div>

        </div>



    </section>



    <section class="discover-section">

        <div class="discover-text">

            <h2>Discover Our Features</h2>
            <div class="discover-btns">
                <div class="btn-divs">Construction Services</div>
                <div class="white-line"></div>
                <div class="btn-divs">Wedding Designs</div>
            </div>
            <p class="discover-para">
                At Cirqle, we offer a suite of innovative features designed to enhance
                your business relationships. From detailed ratings and reviews to
                industry-specific networking, our platform is tailored to meet the unique
                needs of both general users and businesses. Explore our features and see
                how Cirqle can revolutionize your business connections.
            </p>

        </div>


        <div class="discover-box-1">

            <div class="discover-boxes">

                <div class="eclipse-imgdiv">
                    <img src="images/2 1.png" width="22%" height="60%" alt="">
                </div>
                <p class="eclipse-text">Comprehensive Business Search</p>

            </div>


            <div class="discover-boxes">
                <div class="eclipse-imgdiv2">
                    <img src="images/Rating Icon 1.png" width="20%" height="56%" alt="">
                </div>
                <p class="eclipse-text" style="color: #3361AC;">Detailed Ratings</p>
            </div>

            <div class="discover-boxes">
                <div class="eclipse-imgdiv">
                    <img src="images/Group 32.png" width="16%" height="45%" alt="">
                </div>
                <p class="eclipse-text">Industry-Specific Networks</p>
            </div>

        </div>



        <div class="discover-box-2">

            <div class="discover-boxes">

                <div class="eclipse-imgdiv">
                    <img src="images/newIcon 2.png" width="22%" height="60%" alt="">
                </div>
                <p class="eclipse-text">Comprehensive Business Search</p>

            </div>


            <div class="discover-boxes">
                <div class="eclipse-imgdiv">
                    <img src="images/Review Reminder 1.png" width="22%" height="60%" alt="">
                </div>
                <p class="eclipse-text">Automated Review Reminders</p>
            </div>



        </div>





    </section>





    <section class="contact-us">

        <div class="contact-header">
            <h2>contact us</h2>
            <p>We're here to help! Reach out to us through the form below .We'll get back to you as
                soon as possible. Your satisfaction is our priority!</p>
        </div>

        <div class="con-main-div">
            <div class="get-in-touch">
                <div class="shape-div">
                    <img src="images/Shape.png" class="shape" alt="">
                </div>

                <div class="shape-txt-div">
                    <h2>Get in touch</h2>

                    <div class="info">
                        <div class="info-icon">
                            <img src="images/Envelope.png" alt="">
                        </div>
                        <div class="info-txt">
                            <span>Email us</span>
                            <p>info@golio.com</p>
                        </div>
                    </div>

                    <div class="info">
                        <div class="info-icon">
                            <img src="images/PhoneCall.png" alt="">
                        </div>
                        <div class="info-txt">
                            <span>Phone number</span>
                            <p>+1-202-555-0138</p>
                        </div>
                    </div>

                    <div class="info">
                        <div class="info-icon">
                            <img src="images/MapPinLine.png" alt="">
                        </div>
                        <div class="info-txt">

                            <p id="address">901 N Pitt Str., Suite 170<br>
                                Alexandria, VA 22314, USA</p>
                        </div>
                    </div>


                </div>


            </div>






            <div class="form-div">
                <h2>contact us</h2>

                <form action="email.php" method="post" id="form">

                    <input type="text" class="form-input" placeholder="FULL NAME" name="full_name" required>
                    <input type="number" class="form-input" placeholder="PHONE NUMBER" name="phone_number" required>
                    <input type="email" class="form-input" placeholder="EMAIL" name="email" required>
                    <textarea class="form-input" form="form" placeholder="MESSAGE" name="message" required></textarea>

                    <button class="form-btn" type="submit" name="button">submit &nbsp;<img src="images/ArrowRight.png" width="20px"
                            height="20px" alt=""></button>

                </form>

            </div>

        </div>

    </section>




    <footer>
        <div class="footer-div-1">
            <div class="footerlinks-div1">
                <img src="images/Group 49.png" width="80%" alt="">
                <p>Businesses can rate and review each other, fostering a culture of accountability.</p>
                <div class="app-google-img">
                    <img src="images/pngwing 1.png" alt="google play" class="google-img app-store">
                </div>
            </div>

            <div class="footerlinks-div2">
                <h2>Useful Links</h2>
                <div class="ft-an-fiv">
                    <a href="" class="footer-anchor">Home</a>
                </div>
                <div class="ft-an-fiv">
                    <a href="" class="footer-anchor">Services</a>
                </div>
                <div class="ft-an-fiv">
                    <a href="" class="footer-anchor">About Us</a>
                </div>
                <div class="ft-an-fiv">
                    <a href="" class="footer-anchor">Features</a>
                </div>
                <div class="ft-an-fiv">
                    <a href="" class="footer-anchor">Contact Us</a>
                </div>
            </div>


            <div class="footerlinks-div3">
                <h2>Connect With Us</h2>
                <div class="ft-an-fiv">
                    <img src="images/Social Media.png" width="40px" height="40px" alt="">
                    &nbsp;
                    <a href="" class="footer-anchor-2">Facebook</a>
                </div>
                <div class="ft-an-fiv">
                    <img src="images/Social Media (1).png" width="40px" height="40px" alt="">
                    &nbsp;
                    <a href="" class="footer-anchor-2">Twitter</a>
                </div>
                <div class="ft-an-fiv">
                    <img src="images/Social Media (2).png" width="40px" height="40px" alt="">
                    &nbsp;
                    <a href="" class="footer-anchor-2">LinkedIn</a>
                </div>
                <div class="ft-an-fiv">
                    <img src="images/Social Media (3).png" width="40px" height="40px" alt="">
                    &nbsp;
                    <a href="" class="footer-anchor-2">Instagram</a>
                </div>

            </div>
        </div>


        <div class="footer-div-2">
            Copyright © 2024 CIRQLE
        </div>


    </footer>

















    <script>

        function add(i) {
            var home = document.getElementById("anchor-home");
            var about = document.getElementById("anchor-about-us");
            var services = document.getElementById("anchor-services");
            var featured = document.getElementById("anchor-featured");
            var contactus = document.getElementById("anchor-contact-us");
            var inp = document.getElementById("inp");

            if (i == 2) {
                about.classList.add("anchor-about-us");
                home.classList.remove("anchor-home");
                services.classList.remove("anchor-services");
                featured.classList.remove("anchor-featured");
                contactus.classList.remove("anchor-contact-us");
                inp.classList.remove("input-div");
                event.preventDefault();
            }
            else if (i == 3) {
                about.classList.remove("anchor-about-us");
                home.classList.remove("anchor-home");
                services.classList.add("anchor-services");
                featured.classList.remove("anchor-featured");
                contactus.classList.remove("anchor-contact-us");
                inp.classList.remove("input-div");
                event.preventDefault();
            }
            else if (i == 4) {
                about.classList.remove("anchor-about-us");
                home.classList.remove("anchor-home");
                services.classList.remove("anchor-services");
                featured.classList.add("anchor-featured");
                contactus.classList.remove("anchor-contact-us");
                inp.classList.remove("input-div");
                event.preventDefault();
            }
            else if (i == 5) {
                about.classList.remove("anchor-about-us");
                home.classList.remove("anchor-home");
                services.classList.remove("anchor-services");
                featured.classList.remove("anchor-featured");
                contactus.classList.add("anchor-contact-us");
                inp.classList.remove("input-div");
                event.preventDefault();
            }
            else if (i == 6) {
                about.classList.remove("anchor-about-us");
                home.classList.remove("anchor-home");
                services.classList.remove("anchor-services");
                featured.classList.remove("anchor-featured");
                contactus.classList.remove("anchor-contact-us");
                inp.classList.add("input-div");
                event.preventDefault();
            }

            else {
                about.classList.remove("anchor-about-us");
                home.classList.add("anchor-home");
                services.classList.remove("anchor-services");
                featured.classList.remove("anchor-featured");
                contactus.classList.remove("anchor-contact-us");
                inp.classList.remove("input-div");
                event.preventDefault();
            }



        }


        function bar() {
            var bar = document.getElementById("bar");
            var nav = document.getElementById('sidebar-main-div');

            nav.style.display = 'block';
        }

        function closee() {
            var nav = document.getElementById('sidebar-main-div');

            nav.style.display = 'none';
        }


        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                document.querySelector('header').style.position = 'fixed';

            } else {
                document.querySelector('header').style.position = 'static';
            }
        });






        function radio(r) {

            var radio_checked_1 = document.getElementById('checked-circle-1');
            var radio_checked_2 = document.getElementById('checked-circle-2');
            var radio_checked_3 = document.getElementById('checked-circle-3');
            var radio_checked_4 = document.getElementById('checked-circle-4');
            var radio_checked_5 = document.getElementById('checked-circle-5');

            var img = document.getElementById('radio_img');

            if (r == 1) {
                radio_checked_1.classList.add("checked-circle");
                img.src = 'images/Rectangle 113.png';
                radio_checked_2.classList.remove("checked-circle");
                radio_checked_3.classList.remove("checked-circle");
                radio_checked_4.classList.remove("checked-circle");
                radio_checked_5.classList.remove("checked-circle");
            }
            if (r == 2) {
                radio_checked_1.classList.remove("checked-circle");
                radio_checked_2.classList.add("checked-circle");
                radio_checked_3.classList.remove("checked-circle");
                radio_checked_4.classList.remove("checked-circle");
                radio_checked_5.classList.remove("checked-circle");
            }
            if (r == 3) {
                radio_checked_1.classList.remove("checked-circle");
                radio_checked_2.classList.remove("checked-circle");
                radio_checked_3.classList.add("checked-circle");
                radio_checked_4.classList.remove("checked-circle");
                radio_checked_5.classList.remove("checked-circle");
            }
            if (r == 4) {
                radio_checked_1.classList.remove("checked-circle");
                radio_checked_2.classList.remove("checked-circle");
                radio_checked_3.classList.remove("checked-circle");
                radio_checked_4.classList.add("checked-circle");
                radio_checked_5.classList.remove("checked-circle");
            }
            if (r == 5) {
                radio_checked_1.classList.remove("checked-circle");
                radio_checked_2.classList.remove("checked-circle");
                radio_checked_3.classList.remove("checked-circle");
                radio_checked_4.classList.remove("checked-circle");
                radio_checked_5.classList.add("checked-circle");
            }


        }












    </script>


</body>

</html>