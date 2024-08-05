<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('../img/hero.jpg');
        height: 350px;
        "></div>
  <!-- Background image -->

  <div class="card mx-auto shadow-5-strong " style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        max-width: 40%;
        ">
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-4">Tambah Data Produk</h2>

          @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
          @endif

          @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
          @endif

          <form action="/editproduk/{{$produk->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label class="form-label text-danger" for="form3Example4">*Mohon pilih ulang foto produk.</label>
            <div class="form-outline mb-4 pt-4">
              <label class="form-label" for="form3Example3">Nama Produk</label>
              <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}" required>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Harga</label>
              <input type="text" class="form-control" name="harga" placeholder="100,000" value="{{$produk->harga}}" required>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Link ke Tokopedia</label>
              <input type="text" class="form-control" name="link" placeholder="https://www.tokopedia.com/aiko-pet/makanan-kucing-1st-choice-kitten-2-72kg?extParam=whid%3D10125614" value="{{$produk->link}}" required>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">*Foto Produk</label>
              <input type="file" class="form-control" name="photo" required>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Selesai
            </button><br>
            <label class="form-label" for="form3Example4">Produk akan otomatis di display di halaman produk.</label>
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


@include('parts.footer')
<!-- Section: Design Block -->
@endauth

</body>
</html>