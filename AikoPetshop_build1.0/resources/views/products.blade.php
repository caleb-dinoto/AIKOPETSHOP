<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
  .toko body{
    vertical-align: middle;
    display: flex;
    font-family: 'Calibri', sans-serif !important;
    background-color:#eee
  }

  .mt-100{
    margin-top:100px
  }
  .product-wrapper, .product-img{overflow: hidden;
    position: relative
  }
  .mb-45{
    margin-bottom: 45px
  }
  .product-action{
    bottom: 0px;
    left: 0;
    opacity:0%;
    position: absolute;
    right: 0;
    text-align: center;
    transition: all 0.6s ease 0s
  }
  .product-wrapper{
    border-radius: 10px
  }
  .product-img >span{
    background-color: #fff;
    box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
    color: #333;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    left: 20px;
    letter-spacing: 1px;
    padding: 3px 12px;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 20px
  }
  .product-action-style{
    background-color: #ececec00  ;
    box-shadow: 0 0 3px 1.7px rgba(0, 0, 0, 0.06);
    display: inline-block;
    padding: 0px  0px 0px 0px
  }
  .product-action-style >a{
    color: #979797;
    line-height: 1;
    padding: 0 21px;
    position: relative}
  .product-action-style >a.action-plus{
    font-size: 18px
  }
  .product-wrapper:hover .product-action{
    bottom: 20px;opacity: 1
  }
</style>

<?php
$colCount = 0;
?>

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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
</head>
<body>
    @include('parts.navbar')
    @include('parts.chatbot')

    <!-- Hero Mulai -->
    <div class="container-fluid bg-primary py-5 mb-2 hero-header">
       
        <div class="container py-1">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-white mb-lg-4">Produk Aiko Petshop</h1>
                    <p class="fs-4 text-white mb-lg-4">Tersedia di Tokopedia, dan dapat diantar ke rumah anda!</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-2">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Akhir -->

    <div class="container d-flex text-bg-grey bg-gradient rounded-3 justify-content-center mt-100">
    <div class="row">
        @foreach($produks as $produk)
              <?php $colCount++ ?>

            <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center border border-1 border-dark shadow">
                <div class="product-img">
                <a href="#" data-abc="true">
                  <img src="../storage/{{$produk->photo}}" alt="" style="width:270px;height:270px;">
                </a>
                <span class="text-center"><i class="fa"></i>Rp{{$produk->harga}}</span>
                <div class="product-action">
                    <div class="product-action-style">
                    <b class="text-white">{{$produk->nama_produk}}</b><br>
                    <a href="{{$produk->link}}"><img src="img/tokped.png" style="width:50px;height:50px;"></a>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <?php if ($colCount % 4 == 0){
                echo '</div></div>
                <div class="container d-flex text-bg-grey bg-gradient rounded-3 justify-content-center">
                <div class="row">';
            }
            ?>
            @endforeach
    </div>
    </div>

        <div class="container pt-4">
            <div class="col-md-12 text-center">
                <h3>Tertarik untuk membeli produk dari Aiko PetShop?</h3>
                <h4 class="pb-4">Silahkan cek Tokopedia kami atau langsung saja hubungi lewat WhatsApp!</h4>
                <a href="https://www.tokopedia.com/aiko-pet" class="btn btn-success bg-gradient" role="button"><i class="bi"></i>tokopedia.com/aiko-pet</a>
            </div>
        </div>
        
        
    </div>
    </div>

    @include('parts.footer')
    </body>

</html>