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
            <div class="row">
                <div class="col-md title">
                    ASAP task
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <table class="table display" id="table1">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="lib/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="lib/popper.min.js"></script>
        <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="lib/datatables/datatables.js"></script>
    <script>
        $('#table1').DataTable();
    </script>
    </body>
</html>
