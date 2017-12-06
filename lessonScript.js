var level = 0;
var currLesson = 0;
var sectionTitle = [
	"Basic Lessons",
	"Intermediate Lessons",
	"Advanced Lessons"
]
var lessonTitle = [
	[
		"What is regex?",
		"Literal Characters",
		"Metacharacters",
		"Special Characters",
        "Wildcard"
	],
	[
		"Character Sets",
		"Repetition Metacharacters",
		"Quantified Repetition",
        "Greedy Operators",
        "Lazy Operators"
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

function post(lesson){
    currLesson = lesson;
    var lessonFile = "lessons/";
    switch (level) {
        case 0:
            lessonFile += "basic" + lesson + ".php";
            break;
        case 1:
            lessonFile += "intermediate" + lesson + ".php";
            break;
        case 2:
            lessonFile += "advanced" + lesson + ".php";
            break;
        default:
            console.log("ERROR: Illegal lesson index");
    }
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "lessonInfo.php");
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "lesson");
    hiddenField.setAttribute("value", lessonFile);
    var hiddenField2 = document.createElement("input");
    hiddenField2.setAttribute("type", "hidden");
    hiddenField2.setAttribute("name", "level");
    hiddenField2.setAttribute("value", level);
    var hiddenField3 = document.createElement("input");
    hiddenField3.setAttribute("type", "hidden");
    hiddenField3.setAttribute("name", "lessonNum");
    hiddenField3.setAttribute("value", lesson);

    form.appendChild(hiddenField);
    form.appendChild(hiddenField2);
    form.appendChild(hiddenField3);
    document.body.appendChild(form);
    form.submit();
}

function generateLessons(l){
	level = l * 1.0;
	content = "";
	for(var i=0; i<lessonTitle[level].length; i++){
		content += '<p class="description">Lesson ' + (i+1) + ": " + lessonTitle[level][i] + '</p>';
	    content += '<button type="button" onclick="post(' + (i+1) + ')" class="smallGreenButton">Go</button>';
	}
	document.getElementById("lessonLinks").innerHTML = content;
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

function navigateLevel(level){
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "lessons.php");
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "level");
    hiddenField.setAttribute("value", level);

    form.appendChild(hiddenField);
    document.body.appendChild(form);
    form.submit();
}

function nextLesson(){
    level = document.getElementById("level").value * 1.0;
    currLesson = document.getElementById("lessonNum").value * 1.0;
    post(currLesson+1);
}

function toggleButtons(lvl, lesson){
    if(lesson==lessonTitle[lvl].length){
        document.getElementById("next").style.background = "#bbbbbb";
        document.getElementById("next").disabled = true;
    }
    else{
        document.getElementById("next").style.background = "#2ECC71";
        document.getElementById("next").disabled = false;
    }
}
