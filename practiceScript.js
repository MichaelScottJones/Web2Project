var q = 0;
var level = 0;
var practice = 0;
var qmax = 0;
var answered = 0;

var begQuestions = [
    [
        "Does RegEx work with most programming languages?"
    ],
    [
        "What matches <code>/tree/</code>?",
        "What matches <code>/Dog/</code>?"
    ],
    [
        "What regex matches /192.168.1.101/?",
        "What regex matches: Did he go to Florida?"
    ],
    [
        "What does <code>/h.t/</code> match?"
    ]

];
var intQuestions = [
    [
        "What shorthand character set matches whitespace?",
        "What POSIX bracket expression matches Letters, numbers, and underscores?",
        "What matches with <code>/[0-57]/</code>?"
    ],
    [
        "What matches the regex <code>/pears*/</code>?",
        "What regex will match with mississippi?"
    ],
    [
        "What does the following regex match <code>\\d{4,}</code>",
        "What does the following regex match <code>\\d{5}</code>"
    ]
];
var advQuestions = [
    [
        "Shorthand used to reference a capturing group.",
        "Using a backreference, what is a way to find two back to back characters?"
    ],
    [
        "Which character matches any position that is not a word boundary.",
        "Which character matches a word boundary position such as whitespace or the beginning or end of the string."
    ],
    [
        "What will match  <code>#a(?>bc|c)c#</code> ?",
        "What will match <code>a(?>bc|b)c</code> ?"
    ],
    [
        "What will match <code>/a(?:(?R)|a?)a/</code>?",
        "What will match <code>a(?0)?z</code>?"
    ],
    [
        "Which function is used to make a callback?",
        "What type is returned by preg_replace_callback()?"
    ],
    [
        "How do you comment using free-spacing mode?",
        "What is represented by [] in the expression <code>/d(?#comment)[ ](?#comment)w+(?#comment)/</code>?"
    ]
];

var begAnswers = [
    [
        [
            "Yes",
            "No"
        ]
    ],
    [
        [
            "Tree",
            "tree",
            "free"
        ],
        [
            "dog",
            "Dog",
            "cat",
            "DOG"
        ]
    ],
    [
        [
            "/192.168.1.101/",
            "/192\\.168\\.1\\.101/",
            "/192\\.168.1\\.101/"
        ],
        [
            "/Did he go to Florida\\?/",
            "/Did he go to Florida?/",
            "/\\Did he go to \\Florida?/"
        ]
    ],
    [
        [
            "hat",
            "hot",
            "heat",
            "Both a and b"
        ]
    ]
];
var intAnswers = [
    [
        [
            "/S",
            "/w",
            "/s",
            "/W"
        ],
        [
            "[:alpha]",
            "[:word:]",
            "[:xdigit:]",
            "[:print:]"
        ],
        [
            "7",
            "45",
            "67",
            "6"
        ]
    ],
    [
        [
            "pear",
            "pears",
            "pearssss",
            "All of the above"
        ],
        [
            "Mis*is*ipp*i",
            "mississippi+",
            "mis+is*ip?i*",
            "mi+s*is*ip*i"
        ]
    ],
    [
        [
            "Numbers with exactly four digits",
            "Numbers with 4 or less digits",
            "Numbers with 4 or more digits",
            "Numbers with 3 or less digits"
        ],
        [
            "12345",
            "12345678",
            "1234",
            "A and B"
        ]
    ]
];
var advAnswers = [
    [
        [
            "Lazy operator",
            "Anchor",
            "Greedy operator",
            "Backreferences"
        ],
        [
            "(.)\\1",
            "()1",
            ".\\1",
            "()\\1"
        ]
    ],
    [
        [
            "?B",
            "/d",
            "/b",
            "/B"
        ],
        [
            "/B",
            "?b",
            "/D",
            "/b"
        ]
    ],
    [
        [
            "bc",
            "abc",
            "None of these",
            "abcc"
        ],
        [
            "abcc",
            "Abc",
            "Bbc",
            "bcb"
        ]
    ],
    [
        [
            "bbaa",
            "aaaa",
            "A",
            "aaabbaa"
        ],
        [
            "azz",
            "aaz",
            "aazz",
            "aaazz"
        ]
    ],
    [
        [
            "preg_callback()",
            "preg_replace_callback()",
            "replace_callback()",
            "None of the above"
        ],
        [
            "array",
            "function",
            "None of these",
            "string"
        ]
    ],
    [
        [
            "(?#comment)",
            "(#comment)",
            "(?comment)",
            "(?/comment/#)"
        ],
        [
            "Word",
            "Digit",
            "Space",
            "None of the above"
        ]
    ]
];

