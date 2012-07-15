<div class="page-header">
	<h3>&iquest;Com&oacute; funciona?</h3>
	<p>Seleccione uno de los valores de cada lista para mostrar la informaci&oacute;n y graficas correspondientes al año en ese estado y edad o si lo desea a nivel nacional y por todas las edades</p>
</div>

<form class="form-horizontal" action="" method="post">
	<fieldset>
		<p>
			<div class="control-group">
			<label class="control-label" for="select01">A&ntilde;o: </label>
				<div class="controls">
					<select id="year" name="year">
						<option value="1" <?php echo (POST("year")==1) ? 'selected="selected"': '';?>>2007</option>
						<option value="2" <?php echo (POST("year")==2) ? 'selected="selected"': '';?>>2009</option>>
					</select>
				</div>
			</div>
		</p>
		
		<p>
			<div class="control-group">
			<label class="control-label" for="select01">Estado: </label>
				<div class="controls">
					<select id="ent" name="ent">
						<option value="0" <?php echo (POST("ent")==0) ? 'selected="selected"': '';?>>Nacional</option>
						<option value="1" <?php echo (POST("ent")==1) ? 'selected="selected"': '';?>>Aguascalientes</option>
						<option value="2" <?php echo (POST("ent")==2) ? 'selected="selected"': '';?>>Baja California</option>
						<option value="3" <?php echo (POST("ent")==3) ? 'selected="selected"': '';?>>Baja California Sur</option>
						<option value="4" <?php echo (POST("ent")==4) ? 'selected="selected"': '';?>>Campeche</option>
						<option value="5" <?php echo (POST("ent")==5) ? 'selected="selected"': '';?>>Coahuila</option>
						<option value="6" <?php echo (POST("ent")==6) ? 'selected="selected"': '';?>>Colima</option>
						<option value="7" <?php echo (POST("ent")==7) ? 'selected="selected"': '';?>>Chiapas</option>
						<option value="8" <?php echo (POST("ent")==8) ? 'selected="selected"': '';?>>Chihuahua</option>
						<option value="9" <?php echo (POST("ent")==9) ? 'selected="selected"': '';?>>Distrito Federal</option>
						<option value="10" <?php echo (POST("ent")==10) ? 'selected="selected"': '';?>>Durango</option>
						<option value="11" <?php echo (POST("ent")==11) ? 'selected="selected"': '';?>>Guanajuato</option>
						<option value="12" <?php echo (POST("ent")==12) ? 'selected="selected"': '';?>>Guerrero</option>
						<option value="13" <?php echo (POST("ent")==13) ? 'selected="selected"': '';?>>Hidalgo</option>
						<option value="14" <?php echo (POST("ent")==14) ? 'selected="selected"': '';?>>Jalisco</option>
						<option value="15" <?php echo (POST("ent")==15) ? 'selected="selected"': '';?>>Edo. De M&eacute;xico</option>
						<option value="16" <?php echo (POST("ent")==16) ? 'selected="selected"': '';?>>Michoac&aacute;n</option>
						<option value="17" <?php echo (POST("ent")==17) ? 'selected="selected"': '';?>>Morelos</option>
						<option value="18" <?php echo (POST("ent")==18) ? 'selected="selected"': '';?>>Nayarit</option>
						<option value="19" <?php echo (POST("ent")==19) ? 'selected="selected"': '';?>>Nuevo Le&oacute;n</option>
						<option value="20" <?php echo (POST("ent")==20) ? 'selected="selected"': '';?>>Oaxaca</option>
						<option value="21" <?php echo (POST("ent")==21) ? 'selected="selected"': '';?>>Puebla</option>
						<option value="22" <?php echo (POST("ent")==22) ? 'selected="selected"': '';?>>Quer&eacute;taro</option>
						<option value="23" <?php echo (POST("ent")==23) ? 'selected="selected"': '';?>>Quintana Roo</option>
						<option value="24" <?php echo (POST("ent")==24) ? 'selected="selected"': '';?>>San Luis Potos&iacute</option>
						<option value="25" <?php echo (POST("ent")==25) ? 'selected="selected"': '';?>>Sinaloa</option>
						<option value="26" <?php echo (POST("ent")==26) ? 'selected="selected"': '';?>>Sonora</option>
						<option value="27" <?php echo (POST("ent")==27) ? 'selected="selected"': '';?>>Tabasco</option>
						<option value="28" <?php echo (POST("ent")==28) ? 'selected="selected"': '';?>>Tamaulipas</option>
						<option value="29" <?php echo (POST("ent")==29) ? 'selected="selected"': '';?>>Tlaxcala</option>
						<option value="30" <?php echo (POST("ent")==20) ? 'selected="selected"': '';?>>Veracruz</option>
						<option value="31" <?php echo (POST("ent")==31) ? 'selected="selected"': '';?>>Yucat&aacute;n</option>
						<option value="32" <?php echo (POST("ent")==32) ? 'selected="selected"': '';?>>Zacatecas</option>
					</select>
				</div>
			</div>
		</p>
		
		<p>
			<div class="control-group">
			<label class="control-label" for="select01">Edad: </label>
				<div class="controls">
					<select id="eda" name="eda">
						<option value="0" <?php echo (POST("eda")==0) ? 'selected="selected"': '';?>>Todas las edades</option>
						<option value="5" <?php echo (POST("eda")==5) ? 'selected="selected"': '';?>>5</option>
						<option value="6" <?php echo (POST("eda")==6) ? 'selected="selected"': '';?>>6</option>
						<option value="7" <?php echo (POST("eda")==7) ? 'selected="selected"': '';?>>7</option>
						<option value="8" <?php echo (POST("eda")==8) ? 'selected="selected"': '';?>>8</option>
						<option value="9" <?php echo (POST("eda")==9) ? 'selected="selected"': '';?>>9</option>
						<option value="10" <?php echo (POST("eda")==10) ? 'selected="selected"': '';?>>10</option>
						<option value="11" <?php echo (POST("eda")==11) ? 'selected="selected"': '';?>>11</option>
						<option value="12" <?php echo (POST("eda")==12) ? 'selected="selected"': '';?>>12</option>
						<option value="13" <?php echo (POST("eda")==13) ? 'selected="selected"': '';?>>13</option>
						<option value="14" <?php echo (POST("eda")==14) ? 'selected="selected"': '';?>>14</option>
						<option value="15" <?php echo (POST("eda")==15) ? 'selected="selected"': '';?>>15</option>
						<option value="16" <?php echo (POST("eda")==16) ? 'selected="selected"': '';?>>16</option>
						<option value="17" <?php echo (POST("eda")==17) ? 'selected="selected"': '';?>>17</option>
					</select>
					<button class="btn btn-primary" type="submit" name="submit" value="submit">Consultar</button>
				</div>
			</div>
		</p>
	</fieldset>
