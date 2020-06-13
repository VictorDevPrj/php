<?php

$hierarquia = array (
    array(
        'nome_Cargo' => 'CEO',
        'subordinados' => array(
            //iniciio:diretor Comercial
            array(
                'nome_Cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //iniciio:gerente de vendas
                    array(
                        'nome_Cargo' => 'Gerente de Vendas'
                    )
                    //Termino: Gerente vendas
                )
            ),
            //Termino: Diretor Comercial
            //iniciio: Diretor Financeiro
            array(
                'nome_Cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_Cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de Pagamento
                            array(
                                'nome_Cargo' => 'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de Pagamentos
                        )
                     ),
                    //Termino: Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_Cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_Cargo' => 'Supervisor de Suprimentos'
                            )
                            //Termino: Supervisor de Suprimentos
                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Termino: diretor financeiro
        )
    )
);

function exibe($cargos) {
    $html = '<ul>';

    foreach ($cargos as $cargo){
        $html .= "<li>";

        $html .= $cargo['nome_Cargo'];

        if(isset($cargo['subordinados']) && ($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= "</ul>";
    return $html;
}

echo exibe($hierarquia);

?>
