<?php
/*
16) Utilizando a estrutura do Switch faça um programa que simule uma calculadora básicaO programa recebe
como parâmetros dois valores numéricos e uma string referente à operação e a realize com os valores
numéricos na ordem que foram inseridos. Por exemplo: calculadora (2, ‘+’, 3). A função efetuará a soma de 2 e
3. Dica: Os sinais das operações são: ‘+’. ‘-’, ‘*’ e ‘/’. Crie um caso default para operações inválidas.
*/
    class Calculadora {
        public function calc(){

            # Se for setado algum valor ào submit (tEnviar), executa a operação
            if (isset($_POST['tEnviar'])) {

                $opc = $_POST['tOperacao'];
                $num1 = $_POST['tNum1'];
                $num2 = $_POST['tNum2'];

                # Se a operação for soma (value = soma), então...
                if($opc == "soma") {
                    $resultado = $num1 + $num2;
                    return $resultado;
                }else if($opc == "subtracao"){
                    $resultado = $num1 - $num2;
                    return $resultado;
                }else if($opc == "multiplicacao"){
                    $resultado = $num1 * $num2;
                    return $resultado;
                }else if($opc == "divisao"){
                    $resultado = $num1 / $num2;
                    return $resultado;
                }else{
                    return "OPÇÃO INVALIDA";
                }
            }

        }

        public exibir(){
            
        }
    }

    $calcular = new Calculadora();



?>