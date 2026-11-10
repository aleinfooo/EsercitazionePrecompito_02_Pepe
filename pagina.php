<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatrice</title>
</head>
<body>
    <h1>Calcolatrice</h1>
    
    <form action="" method="get">
        <label for="a"> a: </label>
        <input type="number" name="a">
        <br><br>
        <label for="b"> b: </label>
        <input type="number" name="b">
        <br>
        <br>

        <fieldset>
            <legend>Operazione</legend>
            <input type="radio" name="operazione" id="somma">
            <label for="somma"> somma </label>
            <br>
            <input type="radio" name="operazione" id="differenza">
            <label for="differenza"> differenza </label>
            <br>
            <input type="radio" name="operazione" id="prodotto">
            <label for="prodotto"> prodotto </label>
            <br>
            <input type="radio" name="operazione" id="quoziente">
            <label for="quoziente"> quoziente </label>
        </fieldset>
        <br>
        <fieldset>
            <legend>Opzioni</legend>
            <input type="checkbox" name="opzioni[]" id="vA" value="abs">
            <label for="vA"> valore assoluto </label>
            <br>
            <input type="checkbox" name="opzioni[]" id="quad" value="quad">
            <label for="quad"> quadrato </label>
            <br>
            <input type="checkbox" name="opzioni[]" id="arrot" value="arrot">
            <label for="arrot"> arrotonda a 2 decimali </label>
        </fieldset>
        <br>
        <button type="submit">Calcola</button>
    </form>
    
</body>
</html>