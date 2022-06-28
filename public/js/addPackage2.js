$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next2").click(function(){
        if(!validateform()){
            return false
        }
        current_fs = $(this).parent();
        // alert($(this).parent().children('.fs-title').text)
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar2 li").eq($("fieldset").index(next_fs)).addClass("active3");
        current_fs.removeClass("active3");
        next_fs.addClass("active3");
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous2").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar2 li").eq($("fieldset").index(current_fs)).removeClass("active3");
        current_fs.removeClass("active3");
        previous_fs.addClass("active3");
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    // $('.radio-group .radio').click(function(){
    //     $(this).parent().find('.radio').removeClass('selected');
    //     $(this).addClass('selected');
    // });
    
    $(".submit").click(function(){
        return false;
    })

    function validateform(){
        validate=true;
        var validate_inputs=document.querySelectorAll("fieldset.active3 input");
        validate_inputs.forEach(function(vaildate_input){
            vaildate_input.classList.remove('warning');
            if(vaildate_input.hasAttribute('require')){
                if(vaildate_input.value.length==0){
                    validate=false;
                    vaildate_input.classList.add('warning');
                }
            }
        });
        return validate;
        
    }
        
    });