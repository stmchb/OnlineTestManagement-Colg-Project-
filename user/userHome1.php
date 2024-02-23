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
</head>

<body>
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
                                                <li><a href="../index.php">Home</a></li>
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
    <div class="admission_area">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7 text-center">
                        <div class="admission_form">
                            <h3>Choose Subject</h3>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <div class="single_input">
                                            <!-- <input type="email" placeholder="Email Address" name="email" required> -->
                                            <select name="sub" class="form-control"
                                                style="margin-left: 170px;margin-bottom:50px;">
                                                <option value="0">---Select---</option>
                                                <?php
                                                $data = mysqli_query($conn, "select tbl_subject.id,tbl_subject.subjectName from tbl_subject left join tbl_test on subid=tbl_subject.id and tbl_test.email='" . $_SESSION['user'] . "' where tbl_test.subid is null");
                                                while ($dt = mysqli_fetch_array($data)) {



                                                    echo "<option value='" . $dt['id'] . "'>" . $dt['subjectName'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="col-md-12">
                                        <div class="apply_btn">
                                            <input type="submit" name="sub1" value="Go" class="boxed-btn3">
                                            <!-- <input class="boxed-btn3" type="submit" name="login" value="Login Now"> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['sub1'])) {
                                echo "<script>window.location='userTestpage1.php?t=" . $_POST['sub'] . "'</script>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!--/ latest_coures_area_end -->
    <div class="container section_title text-center table-responsive">
        <?php
        $uname = $_SESSION['user'];
        $subName = "";
        $subjectid = "";
        $qr = "select * from tbl_subject join tbl_test on tbl_subject.id = tbl_test.subid where tbl_test.email='" . $uname . "'";
        $qq = mysqli_query($conn, $qr);
        if ($rr = mysqli_fetch_array($qq)) {
            $subName = $rr['subjectName'];
            $subjectid = $rr['subid'];
        }

        if (isset($subName)) {
        ?>
        <h3 class="mb-45">Your Results</h3>
        <table class="table table-bordered table-warning">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th class="table-success">Right Answer</th>
                    <th class="table-danger">Wrong Answer</th>
                    <th>Total Questions</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php

                    $data = mysqli_query($conn, "select count(*) from tbl_questions inner join tbl_test on tbl_test.questionid=tbl_questions.qid AND tbl_test.subid='" . $subjectid . "' and tbl_test.email='" . $_SESSION['user'] . "' and tbl_questions.ans=tbl_test.answer
                ");
                    while ($dt = mysqli_fetch_array($data)) {


                    ?>
                <tr>
                    <td><?php echo $subName; ?></td>
                    <td class="table-success"><?php echo $dt[0]; ?></td>
                    <td class="table-danger"><?php echo 30 - $dt[0]; ?></td>
                    <td>30</td>
                    <td><a href="userHome1.php?myiddd=3" class="btn btn-success">More Details</a></td>
                </tr>
                <?php

                    }
                } else {
                    echo "<tr>
                    <td>0</td>
                    <td class='table-success'>0</td>
                    <td class='table-danger'>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>";
                }
                ?>

            </tbody>
        </table>
        <?php
            if (isset($_GET['myiddd'])) {
            ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Question No</th>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Right Answer</th>
                    <th>Date And Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $cot = 0;
                        $data = mysqli_query($conn, "select * from tbl_questions inner join tbl_test on
                     tbl_test.questionid=tbl_questions.qid AND tbl_test.subid='" . $_GET['myiddd'] . "'
                      and tbl_test.email='" . $_SESSION['user'] . "'");
                        while ($de = mysqli_fetch_array($data)) {
                        ?>
                <tr>
                    <td><?php echo ++$cot; ?></td>
                    <td><?php echo $de[1]; ?></td>
                    <td><?php echo $de[11]; ?></td>
                    <td><?php echo $de[6]; ?></td>
                    <td><?php echo $de[12]; ?></td>
                </tr>
                <?php
                        } ?>

            </tbody>
        </table>
        <?php

            }
            ?>
    </div>
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
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->
    <!-- JS here -->
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