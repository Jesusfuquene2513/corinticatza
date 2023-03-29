$(document).ready(function(){
  $.ajax({
    type: "POST",
    url: "Blog/consultar_albumnes",
    data: {
     
    }
  }).done(function(n) {
    $("#albumnes").html(n);

   

    $(".album").click(function(){
      var id_album = $(this).attr("id");
      $(".album").css("background","#404A3D");
      $(this).css("background","#ec6414");
  
      listar_fotos(id_album);
    });

    $(".album").mouseover(function(){
    $(this).css("color","white");
    });

  

    $(".album").each(function(index){

      if(index == 0){

        $(this).click();
      }
    });

   


    
    
  }).fail(function(n, t, i) {
    //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)

    



  })


  

    function listar_fotos(id_album){
      $.ajax({
        type: "POST",
        url: "Blog/consultar_galeria",
        data: {
          album: id_album
        }
      }).done(function(n) {
        $("#galeria-dinamica").html(n);
  
  
           
          
  
  
  
        
      
  
      
  
       
  
   
        
        
      }).fail(function(n, t, i) {
        //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)
  
        
  
  
  
      })
    };
    
    
        
    
    });