<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js" defer></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

<script>
    $(document).ready(function () {
    $('#datagrooming').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
</script>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Aiko Petshop & Grooming</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css ') }}" rel="stylesheet">
</head>
<body>
    @auth
    @include('parts.navbaradmin')

    <div class="container-fluid py-5">
        <div class="container">
        <a href="/daftargrooming" role="button" class="btn btn-success">Tambah Data</a>
    <table id="datagrooming" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Owner</th>
                <th>No. HP</th>
                <th>Jenis Perawatan</th>
                <th>Ukuran Hewan</th>
                <th>Harga</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groomings as $grooming)
            <tr>
                <td>{{$grooming->nama_owner}}</td>
                <td>{{$grooming->nomor_hp}}</td>
                <td>{{$grooming->jenis_perawatan}}</td>
                <td>{{$grooming->ukuran_hewan}}</td>
                <td>{{$grooming->harga}}</td>
                <td><a href="/editgrooming/{{$grooming->id}}" role="button" class="btn btn-warning">Edit</a> &nbsp;
                <a href="#myModal" class="btn btn-danger" role="button" data-toggle="modal">Hapus</a>
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                            <div class="modal-header flex-column">
                                <div class="icon-box">
                                    <i class="material-icons">&#xE5CD;</i>
                                </div>						
                                <h4 class="modal-title w-100">Apa anda yakin?</h4>	
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Yakin ingin menghapus produk? Proses tidak dapat diundo.</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="/deletegrooming/{{$grooming->id}}" method="post" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp; <a type="submit" class="btn btn-success" role="button" href="https://api.whatsapp.com/send?phone={{$grooming->nomor_hp}}">Kontak WhatsApp</a>
                </td>
                </form>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nama Owner</th>
                <th>No. HP</th>
                <th>Jenis Perawatan</th>
                <th>Ukuran Hewan</th>
                <th>Harga</th>
                <th>Tindakan</th>
            </tr>
        </tfoot>
    </table>

    </div>
    </div>

    @include('parts.footer')
    @endauth
</body>

</html>