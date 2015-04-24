$(document).ready(function(){
    var input = $('#todo');
    var msg   = $('#danger').hide();
    var list  = $('#list');
    var rows  = $('#list tr');

    // see if the field is empty
    function checkEmpty(event)
    {
        var inputValue = input.val()
        event.preventDefault();
        if( inputValue != '')
        {
            makeAjaxRequest(inputValue);
            inputValue = '';
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
                if(data.length == 0)
                {
                      list.append('<div class="alert alert-danger" role="alert">'+
                                   '<strong> No tasks available! </strong>'+
                                   '</div>');
                }
                else
                {
                    $.each(data, function(index, value){
                        rows.remove();
                        list.append('<tr><td>'+ '<input type="checkbox" value='+ ''+ value.id +''+ '' + '</td>' +
                            '<td>' + value.text + '</td>' + '<td><button type="button" class="btn btn-danger"> delete'+'</button></td></tr>'

                        );
                    })
                }


            }

        });
    }





    //event on click

    $('#add').on('click', checkEmpty);





});