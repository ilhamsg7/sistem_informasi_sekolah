<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/School-Icon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style/main.css') }}">
    <link rel="stylesheet" href="{{ asset('style/templatemo-training-studio.css') }}">
    <title>Seirin School | Official Website</title>

     <!-- Sintaks yang diperlukan untuk pembuatan fitur-fitur sort, search, dan filter -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"/>
     <script src="https://use.fontawesome.com/00909f12c6.js"></script>
     <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  </head>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <div id="app" class="main-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url({{ asset('images/BG-School.jpg') }})">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid" style="margin-left: 1%;margin-right: 1%;">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/School Logo Dark.png') }}" alt="" class="img-fluid" style="height: 45px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                <a class="nav-link {{ ($title === "Siswa") ? 'active' : '' }}" href="/siswa">Siswa</a>
                <a class="nav-link" href="#about">Tentang Kami</a>
                </div>
            </div>
            </div>
        </nav>
        <div class="container-fluid bg-main">
            @yield('content')
        </div>
    </div>
    <div class="container-fluid bg-main">
        @yield('content_2')
    </div>

    <div class="container-fluid bg-main">
        @yield('about')
    </div>

    <div class="container-fluid bg-main" id="about">
        @yield('pinned')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p style="letter-spacing: 2px">Copyright &copy; <b style="color: #E9AD8B">Ilham Sinatrio Gumelar</b> - UTS Project MI2D SISTEM INFORMASI SEKOLAH</a></p>

                    <!-- You shall support us a little via PayPal to info@templatemo.com -->

                </div>
            </div>
        </div>
    </footer>

    <!-- Plugins -->
    <script src="{{ asset('script/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('script/waypoints.min.js') }}"></script>
    <script src="{{ asset('script/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('script/imgfix.min.js') }}"></script>
    <script src="{{ asset('script/mixitup.js') }}"></script>
    <script src="{{ asset('script/accordions.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('script/custom.js') }}"></script>

    <!-- Script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <!-- <script src="../Script/dashboard.js"></script> -->
    <script src="https://use.fontawesome.com/00909f12c6.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../Script/datatable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" language="javascript" >
        $(document).ready(function() {
            $('#list_siswa').DataTable({
                "aLengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]],
                "iDisplayLength": 5
            });
        });
    </script>
</body>
</html>
