<html>

<head>
    <title>Offerings</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
</head>

<body>
    <div class=overlay></div>
    <div class="cd-hero">
        <div class="cd-slider-nav">
            <nav>
                <div class="session_status">
                    <?php
                            include_once("DBconn.php");
                            session_start();
                            if($_SESSION["id"]) {
                                $ID = $_SESSION["id"];
                                if($ID == 0) {
                                    header("Location: admin.html");
                                }else {
                                    $CUST = $db->get_row("SELECT * FROM customers WHERE cid = $ID");
                                    if($CUST) {
                                        echo "<div>$CUST->fname $CUST->lname</div> <div class=\"primary-button\" id=\"LogoutButton\"><a>Logout</a></div><div class=\"primary-button\"><a href=\"myProfile.php\">Profile</a></div>";
                                    } else {
                                        session_unset();
                                        session_destroy();
                                    }
                                }
                            }
                            ?>
                </div>
                <span class="cd-marker item-1"></span>
                <ul>
                    <li>
                        <a href="index.php">
                            <div class="image-icon">
                                <img src="img/home-icon.png">
                            </div>
                            <h6>WELCOME</h6>
                        </a>
                    </li>
                    <li>
                        <a href="index3.php">
                            <div class="image-icon">
                                <img src="img/about-icon.png">
                            </div>
                            <h6>JOIN US</h6>
                        </a>
                    </li>
                    <li>
                        <a href="book.php">
                            <div class="image-icon">
                                <img src="img/featured-icon.png">
                            </div>
                            <h6>BOOK NOW</h6>
                        </a>
                    </li>
                    <li class="selected">
                        <a href="#0">
                            <div class="image-icon">
                                <img src="img/projects-icon.png">
                            </div>
                            <h6>OFFERINGS</h6>
                        </a>
                    </li>
                    <li>
                        <a href="index2.php">
                            <div class="image-icon">
                                <img src="img/contact-icon.png">
                            </div>
                            <h6>CONTACT</h6>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="heading">
            <h1>OFFERINGS</h1>
            <span>GET MORE INFO ABOUT THE OPTIONS WE HAVE FOR YOU</span>
        </div>
        <div class="content first-content">
            <p>
                All the rooms can be customized based on your requirement.
            </p>
            <br />

            <hr align="center" width="90%" />
            <br />
            <table>
                <tr>
                    <td>
                        <img src="img/1_m.jpg" />
                    </td>
                    <td style="padding:30px;">
                        <h4>Board Rooms</h4>
                        <span class="desc">Our spacious board rooms can be used to hold your company board meetings or to make presentations
                            to clients/internal teams.</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;">
                        <h4>Conference Rooms</h4>
                        <span class="desc">You may use our conference rooms to hold your corporate conferences, audio and video conferencing
                            and group discussions.</span>
                    </td>
                    <td>
                        <img src="img/2_m.jpg" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="img/3_m.jpg" />
                    </td>
                    <td style="padding:30px;">
                        <h4>Meeting Rooms</h4>
                        <span class="desc">We have meeting rooms available in various seating configurations to suit your requirement for any
                            kind of meetings - be it an internal discussion or a discussion with your clients/vendors or
                            an interview or a business meeting
                            <span>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;">
                        <h4>Training Rooms</h4>
                        <span class="desc">We have fully equipped training rooms to suit your training requirements
                            <span>

                    </td>
                    <td>
                        <img src="img/4_m.jpg" />
                    </td>
                </tr>
            </table>
            <br />
            <hr align="center" width="90%" />
            <div class="primary-button">
                <a href="book.php">Book Now!</a>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright &copy; 2018 YOUROOMS | Designed byMRBA</p>
    </footer>
    <script type="text/javascript">
        function logout() {
            document.location = 'logout.php';
        }
        let logoutButton = document.getElementById("LogoutButton"); 		(logoutButton)?logoutButton.addEventListener('click', logout, false):null;
    </script>
</body>

</html>