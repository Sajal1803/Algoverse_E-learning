<!DOCTYPE html>
<html lang="en">

<head>

    <title>Stack Data Structure- Algoverse</title>

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
            <h1>What is Stack Data Structure ?</h1><br>It is a linear data structure that follows a particular order in which the operations are performed. <br>
            To implement the stack, it is required to maintain the pointer to the top of the stack, which is the last element to be inserted because we can access the elements only on the top of the stack.<br><br>
            <h2><u>LIFO (Last In First Out)</u></h2> <br>
            <div class="code2">
                This strategy states that the element that is inserted last will come out first. You can take a pile of plates kept on top of each other as a real-life example. The plate which we put last is on the top and since we remove the plate that is at the top, we can say that the plate that was put last comes out first.
            </div> <br><br>
            <img class="centerimage" src="../images/Stack-1.png" alt="Stack-1"> <br><br>

            <h1><u>Basic Operations on Stack:</u></h1> <br> 
            In order to make manipulations in a stack, there are certain operations provided to us. <br><br>
            <ul>
                <li class="bp"><b>push()</b>to insert an element into the stack</li>
                <li class="bp"><b>pop()</b>to remove an element from the stack</li>
                <li class="bp"><b>top()</b>Returns the top element of the stack.</li>
                <li class="bp"><b>isEmpty()</b>returns true if stack is empty else false.</li>
                <li class="bp"><b>size()</b>returns the size of stack.</li>
            </ul> <br> <br>
            <img class="centerimage" src="../images/Stack-2.png" alt="Stack-2"> <br><br>

            <h2><u>Push:</u></h2><br>
            Adds an item to the stack. If the stack is full, then it is said to be an <b>Overflow condition</b>. <br><br>
            <h4><u>Algorithm for push:</u></h4>
            <div class="code2">
                <code>
                    begin <br>
                    if stack is full <br>
                        return<br>
                    endif<br>
                    else  <br>
                    increment top<br>
                    stack[top] assign value<br>
                    end else<br>
                    end procedure<br>
                </code><br>
            </div><br><br>

            <h2><u>Pop:</u></h2><br>
            Removes an item from the stack. The items are popped in the reversed order in which they are pushed. If the stack is empty, then it is said to be an <b>Underflow condition</b>. <br><br>
            <h4><u>Algorithm for Pop:</u></h4>
            <div class="code2">
                <code>
                    begin <br>
                    if stack is empty <br>
                        return<br>
                    endif<br>
                    else  <br>
                    store value of stack[top] <br>
                    decrement top <br>
                    return value <br>
                    end else<br>
                    end procedure<br>
                </code><br>
            </div><br><br>

            <h2><u>Top:</u></h2><br>
            Returns the top element of the stack. <br><br>
            <h4><u>Algorithm for Top:</u></h4>
            <div class="code2">
                <code>
                    begin <br>
                       return stack[top] <br>
                    end procedure<br>
                </code><br>
            </div><br><br>

            <h2><u>isEmpty:</u></h2><br>
            Returns true if the stack is empty, else false. <br><br>
            <h4><u>Algorithm for isEmpty:</u></h4>
            <div class="code2">
                <code>
                    begin <br>
                    if top < 1 <br>
                    return true <br>
                 else <br>
                    return false <br>
                end procedure <br>
                </code><br>
            </div><br><br>            

            <h1><u>Complexity Analysis:</u></h1> <br>
            <li><u>Time Complexity</u></li><br>
            <img class="centerimage" src="../images/Stack-3.png" alt="Stack-3"> <br><br><br>
            
            <h3>Types of Stacks:</h3> <br>
            <li class="bp"><b>Register Stack: </b> This type of stack is also a memory element present in the memory unit and can handle a small amount of data only. The height of the register stack is always limited as the size of the register stack is very small compared to the memory.</li> <br>
            <li class="bp"><b>Memory Stack: </b> This type of stack can handle a large amount of memory data. The height of the memory stack is flexible as it occupies a large amount of memory data. </li><br> <br>
             
            <h3><u>Application Of Linked list:</u></h3> <br>
            <li class="bp0">Infix to Postfix /Prefix conversion</li> <br>
            <li class="bp0">Redo-undo features at many places like editors, photoshop.</li> <br>
            <li class="bp0">Forward and backward features in web browsers Used in many algorithms like Tower of Hanoi, tree traversals, stock span problems, and histogram problems.</li> <br>
            <li class="bp0">Backtracking is one of the algorithm designing techniques. Some examples of backtracking are the Knight-Tour problem, N-Queen problem, find your way through a maze, and game-like chess or checkers in all these problems we dive into someway if that way is not efficient we come back to the previous state and go into some another path. To get back from a current state we need to store the previous state for that purpose we need a stack.</li> <br>
            <li class="bp0">In Graph Algorithms like Topological Sorting and Strongly Connected Components</li> <br> 
            <li class="bp0">In Memory management, any modern computer uses a stack as the primary management for a running purpose. Each program that is running in a computer system has its own memory allocations</li> <br> 
            <li class="bp0">String reversal is also another application of stack. Here one by one each character gets inserted into the stack. So the first character of the string is on the bottom of the stack and the last element of a string is on the top of the stack. After Performing the pop operations on the stack we get a string in reverse order.</li> <br> 
            <li class="bp0">Stack also helps in implementing function call in computers. The last called function is always completed first.</li> <br> 
            <li class="bp0">Stacks are also used to implement the undo/redo operation in text editor.</li> <br> <br>
            
            <h2><u>Implementation of Stack:</u></h2><br>
            There are two ways to implement a stack <br>
            <ul>
                <li class="bp">Using array</li> 
                <li class="bp">Using Linked List</li> <br>
            </ul>

            <h1><u>Implementing Stack using Array:</u></h1>
            <div class="code2">
                <code>
                    /* C++ program to implement basic stack operations */
                    #include < bits/stdc++.h > <br><br>

                    using namespace std;<br><br>

                    #define MAX 1000<br><br>

                    class Stack {<br>
                        int top;<br><br>

                    public:<br>
                        int a[MAX]; // Maximum size of Stack<br><br>

                        Stack() { top = -1; }<br>
                        bool push(int x);<br>
                        int pop();<br>
                        int peek();<br>
                        bool isEmpty();<br>
                    };<br><br>

                    bool Stack::push(int x)<br>
                    {<br>
                        if (top >= (MAX - 1)) {<br>
                            cout << "Stack Overflow";<br>
                            return false;<br>
                        }<br>
                        else {<br>
                            a[++top] = x;<br>
                            cout << x << " pushed into stack\n";<br>
                            return true;<br>
                        }<br>
                    }<br><br>

                    int Stack::pop()<br>
                    {<br>
                        if (top < 0) {<br>
                            cout << "Stack Underflow";<br>
                            return 0;<br>
                        }<br>
                        else {<br>
                            int x = a[top--];<br>
                            return x;<br>
                        }<br>
                    }<br>
                    int Stack::peek()<br>
                    {<br>
                        if (top < 0) {<br>
                            cout << "Stack is Empty";<br>
                            return 0;<br>
                        }<br>
                        else {<br>
                            int x = a[top];<br>
                            return x;<br>
                        }<br>
                    }<br><br>

                    bool Stack::isEmpty()<br>
                    {<br>
                        return (top < 0);<br>
                    }<br><br>

                    // Driver program to test above functions<br>
                    int main()<br>
                    {<br>
                        class Stack s;<br>
                        s.push(10);<br>
                        s.push(20);<br>
                        s.push(30);<br>
                        cout << s.pop() << " Popped from stack\n";<br><br>

                        //print top element of stack after popping<br>
                        cout << "Top element is : " << s.peek() << endl;<br><br>

                        //print all elements in stack :<br>
                        cout <<"Elements present in stack : ";<br>
                        while(!s.isEmpty())<br>
                        {<br>
                            // print top element in stack<br>
                            cout << s.peek() <<" ";<br>
                            // remove top element in stack<br>
                            s.pop();<br>
                        }<br><br>

                        return 0;<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>Output:</h2><br>
            <div class="code2">
                10 pushed to stack<br>
                20 pushed to stack<br>
                30 pushed to stack<br>
                30 popped from stack<br>
                Top element is 20<br>
                Elements present in stack : 20 10<br>
            </div> <br> <br>
        
            <h2>Advantages of array implementation:</h2> <br>
            <ul>
            <li class="bp0">Easy to implement.</li> 
            <li class="bp0">Memory is saved as pointers are not involved.</li><br>
            </ul><br>

            <h2>Disadvantages of array implementation:</h2> <br>
            <ul>
            <li class="bp0">It is not dynamic i.e., it doesn't grow and shrink depending on needs at runtime. [But in case of dynamic sized arrays like vector in C++, list in Python, ArrayList in Java, stacks can grow and shrink with array implementation as well].</li><br>
            <li class="bp0">The total size of the stack must be defined beforehand.</li><br>
            </ul><br><br>
            
            <h1><u>Implementing Stack using Linked List:</u></h1>
            <div class="code2">
                <code>
                    // C++ program for linked list implementation of stack
                    #include < bits/stdc++.h > <br>
                    using namespace std;<br><br>
                    
                    // A structure to represent a stack<br>
                    class StackNode {<br>
                    public:<br>
                        int data;<br>
                        StackNode* next;<br>
                    };<br><br>
                    
                    StackNode* newNode(int data)<br>
                    {<br>
                        StackNode* stackNode = new StackNode();<br>
                        stackNode->data = data;<br>
                        stackNode->next = NULL;<br>
                        return stackNode;<br>
                    }<br><br>
                    
                    int isEmpty(StackNode* root)<br>
                    {<br>
                        return !root;<br>
                    }<br><br>
                    
                    void push(StackNode** root, int data)<br>
                    {<br>
                        StackNode* stackNode = newNode(data);<br>
                        stackNode->next = *root;<br>
                        *root = stackNode;<br>
                        cout << data << " pushed to stack\n";<br>
                    }<br><br>
                    
                    int pop(StackNode** root)<br>
                    {<br>
                        if (isEmpty(*root))<br>
                            return INT_MIN;<br>
                        StackNode* temp = *root;<br>
                        *root = (*root)->next;<br>
                        int popped = temp->data;<br>
                        free(temp);<br><br>
                    
                        return popped;<br>
                    }<br>
                    
                    int peek(StackNode* root)<br>
                    {<br>
                        if (isEmpty(root))<br>
                            return INT_MIN;<br>
                        return root->data;<br>
                    }<br><br>
                    
                    // Driver code<br>
                    int main()<br>
                    {<br>
                        StackNode* root = NULL;<br><br>
                    
                        push(&root, 10);<br>
                        push(&root, 20);<br>
                        push(&root, 30);<br><br>
                    
                        cout << pop(&root) << " popped from stack\n";<br><br>
                    
                        cout << "Top element is " << peek(root) << endl;<br><br>
                        
                        cout <<"Elements present in stack : ";<br>
                        //print all elements in stack :<br>
                        while(!isEmpty(root))<br>
                        {<br>
                            // print top element in stack<br>
                            cout << peek(root) <<" ";<br>
                            // remove top element in stack<br>
                            pop(&root);<br>
                        }<br><br>
                    
                        return 0;<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>Output:</h2><br>
            <div class="code2">
                10 pushed to stack<br>
                20 pushed to stack<br>
                30 pushed to stack<br>
                30 popped from stack<br>
                Top element is 20<br>
                Elements present in stack : 20 10<br>
            </div> <br> <br>

            <h2>Advantages of Linked List implementation:</h2> <br>
            <li class="bp">The linked list implementation of a stack can grow and shrink according to the needs at runtime.</li> <br>
            <li class="bp">It is used in many virtual machines like JVM.</li><br>

            <h2>Disadvantages of Linked List implementation:</h2> <br>
            <li class="bp">Requires extra memory due to the involvement of pointers.</li><br>
            <li class="bp">Random accessing is not possible in stack.</li><br> <br>
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