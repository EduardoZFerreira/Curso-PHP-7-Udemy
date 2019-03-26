<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Diretor comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    // Diretor comercial
                    array(
                        'nome_cargo' => 'Gerente Comercial',                        
                    )
                )
            ),
            // Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Diretor comercial
                    array(
                        'nome_cargo' => 'Gerente Financeiro',
                        'subordinados' => array(
                            // Diretor comercial
                            array(
                                'nome_cargo' => 'Assistente Financeiro',                        
                            )
                        )                   
                    )
                )
            )
        )
    ),
);

function Exibe($cargos)
{
    $html = "<ul>";

    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= Exibe($cargo['subordinados']);
        }
        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo Exibe($hierarquia);