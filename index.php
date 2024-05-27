<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moneda</title>
</head>
<body>
    <img src="img/logo.png" alt="" class="conversor-imagen">
    <h1>Conversor de Monedas</h1>
    <p>Escoge por favor la Moneda  y la cantidad para realizar la conversi&oacute;n que t&uacute; deseas.</p>

    <form  action="conversion.php" method="post">
        <input type="hidden" name="moneda-uno" id="hidden-moneda-uno">
        <input type="hidden" name="moneda-dos" id="hidden-moneda-dos">
        <input type="hidden" name="cantidad-uno" id="hidden-cantidad-uno">
        <input type="hidden" name="cantidad-dos" id="hidden-cantidad-dos">

      

    <div class="container">
        <div class="moneda">
            <select name="moneda-uno" id="moneda-uno">

            <option value="AED">AED</option>
                <option value="ARS">ARS</option>
                <option value="AUD">AUD</option>
                <option value="BGN">BGN</option>
                <option value="BRL">BRL</option>
                <option value="BSD">BSD</option>
                <option value="CAD">CAD</option>
                <option value="CHF">CHF</option>
                <option value="CLP">CLP</option>
                <option value="CNY">CNY</option>
                <option value="COP">COP</option>
                <option value="CZK">CZK</option>
                <option value="DKK">DKK</option>
                <option value="DOP">DOP</option>
                <option value="EGP">EGP</option>
                <option value="EUR">EUR</option>
                <option value="FJD">FJD</option>
                <option value="GBP">GBP</option>
                <option value="GTQ">GTQ</option>
                <option value="HKD">HKD</option>
                <option value="HRK">HRK</option>
                <option value="HUF">HUF</option>
                <option value="IDR">IDR</option>
                <option value="ILS">ILS</option>
                <option value="INR">INR</option>
                <option value="ISK">ISK</option>
                <option value="JPY">JPY</option>
                <option value="KRW">KRW</option>
                <option value="KZT">KZT</option>
                <option value="MXN">MXN</option>
                <option value="MYR">MYR</option>
                <option value="NOK">NOK</option>
                <option value="NZD">NZD</option>
                <option value="PAB">PAB</option>
                <option value="PEN">PEN</option>
                <option value="PHP">PHP</option>
                <option value="PKR">PKR</option>
                <option value="PLN">PLN</option>
                <option value="PYG">PYG</option>
                <option value="RON">RON</option>
                <option value="RUB">RUB</option>
                <option value="SAR">SAR</option>
                <option value="SEK">SEK</option>
                <option value="SGD">SGD</option>
                <option value="THB">THB</option>
                <option value="TRY">TRY</option>
                <option value="TWD">TWD</option>
                <option value="UAH">UAH</option>
                <option value="USD" selected>USD</option>
                <option value="UYU">UYU</option>
                <option value="VND">VND</option>
                <option value="ZAR">ZAR</option>
            </select>

            <input 
            type="number" 
            id="cantidad-uno" 
            name="cantidad-uno"
            placeholder="0"  
            
            >

        </div>

        <div class="tasa-cambio-container">
            <button type="submit" class="btn" id="tasa">
               Conversi&oacute;n 
            </button>

            <div class="cambio" id="cambio"></div>

        </div>

        <div class="moneda">
            <select name="moneda-dos" id="moneda-dos">

            <option value="AED">AED</option>
                <option value="ARS">ARS</option>
                <option value="AUD">AUD</option>
                <option value="BGN">BGN</option>
                <option value="BRL">BRL</option>
                <option value="BSD">BSD</option>
                <option value="CAD">CAD</option>
                <option value="CHF">CHF</option>
                <option value="CLP">CLP</option>
                <option value="CNY">CNY</option>
                <option value="COP">COP</option>
                <option value="CZK">CZK</option>
                <option value="DKK">DKK</option>
                <option value="DOP">DOP</option>
                <option value="EGP">EGP</option>
                <option value="EUR" selected>EUR</option>
                <option value="FJD">FJD</option>
                <option value="GBP">GBP</option>
                <option value="GTQ">GTQ</option>
                <option value="HKD">HKD</option>
                <option value="HRK">HRK</option>
                <option value="HUF">HUF</option>
                <option value="IDR">IDR</option>
                <option value="ILS">ILS</option>
                <option value="INR">INR</option>
                <option value="ISK">ISK</option>
                <option value="JPY">JPY</option>
                <option value="KRW">KRW</option>
                <option value="KZT">KZT</option>
                <option value="MXN">MXN</option>
                <option value="MYR">MYR</option>
                <option value="NOK">NOK</option>
                <option value="NZD">NZD</option>
                <option value="PAB">PAB</option>
                <option value="PEN">PEN</option>
                <option value="PHP">PHP</option>
                <option value="PKR">PKR</option>
                <option value="PLN">PLN</option>
                <option value="PYG">PYG</option>
                <option value="RON">RON</option>
                <option value="RUB">RUB</option>
                <option value="SAR">SAR</option>
                <option value="SEK">SEK</option>
                <option value="SGD">SGD</option>
                <option value="THB">THB</option>
                <option value="TRY">TRY</option>
                <option value="TWD">TWD</option>
                <option value="UAH">UAH</option>
                <option value="USD">USD</option>
                <option value="UYU">UYU</option>
                <option value="VND">VND</option>
                <option value="ZAR">ZAR</option>
            </select>

            <!-- <input 
            type="number" 
            id="cantidad-dos" 
            name="cantidad-dos"
            placeholder="0"  > -->

        </div>

    </div>

  
    </form>
    <footer>
        <p>&copy; 2024 Mi Sitio Web - Todos los derechos reservados.</p>
        <p> Juan Camilo Ramirez Chaverra Y Juan Camilo Ramirez Hoyos</p>
    </footer>
   

</body>
</html>
