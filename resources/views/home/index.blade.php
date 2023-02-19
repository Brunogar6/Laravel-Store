@include('cdn')

@vite(['resources/css/home/index.css'])

<x-navbar/>

<hr class="barra">

<div class="dropdowns">
    @foreach($tipos as $tipo)
        @php
            $list = [];
            foreach($tipo->produtos as $produto) {
                foreach($produto->categorias as $categoria) {
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

<x-carousel/>
