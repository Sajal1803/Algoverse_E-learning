const quizData2 = [
    {
        question2: "What does PoP stand for?",
        a2: "Pre Office Protocol",
        b2: "Post Office Protocol",
        c2: "Protocol of Post",
        d2: "None",
        correct2: "b2",
    },
    {
        question2: "What is the port number of PoP?",
        a2: "35",
        b2: "43",
        c2: "110",
        d2: "25",
        correct2: "c2",
    },
    {
        question2: "What is the number of layers in the OSI model?",
        a2: "2 Layers",
        b2: "4 Layers",
        c2: "7 Layers",
        d2: "9 Layers",
        correct2: "c2",
    },
    {
        question2: "Identify the layer which provides service to the user?",
        a2: "Session Layer",
        b2: "Application Layer",
        c2: "Presentation error",
        d2: "Physical Layer",
        correct2: "b2",
    },
    {
        question2: "Which of these is a standard interface for serial data transmission?",
        a2: "ASCII",
        b2: "RS232C",
        c2: "2",
        d2: "Centronics",
        correct2: "b2",
    },
    {
        question2: "Which type of topology is best suited for large businesses which must carefully control and coordinate the operation of distributed branch outlets?",
        a2: "Ring",
        b2: "Local area",
        c2: "Hierarchical",
        d2: "Star",
        correct2: "d2",
    },
    {
        question2: "Which of the following transmission directions listed is not a legitimate channel?",
        a2: "Simplex",
        b2: "Half Duplex",
        c2: "Full Duplex",
        d2: "Double Duplex",
        correct2: "d2",
    },
    {
        question2: "Parity bits are used for which of the following purposes?",
        a2: "Encryption of data",
        b2: "To transmit faster",
        c2: "To detect errors",
        d2: "To identify the user",
        correct2: "c2",
    },
    {
        question2: "A collection of hyperlinked documents on the internet forms the ?",
        a2: "World Wide Web (WWW)",
        b2: "E-mail system",
        c2: "Mailing list",
        d2: "Hypertext markup language",
        correct2: "a2",
    },
    {
        question2: "A proxy server is used as the computer?",
        a2: "with external access",
        b2: "acting as a backup",
        c2: "performing file handling",
        d2: "accessing user permissions",
        correct2: "a2",
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