<?php
$espe =  array("nome","poder","grupo");
$mutantes = array("nome"=>" Henry \"Hank\" McCoy","poder"=>" Força & resistencia","grupo"=>" X-men");
foreach ($mutantes as $espe => $val) {
		echo $espe.":".$val."<hr>";
}
//array multidimencional
$mutantes = array(
	"nome"=>array( "magneto", "mercurio","professor X","noturno"),
	"habilidade" => array("magnetismo", "velocidade", "telecinese", "teletransporte"),
	"grupo" => array("Irmandade","X-men","X-men"));
