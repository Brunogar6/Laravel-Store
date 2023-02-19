@include('cdn')

@vite(['resources/css/home/index.css'])
@vite(['resources/css/produtos/produtoshow.css'])

<x-navbar/>

<hr class="barra">

<div class="dropdowns">
    @foreach($tipos as $tipo)
        @php
            $list = [];
            foreach($tipo->produtos as $produtoValue) {
                foreach($produtoValue->categorias as $categoria) {
                    $list[] = $categoria;
                }
            }

        @endphp

        <x-dropdown nome="{{ $tipo->nome }}" slug="{{ $tipo->slug }}" :list="$list"/>

        @php
            unset($list);
        @endphp
    @endforeach
</div>


<nav aria-label="breadcrumb" style="margin-left: 11em">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item"><a href="/{{$produto->tipo->slug}}">{{$produto->tipo->nome}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $produto->nome }}</li>
    </ol>
</nav>

<div class="flex-produto">
    <div class="card text-center" style="width: 35rem; height: 35rem;">
        <img src="{{ asset('storage/' . $produto->imagem) }}" style="height: 100%;" class="card-img-top">
    </div>
    <div class="produto">
        <div class="card text-center" style="width: 35rem; height: 35rem;">
            <div class="card-body">
                <ul class="list-group list-group-flush" style="display: flex; align-items: center">
                    <li class="list-group-item desconto">{{ $produto->desconto}}% DESC</li>
                    <h5 class="card-title titulo">{{ $produto->nome }}</h5>
                    <li class="list-group-item marca">Marca: {{ $produto->marca->nome }}</li>
                    <li class="list-group-item preco-sem">de R$ {{ number_format($produto->preco, 2, ',')}}</li>
                    @php($precoDesconto = ($produto->preco) * (1 -($produto->desconto / 100)))
                    <li class="list-group-item preco-com">R$ {{ number_format($precoDesconto, 2, ',') }}</li>
                    <li class="list-group-item parcelas">Ou 6x de R$ {{ number_format($precoDesconto/6, 2, ',')}} Sem juros</li>
                    <li class="list-group-item" style="border-bottom: 0 !important;"><form class="comprar-produto">
                        <input value="1" class="form-control input">
                        <button class="botao-comprar btn">COMPRAR PRODUTO</button>
                    </form></li>
                    <li class="list-group-item segura">* Aqui sua compra é 100% segura, compre com tranquilidade.</li>
                    <li class="list-group-item frete"><i class="bi bi-truck"></i> Frete e prazo de entrega</li>
                    <li class="list-group-item"><form>
                        <input class="input-frete">
                        <button class=" botao-frete"> CALCULAR </button>
                    </form></li>
                </ul>
            </div>
        </div>
    </div>
</div>

