<!DOCTYPE html>
<?php
        function isCpf($cpf){
    //limpando CPF para q so venha numeros.
    $cpf = preg_replace('/[^0-9]/','',$cpf);
    
    // Algoritimo de validação
    $DigitoUm = 0;
    $DigitoDois = 0;

    for ($i = 0, $x = 10; $i <=8; $i++, $x--){
    $DigitoUm += $cpf[$i] *$x;
    }

    for($i =0, $x =11; $i <= 9; $i++, $x--){
        if( str_repeat($i,11) == $cpf){
            return false;
            echo " INVALIDO: todos os digitos iguais";
            break;
            
        }
        $DigitoDois += $cpf[$i] * $x;
    }
    
    // Calculo para Validar.
    $CalculoUm = (($DigitoUm%11)<2) ? 0 : 11-($DigitoUm%11);
    $CalculoDois =  (($DigitoDois%11)<2) ? 0 : 11-($DigitoDois%11);
    
    if( $CalculoUm <> $cpf[9]|| $CalculoDois <> $cpf[10]){
        return false;
            }
        return true;
    }//fim da funçao
    $cpf = $_POST['cpf'];
    $nome =$_POST['Nome'];
    if(isCpf($cpf)){// Caso Positivo abre.
           include("/var/www/html/PHP/SimEmp/simulador.php");
       }else {//tela de erro
            echo "<h1> :( ! OPS, : DESCULPE ALGO DEU ERRADO..</h1> <br>";
            echo $nome." <br> Dei uma boa olhada seu cpf: ".$cpf. 
            " <br>* ESTA INCORRETO * <br> Tenta novamente, Revise os numeros.
            <br> Pode digitar Ponto(.) ou (-) Traço eu entendo tudo certinho";
       }
?>
<html>
    <br>
    <br>
    
    <a href = "/PHP/SimEmp/index.html"> <h2> <img src="/PHP/SGN_03_11_2021_1615491271859.png" width="100" height="100"> Voltar</h2></a>
</html>
