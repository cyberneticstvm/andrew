$(function(){
    "use strict"
    $('form').submit(function() {
        $(this).find(".btn-finish").attr("disabled", true);
        $(this).find(".btn-finish").html("Submitting...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
        $(".g-recaptcha").hide();
        $("#progressModal").modal();
    });

    $(document).on("click", ".btn-finish", function(){
        if($('[name=g-recaptcha-response]').val() && $('[name=name]').val() && $('[name=email]').val()){
            $(this).closest('form').submit();
        }else if(!$('[name=g-recaptcha-response]').val()){
            alert('Please verify the Captcha!');
            return false;
        }
    });
});

function checkForm(div, itype){
    var count = 0;
    $("#q"+div).find('input').each(function(){        
        if($(this).is(':checked')){
            count++
        }
    });
    if(itype == 'radio' && count == 1){
        return true;
    }else if(itype == 'radio' && count == 0){
        alert("Please select an option")
    }
    if(itype == 'checkbox' && count == 2){
        return true;
    }else if(itype == 'checkbox' && count != 2){
        alert("Please select Two options")
    }        
    return false;
}