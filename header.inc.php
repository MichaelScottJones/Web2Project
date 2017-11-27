<?php
    function thisPage($page){
        $this_page = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
        if($this_page == $page){
            echo "current";
        }
    }

    function picDiv(){
        $this_page = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
        if($this_page == "index"){
            echo '<div id="picDiv">';
        }
    }
?>
<!doctype html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<title>RegEx - Lessons</title>
    <link rel="stylesheet" type="text/css" href="regexStyles.css">
    <link rel="stylesheet" type="text/css" href="regexNavStyles.css">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
</head>
<body>
<?= picDiv() ?>
<div class="blurDiv">
    <nav>
        <div class="navBar">
            <ul class="navLinks">
              <li><a href="references.php" class="navButton last <?= thisPage("references") ?>">Reference</a></li>
              <li><a href="quizzes.php" class="navButton <?= thisPage("quizzes") ?>">Quizzes</a></li>
              <li><a href="practice.php" class="navButton <?= thisPage("practice") ?><?= thisPage("practiceInfo") ?>">Practice</a></li>
              <li><a href="lessons.php" class="navButton <?= thisPage("lessons") ?><?= thisPage("lessonInfo") ?>">Lessons</a></li>
              <li><a href="index.php" class="navButton <?= thisPage("index") ?>">Home</a></li>
              <li style="float:left"><a href="index.php" class="title">RegEx</a></li>
            </ul>
        </div>
