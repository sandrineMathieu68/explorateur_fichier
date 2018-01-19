$(document).ready(function($){//pour charger le document
    arbo();
});

function arbo(path = ""){
   $.ajax({
        url: "traitement.php",
        type: "GET",
        dataType: "json",
        data: {chemin: path},
        success: function(data){
            console.log(data);
            $('section').append("<div class='row' id='contenu'></div>");

            if(path!= ""){
              $('#contenu').append("<div style='cursor: pointer;' data='..' class='folder item col-xs-12 col-sm-12 col-md-3 col-lg-3' ></class><img src='image/tuyau.png' class='tuyau'>"+"<div class='name'>" + "retour" +"</div><div>")
            } 
            //Parcours des entrées 0, 1, 2... du tableau
            $.each(data, function(index, value){
                
                //Possibilité de parcourir name, path, value, size...


                if(value.dir){
                    $('#contenu').append("<div style='cursor: pointer;' data="+ value.path +" class='folder item col-xs-12 col-sm-12 col-md-3 col-lg-3' ><div class= 'container'><div class='row'><div class='col-xs-12 col-sm-12 col-md-2 col-lg-2'><img src='image/block.png'></div>"+"<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6 name'>" + value.name +"</div><div></div></div>")
                }
                if(value.file){
          
                    $('#contenu').append("<div data="+ value.path +" class='file item col-xs-12 col-sm-12 col-md-3 col-lg-3'><div class= 'container'><div class='row'><div class='col-lg-2'><img src='image/champignon.png'></div>" + "<div class ='col-lg-6 namefile'><p>"+ value.name +"</p><p>" + value.size +"</p><a href='" + value.path + 
                    "' download='"+ value.name +"'> Telecharger</a><a  href='" 
                    + value.path + "'> Ouvrir </a></div></div></div></div>")
                }
                
            });
            
            //Envoi de chemin vers traitement.php
            $('.item').click(function(){
            var path = $(this).attr('data');
                 console.log(path);
                 $('section').empty();
            arbo(path);
            }); 
        }

    });
    
}
 