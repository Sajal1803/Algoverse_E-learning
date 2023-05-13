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
        question1: "What does CSS stand for?",
        a1: "Central Style Sheets",
        b1: "Cascading Style Sheets",
        c1: "Cascading Simple Sheets",
        d1: "Cars SUVs Sailboats",
        correct1: "b1",
    },
    {
        question1: "What does HTML stand for?",
        a1: "Hypertext Markup Language",
        b1: "Hypertext Markdown Language",
        c1: "Hyperloop Machine Language",
        d1: "Helicopters Terminals Motorboats Lamborginis",
        correct1: "a1",
    },
    {
        question1: "What year was JavaScript launched?",
        a1: "1996",
        b1: "1995",
        c1: "1994",
        d1: "none of the above",
        correct1: "b1",
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