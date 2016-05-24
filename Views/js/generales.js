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
	/*var profesor= $("#profesor").val();
	$.ajax({
		url:"../Asignar/listarSalones",
		type:"POST",
		data: "profesor="+profesor,
		beforeSend: function(){
			console.log("enviando datos a DB");
		},
		success: function(data){
			//$("#salones").append('<option value=10>My option</option>');
			//console.log(data);
			$.each(data, function(index){
				var nombre = data[index].nombre;
			})
 

		}
	}) */

 $.ajax({	type:"GET",
            url: "../Asignar/listarSalones",
            //dataType: "json",
            success: function(data){
            	JSON.parse(data);
                $("#result").html("aa");
                $.each(data, function(index){
                    var ronda = data[index].ronda;
                    var jugadores = data[index].jugadores;
                    $("#resultados").append('<h2>Ronda '+ronda+'</h2>');
                    $.each(jugadores, function(_index){   

                        $("#resultados").append('<p>Jugador ' + jugadores[_index].nombre + ' - Puntos ' + jugadores[_index].puntos + '</p>');
                    })
                })
            }
        }) 
  


}


