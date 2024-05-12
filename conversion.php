<?php


// Verificar si se han enviado datos desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $moneda_origen = $_POST['moneda-uno'];
    $moneda_destino = $_POST['moneda-dos'];
    $cantidad_origen = $_POST['cantidad-uno'];

    // Construir la URL de la API con los parámetros necesarios
    $url = "https://v6.exchangerate-api.com/v6/6c000385a09765c6fbfa5911/latest/{$moneda_origen}";


    // Hacer la solicitud a la API y obtener la respuesta
    $response = file_get_contents($url);

        // Decodificar la respuesta JSON en un arreglo asociativo
    $data = json_decode($response, true);

    // Verificar si la solicitud fue exitosa
    if ($data && $data['result'] == 'success') {
        // Obtener la tasa de conversión de la moneda destino
        $tasa_conversion = $data['conversion_rates'][$moneda_destino];

        // Calcular el resultado de la conversión
        $resultado = $cantidad_origen * $tasa_conversion;

        // Mostrar el resultado
        echo "<p>{$cantidad_origen} {$moneda_origen} equivale a {$resultado} {$moneda_destino}</p>";
    } else {
        // Mostrar un mensaje de error si la solicitud falla
        echo "<p>Hubo un error al obtener la tasa de conversión.</p>";
    }
}
?>
