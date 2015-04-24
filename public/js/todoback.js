$(document).ready(function(){

    var input = $('#todo').hide();
    var msg   = $('#danger');


    function checkEmpty()
    {
        if(input.val() != '')

    }



    //event on click

    $('#add').on('click', checkEmpty);





});