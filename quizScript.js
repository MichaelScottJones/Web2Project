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
        "abc",
        "abbbbbbbb",
        "azc",
        "abcbcbcbc"
    ],
    [
        "abc",
        "xyz",
        "abc|xyz",
        "acxz"
    ],
    [
        "battle!",
        "Hot",
        "green",
        "is.?"
    ]
];
var intAnswers = [];
var advQuestions = [];

window.onload = function(){
    setQuestion();
}

function toggleButtons(){
    if(q == 0){
        document.getElementById("back").disabled = true;
        document.getElementById("back").style.background = "#dddddd";
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
            // TODO SUBMIT
        }
        else{
            q++;
            toggleButtons();
            setQuestion();
        }
    }
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
    }
    for(var i=0; i<4; i++){
        document.getElementsByName("radio")[i].checked = false;
    }
    if(!isNaN(selections[q])){
        document.getElementsByName("radio")[selections[q]].checked = true;
    }
}
