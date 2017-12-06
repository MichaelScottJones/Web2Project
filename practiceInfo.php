<?php
	include_once("header.inc.php");

	if(!empty($_POST)){
		$level = $_POST["level"];
		$practice = $_POST["practice"];
		echo '<input type="hidden" id="level" value="' . $level . '"></input>';
		echo '<input type="hidden" id="practice" value="' . $practice . '"></input>';
	}
?>
<script src="practiceScript.js">
</script>
        <div class="localNavBar">
            <ul class="navLinks">
              <li><a href="" class="navButton last local">Advanced</a></li>
              <li><a href="" class="navButton local">Intermediate</a></li>
              <li><a href="" class="navButton current local">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Practice</a></li>
            </ul>
        </div>
    </nav>


    <h1 class="header">Basic Practice: Introduction to RegEx</h1>
    <p class="description quizQuestionNum" id="QNum">Question 1:</p>
    <p class="description quizQuestion" id="Q">This is filler text that you should not be seeing in prod! </p>


    <form id="form"></form>

    <div class="quizButtonDiv">
    <button type="button" onclick="nextQuestion();" class="nextButton" id="next">Next</button>
    <button type="button" onclick="back();" class="backButton" id="back" disabled="true" style="background: #cccccc">Back</button>
    </div>

    <button type="button" onclick="window.location.href='practice.php'" class="backButton" style="margin-top: 100px;">Exit Practice</button>

<?php 	include_once("footer.inc.php"); ?>
