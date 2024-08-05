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
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"  rel="stylesheet">
</head>
<body>
    @include('parts.navbar')
    <!-- Hero Mulai -->
    <div class="container-fluid bg-primary py-5 mb-2 hero-header">
        <div class="container py-5">
        <div class="container py-5">
        <div class="container py-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-white mb-lg-4">Aiko Petshop</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Quality Pet Shop & Services</h1>
                    <p class="fs-4 text-white mb-lg-4">Hewan peliharaan berkualitas dan sehat, datang dari perawatan yang berkualitas.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="/about" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Tentang Kami</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://youtube.com/embed/CKYxdFPHI6Y" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Video Petshop</h5>
                    </div>
                </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal Akhir -->

    <!-- Values Mulai -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
        <!-- PENYANYANG BINATANG -->
                <div class="ko col-md-4 Services-tab item">
                    <div class="ko folded-corner service_tab_1">
                        <div class="ko text">
                            <i class="ko fas fa-dog fa-5x fa-icon-image"></i>
                            <p class="ko item-title">
                            <p class="h3"> Penyayang Binatang</p>
                            </p><!-- /.item-title -->
                            <p>
                                Grooming Peliharaan di Aiko Petshop (ataupun di rumah Kamu), Groomer Kami selalu berusaha memperlakukan anabul kamu dengan hati-hati dan penuh kesayangan.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PROFESIONAL-->
                <div class="ko col-md-4 Services-tab item">
                    <div class="ko folded-corner service_tab_1">
                        <div class="ko text">
                            <i class="ko fas fa-award fa-5x fa-icon-image" ></i>
                            <p class="ko item-title">
                            <p class="h3"> Profesional</p>
                            </p><!-- /.item-title -->
                            <p>
                                Semua Groomer di Aiko Petshop mempunyai Pengalaman & Standar Prosedur (SOP) terbaik dalam melayani Grooming anabul kesayangan Kamu.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- PRODUK AMAN & nyaman-->
                <div class="ko col-md-4 Services-tab item">
                    <div class="ko folded-corner service_tab_1">
                        <div class="ko text">
                            <i class="ko fas fa-shield-alt fa-5x fa-icon-image"></i>
                            <p class="ko item-title">
                            <p class="h3"> Produk Aman & Nyaman</p>
                            </p>
                            <p>
                                Setiap produk Grooming yang kami gunakan menggunakan produk-produk Premium yang 100% aman untuk anabul Kamu. Selain itu Groomer kami juga siap kamu booking kapanpun, demi melayani kamu dan anabul kesayangan di rumah kamu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Values End -->
   
    <!-- Visi Misi Mulai -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/grooming1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Aiko Petshop</h6>
                        <h1 class="display-5 text-uppercase mb-0">Quality Pet Shop & Services</h1>
                    </div>
                    <h4 class="text-body mb-4">
                    Pilihan terbaik untuk memenuhi kebutuhan hewan peliharaan anda! Menyediakan produk dan service berkualitas.</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Misi Kami</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Visi Kami</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">
                                Memberikan pelayanan terbaik dalam menjaga hewan peliharaan.
                                Memberikan penanganan yang aman dan profesional dengan tenaga kerja disiplin, bertanggung jawab, dan penyayang hewan.
                                Berupaya menyediakan produk kesehatan hewan serta alat yang lengkap dan terbaik untuk kepentingan kesehatan hewan peliharaan.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">
                                Menjadi pusat petshop terbaik, terlengkap dan terpercaya dalam melayani dan menjaga hewan peliharaan. 
                                Berupaya mendapatkan brand image yang kuat sehingga kami menjadi pilihan utama masyarakat untuk merawat dan melengkapi kebutuhan hewan peliharaan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi Akhir -->
    
    <!-- Services Mulai -->
    <div class="container-fluid py-5">
            <div class="container">
                <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                    <h6 class="text-primary text-uppercase">Services</h6>
                    <h1 class="display-5 text-uppercase mb-0">Berbagai Services Berkualitas dari Aiko Petshop</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-grooming display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                                <p>Aiko Pet Shop menyediakan juga sebuah jasa grooming berupa paket Basic, Treatment Jamur, Cutting, Coat khusus hewan, dan juga paket lengkap untuk anabul anda dengan harga bersahabat dan kualitas yang terjamin.</p>
                                <a class="text-primary text-uppercase" href="/petgrooming">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-food display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Produk Hewan Peliharaan</h5>
                                <p>Aiko Pet Shop menjual peralatan dan kebutuhan konsumsi anabul anda dari yang kualitas lokal terbaik hingga kualitas premium terbaik.</p>
                                <a class="text-primary text-uppercase" href="/products">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-house display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Hotel (COMING SOON)</h5>
                                <p>Aiko Pet Shop memiliki rencana untuk membangun Pet Hotel yang nyaman untuk anabul anda, dengan perawatan professional dan ditawarkan dengan harga yang terjangkau.</p>
                                <a class="text-primary text-uppercase" href="/pethotel">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Services Akhir -->

    <!-- Testimonial Mulai -->
    <div class="container-fluid bg-testimonial py-0 rounded-4" style="margin: 45px 0;">
        <div class="container py-md-0" style="margin-inside: 30px">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-opacity-5 p-5 ">
                        <div class="bg-white pt-5 rounded pb-3">
                            <div class="testimonial-item text-center">
                                <h5 class="text-uppercase">ULASAN AIKO PETSHOP</h5>
                                <hr class="w-50 mx-auto">
                                <a href="https://www.google.com/maps/place/Aiko+Pet+Shop+%26+Grooming/@-6.262755,106.6172311,17z/data=!4m7!3m6!1s0x2e69fdc21d9f000d:0x5d58fdf989329bcd!8m2!3d-6.2627328!4d106.619428!9m1!1b1">
                                    <span>Google Reviews</span></a>
                                <p class="pt-5"><script defer async src='https://cdn.trustindex.io/loader.js?0c9f99b11ff515971106af8b261'></script></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <!-- Testimonial Akhir -->
   
    @include('parts.chatbot')
    @include('parts.footer')
</body>

</html>