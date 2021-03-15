<?php
$Capital = $_POST['Valor'];
$Parc =$_POST['Parc'];
if($Parc == 0){ 
    $Parc = 1;
}
$tx  = (3.5/100);
$M = 0;
$ValParc = 0;
if($Capital == 'Escolha Uma'){
    echo "<h1> OPÇÃO INVALIDA, TENTE NOVAMENTE.";
    include("/var/www/html/PHP/SimEmp/simulador.php");
    }
    else{ 
        // calculo do montante M= C *(1+tx)**Parc.
$M = ($Capital*((1+$tx)**$Parc));
$ValParc = $M/$Parc;
$tx=($tx*100);
//Resumo da Simulação
echo "<h1> RESUMO DA SIMULAÇAO :  </h1><br><br>";
echo "<b>Total R$ :</b>".$M."<br><br>";
echo " <b>Valor Por Parcela : </b>".$ValParc." <br> Em : ".$Parc." Vezes<br><br>";
echo " Taxa de serviço : ".$tx."<br><br>";
    }
?>
<html>
<br>
<a href = "/PHP/SimEmp/index.html"> <h2> <img src="/PHP/SGN_03_11_2021_1615491271859.png" width="100" height="100"> Voltar</h2></a>
</html>
