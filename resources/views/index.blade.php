<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Azure Travel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">            
            <a class="navbar-brand ps-3" href="/">Azure Travel</a>                    
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Manajemen</div>
                            <a class="nav-link" href="/keberangkatan">
                                <div class="sb-nav-link-icon"><i class="fas fa-plane-departure"></i></div>
                                Keberangkatan
                            </a>                                                                                 
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Azure Travel</h1>                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Penerbangan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Asal</th>
                                            <th>Tujuan</th>
                                            <th>Tanggal Keberangkatan</th>
                                            <th>Maskapai</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>                        
                                    <tbody>
                                        @foreach($keberangkatans as $kb)
                                        <tr>
                                            <td>{{ $kb->asal }}</td>
                                            <td>{{ $kb->tujuan }}</td>
                                            <td>{{ $kb->tgl_berangkat }}</td>                                            
                                            <td>{{ $kb->nama_maskapai }}</td> 
                                            <td>{{ $kb->harga }}</td>                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
