
    $(document).on("click", ".addfav", function () {
        $cls = $(this);
        var id = $(this).attr('id');
        var businessid = $(this).attr('businessid');
        // alert(id);

        $.ajax({
            type: 'get',
            url: '/user/add_favorite',
            data: {'id': id, 'businessid':businessid},

            success: function (data) {
                // alert(data.msg);
                if(data.msg == 'delete'){
                    
                    $cls.removeClass('text-danger');
                    $cls.addClass('text-grey-one');
                }
                else{
                    $cls.removeClass('text-grey-one');
                    $cls.addClass('text-danger');
                }
            },

        });
    });
