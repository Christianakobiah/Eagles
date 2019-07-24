// select all elements
const start = document.getElementById("start1");
const quiz = document.getElementById("quiz1");
const question = document.getElementById("question1");
const qImg = document.getElementById("qImg1");
const choiceA = document.getElementById("A1");
const choiceB = document.getElementById("B1");
const choiceC = document.getElementById("C1");
const counter = document.getElementById("counter1");
const timeGauge = document.getElementById("timeGauge1");
const progress = document.getElementById("progress1");
const scoreDiv = document.getElementById("scoreContainer1");
const wrong = document.getElementById("wrong1");

// create our questions
let questions = [
    {
        question : "What is a database?",
        imgSrc : "img/mysql.png",
        choiceA : "A house where data stays",
        choiceB : "A storage area for all kinds of data",
        choiceC : "US Military storage area",
        correct : "B"

    },
    {
        question : "In the Linux OS, what is the swap area used for?",
        imgSrc : "img/linuxlogo.jpg",
        choiceA : "It's a space on disk, used when the amount of physical RAM is full.",
        choiceB : "Swapping files for transfer",
        choiceC : "An area for storing files",
        correct : "A"
    },
    {
        question : "What device is this?",
        imgSrc : "img/3Dprinter.jpg",
        choiceA : "Play Box",
        choiceB : "System Unit",
        choiceC : "3D Printer",
        correct : "C"
    },{
        question : "What is the meaning of GIGO?",
        imgSrc : "img/GIGO.png",
        choiceA : "Good In Good Out",
        choiceB : "Garbage In Garbage Out",
        choiceC : "Good Input Good Output",
        correct : "B"
    },
    {
        question : "Where does the @ symbol come from?",
        imgSrc : "img/theat.jpg",
        choiceA : "from Arabic",
        choiceB : "from Greek",
        choiceC : "from Latin",
        correct : "C"
    },
    {
        question : "Which I.T company, has it's headquarters in Silicon Valley?",
        imgSrc : "img/Silval.png",
        choiceA : "Google",
        choiceB : "Apple",
        choiceC : "IBM",
        correct : "C"
    },{
        question : "Which company invented the GUI?",
        imgSrc : "img/gui.jpg",
        choiceA : "Xerox PARC",
        choiceB : "Apple",
        choiceC : "Microsoft",
        correct : "A"
    },{
        question : "When was the first CPU invented?",
        imgSrc : "img/CPU.jpg",
        choiceA : "1965",
        choiceB : "1971",
        choiceC : "1950",
        correct : "B"
    }
  ,{
        question : "What languages is the MacOs written in?",
        imgSrc : "img/macos.jpg",
        choiceA : "C++, Swift,Obj-C",
        choiceB : "Python, C, C++",
        choiceC : "HTML, CSS, Javascript",
        correct : "A"
    },
    {
        question : "What protocol is used to access the e-mails on the internet?",
        imgSrc : "img/mail.png",
        choiceA : "IMAP",
        choiceB : "IP Address",
        choiceC : "Gmail",
        correct : "A"
    }

];


// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 10; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    qImg.innerHTML = "<img src="+ q.imgSrc +">";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog1' id="+ qIndex +"></div>";
    }
}

// counter render

function renderCounter(){
    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        // change progress color to red
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    }else{
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}

// answer is correct
function answerIsCorrect(){
    document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
    var audio = new Audio('sounds/success.wav');
    audio.play();
}

// answer is Wrong.
function answerIsWrong(){
    document.getElementById(runningQuestion).style.backgroundColor = "#f00";
    
}

// score render
function scoreRender(){
    scoreDiv.style.display = "block";
    
    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score/questions.length);
    
    // choose the image based on the scorePerCent
    let img = (scorePerCent >= 80) ? "img/5.png" :
              (scorePerCent >= 60) ? "img/4.png" :
              (scorePerCent >= 40) ? "img/3.png" :
              (scorePerCent >= 20) ? "img/2.png" :
              "img/1.png";
    
    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
    scoreDiv.innerHTML += "<a href ='index.php'>Click to Start As New User .</a> ";
    

   
}





















