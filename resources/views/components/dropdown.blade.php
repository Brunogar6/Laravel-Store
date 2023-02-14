@props([
    'nome' => '',
    'list' => '',
    'slug' => ''
])

<div class="dropdown">
    <a href="{{ $slug }}">
    <button
        class="btn dropdown-toggle"
        type="button"
        id="dropdownMenuButton"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
        href="/produtos"
    >
        {{ $nome }}
    </button></a>
    <ul class="dropdown-menu teste" aria-labelledby="dropdownMenuButton">
        @if(!empty($list))
            @foreach($list as $key => $value)
                <li><a class="dropdown-item" href="">{{ $value }}</a></li>
            @endforeach
        @endif

    </ul>
</div>
