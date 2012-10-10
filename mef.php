<?php
$lineas = file('lineas.txt');
$estado_actual="s0";
$list_vec="";
$list_veca="";
function s0($caracter){	
	if(preg_match("([a-zA-Z])",$caracter)){
		return "s1";
	}elseif(preg_match("([0-9])",$caracter)){
		return "sE";
	}elseif(preg_match("([\[])",$caracter)){
		return "sE";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "s3";
	}elseif(preg_match("([;])",$caracter)){
		return "sE";
	}
}
function s1($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "s1";
	}elseif(preg_match("([0-9])",$caracter)){
		return "s1";
	}elseif(preg_match("([\[])",$caracter)){
		return "s2";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "s3";
	}elseif(preg_match("([;])",$caracter)){
		return "s4";
	}
}
function s2($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "sE";
	}elseif(preg_match("([0-9])",$caracter)){
		return "s5";
	}elseif(preg_match("([\[])",$caracter)){
		return "sE";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "sE";
	}elseif(preg_match("([;])",$caracter)){
		return "sE";
	}
}
function s3($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "s1";
	}elseif(preg_match("([0-9])",$caracter)){
		return "sE";
	}elseif(preg_match("([\[])",$caracter)){
		return "sE";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "sE";
	}elseif(preg_match("([;])",$caracter)){
		return "sE";
	}
}
function s4($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "sE";
	}elseif(preg_match("([0-9])",$caracter)){
		return "sE";
	}elseif(preg_match("([\[])",$caracter)){
		return "sE";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "sE";
	}elseif(preg_match("([;])",$caracter)){
		return "sE";
	}
}
function s5($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "sE";
	}elseif(preg_match("([0-9])",$caracter)){
		return "s5";
	}elseif(preg_match("([\[])",$caracter)){
		return "sE";
	}elseif(preg_match("([\]])",$caracter)){
		return "s6";
	}elseif(preg_match("([,])",$caracter)){
		return "sE";
	}elseif(preg_match("([;])",$caracter)){
		return "sE";
	}
}
function s6($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "sE";
	}elseif(preg_match("([0-9])",$caracter)){
		return "sE";
	}elseif(preg_match("([\[])",$caracter)){
		return "sE";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "s3";
	}elseif(preg_match("([;])",$caracter)){
		return "S4";
	}
}
function sE($caracter){
	if(preg_match("([a-zA-Z])",$caracter)){
		return "s1";
	}elseif(preg_match("([0-9])",$caracter)){
		return "s1";
	}elseif(preg_match("([\[])",$caracter)){
		return "s2";
	}elseif(preg_match("([\]])",$caracter)){
		return "sE";
	}elseif(preg_match("([,])",$caracter)){
		return "s3";
	}elseif(preg_match("([;])",$caracter)){
		return "s4";
	}
}
foreach ($lineas as $linea){
	echo "Input: $linea";
	for($i=0;$i<strlen($linea);$i++){		
		switch($estado_actual){			
			case "s0":				
				$estado_actual=s0($linea[$i]);
				break;
			case "s1":
				$estado_actual=s1($linea[$i]);
				break;
			case "s2":
				$estado_actual=s2($linea[$i]);
				break;
			case "s3":
				$estado_actual=s3($linea[$i]);
				break;
			case "s4":
				$estado_actual=s4($linea[$i]);
				break;
			case "s5":
				$estado_actual=s5($linea[$i]);				
				break;
			case "s6":
				$estado_actual=s6($linea[$i]);				
				break;
			case "sE":
				$estado_actual=sE($linea[$i]);				
				break;
		}
		$list_vec.=$linea[$i];
		if($estado_actual=="s6"){
			$list_veca.=$list_vec.",";
		}elseif($linea[$i]==","){
			$list_vec="";
		}
	}
}
echo "Output: $list_veca\n";
?>