$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var form_id=$('#current_form').val();
    // $(".next").click(function(){
        $(document).on("click",".next",function() {
        // alert('ggg');
        // $(this).closest("#msform").css({
           
        //         'background': 'saddlebrown'
        // });
        if(!validateform()){
            return false
        }
        current_fs = $(this).parent();
        // alert($(this).parent().children('.fs-title').text)
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $('.'+form_id+" .progressbar li.active").next().addClass("active");
        current_fs.removeClass("active");
        next_fs.addClass("active");
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
    
    // $(".previous").click(function(){
        $(document).on("click",".previous",function() {
        

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        
        $(".progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        current_fs.removeClass("active");
        previous_fs.addClass("active");
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
    
    // $(".submit").click(function(){
    $(document).on("click",".submit",function() {
        return false;
    })

    function validateform(){
        var form_id=$('#current_form').val();
        alert(form_id);

        validate=true;
        var validate_inputs=document.querySelectorAll('.'+form_id+" fieldset.active input");
        // var validate_inputs=$('.'+form_id).find('fieldset.active input');
        // alert(validate_inputs);
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