</form> 


<hr>

<?php if(isset($data)) { ?>
	<h4>Totales de asistencia escolar</h4>
	
	<table class="table table-striped">	
		<thead>
			<tr>
				<th>Genero/Total</th>
				<th>Asisten</th>
				<th>No asisten</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Ni&ntilde;as</td>
				<td><?php echo $data["agenero"]["f"];?></td>
				<td><?php echo $data["nagenero"]["f"];?></td>
				<td><?php echo $data["agenero"]["f"] + $data["nagenero"]["f"];?></td>
			</tr>
			
			<tr>
				<td>Ni&ntilde;os</td>
				<td><?php echo $data["agenero"]["m"];?></td>
				<td><?php echo $data["nagenero"]["m"];?></td>
				<td><?php echo $data["agenero"]["m"] + $data["nagenero"]["m"];?></td>
			</tr>
			
			<tr>
				<td>Totales</td>
				<td><?php echo $data["asis"];?></td>
				<td><?php echo $data["nasis"];?></td>
				<td><?php echo $data["asis"] + $data["nasis"];?></td>
			</tr>
		</tbody>
	</table>
	
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Genero', 'Cantidad'],
          ['Niños que NO asisten a la escuela', <?php echo $data["work"]["m"]["y"];?>],
          ['Niños que SI asisten a la escuela', <?php echo $data["noWork"]["m"]["y"];?>],
          ['Niñas que NO asisten a la escuela', <?php echo $data["work"]["f"]["y"];?>],
          ['Niñas que SI asisten a la escuela', <?php echo $data["noWork"]["f"]["y"];?>]
        ]);

        var options = {
          title: 'Condición de ocupación (trabajo)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
    </script>
	
	<div id="chart_div3" style=" width:750px; height: 500px;"></div>
	
	<h4>Condici&oacute;n de ocupaci&oacute;n (trabajo) que NO asisten a la escuela</h4>
	<table class="table table-striped">	
		<thead>
			<tr>
				<th>Ocupaci&oacute;n</th>
				<th>Ni&ntilde;as</th>
				<th>Ni&ntilde;os</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Si trabajan</td>
				<td><?php echo $data["work"]["f"]["y"];?></td>
				<td><?php echo $data["work"]["m"]["y"];?></td>
				<td><?php echo $data["work"]["f"]["y"] + $data["work"]["m"]["y"];?></td>
			</tr>
			
			<tr>
				<td>No trabajan</td>
				<td><?php echo $data["work"]["f"]["n"];?></td>
				<td><?php echo $data["work"]["m"]["n"];?></td>
				<td><?php echo $data["work"]["m"]["n"] + $data["work"]["f"]["n"];?></td>
			</tr>
		</tbody>
	</table><br /><br />
	
	<h4>Condici&oacute;n de ocupaci&oacute;n (trabajo) que SI asisten a la escuela</h4>
	<table class="table table-striped">	
		<thead>
			<tr>
				<th>Ocupaci&oacute;n</th>
				<th>Ni&ntilde;as</th>
				<th>Ni&ntilde;os</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Si trabajan</td>
				<td><?php echo $data["noWork"]["f"]["y"];?></td>
				<td><?php echo $data["noWork"]["m"]["y"];?></td>
				<td><?php echo $data["noWork"]["f"]["y"] + $data["noWork"]["m"]["y"];?></td>
			</tr>
			
			<tr>
				<td>No trabajan</td>
				<td><?php echo $data["noWork"]["f"]["n"];?></td>
				<td><?php echo $data["noWork"]["m"]["n"];?></td>
				<td><?php echo $data["noWork"]["m"]["n"] + $data["noWork"]["f"]["n"];?></td>
			</tr>
		</tbody>
	</table><br />
	
	<div id="chart_div" style=" width:750px; height: 500px;"></div>
    
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Razón', 'Niñas', 'Niños', 'Total'],
          ['Inseguridad, discriminación y/o distancia', <?php echo (int) $data["reasons"]["f"][2];?>, <?php echo (int) $data["reasons"]["m"][2];?>, <?php echo (int) $data["reasons"]["totales"][2];?>],
          ['Falta de interés o aptitud', <?php echo (int) $data["reasons"]["f"][3];?>, <?php echo (int) $data["reasons"]["m"][3];?>, <?php echo (int) $data["reasons"]["totales"][3];?>],
          ['Falta de recursos económicos', <?php echo (int) $data["reasons"]["f"][4];?>, <?php echo (int) $data["reasons"]["m"][4];?>, <?php echo(int)  $data["reasons"]["totales"][4];?>],
          ['Motivos familiares', <?php echo (int) $data["reasons"]["f"][5];?>, <?php echo (int) $data["reasons"]["m"][5];?>, <?php echo (int) $data["reasons"]["totales"][5];?>],
          ['Enfermedad, accidente o discapacidad', <?php echo (int) $data["reasons"]["f"][6];?>, <?php echo (int) $data["reasons"]["m"][6];?>, <?php echo (int) $data["reasons"]["totales"][6];?>],
          ['Otra razón', <?php echo (int) $data["reasons"]["f"][7];?>, <?php echo (int) $data["reasons"]["m"][7];?>, <?php echo (int) $data["reasons"]["totales"][7];?>]
        ]);

        var options = {
          title: 'Gráfica de resultados - Razón de inasistencia escolar',
          hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

	<br /><br /><h4>Raz&oacute;n de inasistencia escolar:</h4>
	
	<table class="table table-striped">	
		<thead>
			<tr>
				<th>Raz&oacute;n</th>
				<th>Ni&ntilde;as</th>
				<th>Ni&ntilde;os</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Inseguridad, discriminaci&oacute;n y/o distancia de la escuela</td>
				<td><?php echo $data["reasons"]["f"][2];?></td>
				<td><?php echo $data["reasons"]["m"][2];?></td>
				<td><?php echo $data["reasons"]["totales"][2];?></td>
			</tr>
			
			<tr>
				<td>Falta de inter&eacute;s o aptitud para la escuela</td>
				<td><?php echo $data["reasons"]["f"][3];?></td>
				<td><?php echo $data["reasons"]["m"][3];?></td>
				<td><?php echo $data["reasons"]["totales"][3];?></td>
			</tr>
			
			<tr>
				<td>Falta de recursos econ&oacute;micos</td>
				<td><?php echo $data["reasons"]["f"][4];?></td>
				<td><?php echo $data["reasons"]["m"][4];?></td>
				<td><?php echo $data["reasons"]["totales"][4];?></td>
			</tr>
			
			<tr>
				<td>Motivos familiares</td>
				<td><?php echo $data["reasons"]["f"][5];?></td>
				<td><?php echo $data["reasons"]["m"][5];?></td>
				<td><?php echo $data["reasons"]["totales"][5];?></td>
			</tr>
			
			<tr>
				<td>Enfermedad, accidente o discapacidad</td>
				<td><?php echo $data["reasons"]["f"][6];?></td>
				<td><?php echo $data["reasons"]["m"][6];?></td>
				<td><?php echo $data["reasons"]["totales"][6];?></td>
			</tr>
			
			<tr>
				<td>Otra raz&oacute;n</td>
				<td><?php echo $data["reasons"]["f"][7];?></td>
				<td><?php echo $data["reasons"]["m"][7];?></td>
				<td><?php echo $data["reasons"]["totales"][7];?></td>
			</tr>
		</tbody>
	</table>
	
	<?php if(POST("ent") == 0) { ?>
	<br /><br /><h4>Tabla de asitencia por estado</h4>
	
	 <script type="text/javascript">
		google.load('visualization', '1', {'packages': ['geochart']});
		google.setOnLoadCallback(drawMarkersMap);

		  function drawMarkersMap() {
		  var data = google.visualization.arrayToDataTable([
			['City',   'Asisten', 'No asisten'],
			['Aguascalientes', <?php echo $data["ent"][0]["asis"];?>,    <?php echo $data["ent"][0]["nasis"];?>],
			['Baja California', <?php echo $data["ent"][1]["asis"];?>,    <?php echo $data["ent"][1]["nasis"];?>],
			['Baja California Sur', <?php echo $data["ent"][2]["asis"];?>,    <?php echo $data["ent"][2]["nasis"];?>7],
			['Campeche', <?php echo $data["ent"][3]["asis"];?>,    <?php echo $data["ent"][3]["nasis"];?>],
			['Coahuila', <?php echo $data["ent"][4]["asis"];?>,    <?php echo $data["ent"][4]["nasis"];?>],
			['Colima', <?php echo $data["ent"][5]["asis"];?>,    <?php echo $data["ent"][5]["nasis"];?>],
			['Chiapas', <?php echo $data["ent"][6]["asis"];?>,    <?php echo $data["ent"][6]["nasis"];?>],
			['Chihuahua', <?php echo $data["ent"][7]["asis"];?>,    <?php echo $data["ent"][7]["nasis"];?>7],
			['Distrito Federal', <?php echo $data["ent"][8]["asis"];?>,    <?php echo $data["ent"][8]["nasis"];?>],
			['Durango', <?php echo $data["ent"][9]["asis"];?>,    <?php echo $data["ent"][9]["nasis"];?>],
			['Guanajuato', <?php echo $data["ent"][10]["asis"];?>,    <?php echo $data["ent"][10]["nasis"];?>],
			['Guerrero', <?php echo $data["ent"][11]["asis"];?>,    <?php echo $data["ent"][11]["nasis"];?>],
			['Hidalgo', <?php echo $data["ent"][12]["asis"];?>,    <?php echo $data["ent"][12]["nasis"];?>],
			['Jalisco', <?php echo $data["ent"][13]["asis"];?>,    <?php echo $data["ent"][13]["nasis"];?>],
			['Edo. De México', <?php echo $data["ent"][14]["asis"];?>,    <?php echo $data["ent"][14]["nasis"];?>],
			['Michoacán', <?php echo $data["ent"][15]["asis"];?>,    <?php echo $data["ent"][15]["nasis"];?>],
			['Morelos', <?php echo $data["ent"][16]["asis"];?>,    <?php echo $data["ent"][16]["nasis"];?>],
			['Nayarit', <?php echo $data["ent"][17]["asis"];?>,    <?php echo $data["ent"][17]["nasis"];?>],
			['Nuevo León', <?php echo $data["ent"][18]["asis"];?>,    <?php echo $data["ent"][18]["nasis"];?>],
			['Oaxaca', <?php echo $data["ent"][19]["asis"];?>,    <?php echo $data["ent"][19]["nasis"];?>],
			['Puebla', <?php echo $data["ent"][20]["asis"];?>,    <?php echo $data["ent"][20]["nasis"];?>],
			['Querétaro', <?php echo $data["ent"][21]["asis"];?>,    <?php echo $data["ent"][21]["nasis"];?>],
			['Quintana Roo', <?php echo $data["ent"][22]["asis"];?>,    <?php echo $data["ent"][22]["nasis"];?>],
			['San Luis Potosí', <?php echo $data["ent"][23]["asis"];?>,    <?php echo $data["ent"][23]["nasis"];?>],
			['Sinaloa', <?php echo $data["ent"][24]["asis"];?>,    <?php echo $data["ent"][24]["nasis"];?>],
			['Sonora', <?php echo $data["ent"][25]["asis"];?>,    <?php echo $data["ent"][25]["nasis"];?>],
			['Tabasco', <?php echo $data["ent"][26]["asis"];?>,    <?php echo $data["ent"][26]["nasis"];?>],
			['Tamaulipas', <?php echo $data["ent"][27]["asis"];?>,    <?php echo $data["ent"][27]["nasis"];?>],
			['Tlaxcala', <?php echo $data["ent"][28]["asis"];?>,    <?php echo $data["ent"][28]["nasis"];?>],
			['Veracruz', <?php echo $data["ent"][29]["asis"];?>,    <?php echo $data["ent"][29]["nasis"];?>],
			['Yucatán',  <?php echo $data["ent"][30]["asis"];?>,    <?php echo $data["ent"][30]["nasis"];?>],
			['Zacatecas', <?php echo $data["ent"][31]["asis"];?>,    <?php echo $data["ent"][31]["nasis"];?>]
		  ]);
						
		  var options = {
			region: 'MX',
			displayMode: 'markers',
			colorAxis: {colors: ['green', 'blue']}
		  };

		  var chart = new google.visualization.GeoChart(document.getElementById('chart_div2'));
		  chart.draw(data, options);
		};
    </script>

    <div id="chart_div2" style="width: 750px; height: 500px;"></div><br /><br />
	<h4 class="ocultar-estado">Mostar/Ocultar tabla de resultados</h4>
	
	<div class="estado">
		<h4>Tabla por estado<h4>
		<table class="table table-striped">	
			<thead>
				<tr>
					<th>Estado</th>
					<th>Asisten</th>
					<th>No asisten</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data["ent"] as $ent) { ?>
					<tr>
						<td><?php echo $ent["ent_str"];?></td>
						<td><?php echo (int) $ent["asis"];?></td>
						<td><?php echo (int) $ent["nasis"];?></td>
						<td><?php echo (int) $ent["nasis"] + (int) $ent["asis"];?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php } ?>
<?php } else { ?>

<?php } ?>
