$('.carousel').carousel({
    interval: 6000
  });

$(document).ready(function() {
  $('.menu-icon').on('click', function() {
    $('nav ul').toggleClass('showing');
  });


  // Formulario de Contacto
  $('#MensajeNombre').hide();
  $('#MensajeApellido').hide();

  var dataForm = $('#FormularioContacto').serialize();

  $('#btnEnviar').click(function(e){
    e.preventDefault();
    
    validaForm();

    
  });

  function validaForm(){
    // Campos de texto
    if($('#Nombre').val() == '' || $('#Apellido').val() == '' 
    || $('#EMail').val() == '' || $('#Telefono').val() == '' 
    || $('#Mensaje').val() == ''){
       $('#Alerta').removeClass('alert-secondary alert-succcess')
                   .addClass('alert-danger alert-mensaje')
                   .html('<b>ERROR</b>: hay campos vacíos, por favor verifique');
        return false;
    }

    else {
      var Nombre = $("#Nombre").val();
    var Apellido = $("#Apellido").val();
    var Mensaje = $("#Mensaje").val();
    var EMail = $("#EMail").val();
    var Asunto = $("#Asunto").val();
    var Telefono = $("#Telefono").val();
    var Direccion = $("#Direccion").val();
    var datos_form = {'Nombre':Nombre,
                      'Apellido':Apellido,
                      'EMail':EMail,
                      'Telefono':Telefono,
                      'Direccion':Direccion,
                      'Asunto':Asunto,
                      'Mensaje':Mensaje};

     $.ajax({
      url: 'enviaremail/send',
      type:'POST',
      data: datos_form,
      success: function(data)
      {
        if(data){
          console.log(data);
          $('#Alerta').removeClass('alert-secondary alert-danger')
                      .addClass('alert-success alert-mensaje')
                      .html('Su mensaje ha sido enviado');
      }
      else{
        console.log("error");
      }
      }               
  });
    }
    return true; // Si todo está correcto
  }
  

});

// Scrolling Efectos
$(window).on('scroll', function() {
  $('nav').toggleClass('scrolled', 
  $(this).scrollTop() > 200);
});

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});

// Formulario Contacto


