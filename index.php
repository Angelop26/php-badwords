<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="greeting.php" method="GET">
        <label for="text">Inserisci testo</label>
        <textarea name="testo_lungo" id="text" cols="30" rows="10">

        </textarea>
        <label for="cancelword">Inserire parola da eliminare</label>
        <input type="text" id="cancelword" name="error_word">
        <button type="submit">invia</button>
    </form>
</body>
</html>