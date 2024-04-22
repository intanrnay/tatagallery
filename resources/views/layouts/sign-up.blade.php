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
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
     <div class="container">
      {{-- <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5"> --}}
      <form action="/sign-up" class="form" method="POST">
        @csrf
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>

        <label>
        <input type="text" name="fullname" class="input @error('fullname') is-invalid @enderror" id="fullname" required value="{{  old('fullname') }}">
        <span>Fullname</span>
          @error('fullname')
          <div class="invalid-feedback">
            {{  $message }}
          </div>
          @enderror
        </label>

        <label>
        <input type="text" name="name" class="input @error('name') is-invalid @enderror" id="name" required value="{{  old('name') }}">
        <span>Nickname</span>
          @error('name')
          <div class="invalid-feedback">
            {{  $message }}
          </div>
          @enderror
        </label>

        <label>
          <input type="text" name="address" class="input @error('address') is-invalid @enderror" id="address" required value="{{  old('address') }}">
            <span>Address</span>
            @error('address')
            <div class="invalid-feedback">
              {{  $message }}
            </div>
            @enderror
        </label>

        <label>
          <input type="text" name="username" class="input @error('username') is-invalid @enderror" id="username" required="min:7|max:15|unique:users" value="{{  old('username') }}">
            <span>Username</span>
            @error('username')
            <div class="invalid-feedback">
              {{  $message }}
            </div>
            @enderror
        </label>

        <label>
          <input type="text" name="email" class="input @error('email') is-invalid @enderror" id="email" required="email:dns|unique:users" value="{{  old('email') }}">
            <span>Email</span>
            @error('email')
            <div class="invalid-feedback">
              {{  $message }}
            </div>
            @enderror
        </label>

        <label>
          <input type="password" name="password" class="input @error('password') is-invalid @enderror" id="password" required="">
            <span>Password</span>
            @error('password')
            <div class="invalid-feedback">
              {{  $message }}
            </div>
            @enderror
        </label>

        {{-- <label>
            <input required="" placeholder="" type="password" class="input">
            <span>Confirm password</span>
        </label> --}}
        <button class="submit">Submit</button>
        <p class="signin">Already have an acount? <a href="/sign-in">Login</a> </p>
         </form>
        </div>
      </div>


    </section>
  </main>
</body>

</html>
