<?php
function upper ($str) {
$LATIN_UC_CHARS = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝ°°ª";
$LATIN_LC_CHARS = "àáâãäåæçèéêëìíîïðñòóôõöøùúûüý°ºª";
$str = strtr ($str, $LATIN_LC_CHARS, $LATIN_UC_CHARS);
$str = strtoupper($str);
return $str;
}
?>