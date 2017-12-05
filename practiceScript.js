var q = 0;
var qmax = 1;

var begQuestions = [
    "Which of the following matches regexp <code>/a(ab)*a/</code>",
    "Which of the following matches regexp <code>/ab+c/?</code>",
];
var intQuestions = [];
var advQuestions = [];

var begAnswers = [
    [
        "abababa",
        "aaba",
        "aabbaa",
        "aba"
    ],
    [
        "abc",
        "ac",
        "abbb",
        "bbc"
    ],
];
var intAnswers = [];
var advAnswers = [];

var begSolutions = [1, 0];
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
        document.getElementById("next").disabled = true;
        document.getElementById("next").style.background = "#bbbbbb";
    }
    else{
        document.getElementById("next").disabled = false;
        document.getElementById("next").style.background = "#2ECC71";
    }
}

function nextQuestion(){
    q++;
    toggleButtons();
    setQuestion();
}

function back() {
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
        labels[i].style.color = "#4A4A4A";
    }
    for(var i=0; i<4; i++){
        document.getElementsByName("radio")[i].checked = false;
    }
}

function selectAnswer(choice){
    document.getElementById("Ans"+begSolutions[q]).style.color = "#2ECC71";
    if(choice != begSolutions[q]){
        document.getElementById("Ans"+choice).style.color = "#D0021B";
    }
}
