<?php
function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(4, 5, 5);	

?>