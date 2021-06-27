<?php

include("../../lib/validar_session.php");

ValidaSession("../login");
//VerificarAdmin($_SESSION['rolx']);

?>
<?php include("../layouts/constantes.php") ?>
<?php include_once("../layouts/cabezera.php") ?>

<div class="message"></div>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4 style="font-size: 34px" id="restan"><sup style="font-size: 20px">$</sup></h4>
                  <p>PRESUPUESTO NACIONAL</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bank"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Restante <i class="fa fa-check"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4 style="font-size: 34px" id="indi"><sup style="font-size: 20px">$</sup></h4>
                  <p>INDIVIDUALES</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Ejecutados <i class="fa fa-check"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h4 style="font-size: 34px" id="reto"><sup style="font-size: 20px">$</sup></h4>
                  <p>RETORNOS Y REUBICACIONES</p>
                </div>
                <div class="icon">
                  <i class="ion ion-location"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Ejecutados <i class="fa fa-check"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h4 style="font-size: 34px" id="cole"><sup style="font-size: 20px">$</sup></h4>
                  <p>COLECTIVOS</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Ejecutados <i class="fa fa-check"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

<div class="row">

            <div class="col-md-6">
              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">EJECUCIÓN PRESUPUESTAL REGIONAL</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="chartdiv" style="width:100%;max-height:300px;height:100vh;">
                  
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">EJECUCIÓN PRESUPUESTAL DEPARTAMENTAL </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="chartdiv2" style="width:100%;height:500px;">
                  
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div>

            <div class="col-md-6">
              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">ASIGNACIÓN PRESUPUESTAL GENERAL</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <form id="form" role="form" enctype="multipart/form-data" >

                <div class="box-body">                    
                  <div class="form-group">
                    <label>Número de contrato</label>
                    <input type="text" class="form-control" id="num_contrato" placeholder="Indique el número de contrato"  onpaste="return false" tabindex="10" onkeypress="return esnumint(event);" onblur="alsalir(this.id)" autocomplete="off">
                    <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_num_contrato'><p></p></div>
                  </div>

                  <label>Asignación presupuestal</label>
                  <div class="input-group">                            
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" id="cos_contrato" placeholder="Indique la asignación presupuestal"  onpaste="return false" tabindex="20" onkeypress="return esnum(event);" onblur="alsalir(this.id)" autocomplete="off">
                  </div>
                  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_cos_contrato'><p></p></div>
                </div>

                <div class="box-footer">
                    <button id="p_guarda" type="button" class="btn btn-success"><i class="fa fa-fw fa-save"></i>Guardar</button>
                    <button id="p_edita" type="button" class="btn btn-success" style="display:none;"><i class="fa fa-fw fa-edit"></i>Editar</button>
                </div> 
                </form> 
                <div id="chartdiv3" style="width:100%;height:300px;max-height:300px;">
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
</div>


<script type="text/javascript" src="../../plugins/confirma/jquery-confirm.min.js"></script>
<link rel="stylesheet" href="../../plugins/confirma/jquery-confirm.min.css" type="text/css"/>
<script type="text/javascript" src="../../plugins/amcharts4/core.js"></script>
<script type="text/javascript" src="../../plugins/amcharts4/charts.js"></script>
<script type="text/javascript" src="../../plugins/amcharts4/themes/animated.js"></script>

<script type="text/javascript">

$(document).ready(function() {

	$.post( "../../controllers/mcontratos_controller", { action: "search_act"}).done(function( data ) {
		var parsedJson = $.parseJSON(data);
    
		var num_cont = parsedJson.num_contrato;
    var cos_cont = parsedJson.cos_contrato;
    var estato = parsedJson.estado;
    var cos_indi = parsedJson.cos_indi;
    var cos_reub = parsedJson.cos_reub;
    var cos_cole = parsedJson.cos_cole;
    var restan = parsedJson.restan;
        
		$("#num_contrato").val( num_cont );       
		$("#cos_contrato").val( cos_cont );
    $("#restan").html( restan +'<sup style="font-size: 20px">$</sup>' );
    $("#indi").html( cos_indi +'<sup style="font-size: 20px">$</sup>' );
    $("#reto").html( cos_reub +'<sup style="font-size: 20px">$</sup>' );
    $("#cole").html( cos_cole +'<sup style="font-size: 20px">$</sup>');
        if(estato=="si"){
            $("#p_guarda").css("display", "none");
            $("#p_edita").css("display", "block");
        }
	},"json");



});

