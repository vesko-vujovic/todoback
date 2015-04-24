$(document).ready(function(){

    var input = $('#todo').hide();
    var msg   = $('#danger');

    // see if the field is empty
    function checkEmpty(event)
    {
        var inputValue = input.val()
        event.preventDefault();
        if( inputValue != '')
        {
            makeAjaxRequest(inputValue);
        }
        else
        {
            msg.show();
        }

    }

    //make ajax call
    function makeAjaxRequest(input)
    {

    }



    //event on click

    $('#add').on('click', checkEmpty);





});