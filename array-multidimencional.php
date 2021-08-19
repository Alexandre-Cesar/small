<?php 
$mutantes = array(
	"nome"=>array( "Vilão-Antigo"=>"magneto","Vilão-Novo"=> "mercurio","Heroi-Antigo"=>"professor X","Heroi-Novo"=>"noturno"),
	"habilidade" => array("magnetismo", "velocidade", "telecinese", "teletransporte"),
	"grupo" => array("Irmandade","X-men","X-men"));
foreach ($mutantes["nome"] as $indice => $valor) {
	echo $indice." : ".$valor."<hr>";
}

 ?>