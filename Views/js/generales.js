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
	var profesor= $("#profesor").val();
	$.ajax({
		url:"../Asignar/listarSalones",
		type:"POST",
		data: "profesor="+profesor,
		beforeSend: function(){
			console.log("enviando datos a DB")
		},
		success: function(data){
			console.log(data);
		}
	})
}


