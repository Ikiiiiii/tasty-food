<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="{{ asset('parallax/parallax.js') }}"></script>
  <title>Home | Tasty Food</title>
</head>
<body>
  {{-- < class="container-fluid"> --}}
    <section id="header" style="100vh;padding-bottom:15%">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" style="margin-left:6%;margin-top:5%">
          <a class="navbar-brand" href="/">TASTY FOOD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/tentang">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/berita">BERITA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/galeri">GALERI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/kontak">KONTAK</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div style="margin-left: 7%">
        <h1 class="mb-5">
          _____
        </h1>
        <h1>
          HEALTHY <br>
          TASTY FOOD
        </h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam laboriosam <br>
          amet pariatur distinctio voluptate, sequi natus alias rem iusto temporibus accusantium, <br>
          id doloribus dolorem officiis cumque fugit debitis, <br>
          molestias ut.
        </p>
        <button class="btn text-white btntentang" style="background-color: black;border-radius:0%">TENTANG KAMI</button>
      </div>
    </section>  

<section class="mt-5" id="tentang">
  <div class="container-fluid text-center">
    <h2 class="mb-4">
      TENTANG KAMI
    </h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit <br>
      tempore ipsum laborum autem repellat recusandae animi, ea asperiores nesciunt molestias <br>
      non laudantium velit, delectus libero aperiam hic <br>
      pariatur quam.
    </p>
    <h1>
      ______
    </h1>
  </div>
</section>

  <section id="item" style="100vh;padding-bottom: 2%;margin-top:6%">
    <div class="container-fluid">
      <div class="p-5 text-center">
        <div class="row justify-content-center">
          {{-- <div class="col-md-4 mb-3"> --}}
            <div class="col-card" style="width:19rem; height: 15rem;margin-top:10.5%;margin-right:-1%">
              <div class="card-body bg-light" style="padding-top:10%;padding-bottom:10%;border-radius:10px 10px">
              <img src="{{ asset('img/img-1.png') }}" width="250" style="margin-top:-50%" alt="" />
                <h3 class="fw-bold mb-1 mt-3">LOREM IPSUM</h3>
                <p class="card-text mb-4">
                  Lorem ipsum dolor sit amet, <br>
                  consectetur adipisicing elit. <br>
                  Phasellusornare, augue eu <br>
                  rutrum commodo, <br>
                </p>
              </div>
            </div>
          {{-- </div> --}} 
          {{-- <div class="col-md-4 mb-3"> --}}
            <div class="col-card" style="width:19rem; height: 15rem;margin-top:10.5%;margin-right:-1%">
              <div class="card-body bg-light" style="padding-top:10%;padding-bottom:10%;border-radius:10px 10px">
              <img src="{{ asset('img/img-2.png') }}" width="250" style="margin-top:-50%" alt="" />
                <h3 class="fw-bold mb-1 mt-3">LOREM IPSUM</h3>
                <p class="card-text mb-4">
                  Lorem ipsum dolor sit amet, <br>
                  consectetur adipisicing elit. <br>
                  Phasellusornare, augue eu <br>
                  rutrum commodo, <br>
                </p>
              </div>
            </div>
          {{-- </div> --}} 
          {{-- <div class="col-md-4 mb-3"> --}}
            <div class="col-card" style="width:19rem; height: 15rem;margin-top:10.5%;margin-right:-1%">
              <div class="card-body bg-light" style="padding-top:10%;padding-bottom:10%;border-radius:10px 10px">
              <img src="{{ asset('img/img-3.png') }}" width="250" style="margin-top:-50%" alt="" />
                <h3 class="fw-bold mb-1 mt-3">LOREM IPSUM</h3>
                <p class="card-text mb-4">
                  Lorem ipsum dolor sit amet, <br>
                  consectetur adipisicing elit. <br>
                  Phasellusornare, augue eu <br>
                  rutrum commodo, <br>
                </p>
              </div>
            </div>
          {{-- </div> --}} 
          {{-- <div class="col-md-4 mb-3"> --}}
            <div class="col-card" style="width:19rem; height: 15rem;margin-top:10.5%;margin-right:-1%">
              <div class="card-body bg-light" style="padding-top:10%;padding-bottom:10%;border-radius:10px 10px">
              <img src="{{ asset('img/img-4.png') }}" width="250" style="margin-top:-50%" alt="" />
                <h3 class="fw-bold mb-1 mt-3">LOREM IPSUM</h3>
                <p class="card-text mb-4">
                  Lorem ipsum dolor sit amet, <br>
                  consectetur adipisicing elit. <br>
                  Phasellusornare, augue eu <br>
                  rutrum commodo, <br>
                </p>
              </div>
            </div>
          {{-- </div> --}} 
        </div>
      </div>
    </div>
    {{-- Halaman Berita --}}
    <div class="container-fluid" style="margin-top: 20%">
      <h2 class="mx-5 my-5 text-center">BERITA KAMI</h2>
      <div class="row-12 d-flex justify-content-center">
        <div class="col-6" style="padding-left:55px;width:40rem">
          <div class="card">
            <img src="storage/{{ $news->foto }}" class="card-img-top" alt="Cabe" />
            <div class="card-body text-start">
              <h3 class="mb-4">{{ $news->judul }}</h3>
              <p style="padding-bottom:210px">{{ $news->deskripsi }}</p>
              <a href="" class="text-decoration-none" style="color: rgb(211, 211, 25)">Baca selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          @foreach ($newss->take(4) as $item)
          <div class="col-5">
            <div class="card mb-2" style="width:17rem;">
              <img src="storage/{{ $item->foto }}" class="card-img-top" alt="Brokoli">
              <div class="card-body text-start">
                <h3 class="mb-3">{{ $item->judul }}</h3>
                 <p style="padding-bottom:20px">{{ Str::limit($item->deskripsi) }}</p>
                <a href="" class="text-decoration-none" style="color: rgb(211, 211, 25)">Baca selengkapnya</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid" style="padding-left: 50px;padding-right: 50px">
      <h2 class="text-center mx-5 my-5">GALERI KAMI</h2>
      <div class="row d-flex justify-content-center mb-3">
        @foreach ($product->take(6) as $item)
        <div class="col d-flex justify-content-center mb-3">
          <img src="storage/{{ $item->foto_product }}" style="border-radius:5%;" width="365" height="365" alt="">
          {{-- <img class="mx-3" src="{{ asset('img/orangecut.jpg') }}" style="border-radius:5%;" width="365" height="365" alt="">
          <img class="mx-3" src="{{ asset('img/salad.jpg') }}" style="border-radius:5%;" width="365" height="365" alt=""> --}}
        </div>
        @endforeach
      </div>
      <div class="text-center mb-5 mt-5">
          <button class="btn text-white seemore" style="background-color: black;border-radius:0%">LIHAT LEBIH BANYAK</button>
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
    </div>
  </section>
</body>
</html>

<style>
  #header{
    background-image: url({{ asset('img/img-4.png') }});
    background-repeat: no-repeat;
    background-size: 60%;
    background-position: 739px -140px;
    background-color: rgb(243, 231, 228);
  }
  .navbar{

  }
  .btntentang{
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 10px;
    padding-bottom: 10px
  }
  .seemore{
    padding-right:3%;
    padding-left:3%;
    padding-top: 6px;
    padding-bottom: 6px
  }
  #item{
    background-image: url({{ asset('img/Group-70.png') }});
    background-repeat: no-repeat;
    background-color: rgb(243, 231, 228);
  }
</style>