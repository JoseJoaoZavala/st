<?php
require_once 'vendor/autoload.php';

use App\Controllers\EquipamentosController;
use App\Controllers\ProjetosController;
use App\Controllers\RequisicoesController;

// Definir as rotas
$router = new \Bramus\Router\Router();

// Equipamentos
$router->get('/equipamentos', [new EquipamentosController(), 'index']);
$router->get('/equipamentos/criar', [new EquipamentosController(), 'create']);
$router->post('/equipamentos/criar', [new EquipamentosController(), 'store']);
$router->get('/equipamentos/:id/editar', [new EquipamentosController(), 'edit']);
$router->post('/equipamentos/:id/editar', [new EquipamentosController(), 'update']);
$router->get('/equipamentos/:id/remover', [new EquipamentosController(), 'destroy']);

// Projetos
$router->get('/projetos', [new ProjetosController(), 'index']);
$router->get('/projetos/criar', [new ProjetosController(), 'create']);
$router->post('/projetos/criar', [new ProjetosController(), 'store']);
$router->get('/projetos/:id/editar', [new ProjetosController(), 'edit']);
$router->post('/projetos/:id/editar', [new ProjetosController(), 'update']);
$router->get('/projetos/:id/remover', [new ProjetosController(), 'destroy']);

// Requisições
$router->get('/requisicoes', [new RequisicoesController(), 'index']);
$router->get('/requisicoes/criar', [new RequisicoesController(), 'create']);
$router->post('/requisicoes/criar', [new RequisicoesController(), 'store']);
$router->get('/requisicoes/:id/editar', [new RequisicoesController(), 'edit']);
$router->post('/requisicoes/:id/editar', [new RequisicoesController(), 'update']);
$router->get('/requisicoes/:id/remover', [new RequisicoesController(), 'destroy']);

$router->run();
