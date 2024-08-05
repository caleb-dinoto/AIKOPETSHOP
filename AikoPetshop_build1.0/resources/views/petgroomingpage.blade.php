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
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    @include('parts.navbar')

    <!-- Hero Mulai -->
    <div class="container-fluid bg-primary py-5 mb-2 hero-header">
       
        <div class="container py-1">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-white mb-lg-4">Aiko Pet Grooming</h1>
                    <p class="fs-4 text-white mb-lg-4">Aiko Pet Shop Grooming merupakan sebuah jasa pet grooming yang tersedia untuk anabul kesayangan anda, dengan melakukan grooming di Aiko PetShop, anabul anda akan di handle oleh orang yang tepat.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-2">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="img/pricelist2022.jpg" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">PRICE LIST LENGKAP</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Akhir -->

    <!-- Video Modal Mulai -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price List Grooming</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-4x3">
                        <iframe class="embed-responsive-item" src="img/pricelist2022.jpg" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal Akhir -->

    <div class="container-fluid py-5">
        <div class="container">
    
        <!-- Slideshow Begin -->

        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-bg-danger bg-gradient rounded-3">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <h2 class="fs-4 text-white mb-lg-4">Dibawah ini merupakan sebuah contoh dari hasil melakukan grooming di Aiko Pet Shop!</h2>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/grooming1.jpg" class="d-block w-100" alt="nomor1">
                
                </div>
                <div class="carousel-item">
                <img src="img/grooming2.jpg" class="d-block w-100" alt="nomor2">
                
                </div>
                <div class="carousel-item">
                <img src="img/grooming3.jpg" class="d-block w-100" alt="nomor3">
                
                </div>
                <div class="carousel-item">
                    <img src="img/grooming4.jpg" class="d-block w-100" alt="nomor4">
                
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            <br />
            <hr solid>
            <h3 class="fs-4 text-white mb-lg-4">Dalam Instagram kami, terdapat lebih banyak hasil dari Aiko Pet Shop Grooming. Silahkan klik link dibawah.</h3>
            <a href="https://www.instagram.com/stories/highlights/17846938685431524/?hl=id" class="link-info"><i class="bi bi-instagram"></i>@aiko.petshop2020</a>
            
           
            </div>
          </div>

          <!-- Slideshow End -->

          <div class="col-md-6">
            <div class="h-100 p-5 bg-danger bg-gradient border rounded-3">
              <h2 class="text-light">Price List</h2>
              <h3 class="fs-4 text-white mb-lg-4">Aiko PetShop memiliki beberapa penawaran menarik untuk proses grooming anabul kesayangan anda.</h3>
              <br />
              <h4 class="fs-4 text-white mb-lg-4">Silahkan...</h4>
              <img src="img/pricelist2022.jpg" width="100%">
              <br />
             
          </div>
        </div>
        <div class="container pt-5">
            <div class="col-md-12 text-center">
                <h3>Apakah anda tertarik untuk mencoba grooming pada Aiko PetShop?</h3>
                <h4 class="pb-3">Jika anda tertarik silahkan menekan tombol Daftar! Kami akan mengontak anda segera!</h4>
                <a class="btn btn-danger bg-gradient" role="button" href="/daftargrooming">Daftar!</a>
            </div>
        </div>
</div>
</div>
</div>

@include('parts.chatbot')
@include('parts.footer')

</body>

</html>