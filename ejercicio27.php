<?php
$nota=4;
if($nota>=0 && $nota<5){
	echo "un $nota es un suspenso";
}elseif($nota>=5 && $nota<7){
	echo "un $nota es un aprobado";
}elseif($nota>=7 && $nota<9){
	echo "un $nota es un notable";
}elseif($nota>=9 && $nota<10){
	echo "un $nota es un sobresaliente";
}elseif($nota==10){
	echo "Un $nota es una matricula de honor";
}

?>