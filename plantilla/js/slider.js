$(document).ready(function(){

    slider();
    
    
            function slider(){
                $.ajax({
                type: "POST",
                url: "../administrador/aplicacion/controllers/routes/routes.php",
                data: {
                    peticion: 31
                }
            }).done(function(n) {
                $("#carrusel-dinamico").html(n);
    
                $(".carousel-item").each(function(index){
    
                    if(index == 0){
    
                        $(this).addClass("active");
    
                    }
    
                });
                
            }).fail(function(n, t, i) {
                $("#carrusel-dinamico").html("The following error occured: " + t + " " + i)
    
                
    
    
    
            })
            }
    
    
    
        
    
        
    });