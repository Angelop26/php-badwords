<?php
$text = $_GET['testo_lungo'];
$cancelword = $_GET['error_word'];
$textcancelled = str_replace($cancelword,'***',$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>testo completo</h2>
<p> <?php echo "$text";?> </p>
<h2>lunghezza del testo</h2>
<p> <?php echo strlen($text) . ' caratteri';?> </p>
<h2>testo con parola censurata</h2>
<p>
    <?php echo "$textcancelled"?>
</p>
<h2>lunghezza del testo</h2>
<p>
    <?php echo strlen($textcancelled) . ' caratteri'; ?>
</p>
    
</body>
</html>