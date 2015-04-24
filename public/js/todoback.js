$(document).ready(function(){

    var input = $('#todo');
    var msg   = $('#danger').hide();

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
        var trimedInput = $.trim(input);

        $.ajax({
            url: "/todoback/public/ajax/post/data",
            data: "input=" + trimedInput,
            dataType: "json",
            success: function(data)
            {

            }

        });




    }



    //event on click

    $('#add').on('click', checkEmpty);





});