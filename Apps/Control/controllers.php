<?php
namespace App\Controllers;

use App\Models\Equipamento;

class EquipamentosController
{
    public function index()
    {
        $equipamentos = Equipamento::all();
        require_once 'app/views/equipamentos/index.php';
    }

    public function create()
    {
        require_once 'app/views/equipamentos/create.php';
    }

    public function store()
    {
        // Obter os dados do formulário
        $dados = $_POST;

        // Criar o equipamento no banco de dados
        $equipamento = new Equipamento();
        $equipamento->nome = $dados['nome'];
        $equipamento->marca = $dados['marca'];
        $equipamento->modelo = $dados['modelo'];
        $equipamento->numero_serie = $dados['numero_serie'];
        $equipamento->data
