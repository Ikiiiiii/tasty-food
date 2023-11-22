<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('parallax/parallax.js') }}"></script>
    <title>Galeri | Tasty Food</title>
</head>
<body>
  <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/Group-70.png') }}">
    <section id="header" style="100vh;padding-bottom:10%">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid" style="margin-left:6%;margin-top:5%">
              <a class="navbar-brand text-light" href="/">TASTY FOOD</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" style="margin-right: 6%;margin-top:5.5%" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="/tentang">TENTANG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="/berita">BERITA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="/galeri">GALERI</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" aria-current="page" href="/kontak">KONTAK</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="text-white" style="margin-left: 6.6%">
            <h1 style="margin-top: 8.5%;margin-bottom:4%">
                GALERI KAMI
            </h1>
          </div>
      </section>
  </div>
      <section id="carousel">
         <div class="container-fluid" style="background-color:rgb(243, 231, 228)">
            <div class="container" style="padding-top:5%;padding-bottom:5%">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner" style="border-radius:20px">
                      <div class="carousel-item active">
                        <img src="{{ asset('img/orange2.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/mameun4.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/endogcut.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>    
            </div>
        </div>   
      </section>

    <section id="galeri">
      <div class="container" style="margin-top: 5%;margin-bottom:5%">
        <div class="row d-flex justify-content-center" style="margin-bottom:1%">
          @foreach ($product as $item)
              <div class="col-3 text-center mb-3">
                  <img src="storage/{{ $item->foto_product }}" style="border-radius:5%" alt="" width="100%">
              </div>
          @endforeach
          </div>
      </div>
    </section>

    <section>
      <div class="container-fluid" style="background-color:black">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-10 text-light">
          <div class="col mb-3" style="padding-left:5%">
            <h2><b>Tasty Food</b></h2>
            <p style="font-size: 0.8rem" class="text-secondary">Lorem, ipsum dolor sit amet consecteturadipisicing elit. Consequuntur officia itaque adomnis pariatur fuga quaerat fugiat cumque, impedit, rerum, quae deleniti error voluptatum  </p>
            <img src="{{ asset('img/001-facebook.png') }}" width="40" alt="" style="margin-right: 2%">
            <img src="{{ asset('img/002-twitter.png') }}" width="40" alt="">
          </div>
      
          <div class="col mb-3">
            <h5>Useful links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Blog</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Hewan</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Galeri</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Testimonial</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Privacy</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Karir</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Tentang Kami</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Kontak Kami</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Servis</a></li>
            </ul>
          </div>
      
          <div class="col mb-3">
            <h5>Contact Info</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2 d-flex"><img src="{{ asset('img/Group-66.png') }}" alt="" width="30" style="padding-right:3px"><a href="#" class="nav-link p-0 text-light">tastyfood@gmail.com</a></li>
              <li class="nav-item mb-2 d-flex"><img src="{{ asset('img/Group-67.png') }}" alt="" width="30" style="padding-right:3px"><a href="#" class="nav-link p-0 text-light">+62 812 3456 7890</a></li>
              <li class="nav-item mb-2 d-flex"><img src="{{ asset('img/Group-68.png') }}" alt="" width="30" style="padding-right:3px"><a href="#" class="nav-link p-0 text-light">Kota Bandung, Jawa Barat</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </section></body>
</html>

<style>
    /* #header{
        background-image: url({{ asset('img/Group-70.png') }})
    } */
    .parallax-window{
      min-height: 400px;
      background: transparent;
    }
</style>