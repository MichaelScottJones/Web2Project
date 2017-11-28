<?php
	include_once("header.inc.php");
?>
<script src="lessonScript.js">
</script>
        <div class="localNavBar">
            <ul class="navLinks">
              <li><a href="" class="navButton last local">Advanced</a></li>
              <li><a href="" class="navButton local">Intermediate</a></li>
              <li><a href="" class="navButton current local">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Lessons</a></li>
            </ul>
        </div>
    </nav>


    <h1 class="header" id="header">Lesson 1: The lesson title goes here. </h1>
	<div class="readable" id="lesson"></div>
    <p class="readable" id="lesson"></p>

    <!-- The lesson information goes here. It might be a good idea for us to use markdown instead of HTML. If going with HTML though, the whole lesson can be formatted in this P tag or we can use multiple description p tags. -->

    
    <div class="bottomDiv">
        <button type="button" onclick="window.location.href='lessons.php'" class="backButton">Back</button>
        <button type="button" onclick="nextQuestion();" class="nextButton" id="next">Next Lesson</button>
    </div>

<?php 	include_once("footer.inc.php"); ?>
