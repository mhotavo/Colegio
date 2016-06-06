function DeleteItem(contenido, url){
	var action= window.confirm(contenido);
	if (action) {
		window.location=url;
	}
}

function cargarSalones(){
	$('#resultado').empty();
	$('#salones').empty();
	var profesor= $("#profesor").val();
	$.getJSON('../asignar/listarSalones',{profesor:profesor}, function(resp){
		console.log(resp);
		for (var i in resp) {
			$("#salones").append('<option value='+resp[i].salon+'>'+resp[i].nombre+'</option>');
		}
	}).error(function(e){
		$("#resultado").append('<br><div class="alert alert-info">  <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No hay salones disponibles</strong> para el profesor seleccionado. </div>');
	})
}

function cargarProfesores(){
	$.getJSON('../asignar/listarProfesores', function(resp){
		//console.log(resp);
		$.each( resp, function(key,value) {
			$("#profesor").append('<option value='+value.id+'>'+value.nombre+'</option>');
		});
	})
}



