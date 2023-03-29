$(document).ready(function () {



    $.ajax({
        type: "POST",
        url: "../administrador/aplicacion/controllers/routes/routes.php",
        data: {
          peticion: 33
        }
      }).done(function(n) {
        $("#servicios-dinamicos").html(n);
  
      
  
       
  
    $(".service-item").mouseout(function(){
  $(this).css("border","solid 1px gray");
  $(".cinta-producto").css("display","none");
  $(this).children(".cinta-producto").css("display","none");
    });
       
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        
        
      }).fail(function(n, t, i) {
        //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)
  
        
  
  
  
      })
   
  
  

   
  
              
  
             
  
        
  
    
  });