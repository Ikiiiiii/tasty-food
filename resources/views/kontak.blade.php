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
    <title>Kontak | Tasty Food</title>
</head>
<body>
    {{-- header --}}
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
                KONTAK KAMI
            </h1>
          </div>
      </section>
  </div>
    {{-- akhir header --}}
    {{-- form kontak --}}
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col" style="padding-top:5%;margin-left:5%;padding-bottom:5%">
                    <h2><b>KONTAK KAMI</b></h2>
                </div>
            </div>
            <form action="kontak/create" method="post" id="form-contact">
              @csrf
              <div class="row d-flex">
                  <div class="col-6" style="padding-left:6%">
                          <div class="mb-3">
                              <input type="text" class="form-control form-control-lg border-dark" placeholder="Subject" name="subject" id="subject" style="height:95.1px" >
                          </div>
                          <div class="mb-3">
                              <input type="text" class="form-control form-control-lg border-dark" placeholder="Name" name="name" id="name" style="height:95.1px">
                          </div>
                          <div class="mb-3">
                              <input type="email" class="form-control form-control-lg border-dark" placeholder="Email" name="email" id="email" style="height:95.1px">
                          </div>
                  </div>
                  <div class="col-6" style="padding-right:5%">
                          <div class="mb-3">
                              <textarea class="form-control form-control-lg border-dark" placeholder="Message"  name="message" id="message" rows="10"></textarea>
                          </div>
                  </div>
              </div>
              <div class="col-12 text-center">
                  <button class="btn text-white kontak" style="background-color: black">KIRIM</button>
              </div>
            </form>
            <div class="row-12 d-flex justify-content-center" style="margin-top:10%;padding-bottom:5%">
                <div class="col-4 text-center">
                    <img src="{{ asset('img/Group-66.png') }}" width="80px" alt="">
                    <h4>EMAIL</h4>
                    <p>tastyfood@gmail.com</p>
                </div>
                <div class="col-4 text-center">
                    <img src="{{ asset('img/Group-67.png') }}" width="80px" alt="">
                    <h4>PHONE</h4>
                    <p>+62 812 3456 7890</p>
                </div>
                <div class="col-4 text-center">
                    <img src="{{ asset('img/Group-68.png') }}" width="80px" alt="">
                    <h4>LOCATION</h4>
                    <p>Kota Bandung, Jawa Barat</p>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir form kontak --}}
    {{-- lokasi --}}
    <section>
        <div class="container-fluid" style="background-color:rgb(243, 231, 228)">
            <div class="container text-center" style="padding-top:5%;padding-bottom:5%">
                {{-- <img src="{{ asset('img/bandung.jpg') }}" alt=""> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.185409352403!2d107.66414008179939!3d-6.944690758809099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1691635077020!5m2!1sid!2sid" width="750" height="416" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    {{-- akhir lokasi --}}
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
    .kontak{
      margin-left: 1%; 
      padding-left: 43%; 
      padding-right: 44%;
      padding-top:10px;
      padding-bottom:10px
    }
</style>