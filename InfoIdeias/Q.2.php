<!DOCTYPE html>

<?php 
    if($_POST){
?>
        &nbsp;<h3>Array dos números primos: &nbsp;</h3>
        <?php

        ////////////////// A FUNÇÂO //////////////////
            function Primos($inicial,$final){
                $primo=0;
                $tem_primo = 0; 
                for($i=$inicial+1; $i<=$final-1;$i++){
                    $primo=0;
                    for ($x = 1; $x <=$i; $x++) {
                        if($i % $x == 0){
                        $primo++;
                        }
                    }
                    if($primo==2){ 
                        $array[]=$i; // Este será o array com os números primos 
                        $tem_primo = 1;
                    }
                }
                if($tem_primo == 0){
                    return "Nao possui primos no intervalo";
                }

                // return $array; //para retornar a Array
                
                /////////// Imprimindo: ////////////////
                $imprimir = "Array [";
                for ($a = 0; $a < count($array); $a++) {
                    $imprimir = $imprimir.$array[$a]; // Imprime o valor de cada posição do array com os números primos
                    if(count($array)>1 && ($a<count($array)-1)){
                        $imprimir = $imprimir.",";
                    }
                }
                return $imprimir."]"; // para imprimir com texto
            }
        ////////////////// FIM DA FUNÇÂO //////////////////

        echo Primos($_POST["inicial"],$_POST["final"]); 
    } else{ 
?>

<h3>Intervalo de numeros, verificando quais são primos </h3>

<form method="POST" action="Q.2.php">
    <p>Número Inicial: <input type=text name="inicial"></p>
    <p>Número Final: <input type=text name="final"></p>
    <input type="submit" value="Enviar">
</form>
<?php 
    }    
?>