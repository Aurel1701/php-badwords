<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
// creo una variabile con lorem 
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid?';
// tramite sterl mi darà la lunghezza dei caratteri che prendono gli spazi chiusi 
echo strlen($text);
// gli passo la parola che decido di censurare con $_GET
$censured = $_GET['Lorem'];

$new_text = (str_replace($censured, '***', $text));

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
         <?php echo $text; ?>
    </p>

    <p>

    <?php echo $new_text;
    echo strlen($new_text);  ?>
    <!-- nuova lunghezza del paragrafo -->
    
    </p>
</body>
</html>