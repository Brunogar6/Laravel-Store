@include('cdn')

@vite(['resources/css/home/index.css'])

<x-navbar/>

<hr class="barra">

<div class="dropdowns">
    @php($list = ["Todos", "yesy"])
    @foreach($tipos as $tipo)
        {{dd($tipo->produtos)}}
        <x-dropdown nome="{{ $tipo->nome }}" slug="{{ $tipo->slug }}" :list="$list"/>
    @endforeach
</div>

<x-carousel/>
