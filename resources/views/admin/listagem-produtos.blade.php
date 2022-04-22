@extends('admin.index')

@section('admin-content')
    <div class="tab-pane fade show {{ Route::is('admin.index') ? 'active' : '' }}" id="listagem-produtos" role="tabpanel"
        aria-labelledby="listagem-produtos-tab">
        <a href="{{ route('produtos.cadatro') }}" class="btn btn-dark shadow-sm float-end mb-4">Novo produto</a>
        <table class="table table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th class="text-center">Qtd. Estoque</th>
                    <th class="text-center">N. de pedidos</th>
                    <th class="text-center">Ativo</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody class="table-light">
                @forelse ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->codigo ?? '-' }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->marca ?? '-' }}</td>
                        <td class="text-center">{{ $produto->quantidade ?? '-' }}</td>
                        <td class="text-center">{{ $produto->produto_pedido_count }}</td>
                        <td class="text-center" id="status-ativo-{{ $produto->id }}">
                            @if ($produto->ativo)
                                <i class="fa fa-check text-success"></i>
                            @else
                                <i class="fa fa-times text-danger"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            {{ $produto->preco }}
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-dark shadow-sm dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @if($produto->ativo)
                                        <li>
                                            <a class="dropdown-item" onclick="inativarProduto({{ $produto->id }})" id="alterar-status-ativo-produto-{{ $produto->id }}" href="#">
                                                Inativar
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item" onclick="ativarProduto({{ $produto->id }})" id="alterar-status-ativo-produto-{{ $produto->id }}" href="#">
                                                Ativar
                                            </a>
                                        </li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('produtos.cadatro', $produto) }}">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Excluir</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Nenhum produto cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if(!empty($produtos))
            <div class="col-12 mt-3">
                {!! $produtos->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        @endif
    </div>
@endsection

@section('scripts')
<script>
    function inativarProduto(produtoId) {
        $.get(`/produtos/alterar-status-ativo/${produtoId}/0`, function(response) {
            $(`#alterar-status-ativo-produto-${produtoId}`).attr('onclick', `ativarProduto(${produtoId})`).html('Ativar');
            $(`#status-ativo-${produtoId}`).html('<i class="fa fa-times text-danger"></i>')

            toastr.success('Este produto foi inativado com sucesso!', 'Produto Inativado');
        });

    }

    function ativarProduto(produtoId) {
        $.get(`/produtos/alterar-status-ativo/${produtoId}/1`, function(response) {
            $(`#alterar-status-ativo-produto-${produtoId}`).attr('onclick', `inativarProduto(${produtoId})`).html('Inativar');
            $(`#status-ativo-${produtoId}`).html('<i class="fa fa-check text-success"></i>')

            toastr.success('Este produto foi inativado com sucesso!', 'Produto Inativado');
        });
    }
</script>
@append
