<div class="mt-2">
    <div class="col-12">
        <h3 class="text-center"><strong>Mais vendidos</strong></h3>
        <div class="row justify-content-center">
            @forelse ($maisPedidos as $pedido)
                <div class="col-12 col-sm-4 mt-3">
                    <div class="card shadow-sm">
                        <img class="card-img-top" height="400" src="https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29mZWV8ZW58MHx8MHx8&w=1000&q=80" />
                        <div class="card-body">
                            {{ $pedido->nome }}
                        </div>
                    </div>
                </div>
            @empty
                <span class="text-center">Nenhum pedido encontrado!</span>
            @endforelse
        </div>
    </div>
</div>