am4core.ready(function() {




//############################################################################
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart3D);
// Add data
var datum = [];

$.post( "../../data_json/data_dashboard1.php").done(function( data ) {
      var parsedJson = $.parseJSON(data);
      datum=parsedJson;
      datum.pop();
});



setTimeout(function() {	

     // chart.legend = new am4charts.Legend();

      chart.data = datum;
     // chart.legend.maxHeight = 100;
     // chart.legend.scrollable = true;
      //chart.innerRadius = am4core.percent(50);
      var title = chart.titles.create();
      title.text = "Presupuesto ejecutado ($)";
      title.fontSize = 16;
      title.marginBottom = 30;

      // Add and configure Series
      var pieSeries = chart.series.push(new am4charts.PieSeries3D());
      pieSeries.dataFields.value = "valor";
      pieSeries.dataFields.category = "region";
      pieSeries.slices.template.stroke = am4core.color("#fff");
      pieSeries.slices.template.strokeOpacity = 1;
      pieSeries.labels.template.maxWidth = 120;
      pieSeries.labels.template.wrap = true;

      pieSeries.colors.list = [
        am4core.color("#ffff80"),
        am4core.color("#93b980"),
        am4core.color("#81a6b9"),
        am4core.color("#80c3d3"),
        am4core.color("#e2eed0"),
        am4core.color("#ffaa81")
      ];
      // This creates initial animation
    //  pieSeries.labels.template.maxWidth = 90;
    //  pieSeries.labels.template.wrap = true;
      pieSeries.labels.template.text = "[bold font-size: 10px]{category} -> {value.percent.formatNumber('#.0')}%";
      pieSeries.hiddenState.properties.opacity = 1;
      pieSeries.hiddenState.properties.endAngle = -90;
      pieSeries.hiddenState.properties.startAngle = -90;
      pieSeries.slices.template.tooltipText = "{category}: [bold font-size: 12px]{value.value}($)";     

      chart.hiddenState.properties.radius = am4core.percent(0);
}, 500);

//#######################################################################################

var chart2 = am4core.create("chartdiv2", am4charts.XYChart3D);

var datum2 = [];

$.post( "../../data_json/data_dashboard2.php").done(function( data ) {
      var parsedJson2 = $.parseJSON(data);
      datum2=parsedJson2;
     // datum2.pop();
});


setTimeout(function() {	

    chart2.data = datum2;
    chart2.legend = new am4charts.Legend();
// Create axes
    let categoryAxis = chart2.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "departamento";
    categoryAxis.renderer.labels.template.rotation = 270;          
    categoryAxis.renderer.labels.template.hideOversized = false;
    categoryAxis.renderer.labels.template.disabled = false; 
    categoryAxis.renderer.labels.template.truncate = true;  
    categoryAxis.renderer.labels.template.maxWidth = 120;      
    categoryAxis.renderer.minGridDistance = 10;
    categoryAxis.renderer.labels.template.fontSize = 10;    
    categoryAxis.renderer.labels.template.horizontalCenter = "right";
    categoryAxis.renderer.labels.template.verticalCenter = "middle";
    categoryAxis.tooltip.label.rotation = 270;
    categoryAxis.tooltip.label.horizontalCenter = "right";
    categoryAxis.tooltip.label.verticalCenter = "middle";

    let valueAxis = chart2.yAxes.push(new am4charts.ValueAxis());
    valueAxis.title.text = "Presupuesto ejecutado ($)";
    valueAxis.title.fontWeight = "bold";

    // Create series
    var series = chart2.series.push(new am4charts.ColumnSeries3D());
    series.dataFields.valueY = "valor";
    series.dataFields.categoryX = "departamento";
    series.name = "Departamentos";
    series.tooltipText = "{categoryX}: [bold font-size: 12px]{valueY}[/]($)";
    series.columns.template.fillOpacity = .8;    
    var columnTemplate = series.columns.template;
    columnTemplate.strokeWidth = 2;
    columnTemplate.strokeOpacity = 1;
    columnTemplate.stroke = am4core.color("#FFFFFF");

    columnTemplate.adapter.add("fill", function(fill, target) {
    return chart2.colors.getIndex(target.dataItem.index);
    })

    columnTemplate.adapter.add("stroke", function(stroke, target) {
    return chart2.colors.getIndex(target.dataItem.index);
    })

    chart2.cursor = new am4charts.XYCursor();
    chart2.cursor.lineX.strokeOpacity = 0;
    chart2.cursor.lineY.strokeOpacity = 0;
}, 2000);

//############################################################################

// Create chart instance
var chart3 = am4core.create("chartdiv3", am4charts.PieChart3D);
// Add data
var datum3 = [];

$.post( "../../controllers/mcontratos_controller", { action: "search_act"}).done(function( data ) {
      var parsedJson3 = $.parseJSON(data);
      var individual = parsedJson3.cos_indi1;
      var reubicado = parsedJson3.cos_reub1;
      var colectivo = parsedJson3.cos_cole1;
      
     datum3 = [{
                "nombre": "Individual",
                "valor": individual
              }, {
                "nombre": "Retornos y Reubicaciones",
                "valor": reubicado
              }, {
                "nombre": "Colectivos",
                "valor": colectivo
     }];

},"json");

     setTimeout(function() {	


 chart3.data = datum3;

 var title3 = chart3.titles.create();
 title3.text = "Presupuesto  ejecutado por tipo de evento ($)";
 title3.fontSize = 16;
 title3.marginBottom = 30;

 // Add and configure Series
 var pieSeries2 = chart3.series.push(new am4charts.PieSeries3D());
 pieSeries2.dataFields.value = "valor";
 pieSeries2.dataFields.category = "nombre";
 pieSeries2.slices.template.stroke = am4core.color("#fff");
 pieSeries2.slices.template.strokeOpacity = 1;
 pieSeries2.labels.template.maxWidth = 120;
 pieSeries2.labels.template.wrap = true;

 pieSeries2.colors.list = [
   am4core.color("#00a65a"),
   am4core.color("#f39c12"),
   am4core.color("#dd4b39")
 ];
 // This creates initial animation
//  pieSeries.labels.template.maxWidth = 90;
//  pieSeries.labels.template.wrap = true;
 pieSeries2.labels.template.text = "[bold font-size: 10px]{category} -> {value.percent.formatNumber('#.0')}%";
 pieSeries2.hiddenState.properties.opacity = 1;
 pieSeries2.hiddenState.properties.endAngle = -90;
 pieSeries2.hiddenState.properties.startAngle = -90;
 pieSeries2.slices.template.tooltipText = "{category}: [bold font-size: 12px]{value.value}($)";     

 chart3.hiddenState.properties.radius = am4core.percent(0);
}, 1500);




}); // end am4core.ready()

            function alsalir(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 2){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 2 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function esnumint(e) {

                    k = (document.all) ? e.keyCode : e.which;
                    if (k==8 || k==0 || k==13) return true;
                    patron = /[0-9]/;
                    n = String.fromCharCode(k);

                                    if(patron.test(n)==''){

                                        document.getElementById('ms_num_contrato').style.display = 'block';
                                        document.getElementById("ms_num_contrato").innerHTML = 'Use solo números';
                                            return patron.test(n);

                                    }else{

                                        document.getElementById("ms_num_contrato").innerHTML = '';
                                        return patron.test(n);

                                    }

            }

            function esnum(e) {

                    k = (document.all) ? e.keyCode : e.which;
                    if (k==8 || k==0 || k==13) return true;
                    patron = /[0-9\.]/;
                    n = String.fromCharCode(k);

                                    if(patron.test(n)==''){

                                        document.getElementById('ms_cos_contrato').style.display = 'block';
                                        document.getElementById("ms_cos_contrato").innerHTML = 'Use solo números y punto decimal';
                                            return patron.test(n);

                                    }else{

                                        document.getElementById("ms_cos_contrato").innerHTML = '';
                                        return patron.test(n);

                                    }

            }        

            $("#p_guarda" ).click(function() {

                    $.post( "../../controllers/mcontratos_controller", {

                        action: "add",

                        num_contrato: $("#num_contrato").val(),
                        cos_contrato: $("#cos_contrato").val(),


                        }).done(function(data){

                            var parsedJson = $.parseJSON(data);
                            $(".message").html(parsedJson.mensaje);

                            if(parsedJson.resultado != 'error'){

                                setTimeout(function(){

                                        $(location).attr('href','dashboard');

                                }, 1500);

                            }

                        },"json");

            });     
            $("#p_edita" ).click(function() {

                $.post( "../../controllers/mcontratos_controller", {

                    action: "edit",

                    num_contrato: $("#num_contrato").val(),
                    cos_contrato: $("#cos_contrato").val(),


                    }).done(function(data){

                        var parsedJson = $.parseJSON(data);
                        $(".message").html(parsedJson.mensaje);

                        if(parsedJson.resultado != 'error'){

                            setTimeout(function(){

                                    $(location).attr('href','dashboard');

                            }, 1500);

                        }

                    },"json");

            });   
</script>

<?php include_once("../layouts/pie.php") ?>
