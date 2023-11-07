<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Impuestos</title>
</head>
<body>
    <?php
    echo "principal impuestos";

    ?>
    <table style="border:solid 2px #003366">
        <thead>
            <tr>
        <th>ID</th>
        <th>nombre del impuesto</th>
         <th>porcentaje de impuesto</th>
         <th>acciones</th>
            </tr>
        </thead>
        <tbody>
<?php
include "../conexion.php";
$sql1 = "SELECT * FROM componentes WHERE ID_menú != 1 ORDER BY ID_menú DESC";
$consulta1 = mysqli_query($conexion, $sql1);
var_dump($consulta1);
while ($datos = mysqli_fetch_array($consulta1) AND $datos2 = mysqli_fetch_array($consulta2))
{
    $id = $datos ['ID_menú'];
    $nombre = $datos2['nombre'];
    $precio = $datos2['precio'];
    echo "<tr>";
    echo "<td>";
    echo $id;
    echo "</td>";
    echo "<td>";
    echo $nombre;
    echo "</td>";
    echo "<td>";
    echo $porcentaje;
    echo "</td>";
    echo '<a id="boton2" class="mbri-trash mbr-iconfont mbr-iconfont-btn" href="baja_menu.php?id_componente='.$id.'title=borrar componente"> 
    
    </a>';
    echo "</tr>";
}
echo "principal impuestos";
?>
        </tbody>
    </table>

</body>
</html>