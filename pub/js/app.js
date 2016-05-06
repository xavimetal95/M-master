$(document).ready(function(){

    $("#modificar_user").hide();
    $("#crear_user").hide();
    $("#eliminar_user").hide();
    $('#tabla_admin').html("");
    $("#logeado").hide();
    $("#modificar_anuncio").hide();
    $("#crear_anuncio").hide();
    $("#eliminar_anuncio").hide();

    function lista_users(){
    	$.ajax({
				method:"post",
				dataType:"json",
				url:"dashboard/lista_users",
				success:function(respuesta)
				{
					var data=JSON.string(respuesta);
					data=JSON.parse(data);
					$('#tabla_admin').append("<table border='1'>");
					$('table').append("<tr><th></th><th>Email</th><th>Nombre</th><th>Password</th><th>Rol</th></tr>");

					for(i=0;i<data.length;i++)
					{
						$("table").append("<tr><td>"+data[i].email+"</td><td>"+data[i].nombre+"</td><td>"+data[i].pass+"</td><td>"+data[i].rol+"</td></tr>");
					}
					$('#tabla_admin').append("</table>");
				}
			});
}

	$('#boton_modificar').click(function(){

		$("#modificar_user").show();
		$('#boton_modificar').hide();
		$('#boton_eliminar').hide();
		$('#boton_crear').hide();
	});

	$('#submit_modificar').click(function(){

		$('#boton_modificar').show();
		$('#boton_eliminar').show();
		$('#boton_crear').show();
	});
   
   $('#boton_eliminar').click(function(){

		$("#eliminar_user").show();
		$('#boton_modificar').hide();
		$('#boton_eliminar').hide();
		$('#boton_crear').hide();
	});

	$('#submit_eliminar').click(function(){

		$('#boton_modificar').show();
		$('#boton_eliminar').show();
		$('#boton_crear').show();
	});

	$('#boton_crear').click(function(){

		$("#crear_user").show();
		$('#boton_modificar').hide();
		$('#boton_eliminar').hide();
		$('#boton_crear').hide();
	});

	$('#submit_crear').click(function(){

		$('#boton_modificar').show();
		$('#boton_eliminar').show();
		$('#boton_crear').show();
	});

	$('#boton_crear_anuncio').click(function(){

		$("#crear_anuncio").show();
		$('#boton_modificar_anuncio').hide();
		$('#boton_eliminar_anuncio').hide();
		$('#boton_crear_anuncio').hide();
	});

	$('#submit_crear_anuncio').click(function(){

		$('#boton_modificar_anuncio').show();
		$('#boton_eliminar_anuncio').show();
		$('#boton_crear_anuncio').show();
	});

	$('#boton_modificar_anuncio').click(function(){

		$("#modificar_anuncio").show();
		$('#boton_modificar_anuncio').hide();
		$('#boton_eliminar_anuncio').hide();
		$('#boton_crear_anuncio').hide();
	});

	$('#submit_modificar_anuncio').click(function(){

		$('#boton_modificar_anuncio').show();
		$('#boton_eliminar_anuncio').show();
		$('#boton_crear_anuncio').show();
	});

	$('#boton_eliminar_anuncio').click(function(){

		$("#eliminar_anuncio").show();
		$('#boton_modificar_anuncio').hide();
		$('#boton_eliminar_anuncio').hide();
		$('#boton_crear_anuncio').hide();
	});

	$('#submit_eliminar_anuncio').click(function(){

		$('#boton_modificar_anuncio').show();
		$('#boton_eliminar_anuncio').show();
		$('#boton_crear_anuncio').show();
	});

	$.ajax({
				type:"GET",
				url:"dashboard/lista_users",
				dataType:"json",
				success:function(data)
				{
						$('#anuncios_todos').append("<table border='1'>");
						$('table').append("<tr><th></th><th>Titulo</th><th>Descripcion</th><th>Imagen</th><th>Longitud</th><th>Latitud</th></tr>");

						for(i=0;i<data.length;i++)
						{
							$("table").append("<tr><td>"+data[i].titulo+"</td><td>"+data[i].descripcion+"</td><td>"+data[i].imagen+"</td><td>"+data[i].longitud+"</td><td>"+data[i].latitud+"</td></tr>");
						}
						$('#anuncios_todos').append("</table>");
					}
				});

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var map2=new google.maps.Map(document.getElementById("googleMap2"),mapProp);
  var map3=new google.maps.Map(document.getElementById("googleMap3"),mapProp);
  var map4=new google.maps.Map(document.getElementById("googleMap4"),mapProp);
  var map5=new google.maps.Map(document.getElementById("googleMap5"),mapProp);
  var map6=new google.maps.Map(document.getElementById("googleMap6"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);

$("#boton_login").click(function(){

	$("#cuadro_login").hide();
	$("#logeado").show();

});

$("#boton_login").click(function(){

	$("#cuadro_login").hide();
	$("#logeado").show();

});

$("#img_user").click(function(){

	window.location.replace("http://localhost/M-master/user");

});

$("#img_logout").click(function(){

	$("#logeado").hide();
	$("#cuadro_login").show();

});

});

