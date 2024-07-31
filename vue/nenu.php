<h3>MENU </h3>
<p> menu ok</p>
<?php

$teste5 = dirname($_SERVER['SCRIPT_NAME']);
$verif = '/courePhpResume';

if ($teste5 === $verif) {
    echo "<ul>";
    echo "<li><a href='" . dirname($_SERVER['SCRIPT_NAME']) . "'>  index=1   </a> </li>";
    echo '<li><a href="' . PAGE . '"> chiemin vuePage </a> </li>';
    echo '<li><a href="' . PAGE2 . '"> chiemin vers vuePage2</a> </li>';
    echo "<ul>";
} else {
    echo "<ul>";
    echo "<li><a href='" . dirname($_SERVER['SCRIPT_NAME'], 2) . "'>  index=2   </a> </li>";
    echo '<li><a href="' . ALER_PAGE . '"> chiemin vuePage </a> </li>';
    echo '<li><a href="' . ALER_PAGE2 . '"> chiemin vers vuePage2</a> </li>';
    echo "<ul>";
}
?>
<p> menu ok</p>
<hr>
</hr>