<div class="page-header">
	<h3>Represntaciones graficas de los datos</h3>
	<p>Se mostraran gr&aacute;ficas de motivos por los que trabaja en diferentes representaciones</p>
</div>

<div id="chart_div" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $data["2007"][1];?>, <?php echo $data["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $data["2007"][2];?>, <?php echo (int) $data["2009"][2];?>],
	  ['Aprender un oficios', <?php echo $data["2007"][3];?>, <?php echo $data["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $data["2007"][5];?>, <?php echo $data["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $data["2007"][5];?>, <?php echo $data["2009"][5];?>],
	  ['Otra razón', <?php echo $data["2007"][6];?>, <?php echo $data["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
	chart.draw(data, options);
  }
</script>


