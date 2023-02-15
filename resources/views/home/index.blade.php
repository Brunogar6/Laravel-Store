@include('cdn')

@vite(['resources/css/home/index.css'])

<x-navbar/>

<hr class="barra">

<div class="dropdowns">
    @foreach($tipos as $tipo)
        @php
            $list = [];
            foreach($tipo->produtos as $produto) {
                if (!in_array($produto->categorias, $list))
                {
                    $list = $produto->categorias;
                }
            }
        @endphp
        <x-dropdown nome="{{ $tipo->nome }}" slug="{{ $tipo->slug }}" :list="$list"/>
    @endforeach
</div>

<x-carousel/>
