<?php
	include_once("header.inc.php");
	if(!empty($_POST)){
		$level = $_POST["level"];
		echo '<input type="hidden" id="level" value="' . $level . '"></input>';
	}
?>

<script src="lessonScript.js"></script>
<script>
	window.onload = function(){
	    document.getElementById("navLessons").className = "navButton current";
	    if(document.getElementById("level") != null){
	        level = document.getElementById("level").value;
	    }
		generateLessons(level);
	}
</script>

        <div class="localNavBar">
            <ul class="navLinks">
              <li><a class="navButton last local" onclick="generateLessons(2);" id="navAdv">Advanced</a></li>
              <li><a class="navButton local" onclick="generateLessons(1);" id="navInt">Intermediate</a></li>
              <li><a class="navButton local" onclick="generateLessons(0);" id="navBeg">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Lessons</a></li>
            </ul>
        </div>
    </nav>

    <h1 class="header" id="header">Basic Lessons</h1>
	<div id="lessonLinks"></div>
<?php 	include_once("footer.inc.php"); ?>
