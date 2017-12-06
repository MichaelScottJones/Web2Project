var lesson = 0;
var headers = [
    "The Basics"
]

window.onload = function(){
    document.getElementById("header").innerHTML = "Lesson " + (lesson+1) + ": " + headers[lesson];
    lessonBody.innerHTML = message;
    document.getElementById("navLesson").className = "navButton current";
}
