@include('cdn')

@vite(['resources/css/home/index.css'])

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

<x-carousel/>