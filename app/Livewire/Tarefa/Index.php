<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Index extends Component

{
    public $tarefaId;
    public $nome;
    public $data_hora;
    public $descricao;

    protected $listeners = [
        'abrirModalEdicao',
        'tarefaAtualizada' => "render"
    ];

    public function render() // caminho
    {
        $tarefas = Tarefa::all();
        return view('livewire.tarefa.index', compact('tarefas')); // enviar a variavel para dentro da tela
    }

    // dd($tarefas); // fazer um dump ( mostrar oq vc pediu/ interrompendo seu trafico)

    public function abrirModalVisualizar($tarefaId)
    {
        $tarefa = Tarefa::find($tarefaId);
        if ($tarefa) {
            $this->nome = $tarefa->nome;
            $this->data_hora = $tarefa->data_hora;
            $this->descricao = $tarefa->descricao;
        }
    }
    public function abrirModalExclusao($tarefaId)
    {
        $this->tarefaId = $tarefaId;
    }

    public function abrirModalEdicao($tarefaId)
    {
        $this->dispatch('editarTarefa', tarefaId: $tarefaId);
    }

    public function excluir()
    {
        if ($this->tarefaId) {
            Tarefa::find($this->tarefaId)->delete();
        }
    }
}
