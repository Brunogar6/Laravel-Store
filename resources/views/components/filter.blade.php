<html>
<head>
    <style>

        @media (min-width: 1200px){
            .col-lg-12 {
                width: 100%;}
        }

        .section {
            margin-left: 11rem;
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

<div>
    <section class="section section-small col-xs-12">

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-2 col-sm-6 col-xs-6 nopadding">
                <span class="subtitle">Marca</span>
            </div>

            <div class=" col-lg-8 col-md-10 col-sm-6 col-xs-12">
                <div class="form-group">
                    <select class="form-control ">
                        <option>teste</option>
                    </select>
                    <div class="validation-row">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-2 col-sm-6 col-xs-6 nopadding">
                <span class="subtitle">Category</span>
            </div>

            <div class="col-lg-8 col-md-10 col-sm-6 col-xs-12">
                <div class="form-group">
                    <select class="form-control" data-val="true" data-val-number="The field CategoryID must be a number." data-val-required="The CategoryID field is required." id="CategoryID" name="CategoryID"><option selected="selected" value="1">All</option>
                        <option value="2">Adventure</option>
                        <option value="3">Culture &amp; Arts</option>
                        <option value="4">Festival &amp; Events</option>
                        <option value="5">Food &amp; Drink</option>
                        <option value="6">Historical</option>
                        <option value="7">Leisure &amp; Sports</option>
                        <option value="8">Nature &amp; Rural</option>
                        <option value="9">Nightlife &amp; Party</option>
                        <option value="10">Shopping &amp; Market</option>
                        <option value="11">Transportation</option>
                        <option value="12">Business &amp; Interpretation</option>
                        <option value="13">Photography</option>
                    </select>
                    <div class="validation-row">
                        <span class="field-validation-valid" data-valmsg-for="CategoryID" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12 nopadding">
                <span class="subtitle">Language</span>
            </div>

            <div class=" col-lg-8 col-md-10 col-sm-6 col-xs-12">
                <div class="form-group">
                    <select class="form-control" data-val="true" data-val-number="The field CategoryID must be a number." data-val-required="The CategoryID field is required." id="CategoryID" name="CategoryID"><option selected="selected" value="1">All</option>
                        <option value="2">Adventure</option>
                        <option value="3">Culture &amp; Arts</option>
                        <option value="4">Festival &amp; Events</option>
                        <option value="5">Food &amp; Drink</option>
                        <option value="6">Historical</option>
                        <option value="7">Leisure &amp; Sports</option>
                        <option value="8">Nature &amp; Rural</option>
                        <option value="9">Nightlife &amp; Party</option>
                        <option value="10">Shopping &amp; Market</option>
                        <option value="11">Transportation</option>
                        <option value="12">Business &amp; Interpretation</option>
                        <option value="13">Photography</option>
                    </select>
                    <div class="validation-row">
                        <span class="field-validation-valid" data-valmsg-for="CategoryID" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-612 col-xs-12">
            <div class="text-center col-lg-1 col-md-12 col-sm-12 col-xs-12">
                <button class="botao-filtro btn-lg btn-kootour-bold btn-search" type="submit">Search</button>
            </div>
        </div>


    </section>

</div>

</div>

</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
