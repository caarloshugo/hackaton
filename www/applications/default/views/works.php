<div class="page-header">
	<h3>Representaciones graficas de los datos</h3>
	<p>Se mostraran gr&aacute;ficas de motivos por los que trabaja y nivel de ingresos en diferentes representaciones</p>
</div>

<div id="chart_div" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $data["2007"][1];?>, <?php echo $data["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $data["2007"][2];?>, <?php echo $data["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $data["2007"][3];?>, <?php echo $data["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $data["2007"][4];?>, <?php echo $data["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $data["2007"][5];?>, <?php echo $data["2009"][5];?>],
	  ['Otra razón', <?php echo $data["2007"][6];?>, <?php echo $data["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (General)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>

<div id="chart_div2" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $data["f"]["2007"][1];?>, <?php echo $data["f"]["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $data["f"]["2007"][2];?>, <?php echo $data["f"]["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $data["f"]["2007"][3];?>, <?php echo $data["f"]["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $data["f"]["2007"][4];?>, <?php echo $data["f"]["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $data["f"]["2007"][5];?>, <?php echo $data["f"]["2009"][5];?>],
	  ['Otra razón', <?php echo $data["f"]["2007"][6];?>, <?php echo $data["f"]["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (Niñas)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>


<div id="chart_div3" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $data["m"]["2007"][1];?>, <?php echo $data["m"]["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $data["m"]["2007"][2];?>, <?php echo $data["m"]["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $data["m"]["2007"][3];?>, <?php echo $data["m"]["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $data["m"]["2007"][4];?>, <?php echo $data["m"]["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $data["m"]["2007"][5];?>, <?php echo $data["m"]["2009"][5];?>],
	  ['Otra razón', <?php echo $data["m"]["2007"][6];?>, <?php echo $data["m"]["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (Niños)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div3'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>

<div id="chart_div5" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $edad5["2007"][1];?>, <?php echo $edad5["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $edad5["2007"][2];?>, <?php echo $edad5["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $edad5["2007"][3];?>, <?php echo $edad5["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $edad5["2007"][4];?>, <?php echo $edad5["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $edad5["2007"][5];?>, <?php echo $edad5["2009"][5];?>],
	  ['Otra razón', <?php echo $edad5["2007"][6];?>, <?php echo $edad5["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (5 años)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div5'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>

<div id="chart_div6" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $edad6_12["2007"][1];?>, <?php echo $edad6_12["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $edad6_12["2007"][2];?>, <?php echo $edad6_12["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $edad6_12["2007"][3];?>, <?php echo $edad6_12["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $edad6_12["2007"][4];?>, <?php echo $edad6_12["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $edad6_12["2007"][5];?>, <?php echo $edad6_12["2009"][5];?>],
	  ['Otra razón', <?php echo $edad6_12["2007"][6];?>, <?php echo $edad6_12["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (6-12 años)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div6'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>

<div id="chart_div7" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $edad13_15["2007"][1];?>, <?php echo $edad13_15["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $edad13_15["2007"][2];?>, <?php echo $edad13_15["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $edad13_15["2007"][3];?>, <?php echo $edad13_15["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $edad13_15["2007"][4];?>, <?php echo $edad13_15["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $edad13_15["2007"][5];?>, <?php echo $edad13_15["2009"][5];?>],
	  ['Otra razón', <?php echo $edad13_15["2007"][6];?>, <?php echo $edad13_15["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (13-15 años)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div7'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>

<div id="chart_div8" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Razón', '2007', '2009'],
	  ['El hogar necesita de su aportación económica', <?php echo $edad16_17["2007"][1];?>, <?php echo $edad16_17["2009"][1];?>],
	  ['El hogar necesita de su trabajo', <?php echo $edad16_17["2007"][2];?>, <?php echo $edad16_17["2009"][2];?>],
	  ['Aprender un oficio', <?php echo $edad16_17["2007"][3];?>, <?php echo $edad16_17["2009"][3];?>],
	  ['Para pagar su escuela y/o sus propios gasto', <?php echo $edad16_17["2007"][4];?>, <?php echo $edad16_17["2009"][4];?>],
	  ['No quiere ir a la escuela', <?php echo $edad16_17["2007"][5];?>, <?php echo $edad16_17["2009"][5];?>],
	  ['Otra razón', <?php echo $edad16_17["2007"][6];?>, <?php echo $edad16_17["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Motivos por los que trabaja (16-17 años)',
	  hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div8'));
	chart.draw(data, options);
  }
</script>

<!-- *********** Siguiente grafica ************ -->
<hr>

<div id="chart_div4" style=" width:750px; height: 500px;"></div>
    
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Nivel', '2007', '2009'],
	  ['Hasta un salario mínimo', <?php echo $incom["2007"][1];?>, <?php echo $incom["2009"][1];?>],
	  ['Más de 1 hasta 2 salarios mínimos', <?php echo $incom["2007"][2];?>, <?php echo $incom["2009"][2];?>],
	  ['Más de 2 hasta 3 salarios mínimos', <?php echo $incom["2007"][3];?>, <?php echo $incom["2009"][3];?>],
	  ['Más de 3 salarios mínimos', <?php echo $incom["2007"][4];?>, <?php echo $incom["2009"][4];?>],
	  ['No recibe ingresos', <?php echo $incom["2007"][5];?>, <?php echo $incom["2009"][5];?>],
	  ['No especificado', <?php echo $incom["2007"][6];?>, <?php echo $incom["2009"][6];?>],
	]);

	var options = {
	  title: 'Gráfica de resultados - Nivel de ingresos',
	  hAxis: {title: 'Nivel de ingresos',  titleTextStyle: {color: 'red'}}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div4'));
	chart.draw(data, options);
  }
</script>
