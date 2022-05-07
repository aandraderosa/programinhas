<!DOCTYPE html>
<?php 
  for($i=0; $i<20; $i++){
    $array[]=rand(1, 10);
  }
  //imprimindo os números sorteados
  echo "Array sorteado = [";

  for($x=0; $x<count($array); $x++){
    echo $array[$x];
    if($x<count($array)-1){
      echo ",";
    }
  }
  echo "]";
?>
<br>
<?php
  //pegando os duplicados
  function duplicados($array_numeros) {
    return array_unique( array_diff_assoc($array_numeros, array_unique($array_numeros)));
  }
  $duplicados = duplicados($array);
  //excluindo os duplicados
  $resultado = array_diff($array, $duplicados);
  $posionados = array_values($resultado); //pondo as posições/chaves em ordem 
  //Imprimindo os números que não se repetem
  echo " Os números que não se repetem são: ";
  for($y=0; $y< count($posionados); $y++){
    echo $posionados[$y];
    if($y<count($posionados)-2){
      echo ", ";
    }
    if($y==count($posionados)-2){
      echo " e ";
    }
  }
?>