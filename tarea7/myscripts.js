function cambiarColor(boton){
    var rb1= document.getElementById("rb1");
    var rb2= document.getElementById("rb2");
    if (rb1.checked == true) {
        var color=boton.name;
        document.getElementById("panel").style.background=color;
    }
    else if (rb2.checked == true) {
        var color=boton.name;
        document.getElementById("panel").style.color=color;
    }
}