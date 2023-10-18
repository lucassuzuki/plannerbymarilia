<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function planners() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('CATEGORIA', 'planner');
            $builder->where('ATIVO', 1);
    
            $query = $builder->get()->getResultArray();
            $db->close();

            $data = ['planners' => $query];
    
            return view('produtos/planners', $data);
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        } 
    }
    public function cadernos() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('CATEGORIA', 'caderno');
            $builder->where('ATIVO', 1);
    
            $query = $builder->get()->getResultArray();
            $db->close();
            
            $data = ['cadernos' => $query];
    
            return view('produtos/cadernos', $data);
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
        
    }

    public function agendas() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('CATEGORIA', 'agenda');
            $builder->where('ATIVO', 1);

            $query = $builder->get()->getResultArray();
            $db->close();

            $data = ['agendas' => $query];

            return view('produtos/agendas', $data);
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }

    public function blocos() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('CATEGORIA', 'bloco');
            $builder->where('ATIVO', 1);

            $query = $builder->get()->getResultArray();
            $db->close();

            $data = ['blocos' => $query];

            return view('produtos/blocos', $data);
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }

    public function maisVendidosSemana() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            //FAZER QUERY QUE CONSULTE A TABELA DE VENDAS E FILTRE OS PRODUTOS QUE FORAM MAIS VENDIDOS  
            $builder->where('ATIVO', 1);
            $builder->orderBy('ID', 'RANDOM');

            $query = $builder->get()->getResultArray();
            $db->close();

            $data = ['mais_vendidos' => $query];

            return view('produtos/mais-vendidos-semana', $data);
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }

    public function presentesCriativos() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');  
            $builder->where('ATIVO', 1);
            $builder->orderBy('ID', 'RANDOM');

            $query = $builder->get()->getResultArray();
            $db->close();

            $data = ['presentes_criativos' => $query];

            return view('produtos/presentes-criativos', $data);
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }

    public function plannersHome() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('CATEGORIA', 'planner');
            $builder->where('ATIVO', 1);
            $builder->limit(4);

            $query = $builder->get()->getResultArray();
            $db->close();

            return $query;
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }

    public function presentesCriativosHome() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('ATIVO', 1);
            $builder->orderBy('ID', 'RANDOM');
            $builder->limit(4);

            $query = $builder->get()->getResultArray();
            $db->close();

            return $query;
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }

    public function maisVendidosHome() {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('produto');
            $builder->select('
                ID,
                NOME,
                IMAGEM,
                PRECO,
                SLUG,
                CATEGORIA
            ');
            $builder->where('ATIVO', 1);
            //FAZER QUERY QUE CONSULTE A TABELA DE VENDAS E FILTRE OS PRODUTOS QUE FORAM MAIS VENDIDOS
            $builder->orderBy('ID', 'RANDOM');
            $builder->limit(4);

            $query = $builder->get()->getResultArray();
            $db->close();

            return $query;
        } catch (\Exception $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }
}