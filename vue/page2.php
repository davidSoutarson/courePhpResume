<?php
require 'E:\wamp64\www\courePhpResume\app\root.php';
require 'E:\wamp64\www\courePhpResume\vue\nenu.php';

echo "PAGE 2";

var_dump($_SERVER);

echo "<hr>";
?>
<h1>jouons acvec la varile $_SERVER :</h1>
<?php
$test01 = $_SERVER['HTTP_HOST'];
$test02 = $_SERVER['HTTP_REFERER'];

$test03 = $_SERVER['SERVER_NAME'];

$test04 = $_SERVER['REQUEST_URI'];
$test05 = $_SERVER['SCRIPT_NAME'];
$test06 = $_SERVER['PHP_SELF'];

$test07 = $_SERVER['REQUEST_METHOD'];

$test07 = $_SERVER['REQUEST_METHOD'];

$test08 = $_SERVER['REQUEST_TIME'];

$test09 = $_SERVER['REQUEST_SCHEME'];

echo "<p>Afiche: \$_SERVER['HTTP_HOST'] </p>";
echo "<p>" . $test01 . "</p>";
echo "<p>Afiche: \$_SERVER['HTTP_REFERER'] </p>";
echo "<p>" . $test02 . "</p>";

echo "<p>Afiche: \$_SERVER['SERVER_NAME'] </p>";
echo "<p>" . $test03 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_URI'] </p>";
echo "<p>" . $test04 . "</p>";
echo "<p>Afiche: \$_SERVER['SCRIPT_NAME'] </p>";
echo "<p>" . $test05 . "</p>";
echo "<p>Afiche: \$_SERVER['PHP_SELF'] </p>";
echo "<p>" . $test06 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_METHOD'] </p>";
echo "<p>" . $test07 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_TIME'] </p>";
echo "<p>" . $test08 . "</p>";

echo "<p>Afiche: \$_SERVER['REQUEST_SCHEME'] </p>";
echo "<p>" . $test09 . "</p>";

echo "<hr> <p>cool basename </p>";

echo $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . "/" . basename($_SERVER['SCRIPT_NAME']);

$routePage = $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . "/" . basename($_SERVER['SCRIPT_NAME']);

$routeIndex0 = $_SERVER['SERVER_NAME'] . "*" . $_SERVER['SCRIPT_NAME'] . "*" . "/index.php";
$routeIndex1 = $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME'], 2) . "/index.php";
$routeIndex2 = $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . "/index.php";
$routeIndex = $_SERVER['SERVER_NAME'] . basename($_SERVER['SCRIPT_NAME']) . "/index.php";
echo "<h4> !( " . $routePage . "</h4>";

echo "<h4> index0 :( " . $routeIndex0 . "</h4>";
echo "<h4> index1 :( " . $routeIndex1 . "</h4>";
echo "<h4> index2 :( " . $routeIndex2 . "</h4>";
echo "<h4> index :( " . $routeIndex . "</h4>";

?>
<h1>aficher le menu Par tout :: PAGE2 </h1>
<?php
require 'E:\wamp64\www\courePhpResume\vue\nenu.php';
?>