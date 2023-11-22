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
    <title>Detail Berita | Tasty Food</title>
</head>
<body>
  {{-- Navbar --}}
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
              DETAIL BERITA
          </h1>
        </div>
    </section>
  </div>
  {{-- Akhir Navbar --}}
  <div class="container center text-center mt-3">
    <img src="/storage/{{ $news->foto }}" class="img-fluid shadow rounded-start" alt="..." style="width:50%;">
  </div>
  <div class="container text-center " style="padding-top:12%">
    <div class="row-12 shadow border border-b border-dark" style="border-radius: 20px">
      <div class="col">
        <h1 class="mt-3">{{ $news->judul }}</h1>
        <p class="mt-3" style="padding-left: 5%;padding-right:5%">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris urna mi, euismod at sollicitudin non, porttitor nec sapien. Sed blandit fermentum metus vitae congue. Integer non nulla turpis. Quisque id placerat turpis. Mauris tempor dignissim justo sed maximus. Vestibulum ac rhoncus mauris. Duis fermentum bibendum lacus mattis aliquam. Proin dignissim ex vitae arcu suscipit feugiat. Donec eu quam pulvinar, volutpat sapien vitae, dictum elit. In libero ligula, aliquam tempor lobortis vel, molestie nec lorem. Aenean ut pulvinar lorem. Donec non imperdiet ipsum, posuere fringilla elit. Sed arcu nulla, convallis sed interdum in, dapibus quis quam. Nam auctor diam nec sem tristique posuere. Vivamus ante purus, pellentesque et lectus id, pretium gravida purus.

          Praesent consequat enim eu molestie blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque quis massa nisl. Etiam bibendum placerat venenatis. Duis sodales posuere purus sed placerat. Proin nec erat tristique, feugiat nibh vitae, porttitor lectus. Integer luctus sapien id purus pretium, at tincidunt mi tempus. Nulla non tincidunt erat. Morbi vitae mollis enim. Nam lobortis turpis eget mauris vehicula, sit amet consectetur quam dictum. Curabitur non dolor facilisis, suscipit enim a, venenatis ante. Cras congue dolor nisi, eget dignissim est varius sed.
          
          Aliquam justo sapien, lobortis vitae leo vestibulum, sodales cursus dolor. Integer maximus lacinia dui semper scelerisque. Integer vestibulum mi enim, sed facilisis nulla iaculis ut. Ut aliquam porta nulla vitae maximus. Cras varius massa vel justo euismod, a iaculis mauris iaculis. Pellentesque ac posuere ante. Pellentesque condimentum magna a velit condimentum, at vestibulum tortor placerat. Quisque viverra ex at ex dictum, sed aliquam libero mollis. Pellentesque velit erat, porttitor eget fermentum quis, scelerisque id enim. Vestibulum eget pulvinar nibh, non placerat neque. Nullam dignissim ullamcorper diam vitae viverra. Vestibulum vel felis vitae dui lacinia venenatis non vitae neque. Donec ornare nisi et ipsum vulputate, at iaculis orci vestibulum. Nam ultrices porta pharetra.
          
          Pellentesque ultricies felis ut massa mollis congue. Phasellus non dui ac dolor euismod efficitur sit amet nec tellus. Phasellus consequat interdum orci, eget faucibus risus tempor sed. Morbi mi nunc, luctus a ex vel, tempor hendrerit ligula. In hac habitasse platea dictumst. Aenean feugiat mi odio, ac auctor mi cursus sit amet. Donec tempor enim eu dui egestas vulputate. Donec suscipit magna accumsan venenatis aliquet. Curabitur pellentesque dui interdum libero dictum hendrerit. In hac habitasse platea dictumst.
          
          Suspendisse aliquam diam quis urna rutrum, quis maximus orci venenatis. Donec tristique interdum vestibulum. Nullam pretium interdum sapien sit amet scelerisque. Etiam tempus orci erat, non faucibus purus venenatis at. Nam ut enim ut diam egestas dictum ac in diam. Morbi dignissim, lorem at condimentum congue, mauris nibh maximus orci, a ultrices lacus enim congue sapien. Nulla ac congue nisl, ut dictum leo. Duis nec mi non ligula laoreet sodales ut eget quam. Quisque lectus ligula, ullamcorper et sodales ac, sagittis quis libero. Phasellus blandit aliquam accumsan.</p>
        </div>
        <button class="btn text-white back mt-3 mb-5" style="background-color: black;border-radius:0%">KEMBALI</button>
      </div>
  </div>
  {{-- footer --}}
  <section class="mt-5">
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
    .center {
        position: absolute;;
        top: 65%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
}
/* #header{
        background-image: url({{ asset('img/Group-70.png') }})
    } */
    .parallax-window {
    min-height: 400px;
    background: transparent;
}
.back{
      padding-left: 9%;
      padding-right: 9%;
      padding-top: 10px;
      padding-bottom: 10px
    }
  /* blurred{
    filter: blur(8px);
    -webkit-filter: blur(8px);
  } */
</style>