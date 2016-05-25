function __(id){
	return document.getElementById(id);
}
function DeleteItem(contenido, url){
	var action= window.confirm(contenido);
	if (action) {
		window.location=url;
	}
}

function Salones(){
	$('#salones').empty();
	var profesor= $("#profesor").val();
	$.getJSON('../asignar/listarSalones',{profesor:profesor}, function(resp){
		if (resp!=null) {
			for (var i in resp) {
				if (resp[i].salon!=null) {
					$("#salones").append('<option value='+resp[i].salon+'>'+resp[i].nombre+'</option>');
					console.log(resp);
				}
			}
		}

	})

}


