@include('cdn')

@vite(['resources/css/home/index.css'])
@vite(['resources/css/produtos/produto.css'])

<x-navbar/>

<hr class="barra">

<div class="dropdowns">
    @php($list = ["Todos", "yesy"])
    <x-dropdown nome="Brincos" :list="$list"/>
    @php($list = ["teste", "yesy"])
    <x-dropdown nome="Colares" :list="$list"/>
    @php($list = ["teste", "yesy"])
    <x-dropdown nome="Pulseiras" :list="$list"/>
    @php($list = ["teste", "yesy"])
    <x-dropdown nome="Tornozeleiras" :list="$list"/>
</div>

<x-breadcrumb/>

<div class="produtos">
    @foreach ($produtos as $produto)
        <div class="produto">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item desconto">{{ $produto->desconto}}% DESC</li>
                        <h5 class="card-title titulo">{{ $produto->nome }}</h5>
                        <li class="list-group-item preco">{{ $produto->preco }} R$</li>
                        <li class="list-group-item parcelas">Ou <strong>6x</strong> de<strong></strong> Sem juros</li>
                        <li class="list-group-item"><a href="/produtos/{{$produto->id}}" class="btn btn-outline-dark botao">Ver Produto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>