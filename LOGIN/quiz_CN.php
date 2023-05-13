<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/quizstyle.css">
  <link rel="stylesheet" href="./css/style1.css">

  <title>CN Quiz</title>
  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="../LOGIN/images/logo2.png">
</head>
<body>
  
  <header>
    <h2 class="logo" style="color: #e77c24;">Algo<span style="color: white;">verse</span></h2>
    <nav>
    <ul class="navbar">
        <li><a href="user_page.php">Home</a></li>
        <li><a href="./quizhome.php">Test/Quiz</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </nav>
</header>
  <h1 class="quiz_heading">QUIZ</h1>
  
  <div class="test_body">
  <div class="quiz-container" id="quiz2">
  <div class="quiz-header">
    <h2 id="question2">Question Text</h2>
    <ul>
      <li>
        <input type="radio" name="answer" id="a2" class="answer2">
        <label for="a" id="a_text2">Answer</label>
      </li>

      <li>
        <input type="radio" name="answer" id="b2" class="answer2">
        <label for="b" id="b_text2">Answer</label>
      </li>

      <li>
        <input type="radio" name="answer" id="c2" class="answer2">
        <label for="c" id="c_text2">Answer</label>
      </li>

      <li>
        <input type="radio" name="answer" id="d2" class="answer2">
        <label for="d" id="d_text2">Answer</label>
      </li>

    </ul>
  </div>
  <button id="submit2">Submit</button>
</div>
</div>

<footer>
  <div class="last-text">
      <p>Copyright 2023-2024 © By Team Sajal  All Rights Reserved.</p>
       <p>Algoverse is Powered by JUET Students</p>
      <p>Algoverse is optimized for learning and training. Examples might be simplified to improve reading and
          learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant
          full correctness of all content. While using Algoverse, you agree to have read and accepted our terms of
          use, cookie and privacy policy.
      </p>
  </div>
</footer>

  <!---scroll-top--->
  <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>
  <script src="https://unpkg.com/scrollreveal"></script>

  <!---custom js link--->
  <script type="text/javascript" src="js/script.js"></script>
  <!-- JS File -->
  <script type="text/javascript" src="js/script.js"></script>
  <script src="js/quizscript_CN.js"></script>
  
</body>
</html>