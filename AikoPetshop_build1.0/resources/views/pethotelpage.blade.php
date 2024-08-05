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
                    <h1 class="display-1 text-uppercase text-white mb-lg-4">Aiko Pet Hotel (COMING SOON!)</h1>
                    <p class="fs-4 text-white mb-lg-4">Ingin berpergian namun khawatir hewan peliharaan kamu kesepian di rumah? Aiko Pet Hotel Solusinya, kami akan menjaga hewan peliharaan anda.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-2">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Akhir -->

    <div class="container-fluid py-5">
        <div class="container">
    
        <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-danger bg-gradient rounded-3">
              <h2 class="text-light">Pet Hotel</h2>
              <h3 class="fs-4 text-white mb-lg-4">Ketika seorang pemilik ingin pergi ke suatu tempat tenang di aiko pet shop siap membantu menjaga anabul anda.</h3>
              <br />
              <img src="img/pethotel.jpeg" width="100%">
              <br /> 
          </div>
        </div>

          <div class="col-md-6">
            <div class="h-100 p-5 text-bg-danger bg-gradient rounded-3">
                <h3 class="fs-4 text-white mb-lg-4">Feels just like home, feels comfortable.</h3>
             <img src="img/pethotel2.jpg" width="100%">
             <br />
            </div>
          </div>

        <div class="container pt-4">
            <div class="col-md-12 text-center">
                <h3>Apakah anda tertarik untuk mencoba Pet hotel pada Aiko PetShop?</h3>
                <h4 class="pb-4">Terus ikuti Instagram kami untuk mendapat update terbaru!</h4>
                <a href="https://www.instagram.com/aiko.petshop2020" class="h4 link-danger text-decoration-underline pt-4"><i class="bi bi-instagram"></i>@aiko.petshop2020</a>
            </div>
        </div>
</div>
</div>
</div>
</div>

    @include('parts.chatbot')
    @include('parts.footer')
</body>

</html>