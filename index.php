<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Loundry</title>
    <!-- CSS -->
    <link rel="icon" type="image/png" href="assets/img/logo_title.png" />

    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <?php include 'css_all.php' ?>
    <link rel="stylesheet" href="index.css">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="70">    
    <div class="d-flex flex-column">
        <?php include 'navbar.php'; ?>
        <!-- Header-->
        <header id="beranda" class="bg-animate-color py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10" style="padding-top:100px;">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-shadow-new text-white mb-2">Pakaian Anda Layak Mendapat Perawatan Terbaik dengan Loundry</h1>
                            <p class="lead text-white text-shadow-new mb-4">Rasakan Kualitas Laundry Terbaik dan Layanan Pelanggan yang Luar Biasa</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3 shadow animate__animated animate__fadeInUp animate__faster" href="login/masuk.php" id="loginBtn">Mulai</a>
                                <a class="btn btn-purple btn-lg px-4 shadow animate__animated animate__fadeInUp animate__fast" href="#layanan">Layanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- TENTANG -->
        <section id="tentang">
            <<div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-sm-start text-lg-center my-5 pt-5">
                            <h2>Tentang</h2>
                            <p>Loundry didirikan pada tahun [tahun] dengan tujuan untuk memberikan solusi laundry yang praktis dan terpercaya bagi masyarakat. Sejak berdiri, kami telah menjadi salah satu layanan laundry terkemuka di Jakarta. Kami memiliki fasilitas canggih dan tim profesional yang siap memberikan layanan terbaik untuk kebutuhan laundry Anda.</p>
                            <h3>Visi Kami</h3>
                            <p>Menghadirkan layanan laundry yang berkualitas tinggi dan terpercaya bagi pelanggan di seluruh Indonesia.</p>
                            
                            <h3>Misi Kami</h3>
                            <ul class="text-start">
                                <li>Menyediakan layanan laundry yang efisien dan berkualitas tinggi.</li>
                                <li>Memberikan kenyamanan bagi pelanggan dengan sistem pengambilan dan pengantaran yang cepat.</li>
                                <li>Mengutamakan kepuasan pelanggan melalui pelayanan yang ramah dan profesional.</li>
                                <li>Menjaga lingkungan dengan menggunakan produk ramah lingkungan dalam proses laundry.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LAYANAN -->
        <section id="layanan">
            <div class="container-fluid py-5 bg-purple">
                <div class="row justify-content-center text-center">
                    <h2 class="text-light mb-lg-5" style="margin-top:50px">Layanan</h2>
                    <div class="row gap-lg-5 gap-sm-3 justify-content-center mt-sm-4 mt-lg-0">
                        <div class="card col-lg-3 col-sm-8 col-md-4 shadow-lg" style="padding:0;">
                            <img src="img/setrika.jpg" class="card-img-top" alt="Setrika">
                            <div class="card-body">
                                <h5 class="card-title">Cuci Setrika</h5>
                                <p class="card-text">Kami menawarkan layanan cuci setrika yang memastikan pakaian Anda tidak hanya bersih, tetapi juga rapi dan siap untuk dipakai.</p>
                            </div>
                        </div>
                        <div class="card col-lg-3 col-sm-8 col-md-4 shadow-lg " style="padding:0;">
                            <img src="img/cuci_sepatu.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cuci Sepatu</h5>
                                <p class="card-text">Layanan cuci sepatu kami dirancang untuk menjaga sepatu Anda tetap bersih dan segar, dari bahan kulit hingga kanvas.</p>
                            </div>
                        </div>
                        <div class="card col-lg-3 col-sm-8 col-md-4 shadow-lg " style="padding:0;">
                            <img src="img/laundry.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cuci Kering</h5>
                                <p class="card-text">Layanan cuci kering kami menggunakan mesin cuci dan pengering modern untuk memastikan pakaian Anda bersih dan siap pakai dalam waktu singkat.</p>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!-- HARGA -->
        <section id="harga" class="py-5">
            <div class="container pt-lg-5">
                <div class="text-center mb-5 pt-lg-5">
                    <h2 class="fw-bolder">Paket Laundry Kami</h2>
                    <p class="lead mb-0">Pilih paket yang sesuai dengan kebutuhan Anda dan nikmati layanan terbaik dari kami.</p>
                </div>
                <div class="row justify-content-center">
                    <!-- Paket Basic -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <h3 class="pricing-title">Basic</h3>
                                <p class="display-4 fw-bold">Rp50.000</p>
                                <p class="text-muted">per bulan</p>
                            </div>
                            <div class="pricing-body">
                                <ul class="benefit-list">
                                    <li><i class="fas fa-check-circle"></i> 5 Kg cucian</li>
                                    <li><i class="fas fa-check-circle"></i> Cuci dan Lipat</li>
                                    <li><i class="fas fa-check-circle"></i> Pengambilan dan Pengiriman</li>
                                    <li><i class="fas fa-check-circle"></i> 24/7 Customer Support</li>
                                </ul>
                                <div class="text-center">
                                    <button class="btn btn-choose-plan">Pilih Paket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paket Standard -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <h3 class="pricing-title">Standard</h3>
                                <p class="display-4 fw-bold">Rp100.000</p>
                                <p class="text-muted">per bulan</p>
                            </div>
                            <div class="pricing-body">
                                <ul class="benefit-list">
                                    <li><i class="fas fa-check-circle"></i> 10 Kg cucian</li>
                                    <li><i class="fas fa-check-circle"></i> Cuci dan Setrika</li>
                                    <li><i class="fas fa-check-circle"></i> Pengambilan dan Pengiriman</li>
                                    <li><i class="fas fa-check-circle"></i> 24/7 Customer Support</li>
                                </ul>
                                <div class="text-center">
                                    <button class="btn btn-choose-plan">Pilih Paket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paket Premium -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <h3 class="pricing-title">Premium</h3>
                                <p class="display-4 fw-bold">Rp200.000</p>
                                <p class="text-muted">per bulan</p>
                            </div>
                            <div class="pricing-body">
                                <ul class="benefit-list">
                                    <li><i class="fas fa-check-circle"></i> 20 Kg cucian</li>
                                    <li><i class="fas fa-check-circle"></i> Cuci dan Setrika</li>
                                    <li><i class="fas fa-check-circle"></i> Pengambilan dan Pengiriman</li>
                                    <li><i class="fas fa-check-circle"></i> 24/7 Customer Support</li>
                                    <li><i class="fas fa-check-circle"></i> Pengeringan Ekstra Cepat</li>
                                </ul>
                                <div class="text-center">
                                    <button class="btn btn-choose-plan">Pilih Paket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'kontak.php'; ?>
    </div>
</body>
    <?php include 'js_all.php'?>
    <script src="function.js"></script>
</html>