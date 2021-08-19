<?php
$espe =  array("nome","poder","grupo");
$mutantes = array("nome"=>" Henry \"Hank\" McCoy","poder"=>" Força & resistencia","grupo"=>" X-men");
foreach ($mutantes as $espe => $val) {
		echo $espe.":".$val."<hr>";
}
