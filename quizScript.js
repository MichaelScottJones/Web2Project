var q = 0;
var qmax = 2;
var selections = [NaN, NaN, NaN];

var begQuestions = [
    "Which of the following matches regexp /a.[bc]+/",
    "Which of the following matches regexp /abc|xyz/",
    "Which of the following matches regexp /[a-z]+[\.\?!]/"
];
var intQuestions = [];
var advQuestions = [];

var begAnswers = [
    [
        "abcz",
        "abbbbbbbb",
        "az45c",
        "ac"
    ],
    [
        "abcxyz",
        "xyz",
        "abc|xyz",
        "abzxyc"
    ],
    [
        "Hot",
        "green",
        "swamping.",
        "jump up."
    ]
];
var intAnswers = [];
var advAnswers = [];

var begSolutions = [1, 1, 2];
var intSolutions = [];
var advSolutions = [];

window.onload = function(){
    setQuestion();
}

function toggleButtons(){
    if(q == 0){
        document.getElementById("back").disabled = true;
        document.getElementById("back").style.background = "#bbbbbb";
    }
    else{
        document.getElementById("back").disabled = false;
        document.getElementById("back").style.background = "#D0021B";
    }
    if(q==qmax){
        document.getElementById("next").innerHTML = "Submit";
    }
    else{
        document.getElementById("next").innerHTML = "Next";
    }
}

function nextQuestion(){
    var choice = NaN;
    for(var i=0; i<4; i++){
        if(document.getElementsByName("radio")[i].checked == true){
            choice = i;
        }
    }
    if(!isNaN(choice)){
        selections[q] = choice;
        if(q == qmax){
            submitQuiz();
        }
        else{
            q++;
            toggleButtons();
            setQuestion();
        }
    }
}

function back() {
    var choice = NaN;
    for(var i=0; i<4; i++){
        if(document.getElementsByName("radio")[i].checked == true){
            choice = i;
        }
    }
    selections[q] = choice;
    q--;
    toggleButtons();
    setQuestion();
}

function setQuestion(){
    document.getElementById("QNum").innerHTML = "Question " + (q+1) + ":";
    document.getElementById("Q").innerHTML = begQuestions[q];
    var labels = document.getElementsByClassName("customRadio");
    for(var i=0; i<4; i++){
        labels[i].innerHTML = begAnswers[q][i] + '<input type="radio" name="radio"><span class="checkmark"></span>';
    }
    for(var i=0; i<4; i++){
        document.getElementsByName("radio")[i].checked = false;
    }
    if(!isNaN(selections[q])){
        document.getElementsByName("radio")[selections[q]].checked = true;
    }
}

function submitQuiz(){
    document.getElementById("QNum").style.display = "none";
    document.getElementById("Q").style.display = "none";
    document.getElementById("next").style.display = "none";
    document.getElementById("back").innerHTML = "Start Over";
    document.getElementById("back").onclick = function(){location.reload();};


    var content = "";
    for(var i=0; i<=qmax; i++){
        content += '<p class="description quizQuestionNum">Question ' + (i+1) + ':</p>';
        content += '<p class="description quizQuestion" id="Q">' + begQuestions[i] + '</p>';
        if(begSolutions[i] == selections[i]){
            content += '<p style="color: #2ECC71" class="description quizQuestion">Your Answer: ' + begAnswers[i][selections[i]] + '</p>';
        }else{
            content += '<p style="color: #D0021B" class="description quizQuestion">Your Answer: ' + begAnswers[i][selections[i]] + '</p>';
        }
        content += '<p style="color: #2ECC71" class="description quizQuestion">Correct Answer: ' + begAnswers[i][begSolutions[i]] + '</p>';
    }
    document.getElementById("form").innerHTML = content;
}
