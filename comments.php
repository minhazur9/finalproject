<?php
    echo '<div class="space">
        <form><label>Comment:</label>
        <textarea type="text" rows="20" cols="90" disabled method="post"></textarea>
        <button class="submit post" type="button" disabled>POST</button>
        </form><br>
        <i class="fa fa-thumbs-up up" style="font-size:48px" ><a id="likes">0</a></i>
        <i class="fa fa-thumbs-down down" style="font-size:48px"><a id="dislikes">0</a></i></div>';
            
echo '<script> 
    $(".up").click(function() {
        $("#dislikes", ".down", this).css("color","black");
        $(this).parent().find(".down").css("color","black");
        $("#dislikes",".down", this).html(function() { 
            return 0; 
        });
    $("#likes",this).css("color","#42A5F5");
    $(this).css("color","#42A5F5");
    $("#likes",this).html(function() { 
        return +1; 
    });
});

$(".down").click(function() {
        $("#likes", ".up", this).css("color","black");
        $(this).parent().find(".up").css("color","black");
        $("#likes",".up", this).html(function() { 
            return 0; 
    });
    $("#dislikes",this).css("color","red");
    $(this).css("color","red");
    $("#dislikes",this).html(function() { 
        return +1; 
    });
});   

$(".menuItem").css("display","none");

$(".post").click(function() {
    var comment = $(this).parent().find("textarea").val();
    $(this).parent().find("textarea").css("display","none");
    $(this).parent().find("label").css("display","none");
    $(this).css("display","none");
    $(this).parent().prepend("<p>"+comment+"<p>");
});
</script>';    ?>