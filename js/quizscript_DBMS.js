const quizData3 = [
    {
        question3: "Which data structure store address and data both?",
        a3: "Linked List",
        b3: "Queue",
        c3: "Heap",
        d3: "Hashing",
        correct3: "a3",
    },
    {
        question3: "What does CSS stand for?",
        a3: "Central Style Sheets",
        b3: "Cascading Style Sheets",
        c3: "Cascading Simple Sheets",
        d3: "Cars SUVs Sailboats",
        correct3: "b3",
    },
    {
        question3: "What does HTML stand for?",
        a3: "Hypertext Markup Language",
        b3: "Hypertext Markdown Language",
        c3: "Hyperloop Machine Language",
        d3: "Helicopters Terminals Motorboats Lamborginis",
        correct3: "a3",
    },
    {
        question3: "What year was JavaScript launched?",
        a3: "1996",
        b3: "1995",
        c3: "1994",
        d3: "none of the above",
        correct3: "b3",
    },


];

const quiz3= document.getElementById('quiz3')
const answerEls = document.querySelectorAll('.answer3')
const questionEl = document.getElementById('question3')
const a_text3 = document.getElementById('a_text3')
const b_text3 = document.getElementById('b_text3')
const c_text3 = document.getElementById('c_text3')
const d_text3 = document.getElementById('d_text3')
const submitBtn3 = document.getElementById('submit3')


let currentQuiz3 = 0
let score = 0

loadQuiz3()

function loadQuiz3() {

    deselectAnswers()

    const currentQuizData = quizData3[currentQuiz3]

    questionEl.innerText = currentQuizData.question3
    a_text3.innerText = currentQuizData.a3
    b_text3.innerText = currentQuizData.b3
    c_text3.innerText = currentQuizData.c3
    d_text3.innerText = currentQuizData.d3
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


submitBtn3.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData3[currentQuiz3].correct3) {
           score++
       }

       currentQuiz3++

       if(currentQuiz3 < quizData3.length) {
           loadQuiz3()
       } else {
           quiz3.innerHTML = `
           <h2>You answered ${score}/${quizData3.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})