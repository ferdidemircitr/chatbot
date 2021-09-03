$(document).ready(function(){
    $("#message").on("keyup", function(){
        if($("#message").val()){
            $("#send").css("display", "block");
        }else{
            $("#send").css("display", "none");
        }
    });

});
$("#send").on("click", function(e){
    $userMessage = $("#message").val();
    $appendUserMessage = '<div class="messageContainer"><div class="chat userMessage">' + $userMessage + '</div></div>';
    $(".messageDisplaySection").append($appendUserMessage);

    $.ajax({
        url: "chatbot.php",
        type: "POST",
        data: {messageValue: $userMessage},
        success : function(data) {
            $appendBotResponse = '<div class="chat botMessage">'+data+'</div>';
            $(".messageDisplaySection").append($appendBotResponse);
        }
    });
    $("#message").val("");
    $("#send").css("display", "none");
})
