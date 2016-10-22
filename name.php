
<?php

if (isset($_REQUEST["letter"])) {
    $letter = $_REQUEST["letter"];
    var_dump($letter);
    $hint = "";
    if ($letter !== "") {

        $hint = $letter;
    }

    echo $hint === "" ? "no suggestion" : $hint;
}