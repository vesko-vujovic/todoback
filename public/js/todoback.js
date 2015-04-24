$(document).ready(function(){

    var input = $('#todo');
    var msg   = $('#danger').hide();
    var list  = $('#list');

    // see if the field is empty
    function checkEmpty(event)
    {
        var inputValue = input.val()
        event.preventDefault();
        if( inputValue != '')
        {
            inputValue.val('');
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
                $.each(data.pop(), function(index, value){
                   list.append('<tr></tr><td>'+ '<input type="checkbox" value='+ ''+ value.id +''+ '' + '</td>' +
                              '<td>' + value.text + '</td>' + '<td><button type="button" class="btn btn-danger"> delete'+'</button></td>'

                   );
                })
            }

        });
    }

    $.



    //event on click

    $('#add').on('click', checkEmpty);





});