<!DOCTYPE html>
<html lang="en">

<head>

    <title>Select Subject</title>
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="../LOGIN/images/logo2.png">

    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Roboto Font -->
    <link
        href="https://fonts.googleapis.com/css2family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="css/style1.css">

</head>

<body>
    <header>
        <h2 class="logo" style="color: #e77c24;">Algo<span style="color: white;">verse</span></h2>
        <nav>
            <ul class="navbar">
                <li><a href="user_page.php">Home</a></li>
                <li><a href="./Quizhome.php">Test/Quiz</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="sidebar">
        <div class="toggle">
            <i class="bx bx-chevron-right"></i>
        </div>
        <div class="logo">
            <img src="images/logo1.png" alt="...">
            <h3>Algoverse</h3>
        </div>
        <nav>
            <div class="nav-title">
                Subjects
            </div>
            <ul>
            <li class="nav-item active">
                    <a href="./quiz_DSA.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="./quiz_DSA.php">Data Structures</a>
                </li>
                <li class="nav-item">
                    <a href="./quiz_DBMS.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="./quiz_DBMS.php">DataBase Management System</a>  
                </li>
                <li class="nav-item">
                    <a href="./quiz_CN.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="./quiz_CN.php">Computer Network</a>
                </li>
                <li class="nav-item">
                    <a href="./quiz_OS.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="./quiz_OS.php">Operating System</a>
                </li>
                <li class="nav-item">
                    <a href="./quiz_SE.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="./quiz_SE.php">Software Engineering</a>
                </li>
                <li class="nav-item">
                    <a href="Quizhome.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="Quizhome.php">Test/Quiz</a>
                </li>
            </ul>

            <hr>
            <div class="nav-title">
                Supports
            </div>
            <ul>
                <li class="nav-item">
                    <a href="#" class="sideicon sideicon1"><i class="bx bxs-help-circle"></i></a>
                    <a href="#" class="sideicontext">Get Help</a>
                </li>
            </ul>
        </nav>
    </div>

    <section class="container container-open">
        <div class="box1">
            <div class="inner">
                <div class="Tech_header">
                    <h1>Select Subject</h1>
                </div>
                <div class="Tcontainer">
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./quiz_DSA.php"><img class="skill-icon" src="./images/DS.png"></a>
                            </div>
                            <a href="./quiz_DSA.php" class="skillname"><h3>DSA</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./quiz_CN.php"><img class="skill-icon" src="./images/CN.png" ></a>
                            </div>
                            <a href="./quiz_CN.php" class="skillname"><h3>CN</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./quiz_OS.php"><img class="skill-icon" src="images/OS.png" ></a>
                            </div>
                            <a href="./quiz_OS.php" class="skillname"><h3>OS</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./quiz_DBMS.php"><img class="skill-icon" src="images/DBMS.png" ></a>
                            </div>
                            <a href="./quiz_DBMS.php" class="skillname"><h3>DBMS</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./quiz_SE.php"><img class="skill-icon" src="images/SE.png" ></a>
                            </div>
                            <a href="./quiz_SE.php" class="skillname"><h3>SE</h3></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="last-text">
                    <p>
                        Copyright 2023-2024 © By Team Sajal All Rights Reserved.
                    </p>
                    <p>Algoverse is Powered by JUET Students</p>
                    <p>Algoverse is optimized for learning and training. Examples might be simplified to improve reading and
                        learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot
                        warrant
                        full correctness of all content. While using Algoverse, you agree to have read and accepted our terms of
                        use, cookie and privacy policy.
                    <div class="contact-icons center">
                        <a href=""><i class='bx bxl-linkedin'></i></a>
                        <a href=""><i class='bx bxl-facebook'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-github'></i></a>
                    </div>
                    </p>
                </div>
            </footer>
    </section>

    

    <!---scroll-top--->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!---custom js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- JS File -->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>