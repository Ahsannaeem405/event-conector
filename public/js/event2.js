var next_click=document.querySelectorAll(".next_button2");
var main_form2=document.querySelectorAll(".main2nd");
var step_list = document.querySelectorAll(".progress-bar-2 li");
var num = document.querySelector(".step-number2");
let formnumbert2=0;

// $(document).ready(function(){
//     $( ".step-number-content" ).each(function( content ) {
// $(content).removeClass('active');
// $(content).addClass('d-none');
// });
// $('.step-number-content[formnumber]').addClass('active');
// })

// next_click.forEach(function(next_click_form){
// console.log(next_click);
    // next_click_form.addEventListener('click',function(){
        $(document).on("click",".next_button2",function() {
        // alert(3);
        if(!validateform2()){
            return false
            
        }

       formnumbert2++;
       updateform2();
       progress_forward2();
    //    contentchange2();
    });
// });

// var back_click=document.querySelectorAll(".back_button2");
// back_click.forEach(function(back_click_form){
    $(document).on("click",".back_button2",function() {
       formnumbert2--;
       updateform2();
       progress_backward2();
    //    contentchange2();
    });
// });

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");


var submit_click=document.querySelectorAll(".submit_button2");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumbert2++;
       updateform2();
    });
});

// var heart=document.querySelector(".fa-heart");
// heart.addEventListener('click',function(){
//    heart.classList.toggle('heart');
// });


// var share=document.querySelector(".fa-share-alt");
// share.addEventListener('click',function(){
//    share.classList.toggle('share');
// });



function updateform2(){
    $('.main2nd').removeClass('active2');
var cl=$('.main2nd');

$(cl[formnumbert2]).addClass('active2');

   // main_form2[formnumbert2].classList.add('active2');
}

function progress_forward2(){


$('.step-number2').text(formnumbert2+1);
    var clsss = $('.progresss');
    $(clsss[formnumbert2]).addClass('active2');
}

function progress_backward2(){
    var clss5s = $('.progresss');
    $(clss5s[formnumbert2+1]).removeClass('active2');
    $('.step-number2').text(formnumbert2+1);
}

// var step_num_content=document.querySelectorAll(".step-number-content");

//  function contentchange2(){
//      step_num_content.forEach(function(content){
//         content.classList.remove('active2');
//         content.classList.add('d-none');
//      });
//      step_num_content[formnumbert2].classList.add('active2');
//  }



function validateform2(){
    
    validate=true;
    var validate_inputs=document.querySelectorAll(".main2nd.active2 input");
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





