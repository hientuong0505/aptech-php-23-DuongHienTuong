$(document).ready(function(e){
    setUpEvent();
});

function setUpEvent(){
    //Show
    $('#show').click(function(){
        $('img_id').show();
    });

    //Hide
    $('#hide').click(function() {
        $('img_id').hide();
    });

    //Toggle
    $('#change').click(function() {
        $('img_id').toggle();
    });
}