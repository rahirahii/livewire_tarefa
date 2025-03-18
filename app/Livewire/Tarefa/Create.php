<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $data_hora;
    public $descricao;
    //criamos uma variavel para podermos acessa-la 


    public function render()
    {
        return view('livewire.tarefa.create');
    }

    public function store()
    {
        Tarefa::create([
            'nome' => $this->nome,
            'data_hora' => $this->data_hora,
            'descricao' => $this->descricao
        ]);

        // this seve para chamar uma variavel fora - acessa algo de dentro da nossa classe
        // o dd serviu para mostrar se estava gravando as informações

        session()->flash('success', 'Cadastro Realizado');
    }
}
