<x-sidepanel id="carrinhoSidepanel">
    <div class="container">
        <h4>Carrinho</h4>
        <div id="pedidos-sidepanel-grid" class="mt-3">
            <div class="card shadow-sm mb-3" style="max-width: 420px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29mZWV8ZW58MHx8MHx8&w=1000&q=80" height="220" class="img-carrinho rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <strong>
                                    Café simples
                                </strong>
                            </h5>
                            <hr>
                            <p>
                                <strong>Quantidade: </strong> 10
                            </p>
                            <p>
                                <strong>Preço total: </strong> R$ 1000
                            </p>
                            <button class="btn btn-sm btn-danger shadow-sm">Excluir item</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm mb-3" style="max-width: 420px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y29mZWV8ZW58MHx8MHx8&w=1000&q=80" height="220" class="img-carrinho rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <strong>
                                    Café simples
                                </strong>
                            </h5>
                            <hr>
                            <p>
                                <strong>Quantidade: </strong> 10
                            </p>
                            <p>
                                <strong>Preço total: </strong> R$ 1000
                            </p>
                            <button class="btn btn-sm btn-danger shadow-sm">Excluir item</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 grid-finalizar-pedido mt-5">
            <button class="btn btn-secondary shadow-sm">Limpar carrinho</button>
            <button class="btn btn-success shadow-sm">Finalizar pedido</button>
        </div>
    </div>
</x-sidepanel>
