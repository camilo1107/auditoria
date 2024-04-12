<!DOCTYPE html>
<html>
<head>
    <title>Convertidor de Monedasss</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>Convertidor de Moneda</h1>
    <form id="conversionForm">
        <label for="amount">Cantidad:</label>
        <input type="number" id="amount" name="amount" required><br>
        <label for="fromCurrency">De:</label>
        <select id="fromCurrency" name="fromCurrency" required>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <!-- Agregar más opciones de moneda según sea necesario -->
        </select><br>
        <label for="toCurrency">A:</label>
        <select id="toCurrency" name="toCurrency" required>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <!-- Agregar más opciones de moneda según sea necesario -->
        </select><br>
        <button type="submit">Convertir</button>
    </form>
    <div id="result"></div>
</body>
</html>
