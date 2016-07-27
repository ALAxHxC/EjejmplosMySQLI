<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* $mysqli = new mysqli('127.0.0.1', 'root', 'jenizaro', 'sakila');
          if ($mysqli->connect_errno) {
          echo "Lo sentimos, este sitio web está experimentando problemas.";
          echo "Error: Fallo al conectarse a MySQL debido a: \n";
          echo "Errno: " . $mysqli->connect_errno . "\n";
          echo "Error: " . $mysqli->connect_error . "\n";
          exit;
          } else {

          if (!$resultado = $mysqli->query($sql)) {
          // ¡Oh, no! La consulta falló.
          echo "Lo sentimos, este sitio web está experimentando problemas.";

          // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
          // cómo obtener información del error
          echo "Error: La ejecución de la consulta falló debido a: \n";
          echo "Query: " . $sql . "\n";
          echo "Errno: " . $mysqli->errno . "\n";
          echo "Error: " . $mysqli->error . "\n";
          exit;
          }
          $actor = $resultado->fetch_assoc();
          echo "A veces veo a " . $actor['first_name'] . " " . $actor['last_name'] . " en la TV.";
          } */
        include_once 'MySQLClase.php';
        $sql_database = new MySQLClase('127.0.0.1', 'root', '*****', 'sakila');
        if ($sql_database->getConecto()) {
            echo 'conecto';
        }
        $sql = "SELECT actor_id, first_name, last_name FROM actor ";
        $resultado = $sql_database->realizarConsulta($sql);
        if ($resultado->num_rows != 0) {
            while ($fila = $resultado->fetch_row()) {
                printf("%s (%s,%s)\n", $fila[0], $fila[1], $fila[2]);
            }
        }
        ?>
    </body>
</html>
