<?php
// creo una variabile con lorem 
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid?';
// tramite sterl mi darà la lunghezza dei caratteri che prendono gli spazi chiusi 
echo strlen($text);
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
    <p>
        <!-- stampo a schermo tramite l'echo -->
         <?php echo $text ?>
    </p>
</body>
</html>