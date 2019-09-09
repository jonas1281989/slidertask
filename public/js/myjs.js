var i;
var tests = ["test1","test2","test3","test4","test5","test6"];


function testF(){
    for(var i=0; i<10; i++){
        document.getElementById(tests[i]).value = 0;
        output.innerHTML = this.value=0;
    }
}

function myFunction() {
        if(document.getElementById(tests[0]).value != 50) document.getElementById("weiter").disabled = true;
        else document.getElementById("weiter").disabled = false;


}




