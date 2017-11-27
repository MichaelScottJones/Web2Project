var q = 0;
var qmax = 3;

function toggleButtons(){
    if(q == 0){
        document.getElementById("back").disabled = true;
        document.getElementById("back").style.background = "#cccccc";
    }
    else{
        document.getElementById("back").disabled = false;
        document.getElementById("back").style.background = "#D0021B";
    }
    if(q==qmax){
        document.getElementById("next").innerHTML = "Submit";
    }
    else{
        document.getElementById("next").innerHTML = "Next";
    }
}

function nextQuestion(){
    if(q == qmax){
        // SUBMIT
    }
    else{
        q++;
        toggleButtons();
    }
}

function back() {
    q--;
    toggleButtons();
}
