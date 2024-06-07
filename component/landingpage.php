<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/licon.png" type="image/x-icon">
    <title>WJ GARAGE</title>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="banner">
        <div class="banner-content">
            <h1 class="display-4">Selamat Datang di WJ Garage</h1>
            <p class="lead">Layanan Perawatan dan Perbaikan Kendaraan Terbaik di Kota Anda</p>
            <a href="profil.php" class="btn  btn-lg btnlanjut">Pelajari Lebih Lanjut</a>
        </div>
    </div>
    <div class="service mt-5">
        <div class="container">
            <div class="flex-4-column">
                <div class="flex-col">
                    <a href="/contact-us" class="">
                        <div class="items">
                            <img data-src="https://cmspwa.nasmoco.co.id/images/icon/01.png"
                                class="img-fluid icon lazyloaded" src="https://cmspwa.nasmoco.co.id/images/icon/01.png">
                            <p class="section-description-md">CUSTOMER SERVICE</p>
                        </div>
                    </a>
                </div>
                <div class="flex-col">
                    <a href="/compare-car" class="">
                        <div class="items">
                            <img data-src="https://cmspwa.nasmoco.co.id/images/icon/02.png"
                                class="img-fluid icon lazyloaded" src="https://cmspwa.nasmoco.co.id/images/icon/02.png">
                            <p class="section-description-md">HOME SERVICE</p>
                        </div>
                    </a>
                </div>
                <div class="flex-col">
                    <a href="/credit-simulation" class="">
                        <div class="items">
                            <img data-src="https://cmspwa.nasmoco.co.id/images/icon/03.png"
                                class="img-fluid icon lazyloaded" src="https://cmspwa.nasmoco.co.id/images/icon/03.png">
                            <p class="section-description-md">CREDIT SIMULATION</p>
                        </div>
                    </a>
                </div>
                <div class="flex-col">
                    <a href="/booking-service" class="">
                        <div class="items">
                            <img data-src="https://cmspwa.nasmoco.co.id/images/icon/04.png"
                                class="img-fluid icon lazyloaded" src="https://cmspwa.nasmoco.co.id/images/icon/04.png">
                            <p class="section-description-md">BOOKING SERVICE</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section id="articles" class="py-5">
        <div class="container">
            <h2 class="text-center">Artikel Layanan Mobil</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://blog.carro.id/wp-content/uploads/2020/09/Foto-oli.jpg" class="card-img-top1 "
                            alt="Servis Mobil">
                        <div class="card-body">
                            <h5 class="card-titles">Servis Mobil: Komponen Apa Saja yang Perlu Diganti?</h5>
                            <p class="card-texts">Dalam merawat mobil, penting untuk mengetahui komponen apa saja
                                yang perlu diganti secara berkala untuk memastikan performa kendaraan tetap optimal.
                            </p>
                            <a href="https://carro.id/blog/berita/servis-mobil-komponen-apa-saja-yang-perlu-diganti/4642/"
                                class="btn btnartikel" target="_blank">Baca Selengkapnya</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.hyundai.com/content/dam/hyundai/id/id/images/local/Hyundai_Service_Ac_Mobil_utaamaaaaaaaaaaaa.jpg"
                            class="card-img-top1" alt="Servis Mobil">
                        <div class="card-body">
                            <h5 class="card-titles">Pentingnya Service AC Mobil dan Langkah-Langkahnya</h5>
                            <p class="card-texts">Ketika musim panas tiba dan suhu udara melonjak, sebuah sistem
                                pendinginan yang efisien dalam mobil Anda menjadi lebih penting dari sebelumnya.
                            </p>
                            <a href="https://www.hyundai.com/id/en/hyundai-story/articles/pentingnya-service-ac-mobil-dan-langkah-langkahnya-0000000449"
                                class="btn btnartikel" target="_blank">Baca Selengkapnya</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.hondasurabayacenter.com/sites/www.hondasurabayacenter.com/files/2021-09/Ban%201.jpg"
                            class="card-img-top1" alt="Servis Mobil">
                        <div class="card-body">
                            <h5 class="card-titles">Nekat Pakai Ban Botak, Apa Saja Risikonya?</h5>
                            <p class="card-texts">Selain sebagai faktor penunjang kenyamanan berkendara, ban mobil
                                juga menjadi salah satu faktor terpenting dalam keamanan saat berkendara.
                            </p>
                            <a href="https://www.hondasurabayacenter.com/tips-trick/nekat-pakai-ban-botak-apa-saja-risikonya"
                                class="btn btnartikel" target="_blank">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div>
    </div>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>