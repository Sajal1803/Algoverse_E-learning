<!DOCTYPE html>
<html lang="en">

<head>

    <title>String Data Structure - Algoverse</title>
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="../images/logo2.png">

    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Roboto Font -->
    <link
        href="https://fonts.googleapis.com/css2family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/style2.css">

</head>
<body>
    <header>
        <h2 class="logo" style="color: #e77c24;">Algo<span style="color: white;">verse</span></h2>
        <nav>
        <ul class="navbar">
                <li><a href="../user_page.php">Home</a></li>
                <li><a href="../quiz.php">Test/Quiz</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
        </ul>
        </nav>
    </header>

    <section class="container1">
    <div class="box1">
        <p class="subtopic">
            <h1>What is Hashing Data Structure ?</h1><br>Hashing refers to the process of generating a fixed-size output from an input of variable size using the mathematical formulas known as hash functions. This technique determines an index or location for the storage of an item in a data structure.:<br><br>
            <img class="centerimage" src="../images/hashing2.jpg" alt="Hashing"> <br><br>

            <h2>Need For Hash Data Structure?</h2> <br> 
            Every day, the data on the internet is increasing multifold and it is always a struggle to store this data efficiently. In day-to-day programming, this amount of data might not be that big, but still, it needs to be stored, accessed, and processed easily and efficiently. A very common data structure that is used for such a purpose is the Array data structure. <br> <br>
            Now the question arises if Array was already there, what was the need for a new data structure! The answer to this is in the word “efficiency“. Though storing in Array takes O(1) time, searching in it takes at least O(log n) time. This time appears to be small, but for a large data set, it can cause a lot of problems and this, in turn, makes the Array data structure inefficient. <br><br>

            So now we are looking for a data structure that can store the data and search in it in constant time, i.e. in O(1) time. This is how Hashing data structure came into play. With the introduction of the Hash data structure, it is now possible to easily store data in constant time and retrieve them in constant time as well. <br><br>

            <h2>Components of Hashing</h2> <br>
            There are majorly three components of hashing: <br>
            <b>1. Key: </b> A Key can be anything string or integer which is fed as input in the hash function the technique that determines an index or location for storage of an item in a data structure. <br> 
            <b>2. Hash Function: </b> The hash function receives the input key and returns the index of an element in an array called a hash table. The index is known as the hash index. <br>
            <b>3. Hash Table: </b> Hash table is a data structure that maps keys to values using a special function called a hash function. Hash stores the data in an associative manner in an array where each data value has its own unique index.
            <br><br>
            <img class="centerimage" src="../images/hashing1.png" alt="hashing components"> <br><br>

            <h2>How does Hashing work?</h2> <br>
            Suppose we have a set of strings {“ab”, “cd”, “efg”} and we would like to store it in a table.  <br><br>

            Our main objective here is to search or update the values stored in the table quickly in O(1) time and we are not concerned about the ordering of strings in the table. So the given set of strings can act as a key and the string itself will act as the value of the string but how to store the value corresponding to the key? <br><br>

            <b>Step 1:</b> We know that hash functions (which is some mathematical formula) are used to calculate the hash value which acts as the index of the data structure where the value will be stored. <br>
            <b>Step 2:</b>So, let's assign  <br>
            “a” = 1,<br>
            “b”=2, .. etc, to all alphabetical characters.  <br>
            <b>Step 3:</b> Therefore, the numerical value by summation of all characters of the string:  <br>
            <div class="code2">
                <code>
                    <ul>
                        <li>
                            “ab” = 1 + 2 = 3, <br>
                            “cd” = 3 + 4 = 7 , <br>
                            “efg” = 5 + 6 + 7 = 18  <br>
                        </li>
                    </ul>
                </code> <br>
            </div> 
            <b>Step 4:</b> Now, assume that we have a table of size 7 to store these strings. The hash function that is used here is the sum of the characters in key mod Table size. We can compute the location of the string in the array by taking the sum(string) mod 7. <br>
            <b>Step 5:</b> So we will then store  <br>
            “ab” in 3 mod 7 = 3,  <br>
            “cd” in 7 mod 7 = 0, and <br>
            “efg” in 18 mod 7 = 4. <br>
            <img class="centerimage" src="../images/hashing4.png" alt="mapping key"> <br><br>
            The above technique enables us to calculate the location of a given string by using a simple hash function and rapidly find the value that is stored in that location. Therefore the idea of hashing seems like a great way to store (key, value) pairs of the data in a table. <br><br>

            <h2>What is a Hash function?</h2> <br>
            The hash function creates a mapping between key and value, this is done through the use of mathematical formulas known as hash functions. The result of the hash function is referred to as a hash value or hash. The hash value is a representation of the original string of characters but usually smaller than the original. <br> <br>

            <b>For example:</b> Consider an array as a Map where the key is the index and the value is the value at that index. So for an array A if we have index i which will be treated as the key then we can find the value by simply looking at the value at A[i].
            simply looking up A[i].  <br><br>

            <h2>Types of Hash functions:</h2> <br>
            There are many hash functions that use numeric or alphanumeric keys. <br>
            <b>1. Division Method</b><br>
            <b>2. Mid Square Method</b> <br>
            <b>3. Folding</b><br>
            <b>4. Multiplication</b> <br> <br>

            <h2>Properties of a Good hash function</h2> <br>
            A hash function that maps every item into its own unique slot is known as a perfect hash function. We can construct a perfect hash function if we know the items and the collection will never change but the problem is that there is no systematic way to construct a perfect hash function given an arbitrary collection of items. Fortunately, we will still gain performance efficiency even if the hash function isn't perfect. We can achieve a perfect hash function by increasing the size of the hash table so that every possible value can be accommodated. As a result, each item will have a unique slot. Although this approach is feasible for a small number of items, it is not practical when the number of possibilities is large. <br>

            So, We can construct our hash function to do the same but the things that we must be careful about while constructing our own hash function. <br>

            A good hash function should have the following properties: <br><br>

            1. Efficiently computable.  <br>
            2. Should uniformly distribute the keys Each table position is equally likely for each. <br>
            3. Should minimize collisions. <br>
            4. Should have a low load factor(number of items in the table divided by the size of the table).<br><br>

            <h3>Complexity of calculating hash value using the hash function</h3> <br>
            <b>Time complexity: O(n)</b> <br>
            <b>Space complexity: O(1)</b> <br> <br>

            <h2>Problem with Hashing</h2> <br>
            If we consider the above example, the hash function we used is the sum of the letters, but if we examined the hash function closely then the problem can be easily visualized that for different strings same hash value is begin generated by the hash function.  <br><br>

            For example: {“ab”, “ba”} both have the same hash value, and string {“cd”,”be”} also generate the same hash value, etc. This is known as collision and it creates problem in searching, insertion, deletion, and updating of value.  <br><br>

            <h2>What is Collision?</h2> <br>
            The hashing process generates a small number for a big key, so there is a possibility that two keys could produce the same value. The situation where the newly inserted key maps to an already occupied, and it must be handled using some collision handling technology. <br><br>
            <img class="centerimage" src="../images/hashing3.png" alt="collision"> <br><br><br>

            <h3>How to handle collision</h3> <br><br>
            There are mainly two methods to handle collision:  <br>
            <b>1. Separate Chaining</b> <br>
            <b>2. Open Addressing</b> <br>
            <img class="centerimage" src="../images/hashing6.png" alt="handle collision"> <br><br><br>

            <h3>Advantages Of Hash Data Structure:</h3> <br>
            <li class="bp">Hash provides better synchronization than other data structures.</li> <br>
            <li class="bp">Hash tables are more efficient than search trees or other data structures</li> <br>
            <li class="bp">Hash provides constant time for searching, insertion, and deletion operations on average.</li><br> <br>
            
            <h3>Disadvantages Of Hash Data Structure:</h3> <br>
            <li class="bp">Hash is inefficient when there are many collisions.</li> <br>
            <li class="bp">Hash collisions are practically not avoided for a large set of possible keys.</li> <br>
            <li class="bp">Hash does not allow null values. </li> <br><br>
             
            <h3>Application Of Hash Data Structure:</h3> <br>
            <li class="bp">Hash is used in databases for indexing.</li> <br>
            <li class="bp">Hash is used in disk-based data structures.</li> <br>
            <li class="bp">In some programming languages like Python, JavaScript hash is used to implement objects. </li> <br> <br>
            </p><br><br><br><br><br>
        </div> 
        </section>

    <footer>
    <div class="last-text">
        <p>Copyright 2023-2024 © By Team Sajal  All Rights Reserved.</p>
         <p>Algoverse is Powered by JUET Students</p>
        <p>Algoverse is optimized for learning and training. Examples might be simplified to improve reading and
            learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant
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
    
    <!---scroll-top--->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!---custom js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- JS File -->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>