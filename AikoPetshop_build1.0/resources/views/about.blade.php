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

    <!-- Testimonial Mulai -->
    <div class="container-fluid">
    <div class="container-fluid bg-promo rounded-4" style="margin: 45px 0;">
        <div class="container py-md-0" style="margin-inside: 30px">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-opacity-5 p-5">
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- Testimonial Akhir -->

    <!-- About Mulai -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5">
                <h6 class="text-primary text-uppercase">Tentang Kami</h6>
                <h1 class="display-7 text-uppercase mb-0">Aiko Pet Shop siap memberikan peliharaan anda perawatan terbaik</h1>
            </div>
                    <p class="fs-4 text-black mb-lg-4 text-center">Membutuhkan perawatan terhadap peliharaan anda? Aiko Pet Shop siap membantu!<br />
                    <br />
                        Aiko Pet Shop memberikan kualitas pelayanan terbaik dengan menyediakan brand-brand lokal dan internasional yang pas dan terbaik untuk peliharaan anda. 
                        Aiko Pet Shop juga melayani Pet Hotel dimana anda dapat menaruh peliharaan anda untuk sementara, 
                        serta Pet Grooming untuk tetap menjaga kualitas kesehatan peliharaan kesayangan anda. 
                        Aiko Pet Shop Juga menawarkan berbagai produk pilihan dari berbagai kategori, 
                        mulai dari makanan, vitamin serta obat-obat.<br /></p>
                    </div>

<!-- TIM PETSHOP MULAI -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h4 class="display-5 text-uppercase mb-0">Owner Aiko Pet Shop</h4>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/owneraiko.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                            Putra Fajar
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Putra Fajar</h5>
                        <p class="m-0">Owner</p>
                    </div>
                </div>                
            </div>
            <!-- TIM PETSHOP AKHIR -->
        </div>
    </div>
    </div>
</div>
    <!-- About Akhir -->

    <!-- Jadwal Mulai -->
    <div class="container-fluid">
    <div class="container-fluid bg-jadwal rounded-4" style="margin: 45px 0;">
        <div class="container py-md-0" style="margin-inside: 30px">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-opacity-5 p-5">
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- Jadwal Akhir -->

    @include('parts.chatbot')
    @include('parts.footer')

</body>

</html>