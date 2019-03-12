function init() {
  mostrarform(true);
}

var formulario = $('#tipoform').val();
var ajax_file;
var thanks_file;

switch (formulario) {
  case 'cotizador':
    ajax_file = "ajax/cotizador.php";
    thanks_file = 'html/cotizador.html';
    break;
  case 'contacto':
    ajax_file = "ajax/contacto.php";
    thanks_file = 'html/contacto.html';
    break;
}

function limpiar() {
  $('#email').val('');
  $('#nombre').val('');
  $('#asunto').val('');
  $('#telefono').val('');
  $('#mensaje').val('');
  $('#empresa').val('');
  $('#cotizacion').val('');
}

init();

//Función mostrar formulario
function mostrarform(flag)
{
  limpiar();
  if (flag)
  {
    $("#formulario").show();
    $("#respuesta").hide();
    $("#btnEnviar").prop("disabled",false);
  }
  else
  {
    $('#respuesta').load(thanks_file, function(data){
      $(this).html(data);
    });

    $("#respuesta").show();
    $("#formulario").hide();
  }
}

$(function() {
  $('form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($('#formulario')[0]);
    
    $.ajax({
  		url: ajax_file,
  	    type: "POST",
  	    data: formData,
  	    contentType: false,
  	    processData: false,

  	    success: function(datos)
  	    {
          $( "#respuesta" ).load( thanks_file );
          mostrarform(false);
  	    }

  	});

  });
});
