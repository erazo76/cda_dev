
  

              <li id="desa2" class="dropdown notifications-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-life-saver"></i>
                  <span id = "n_re" class="label label-danger"></span>
                </a>
                <ul class="dropdown-menu">

                  <li  class="header" align="center">Registros recuperados</li>
                    <ul class="menu">
                      <li><a href="#"><i class="fa fa-life-saver text-red" id="reg_re" align="center"></i></a></li>
                    </ul>                                
                </ul>

              </li>

              <li id="desa3" class="dropdown notifications-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-edit"></i>
                  <span id = "n_in" class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">

                  <li  class="header" align="center">Registros incompletos</li>
                    <ul class="menu">
                      <li><a href="#"><i class="fa fa-edit text-orange" id="reg_in" align="center"></i></a></li>
                    </ul>                                
                </ul>
              </li>

<script type="text/javascript">
    
$(document).ready(function() {

    var desho=<?php echo $_SESSION['rolx'];  ?>;
    
    if (desho==2){

      $("#desa3 *").prop('disabled',true);
      $("#desa2").css('display','none');

    }else if(desho==1){

      $("#desa2").css('display','none');
      $("#desa3").css('display','none');
    }

    $.post( "../../controllers/maliados_controller", { action: "get_recuperados"}).done(function( data ) {
       
      $("#n_re" ).html( data );

        //  var n_div = document.getElementById("n_inci");
          var div = document.getElementById("reg_re");
          var dato1 = JSON.stringify( data );
          //dato1=parseInt(dato1,10);
        //  n_div.textContent = c_inci;
//alert(dato1);
        if(dato1 != '"0"'){
          div.textContent = ' Tienes ' + JSON.stringify( data ) + ' registro(s) recuperado(s)!'; 
     
            if ( $("#n_re").hasClass('label-success') ) {
              $("#n_re").removeClass('label-success');
              $("#n_re").addClass('label-danger');
            }

            if ( $("#reg_re").hasClass('text-green') ) {
              $("#reg_re").removeClass('text-green');
              $("#reg_re").addClass('text-red');
            }


              $("#reg_re" ).click(function(){
                  $.post( "../../controllers/maliados_controller", { action: "search_rec"}).done(function( data ) {
                   var parsedJson = $.parseJSON(data); 
                   var value= parsedJson;
                   
                    
                    $(location).attr('href','../aliados/index_rec');
                  });
              });

        }else{

          div.textContent = ' No tienes registros recuperados!'; 

            if ( $("#n_re").hasClass('label-danger') ) {
              $("#n_re").removeClass('label-danger');
              $("#n_re").addClass('label-success');
            }

            if ( $("#reg_re").hasClass('text-red') ) {
              $("#reg_re").removeClass('text-red');
              $("#reg_re").addClass('text-green');
            }
        }
                      
    });

    $.post( "../../controllers/maliados_controller", { action: "get_incompletos"}).done(function( data ) {
       
      $("#n_in" ).html( data );

        //  var n_div = document.getElementById("n_inci");
          var div2 = document.getElementById("reg_in");
        //  n_div.textContent = c_inci;
        if(JSON.stringify( data )!='"0"'){
          div2.textContent = ' Tienes ' + JSON.stringify( data ) + ' registro(s) incompleto(s)!';   
 
            if ( $("#n_in").hasClass('label-success') ) {
              $("#n_in").removeClass('label-success');
              $("#n_in").addClass('label-warning');
            }

            if ( $("#reg_in").hasClass('text-green') ) {
              $("#reg_in").removeClass('text-green');
              $("#reg_in").addClass('text-orange');
            }     

        }else{

            div2.textContent = ' No tienes registros incompletos!'; 

            if ( $("#n_in").hasClass('label-warning') ) {
              $("#n_in").removeClass('label-warning');
              $("#n_in").addClass('label-success');
            }

            if ( $("#reg_in").hasClass('text-orange') ) {
              $("#reg_in").removeClass('text-orange');
              $("#reg_in").addClass('text-green');
            }

        }             
    });    

}); 

</script>              
