<?php
	include_once("header.inc.php");
?>
<script src="quizScript.js">
</script>

        <div class="localNavBar">
            <ul class="navLinks">
              <li><a href="" class="navButton last local">Advanced</a></li>
              <li><a href="" class="navButton local">Intermediate</a></li>
              <li><a href="" class="navButton current local">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Quizzes </a></li>
            </ul>
        </div>
    </nav>

    <h1 class="header">Basic Quiz: Introduction to RegEx</h1>
    <p class="description quizQuestionNum" id="QNum">Question 1:</p>
    <p class="description quizQuestion" id="Q">This is filler text that you should not be seeing in prod! </p>

	<div id="feedback"></div>


    <form id="form">
        <label class="customRadio">First answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="customRadio">Second answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="customRadio">Third answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="customRadio" >Fourth answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
    </form>

    <div class="quizButtonDiv">
    <button type="button" onclick="nextQuestion();" class="nextButton" id="next">Next</button>
    <button type="button" onclick="back();" class="backButton" id="back" disabled="true" style="background: #9b9b9b">Back</button>
    </div>

<?php 	include_once("footer.inc.php"); ?>
