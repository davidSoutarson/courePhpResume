<?php
require 'E:\wamp64\www\courePhpResume\app\root.php';
require 'E:\wamp64\www\courePhpResume\vue\nenu.php';
#teste
echo "<h2> #teste fichier ROOT </h2>";

echo "<p> HOME =" . HOME . "</p>";
echo '<p> <a href="' . HOME . '"> home </a> </p>';

echo "<p> RETOUR =" . RETOUR . "</p>";
echo '<p> <a href="' . RETOUR . '"> retour </a> </p>';

//no
define('FICHIER', dirname(dirname(__FILE__)));
define('FICHIER2', basename(__FILE__));
define('FICHIER3',  __FILE__);
define('FICHIER4', dirname(__FILE__));
echo '<br> <a href= "' . FICHIER . '"> pas?male </a>';
echo '<br> <a href= "' . FICHIER2 . '"> pas?male </a>';
echo '<br> <a href= "' . FICHIER3 . '"> pas?male </a>';
echo '<br> <a href= "' . FICHIER4 . '"> pas?male </a>';

echo "<hr> Page <hr>";

echo '<a href="' . GO_INDEX . '"> chiemin vers index </a> <br>';
echo '<a href="' . PAGE . '"> chiemin vuePage </a> <br>';
echo '<a href="' . ALER_PAGE . '"> chiemin vers Page?</a> <br>';
echo '<a href="' . PAGE2 . '"> chiemin vers vuePage2</a> <br>';
echo '<a href="' . ALER_PAGE2 . '"> chiemin vers Page2</a> <br>';

echo '<p><a href="' . HOME . '"> ?Acceuil? </a> </p>';

echo '<p><a href="' . RETOUR . '"> OH? Acceuil? </a> </p>';

?>

<h1>aficher le menu Par tout:: PAGE </h1>
<?php
require 'E:\wamp64\www\courePhpResume\vue\nenu.php';
?>