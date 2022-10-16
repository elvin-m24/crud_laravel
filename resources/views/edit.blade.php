<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tambah Data Keberangkatan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Menambah Data Keberangkatan</h4>                                    
                                    @foreach ($keberangkatans as $kb)                                                                            
                                    <form action="/update" method="post">
                                        @csrf                                                                        
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="{{ $kb->id }}"> <br/>
                                            <label class="mb-1"><strong>Asal</strong></label>
                                            <input type="text" class="form-control" required="required" name="asal" value="{{ $kb->asal }}"> <br/>
                                            <label class="mb-1"><strong>Tujuan</strong></label>
                                            <input type="text" class="form-control" required="required" name="tujuan" value="{{ $kb->tujuan }}"> <br/>
                                            <label class="mb-1"><strong>Tanggal Keberangkatan</strong></label>
                                            <input type="text" class="form-control" required="required" name="tgl_berangkat" value="{{ $kb->tgl_berangkat }}"> <br/>                                            
                                            <label class="mb-1"><strong>Nama Maskapai</strong></label>
                                            <input type="text" class="form-control" required="required" name="nama_maskapai" value="{{ $kb->nama_maskapai }}"> <br/>
                                            <label class="mb-1"><strong>Harga</strong></label>
                                            <input type="text" class="form-control" required="required" name="harga" value="{{ $kb->harga }}"> <br/>
                                            <input type="submit" value="Simpan Data">                                                                            
                                        </div>                                        
                                    </form>   
                                    @endforeach                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>