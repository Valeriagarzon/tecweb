<?php
if(isset($_GET['tope']))
{
    $tope = $_GET['tope'];
}
else
{
    die('Parámetro "tope" no detectado...');
}

if (!empty($tope))
{
    /** SE CREA EL OBJETO DE CONEXIÓN */
    @$link = new mysqli('localhost', 'root', 'Mitatanka1', 'marketzone');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */

    /** comprobar la conexión */
    if ($link->connect_errno) 
    {
        die('Falló la conexión: '.$link->connect_error.'<br/>');
    }

    /** Crear una tabla que no devuelve un conjunto de resultados */
    if ( $result = $link->query("SELECT * FROM productos WHERE unidades <= $tope") ) 
    {
        echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
        echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">';
        echo '<head>';
        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        echo '<title>Productos</title>';
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
        echo '</head>';
        echo '<body>';
        echo '<h3>Productos con unidades menores o iguales a '.$tope.'</h3>';
        echo '<br/>';

        echo '<table class="table">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">#</th>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Marca</th>';
        echo '<th scope="col">Modelo</th>';
        echo '<th scope="col">Precio</th>';
        echo '<th scope="col">Unidades</th>';
        echo '<th scope="col">Detalles</th>';
        echo '<th scope="col">Imagen</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr>';
            echo '<th scope="row">' . $row['id'] . '</th>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['marca'] . '</td>';
            echo '<td>' . $row['modelo'] . '</td>';
            echo '<td>' . $row['precio'] . '</td>';
            echo '<td>' . $row['unidades'] . '</td>';
            echo '<td>' . utf8_encode($row['detalles']) . '</td>';
            echo '<td><img src="' . $row['imagen'] . '" ></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</body>';
        echo '</html>';

        /** útil para liberar memoria asociada a un resultado con demasiada información */
        $result->free();
    }

    $link->close();
}
?>
