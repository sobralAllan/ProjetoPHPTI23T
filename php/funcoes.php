<?php
    namespace Projeto\ti23t\php;

    class Funcao{
        //Encapsulamento = EVITARRRRRR que outras classes do projeto acessem diretamente as suas variáveis
        private int $num1; 
        private int $num2;
        private int $resultado;

        //Construtor = Instancia as variáveis = Dar Valores Iniciais
        public function __construct(){
            $this->resultado = 0;
        }//fim do construtor

        public function coletar(int $num1, int $num2){
            $this->num1      = $num1;
            $this->num2      = $num2;
        }//fim do coletar

        //Métodos modificadores(SET) e acesso(GET)
        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        //Métodos - somar, subtrair, multiplicar, dividir
        public function somar(){
            //Usando a função SET
            $this->resultado = $this->num1 + $this->num2;
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//fim do método somar

        public function subtrair(){
            $this->resultado = $this->num1 - $this->num2;
            return "<br>A subtração do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//fim do método subtrair

        public function multiplicar(){
            $this->resultado = $this->num1 * $this->num2;
            return "<br>A Multiplicação do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//fim do multiplicar

        public function dividir(){
            if($this->num2 <= 0){
                return "Impossível dividir por zero";
            }else{
                $this->resultado = $this->num1 / $this->num2;
            }
            return "<br>A divisão do $this->num1 e do $this->num2 é: $this->resultado<br>";
        }//fim do dividir

        public function bhaskara(int $a, int $b, int $c){
            $delta = pow($b,2) - 4 * $a * $c;
            if($delta < 0){
                return "Impossível calcular X1 e X2 de delta negativo, valor do delta: $delta";
            }else{
                $x1 = (-$b + sqrt($delta))/(2 * $a); 
                $x2 = (-$b - sqrt($delta))/(2 * $a);
                return "<br>Delta: $delta<br>X1: $x1<br>X2: $x2";
            }
        }//fim do bhaskara

        public function calcularImc(float $peso, float $altura){
            $imc = 0;//Instanciando a variável
            if($peso <= 0 || $altura <= 0){
                return "Peso ou altura não estão corretos, informe um valor maior que zero!";
            }else{
                $imc = $peso / ($altura^2);
                if($imc <= 18.5){
                    return "Abaixo do peso normal, seu IMC é: ".$imc;
                }else if($imc > 18.5 && $imc <= 24.9){
                    return "Peso normal, seu IMC é: ".$imc;
                }else if($imc > 24.9 && $imc < 29.9){
                    return "Excesso de peso, seu IMC é: ".$imc;
                }else if($imc > 29.9 && $imc <= 34.9){
                    return "Obesidade Classe I ".$imc;
                }else{
                    return "Obsesidade Classe II".$imc;
                }//fim do if de classificação
            }//fim do if...else de validação
        }//fim do método
        
        
    }//fim da classe função
?><!-- Fechamento da TAG PHP -->

