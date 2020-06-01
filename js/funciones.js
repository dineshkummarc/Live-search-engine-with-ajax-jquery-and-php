//Funcion para hacer consulta a bbdd con Ajax y buscar datos
function buscarDatos(consulta){
    $.ajax({
        url : 'buscar.php',
        type : 'POST',
        data : {consulta : consulta},
        success : function(response){
            $('#datos').html(response)
        }
    })
}

//Funcion para capturar evento keyup 
$(document).on('keyup', '#buscador', function(){
    
    var consulta = $(this).val()
    console.log(consulta)
    if(consulta != ''){
        buscarDatos(consulta)
    }else{
        buscarDatos()
    }
})