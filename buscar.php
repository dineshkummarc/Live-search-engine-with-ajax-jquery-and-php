<?php
require_once "conexion.php";
$conexion = conexion();

    $response = '';
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    if(isset($_POST['consulta'])){
        $consulta = $_POST['consulta'];  
        $sql = "SELECT id, nombre, apellido, email, telefono FROM usuarios WHERE nombre LIKE '%".$consulta."%' OR apellido LIKE '%".$consulta."%' OR email 
        LIKE '%".$consulta."%' ";
    }
$result = mysqli_query($conexion, $sql);
if(mysqli_num_rows($result) > 0){
    $response .= '<table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                </tr>
                </thead>
                <tbody>';
                while($row = mysqli_fetch_row($result)){
                    $response .= '<tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                  </tr>';
                }
                $response .= '</tbody></table>';
}else{
    $response .= "No hay datos";
}
echo $response;