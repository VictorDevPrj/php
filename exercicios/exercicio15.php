<?php

/*
15) ​Um homem decidiu ir à uma revenda comprar um 
carro. Ele deseja comprar um carro hatch, 
e a revenda possui, além de carros hatch, sedans,
 motocicletas e caminhonetes. 
Utilizando uma estrutura switch, caso o comprador 
queira o hatch, retorne: 
“Compra efetuada com sucesso”. Nas outras opções, 
retorne: “Tem certeza que não prefere este modelo?”. 
Caso seja especificado um modelo que não está
disponível, retorne no console:
“Não trabalhamos com este 
tipo de automóvel aqui”. 
*/

// echo htmlspecialchars($_POST['tName']);

$modelo = $_POST['tName'];
$opc = 1;

if($modelo == "hatch"){
    $opc = 0;
}else if($modelo == "sedans"){
    $opc = 1;
}else if($modelo == "motocicletas"){
    $opc = 2;
}else if($modelo == "caminhonetes"){
    $opc = 3;
}else{
    $opc = 4;
}

function escolha(){
    $html = "";
    //----------------
    $html .= "<form method='get'>";
    $html .= "<select name='tMod' id='cMod'>";
    $html .= "<option name='tEsc' value='hatch'>Hatch</option>";
    $html .= "<option name='tEsc' value='sedans'>Sedan</option>";
    $html .= "<option name='tEsc' value='motocicleta'>Motocicleta</option>";
    $html .= "<option name='tEsc' value='caminhonetes'>Caminhonetes</option;>";
    $html .= "</select>";
    $html .= "<input type='submit' name='tEnviar' id='cEnviar' value='Enviar'/>";
    $html .= "</form>";

    return $html;
}

function exibir(){
    $novo = escolha();
    echo $novo;

    if(isset(S == 'hatch'){
        return 'Boa escolha pelo hatch';
    }

}

switch($opc){
    case 0:
        echo "Compra efetuada com sucesso";
    break;
    case 1:
        echo "Tem certeza ? Não quer escolher outro modelo?";
        exibir();
    break;
    case 2:
        echo "Tem certeza ? Não quer escolher outro modelo?";
    break;
    case 3:
        echo "Tem certeza ? Não quer escolher outro modelo?";
    break;
    default:
        echo "Não trabalhamos com este modelo!!";
    break;
}

?>