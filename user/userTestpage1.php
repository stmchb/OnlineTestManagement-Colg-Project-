<?php include "../db_connection.php";
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link  href="../img/onlinetestimg.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
    var arr = [];
    var count = 0;
    </script>
</head>

<body>
    <?php
    $dd = mysqli_query($conn, "select qid from tbl_questions where subid=" . $_GET['t']);
    while ($row = mysqli_fetch_array($dd)) {
        echo "<script>arr[count]='" . $row['qid'] . "'</script>";
        echo "<script> count++;</script>";
        mysqli_query($conn, "insert into tbl_test(email,questionid,answer,subid)values('" . $_SESSION['user'] . "'," . $row['qid'] . ",'no'," . $_GET['t'] . ")");
    }
    ?>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span></span> <span></span></p>
                                </div>

                                <div class="text_wrap">
                                    <p><a href="../login.php"> <i class="ti-user"></i> Login</a> <a
                                            href="../signup.php">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="../index.php">
                                            <img src="../img/onlinetestimg.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="../index.php">home</a></li>
                                                <li><a href="../Courses.html">Courses</a></li>
                                                <li><a href="../signup.php">Register</i></a>
                                                    <!-- <ul class="submenu">
                                                        <li><a href="blog.html">blog</a></li>
                                                        <li><a href="single-blog.html">single-blog</a></li>
                                                    </ul> -->
                                                </li>
                                                <li><a href="../login.php">Login </a>
                                                    <!-- <ul class="submenu">
                                                    <li><a href="Event.html">Event</a></li>
                                                    <li><a href="event_details.html">Event Details</a></li>
                                                    <li><a href="Admissions.html">Admissions</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul> -->
                                                </li>
                                                <li><a href="../contact.html">Contact</a></li>
                                                <li><a href="logoutpage.php">Logout</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a data-scroll-nav='1' href="#">WelCome User -
                                                <?php echo $_SESSION['user']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- latest_coures_area_start  -->
    <br><br><br>
    <div class="row">
        <div class="col-lg-6 bg-info text-center">

            <br><br><br>
            <h2 class="text-center">Your Question Numbers</h2>
            <br><br><br>
            <div class="container">
                <button class="btn btn-light" id="btn1" onclick="clkfun(this)">1</button>
                <button class="btn btn-light" id="btn2" onclick="clkfun(this)">2</button>
                <button class="btn btn-light" id="btn3" onclick="clkfun(this)">3</button>
                <button class="btn btn-light" id="btn4" onclick="clkfun(this)">4</button>
                <button class="btn btn-light" id="btn5" onclick="clkfun(this)">5</button>
                <button class="btn btn-light" id="btn6" onclick="clkfun(this)">6</button>
                <button class="btn btn-light" id="btn7" onclick="clkfun(this)">7</button>
                <button class="btn btn-light" id="btn8" onclick="clkfun(this)">8</button>
                <button class="btn btn-light" id="btn9" onclick="clkfun(this)">9</button>
                <button class="btn btn-light" id="btn10" onclick="clkfun(this)">10</button>
            </div>
            <br><br><br>
            <div class="container">
                <button class="btn btn-light" id="btn11" onclick="clkfun(this)">11</button>
                <button class="btn btn-light" id="btn12" onclick="clkfun(this)">12</button>
                <button class="btn btn-light" id="btn13" onclick="clkfun(this)">13</button>
                <button class="btn btn-light" id="btn14" onclick="clkfun(this)">14</button>
                <button class="btn btn-light" id="btn15" onclick="clkfun(this)">15</button>
                <button class="btn btn-light" id="btn16" onclick="clkfun(this)">16</button>
                <button class="btn btn-light" id="btn17" onclick="clkfun(this)">17</button>
                <button class="btn btn-light" id="btn18" onclick="clkfun(this)">18</button>
                <button class="btn btn-light" id="btn19" onclick="clkfun(this)">19</button>
                <button class="btn btn-light" id="btn20" onclick="clkfun(this)">20</button>
            </div>
            <br><br><br>
            <div class="container">
                <button class="btn btn-light" id="btn21" onclick="clkfun(this)">21</button>
                <button class="btn btn-light" id="btn22" onclick="clkfun(this)">22</button>
                <button class="btn btn-light" id="btn23" onclick="clkfun(this)">23</button>
                <button class="btn btn-light" id="btn24" onclick="clkfun(this)">24</button>
                <button class="btn btn-light" id="btn25" onclick="clkfun(this)">25</button>
                <button class="btn btn-light" id="btn26" onclick="clkfun(this)">26</button>
                <button class="btn btn-light" id="btn27" onclick="clkfun(this)">27</button>
                <button class="btn btn-light" id="btn28" onclick="clkfun(this)">28</button>
                <button class="btn btn-light" id="btn29" onclick="clkfun(this)">29</button>
                <button class="btn btn-light" id="btn30" onclick="clkfun(this)">30</button>
            </div>
        </div>
        <div class="col-lg-6 text-center bg-info">
            <div class="admission_form text-dark">

                <p class="text-center text-danger" id="some_div"></p>
                <br>
                <h4 class="font-weight-bold text-center text-light">Queston No. <span id="qno2">1</span>
                </h4>
                <form method="post" id="mydata">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="single_input">
                                <!-- <input type="email" placeholder="Email Address" name="email" required> -->

                            </div>
                        </div>
                        <br>
                        <br>
                </form>
                <div class="col-md-12">

                </div>
            </div>


            <div class="apply_btn">
                <button id="next" class="btn btn-danger">Save and Next &gt;&gt;</button>


                <!-- <input type="submit" name="sub1" value="Go" class="boxed-btn3"> -->
                <!-- <input class="boxed-btn3" type="submit" name="login" value="Login Now"> -->
            </div>
            <br>
            <button class="btn btn-warning" onclick="markfun()">Mark</button>
            <?php
            echo "<script>var idd=" . $_GET['t'] . "</script>";
            ?>

        </div>
    </div>
    </div>
    <!--/ latest_coures_area_end -->
    <!-- recent_event_area_strat  -->
    <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent Event</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>02</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="../event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>03</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="../event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>10</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="../event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent_event_area_end  -->
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <ul>
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Center</a></li>
                                <li><a href="#">Become an Instructor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Campus
                            </h3>
                            <ul>
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Business Solutions</a></li>
                                <li><a href="#">Government Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Study
                            </h3>
                            <ul>
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                <li><a href="#">Any Information</a></li>
                                <li><a href="#">Tuition Calculator</a></li>
                                <li><a href="#">Request Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved 
                                <!-- Link back to  be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->
    <!-- JS here -->
    <script>
    function markfun() {
        document.getElementById('btn' + document.getElementById('qno2').innerText).style
            .backgroundColor = 'yellow';
    }

    function clkfun(sender) {
        var aa = sender.innerText;

        var sss = arr[aa - 1];
        if (arr.length < arr[aa - 1]) {
            $.ajax({ //create an ajax request to display.php
                type: "POST",
                url: "display.php",
                data: "myid123=" + sss,
                dataType: "html", //expect html to be returned
                success: function(response) {
                    $("#mydata").html(response);

                    // var ne = Number(document
                    //     .getElementById('qno2').innerText) + 1;
                    document.getElementById('qno2').innerText = aa;
                    //alert(response);
                }
            });
        }

    }
    var timeLeft = 1800;
    var elem = document.getElementById('some_div');

    var timerId = setInterval(countdown, 1000);

    function countdown() {
        if (timeLeft == 0) {
            clearTimeout(timerId);
            window.location = 'userHome1.php';
        } else {
            var hours = Math.floor(timeLeft / 60);
            var second = Math.floor(timeLeft % 60);
            elem.innerHTML = "Minutes " + hours + ' : ' + second + ' seconds remaining';
            timeLeft--;
        }
    }
    $(document).ready(function() {
        $.ajax({ //create an ajax request to display.php
            type: "POST",
            url: "display.php",
            data: "myid=" + idd,
            dataType: "html", //expect html to be returned
            success: function(response) {
                $("#mydata").html(response);
                //alert(response);
            }
        });
        var question_no = 1;
        $("#next").click(function() {
            document.getElementById('btn' + document.getElementById('qno2').innerText).style
                .backgroundColor = 'red';
            if (arr.length < arr[document.getElementById('qno2').innerText]) {
                $.ajax({ //create an ajax request to display.php
                    type: "POST",
                    url: "display.php",
                    data: "myid1=" + arr[document.getElementById('qno2').innerText],
                    dataType: "html", //expect html to be returned
                    success: function(response) {
                        $("#mydata").html(response);
                        var ne = Number(document
                            .getElementById('qno2').innerText) + 1;
                        document.getElementById('qno2').innerText = ne;
                        //alert(response);
                    }

                });
            }
            sub();
        });

        function sub() {
            var trueAns = document.querySelector('input[name="a"]:checked').value;
            var quesid = arr[Number(document.getElementById('qno2').innerText) - 1];
            $.ajax({ //create an ajax request to display.php
                type: "POST",
                url: "display.php",
                data: "aid=" + trueAns + "&qid=" + quesid + "&sid=" + idd,
                dataType: "html", //expect html to be returned
                success: function(response) {
                    // alert("sucess");
                }

            });
        }
    });
    </script>
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ajax-form.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/scrollIt.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="../js/contact.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>