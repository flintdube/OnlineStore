$(function() {

    $(".form-control").on('focus', function(){

        $(this).parents(".form-group").addClass('focused');

    });

    $(".form-control").on('blur', function(){

        $(this).parents(".form-group").removeClass('focused');

    });

}); 

// page navigation
$(document).ready(function () {
  $('#index').click(function() {
     $('#target').load('index.php'); 
  });
  
  $('#login').click(function() {
     $('#target').load('login.php'); 
  });
  
   $('#products').click(function() {
   $('#target').load('products.php'); 
  });

  $('#register').click(function() {
    $('#target').load('register.php'); 
 });

 $('#contact').click(function() {
   $('#target').load('contact.php'); 
 });

 $('#about').click(function() {
   $('#target').load('about.php'); 
  });

});
