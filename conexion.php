






 <td colspan="4">  <center> <img src="Encabesado.png" widht="20"height="150"><center>
  
 <h1>  <center>  <font size="6"> <font face="Times New Roman"> Colegio De Estudios Cientificos y Tecnologicos Del<br> EstadoDe Mexico  </font face> </font size> </center>  </h1>

 <h1>  <font face="Engravers MT">   <font size="5">   Modulo 3   </font size>  </font face>  </h1>

 <h1>  <font size="4">  Submodulo 2 Desarrolla aplicaciones que se ejecuten en el cliente  </font size>  </h1>
 <h1>  <font size="4">  Submodulo 3 Desarrolla aplicaciones que se ejecuten en el servidor  </font size>  </h1>

 <h1> <font color="Black"> <font size="4">  <font face="Times New Roman">  Nombre del Alumno: Isaac Claudio Hernandez  Grupo: 402  </font face> </font size> </font color> </center> </h1>

 <h1>  <font size="4">  <font color="Black">  Nombre de la docente: Celia Romero Pichardo  </font color>  </font size> </h1>

 <center> <h1> <font color="Black"> <font size="5"> N.L:05 Carrera: programacion </font size> </font color> </h1> </center> 



 


<meta charset="utf-8">
<?php
include("coneccion.php");
?>

<form action=""method="post">
<center> <table border="4">


<td colspan="3">  <center> Insercion de Registros </center> </td>



<tr>
 <td>  Id:  </td>
 <td> <input required name="id"> </td>
  <th rowspan="6">  <img src="787b.jpg" widht="20"height="150">    
 </tr>


 <tr>
 <td> N_Producto:  </td>
 <td> <input name="nom"> </td>
 </tr>


 <tr>
 <td>  Cantidad:  </td>
 <td> <input name="can"> </td>
 </tr>


 <tr>
 <td> Color:  </td>
 <td> <input name="col"> </td>
 </tr>


 <tr>
 <td> Marca: </td>
 <td> <input name="mar"></td>
 </tr>


 <tr>
 <td> Numero:  </td>
 <td> <input name="num"> </td>
 </tr> 


 <tr>
 <td> Proveedor:  </td>
 <td> <input name="pro"> </td>
 </tr> 


 <tr>
 <td> Material:  </td>
 <td> <input name="mat"> </td>
 </tr> 


<tr>
 <td> Precio_F:  </td>
 <td> <input name="pref"> </td>
 </tr> 


<tr>
 <td>  Precio_V:  </td>
 <td> <input name="prev"> </td>
 </tr> 


<tr>
 <td>  Ref:  </td>
 <td> <input name="ref"> </td>
 </tr> 






 <td colspan="3"> <center> <input type="submit" value="INSERTAR"> </center> </td>




<?php
if ($_POST){
  $i=$_POST['id'];
 $n=$_POST['nom'];
 $c=$_POST['can'];
 $o=$_POST['col'];
 $m=$_POST['mar'];
 $u=$_POST['num'];
 $p=$_POST['pro'];
 $a=$_POST['mat'];
 $e=$_POST['pref'];
 $r=$_POST['prev'];
 $f=$_POST['ref'];

 $sql=("insert into 05_inventario (id,N_Producto,Cantidad,Color,Marca,Numero,proveedor,Material,Precio_F,Precio_V,Ref)values ('$i','$n','$c','$o','$m','$u','$p','$a','$e','$r','$f')") or die(mysql_error());
 if(mysqli_query($con,$sql)){
 echo"<script>     
  alert('El registro se guardo correctamente');
  </script>";

}
else{
 echo"<script>
  alert('el alumno ya existe en la base de datos y no se puede dar de alta');
  </script>";
}
}
?>