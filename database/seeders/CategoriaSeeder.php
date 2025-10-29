<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Tarefa;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criar categorias
        $trabalho = Categoria::create(['nome' => 'Trabalho']);
        $pessoal = Categoria::create(['nome' => 'Pessoal']);
        $estudos = Categoria::create(['nome' => 'Estudos']);
        
        // Criar algumas tarefas
        Tarefa::create([
            'titulo' => 'Finalizar projeto Laravel',
            'descricao' => 'Completar o desenvolvimento do sistema de tarefas',
            'concluida' => false,
            'categoria_id' => $trabalho->id
        ]);
        
        Tarefa::create([
            'titulo' => 'Fazer compras',
            'descricao' => 'Ir ao supermercado comprar ingredientes para o jantar',
            'concluida' => false,
            'categoria_id' => $pessoal->id
        ]);
        
        Tarefa::create([
            'titulo' => 'Estudar PHP',
            'descricao' => 'Revisar conceitos de orientação a objetos em PHP',
            'concluida' => true,
            'categoria_id' => $estudos->id
        ]);
    }
}
