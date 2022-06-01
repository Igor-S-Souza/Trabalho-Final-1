<?php 
$n1 = $_POST['n1'];
$sinal = $_POST['sinal'];
$n2 = $_POST['n2'];

function calcula($n1,$sinal,$n2){
	if ($sinal == '-') {
		return ($n1 - $n2);
	}
	elseif ($sinal == '+') {
		return $n1 - $n2;
	}
	elseif ($sinal == '*') {
		return ($n1 * $n2);
	}
	elseif ($sinal == '/') {
		return $n1 / $n2;
	}
	else{
		return 'erro sinal';
	};

};
 echo calcula($n1,$sinal,$n2);
 ?>