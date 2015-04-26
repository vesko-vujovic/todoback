$(document).ready(function(){
    var input = $('#todo');
    var msg   = $('#danger').hide();
    var list  = $('#list');

    // see if the field is empty
    function checkEmpty(event)
    {
        var inputValue = input.val();
        event.preventDefault();
        if( inputValue != '')
        {

            makeAjaxRequest(inputValue);
            input.val('');
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
                list.empty();
                if(data.length == 0)
                {
                      list.prepend('<tr><td><div class="alert alert-danger" role="alert">'+
                                   '<strong> No tasks available! </strong>'+
                                   '</div></td></tr>');
                }
                else
                {
                    $('#msg').hide();
                    $.each(data, function(index, value){
                        list.prepend('<tr><td>'+ '<input class="check"  type="checkbox" value='+ value.id +' > </td>' +
                            '<td>' + value.text + '</td>' +
                            '<td><button type="button" data-toggle="modal"  class="del btn btn-danger"> ' +
                            'delete </button></td></tr>'
                        );
                    })
                }


            }

        });
    }
    function deleteTask()
    {
       var idValue = $('td:first-child input', $(this).parents('tr')).val();
        $.ajax({
            url: "/todoback/public/ajax/delete/task",
            data: "id=" + idValue,
            dataType: "json",
            success: function(data)
            {
                list.empty();
                if(data.length !== 0)
                {

                }
            }

        });
    }

    //event on click
    $('#add').on('click', checkEmpty);

    //event to delete task
    $(document).on('click', '.del',deleteTask);

    //on load event
    $(function() {
        $.getJSON("/todoback/public/ajax/get/data", {}, function(data) {
            if(data.length == 0)
            {
                list.prepend('<div id="msg" class="alert alert-danger" role="alert">'+
                '<strong> No tasks available! </strong>'+
                '</div>');
            }
            else
            {
                $.each(data, function(index, value) {
                    list.prepend( '<tr><td>'+ '<input class="check" type="checkbox" value='+ value.id +' > </td>' +
                        '<td>' + value.text + '</td>' +
                        '<td><button type="button"   class="del btn btn-danger"> ' +
                        'delete </button></td></tr>'
                    );
                });
            }
        });
    });


});