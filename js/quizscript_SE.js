const quizData5 = [
    {
        question5: "Which data structure store address and data both?",
        a5: "Linked List",
        b5: "Queue",
        c5: "Heap",
        d5: "Hashing",
        correct5: "a5",
    },
    {
        question5: "What does CSS stand for?",
        a5: "Central Style Sheets",
        b5: "Cascading Style Sheets",
        c5: "Cascading Simple Sheets",
        d5: "Cars SUVs Sailboats",
        correct5: "b5",
    },
    {
        question5: "What does HTML stand for?",
        a5: "Hypertext Markup Language",
        b5: "Hypertext Markdown Language",
        c5: "Hyperloop Machine Language",
        d5: "Helicopters Terminals Motorboats Lamborginis",
        correct5: "a5",
    },
    {
        question5: "What year was JavaScript launched?",
        a5: "1996",
        b5: "1995",
        c5: "1994",
        d5: "none of the above",
        correct5: "b5",
    },


];

const quiz5= document.getElementById('quiz5')
const answerEls = document.querySelectorAll('.answer5')
const questionEl = document.getElementById('question5')
const a_text5 = document.getElementById('a_text5')
const b_text5 = document.getElementById('b_text5')
const c_text5 = document.getElementById('c_text5')
const d_text5 = document.getElementById('d_text5')
const submitBtn5 = document.getElementById('submit5')


let currentQuiz5 = 0
let score = 0

loadQuiz5()

function loadQuiz5() {

    deselectAnswers()

    const currentQuizData = quizData5[currentQuiz5]

    questionEl.innerText = currentQuizData.question5
    a_text5.innerText = currentQuizData.a5
    b_text5.innerText = currentQuizData.b5
    c_text5.innerText = currentQuizData.c5
    d_text5.innerText = currentQuizData.d5
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


submitBtn5.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData5[currentQuiz5].correct5) {
           score++
       }

       currentQuiz5++

       if(currentQuiz5 < quizData5.length) {
           loadQuiz5()
       } else {
           quiz5.innerHTML = `
           <h2>You answered ${score}/${quizData5.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})