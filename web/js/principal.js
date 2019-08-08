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

  $('#btnEnviar').click(function(){
    validaForm();
  });

  function validaForm(){
    // Campos de texto
    if($('#Nombre').val() == ''){
      $('.fa-user-tie.nombre').addClass('text-danger');
      $('#Nombre').focus().addClass('form-control border border-danger'); /* Focus */
      $('#MensajeNombre').show().html('El campo Nombre no puede estar vacío.');
        return false;
    }

     if($('#Apellido').val() == ''){
      $('.fa-user-tie.apellido').addClass('text-danger');
      $('#Apellido').focus().addClass('border border-danger'); /* Focus */
      $('#MensajeApellido').show().html('El campo Apellido no puede estar vacío.');
        return false;
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


