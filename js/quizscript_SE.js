const quizData5 = [
    {
        question5: "What is the first step in the software development lifecycle?",
        a5: "System Design",
        b5: "Coding",
        c5: "System Testing",
        d5: "Preliminary Investigation and Analysis",
        correct5: "d5",
    },
    {
        question5: "What does the study of an existing system refer to?",
        a5: "Details of DFD",
        b5: "Feasibility Study",
        c5: "System Analysis",
        d5: "System Planning",
        correct5: "c5",
    },
    {
        question5: "Which of the following is involved in the system planning and designing phase of the Software Development Life Cycle (SDLC)?",
        a5: "Sizing",
        b5: "Parallel run",
        c5: "Specification freeze",
        d5: "All of the above",
        correct5: "d5",
    },
    {
        question5: "What does RAD stand for?",
        a5: "Rapid Application Document",
        b5: "Rapid Application Development",
        c5: "Relative Application Development",
        d5: "None of the above",
        correct5: "b5",
    },
    {
        question5: "Which of the following option is correct?",
        a5: "The prototyping model facilitates the reusability of components.",
        b5: "RAD Model facilitates reusability of components",
        c5: "Both RAD & Prototyping Model facilitates reusability of components",
        d5: "None",
        correct5: "c5",
    },
    {
        question5: "Model selection is based on __________",
        a5: "Requirements",
        b5: "Development team & users",
        c5: "Project type & associated risk",
        d5: "All of the above",
        correct5: "d5",
    },
    {
        question5: "What is the major drawback of the Spiral Model?",
        a5: "Higher amount of risk analysis",
        b5: "Doesn't work well for smaller projects",
        c5: "Additional functionalities are added later on",
        d5: "Strong approval and documentation control",
        correct5: "b5",
    },
    {
        question5: "Which of the following does not relate to Evolutionary Process Model?",
        a5: "Incremental Model",
        b5: "Concurrent Development Model",
        c5: "WINWIN Spiral Model",
        d5: "All of the above",
        correct5: "d5",
    },
    {
        question5: "The major drawback of RAD model is __________?",
        a5: "It requires highly skilled developers/designers",
        b5: "It necessitates customer feedbacks",
        c5: "It increases the component reusability",
        d5: "Both (a) & (c)",
        correct5: "d5",
    },
    {
        question5: "Which of the following prototypes does not associated with Prototyping Model?",
        a5: "Domain Prototype",
        b5: "Vertical Prototype",
        c5: "Horizontal Prototype",
        d5: "Diagonal Prototype",
        correct5: "d5",
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