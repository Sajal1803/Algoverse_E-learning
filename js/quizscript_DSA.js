const quizData1 = [
    {
        question1: "Which data structure store address and data both?",
        a1: "Linked List",
        b1: "Queue",
        c1: "Heap",
        d1: "Hashing",
        correct1: "a1",
    },
    {
        question1: "Which of the following is a linear data structure?",
        a1: "Array",
        b1: "AVL Trees",
        c1: "Binary Trees",
        d1: "Graphs",
        correct1: "a1",
    },
    {
        question1: "Which of the following is not the type of queue?",
        a1: "Priority Queue",
        b1: "Circular Queue",
        c1: "Ordinary Queue",
        d1: "Single-ended Queue",
        correct1: "d1",
    },
    {
        question1: "What function is used to append a character at the back of a string in C++?",
        a1: "push_back()",
        b1: "append()",
        c1: "push()",
        d1: "insert()",
        correct1: "a1",
    },
    {
        question1:"Which one of the following is an application of queue data structure?",
        a1: "When a resource is shared among multiple consumers",
        b1: "When data is transfered asynchronously",
        c1: "Load Balancing",
        d1: "All of the Above",
        correct1: "d1",
    },
    {
        question1:"When a pop() operation is called on an empty queue, what is the condition called?",
        a1: "Overflow",
        b1: "Underflow",
        c1: "Syntax Error",
        d1: "Garbage Value",
        correct1: "b1",
    },
    {
        question1:"Which of the following data structures can be used to implement queues?",
        a1: "Stack",
        b1: "Array",
        c1: "Linked List",
        d1: "All of the Above",
        correct1: "d1",
    },
    {
        question1:"Which of the following data structures finds its use in recursion?",
        a1: "Stack",
        b1: "Arrays",
        c1: "Linked List",
        d1: "Queues",
        correct1: "a1",
    },
    {
        question1:"Which of the following data structures allow insertion and deletion from both ends?",
        a1: "Stack",
        b1: "Deque",
        c1: "Strings",
        d1: "Queue",
        correct1: "b1",
    },
    {
        question1:"Which of the following sorting algorithms provide the best time complexity in the worst-case scenario?",
        a1: "Merge Sort",
        b1: "Quick Sort",
        c1: "Bubble Sort",
        d1: "Selection Sort",
        correct1: "a1",
    },


];

const quiz1= document.getElementById('quiz1')
const answerEls = document.querySelectorAll('.answer1')
const questionEl = document.getElementById('question1')
const a_text1 = document.getElementById('a_text1')
const b_text1 = document.getElementById('b_text1')
const c_text1 = document.getElementById('c_text1')
const d_text1 = document.getElementById('d_text1')
const submitBtn1 = document.getElementById('submit1')


let currentQuiz1 = 0
let score1 = 0

loadQuiz1()

function loadQuiz1() {

    deselectAnswers()

    const currentQuizData = quizData1[currentQuiz1]

    questionEl.innerText = currentQuizData.question1
    a_text1.innerText = currentQuizData.a1
    b_text1.innerText = currentQuizData.b1
    c_text1.innerText = currentQuizData.c1
    d_text1.innerText = currentQuizData.d1
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn1.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData1[currentQuiz1].correct1) {
           score1++
       }

       currentQuiz1++

       if(currentQuiz1 < quizData1.length) {
           loadQuiz1()
       } else {
           quiz1.innerHTML = `
           <h2>You answered ${score1}/${quizData1.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})