<x-dashboard.includes.header-painel></x-dashboard.includes.header-painel>
    <h1>{{ $titulo }}</h1>
    <form action="{{ url('produtos/cadastrar') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-4">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name='nome' id='nome' class="form-control">
            </div>
            <div class="col-12 col-md-4">
                <label for="preco_menor" class="form-label">Menor Preço</label>
                <input type="text" name='preco_menor' id='preco_menor' class="form-control money">
            </div>
            <div class="col-12 col-md-4">
                <label for="preco_maior" class="form-label">Maior Preço</label>
                <input type="number" name='preco_maior' id='preco_maior' class="form-control money">
            </div>

            <div class="col-12 col-md-8">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" name='descricao' id='descricao' class="form-control">
            </div>


        </div>
        <div class="row mt-4">
            <div class="col-4">
                <button type="submit" class="btn btn-success btn-block "><i class="fas fa-check-circle"></i> Salvar</button>
            </div>
            <div class="col-4">
                <a class="btn btn-danger btn-block "><i class="fas fa-times-circle"></i> Voltar</a>
            </div>
        </div>
    </form>

<x-dashboard.includes.footer-painel></x-dashboard.includes.footer-painel>

