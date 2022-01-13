<!doctype html>
<html lang='pt-br'>

    <head>
        <title>
            @yield('site')
        </title>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'
            integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <!-- Jquery -->
        <link rel='stylesheet' href='//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css'>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    </head>

    <body>
        <nav class='navbar navbar-expand-md navbar-light bg-dark'>
            <div class='container'>
                <a class='navbar-brand  text-white' href='#'>Containers</a>
                <button class='navbar-toggler d-lg-none' type='button' data-bs-toggle='collapse'
                    data-bs-target='#collapsibleNavId' aria-controls='collapsibleNavId' aria-expanded='false'
                    aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='collapsibleNavId'>
                    <ul class='navbar-nav me-auto mt-2 mt-lg-0  text-white'>
                        <li class='nav-item active'>
                            <a class='nav-link  text-white' href='{{ route('index') }}'>Listagem Containers</a> <span
                                class='visually-hidden'>(current)</span></a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link  text-white' href='{{ route('movement.index') }}'>Movimentações</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- Bootstrap JavaScript Libraries -->
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'
            integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'>
        </script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js'
            integrity='sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF' crossorigin='anonymous'>
        </script>
        {{-- Jquery Cdn --}}
        <script src='https://code.jquery.com/jquery-3.6.0.slim.min.js'
            integrity='sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=' crossorigin='anonymous'></script>
        <script type='text/javascript' charset='utf8' src='https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js'>
        </script>
        <script type='text/javascript' charset='utf8'
            src=' https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.10.3/jquery.mask.js'></script>
        <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>


            {{-- DataTable --}}
       <script>
            $(document).ready( function () {
                  $('#table_id').DataTable({
                      dom: 'Brftip',
                      buttons: [
                          'pdf'
                    ]
                  });
            } );
        </script>
        {{-- Jquery Mask --}}
        @yield('js')
    </body>

</html>