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
          <h2 class="fw-bold mb-4">Edit Data Grooming</h2>
          <label class="form-label text-danger" for="form3Example4">AIKO TIDAK MENERIMA PELIHARAAN BERKUTU, ATAU GALAK.</label>

          @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
          @endif

          @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
          @endif

          <form action="/editgrooming/{{$grooming->id}}" method="POST">
          @csrf

            <div class="form-outline mb-4 pt-4">
              <label class="form-label" for="form3Example3">Nama Owner</label>
              <input type="text" class="form-control" name="nama_owner" value="{{$grooming->nama_owner}}" required>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Nomor HP</label>
              <input type="text" class="form-control" name="nomor_hp"  value="{{$grooming->nomor_hp}}" required>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Jenis Perawatan</label>
              <select class="form-control" name="jenis_perawatan" required>
                  <option value="Basic Grooming" <?php if($grooming->jenis_perawatan == "Basic Grooming") echo 'selected'; ?>>Basic Grooming</option>
                  <option value="Treatment Jamur" <?php if($grooming->jenis_perawatan == "Treatment Jamur") echo 'selected'; ?>>Treatment Jamur</option>
                  <option value="Cutting" <?php if($grooming->jenis_perawatan == "Cutting") echo 'selected'; ?>>Cutting</option>
                  <option value="Special Coat" <?php if($grooming->jenis_perawatan == "Special Coat") echo 'selected'; ?>>Special Coat</option>
                  <option value="Paket Lengkap" <?php if($grooming->jenis_perawatan == "Paket Lengkap") echo 'selected'; ?>>Paket Lengkap (Basic + Jamur + Cutting)</option>
              </select>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Berat Hewan Peliharaan</label>
              <select class="form-control" name="ukuran_hewan" required>
                  <option value="Small" <?php if($grooming->ukuran_hewan == "Small") echo 'selected'; ?>>Small (0 - 5.7 Kg) </option>
                  <option value="Medium" <?php if($grooming->ukuran_hewan == "Medium") echo 'selected'; ?>>Medium (5.8 - 15.6 Kg) </option>
                  <option value="Large" <?php if($grooming->ukuran_hewan == "Large") echo 'selected'; ?>>Large (15.7 - 31 Kg) </option>
                  <option value="Extra Large" <?php if($grooming->ukuran_hewan == "Extra Large") echo 'selected'; ?>>Extra Large (Lebih dari 31.1 Kg) </option>
              </select>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Daftar
            </button><br>
            <label class="form-label" for="form3Example4">*Untuk menghitung total harga grooming, gunakan chatbot kami!</label>
            
            @auth
            <a class="form-label" href="/admin/datagrooming">Kembali</a>
            @endauth
            @guest
            <a class="form-label" href="/petgrooming">Kembali</a>
            @endguest
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

    @include('parts.footer')
<!-- Section: Design Block -->
</body>
</html>