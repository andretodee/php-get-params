
<?php
  // Creare una variabile che contiene del testo. Leggere dal parametro in GET una badword da cercare all'interno del testo e censurarla, ossia visualizzare a schermo un paragrafo con all'interno il testo in cui le occorrenze della badword sono sostituite da tre "*".

$badword = $_GET['badword'];

$frase = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$frase_array = explode(' ', $frase);
var_dump($frase_array);

$lunghezza = mb_strlen($frase);


//cerco all'interno di $frase se è contenuta la $badword;
$trova_badword = in_array($badword, $frase_array);
var_dump($trova_badword);


if($trova_badword !== false){
    $frase_sostituita = str_replace($badword, '***', $frase_array);
    echo '<pre>';
    var_dump($frase_sostituita);
    echo '</pre>';
} else {
    echo 'la badword non è presente';
};

$frase_ricomposta = implode(' ', $frase_sostituita);
var_dump($frase_ricomposta);




?>

<!-- <h1>ciao <?php echo $nome ?></h1> -->
