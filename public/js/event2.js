var next_click=document.querySelectorAll(".next_button2");
var main_form=document.querySelectorAll(".main2nd");
var step_list = document.querySelectorAll(".progress-bar-2 li");
var num = document.querySelector(".step-number2");
let formnumbert=0;

// $(document).ready(function(){
//     $( ".step-number-content" ).each(function( content ) {
// $(content).removeClass('active');
// $(content).addClass('d-none');
// });
// $('.step-number-content[formnumber]').addClass('active');
// })

next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click',function(){
        if(!validateform()){
            return false
        }
       formnumbert++;
       updateform();
       progress_forward();
       contentchange();
    });
}); 

var back_click=document.querySelectorAll(".back_button2");
back_click.forEach(function(back_click_form){
    back_click_form.addEventListener('click',function(){
       formnumbert--;
       updateform();
       progress_backward();
       contentchange();
    });
});

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");
 

var submit_click=document.querySelectorAll(".submit_button2");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumbert++;
       updateform(); 
    });
});

var heart=document.querySelector(".fa-heart");
heart.addEventListener('click',function(){
   heart.classList.toggle('heart');
});


var share=document.querySelector(".fa-share-alt");
share.addEventListener('click',function(){
   share.classList.toggle('share');
});

 

function updateform(){
    main_form.forEach(function(mainform_number){
        mainform_number.classList.remove('active2');
    })
    main_form[formnumbert].classList.add('active2');
} 
 
function progress_forward(){
    
    
     
    num.innerHTML = formnumbert+1;
    step_list[formnumbert].classList.add('active2');
}  

function progress_backward(){
    var form_num = formnumbert+1;
    step_list[form_num].classList.remove('active2');
    num.innerHTML = form_num;
} 
 
var step_num_content=document.querySelectorAll(".step-number-content");

 function contentchange(){
     step_num_content.forEach(function(content){
        content.classList.remove('active2'); 
        content.classList.add('d-none');
     }); 
     step_num_content[formnumbert].classList.add('active2');
 } 


 
function validateform(){
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


           
var telInput = $("#phone"),
errorMsg = $("#error-msg"),
validMsg = $("#valid-msg");

// initialise plugin
telInput.intlTelInput({

allowExtensions: true,
formatOnDisplay: true,
autoFormat: true,
autoHideDialCode: true,
autoPlaceholder: true,
defaultCountry: "auto",
ipinfoToken: "yolo",

nationalMode: false,
numberType: "MOBILE",
//onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
preventInvalidNumbers: true,
separateDialCode: true,
initialCountry: "auto",
geoIpLookup: function(callback) {
$.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
  var countryCode = (resp && resp.country) ? resp.country : "";
  callback(countryCode);
});
},
 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});

var reset = function() {
telInput.removeClass("error");
errorMsg.addClass("hide");
validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
reset();
if ($.trim(telInput.val())) {
  if (telInput.intlTelInput("isValidNumber")) {
    validMsg.removeClass("hide");
  } else {
    telInput.addClass("error");
    errorMsg.removeClass("hide");
  }
}
});

    // // on keyup / change flag: reset
    // telInput.on("keyup change", reset);


    //  var telInput = $("#phone"),
    //   errorMsg = $("#error-msg"),
    //   validMsg = $("#valid-msg");

    // // initialise plugin
    // telInput.intlTelInput({
    // utilsScript:"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    // });
    // // telInput.intlTelInput({

    // //     allowExtensions: true,
    // //     formatOnDisplay: true,
    // //     autoFormat: true,
    // //     autoHideDialCode: true,
    // //     autoPlaceholder: true,
    // //     defaultCountry: "auto",
    // //     ipinfoToken: "yolo",
        
    // //     nationalMode: false,
    // //     numberType: "MOBILE",
    // //     //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // //     preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
    // //     preventInvalidNumbers: true,
    // //     separateDialCode: true,
    // //     initialCountry: "auto",
    // //     geoIpLookup: function(callback) {
    // //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    // //       var countryCode = (resp && resp.country) ? resp.country : "";
    // //       callback(countryCode);
    // //     });
    // //     },
    // //      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
    // //     });
        

    // var reset = function() {
    //   telInput.removeClass("error");
    //   errorMsg.addClass("hide");
    //   validMsg.addClass("hide");
    // };

    // // on blur: validate
    // telInput.blur(function() {
    //   reset();
    //   if ($.trim(telInput.val())) {
    //     if (telInput.intlTelInput("isValidNumber")) {
    //       validMsg.removeClass("hide");
    //     } else {
    //       telInput.addClass("error");
    //       errorMsg.removeClass("hide");
    //     }
    //   }
    // });

    // // on keyup / change flag: reset
    // telInput.on("keyup change", reset);
