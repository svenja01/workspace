var z1;
var z2;
var result;


//eingaben auslesen
function get_numbers(){
    z1 = parseInt(prompt("geben sie die erste Zahl ein: "));
    z2 = parseInt(prompt("geben sie die zweite Zahl ein: "));
}


function set_listeners(){
    var plus = document.getElementById("plus");
    var minus = document.getElementById("minus");

    plus.addEventListener("click", function(){
        result = z1 + z2;
        show_result();
    });
    minus.addEventListener("click", function(){
        result = z1 - z2;
        show_result();
    });
        mal.addEventListener("click", function(){
        result = z1 * z2;
        show_result();
    });
        geteilt.addEventListener("click", function(){
        result = z1 / z2;
        show_result();
    });
}


function show_result(){
    var balken = document.getElementById("balken");
    var ausgabe = document.getElementById("ausgabe");
    var filler;
    var counter = 1;
    var resultTemp = result;
    ausgabe.innerHTML = result;
    while((resultTemp - 100) > 0){
        resultTemp = resultTemp -100;
        counter ++;
    }
    filler = result/(counter*100)*100;
    balken.style.width = filler + "%";

}




