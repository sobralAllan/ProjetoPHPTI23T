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
    <title>Multiplicar</title>
</head>
<body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#8affb0;padding:5%;">
        <H1>Equação de 2º Grau</H1>

        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o valor de A: </label>
            <input type="number" class="form-control" id="valorA" name="valorA">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor de B: </label>
            <input type="number" class="form-control" id="valorB" name="valorB">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o valor de C: </label>
            <input type="number" class="form-control" id="valorC" name="valorC">
        </div>

        <button type="submit" class="btn btn-primary">Calcular
             <?php 
                if(isset($_POST['valorA']) || isset($_POST['valorB']) || isset($_POST['valorC'])){
                    $a = $_POST['valorA'];
                    $b = $_POST['valorB'];
                    $c = $_POST['valorC'];
                    //Chamo a variável que representa a classe Funcao
                    $resultado = $funcao->bhaskara($a, $b, $c);
                }
            ?>
        </button>

        <h2>
            <?php 
                 if(isset($_POST['valorA']) || isset($_POST['valorB']) || isset($_POST['valorC'])){
                    echo $resultado;
                }else{
                    echo "Preencha os campos!";
                }
            ?>  
        </h2>  
    </form>
</body>
</html>
