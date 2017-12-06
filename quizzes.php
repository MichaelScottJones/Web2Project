<?php
	include_once("header.inc.php");
?>
<script src="quizScript.js">
</script>

        <div class="localNavBar">
            <ul class="navLinks">
              <li><a id="navAdv" class="navButton last local" onclick="changeLevel(2);">Advanced</a></li>
              <li><a id="navInt" class="navButton local" onclick="changeLevel(1);">Intermediate</a></li>
              <li><a id="navBeg" class="navButton current local" onclick="changeLevel(0);">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Quizzes </a></li>
            </ul>
        </div>
    </nav>

    <h1 class="header" id="quizTitle"></h1>
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
    <button type="button" onclick="back();" class="backButton" id="back" disabled="true" style="background: #bbbbbb">Back</button>
    </div>

<?php 	include_once("footer.inc.php"); ?>
