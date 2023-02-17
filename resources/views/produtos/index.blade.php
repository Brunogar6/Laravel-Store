@include('cdn')

@vite(['resources/css/home/index.css'])
@vite(['resources/css/produtos/produto.css'])

<x-navbar/>

<hr class="barra">

<div class="dropdowns">
    @foreach($tipos as $tipo)
        @php
            $list = [];
            foreach($tipo->produtos as $produto) {

                if (!$produto->categorias->contains($list))
                {
                    $list = $produto->categorias;
                }
            }
        @endphp
        <x-dropdown nome="{{ $tipo->nome }}" slug="{{ $tipo->slug }}" :list="$list"/>

    @endforeach
</div>

<nav aria-label="breadcrumb" style="margin-left: 11em">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $produto->tipo->nome }}</li>
    </ol>
</nav>

<x-filter slug="{{$produto->tipo->slug}}" :marcas="$marcas"/>


<div class="produtos">
    @foreach ($produtos as $produto)
        <div class="produto">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item desconto">{{ $produto->desconto}}% DESC</li>
                        <h5 class="card-title titulo">{{ $produto->nome }}</h5>
                        <li class="list-group-item preco-sem">de R$ {{ number_format($produto->preco, 2, ',')}}</li>
                        @php($precoDesconto = ($produto->preco) * (1 -($produto->desconto / 100)))
                        <li class="list-group-item preco-com">R$ {{ number_format($precoDesconto, 2, ',') }}</li>
                        <li class="list-group-item parcelas">Ou <strong>6x</strong> de R$ <strong>{{ number_format($precoDesconto/6, 2, ',')}}</strong> Sem juros</li>
                        <li class="list-group-item"><a href="/produtos/{{$produto->id}}" class="btn btn-outline-dark botao">Ver Produto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>


