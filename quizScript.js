var q = 0;
var qmax = 7;
var level = 0;
var selections = [];
var numQs = [8, 9, 1]

var begQuestions = [
    "Who was the first person to come up the concept of regular expressions?",
    "A Regular Expression is a string of text called a _____?",
    "True or False, regex is case sensitive by default",
    "What matches <code>/header/</code>?",
    "What regex matches '5+2=7'?",
    "What regex matches 'D:\Users\Documents\myregex.txt'",
    "What does <code>/9.00/</code> match?",
    "How do I match banana?"
];
var intQuestions = [
    "What shorthand character set matches a digit?",
    "What POSIX bracket expression matches hexadecimals?",
    "What matches with <code>/gr[ea]y/</code>?",
    "How do you match any one vowel?",
    "How many strings are matched with the regex <code>/c[aeiou]t/g</code> and the string “The cow, camel, and cat all fit into the category: animals.” (The g at the end tells the regex engine to search globally, for all instances)",
    "What is the character set equivalent to the POSIX bracket expression [:alnum:]",
    "What matches the regex <code>/dogs?/</code>?",
    "What regex will match with 'moose'?",
    "What regex will match 100057.2 and 100078.2?",
    "What is the following quantified repetition character equivalent to? \\d{1,}",
    "How would I match only most U.S.phone numbers",
    "What does /A{1,2} bonds/ mach?"
];
var advQuestions = [
    "Test"
];

var begAnswers = [
    [
        "Tim Berners-Lee",
        "Steven Cole King",
        "Rob Lewis",
        "Douglas Englebart"
    ],
    [
        "Strings",
        "Characters",
        "Metacharacters",
        "Pattern"
    ],
    [
        "True",
        "False"
    ],
    [
        "Header",
        "header",
        "feeder"
    ],
    [
        "/5 + 2 = 7/",
        "/\5\+\2\=\7/",
        "/5\+2=7/",
        "/5+2=7/"
    ],
    [
        "/D\:\Users\Documents\myregex\.txt/",
        "/D:\\Users\\Documents\\myregex\.txt/",
        "/D:\\Users\\Documents\\myregex.txt/",
        "/D:\Users\Documents\myregex.txt/"
    ],
    [
        "9500",
        "9.00",
        "9 00",
        "All of the above"
    ],
    [
        "ba*a*a",
        ".a.a.a",
        "\.a\.a\.a",
        "a.a.a."
    ]
];
var intAnswers = [
    [
        "/d",
        "/W",
        "/D",
        "/s"
    ],
    [
        "[:alpha:]",
        "[:digit:]",
        "[:graph:]",
        "[:xdigit:]"
    ],
    [
        "grey",
        "great",
        "gray",
        "Both a and c"
    ],
    [
        "/aeiou/",
        "/[a-e-i-o-u]/",
        "/[aeiou]/",
        "None of the above"
    ],
    [
        "1",
        "2",
        "3",
        "4"
    ],
    [
        "[a-zA-Z]",
        "[A-Za-z0-9]",
        "[a-z0-9]",
        "[a-z]"
    ],
    [
        "dog",
        "dogs",
        "dogssssss",
        "Both a and b"
    ],
    [
        "/moo+se/",
        "/mo*se/",
        "/m++se/",
        "/moos?/"
    ],
    [
        "/1*57\.2/",
        "/10*[57-78]\.2/",
        "/1*[57][78]\.2/",
        "/10+[57][78].2/"
    ],
    [
        "[0-6]+",
        "\\d",
        "\d+",
        "None of the above"
    ],
    [
        "\\d{10}",
        "/\\d{3}-\\d{3}-\\d{4}/",
        "/\\d{3}-\\d{3,}-\\d{4}/",
        "All of the above"
    ],
    [
        "A bonds",
        "AA bonds",
        "AAA bonds",
        "A and B"
    ]
];
var advAnswers = [
    "Test"
];

