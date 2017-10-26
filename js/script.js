$( document ).ready(function() {

  $( ".envoyer" ).hide();

  var currentQuestion = 0;

$.each ($('.col-lg-6'), function (index, value

){

value.classList.add('displaynone');

if (index == 0) {

value.classList.remove('displaynone');

}



});

$('#next').on('click', function (){

currentQuestion++;

  $.each ($('.col-lg-6'), function (index, value

  ){

  value.classList.add('displaynone');

  if (index == currentQuestion) {

  value.classList.remove('displaynone');

  if (index == 9) {

    debugger;

      $( ".envoyer" ).show();
      $( ".suivant" ).hide();
  

  }


  }



  });




});

});
