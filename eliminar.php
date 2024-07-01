<meta charset="utf-8">
<?php
include("coneccion.php");
?>
<form action="" method="post">
      Insertar el Id a eliminar:
      <input required name="Id"><br>
      <input type="submit"value=Eliminar>
    
</form>


<?php
if ($_POST){
   $i=$_POST['Id'];
   $sql="delete from 05_inventario where Id='$i'";
   if(mysqli_query($con,$sql)){
   echo"<script>
        alert('El regitro se elimino correctamente');
              </script>";
}
else{
echo"<script>
   alert('Error, no se eliminio el registro, favor de verificar');
   </script>";
}
}
?>
