<?php

include('./modulo/conexao.php');

include('./modulo/insert.php');
include('./modulo/buscar.php');
include('./modulo/update.php');
include('./modulo/delete.php');

// $statusdelete = Delete(4);
// var_dump($statusdelete);

//$usuario_id = intval($_GET['usuario_id']) ?? 6;
$usuario = buscar(6);

if ($usuario) {
    echo '<pre>';
    var_dump($usuario);
} else {
    echo '<p>Falha ao buscar o usuario do id ' . $usuario_id . '</p>';
}

/*
$usuario_id = 20;
$status = Delete($usuario_id);

if ($status) {
    echo '<p>Usuario do id ' . $usuario_id . ' foi removido</p>';
} else {
    echo '<p>Falha ao remover o usuario do id ' . $usuario_id . '</p>';
}

*/


/*
COMANDO DE UPDATE
$dados = [
    'nome' => 'test01',
    'cep' => '451235',
    'rua' => 'rua test',
    'numero' => '123',
    'complemento' => 'centro',
    'bairro' => 'test cidade',
    'cidade' => 'cidade test',
    'estado' => 'test cidade',
    'id' => 20
];


$status = updateTable($dados);

if ($status) {
    echo '<p>Dados atualizado com sucesso!</p>';
} else {
    echo '<p>Falha ao atualizar os dados na tabela de usuários</p>';
}
*/
 

/*
$dados = [
    'nome' => 'test01',
    'cep' => '451235',
    'rua' => 'rua test',
    'numero' => '123',
    'complemento' => 'centro',
    'bairro' => 'test cidade',
    'cidade' => 'cidade test',
    'estado' => 'test cidade'
];

$status = insertTable($dados);

if ($status) {
    echo '<p>Dados inseridos com sucesso!</p>';
} else {
    echo '<p>Falha ao inserir os dados na tabela de usuários</p>';
}*/

//comando de inserir
//include('./conexao.php');

// $arr = [
//     'nome' => 'Barsi',
//     'cep' => '44501',
//     'rua' => 'rua test',
//     'numero' => '123',
//     'complemento' => 'centro',
//     'bairro' => 'test cidade',
//     'cidade' => 'cidade test',
//     'estado' => 'test cidade'
// ];

// //insertTable($arr);
// var_dump(insertTable($arr));