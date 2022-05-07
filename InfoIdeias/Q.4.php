<!DOCTYPE html>
<?php
  function SequenciaCrescente($array, $deletado) { 
    for ($i = 1; $i < count($array); $i++){
      if ($array[$i - 1] >= $array[$i]){
        if($deletado=="true"){ 
          return "false";
        }
        $arrayaux = $array;
        unset($arrayaux[$i - 1]);
        $deletado="true";
        $arrayaux = array_values($arrayaux); //pondo as posições/chaves em ordem 
        $retorno = SequenciaCrescente($arrayaux, $deletado);
        if($retorno=="false"){
          $arrayaux = $array;
          unset($arrayaux[$i]);
          $deletado="true";    
          $arrayaux = array_values($arrayaux); //pondo as posições/chaves em ordem
          $retornoaux = SequenciaCrescente($arrayaux, $deletado);
          if($retornoaux=="false"){
            return "false";
          }
        }
        $duplicados = array_unique( array_diff_assoc($arrayaux, array_unique($arrayaux)));
        if(!empty($duplicados)){
         return "false";
        }else{
          return "true";
        }       
      }
    }
    return "true";
  }
  for($i=0; $i<rand(1, 10); $i++){
    $array[]=rand(-17, 123);
  }
  $resposta = SequenciaCrescente($array,"false");
  echo "Array = [";
  for($x=0; $x<count($array); $x++){
    echo $array[$x];
    if($x<count($array)-1){
      echo ",";
    }
  }
  echo "] ".$resposta;
?>