var begSolutions = [
    [0],
    [1, 1],
    [1, 0],
    [3]
];
var intSolutions = [
    [2,1,0],
    [3,2],
    [2,0]
];
var advSolutions = [
    [3,0],
    [3,3],
    [3,0],
    [1,2],
    [1,3],
    [0,2]
];

var sectionTitle = [
    "Basic Practice",
    "Intermediate Practice",
    "Advanced Practice"
]
var practiceTitle = [
    [
        "Introduction to RegEx",
        "Literal Characters",
        "Metacharacters",
        "Special Characters, Wildcard"
    ],
    [
        "Character Sets",
        "Repetition Metacharacters",
        "Quantified Repetition"
    ],
    [
        "Back Referencing",
        "Word Boundaries",
        "Atomic Group",
        "Recursion",
        "Callbacks",
        "Commenting"
    ]
]

function post(practice){
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "practiceInfo.php");
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "practice");
    hiddenField.setAttribute("value", practice);
    var hiddenField2 = document.createElement("input");
    hiddenField2.setAttribute("type", "hidden");
    hiddenField2.setAttribute("name", "level");
    hiddenField2.setAttribute("value", level);

    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    document.body.appendChild(form);
    form.submit();
}

function generateLessons(l){
    level = l;
    content = "";
    for(var i=0; i<practiceTitle[level].length; i++){
        content += '<p class="description">Practice ' + (i+1) + ": " + practiceTitle[level][i] + '</p>';
        content += '<button type="button" onclick="post(' + i + ')" class="smallGreenButton">Go</button>';
    }
    document.getElementById("practiceLinks").innerHTML = content;
    document.getElementById("header").innerHTML = sectionTitle[level];
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
    answered = 0;
    var answers;
    var questions;
    switch(level){
        case 0:
            answers = begAnswers;
            questions = begQuestions;
            break;
        case 1:
            answers = intAnswers;
            questions = intQuestions;
            break;
        case 2:
            answers = advAnswers;
            questions = advQuestions;
            break;
        default:
            console.log('ERROR: Illegal level')
    }

    document.getElementById("QNum").innerHTML = "Question " + (q+1) + ":";
    document.getElementById("Q").innerHTML = questions[practice][q];
    var form = document.getElementById("form");
    var content = "";
    for(var i=0; i<answers[practice][q].length; i++){
        content += '<label class="customRadio" id="Ans' + i + '"onclick="selectAnswer(' + i +');">' + answers[practice][q][i] +
          '<input type="radio" name="radio"><span class="checkmark"></span></label>';
    }
    form.innerHTML = content;
}

function selectAnswer(choice){
    if(answered == 0){
        switch(level){
            case 0:
                solutions = begSolutions;
                break;
            case 1:
                solutions = intSolutions;
                break;
            case 2:
                solutions = advSolutions;
                break;
            default:
                console.log('ERROR: Illegal level')
        }
        document.getElementById("Ans"+solutions[practice][q]).style.color = "#2ECC71";
        document.getElementById("Ans"+solutions[practice][q]).innerHTML += " &#10004;";
        if(choice != solutions[practice][q]){
            document.getElementById("Ans"+choice).style.color = "#D0021B";
            document.getElementById("Ans"+choice).innerHTML += " &#10008;";
        }
        answered = 1;
    }

}

function setPractice(l, p){
    q = 0;
    level = l;
    practice = p;
    var questions;
    switch(level){
        case 0:
            questions = begQuestions;
            break;
        case 1:
            questions = intQuestions;
            break;
        case 2:
            questions = advQuestions;
            break;
        default:
            console.log('ERROR: Illegal level')
    }
    qmax = questions[practice].length-1;
    document.getElementById("header").innerHTML = practiceTitle[level][practice];
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
    setQuestion();
    toggleButtons();
}

function navigateLevel(level){
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "practice.php");
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "level");
    hiddenField.setAttribute("value", level);

    form.appendChild(hiddenField);
    document.body.appendChild(form);
    form.submit();
}
