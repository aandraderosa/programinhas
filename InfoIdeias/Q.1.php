<!DOCTYPE html>

<?php 
    if($_POST){
?>
        &nbsp;<h3>O século é: &nbsp;
<?php
        ////////////////// A FUNÇÂO //////////////////
            function SeculoAno($ano){
                $aux=$ano/100;
                $aux2= gettype($aux);
                if ($aux2=="double"){
                    return intval($aux)+1;
                }
                else{
                    return $aux; 
                }
            } 
        ////////////////// FIM DA FUNÇÂO //////////////////
        echo SeculoAno($_POST["valor"]); 
        ?>
        </h3>
    <?php
    } else{ 
?>

<h3>Digite o ano para verificar o seu século <br> <sub> - Verifica do século 1 ao infinito -</sub></h3>

<form method="POST" action="Q.1.php">
    <input type=text name="valor">
    <input type="submit" value="Enviar">
</form>
<?php 
    }    
?>