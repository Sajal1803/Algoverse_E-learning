const quizData4 = [
    {
        question4: "Which of the following is not an operating system?",
        a4: "Windows",
        b4: "Linux",
        c4: "Oracle",
        d4: "DOS",
        correct4: "c4",
    },
    {
        question4: "What is the maximum length of the filename in DOS?",
        a4: "4",
        b4: "5",
        c4: "8",
        d4: "12",
        correct4: "c4",
    },
    {
        question4: "What else is a command interpreter called?",
        a4: "prompt",
        b4: "kernel",
        c4: "shell",
        d4: "command",
        correct4: "c4",
    },
    {
        question4: "What is the full name of FAT?",
        a4: "File attribute table",
        b4: "File allocation table",
        c4: "Font attribute table",
        d4: "Format allocation table",
        correct4: "b4",
    },
    {
        question4: "BIOS is used?",
        a4: "By operating system",
        b4: "By compiler",
        c4: "By application software",
        d4: "By interpreter",
        correct4: "a4",
    },
    {
        question4: "What is the mean of the Booting in the operating system?",
        a4: "Restarting computer",
        b4: "Install the program",
        c4: "To scan",
        d4: "To turn off",
        correct4: "a4",
    },
    {
        question4: "When does page fault occur?",
        a4: "The page is present in memory",
        b4: "The deadlock occurs.",
        c4: "The page does not present in memory.",
        d4: "The buffering occurs.",
        correct4: "c4",
    },
    {
        question4: "Banker's algorithm is used?",
        a4: "To prevent deadlock",
        b4: "To deadlock recovery",
        c4: "To solve the deadlock",
        d4: "None of these",
        correct4: "a4",
    },
    {
        question4: "When you delete a file in your computer, where does it go?",
        a4: "Recycle bin",
        b4: "Hard disk",
        c4: "Taskbar",
        d4: "None of these",
        correct4: "a4",
    },
    {
        question4: "Which is the Linux operating system?",
        a4: "Private operating system",
        b4: "Windows operating system",
        c4: "Open-source operating system",
        d4: "None of these",
        correct4: "a4",
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