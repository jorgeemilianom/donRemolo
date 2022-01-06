$(document).ready(function() {
    let datosDB = 1;
    $.ajax({
        url: 'src/ajax/productos.php',
        type: 'POST',
        data: { datosDB },
        success: function(response){
            localStorage.setItem("productos", response);
            
            
            let data = JSON.parse(localStorage.getItem("productos"));
            console.log(data);
        }
    });
});