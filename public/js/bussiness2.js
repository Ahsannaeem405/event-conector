
   
   $('.addbtn').click(function() {
        
    });

    $('.removbtn').click(function() {
        $('.hoursdiv1').remove();
        
    });


    
    $('.custom_pre').click(function() {
        $('.custom_pre_model').css({"opacity": "1","position":"relative", "display":" block"});
        $('.custom_pre_model2').css({"opacity": "0","position":"relative", "display":" none"});

        
        
         $('#finish').removeClass('active');
         $('#confirm').removeClass('active');
        
        
        
    });

    



    // 
    $(document).on("click", "._24by7open", function() {

   

        var val1 = $(this).val();
        // alert(val1);
        if( val1 == 1)
        {
            $('.hoursdiv').addClass('d-none');
        }
        else{
            $('.hoursdiv').removeClass('d-none');
        }
        
        
    });

    $(document).on("click", "._24byopen", function() {

   

        var val1 = $(this).val();
        // alert(val1);
        if( val1 == 1)
        {
            $('.hoursdiv2').addClass('d-none');
        }
        else{
            $('.hoursdiv2').removeClass('d-none');
        }
        
        
    });



    
    

    $(document).on('click','.add_btn2',function() {
        alert('ddddd');
        if($(this).attr('att') == 1)
        {
            
            $('.count21').val( function(i, oldval) {
                return ++oldval;
            });
            

            $('.monday').append(`<div class="main2 input-text mb-2 day1">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="mondayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="mondayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="1" class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 2)
        {
            
            $('.count22').val( function(i, oldval) {
                return ++oldval;
            });
            $('.tuesday').append(`<div class="main2 input-text mb-2 day2">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="tuesdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="tuesdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="2"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 3)
        {
            
            $('.count23').val( function(i, oldval) {
                return ++oldval;
            });
            $('.wednesday').append(`<div class="main2 input-text mb-2 day3">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="wednesdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="wednesdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="3"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 4)
        {
            
            $('.count24').val( function(i, oldval) {
                return ++oldval;
            });
            $('.thursday').append(`<div class="main2 input-text mb-2 day4">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="thursdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="thursdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="4"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 5)
        {
            $('.count25').val( function(i, oldval) {
                return ++oldval;
            });
            $('.friday').append(`<div class="main2 input-text mb-2 day5">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="fridayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="fridayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="5"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 6)
        {
            $('.count26').val( function(i, oldval) {
                return ++oldval;
            });
            $('.saturday').append(`<div class="main2 input-text mb-2 day6">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="saturdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="saturdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="6"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 7)
        {
            $('.count27').val( function(i, oldval) {
                return ++oldval;
            });
            $('.sunday').append(`<div class="main2 input-text mb-2 day7">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="sundayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="sundayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="7"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        

    });    

    

    $(document).on("click",".clos_icon2",function() {
        if($(this).attr('att') == 1)
        {
            $('.count21').val( function(i, oldval) {
                return --oldval;
            });
        }
        if($(this).attr('att') == 2)
        {
            $('.count22').val( function(i, oldval) {
                return --oldval;
            });
        }
        if($(this).attr('att') == 3)
        {
            $('.count23').val( function(i, oldval) {
                return --oldval;
            });
        }
        if($(this).attr('att') == 4)
        {
            $('.count24').val( function(i, oldval) {
                return --oldval;
            });
        }
        if($(this).attr('att') == 5)
        {
            $('.count25').val( function(i, oldval) {
                return --oldval;
            });
        }
        if($(this).attr('att') == 6)
        {
            $('.count26').val( function(i, oldval) {
                return --oldval;
            });
        }
        if($(this).attr('att') == 7)
        {
            $('.count27').val( function(i, oldval) {
                return --oldval;
            });
        }
        $(this).parent().remove();
    
    });
    $('.add_btn3').click(function() {
        if($(this).attr('att') == 1)
        {
            
            
            $('.count41').val( function(i, oldval) {
                return ++oldval;
            });
            

            $('.monday').append(`<div class="main2 input-text mb-2 day1">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="mondayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="mondayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="1" class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 2)
        {
            
            $('.count42').val( function(i, oldval) {
                return ++oldval;
            });
            $('.tuesday').append(`<div class="main2 input-text mb-2 day2">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="tuesdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="tuesdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="2"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 3)
        {
            
            $('.count43').val( function(i, oldval) {
                return ++oldval;
            });
            $('.wednesday').append(`<div class="main2 input-text mb-2 day3">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="wednesdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="wednesdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="3"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 4)
        {
            
            $('.count44').val( function(i, oldval) {
                return ++oldval;
            });
            $('.thursday').append(`<div class="main2 input-text mb-2 day4">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="thursdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="thursdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="4"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 5)
        {
            $('.count45').val( function(i, oldval) {
                return ++oldval;
            });
            $('.friday').append(`<div class="main2 input-text mb-2 day5">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="fridayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="fridayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="5"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 6)
        {
            $('.count46').val( function(i, oldval) {
                return ++oldval;
            });
            $('.saturday').append(`<div class="main2 input-text mb-2 day6">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="saturdayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="saturdayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="6"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        else if($(this).attr('att') == 7)
        {
            $('.count47').val( function(i, oldval) {
                return ++oldval;
            });
            $('.sunday').append(`<div class="main2 input-text mb-2 day7">
            <div class="main3 input-div">
                <input type="time" id="user_name" name="sundayopen[]" class="starttime">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="sundayclose[]" class="endtime">
                <span>Closing</span>
            </div>
            <i att="7"  class="fa fa-close clos_icon2"></i>
            </div>`);
        }
        

    });  

    $(document).on("blur", ".endtime", function() {
        $(this).closest('.input-div').children('.errormsg').remove();
        var end = $(this).val();
        var star = $(this).closest('.main2').children('.main3').children('.starttime').val();
        //convert both time into timestamp
        var stt = new Date("November 13, 2013 " + star);
        stt = stt.getTime();
        var endt = new Date("November 13, 2013 " + end);
        endt = endt.getTime();
        if(stt >= endt) 
        {
            $(this).closest('.input-div').append('<p class="errormsg" style="color:red;">closing time must be greater then opening.</p>');
            // alert('end date is less');
            
        }else{

        }
    });

    $(document).on("click", ".testbtn", function(event) {
        
        if ($(".errormsg")[0]){
            event.preventDefault();
            toastr.error('Please select valid time for opening and closing');
        } else {
            // Do something if class does not exist
        }
    });

    $(document).on("blur", ".starttime", function() {
        if($(this).val()){
            $(this).closest('.main2').children('.input-div').children('.endtime').attr("required", "true");

            $('.repeatt').val("1");
            
        } else{
        }


    
    });


    


    
    
    

    
