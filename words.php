<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Ricevo la frase dal form
    $words = $_GET["words"];
    // Conto le parole nella frase
    $word_count = str_word_count($words);
    // TEST Stampo la frase originale
    //echo "La frase inserita è: {$words}. La frase contiene: {$word_count} parole";

    // Ricevo la parola che voglio sostiuire
    $to_replace = $_GET["to-replace"];
    // Ricevo la parola sostitutiva
    $replacement = $_GET["replacement"];

    // Conto quante volte viene trovata la parola
    $occurrencies = substr_count(strtolower($words), strtolower($to_replace));

    // Modifico la frase, sostituendo ogni parola scuola con la parola boolean presenti in $words
    $modifiedWords = str_ireplace($to_replace, $replacement, $words);
    // Conto le parole nella frase
    $modifiedWords_count = str_word_count($modifiedWords);
    // TEST Stampo la frase modificata
    //echo $modifiedWords
    ?>

    <section>
        <h3>La frase inserita è composta da <?php echo $word_count ?> parole.</h3>
        <p><?php echo $words ?></p>
        <hr>
        <h2>Ho trovato <?php echo $occurrencies ?> volte la parola <?php echo $to_replace ?> e l'ho sostituita con <?php echo $replacement ?></h2>
        <h3>La frase modificata è composta da <?php echo $modifiedWords_count ?> parole.</h3>
        <p><?php echo $modifiedWords ?></p>
    </section>

</body>

</html>