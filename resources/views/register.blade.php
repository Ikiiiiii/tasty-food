<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-6/css/all.css') }}">
</head>
<body style="background-color: #212529">
  <div class="container d-flex justify-content-center pt-5 mt-5">
    <div class="card" style="width: 20rem;">
      <div class="card-header d-flex">
          <a href="/login"><i class="fa-solid fa-arrow-left"></i></a>
          <h5 style="padding-left: 5%;">Please Register</h5>
      </div>
      <div class="card-body">
        <div class="container">
          <form action="register/create" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama lengkap</label>
              <input type="text" class="form-control" placeholder="Input your name" name="name" id="name"> 
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Input your email" name="email" id="email">
              </div>
             <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Set your password" name="password" id="password">
              </div>
            <button type="submit" class="btn text-white" style="padding-right: 105px;padding-left: 105px;background-color:black">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
 
            
</body>
</html>