<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Editar extends Component
{
    public $tarefaId;
    public $nome;
    public $data_hora;
    public $descricao;

    public function mount($id)
    { //buscar a tarefa por id e  atribuir valor as variáveis indicadas//
        $tarefa = Tarefa::find($id);

        $this->tarefaId = $tarefa->id;
        $this->nome = $tarefa->nome;
        $this->data_hora = $tarefa->data_hora;
        $this->descricao = $tarefa->descricao;
    }

    public function salvar(){
        $tarefa=Tarefa::find($this->tarefaId);
        $tarefa->nome=$this->nome;
        $tarefa->data_hora=$this->data_hora;
        $tarefa->descricao=$this->descricao;

        $tarefa->save();
        session()->flash('success','Tarefa atualizada');
    }

    public function render()
    {
        return view('livewire.tarefa.editar');
    }
}
