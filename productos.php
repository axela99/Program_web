<?php

$productos = array(
    array(
        "codigo" => "001",
        "descripcion" => "Zapatillas Running",
        "marca" => "Nike",
        "precio_costo" => 80.00,
        "porcentaje_ganancia" => 25,
        "porcentaje_iva" => 12,
        "imagen" => "running.jpg"
    ),
    array(
        "codigo" => "002",
        "descripcion" => "Zapatillas Casual",
        "marca" => "Adidas",
        "precio_costo" => 60.00,
        "porcentaje_ganancia" => 20,
        "porcentaje_iva" => 10,
        "imagen" => "casual.jpg"
    ),
    array(
        "codigo" => "003",
        "descripcion" => "Zapatillas de Skate",
        "marca" => "Vans",
        "precio_costo" => 70.00,
        "porcentaje_ganancia" => 22,
        "porcentaje_iva" => 11,
        "imagen" => "skate.jpg"
    ),
    array(
        "codigo" => "004",
        "descripcion" => "Zapatillas de Fútbol",
        "marca" => "Puma",
        "precio_costo" => 90.00,
        "porcentaje_ganancia" => 30,
        "porcentaje_iva" => 15,
        "imagen" => "futbol.jpg"
    ),
    array(
        "codigo" => "005",
        "descripcion" => "Zapatillas de Moda",
        "marca" => "Converse",
        "precio_costo" => 55.00,
        "porcentaje_ganancia" => 18,
        "porcentaje_iva" => 9,
        "imagen" => "moda.jpg"
    ),
    array(
        "codigo" => "006",
        "descripcion" => "Zapatillas para Senderismo",
        "marca" => "Merrell",
        "precio_costo" => 100.00,
        "porcentaje_ganancia" => 35,
        "porcentaje_iva" => 18,
        "imagen" => "senderismo.jpg"
    ),
    array(
        "codigo" => "007",
        "descripcion" => "Zapatillas de Baloncesto",
        "marca" => "Under Armour",
        "precio_costo" => 75.00,
        "porcentaje_ganancia" => 28,
        "porcentaje_iva" => 14,
        "imagen" => "baloncesto.jpg"
    ),
    array(
        "codigo" => "008",
        "descripcion" => "Zapatillas de Entrenamiento",
        "marca" => "Reebok",
        "precio_costo" => 65.00,
        "porcentaje_ganancia" => 21,
        "porcentaje_iva" => 10,
        "imagen" => "entrenamiento.jpg"
    ),
    array(
        "codigo" => "009",
        "descripcion" => "Zapatillas de Tenis",
        "marca" => "Asics",
        "precio_costo" => 85.00,
        "porcentaje_ganancia" => 26,
        "porcentaje_iva" => 13,
        "imagen" => "tenis.jpg"
    ),
    array(
        "codigo" => "010",
        "descripcion" => "Zapatillas para Correr",
        "marca" => "Brooks",
        "precio_costo" => 95.00,
        "porcentaje_ganancia" => 32,
        "porcentaje_iva" => 16,
        "imagen" => "correr.jpg"
    ),
);

?>

<table class="styled-table">
    <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Marca</th>
        <th>Precio de Venta</th>
        <th>Imagen</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <?php
            // Calcular el precio de venta
            $importe_ganancia = $producto['precio_costo'] * $producto['porcentaje_ganancia'] / 100;
            $importe_neto = $producto['precio_costo'] + $importe_ganancia;
            $importe_iva = $importe_neto * $producto['porcentaje_iva'] / 100;
            $importe_venta = $producto['precio_costo'] + $importe_ganancia + $importe_iva;

            // Determinar el color de la fila
            $color_fila = ($importe_venta > 80000) ? 'style="color: red;"' : '';
        ?>

        <tr <?php echo $color_fila; ?>>
            <td><?php echo $producto['codigo']; ?></td>
            <td><?php echo $producto['descripcion']; ?></td>
            <td><?php echo $producto['marca']; ?></td>
            <td><?php echo '$' . number_format($importe_venta, 2); ?></td>
            <td><img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['descripcion']; ?>"></td>
        </tr>
    <?php endforeach; ?>

</table>