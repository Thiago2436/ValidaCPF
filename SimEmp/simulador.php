<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador</title>
</head>
<body>
    <h1> Simulador </h1>
    
<form method="POST" action=" Juros.php">
    <h2>Digite o Valor: </h2>
    Valor: R$ : <select name=" Valor" required>
                <option> Escolha Uma </option>
                <option> 1000 </option>
                <option> 1500 </option>
                <option> 2000 </option>
                <option> 2500 </option>
                <option> 3000 </option>
                <option> 4000 </option>
                <option> 5000 </option>
                </select><br>
     Quantidade De Parcelas:<input type="number" name ="Parc" required>           
    <input type="submit" value=" SIMULAR E CONTRATAR" >
    <br>
    <input type="reset" value=" Limpar ">
    <br>
    <p> * Taxa de 3,5% a.m. </p>
    <p> * Valores acima de R$ 5000 sujeito a analise presencial de documentos. </p>
    <p> * Credito sujeito a alteração sem aviso prévio. </p>
</form>
</body>
</html>
