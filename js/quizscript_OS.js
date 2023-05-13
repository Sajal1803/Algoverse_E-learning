const quizData4 = [
    {
        question4: "Which data structure store address and data both?",
        a4: "Linked List",
        b4: "Queue",
        c4: "Heap",
        d4: "Hashing",
        correct4: "a4",
    },
    {
        question4: "What does CSS stand for?",
        a4: "Central Style Sheets",
        b4: "Cascading Style Sheets",
        c4: "Cascading Simple Sheets",
        d4: "Cars SUVs Sailboats",
        correct4: "b4",
    },
    {
        question4: "What does HTML stand for?",
        a4: "Hypertext Markup Language",
        b4: "Hypertext Markdown Language",
        c4: "Hyperloop Machine Language",
        d4: "Helicopters Terminals Motorboats Lamborginis",
        correct4: "a4",
    },
    {
        question4: "What year was JavaScript launched?",
        a4: "1996",
        b4: "1995",
        c4: "1994",
        d4: "none of the above",
        correct4: "b4",
    },


];

const quiz4= document.getElementById('quiz4')
const answerEls = document.querySelectorAll('.answer4')
const questionEl = document.getElementById('question4')
const a_text4 = document.getElementById('a_text4')
const b_text4 = document.getElementById('b_text4')
const c_text4 = document.getElementById('c_text4')
const d_text4 = document.getElementById('d_text4')
const submitBtn4 = document.getElementById('submit4')


let currentQuiz4 = 0
let score = 0

loadQuiz4()

function loadQuiz4() {

    deselectAnswers()

    const currentQuizData = quizData4[currentQuiz4]

    questionEl.innerText = currentQuizData.question4
    a_text4.innerText = currentQuizData.a4
    b_text4.innerText = currentQuizData.b4
    c_text4.innerText = currentQuizData.c4
    d_text4.innerText = currentQuizData.d4
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


submitBtn4.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData4[currentQuiz4].correct4) {
           score++
       }

       currentQuiz4++

       if(currentQuiz4 < quizData4.length) {
           loadQuiz4()
       } else {
           quiz4.innerHTML = `
           <h2>You answered ${score}/${quizData4.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})