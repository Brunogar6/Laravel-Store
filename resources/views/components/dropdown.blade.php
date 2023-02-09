@props([
    'nome' => '',
    'list' => ''
])

<div class="dropdown">
    <button
        class="btn dropdown-toggle"
        type="button"
        id="dropdownMenuButton"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
    >
        {{ $nome }}
    </button>
    <ul class="dropdown-menu teste" aria-labelledby="dropdownMenuButton">
        @if(!empty($list))
            @foreach($list as $key => $value)
                <li><a class="dropdown-item" href="#">{{ $value }}</a></li>
            @endforeach
        @endif
        
    </ul>
</div>