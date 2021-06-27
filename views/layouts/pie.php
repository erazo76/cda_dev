     </section>
      </div>
     <?php
	//----------------------------------------------------------------
          include_once("pie_sistema.php");
          //include_once("barra_lateral_derecha.php");
	//----------------------------------------------------------------
    //--<!-- Add the sidebar's background. This div must be placed
    //--     immediately after the control sidebar -->
	//----------------------------------------------------------------
	//-- ESTE DIV PERMITE DIBUJAR COMPLETA LA BARRA LATERAL DERECHA --
	//----------------------------------------------------------------
          include_once("menu_lateral_derecho_col.php");
	//----------------------------------------------------------------
     ?>
    </div>
	<?php
	//----------------------------------------------------------------
	//-- SE IMPRIMEN LOS JS PARA ARMAR TODA LA PAGINA               --
	//-- ESTAN DEFINIDOS EN EL ARCHIVO CONSTANTES.PHP               --
	//----------------------------------------------------------------
 	 /*    echo $constante["js_jq"];
		 echo $constante["js_boo"];
	     echo $constante["js_lte"];
	     echo $constante["js_datatable"];
		 echo $constante["js_boo_datatable"];*/
	//----------------------------------------------------------------
    ?>
  </body>
</html>
