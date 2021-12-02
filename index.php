<?php

$txt = 'To surpass others is fucking tough, if you only do as you are told you don’t have it in you to succeed. If you’re not being fucking honest with yourself how could you ever hope to communicate something meaningful to someone else? Creativity requires fucking tenacity. Most of your accomplishments will be demonstrations of tenacity, not talent. Saul Bass on failure: Failure is built into creativity… the creative act involves this element of ‘newness’ and ‘experimentalism,’ then one must expect and accept the fucking possibility of failure. Widows and orphans are terrible fucking tragedies, both in real life and definitely';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>

    <h1>Write the bad word</h1>
    <p>write the badworld ro make a new kind text </p>
    <p> <?php echo $txt ?></p>
    <p> Numero di parole: <?php echo $txt_word_vounter ?></p>

    <form>
    <label for="badword"> write the badword</label>
    <input type="text" name='badword' id='badword'>
    <input type="submit" value='correggi'>
    </form>

    <p> <?php if ($_GET["badword"]!="") echo str_replace( $_GET["badword"] , "***", $txt);?></p>
    <p> Numero di parole: <?php if ($_GET["badword"]!="") echo str_word_count(str_replace( $_GET["badword"] , "***", $txt)); ?></p>

</body>
</html>