var i;
var slider = ["slider1","slider2","slider3","slider4","slider5"];
var counter = 1;



function weiterF(){
    for(var i=0; i<5; i++){
        document.getElementById(slider[i]).value = 0;
    }
    document.getElementById("sliderWert").innerHTML= 0;
    document.getElementById("durchlauf").innerHTML= counter;
    document.getElementById("anzdurch").innerHTML=counter;
    counter++;
    document.getElementById("ende").disabled = false;
    document.getElementById("weiter").disabled = true;
    //nur für slider2
    overlaylbvis();
}

function testFunction() {
    var x = document.createElement("IMG");
    x.setAttribute("src", "/images/box.png");
    x.setAttribute("width", "304");
    x.setAttribute("height", "228");
    x.setAttribute("alt", "The Pulpit Rock");
    document.body.appendChild(x);
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

function overlayvis() {
    var x = document.getElementById("overlay");
    var y =document.getElementById("popup");
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "block";
    }
    if (y.style.display == "none") {
        y.style.display = "block";
    } else {
        y.style.display = "block";
    }
}
function overlayinvis() {
    var x = document.getElementById("overlay");
    var y =document.getElementById("popup");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
    if (y.style.display == "block") {
        y.style.display = "none";
    } else {
        y.style.display = "none";
    }
}

function overlaylbvis() {
    var x = document.getElementById("overlay");
    var y =document.getElementById("lootbox");
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "block";
    }
    if (y.style.display == "none") {
        y.style.display = "block";
    } else {
        y.style.display = "block";
    }
}
function overlayilbnvis() {
    var x = document.getElementById("overlay");
    var y =document.getElementById("lootbox");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
    if (y.style.display == "block") {
        y.style.display = "none";
    } else {
        y.style.display = "none";
    }
}
function sliderscale() {

    if (window.matchMedia("(max-width: 700px)").matches) {
        for(var i=0; i<5; i++){
            document.getElementById(slider[i]).step = 5;
        }
    } else {
        for(var i=0; i<5; i++){
            document.getElementById(slider[i]).step = 1;
        }
    }
}
