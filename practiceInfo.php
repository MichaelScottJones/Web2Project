<?php
	include_once("header.inc.php");

?>

        <div class="localNavBar">
            <ul class="navLinks">
              <li><a href="" class="navButton last local">Advanced</a></li>
              <li><a href="" class="navButton local">Intermediate</a></li>
              <li><a href="" class="navButton current local">Beginner</a></li>
              <li style="float:left"><a href="" class="localTitle">Practice</a></li>
            </ul>
        </div>
    </nav>


    <h1 class="header">Practice 1: The practice title goes here. </h1>
    <p class="description">The practice information and sample questions could go here. Like on the lessons page, we might decide to use markdown. The practice page does not have interactivity so we do not need radio buttons or anything like that.</p>

    <button type="button" onclick="window.location.href='practice.php'" class="backButton" style="bottom: 0">Back</button>

<?php 	include_once("footer.inc.php"); ?>
