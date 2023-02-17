@props([
    'marcas' => '',
    'slug' => ''
])

<html>
<head>
    <style>

        @media (min-width: 1200px){
            .col-lg-12 {
                width: 100%;}
        }

        .section {
            margin-left: 11rem;
            margin-right: 2rem;
            width: 15%;
            position: absolute;
        }

        .bgcolor{
            background-color: #fff;
        }

        .bgcolor_02{
            background-color:#ededef;
        }

        .bgcolor_03{
            background-color:lightblue;
        }

        section.section.section-small {
            padding-top: 15px;
            padding-bottom: 30px;
            padding-left: 15px;
            padding-right: 15px;
        }

        section.section {
            margin-top: 25px;
            background-color: #fff;
            border-top: 10px solid #c8a2c8;
            border-radius: 3px;
            box-shadow: -1px 0 2px 0 rgba(0,0,0,.12), 1px 0 2px 0 rgba(0,0,0,.12), 0 1px 1px 0 rgba(0,0,0,.12);
        }

        section.section {
            padding-top: 15px;
            padding-bottom: 30px;
            padding-left: 45px;
            padding-right: 45px;
        }

        .btn-kootour-bold {
            font-family: Montserrat-Medium;
        }

        .btn-kootour, .btn-kootour-bold {
            border-radius: 3px;
            color: #fff;
            background-color: #c8a2c8;
            width: 200px;
        }


        .botao-filtro {
            padding: 8px 16px;
            font-size: 16px;
            font-size: 1.6rem;
            border-radius: 3px;
        }

        .btn-lg, .btn-group-lg>.btn {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px;
        }

        .botao-filtro {
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .text-center {
            text-align: center;
        }
        .subtitle {
            font-size: 1.3rem;
            color: #c8a2c8;
            padding:0;
        }

        .nopadding{
            padding:0;
        }
    </style>
</head>

<body>

<form action= "{{route('filter.index', $slug)}}">
    <section class="section section-small col-xs-12">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-2 col-sm-6 col-xs-6 nopadding">
                <span class="subtitle">Marca</span>
            </div>

            @foreach($marcas as $marca)
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" data-val="true" type="checkbox" value="{{ $marca->nome }}"  name="marca[]  ">
                </div>
                <input type="text" class="form-control" readonly value="{{ $marca->nome }}">
            </div>

            @endforeach
            
        </div>

        <div class="col-lg-3 col-md-12 col-sm-612 col-xs-12">
            <div class="text-center col-lg-1 col-md-12 col-sm-12 col-xs-12">
                <a><button class="botao-filtro btn-lg btn-kootour-bold btn-search" action type="submit">Buscar</button>
            </div>
        </div>


    </section>

    </form>

</div>

</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
