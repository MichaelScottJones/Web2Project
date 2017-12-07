<?php
	include_once("header.inc.php");
	if(!empty($_POST)){
		$level = $_POST["level"];
		echo '<input type="hidden" id="level" value="' . $level . '"></input>';
	}
?>
<script src="practiceScript.js"></script>
<script>
	window.onload = function(){
		if(document.getElementById("level") != null){
			var level = document.getElementById("level").value * 1.0;
		}
		else{
			level = 0;
		}
		generateLessons(level);
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
