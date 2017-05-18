<?php

$professor1 = array(
    'id' => 1,
    'nome' => "Vanessa Goes",
    'telefone' => '3333-4444',
    'endereco' => 'Rua Vinte e Dois, 22',
    'ingles' => true,
    'espanhol' => false,
    'italiano' => true
);

$professor2 = array(
    'id' => 2,
    'nome' => "Mariana Skol Beats",
    'telefone' => '5555-6666',
    'endereco' => 'Alameda Barão de Itapetininga, 132',
    'ingles' => true,
    'espanhol' => true,
    'italiano' => false
);

$professor3 = array(
    'id' => 3,
    'nome' => "Letícia Figueiredo",
    'telefone' => '7777-8888',
    'endereco' => 'Rua Andradas, 67',
    'ingles' => true,
    'espanhol' => false,
    'italiano' => false
);

$professor4 = array(
    'id' => 4,
    'nome' => "Fernanda Amaral",
    'telefone' => '3333-4444',
    'endereco' => 'Rua Jovita, 235',
    'ingles' => true,
    'espanhol' => false,
    'italiano' => true
);

echo json_encode(array($professor1, $professor2, $professor3, $professor4));
echo '<hr>';

$turma1 = array(
    'id' => 1,
    'nome' => 'Alfa',
    'curso' => 'Inglês',
    'horario' => "13:30",
    'alunos' => 17,
    'professor' => "-"
);

$turma2 = array(
    'id' => 1,
    'nome' => 'Beta',
    'curso' => 'Espanhol',
    'horario' => "13:45",
    'alunos' => 14,
    'professor' => "Mariana Conta Um"
);

$turma3 = array(
    'id' => 1,
    'nome' => 'Gama',
    'curso' => 'Italiano',
    'horario' => "14:00",
    'alunos' => 22,
    'professor' => "Letícia Figueiredo"
);

echo json_encode(array($turma1, $turma2, $turma3));
echo '<hr>';