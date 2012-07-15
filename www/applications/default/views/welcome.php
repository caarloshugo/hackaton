<form class="form-horizontal" action="" method="post">
	<fieldset>
		<p>
			<div class="control-group">
			<label class="control-label" for="select01">Estado: </label>
				<div class="controls">
					<select id="ent" name="ent">
						<option value="0">Nacional</option>
						<option value="1">Aguascalientes</option>
						<option value="2">Baja California</option>
						<option value="3">Baja California Sur</option>
						<option value="4">Campeche</option>
						<option value="5">Coahuila</option>
						<option value="6">Colima</option>
						<option value="7">Chiapas</option>
						<option value="8">Chihuahua</option>
						<option value="9">Distrito Federal</option>
						<option value="10">Durango</option>
						<option value="11">Guanajuato</option>
						<option value="12">Guerrero</option>
						<option value="13">Hidalgo</option>
						<option value="14">Jalisco</option>
						<option value="15">Edo. De M&eacute;xico</option>
						<option value="16">Michoac&aacute;n</option>
						<option value="17">Morelos</option>
						<option value="18">Nayarit</option>
						<option value="19">Nuevo Le&oacute;n</option>
						<option value="20">Oaxaca</option>
						<option value="21">Puebla</option>
						<option value="22">Quer&eacute;taro</option>
						<option value="23">Quintana Roo</option>
						<option value="24">San Luis Potos&iacute</option>
						<option value="25">Sinaloa</option>
						<option value="26">Sonora</option>
						<option value="27">Tabasco</option>
						<option value="28">Tamaulipas</option>
						<option value="29">Tlaxcala</option>
						<option value="30">Veracruz</option>
						<option value="31">Yucat&aacute;n</option>
						<option value="32">Zacatecas</option>
					</select>
				</div>
			</div>
		</p>
		
		<p>
			<div class="control-group">
			<label class="control-label" for="select01">Edad: </label>
				<div class="controls">
					<select id="eda" name="eda">
						<option value="0">Todas las edades</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
					</select>
				</div>
			</div>
		</p>
		
		<div class="form-actions">
			<button class="btn btn-primary" type="submit" name="submit" value="submit">Save changes</button>
		</div>
		
	</fieldset>
 </form> 

<?php if(isset($data)) { ?>
	<p>
		Asisten: <?php echo $data["asis"];?><br />
		No asisten: <?php echo $data["nasis"];?>
	</p>
	
	
	<p>
		Ni&ntilde;as que asisten: <?php echo $data["agenero"]["f"];?><br />
		Ni&ntilde;os que asisten: <?php echo $data["agenero"]["m"];?>
	</p>
	
	<p>
		Ni&ntilde;as que no asisten: <?php echo $data["nagenero"]["f"];?><br />
		Ni&ntilde;os que no asisten: <?php echo $data["nagenero"]["m"];?>
	</p>

	<div id="chart_div" style=" width:750px; height: 500px;"></div>
    
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Razón', 'Niñas', 'Niños', 'Total'],
          ['Inseguridad, discriminación y/o distancia', <?php echo $data["reasons"]["f"][2];?>, <?php echo $data["reasons"]["m"][2];?>, <?php echo $data["reasons"]["totales"][2];?>],
          ['Falta de interés o aptitud', <?php echo $data["reasons"]["f"][3];?>, <?php echo $data["reasons"]["m"][3];?>, <?php echo $data["reasons"]["totales"][3];?>],
          ['Falta de recursos económicos', <?php echo $data["reasons"]["f"][4];?>, <?php echo $data["reasons"]["m"][4];?>, <?php echo $data["reasons"]["totales"][4];?>],
          ['Motivos familiares', <?php echo $data["reasons"]["f"][5];?>, <?php echo $data["reasons"]["m"][5];?>, <?php echo $data["reasons"]["totales"][5];?>],
          ['Enfermedad, accidente o discapacidad', <?php echo $data["reasons"]["f"][6];?>, <?php echo $data["reasons"]["m"][6];?>, <?php echo $data["reasons"]["totales"][6];?>],
          ['Otra razón', <?php echo $data["reasons"]["f"][7];?>, <?php echo $data["reasons"]["m"][7];?>, <?php echo $data["reasons"]["totales"][7];?>]
        ]);

        var options = {
          title: 'Gráfica de resultados',
          hAxis: {title: 'Razón',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


	<p>Raz&oacute;n de inasistencia escolar:</p>
	
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
<?php } ?>