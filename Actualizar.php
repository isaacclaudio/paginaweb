<html>
<center><table border="0" ></center>
<tr>
<td colspan="3"><head><center><img src="Encabesado.png" widht="90" height="145"></center></head></td>
</tr>
</table>
<center><strogn><font size="5,99"><font face="Baskerville Old Face">
Colegios De Estudios Cientificos Y Tecnologicos Del Estado De Mexico Plantel Ixtlahuaca</font color></font face></font size></strong></center>

<center><strogn><font size="5.99"><font face="Baskerville Old Face">
Isaac Claudio HERNANDEZ,  Grupo:402,  N.L: 05, Carrera:Tecnico en Programacion 22-05-2024</font color></font face></font size></strong></center>
<table border="1"  >

<tr>
 <center><form action="" method="POST">
<form action="" method="post">
       <tr><td>Id: <td><input required name="Id"><br></td><th rowspan="11"><img src="ss.jpg" widht="250" height="260"></th> </td></tr>
      <tr><td> N_Producto: <td><input required name="N_Producto"><br></td></td></tr>
       <tr><td>Cantidad: <td><input required name="Cantidad"><br></td></td></tr>
      <tr><td> Color: <td><input required name="Color"><br></td></td></tr>
       <tr><td> Marca: <td><input required name="Marca"><br></td></td></tr>
       <tr><td>Numero: <td><input required name="Numero"><br></td></td></tr>
      <tr><td> Proveedor: <td><input required name="Proveedor"><br></td></td></tr>
      <tr><td> Material: <td><input required name="Material"><br></td></td></tr>
       <tr><td>Precio_F: <td><input required name="Precio_F"><br></td></td></tr>
      <tr><td>Precio_V: <td><input required name="Precio_V"><br></td></td></tr>
   <tr><td>Referencia: <td><input required name="Ref"><br></td></td></tr>
<tr><td colspan="2"><center><input type="submit" value="Actualizar"></center></td><tr>
</form>
</tr>
  </center></form>
</table>
<center><table border="0">

</center></table>
</body>
</html>



<meta charset="utf-8">
<?php
include("coneccion.php");
?>

<?php
if ($_POST){
$Id=$_REQUEST["Id"];
$N_Producto=$_REQUEST["N_Producto"];
$Cantidad=$_REQUEST["Cantidad"];
$Color=$_REQUEST["Color"];
$Marca=$_REQUEST["Marca"];
$Numero=$_REQUEST["Numero"];
$Proveedor=$_REQUEST["Proveedor"];
$Material=$_REQUEST["Material"];
$Precio_F=$_REQUEST["Precio_F"];
$Precio_V=$_REQUEST["Precio_V"];
$Ref=$_REQUEST["Ref"];

$var=  "update 05_inventario SET
    N_Producto='$N_Producto',
    Cantidad='$Cantidad', 
    Color='$Color',
    Marca='$Marca',
    Numero='$Numero',
    Proveedor='$Proveedor',
    Material='$Material', 
    Precio_F='$Precio_F',
    Precio_V='$Precio_V',
    Ref='$Ref' 
    where Id='$Id'" or die(mysql_error());


       if(mysqli_query($con,$var)){

echo"<script>
   alert('los cambios se guardaron correctamente');
   </script>";
}
else
{
echo"<script>
      alert('Nose realizaron los cambios');
</script>
";
}

}
?>

