<?php
//criando um array
$cidades =  [

    'SP' => [
        'Presidente Prudente',
        'Rancharia',
        'Iepê',
        'Sao paulo'
    ],
    'PR' => [

        'Maringa',
        'Curitiba',
        'Astorga',
        'Primeiro de Maio'
    ]

    ];

//imprime o JSON com cabeçalho
responseJson($cidades);

//imprime o JSON com cabeçalho no navegador
function responseJson(array $arr){
    header('Content-Type: application/json');
    echo json_encode($arr);

}
?>