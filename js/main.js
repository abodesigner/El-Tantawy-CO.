/*global $, alert, console */
$(document).ready(function() {
  'use strict';

  $('nav li a').click(function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $('#' + $(this).data('scroll')).offset().top
    },1000);

  });

     $('.nav a').on('click', function(){
       $('.navbar-toggle').click()
      });

      /** Validate The Contact form ***/
      /********************************/
      var fNameError = true,
          lNameError = true,
          emailError = true,
          mesgError  = true;

      //FirstName Validation
      $('.firstname').blur(function(){

        if( $(this).val().length < 4 ){

            $(this).css('border','2px solid #f00');

            $(this).parent().find('.custom-alert').fadeIn(200);

            $(this).parent().find('.astrixs').fadeIn(100);

            fNameError = true;
        }

        else {
            $(this).css('border','2px solid #080');

            $(this).parent().find('.form-control').css('color','#080');

            $(this).parent().find('.custom-alert').fadeOut(200);

            $(this).parent().find('.astrixs').fadeOut(100);

            fNameError = false;
        }

      });

      //LastName Validation
      $('.lastname').blur(function(){

        if( $(this).val().length < 4 ){

            $(this).css('border','2px solid #f00');

            $(this).parent().find('.custom-alert').fadeIn(200);

            $(this).parent().find('.astrixs').fadeIn(100);

            lNameError = true;
        }

        else {
            $(this).css('border','2px solid #080');

            $(this).parent().find('.form-control').css('color','#080');

            $(this).parent().find('.custom-alert').fadeOut(200);

            $(this).parent().find('.astrixs').fadeOut(100);

            lNameError = false;
        }
      });

      //Email Validation
      $('.email').blur(function(){
        if( $(this).val() === '' ){

            $(this).css('border','2px solid #f00');

            $(this).parent().find('.custom-alert').fadeIn(200);

            $(this).parent().find('.astrixs').fadeIn(100);

            emailError = true;
        }

        else {
            $(this).css('border','2px solid #080');

            $(this).parent().find('.form-control').css('color','#080');

            $(this).parent().find('.custom-alert').fadeOut(200);

            $(this).parent().find('.astrixs').fadeOut(100);

            emailError = false;
        }
      });

      //Message Validation
      $('.message').blur(function(){
        if( $(this).val().length < 11 ){

            $(this).css('border','2px solid #f00');

            $(this).parent().find('.custom-alert').fadeIn(200);

            $(this).parent().find('.astrixs').fadeIn(100);

            mesgError = true;
        }

        else {

          $(this).css('border','2px solid #080');

          $(this).parent().find('.form-control').css('color','#080');

          $(this).parent().find('.custom-alert').fadeOut(200);

          $(this).parent().find('.astrixs').fadeOut(100);

          mesgError = false;
        }

      });

      //Submit Form Validation
      $('#btnContactUs').click(function(e) {
        if ( fNameError == true || lNameError == true || emailError == true || mesgError == true){
          alert('You should fill the form first');
          e.preventDefault();
        }


      });

});
