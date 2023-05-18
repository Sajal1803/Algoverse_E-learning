const quizData3 = [
    {
        question3: "What is the full form of DBMS?",
        a3: "Data of Binary Management System",
        b3: "Database Management System",
        c3: "Database Management Service",
        d3: "Data Backup Management System",
        correct3: "b3",
    },
    {
        question3: "What is a database?",
        a3: "Organized collection of information that cannot be accessed, updated, and managed",
        b3: "Collection of data or information without organizing",
        c3: "Organized collection of data that cannot be updated",
        d3: "Organized collection of data or information that can be accessed, updated, and managed",
        correct3: "d3",
    },
    {
        question3: "What is DBMS?",
        a3: "DBMS is a collection of queries",
        b3: "DBMS is a high-level language",
        c3: "DBMS is a programming language",
        d3: "DBMS stores, modifies and retrieves data",
        correct3: "d3",
    },
    {
        question3: "Who created the first DBMS?",
        a3: "Edgar Frank Codd",
        b3: "Charles Bachman",
        c3: "Charles Babbage",
        d3: "Sharon B. Codd",
        correct3: "b3",
    },
    {
        question3: "Which of the following is a feature of the database?",
        a3: "No-backup for the data stored",
        b3: "User interface provided",
        c3: "Lack of Authentication",
        d3: "Store data in multiple locations",
        correct3: "b3",
    },
    {
        question3: "Which of the following is a feature of DBMS?",
        a3: "Minimum Duplication and Redundancy of Data",
        b3: "High Level of Security",
        c3: "Single-user Access only",
        d3: "Support ACID Property",
        correct3: "c3",
    },
    {
        question3: "Which of the following is not an example of DBMS?",
        a3: "MySQL",
        b3: "Microsoft Acess",
        c3: "IBM DB2",
        d3: "Google",
        correct3: "d3",
    },
    {
        question3: "Which of the following is not a type of database?",
        a3: "Hierarchical",
        b3: "Network",
        c3: "Distributed",
        d3: "Decentralized",
        correct3: "d3",
    },
    {
        question3: "In which of the following formats data is stored in the database management system?",
        a3: "Image",
        b3: "Text",
        c3: "Table",
        d3: "Graph",
        correct3: "c3",
    },
    {
        question3: "Which type of data can be stored in the database?",
        a3: "Image oriented data",
        b3: "Text, files containing data",
        c3: "Data in the form of audio or video",
        d3: "All of the above",
        correct3: "d3",
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