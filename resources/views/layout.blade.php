<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Asap test task</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.css">
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md title">
                    ASAP task
                </div>
            </div>
        </div>
        <div class="container">
            @yield('page')
        </div>

        <!-- JS -->
        <script type="text/javascript" src="lib/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="lib/popper.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="lib/datatables/datatables.js"></script>
    <script>
        $('#table1').DataTable();
    </script>
    </body>
</html>
