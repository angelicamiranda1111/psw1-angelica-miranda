<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays revisao -</h1>

    <h2>arrays como lista ordenada</h2>

    <?php
    $listaordenada = array('carro', 'bike', 'moto');

    echo '<pre>';
    print_r($listaordenada);
    echo '<pre>';

    echo '<h2>arrays como lista ordenada</h2>';

    $listaordenada[] = 'aviao';

    echo '<pre>';
    print_r($listaordenada);
    echo '</pre>';

    echo '<h2>arrays como lista ordenada</h2>';
    $listaordenada[1] = 'caminhao';

    echo '<pre>';
    print_r($listaordenada);
    echo '</pre>';

    echo '<h2>arrays como lista ordenada</h2>';
    $listaordenada[2] = 'motoca';

    echo '<pre>';
    print_r($listaordenada);
    echo '</pre>';

    echo '<h2>arrays como lista ordenada - implicita</h2>';

    $listaordenada = [
        'carro',
        'moto',
        'bike'
    ];

    echo '<pre>';
    print_r($listaordenada);
    echo '</pre>';

    echo '<h2> arrays associativo = key => valor</h2>';

    $arrayAssociativo = [
        0 => 'camisa',
        1 => 'calca',
        2 => 'sapato',
        5 => 'blusa de frio',
        4 => 'moletom'
    ];

    echo '<pre>';
    print_r($arrayAssociativo);
    echo '</pre>';

    echo '<pre>';
    print_r($arrayAssociativo[2]);
    echo '</pre>';

    $arrayAssociativo[2] = 'sapato grande';
    echo '<pre>';
    print_r($arrayAssociativo);
    echo '</pre>';

    $arrayAssociativo[6] = 'colar';
    echo '<pre>';
    print_r($arrayAssociativo);
    echo '</pre>';

    $arrayAssociativo['cpf'] = '111.111.111-11';
    echo '<pre>';
    print_r($arrayAssociativo);
    echo '</pre>';

    echo '<h2> arrays - com varios tipos</h2>';

    $multitipo = [
        1 => 'livro',
        'dois' => 'capitulo',
        3 => '12/02/2023',
        2 => '20',
        'telefone' => '423432432',
        'idade' => '25'
    ];

    echo '<pre>';
    print_r($arrayAssociativo);
    echo '</pre>';

    echo '<h2> arrays multidimensional - com multiplos arrays </h2>';

    $multidimensional = [
        'alunos' => [
            'id' => 1,
            'nome' => 'zeca',
            'endereco' => 'rua x'
        ],
        
        'professores' => [
            'mat' => '3432432',
            'nome' => 'antoi',
            'idade' => 34
        ]
    ];

    echo '<pre>';
    print_r($multidimensional);
    echo '</pre>';

    $multidimensional = [
        'angelica' => [
            'id' => 06313433505,
            'nome' => 'angel',
            'rua' => 'nice rodrigues alves'
        ],

        'rosalia' => [
            'id' => 47305606553,
            'nome' => 'rosa',
            'idade' => '55'
        ]
    ];

    echo '<pre>';
    print_r($multidimensional);
    echo '</pre>';

    $multidimensional = [
        'alunos' =>[
        [
            'id' => 1,
            'nome' => 'zeca',
            'endereco' => 'rua x'
        ],

        [
            'id' => 2,
            'nome' => 'ana',
            'endereco' => 'rua x'
        ]
        ]
    ];

    echo '<pre>';
    print_r($multidimensional);
    echo '</pre>';

    echo '<pre>';
    print_r($multidimensional['alunos'][0]);
    echo '</pre>';

    echo '<pre>';
    print_r($multidimensional['alunos'][1]['nome']);
    echo '</pre>';
    
    ?>
</body>
</html>