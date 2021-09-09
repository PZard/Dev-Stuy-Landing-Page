var imgs = [];
var slider;
var total = 3;
var cImg;
var maxImg;
var temp;

//informações do caminho até as imagens (salvas como nome+numero)
var tipo = ".png";
var path = "images/slider";
var nome = "/s";

function preLoad() {
    var s = 1;
    for(var i = 0; i < total; i++){
        imgs[i] = new Image();
        imgs[i].src = path + nome + s + tipo;
        s++;
    }
}

function load() {
    slider.src = imgs[cImg].src;
}

function get() {
    preLoad();
    cImg = 0;
    maxImg = imgs.length - 1;
    slider = document.getElementById("circulo");
    load();
    temp = 0;
}

function anima() {
    temp++;
    if (temp >= 5000){
        temp = 0;
        slide(1);
    }
}

function slide(side) {
    temp = 0;
    cImg += side;
    if (cImg > maxImg){
        cImg = 0;
    } else if (cImg < 0){
        cImg = maxImg;
    }
    load(cImg);
}

window.addEventListener("load",get);