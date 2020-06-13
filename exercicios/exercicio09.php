<?php
/*
09)​ Construa uma função para um sistema de notas de uma instituição que 
possui a seguinte política de classificação: Todo aluno recebe uma nota de 0 a 100. 
Alunos com nota abaixo de 40 são reprovados. As notas possuem a seguinte regra de arredondamento: 
Se a diferença entre a nota e o próximo múltiplo de 5 for menor que 3, 
arredondar a nota para esse próximo múltiplo de 5. Se a nota for abaixo de 38, 
não é feito nenhum arredondamento pois esta nota resulta na reprovação do aluno. 
Por exemplo, a nota 84 será arredondada para 85, mas a nota 29 não será arredondada por ser abaixo de 40 
e não ser possível arredondamento eficiente, ou seja, 
que evite a reprovação do aluno. No caso de a nota ser 38, 
o arredondamento é possível pois atingirá 40 e o aluno será aprovado.
*/
function gerarNotas(){
    $notas = array();
    for($i = 0; $i < 20; $i++){
        $notas[$i] = rand(0, 100);
        echo "Nota: " . $notas[$i] . "<br>";
    }
    return $notas;
}

function arredondarNota(){
    $n = gerarNotas();
    echo "<br> <br>";
    foreach($n as $index => $nota){

        if($nota % 5 != 0){

            if(($nota+1) % 5 == 0 && $nota+1 >= 40){
                echo "Nota alterada +1 <br>";
                echo "Nota original ->>>" . $nota ."<br>";

                $nota += 1;
                $n[$index] = $nota;

                echo "Nota arredondada --> " . $nota . "<br>";
                echo "Nota dentro do arry => " . $n[$index] . "<br><br>";

            }else if(($nota+2) % 5 == 0 && $nota+2 >= 40){
                echo "Nota alterada +2 <br>";
                echo "Nota original ->>>" . $nota ."<br>";

                $nota += 2;
                $n[$index] = $nota;
                
                echo "Nota arredondada --> " . $nota . "<br>";
                echo "Nota dentro do arry => " . $n[$index] . "<br> <br>";
            }else{

            }
        }
    }



}

gerarNotas(); 
echo "<br> <br>";
arredondarNota();
?>