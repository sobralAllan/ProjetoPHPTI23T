<?php
    namespace Projeto\ti23t\telas;
    include('cabecalho.php');
    require_once('../php/funcoes.php'); //Acessando o arquivo
    use Projeto\ti23t\php\Funcao; //Acessando a classe que está no arquivo funcoes.php
    $funcao = new Funcao();//Construtor da classe funcao ->Conectando a INDEX E FUNCOES
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#8affb0;padding:5%;">
        <H1>IMC</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o seu peso: </label>
            <input type="text" class="form-control" id="peso" name="peso">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe a sua altura: </label>
            <input type="text" class="form-control" id="altura" name="altura">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
             <?php 
                if(isset($_POST['peso']) || isset($_POST['altura'])){
                    $peso = (float)$_POST['peso'];
                    $altura = (float)$_POST['altura'];
                    //Chamo a variável que representa a classe Funcao
                    $resultado = $funcao->calcularImc($peso, $altura);
                }
            ?>
        </button>

        <h2>
            <?php 
                if(isset($_POST['peso']) || isset($_POST['altura'])){
                    echo $resultado;
                }else{
                    echo "Preencha os campos!";
                }
            ?>  
        </h2>  
    </form>
</body>
</html>
