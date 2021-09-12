<!DOCTYPE html>
<html>
<body>

<?php
            // index.php
            // ubicacion JSON online y local
            define('JSON', 'data-1.json');
            // leer JSON validamos si el fichero online e accesible y si no abrimos el json local
            if($data = @file_get_contents(JSON)){
             $items = json_decode($data, true);
             echo $data;
            }
            ?>

<?php
for ($i = 1; $i<sizeof($items); $i++){
?>
            <table>
              <tr>
                <th rowspan="7"><img src="img/home.jpg" class="itemMostradoimg"></th>
              </tr>
              <tr>
                <td>Direccion: <?php echo $items[$i]["Direccion"]; ?></td></tr>
                <tr>
                <td>Ciudad: <?php echo $items[$i]["Ciudad"]; ?></td></tr>
                <tr>
                <td>Telefono: <?php echo $items[$i]["Telefono"]; ?></td></tr>
                <tr>
                <td>Codigo Postal: <?php echo $items[$i]["Codigo_Postal"]; ?></td></tr>
                <tr>
                <td>Tipo: <?php echo $items[$i]["Tipo"]; ?></td></tr>
                <tr>
                <td>Precio: <?php echo $listaItems[$i]["Precio"]; ?></td></tr>
                <tr>
              </tr>
            </table>
            <div class="divider"></div>
          </div>
        </div>
      </div>
<?php
    }
?>

</body>
</html>