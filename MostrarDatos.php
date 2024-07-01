<center><table border="1" ></center>
<tr>
<td colspan="3"><head><center><img src="ss.jpg" widht="90" height="145"></center></head></td>
</tr>
</table>
<h1><center><strogn><font size="5,99"><font face="Times New Roman"><font color="black">Colegios De Estudios Científicos Y Tecnológicos Del Estado De México Plantel Ixtlahuaca</font color></font face></font size></strong></center></h1>

<h1><center><strogn><font size="5.99"><font face="Times New Roman"><font color="black">Isaac Claudio Hernandez,  Grupo:402,  N.L:05, Carrera:Tecnico en Programación 17/05/2024 11:40 am  </font color></font face></font size></strong></center></h1>

<meta charset="utf-8">
<?php
	$conexion=mysqli_connect('localhost','root','','05_zapateria');
?>
<!DOCTYPE html>
<html>
<head><title>mostrar datos de la tabla</title></head>
<body>
	<br>
	<center><table border="1">
		<tr>

			<td bgcolor="Orange">Id</td>	
			<td bgcolor="Orange">N_Producto</td>
			<td bgcolor="Orange">Cantidad</td>
			<td bgcolor="Orange">Color</td>
			<td bgcolor="Orange">Marca</td>	
			<td bgcolor="Orange">Numero</td>
			<td bgcolor="Orange">Proveedor</td>
			<td bgcolor="Orange">Material</td>
			<td bgcolor="Orange">Precio_F</td>	
			<td bgcolor="Orange">Precio_V</td>
			<td bgcolor="Orange">Ref</td>
		
		</tr>

		<?php
		$sql="SELECT  * from 05_inventario";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
				<td><?php echo $mostrar['Id'] ?></td>
					<td><?php echo $mostrar['N_Producto'] ?></td>
						<td><?php echo $mostrar['Cantidad'] ?></td>
							<td><?php echo $mostrar['Color'] ?></td>
							    <td><?php echo $mostrar['Marca'] ?></td>
					                <td><?php echo $mostrar['Numero'] ?></td>
						                <td><?php echo $mostrar['Proveedor'] ?></td>
							                <td><?php echo $mostrar['Material'] ?></td>
							                    <td><?php echo $mostrar['Precio_F'] ?></td>
					                                <td><?php echo $mostrar['Precio_V'] ?></td>
					                          	        <td><?php echo $mostrar['Ref'] ?></td>
							
						</tr>
						<?php
					}
				?>
			</table></center><br>
			<center><input name="button" type="button" class="Estilo22"
				onClick="javascript:print()" value="IMPRIMIR"/></center>
			</body>
			</html>
			<h1><center><strogn><font size="5.99"><font face="Times New Roman"><font color="black">Todos los derechos reservados a Isaac Claudio Hernandez se permite la reproduccion de este documento ni su cooperacion a un sistema informativo de cualquier actorizacion previa</font color></font face></font size></strong></center></h1>






