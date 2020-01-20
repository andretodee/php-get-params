
<?php
  // Creare una variabile che contiene del testo. Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla, ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*".

$badword = $_GET['badword'];

$frase = ['pane', 'pasta', 'carote', 'zucchine', 'carne', 'pesce', 'verdure', 'legumi', 'dolci', 'torte', 'tiramisu'];

//cerco all'interno di $frase se è contenuta la $badword;
$trova_badword = in_array($badword, $frase);
var_dump($trova_badword);


if($trova_badword !== false){
    $frase_sostituita = str_replace($badword, '***', $frase);
    echo '<pre>';
    var_dump($frase_sostituita);
    echo '</pre>';
} else {
    echo 'la badword non è presente';
};




?>

<!-- <h1>ciao <?php echo $nome ?></h1> -->
