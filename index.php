!<?php 
$alunos = [
    ['nome' => 'João Pereira ',
    'rm' => '00001',
    'nota' => [8.5,9.0,7.5],
    'e-mail' => 'joãop@gmail.com',

],
[   'nome' => 'Maria Silva',
    'rm' => '00002',
    'nota' => [7.0,8.0,9.5],
    'e-mail' => 'mariasilva23@outlook.com'
],
['nome' => 'Pedro Santos',
    'rm' => '00003',
    'nota' => [4.5,3.0,7.0],
    'e-mail' => 'santospedro86@gmail.com'
]

];   //funcao para calcular a media total
    function calcularmediatotal ($notas){
        return round(array_sum($notas)/count($notas),1);
}

//loop 
foreach ($alunos as $aluno) {
$notas = $aluno['nota'];
    $media= array_sum($notas)/count($notas);
        $situacaofinal = ($media >= 6.0) ? 'Aprovado' : 'Reprovado';

        printf("Nome......: %s\n", $aluno['nome']);
        printf("RM........: %s\n", $aluno['rm']);
        printf("Email.....: %s\n", $aluno['e-mail']);
        printf("Notas.....: %s\n", implode(' | ', $aluno['nota']));
        printf("Média.....: %.2f\n", $media);
        printf("Situação..: %s\n", $situacaofinal);
        echo str_repeat("-", 30) . "\n";


    }
?>
