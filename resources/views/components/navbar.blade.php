@vite(['resources/css/components/navbar.css'])

<nav class="navbar" data-bs-theme="dark">
    <div class="container-fluid barra-navegacao">
        <div>
            <img class="logo" src="{{ URL('images/fbc36df2070a5a855e1cee2e211e4b6261c44194a14dede3c56b7fde9a66d571.png')}}" alt="">
        </div>
        <form class="d-flex" role="search">
            <input class="form-control mt-3" type="search" placeholder="Oque deseja procurar?" aria-label="Search">
            <button class="btn btn-outline-dark mt-3" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <div class="login-carrinho">
            <div class="login">
                <i class="bi bi-person mr-2"></i>
                <div class="conta-registro">
                    <a href="" class="minha-conta">Minha Conta </a>
                    <div class="entrar-cadastrar">
                        <a href="">Entrar</a>
                        <p> / </p>
                        <a href="">Cadastrar</a>
                    </div>
                </div>
            </div>

            <div class="carrinho">
                <button class="botao-carrinho"><i class="bi bi-cart3"></i></button>
                <span class="badge text-bg-dark ">0</span>  
            </div>
        </div>
    </div>
</nav>