// select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");
const scoreDiv1 = document.getElementById("scoreContainer1");
// create our questions
let questions = [
    {
        question : "Can you identify the device?",
        imgSrc : "img/raspberrypi.jpg",
        choiceA : "Meat Pi",
        choiceB : "Raspberry Pi",
        choiceC : "Strawberry Pi",
        correct : "B"

    },
    {
        question : "What does HTML stand for?",
        imgSrc : "img/html.png",
        choiceA : "HyperText Markup Language",
        choiceB : "Human To Monkey Language",
        choiceC : "How To Make Lightsoup",
        correct : "A"
    },
    {
        question : "What device is this?",
        imgSrc : "img/monitor.jpg",
        choiceA : "Tablet",
        choiceB : "Tv Screen",
        choiceC : "Monitor",
        correct : "C"
    },{
        question : "What does CSS stand for?",
        imgSrc : "img/css.png",
        choiceA : "Can Sejorm See",
        choiceB : "Cascading Style Sheets",
        choiceC : "Cascading Sheets of Style",
        correct : "B"
    },
    {
        question : "What is this cable used for?",
        imgSrc : "img/ethernet.jpg",
        choiceA : "Connecting humans to each other",
        choiceB : "Swing from trees",
        choiceC : "Connecting PCs",
        correct : "C"
    },
    {
        question : "What does JS stand for?",
        imgSrc : "img/js.png",
        choiceA : "JavaSyntax",
        choiceB : "Javasmith",
        choiceC : "Javascript",
        correct : "C"
    },{
        question : "What is IOT?",
        imgSrc : "img/iot.jpg",
        choiceA : "Internet Of Things",
        choiceB : "International Organization of Thieves ",
        choiceC : "In Out Things",
        correct : "A"
    },{
        question : "Who is a Black Hat Hacker?",
        imgSrc : "img/hacker2.jpg",
        choiceA : "A person who cuts trees",
        choiceB : "A person who accesses computer networks illegally.",
        choiceC : "An I.T personnel",
        correct : "B"
    }
  ,{
        question : "Who controls the Internet?",
        imgSrc : "img/www.png",
        choiceA : "Bill Gates",
        choiceB : "The Internet is not centralized",
        choiceC : "The U.S Army",
        correct : "B"
    },
    {
        question : "What is GitHub used for?",
        imgSrc : "img/git.jpg",
        choiceA : "Project Management",
        choiceB : "Playing games online",
        choiceC : "It's an email client",
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
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
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
    
    let redo = (scorePerCent < 50) ? "<a class='stage2'href = index2.php> Redo Quiz </a>":
     "<a class='stage'href ='stage2.php'>Click to go to Next Stage.</a> ";
    ;


    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
    scoreDiv.innerHTML += "<div>" + redo + "</div>";
    // scoreDiv.innerHTML += "<a class='stage'href ='stage2.php'>Click to go to Next Stage.</a> ";

   
}





















