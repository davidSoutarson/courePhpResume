<?php
require 'E:\wamp64\www\courePhpResume\app\root.php';

require 'E:\wamp64\www\courePhpResume\vue\nenu.php';
# sintax de basse php

#l'échappement de caractères avec \antislash
echo 'PAGE INDEX ';

echo "<p> OU PHP c'est sympas ! </p>";

# les variable est constant

$premierJour = "lundi";



/*
une constante

Une constante est donc une valeur définie de façon permanente et dans 
certains cas il peut être envisagé d’utiliser une constante plutôt qu’une 
variable car nous venons de voir qu’une variable pouvait être aisément 
modifiée ce qui n’est pas le cas d’une constante.
*/

define('PAYS', 'France');

echo "<p> Afichage d'une constante et d'une varible sympas ! </p>";

echo "<p> Nous somme en " . PAYS . " le premier jour de la semaine et le:" . $premierJour . ".comme partou .</p>";

$sport = "basket";
echo 'Nous pratiquons le ' . $sport;

$saison = 'automne';
echo '<p>Les feulles tombe en <strong>' . $saison . '</strong> </p>';

$frist = 'Hello';
$segond = 'World!';

echo $frist . $segond . "<br>";

echo '<p> EXEMPLE DE CONSTANTES (definie dans root.php) CHEMIN NIVEAU 1 </p>';

echo HOME;
echo '<p><a href="' . HOME . '"> Acceuil </a> </p>';

echo PAGE2;
echo "</p> <a href='" . PAGE2 . "'> GO page2 : </a> </p>";

echo PAGE;
echo "</p> <a href='" . PAGE . "'> GO page : </a> </p>";


echo "<hr>";

var_dump($_SERVER);

echo "<hr>";
?>
<h1>jouons acvec la varile $_SERVER :</h1>
<?php
$test01 = $_SERVER['HTTP_HOST'];
//$test02 = $_SERVER['HTTP_REFERER'];

$test03 = $_SERVER['SERVER_NAME'];

$test04 = $_SERVER['REQUEST_URI'];
$test05 = $_SERVER['SCRIPT_NAME'];
$test06 = $_SERVER['PHP_SELF'];

$test07 = $_SERVER['REQUEST_METHOD'];

$test08 = $_SERVER['REQUEST_TIME'];

$test09 = $_SERVER['REQUEST_SCHEME'];

echo "<p>Afiche: \$_SERVER['HTTP_HOST'] </p>";
echo "<p>" . $test01 . "</p>";

//echo "<p>Afiche: \$_SERVER['HTTP_REFERER'] </p>";
//echo "<p>" . $test02 . "</p>";

echo "<p>Afiche: \$_SERVER['SERVER_NAME'] </p>";
echo "<p>" . $test03 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_URI'] </p>";
echo "<p>" . $test04 . "</p>";
echo "<p>Afiche: \$_SERVER['SCRIPT_NAME'] </p>";
echo "<p>" . $test05 . "</p>";
echo "<p>Afiche: \$_SERVER['PHP_SELF'] </p>";
echo "<p>" . $test06 . "</p>";

echo "<p>trois candia me semble prometeur,\$_SERVER['REQUEST_URI'], \$_SERVER['SCRIPT_NAME'] et \$_SERVER['PHP_SELF'] </p>";

echo "<p>Afiche: \$_SERVER['REQUEST_METHOD'] </p>";
echo "<p>" . $test07 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_TIME'] </p>";
echo "<p>" . $test08 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_SCHEME'] </p>";
echo "<p>" . $test09 . "</p>";

echo "<hr> <h2>Trois candia prometeur: </h2> 
<p>\$_SERVER['REQUEST_URI'], \$_SERVER['SCRIPT_NAME'] et \$_SERVER['PHP_SELF'] </p>";

$autoR1 = $_SERVER['SCRIPT_NAME'];

$autoR2 = __FILE__;

echo "<h3>" . $autoR1 . "</h3>";
echo "<h3>" . $autoR2 . "</h3>";


