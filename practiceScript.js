var q = 0;
var qmax;

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

window.onload = function(){
    document.getElementById("navPractice").className = "navButton current";
    if(document.getElementById("level") != null){
        level = document.getElementById("level").value;
        q = document.getElementById("lesson").value;
    }
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
