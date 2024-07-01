<!DOCTYPE html>
<html>
<center><table border="0" ></center>
<tr>
<td colspan="3"><head><center><img src="Encabesado.png" widht="90" height="145"></center></head></td>
</tr>
</table>
<center><strogn><font size="4"><font face="Baskerville Old Face"><font color="black">Colegios De Estudios Científicos Y Tecnológicos Del Estado De México Plantel Ixtlahuaca</font color></font face></font size></strong></center>
<center><strogn><font size="4"><font face="Baskerville Old Face"><font color="black">Isaac Claudio Hernandez <p> Grupo:402  N.L: 05,<p> </font color></font face></font size></strong></center>
<table border="0"  >
<tr>

 <center><form action="" method="POST">
<td><font size="5"><label for="Id"><font face="Times New Roman"><font color="#B06CCE">Id Que Dese Buscar:</font color></font face></label></td>
<td><input type="text" Id="Id" name="Id" required ></td>

</tr>

<tr>
<td colspan="2"><center><button type="submit" name="buscar">Buscar</button></form></td>
</tr>
  </center></form>
</table>


<center><table border="1"> 

    
        
    <?php
    if(isset($_POST['buscar'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "05_zapateria";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("No se conectó " . $conn->connect_error);
        }

        $Id = $_POST['Id'];


        $sql = "SELECT  Id, N_Producto, Cantidad, Color, Marca, Numero, Proveedor, Material, Precio_F, Precio_V, Ref  FROM 05_inventario WHERE Id = $Id";
        $result = $conn->query($sql);

        
       if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) { 

 
                echo "<tr><td colspan='3'>"."Id:"."</td><td colspan='3'>" . $row["Id"]. "<br>";
                echo "<tr><td colspan='3'>"."N_Producto:"."</td><td colspan='3'>" . $row["N_Producto"]. "<br>";
                echo "<tr><td colspan='3'>"."Cantidad:"."</td><td colspan='3'>" . $row["Cantidad"]. "<br>";
                echo "<tr><td colspan='3'>"."Color:"."</td><td colspan='3'>" . $row["Color"]. "<br>";
                echo "<tr><td colspan='3'>"."Marca:"."</td><td colspan='3'>" . $row["Marca"]. "<br>";
                echo "<tr><td colspan='3'>"."Numero:"."</td><td colspan='3'>" . $row["Numero"]. "<br>";
                echo "<tr><td colspan='3'>"."Proveedor:"."</td><td colspan='3'>" . $row["Proveedor"]. "<br>";
                echo "<tr><td colspan='3'>"."Material:"."</td><td colspan='3'>" . $row["Material"]. "<br>";
                echo "<tr><td colspan='3'>"."Precio_F:"."</td><td colspan='3'>" . $row["Precio_F"]. "<br>";
                echo "<tr><td colspan='3'>"."Precio_V:"."</td><td colspan='3'>" . $row["Precio_V"]. "<br>";
                echo "<tr><td colspan='3'>"."Referencia:"."</td><td colspan='3'>" . $row["Ref"]. "<br>";



            }
        } else {
            
        }
        $conn->close();
    }
    ?>
    </center></table>







    <center> <font color="Black"> <font size="3">  Derechos de Autor: Isaac claudio Hernandez </font color> </font size>  </center> </center> 
 <center> <font color="Black"> <font size="3">  Este documento tiene todas las marcas registrada mencionadas en este sitio web son propiedad del respectivo dueño </font color> </font size> </center> </center>


</body>
</center></table>
</body>
</html>
