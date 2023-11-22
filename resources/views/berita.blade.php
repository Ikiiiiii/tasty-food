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
    <title>Berita | Tasty Food</title>
</head>
<body>
    {{-- header --}}
    <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/Group-70.png') }}">
      <section id="header" style="100vh;padding-bottom:10%;">
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
                BERITA KAMI
            </h1>
          </div>
      </section>
    </div>
    {{-- akhir header --}}
    {{-- main berita --}}
    <section>
        <div class="container-fluid" style="background-color: rgb(243, 231, 228)">        
            <div class="row-12 d-flex">
                <div class="col-3" style="padding-top:5%;padding-bottom:5%;margin-left:5%">
                    <img src="{{ asset('img/salad.jpg') }}" width="500px" height="500px" style="border-radius:20px" alt="">
                </div>
                <div class="col-5" style="padding-top:10%;padding-bottom:5%;margin-left:15%">
                    <h2>APA SAJA MAKANAN KHAS NUSANTARA</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sunt porro esse id, dolores ullam tempore ipsum consectetur omnis tempora ipsam quibusdam impedit aperiam quas fuga magni veritatis! Quisquam, nam? Viverra ante.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sunt porro esse id, dolores ullam tempore ipsum consectetur omnis tempora ipsam quibusdam impedit aperiam quas fuga magni veritatis! Quisquam, nam? Viverra ante.</p>
                    <button class="btn text-white readmore">BACA SELENGKAPNYA</button>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir main berita --}}
    {{-- berita lainnya --}}
    <section>
        <div class="container-fluid" style="padding-bottom: 5%">
            <div class="row">
                <div class="col-4" style="padding-top:5%;margin-left:5%;padding-bottom:5%">
                    <h3 class="fw-bold">BERITA LAINNYA</h3>
                </div>
            </div>
            <div class="row d-flex">
              @foreach ($news as $item)
              <div class="col-2 mb-3" style="margin-left:5%;margin-right:10px">
                  <div class="card" style="width: 18rem">
                      <img src="storage/{{ $item->foto }}" class="card-img-top" alt="...">
                      <div class="card-body" >
                        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->deskripsi) }}</p>
                        <a href="berita/{{ $item->id }}" class="text-decoration-none" style="color: rgb(211, 211, 25)">Go somewhere</a>
                      </div>
                   </div>
              </div>
              @endforeach
            </div>
        </div>
    </section>
    {{-- akhir berita lainnya --}}
    {{-- footer --}}
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
    </section>
    {{-- akhir footer --}}
</body>
</html>
<style>
    /* #header{
        background-image: url({{ asset('img/Group-70.png') }})
    } */
    .parallax-window{
      min-height: 400px;
      background: transparent;
    }
    .readmore{
      padding-left: 12%;
      padding-right: 12%;
      padding-top: 10px;
      padding-bottom: 10px;
      background-color: black;
      border-radius:0%
    }
</style>