<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Bluespace
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/bluesky.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">REGISTRATION</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action="/sign-up" method="post">
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" id="fullname" required value="{{  old('fullname') }}">
                      <label class="form-label">Full Name</label>
                      @error('fullname')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required value="{{  old('name') }}">
                      <label class="form-label">Nickname</label>
                      @error('name')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" required value="{{  old('address') }}">
                      <label class="form-label">Address</label>
                      @error('address')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{  old('username') }}">
                      <label class="form-label">Username</label>
                      @error('username')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{  old('email') }}">
                      <label class="form-label">Email address</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                      <label class="form-label">Password</label>
                      @error('password')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-primary btn-lg w-100 mt-4 mb-0 text-white">Register</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="/sign-in" class="text-dark text-gradient font-weight-bold">Login</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>