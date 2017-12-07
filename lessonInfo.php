<?php
	include_once("header.inc.php");
	if(!empty($_POST)){
		$file = $_POST["lesson"];
		include_once($file);
		$level = $_POST["level"];
		echo '<input type="hidden" id="level" value="' . $level . '"></input>';
		$lessonNum = $_POST["lessonNum"];
		echo '<input type="hidden" id="lessonNum" value="' . $lessonNum . '"></input>';
	}
	else{
		header( 'Location: lessons.php' ) ;
	}
?>
<script src="lessonScript.js"></script>
<script>
	window.onload = function(){
		if(document.getElementById("level") != null){
	        var level = document.getElementById("level").value * 1.0;
			switch(level){
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
					console.log("ERROR: Illegal level")
			}
	    }
		else{
			console.log("ERROR: No level specified")
		}
		level = document.getElementById("level").value * 1.0;
		var lesson = document.getElementById("lessonNum").value * 1.0;
		toggleButtons(level, lesson);
	}
</script>
        <div class="localNavBar">
            <ul class="navLinks">
              <li><a class="navButton last local" onclick="navigateLevel(2);" id="navAdv">Advanced</a></li>
              <li><a class="navButton local" onclick="navigateLevel(1);" id="navInt">Intermediate</a></li>
              <li><a class="navButton local" onclick="navigateLevel(0);" id="navBeg">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Lessons</a></li>
            </ul>
        </div>
    </nav>

    <div class="bottomDiv">
        <button type="button" onclick="window.location.href='lessons.php'" class="backButton">Back</button>
        <button type="button" onclick="nextLesson();" class="nextButton" id="next">Next Lesson</button>
    </div>

<?php 	include_once("footer.inc.php"); ?>
