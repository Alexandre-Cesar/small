<?php
function conteVogalConsoante($s) {
$inp = ["a","b","c","d","e"];
$vog = ["a","e","i","o","u"];
$con = [""];
$resul= array_intersect_assoc($inp,$vog);

}
echo $resul;
?>