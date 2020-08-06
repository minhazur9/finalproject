$(document).ready(function(){
    $("#loginBox").click(function(){
        $(".menuItem").toggle();
    });
});

function glow(element){
    element.style.backgroundColor = "#42A5F5";
    element.style.color = "#f6f8f9";
}

function unGlow(element){
    element.style.backgroundColor = "#f6f8f9";
    element.style.color = "black";
}

