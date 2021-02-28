
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
function playaudi(id) {
    if (id.paused) {
        id.play(); 

    } else {
        id.pause(); 
        id.currentTime = 0;
    }
}

// function for modal exclude
function editExclude(){
    $('#excludeModal').modal('show')
}

// function for modal change
function modalchange(param1, param2, param3, param4){
    document.getElementById("exampleModalLongTitle").innerText = param1 + " Alarm " + param4;
    document.getElementById("Number").value = param3;
    document.getElementById("Type").value = param2;
    document.getElementById("trueType").value = param2;
    document.getElementById("typeProses").value = param1;
    document.getElementById("idAlarm").value = param4;
    document.getElementById("whenEdit").value = param3;
    if (param1 == "Delete") {
        document.getElementById("descriptionModal").hidden = true;
        document.getElementById("Time").value = param3;
        document.getElementById("labelTime").hidden = true;
        document.getElementById("Time").hidden = true;
        document.getElementById("Warning").innerText = "Are You Sure Wanna Delete This Alarm?";
        document.getElementById("Warning").hidden = false;
    } else {
        document.getElementById("descriptionModal").hidden = false;
        document.getElementById("Time").value = "";
        document.getElementById("labelTime").hidden = false;
        document.getElementById("Time").hidden = false;
        document.getElementById("Warning").hidden = true;
        document.getElementById("descriptionModal").innerText = "This Modal is used for " + param1 + " Alarm, Please Remember what you wanna do, The change will be effect on Alarm No " + param3 + " and Alarm Type of "+ param2;
    }
    $('#exampleModalCenter').modal('show')
}