<div class="mt-5">
    {{-- margin top --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data e Hora</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($tarefas as $t)
                            <td>{{ $t->id }} </td>
                            <td> {{ $t->nome }}</td>
                            {{-- $t é o objeto, e o  nome é  a coluna --}}
                            <td>{{ \Carbon\Carbon::parse($data_hora)->format('d/m/Y H:i') }} </td>
                            <!-- modelo de hora e data -->
                            <td>
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal"
                                    wire:click="abrirModalVisualizar({{ $t->id }})">Vizualizar</button>

                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                    wire:click="abrirModalEdicao({{ $t->id }})">Editar</button>

                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    wire:click="abrirModalExclusao({{ $t->id }})">Excluir</button>
                                <a href="{{ route('tarefa.editar', ['id' => $t->id]) }}" class="btn btn-info btn-sm">Editar sem modal</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <livewire:tarefa.edit>

        </div>
    </div>

    <!-- Modal de Execução -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Tarefa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p> Tem certeza que deseja excluir a tarefa?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" wire:click="excluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>



    <!-- modal de visualização -->


    <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes da Tarefa </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nome:</strong>{{ $nome }}</p>
                    <p><strong>Data e Hora:</strong>{{ \Carbon\Carbon::parse($data_hora)->format('d/m/Y H:i') }}</p>
                    <p><strong>Descrição:</strong>{{ $descricao }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
