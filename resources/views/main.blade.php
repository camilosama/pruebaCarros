<!doctype html>
<html class="fixed" id="html_id">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="{{URL::asset('imagen/GESUSR_SOLICITUD_APPfavicon.ico')}}">
        <title>@yield('title','Inicio')</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
        <style>
            body {
                font-family: 'Roboto Light', arial;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(white), to(black));
                background: -webkit-linear-gradient(top, #003E65, white);
                background: -moz-linear-gradient(top, #003E65, white);
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .btn-primary{
             background-color: #003e65;
                border-color:#003e65;
                color: white;
            }
            label{
                color: #95999c;
            }
        </style>
    @yield('AddScritpHeader')
    </head>
    <body>
    <br>
    <div class="container" style="background-color: white">
        <br>

        <div>
            <div class="row">
                <div class="col-12">
                    <section class="content-body">
                        <br>
                            @yield('content')
                        <br>
                    </section>
                </div>
            </div>
        </div>

    </div>


    </body>
<!-- auto complete oof-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    

@yield('AddScriptFooter')



</html>