$(function(){
    "use strict"

    $('form').submit(function() {
        $(this).find(".btn-finish").attr("disabled", true);
        $(this).find(".btn-finish").html("Submitting...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
    });
});

function checkForm(div, itype){
    var count = 0;
    $("#q"+div).find('input').each(function(){        
        if($(this).is(':checked')){
            count++
        }
    });
    if(itype == 'radio' && count == 1)
        return true;
    if(itype == 'checkbox' && count == 2)
        return true;
    return false;
}