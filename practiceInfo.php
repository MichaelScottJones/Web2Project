<?php
	include_once("header.inc.php");
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


    <form id="form">
        <label class="customRadio" id="Ans0" onclick="selectAnswer(0);">First answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="customRadio" id="Ans1" onclick="selectAnswer(1);">Second answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="customRadio" id="Ans2" onclick="selectAnswer(2);">Third answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="customRadio" id="Ans3" onclick="selectAnswer(3);">Fourth answer
          <input type="radio" name="radio">
          <span class="checkmark"></span>
        </label>
    </form>

    <div class="quizButtonDiv">
    <button type="button" onclick="nextQuestion();" class="nextButton" id="next">Next</button>
    <button type="button" onclick="back();" class="backButton" id="back" disabled="true" style="background: #9b9b9b">Back</button>
    </div>

    <button type="button" onclick="window.location.href='practice.php'" class="backButton" style="bottom: 0;">Exit Practice</button>

<?php 	include_once("footer.inc.php"); ?>
