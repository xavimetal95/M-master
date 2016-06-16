$(document).ready(function(){

    $("#modificar_user").hide();
    $("#crear_user").hide();
    $("#eliminar_user").hide();
    $("#modificar_anuncio").hide();
    $("#crear_anuncio").hide();
    $("#eliminar_anuncio").hide();
    //lista_users();
    
    function lista_users()
    {
    	$.ajax({
    			url:"/M-master/dashboard/lista_users",
				type:"POST",
				dataType:"json",
				
				success:function(respuesta)
				{
					var data = JSON.parse(respuesta);
					$('#tabla_admin').html("<table border='1'><tr><th>Email</th><th>Nombre</th><th>Password</th><th>Rol</th></tr>");
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

function cargads()
{
	$.ajax({
	  url:'/M-master/dashboard/lista_anuncios',
	  type:'POST',
	  datatype:'json',
	  success:function(respuesta)
	  {
		    if(respuesta.length>0)
		    {
				$("#anuncios").empty();
				var data = JSON.parse(respuesta);
				for(i=0;i<data.length;i++)
				{ 
					$("#anuncios").append("<div id='anuncio"+i+"'><h3>"+data[i].titulo+"</h3><img alt='IMAGEN ANUNCIO' src='"+data[i].imagen+"'></img><p>"+data[i].descripcion+"</p><div id='map"+i+"'></div></div>");
					url = GMaps.staticMapURL
					({
						size: [120, 150],
						latitud: data[i].latitud,
						longitud: data[i].longitud
					});

					$('<img/>').attr('src', url)
					  .appendTo('#map'+i);
				}
		 	}
	  }
	  })
};

$("#img_logout").click(function(){

	window.location.replace("http://localhost/M-master");

});

});

