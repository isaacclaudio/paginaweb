<?php
$con=mysqli_connect("127.0.0.1","root","","05_zapateria");
if($con)
{
echo"si se conecto";
}
else
{
echo "no se conecto";
}
?>