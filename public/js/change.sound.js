
// Variable For Audio
var audi01 = document.getElementById("audio01");
var audi02 = document.getElementById("audio02");
var audi03 = document.getElementById("audio03");
var audi04 = document.getElementById("audio04");
var audi05 = document.getElementById("audio05");
var audi06 = document.getElementById("audio06");
var audi07 = document.getElementById("audio07");
var audi08 = document.getElementById("audio08");
var audi09 = document.getElementById("audio09");
var audi10 = document.getElementById("audio10");
var audi11 = document.getElementById("audio11");
var audi12 = document.getElementById("audio12");
var audi13 = document.getElementById("audio13");
var audi14 = document.getElementById("audio14");
var audi15 = document.getElementById("audio15");


// function for playing audio
function playaudi01() {
    audi01.play(); 
}
function playaudi02() {
    audi02.play(); 
}
function playaudi03() {
    audi03.play(); 
}
function playaudi04() {
    audi04.play(); 
}
function playaudi05() {
    audi05.play(); 
}
function playaudi06() {
    audi06.play(); 
}
function playaudi07() {
    audi07.play(); 
}
function playaudi08() {
    audi08.play(); 
}
function playaudi09() {
    audi09.play(); 
}
function playaudi10() {
    audi10.play(); 
}
function playaudi11() {
    audi11.play(); 
}
function playaudi12() {
    audi12.play(); 
}
function playaudi13() {
    audi13.play(); 
}
function playaudi14() {
    audi14.play(); 
}
function playaudi15() {
    audi15.play(); 
}

// function for stop playing audio
function stopaudi01() {
    audi01.pause(); 
    audi01.currentTime = 0;
}
function stopaudi02() {
    audi02.pause(); 
    audi02.currentTime = 0;
}
function stopaudi03() {
    audi03.pause(); 
    audi03.currentTime = 0;
}
function stopaudi04() {
    audi04.pause(); 
    audi04.currentTime = 0;
}
function stopaudi05() {
    audi05.pause(); 
    audi05.currentTime = 0;
}
function stopaudi06() {
    audi06.pause(); 
    audi06.currentTime = 0;
}
function stopaudi07() {
    audi07.pause(); 
    audi07.currentTime = 0;
}
function playaudi08() {
    audi08.pause(); 
    audi08.currentTime = 0;
}
function stopaudi09() {
    audi09.pause(); 
    audi09.currentTime = 0;
}
function stopaudi10() {
    audi10.pause(); 
    audi10.currentTime = 0;
}
function stopaudi11() {
    audi11.pause(); 
    audi11.currentTime = 0;
}
function stopaudi12() {
    audi12.pause(); 
    audi12.currentTime = 0;
}
function stopaudi13() {
    audi13.pause(); 
    audi13.currentTime = 0;
}
function stopaudi14() {
    audi14.pause(); 
    audi14.currentTime = 0;
}
function stopaudi15() {
    audi15.pause(); 
    audi15.currentTime = 0;
}

// function for modal change
function modalchange(id){
    document.getElementById("idsound").value = id;
    $('#exampleModalCenter').modal('show')
}

// Printing On Page Length Duraion Audio
function lengthduration(number)
{
    if(number.readyState > 0) 
    {
        var minutes = parseInt(number.duration / 60, 10);
        var second = parseInt(number.duration % 60);
        var seconds = '' + second;
        while (seconds.length < 2) {
            seconds = '0' + seconds;
        }

        return(minutes+":"+seconds);
    }
}

window.setTimeout ( function() { 
    document.getElementById("length01").innerHTML = lengthduration(audi01);
    document.getElementById("length02").innerHTML = lengthduration(audi02);
    document.getElementById("length03").innerHTML = lengthduration(audi03);
    document.getElementById("length04").innerHTML = lengthduration(audi04);
    document.getElementById("length05").innerHTML = lengthduration(audi05);
    document.getElementById("length06").innerHTML = lengthduration(audi06);
    document.getElementById("length07").innerHTML = lengthduration(audi07);
    document.getElementById("length08").innerHTML = lengthduration(audi08);
    document.getElementById("length09").innerHTML = lengthduration(audi09);
    document.getElementById("length10").innerHTML = lengthduration(audi10);
    document.getElementById("length11").innerHTML = lengthduration(audi11);
    document.getElementById("length12").innerHTML = lengthduration(audi12);
    document.getElementById("length13").innerHTML = lengthduration(audi13);
    document.getElementById("length14").innerHTML = lengthduration(audi14);
    document.getElementById("length15").innerHTML = lengthduration(audi15);
}, 1500);

