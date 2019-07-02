$(document).ready(function () {
    $('#regtarget').change(function() {
        if($(this).val() === "")
            $('#showdiv').hide();
        else
            $('#showdiv').show();
    });
});