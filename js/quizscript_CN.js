const quizData2 = [
    {
        question2: "Which data structure store address and data both?",
        a2: "Linked List",
        b2: "Queue",
        c2: "Heap",
        d2: "Hashing",
        correct2: "a2",
    },
    {
        question2: "What does CSS stand for?",
        a2: "Central Style Sheets",
        b2: "Cascading Style Sheets",
        c2: "Cascading Simple Sheets",
        d2: "Cars SUVs Sailboats",
        correct2: "b2",
    },
    {
        question2: "What does HTML stand for?",
        a2: "Hypertext Markup Language",
        b2: "Hypertext Markdown Language",
        c2: "Hyperloop Machine Language",
        d2: "Helicopters Terminals Motorboats Lamborginis",
        correct2: "a2",
    },
    {
        question2: "What year was JavaScript launched?",
        a2: "1996",
        b2: "1995",
        c2: "1994",
        d2: "none of the above",
        correct2: "b2",
    },


];

const quiz2= document.getElementById('quiz2')
const answerEls2 = document.querySelectorAll('.answer2')
const questionEl2 = document.getElementById('question2')
const a_text2 = document.getElementById('a_text2')
const b_text2 = document.getElementById('b_text2')
const c_text2 = document.getElementById('c_text2')
const d_text2 = document.getElementById('d_text2')
const submitBtn2 = document.getElementById('submit2')


let currentQuiz2 = 0
let score = 0

loadQuiz2()

function loadQuiz2() {

    deselectAnswers()

    const currentQuizData = quizData2[currentQuiz2]

    questionEl2.innerText = currentQuizData.question2
    a_text2.innerText = currentQuizData.a2
    b_text2.innerText = currentQuizData.b2
    c_text2.innerText = currentQuizData.c2
    d_text2.innerText = currentQuizData.d2
}

function deselectAnswers() {
    answerEls2.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls2.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn2.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData2[currentQuiz2].correct2) {
           score++
       }

       currentQuiz2++

       if(currentQuiz2 < quizData2.length) {
           loadQuiz2()
       } else {
           quiz2.innerHTML = `
           <h2>You answered ${score}/${quizData2.length} questions correctly</h2>

           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})