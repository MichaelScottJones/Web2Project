<?php
	include_once("header.inc.php");
?>
<script>
	var level = 0;
	var sectionTitle = [
		"Basic Practice",
		"Intermediate Practice",
		"AdvancedPractice"
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
	function post(lesson){

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

	window.onload = function(){
		generateLessons(0);
	}
</script>

        <div class="localNavBar">
            <ul class="navLinks">
              <li><a class="navButton last local" id="navAdv" onclick="generateLessons(2);">Advanced</a></li>
              <li><a class="navButton local" id="navInt" onclick="generateLessons(1);">Intermediate</a></li>
              <li><a class="navButton local" id="navBeg" onclick="generateLessons(0);">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Practice </a></li>
            </ul>
        </div>
    </nav>

    <h1 class="header" id="header">FILLER TEXT</h1>
	<div id="practiceLinks"></div>
<?php 	include_once("footer.inc.php"); ?>
