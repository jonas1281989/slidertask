var i;
var slider = ["slider1","slider2","slider3","slider4","slider5"];
var counter = 1;
var images=["images/macchu.jpeg", "images/mauer.jpeg", "images/maya.jpeg", "images/pyramiden.jpeg", "images/rio.jpeg", "images/taj.jpeg", "images/kol.jpeg",  "images/petra.jpeg", "images/moscow.jpg", "images/neus.jpg"];
var imgcounter = 0;
var onoff = 0;


function weiterF(b){
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
    if(b==1){
        if(counter%2==0) overlaylbvis();
        if(counter>20) overlayvis2();
    }

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
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popup").style.display = "block";
}
function overlayvis2() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popup").style.display = "block";
    document.getElementById("backbutton").disabled = true;
}

function overlayinvis() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("popup").style.display = "none";
}


function overlaylbvis() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("lootbox").style.display = "block";
}

function overlayilbnvis() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("lootbox").style.display = "none";
}
function clickBox(){
    if(onoff==0){
        document.getElementById("lootbox").style.display="none";
        nextPic();
        onoff=1;
    }
    else{
        overlayilbnvis();
        document.getElementById("boxid").src="images/box.png";
        document.getElementById("boxid").className = "imagewackel"
        document.getElementById("lootbox").className="lootbox";
        onoff=0;
    }
}

function nextPic(){
    document.getElementById("boxid").src=images[imgcounter];
    document.getElementById("lootbox").className="lootboxbild"
    document.getElementById("boxid").className = "imageres";
    setTimeout(showBild, 100);
    imgcounter++;
}

function showBild(){
    document.getElementById("lootbox").style.display = "block";
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

function umfrage() {
    counter--;
    window.location.href = "http://wiwigoettingen.eu.qualtrics.com/jfe/form/SV_7U8uChf6pwvt9Tn?xyz=" + counter + "/";
}
