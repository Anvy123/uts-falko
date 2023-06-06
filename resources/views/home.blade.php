{{-- @extends('layout.app')
@section('content')
    <h2>{{ $pageTitle }}</h2>
    
@endsection --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Anvy - Store</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    @vite('resources/css/styles.css')
</head>

<body id="page-top">
    
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Anvy Store.</h1>
                <h2 class="masthead-subheading mb-0">selamat datang selamat berbelanja</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="{{ route('barang.index') }}">Lets GO</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ Vite::asset('resources/images/falko.jpg') }}" alt="..." />
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Its ME!</h2>
                        <p>Hi Everyone, saya Mohammad Falko Fahlevi bisa dipanggil Falko asal saya dari Surabaya lahir pada 6 Mei 2003.
                            Bertempat tinggal di JL Ngagel Tama No 85. 
                            Saya saat ini duduk di bangku semester 4 Sistem Informasi di ITTelkom Surabaya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ Vite::asset('resources/images/valo.jpg') }}" alt="..." />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Valorant</h2>
                        <p>Anvy Store telah bekerja sama dengan Riot Games untuk menawarkan top up VALORANT Points yang mudah, aman, dan nyaman. 
                            Beli VALORANT Points hanya dalam hitungan detik! Cukup masukkan Nick Name dan VALORANT Points tersebut akan langsung masuk ke akun VALORANT Kamu..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ Vite::asset('resources/images/ml.jpg') }}" alt="..." />
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Mobile Legends</h2>
                        <p>Anvy Store telah bekerja sama dengan Moonton untuk menawarkan top up Mobile Legends dengan mudah, aman dan nyaman. 
                            Top up ML Diamond hanya dalam hitungan detik! Cukup masukan User ID MLBB Andadan Diamond akan secara langsung ditambahkan ke akun Mobile Legends Anda..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5">
            <p class="m-0 text-center text-white small">Copyright &copy; Anvy - Store 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
