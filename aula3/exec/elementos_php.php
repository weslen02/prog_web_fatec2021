<?php

$email = $_POST["email"];
$password = $_POST["password"];
$myTextArea = $_POST["myTextArea"];

// se não tiver valor causa erro, pois é nulo
$mychecks = $_POST["myCheckboxn"];
$myCheckboxn = "";
// se tiver valor faço a condição do foreach
if (is_array($mychecks)) {
    foreach ($mychecks as $n_checkbox) {
        $myCheckboxn .= $n_checkbox . " ";
    }
}

// outro meio de fazer o foreach
$myRadios = "";
foreach ($_POST["myRadios"] as $radios) {
    $myRadios .= $radios . " ";
}

$myUnitSelect = "";
foreach ($_POST["myUnitSelect"] as $unitSelect) {
    $myUnitSelect .= $unitSelect . " ";
}

$myMultSelect = "";
foreach ($_POST["myMultSelect"] as $multSelect) {
    $myMultSelect .= $multSelect . " ";
}



echo "<p>Email = {$email}</p>";
echo "<p>password = {$password}</p>";
echo "<p>Text = {$myTextArea}</p>";
echo "<p>Checkbox = {$myCheckboxn}</p>";
echo "<p>Radios = {$myRadios}</p>";
echo "<p>Unit Select = {$myUnitSelect}</p>";
echo "<p>Mult Select = {$myMultSelect}</p>";
