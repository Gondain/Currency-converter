<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pick your currency:</h1>
        <hr>
    </header>
    <main>
        <form method = 'post' action="currency.php">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" min='0'> <br> <br>
        <label for="from">From:</label>
        <select name="from" id="from">
            <option value="euro">Euro</option>
            <option value="usdollar">US Dollar</option>
            <option value="yen">Yen</option>
            <option value="CZK">Couronne tchèque</option>
            <option value="DKK">Couronne danoise</option>
            <option value="BGN">Lev bulgare</option>
            <option value="GBP">Livre sterling</option>
            <option value="HUF">Forint hongrois</option>
            <option value="PLN">Zloty polonais</option>
            <option value="RON">Leu roumain</option>
            <option value="SEK">Couronne suédoise</option>
        </select>
        <label for="to">To:</label>
        <select name="to" id="to"> 
            <option value="usdollar">US Dollar</option>
            <option value="euro">Euro</option>
            <option value="yen">Yen</option>
            <option value="CZK">Couronne tchèque</option>
            <option value="DKK">Couronne danoise</option>
            <option value="BGN">Lev bulgare</option>
            <option value="GBP">Livre sterling</option>
            <option value="HUF">Forint hongrois</option>
            <option value="PLN">Zloty polonais</option>
            <option value="RON">Leu roumain</option>
            <option value="SEK">Couronne suédoise</option>
        </select> <br> <br>
        <a href="currency.php">
            <button >Convert</button>
        </a>
    </form>
    </main>
</body>
</html>