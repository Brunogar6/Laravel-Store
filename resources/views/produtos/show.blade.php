@include('cdn')

@vite(['resources/css/home/index.css'])
@vite(['resources/css/produtos/produtoshow.css'])

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

<nav aria-label="breadcrumb" style="margin-left: 11em">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $produto->nome }}</li>
    </ol>
</nav>

<div class="d-flex flex-produto">
    <div class="card text-center">
        <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" style="width: 35rem; height: 30rem;">
    </div>
    <div class="produto">
        <div class="card text-center" style="width: 30rem; height: 30rem;">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item desconto">{{ $produto->desconto}}% DESC</li>
                    <h5 class="card-title titulo">{{ $produto->nome }}</h5>
                    <li class="list-group-item marca">Marca: {{ $produto->marca }}</li>
                    <li class="list-group-item preco-sem">de R$ {{ number_format($produto->preco, 2, ',')}}</li>
                    @php($precoDesconto = ($produto->preco) * (1 -($produto->desconto / 100))) 
                    <li class="list-group-item preco-com">R$ {{ number_format($precoDesconto, 2, ',') }}</li>
                    <li class="list-group-item parcelas">Ou 6x de R$ {{ number_format($precoDesconto/6, 2, ',')}} Sem juros</li>
                    <li class="list-group-item"><form class="d-flex">
                        <input class="form-control input">
                        <button class="botao btn">Comprar Produto</button>
                    </form></li>
                    <li class="list-group-item parcelas">* Aqui sua compra é 100% segura, compre com tranquilidade.</li>
                    <li class="list-group-item"><i class="bi bi-truck"></i> Frete e prazo de entrega</li>
                </ul>
            </div>
        </div>
    </div>
</div>

