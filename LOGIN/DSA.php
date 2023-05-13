<!DOCTYPE html>
<html lang="en">

<head>

    <title>Data Structures</title>
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
                <li><a href="quizhome.php">Test/Quiz</a></li>
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
                    <a href="DSA.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="DSA.php">Data Structures</a>
                </li>
                <li class="nav-item">
                    <a href="DBMS.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="DBMS.php">DataBase Management System</a>  
                </li>
                <li class="nav-item">
                    <a href="CN.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="CN.php">Computer Network</a>
                </li>
                <li class="nav-item">
                    <a href="OS.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="OS.php">Operating System</a>
                </li>
                <li class="nav-item">
                    <a href="SE.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="SE.php">Software Engineering</a>
                </li>
                <li class="nav-item">
                    <a href="quizhome.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="quizhome.php">Test/Quiz</a>
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
                    <h1>Topics</h1>
                </div>
                <div class="Tcontainer">
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./DSA/Array.php"><img class="skill-icon" src="./images/array.png" alt="Array"></a>
                            </div>
                            <a href="./DSA/Array.php" class="skillname"><h3>Array</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="./DSA/Linkedlist.php"><img class="skill-icon" src="./images/linkedlist.png" alt="Linked List"></a>
                            </div>
                            <a href="./DSA/Linkedlist.php" class="skillname"><h3>Linked List</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="DSA/Queue.php"><img class="skill-icon" src="images/queue.png" alt="Queue"></a>
                            </div>
                            <a href="DSA/Queue.php" class="skillname"><h3>Queue</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="DSA/Stack.php"><img class="skill-icon" src="images/stack.png" alt="Stack"></a>
                            </div>
                            <a href="DSA/Stack.php" class="skillname"><h3>Stack</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="DSA/Heap.php"><img class="skill-icon" src="images/heap.png" alt="Heap"></a>
                            </div>
                            <a href="DSA/Heap.php" class="skillname"><h3>Heap</h3></a>
                        </div>
                    </div>
                    <div class="skill-box">
                        <div class="skill-title">
                            <div class="tech_img">
                                <a href="DSA/Hashing.php"><img class="skill-icon" src="images/hashing.png" alt="Sorting"></a>
                            </div>
                            <a href="DSA/Hashing.php" class="skillname"><h3>Hashing</h3></a>
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