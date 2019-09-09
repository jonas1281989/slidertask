var i;
var slider = ["slider1","slider2","slider3","slider4","slider5"];
var counter = 1;
function weiterF(){
    for(var i=0; i<5; i++){
        document.getElementById(slider[i]).value = 0;
    }
    document.getElementById("sliderWert").innerHTML= 0;
    document.getElementById("durchlauf").innerHTML= counter;
    counter++;
    document.getElementById("weiter").disabled = true;

}

function setFifty(){
    for(var i=0; i<5; i++){
        document.getElementById(slider[i]).value = 50;
    }
    document.getElementById("sliderWert").innerHTML= 50;
    myFunction();
}

function valueF(nummer){
    var rangeslider = document.getElementById(slider[nummer]);
    var output = document.getElementById("sliderWert");
    output.innerHTML = rangeslider.value;
    rangeslider.oninput = function() {
        myFunction();
        output.innerHTML = this.value;
    }
}

function myFunction() {
        if(document.getElementById(slider[0]).value == 50 && document.getElementById(slider[1]).value == 50 && document.getElementById(slider[2]).value == 50 && document.getElementById(slider[3]).value == 50 && document.getElementById(slider[4]).value == 50) document.getElementById("weiter").disabled = false;
        else document.getElementById("weiter").disabled = true;
}




