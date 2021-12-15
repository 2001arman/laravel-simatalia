<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo_small.png" type="image/x-icon">
    <title>Profile</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        @include('navbar')
        <!-- akhir Navbar -->
    </header>
    
    <!-- jumbotron -->
    <section class="container-fluid row p-5 m-0">
        <h1 class="p-0 fw-bold mb-3">Profile</h1>
        <div class="col-12 p-0">
            <p class="url pb-3"><span class="text-secondary">Si Mata Lia ></span> <span class="text-danger">Profile</span>
            </p>
            <div class="mb-5 publikasi-cards">
                <a class="card text-center px-1 px-lg-3 py-5 list-group-item-action" href="/profile/deskripsi">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                            <span class="material-icons fs-1 color-primary">sort</span>
                        </div>
                        <h6 class="card-title">Deskripsi</h6>
                    </div>
                </a>
                <a class="card text-center px-1 px-lg-3 py-5 list-group-item-action" href="/profile/struktur-pemerintahan">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                            <span class="material-icons fs-1 color-primary">groups</span>
                        </div>
                        <h6 class="card-title">Struktur Pemerintahan</h6>
                    </div>
                </a>
                <a class="card text-center px-1 px-lg-3 py-5 list-group-item-action" href="/profile/visi-misi">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                            <span class="material-icons fs-1 color-primary">lightbulb</span>
                        </div>
                        <h6 class="card-title">Visi Misi</h6>
                    </div>
                </a>
                <a class="card text-center px-1 px-lg-3 py-5  list-group-item-action" href="/profile/geografis">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex icon-round align-items-center justify-content-center align-self-center">
                            <span class="material-icons fs-1 color-primary">place</span>
                        </div>
                        <h6 class="card-title">Letak Geografis</h6>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- akhir jumbotron -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
</body>

</html>