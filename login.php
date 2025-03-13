<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry | Masuk</title>
    <link rel="icon" href="assets/img/logo_title.png">
    <?php include 'css_all.php' ?>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.2/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" id="bg-card" style="border-radius: 1rem;">
                        <div class="card-body p-2 text-center">
                            <div class="mx-5">
                                <img src="assets/img/logo_title.png" alt="logo_Laundry" id="gambarLogin">
                                <h2 class="fw-bold mb-4 text-uppercase">Login</h2>
                                <form action="cek_login.php" method="post">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="username" id="typeUsernameX" class="form-control form-control-lg text-center fs-6" placeholder="Masukkan Username" required />
                                        <div class="invalid-feedback">Masukkan Username yang valid</div>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg text-center fs-6" placeholder="Masukkan Password" required />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5 mb-4" type="submit">Masuk</button>
                                </form>

                                <?php if (isset($_GET['message'])) : ?>
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Login Gagal',
                                            text: '<?= $_GET['message']; ?>'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // Hapus parameter error dari URL
                                                const url = new URL(window.location.href);
                                                url.searchParams.delete('message');
                                                window.history.replaceState(null, null, url.toString());
                                            }
                                        });
                                    </script>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'js_all.php' ?>
</body>

</html>