var begSolutions = [1, 3, 0, 1, 2, 1, 3, 1];
var intSolutions = [0, 3, 3, 2, 1, 1, 3, 1, 3, 2, 1, 3];
var advSolutions = [0];

window.onload = function(){
    changeLevel(0);
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
    switch(level){
        case 0:
            questions = begQuestions;
            answers = begAnswers;
            break;
        case 1:
            questions = intQuestions;
            answers = intAnswers;
            break;
        case 2:
            questions = advQuestions;
            answers = advAnswers;
            break;
        default:
            console.log("ERROR: Illegal Level");
    }
    for(var i=0; i<answers[q].length; i++){
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
    switch(level){
        case 0:
            questions = begQuestions;
            answers = begAnswers;
            break;
        case 1:
            questions = intQuestions;
            answers = intAnswers;
            break;
        case 2:
            questions = advQuestions;
            answers = advAnswers;
            break;
        default:
            console.log("ERROR: Illegal Level");
    }
    for(var i=0; i<answers[q].length; i++){
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
    var questions,
        answers;
    switch(level){
        case 0:
            questions = begQuestions;
            answers = begAnswers;
            break;
        case 1:
            questions = intQuestions;
            answers = intAnswers;
            break;
        case 2:
            questions = advQuestions;
            answers = advAnswers;
            break;
        default:
            console.log("ERROR: Illegal Level");
    }
    document.getElementById("QNum").innerHTML = "Question " + (q+1) + " of " + (qmax+1) + ":";
    document.getElementById("Q").innerHTML = questions[q];

    var form = document.getElementById("form");
    var options = "";
    for(var i=0; i<answers[q].length; i++){
        options += '<label class="customRadio">' + answers[q][i] +
          '<input type="radio" name="radio">' +
          '<span class="checkmark"></span></label>';
    }
    form.innerHTML = options;
    for(var i=0; i<answers[q].length; i++){
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

    var questions,
        answers,
        solutions;
    switch(level){
        case 0:
            questions = begQuestions;
            answers = begAnswers;
            solutions = begSolutions;
            break;
        case 1:
            questions = intQuestions;
            answers = intAnswers;
            solutions = intSolutions;
            break;
        case 2:
            questions = advQuestions;
            answers = advAnswers;
            solutions = advSolutions;
            break;
        default:
            console.log("ERROR: Illegal Level");
    }

    var content = "";
    for(var i=0; i<=qmax; i++){
        content += '<p class="description quizQuestionNum">Question ' + (i+1) + ':</p>';
        content += '<p class="description quizQuestion" id="Q">' + questions[i] + '</p>';
        if(solutions[i] == selections[i]){
            content += '<p style="color: #2ECC71" class="description quizQuestion">Your Answer: ' + answers[i][selections[i]] + ' &#10004;</p>';
        }else{
            content += '<p style="color: #D0021B" class="description quizQuestion">Your Answer: ' + answers[i][selections[i]] + ' &#10008;</p>';
        }
        content += '<p style="color: #2ECC71" class="description quizQuestion">Correct Answer: ' + answers[i][solutions[i]] + '</p>';
    }
    document.getElementById("form").innerHTML = content;
}

function changeLevel(selectedLevel){
        level = selectedLevel;
        q = 0;
        selections = [];
        qmax = numQs[level]-1;
        for(var i=0; i<numQs; i++){
            selections.push(NaN);
        }
        setQuestion();
        var titles = ["Basic Quiz: Introduction to RegEx", "Intermediate Quiz: Getting Familiar", "Advanced Quiz: RegEx Mastery"]
        document.getElementById("quizTitle").innerHTML = titles[level];
        document.getElementById("navAdv").className = "navButton last local";
        document.getElementById("navInt").className = "navButton local";
        document.getElementById("navBeg").className = "navButton local";
        switch (level) {
            case 0:
                document.getElementById("navBeg").className += " current";
                break;
            case 1:
                document.getElementById("navInt").className += " current";
                break;
            case 2:
                document.getElementById("navAdv").className += " current";
                break;
            default:
                console.log("ERROR: Illegal Level");
        }
}
