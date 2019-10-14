//Variablendeklaration und Wertzuweisung
var i;
var slider = ["slider1","slider2","slider3","slider4","slider5"];
var counter = 1;
var images=["images/macchu.jpeg","images/france.jpg", "images/mauer.jpeg","images/berlin.jpg", "images/maya.jpeg","images/weiß.jpg", "images/pyramiden.jpeg","images/water.jpg", "images/rio.jpeg","images/pisa.jpg", "images/taj.jpeg", "images/denali.jpg", "images/kol.jpeg",  "images/petra.jpeg", "images/canyon.jpg", "images/moscow.jpg", "images/notre.jpg", "images/italy.jpg", "images/neus.jpg"];
var imgcounter = 0;
var onoff = 0;                                                  //Zustandsvariable: 0 = Lootbox wird angezeigt | 1 = Bild wird angezeigt


//Funktion die beim Klicken des Weiter-Buttons ausgeführt wird, b=1 -> Lootbox, b=2 -> ohne Lootbox
function weiterF(b){
    for(var i=0; i<5; i++){
        document.getElementById(slider[i]).value = 0;           //Slider auf 0 setzen
    }
    document.getElementById("sliderWert").innerHTML = 0;         //Wert auf 0, Anzeige aktualisieren, Möglichkeit Umfrage nun zu beenden, Weiterbutton deaktivieren
    document.getElementById("durchlauf").innerHTML= counter;
    document.getElementById("anzdurch").innerHTML = counter;
    counter++;
    document.getElementById("ende").disabled = false;
    document.getElementById("weiter").disabled = true;
    if (b == 1) {                                                   //nur für Variante mit Lootbox
        if (counter > 20) {                                         //Overlay mit deaktiviertem Zurück-Button bei 20 Durchläufen
            overlayvis2();
        } else lootboxvis();                                      //sonst Lootbox anzeigen
    }
    if(counter>20){
        overlayvis2();                                          //Overlay mit deaktiviertem Zurück-Button bei 20 Durchläufen
    }
}

//Prüffunktion, die den Weiter-Button nur aktiviert, wenn alle Slider=50
function checkFifty() {
    if (document.getElementById(slider[0]).value === 50 && document.getElementById(slider[1]).value == 50 && document.getElementById(slider[2]).value == 50 && document.getElementById(slider[3]).value == 50 && document.getElementById(slider[4]).value == 50) document.getElementById("weiter").disabled = false;
    else document.getElementById("weiter").disabled = true;
}

//Testfunktion um nicht manuell alle Slider auf 50 ziehen zu müssen

function setFifty(){
    for(var i=0; i<5; i++){
        document.getElementById(slider[i]).value = 50;
    }
    document.getElementById("sliderWert").innerHTML= 50;
    checkFifty();
}

//Funktion die aktuelle Wertanzeige realisiert
function valueF(nummer){
    var rangeslider = document.getElementById(slider[nummer]);
    var output = document.getElementById("sliderWert");
    output.innerHTML = rangeslider.value;                        //liest Wert des aktuellen Sliders ein
    rangeslider.oninput = function() {
        checkFifty();                                            //Prüffunktionaufruf, da so immer geprüft wird, wenn ein Slider bewegt wird
        output.innerHTML = this.value;                           // und gibt diesen aus
    }
}


//Einblendung Overlay mit Beenden-Dialog
function overlayvis() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popup").style.display = "block";
}

//Ausblendung Overlay mit Beenden-Dialog
function overlayinvis() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("popup").style.display = "none";
}

//Einblendung Overlay mit Beenden-Dialog, nach 20 Durchläufen, keine Möglichkeit "Zurück" zu klicken
function overlayvis2() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("popup").style.display = "block";
    document.getElementById("backbutton").disabled = true;
}

//Einblendung Overlay mit Lootbox
function lootboxvis() {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("lootbox").style.display = "block";
}

//Ausblendung Overlay mit Lootbox
function lootboxinvis() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("lootbox").style.display = "none";
}

//Funktion die beim Klicken auf die Lootbox (onoff=0) oder auf das Bild (onoff=1)
function clickBox(){
    if(onoff==0){
        document.getElementById("lootbox").style.display = "none";        //Um die Bildladeverzögerung zu umgehen wird die Lootbox kurz ausgeblendet und das Bild mit kurzer Verzögerung erst eingeblendet
        document.getElementById("boxid").src = images[imgcounter];        //Lootbox durch Bild ersetzen
        document.getElementById("lootbox").className = "lootboxbild";      //Neue Klassenzuweisung, keine Animation, dafür Rahmen
        document.getElementById("boxid").className = "imageres";
        setTimeout(nextPic, 100);                               //Verzögerung
        onoff=1;
    } else {
        lootboxinvis();                                                 //Bild ausblenden und durch Lootbox ersetzen, vorherige Klassen zuweisen
        document.getElementById("boxid").src="images/box.png";
        document.getElementById("boxid").className = "imagewackel";
        document.getElementById("lootbox").className="lootbox";
        onoff=0;
    }
}

//Ausgelagerte Funktion um Verzögerung zu realisieren, die Bild einblendet und Bildzähler inkrementiert
function nextPic(){
    document.getElementById("lootbox").style.display = "block";
    imgcounter++;
}

//Funktion zur Sliderstepskalierung in Abhängigkeit vom Endgerät
function sliderscale() {
    if (window.matchMedia("(max-width: 700px)").matches) {         // bei kleinen Geräten unter 700px Bildschirmbreite 5er Schritte
        for (var j = 0; j < 5; j++) {
            document.getElementById(slider[i]).step = 5;
        }
    } else {
        for (var k = 0; k < 5; k++) {                                           // sonst 1er Schritte
            document.getElementById(slider[i]).step = 1;
        }
    }
}

//Aufruf der jeweiligen Umfrage und Übergabe der Durchlaufzahl im Link
function umfrage(b) {
    counter--;                                                            // Dekrementierung da Counter schon auf den nächsten Durchlauf gesetzt ist
    if(b==1) window.location.href = "https://wiwigoettingen.eu.qualtrics.com/jfe/form/SV_cYCHgnELRRqwpQp?xyz=" + counter;
    if(b==2) window.location.href = "https://wiwigoettingen.eu.qualtrics.com/jfe/form/SV_6QKfS109apA2s1n?xyz=" + counter;
}
