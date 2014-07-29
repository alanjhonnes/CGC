$(document).ready(function(){
   $(".call-to-action").click(function(){
       $("#overlay").fadeIn("fast"); 
       $("#orcamento").css("marginTop", - ($('#orcamento').height())/2 + "px").fadeIn("fast"); 
    });
    
    $("#orcamento .close-button").click(function(){
        $("#overlay").fadeOut("fast"); 
        $("#orcamento").fadeOut("fast"); 
    }); 
    
    var $contactForm = $("#contact-form");
    
    $contactForm.validate();
    $contactForm.ajaxForm({ 
        beforeSubmit: function(){
            $("#contact-form").valid();
            $('#contact-response').html("Enviando mensagem...");
        },
        target:        '#contact-response',   // target element(s) to be updated with server response 
    });
});