$bar1 = dirname('//');
$bar2 = dirname('/a/b');
$bar3 = dirname('a');
$bar4 = dirname('a/b');

echo "<p> 1 : " . $bar1 . "</p>";
echo "<p> 2 : " . $bar2 . "</p>";
echo "<p> 3 : " . $bar3 . "</p>";
echo "<p> 4 : " . $bar4 . "</p>";

echo "<hr> <p>cool basename </p>";

$base1 = basename($autoR1);
$base2 = basename($autoR2);

echo "<h3>" . $base1 . "</h3>";
echo "<h3>" . $base1 . "</h3>";

echo $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . "/" . basename($_SERVER['SCRIPT_NAME']);

$routeIndex = $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . "/" . basename($_SERVER['SCRIPT_NAME']);

echo "<h4> !( " . $routeIndex . "</h4>";

echo '<a href="' . $routeIndex . '"> chiemin vers ??</a>';

echo "<hr> index <hr>";

echo '<a href="' . GO_INDEX . '"> chiemin vers index </a> <br>';
echo '<a href="' . PAGE . '"> chiemin vuePage </a> <br>';
echo '<a href="' . ALER_PAGE . '"> chiemin vers Page?</a> <br>';
echo '<a href="' . PAGE2 . '"> chiemin vers vuePage2</a> <br>';
echo '<a href="' . ALER_PAGE2 . '"> chiemin vers Page2</a> <br>';

echo '<p><a href="' . HOME . '"> ?Acceuil? </a> </p>';

echo '<p><a href="' . RETOUR . '"> OH? Acceuil? </a> </p>';


echo "<hr> <p>Les conditions, les opérateurs et les boucles</p>";

?>

<h3>Les condition</h3>

<p> pour ilutre cette exerciser je vai utililesr l' $heure et $heureComplette </p>

<?php
date_default_timezone_set('Europe/Paris');
$date_et_heure = date('d/m/Y H:i:s');
$heureComplette = date('H:i:s');
$heure = date('H');

echo '<p> Afichie la date et l\'heure actuele :' . $date_et_heure . '</p>';
echo '<p> Afichie leure actuele :' . $heure . ' Heure </p>';
echo '<p> Afichie leure actuele Heure Complette:' . $heureComplette . ' heure:minute:seconde </p>';

?>

<p> if,else</p>

<p> if : sinifie si ; else : sinon</p>

<p> AND qui permet de vérifier cette double condition :</p>


<p> if ( ($varible > 10) AND ($varible < 15) ) <br>
        { <br>
        echo 'la varile est superieure a 10 et inférieur a 15'; <br>
        }<br>
        else{<br>
        echo 'La varible tester ne corespon pas a la contion'
        }
</p>

<p> elseif : sinon si </p>

<h3> Un cas pratique avec notre varible $heure </h3>

<ul>
    <li> if ($heure < 12) and ($heure !=0): le mesage afichier : Bonjour: Nous somme le matin! </li>
    <li>elseif ($heure == 12) le mesage afichier : Il est Midi</li>
    <li> elseif (($heure > 12) and ($heure <= 17)) le mesage afichier : Bonne Après Midi: Nous somme l'Après Midi! </li>
    <li> elseif (($heure > 17) and ($heure <= 23)) le mesage afichier : Bonne soirer: Nous somme le Soire! </li>
    <li> else le mesage afichier: Il est:" . $heureComplette; </li>
</ul>
<?php

if (($heure < 12) and ($heure != 0)) {
    echo
    "Bonjour: Nous somme le matin!" . $heureComplette;
} elseif ($heure == 12) {
    echo "Il est MIDI " . $heureComplette;
} elseif (($heure > 12) and ($heure <= 17)) {
    echo "Bonne Après Midi: Nous somme l'Après Midi!" . $heureComplette;
} elseif (($heure > 17) and ($heure <= 23)) {
    echo "Bonne Soire: Nous somme le Soire! " . $heureComplette;
} else {
    echo "il est:" . $heureComplette;
}
?>
<h1>aficher le menu Par tout :: index </h1>
<?php
require 'E:\wamp64\www\courePhpResume\vue\nenu.php';
?>